<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="locations form large-9 medium-8 columns content">
    <?= $this->Form->create($location) ?>
    <fieldset>
        <legend><?= __('Add Location') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('website');
            echo $this->Form->control('instagram');
            echo $this->Form->control('facebook');
            echo $this->Form->control('twitter');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('postalCode');
            echo $this->Form->control('phone');
            echo $this->Form->control('ssid');
            echo $this->Form->control('password');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
