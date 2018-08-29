


<!DOCTYPE html>
<html lang="en">

    <?= $this->element('Ui_elements/header'); ?>
    <body id="layouts-horizontal">
        <!-- Start Page Loading -->
        <?= $this->element('Ui_elements/loader') ?>
        <!-- End Page Loading -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START HEADER -->



        <?php
        if ($this->request->getParam('prefix') == 'admin') {
            echo $this->element('Ui_elements/top_menu_admin');
        }else{
            
        }
        ?>
        <!-- END HEADER -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START MAIN -->
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">
                <!-- START LEFT SIDEBAR NAV-->

                <!-- END LEFT SIDEBAR NAV-->
                <!-- //////////////////////////////////////////////////////////////////////////// -->
                <!-- START CONTENT -->
                <section id="content">

                    <div class="container">
                        <div class="section">

<?= $this->Flash->render() ?>

<?= $this->fetch('content') ?>
                        </div>
                        <!-- Floating Action Button -->

                        <!-- Floating Action Button -->
                    </div>
                    <!--end container-->
                </section>
                <!-- END CONTENT -->
                <!-- //////////////////////////////////////////////////////////////////////////// -->
                <!-- START RIGHT SIDEBAR NAV-->
<?= $this->element('Ui_elements/right_sidebar') ?>
                <!-- END RIGHT SIDEBAR NAV-->
            </div>
            <!-- END WRAPPER -->
        </div>
        <!-- END MAIN -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START FOOTER -->
<?= $this->element('Ui_elements/footer') ?>
    </body>
</html>