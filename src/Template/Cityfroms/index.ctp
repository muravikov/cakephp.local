<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cityfrom[]|\Cake\Collection\CollectionInterface $cityfroms
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cityfrom'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Distances'), ['controller' => 'Distances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Distance'), ['controller' => 'Distances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cityfroms index large-9 medium-8 columns content">
    <h3><?= __('Cityfroms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ru_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ru_region') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cityfroms as $cityfrom): ?>
            <tr>
                <td><?= $this->Number->format($cityfrom->id) ?></td>
                <td><?= h($cityfrom->name) ?></td>
                <td><?= h($cityfrom->ru_name) ?></td>
                <td><?= h($cityfrom->ru_region) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cityfrom->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cityfrom->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cityfrom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cityfrom->id)]) ?>
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
