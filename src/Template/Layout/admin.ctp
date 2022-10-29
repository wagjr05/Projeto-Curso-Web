<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso | Extensão</title>

    <?= $this->Html->css(["admin"]) ?>

    <?= $this->fetch('css') ?>
</head>
<body>
    <?= $this->element('header'); ?>

    <main>
        <?= $this->fetch('content') ?>
    </main>
</body>
</html>
