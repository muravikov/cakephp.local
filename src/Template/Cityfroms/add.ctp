<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cityfrom $cityfrom
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cityfroms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Distances'), ['controller' => 'Distances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Distance'), ['controller' => 'Distances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cityfroms form large-9 medium-8 columns content">
    <?= $this->Form->create($cityfrom) ?>
    <fieldset>
        <legend><?= __('Add Cityfrom') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('ru_name');
            echo $this->Form->control('ru_region');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
