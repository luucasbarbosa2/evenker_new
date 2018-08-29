


<!DOCTYPE html>
<html lang="en">

    <?= $this->element('Ui_elements/header'); ?>
    <body id="layouts-horizontal">
        <?= $this->element('Ui_elements/loader') ?>

        <div id="main">
            <div class="wrapper">
                <section id="content">
                    <div class="container">
                        <div class="section">
                            <?= $this->Flash->render() ?>

                            <?= $this->fetch('content') ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<?= $this->element('Ui_elements/footer') ?>
    </body>
</html>
