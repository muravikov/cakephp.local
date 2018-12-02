<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cityfrom $cityfrom
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cityfrom'), ['action' => 'edit', $cityfrom->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cityfrom'), ['action' => 'delete', $cityfrom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cityfrom->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cityfroms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cityfrom'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Distances'), ['controller' => 'Distances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Distance'), ['controller' => 'Distances', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cityfroms view large-9 medium-8 columns content">
    <h3><?= h($cityfrom->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($cityfrom->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ru Name') ?></th>
            <td><?= h($cityfrom->ru_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ru Region') ?></th>
            <td><?= h($cityfrom->ru_region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cityfrom->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Distances') ?></h4>
        <?php if (!empty($cityfrom->distances)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cityfrom Id') ?></th>
                <th scope="col"><?= __('Cityto Id') ?></th>
                <th scope="col"><?= __('Distance') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cityfrom->distances as $distances): ?>
            <tr>
                <td><?= h($distances->id) ?></td>
                <td><?= h($distances->cityfrom_id) ?></td>
                <td><?= h($distances->cityto_id) ?></td>
                <td><?= h($distances->distance) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Distances', 'action' => 'view', $distances->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Distances', 'action' => 'edit', $distances->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Distances', 'action' => 'delete', $distances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $distances->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
