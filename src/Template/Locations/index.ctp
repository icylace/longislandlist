<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locations index large-9 medium-8 columns content">
    <h3><?= __('Locations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instagram') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facebook') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twitter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postalCode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ssid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locations as $location): ?>
            <tr>
                <td><?= $this->Number->format($location->id) ?></td>
                <td><?= h($location->name) ?></td>
                <td><?= h($location->website) ?></td>
                <td><?= h($location->instagram) ?></td>
                <td><?= h($location->facebook) ?></td>
                <td><?= h($location->twitter) ?></td>
                <td><?= h($location->address) ?></td>
                <td><?= h($location->city) ?></td>
                <td><?= h($location->state) ?></td>
                <td><?= h($location->postalCode) ?></td>
                <td><?= h($location->phone) ?></td>
                <td><?= h($location->ssid) ?></td>
                <td><?= h($location->password) ?></td>
                <td><?= $this->Number->format($location->latitude) ?></td>
                <td><?= $this->Number->format($location->longitude) ?></td>
                <td><?= h($location->created) ?></td>
                <td><?= h($location->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $location->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?>
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
