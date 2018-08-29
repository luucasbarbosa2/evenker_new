<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

<div class="products form large-9 medium-8 columns content">
    <div class="ui raised segment">
        <?= $this->Form->create($product) ?>
        <fieldset>
            <legend><?= __('Add Product') ?></legend>
            <?php
                            echo $this->Form->control('name');
                echo $this->Form->control('description');
?>
                <label>status_id </label>
                <div class="ui fluid search selection dropdown">
                    <?php    
                    if ($this->request->getParam('pass')) {
                    echo "<input type='hidden' name='status_id' value = '" . $this->request->getParam("pass")[0] . "'>";
                                 } else {
                                 echo '<input type="hidden" name="status_id">';
                    }
                     ?>
                    <i class="dropdown icon"></i>
                    <div class="default text">Select status_id</div>
                    <div class="menu">
                        <?php foreach ($statuses as $i){ 
                        $i = (object) $i;
                        $name = $i->id;
                        if($i->name){
                        $name = $i->name;
                        }
                        ?>
                        <div class="item" data-value="<?= $i->id?>"><?=$name?></div>
                        <?php }?>
                    </div>
                </div>
                <br>
                <?php
                //echo $this->Form->control('status_id', ['options' => $statuses, 'empty' => true]);
                    ?>
                    <a href = "/<?=$this->request->getParam('prefix')?>/products">
                        <button type="button" class="ui labeled icon button inverted negative">
                            <i class="left arrow icon"></i>
                            <?=__('Cancel')?>
                        </button>
                    </a>
                    <button type = "submit" class="ui labeled icon button inverted positive">
                        <i class="save outline icon"></i>
                        <?=__('Save')?>
                    </button>
                </fieldset>

            </div>
        </div>
