<header>
    <h3>Extensão</h3>

    <nav class="nav__header">
        <ul>
            <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']); ?></li>
            <li><?= $this->Html->link(__('Meu perfil'), ['controller' => 'Users', 'action' => 'profile']); ?></li>
            <li><?= $this->Html->link(__('Sair'), ['controller' => 'Users', 'action' => 'logout']); ?></li>
        </ul>
    </nav>
</header>
