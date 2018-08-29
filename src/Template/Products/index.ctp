<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index large-9 medium-8 columns content">
        <div class="ui raised segment back-all">
        <h3><?= __('Products') ?></h3>
        <div class="ui segment">
            <a href = "/<?=$this->request->params['prefix']?>/products/add">
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
                <th scope="col">status_id</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= h($product->description) ?></td>
                <td><?= $product->has('status') ? $this->Html->link($product->status->name, ['controller' => 'Statuses', 'action' => 'view', $product->status->id]) : '' ?></td>
                            <td class="actions">
                                <?php $product = (object) $product;?>
                                <a href ="/<?= $this->request->params['prefix'] ?>/products/edit/<?= $product->id ?>"><i class="material-icons icons-mvc-actions">edit</i></a>
                                <a href ="/<?= $this->request->params['prefix'] ?>/products/delete/<?= $product->id ?>"><i class="material-icons icons-mvc-actions">delete_forever</i></a>
                            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        </div>
</div>
</div>
