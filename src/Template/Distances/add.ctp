<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Distance $distance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Distances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cityfroms'), ['controller' => 'Cityfroms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cityfrom'), ['controller' => 'Cityfroms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Citytos'), ['controller' => 'Citytos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cityto'), ['controller' => 'Citytos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="distances form large-9 medium-8 columns content">
    <?= $this->Form->create($distance) ?>
    <fieldset>
        <legend><?= __('Add Distance') ?></legend>
        <?php
            echo $this->Form->control('cityfrom_id', ['options' => $cityfroms]);
            echo $this->Form->control('cityto_id', ['options' => $citytos]);
            echo $this->Form->control('distance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
