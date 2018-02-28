<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mainCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mainCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Main Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mainCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($mainCategory) ?>
    <fieldset>
        <legend><?= __('Edit Main Category') ?></legend>
        <?php
            echo $this->Form->input('categoryname');
            echo $this->Form->input('category_logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
