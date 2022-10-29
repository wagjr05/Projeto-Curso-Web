<div class="containner">
    <section class="title__buttons">
        <h1>Usuários <small>edição</small></h1>

        <?= $this->Html->link(__('Listagem'), ['controller' => 'Users', 'action' => 'index']); ?>
    </section>
    
    <?= $this->Form->create($user); ?>
        <?= $this->Flash->render(); ?>

        <?= $this->Form->control('name', ['label' => false, 'placeholder'=>'Nome']); ?>

        <?= $this->Form->control('email', ['label' => false, 'placeholder' =>'Email' ]); ?>

        <?= $this->Form->control('username', ['label' => false, 'placeholder'=>'Usuário']); ?>

        <?= $this->Form->control('password', ['label' => false, 'placeholder'=>'Senha']); ?>

        <?= $this->Form->button(__('cadastrar', ['class' => 'button__add'])); ?>
        <?= $this->Form->end(); ?>

    
</div>
