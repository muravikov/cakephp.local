<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cityto $cityto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cityto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cityto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Citytos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Distances'), ['controller' => 'Distances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Distance'), ['controller' => 'Distances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="citytos form large-9 medium-8 columns content">
    <?= $this->Form->create($cityto) ?>
    <fieldset>
        <legend><?= __('Edit Cityto') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('ru_name');
            echo $this->Form->control('ru_region');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
