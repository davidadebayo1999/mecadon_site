<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sub Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Main Categories'), ['controller' => 'MainCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Main Category'), ['controller' => 'MainCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subCategories index large-9 medium-8 columns content">
    <h3><?= __('Sub Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoryname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subCategories as $subCategory): ?>
            <tr>
                <td><?= $this->Number->format($subCategory->id) ?></td>
                <td><?= h($subCategory->categoryname) ?></td>
                <td><?= h($subCategory->category_logo) ?></td>
                <td><?= $subCategory->has('main_category') ? $this->Html->link($subCategory->main_category->id, ['controller' => 'MainCategories', 'action' => 'view', $subCategory->main_category->id]) : '' ?></td>
                <td><?= h($subCategory->created) ?></td>
                <td><?= h($subCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
