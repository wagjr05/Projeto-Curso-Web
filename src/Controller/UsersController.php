<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Exception;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Permite acessar o método sem efetuar autenticação
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['logout', 'register', 'login']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        try {
            $this->paginate = ['limit' => 10];
            $users = $this->paginate($this->Users);
            $this->set(compact('users'));

        } catch(Exception $ex) {
            $this->Flash->error(__('ERRO! Entre em contato com o administrador.'));
            return $this->redirect($this->referer());
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        try {
            $user = $this->Users->get($id);
            $this->set('user', $user);

        } catch(Exception $ex) {
            $this->Flash->error(__('ERRO! Entre em contato com o administrador.'));
            return $this->redirect($this->referer());
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        try {
            $user = $this->Users->newEntity();

            if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) {
                    $this->Flash->success(__('O usuário foi cadastrado com sucesso!'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O usuário não foi cadastrado! Tente novamente.'));
            }
            $this->set(compact('user'));

        } catch(Exception $ex) {
            $this->Flash->error(__('ERRO! Entre em contato com o administrador.'));
            return $this->redirect($this->referer());
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        try {
            $user = $this->Users->get($id);

            if ($this->request->is(['patch', 'post', 'put'])) {
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) {
                    $this->Flash->success(__('O usuário foi editado com sucesso!'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O usuário não foi editado! Tente novamente.'));
            }
            $this->set(compact('user'));

        } catch(Exception $ex) {
            $this->Flash->error(__('ERRO! Entre em contato com o administrador.'));
            return $this->redirect($this->referer());
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        try {
            $this->request->allowMethod(['post', 'delete']);
            $user = $this->Users->get($id);

            $this->Users->delete($user) ?
            $this->Flash->success(__('O usuário foi excluído com sucesso!')) :
            $this->Flash->error(__('O usuário não foi excluído! Tente novamente.'));

            return $this->redirect(['action' => 'index']);

        } catch(Exception $ex) {
            $this->Flash->error(__('ERRO! Entre em contato com o administrador.'));
            return $this->redirect($this->referer());
        }
    }

    /**
     * Efetua autenticação do sistema
     */
    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('ERRO! Usuário ou senha incorretos.'));
        }
    }

    /**
     * Cadastra um novo usuário para acessar o sistem
     */
    public function register() {
        try {
            $user = $this->Users->newEntity();

            if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) {
                    $this->Flash->success(__('A conta foi cadastrada com sucesso!'));
                    return $this->redirect(['action' => 'login']);
                }
                $this->Flash->error(__('A conta não foi cadastrada! Tente novamente.'));
            }
            $this->set(compact('user'));

        } catch(Exception $ex) {
            $this->Flash->error(__('ERRO! Entre em contato com o administrador.'));
            return $this->redirect($this->referer());
        }
    }

    /**
     * Efetua a saída do sistema
     */
    public function logout() {
        $this->Flash->success(__('Deslogado com sucesso!'));
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Exibe os dados do usuário logado
     */
    public function profile() {
        try {
            $id = $this->Auth->user('id');
            $user = $this->Users->get($id);
            $this->set(compact('user'));

        } catch(Exception $ex) {
            $this->Flash->error(__('ERRO! Entre em contato com o administrador.'));
            $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }
}
