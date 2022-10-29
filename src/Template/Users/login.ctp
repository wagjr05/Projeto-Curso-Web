<main>
    <section class="allows">
        <h1>Login</h1>

        <?= $this->Form->create('post'); ?>
        <?= $this->Flash->render(); ?>

        <label>Usuário</label>
        <?= $this->Form->control('username', ['label' => false]); ?>

        <label>Senha</label>
        <?= $this->Form->control('password', ['label' => false]); ?>

        <?= $this->Form->button(__('Acessar')) ?>
        <?= $this->Form->end(); ?>

        <p>Não possui cadastro? <?= $this->Html->link(__('Criar conta'), ['controller' => 'Users', 'action' => 'register']); ?></p>
    </section>
</main>

<?= $this->element('footer'); ?>
