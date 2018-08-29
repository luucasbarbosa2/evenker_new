<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

<div class="events form large-9 medium-8 columns content">
    <div class="ui raised segment">
        <?= $this->Form->create($event) ?>
        <fieldset>
            <legend><?= __('Add Event') ?></legend>
            <?php
                            echo $this->Form->control('name');
                echo $this->Form->control('description');
                echo $this->Form->control('date', ['empty' => true]);
                echo $this->Form->control('photo');
                echo $this->Form->control('cover');
                    ?>
                    <a href = "/<?=$this->request->getParam('prefix')?>/events">
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
