<main>
    <section class="allows">
        <h1>Cadastro</h1>

        <?= $this->Form->create($user); ?>
        <?= $this->Flash->render(); ?>

        <?= $this->Form->control('name', ['label' => false, 'placeholder'=>'Nome']); ?>

        <?= $this->Form->control('email', ['label' => false, 'placeholder' =>'Email' ]); ?>

        <?= $this->Form->control('username', ['label' => false, 'placeholder'=>'Usuário']); ?>

        <?= $this->Form->control('password', ['label' => false, 'placeholder'=>'Senha']); ?>

        <?= $this->Form->button(__('cadastrar', ['class' => 'button__add'])); ?>
        <?= $this->Form->end(); ?>

        <p>Já possui conta? <?= $this->Html->link(__('Acessar'), ['controller' => 'Users', 'action' => 'login']); ?></p>
    </section>
</main>

<?= $this->element('footer'); ?>
