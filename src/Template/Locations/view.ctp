<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locations view large-9 medium-8 columns content">
    <h3><?= h($location->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($location->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($location->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instagram') ?></th>
            <td><?= h($location->instagram) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($location->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter') ?></th>
            <td><?= h($location->twitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($location->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($location->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($location->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PostalCode') ?></th>
            <td><?= h($location->postalCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($location->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ssid') ?></th>
            <td><?= h($location->ssid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($location->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($location->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($location->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($location->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($location->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($location->modified) ?></td>
        </tr>
    </table>
</div>
