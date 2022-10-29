<div class="containner">
    <section class="title__buttons">
        <h1>Usuários <small>listagem</small></h1>

        <?= $this->Html->link(__('Cadastrar'), ['controller' => 'Users', 'action' => 'add']); ?>
    </section>

    <table>
        <thead>
            <th>#</th>
            <th><?= $this->Paginator->sort('id', ['Nome']) ?></th>
            <th>E-mail</th>
            <th>Usuário</th>
            <th>Data de criação</th>
            <th></th>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->created->format('d/m/Y')) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja apagar o usuário {0} ??', $user->name)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->element('pagination') ?>
</div>
