<?php
    $paginator = $this->Paginator->setTemplates([
        'number' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
        'current' => '<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
        'first' => '<li class="page-item"><a href="{{url}}" class="page-link">&laquo</a></li>',
        'last' => '<li class="page-item"><a href="{{url}}" class="page-link">&raquo</a></li>'
    ]);
?>

<nav>
    <ul class="pagination">
        <?php
            echo $paginator->first();
            echo $paginator->numbers();
            echo $paginator->last();
        ?>
    </ul>
</nav>
