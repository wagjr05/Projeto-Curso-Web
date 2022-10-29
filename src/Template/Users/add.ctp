<div class="containner">
    <section class="title__buttons">
        <h1>Usuários <small>cadastro</small></h1>

        <?= $this->Html->link(__('Listagem'), ['controller' => 'Users', 'action' => 'index']); ?>
    </section>

    <?= $this->Form->create($user) ?>
    <?= $this->Flash->render(); ?>

    <label>Nome completo</label>
    <?= $this->Form->control('name', ['label' => false]); ?>

    <label>E-mail</label>
    <?= $this->Form->control('email', ['label' => false]); ?>

    <label>Usuário</label>
    <?= $this->Form->control('username', ['label' => false]); ?>

    <label>Senha</label>
    <?= $this->Form->control('password', ['label' => false]); ?>

    <label>Confirmação de senha</label>
    <?= $this->Form->control('password', ['label' => false, 'type' => 'password']); ?>

    <?= $this->Form->button(__('Cadastrar'), ['class' => 'button__add']) ?>
    <?= $this->Form->end(); ?>
</div>
