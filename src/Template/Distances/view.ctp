<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Distance $distance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Distance'), ['action' => 'edit', $distance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Distance'), ['action' => 'delete', $distance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $distance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Distances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Distance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cityfroms'), ['controller' => 'Cityfroms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cityfrom'), ['controller' => 'Cityfroms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Citytos'), ['controller' => 'Citytos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cityto'), ['controller' => 'Citytos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="distances view large-9 medium-8 columns content">
    <h3><?= h($distance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cityfrom') ?></th>
            <td><?= $distance->has('cityfrom') ? $this->Html->link($distance->cityfrom->name, ['controller' => 'Cityfroms', 'action' => 'view', $distance->cityfrom->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cityto') ?></th>
            <td><?= $distance->has('cityto') ? $this->Html->link($distance->cityto->name, ['controller' => 'Citytos', 'action' => 'view', $distance->cityto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($distance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distance') ?></th>
            <td><?= $this->Number->format($distance->distance) ?></td>
        </tr>
    </table>
</div>
