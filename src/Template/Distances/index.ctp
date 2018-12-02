<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Distance[]|\Cake\Collection\CollectionInterface $distances
 */
?>
<?= $this->Html->script('jquery-3.3.1.min.js'); ?>


<?= $this->Form->Create('',['type'=>'get']) ?>
    <?= $this->Form->Control('name_from',[
        'value' => __(isset($cityfrom->name)?$cityfrom->name:'')
    ]); ?>
    <?= $this->Form->Control('name_to',[
        'value' => __(isset($cityto->name)?$cityto->name:'')
    ]); ?>
    <button>Поиск</button>
<?= $this->Form->End() ?>


<?php
    if(isset($distance->distance)){
        ?>
    <div>
        <?= __($cityfrom->name) ?>
        <br>
        <?= __($cityfrom->ru_name) ?>
        <br>
        <?= __($cityfrom->ru_region) ?>
    </div>
    <div>
        <?= __($distance->distance) ?>km
    </div>
    <div>
        <?= __($cityto->name) ?>
        <br>
        <?= __($cityto->ru_name) ?>
        <br>
        <?= __($cityto->ru_region) ?>
    </div>
    <?php
}
    ?>
