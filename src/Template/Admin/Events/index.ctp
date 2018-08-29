<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="events index large-9 medium-8 columns content">
        <div class="ui raised segment back-all">
        <h3><?= __('Products') ?></h3>
        <div class="ui segment">
            <a href = "/<?=$this->request->params['prefix']?>/events/add">
                <button class="ui labeled icon button inverted positive">
                    <i class="plus icon"></i>
                    <?=__('New')?>
                </button>
            </a>
        </div>

        <div class="ui raised segment">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">date</th>
                <th scope="col">photo</th>
                <th scope="col">cover</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= h($event->name) ?></td>
                <td><?= h($event->description) ?></td>
                <td><?= h($event->date) ?></td>
                <td><?= h($event->photo) ?></td>
                <td><?= h($event->cover) ?></td>
                            <td class="actions">
                                <?php $event = (object) $event;?>
                                <a href ="/<?= $this->request->params['prefix'] ?>/events/edit/<?= $event->id ?>"><i class="material-icons icons-mvc-actions">edit</i></a>
                                <a href ="/<?= $this->request->params['prefix'] ?>/events/delete/<?= $event->id ?>"><i class="material-icons icons-mvc-actions">delete_forever</i></a>
                            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        </div>
</div>
</div>
