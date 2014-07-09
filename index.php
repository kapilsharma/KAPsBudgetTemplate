<!DOCTYPE html>
<html>
<?PHP include "parts/head.php"; ?>
    <body class="skin-blue">
        <?PHP include "parts/header.php"; ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?PHP include "parts/sidebar.php"; ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <?PHP include "parts/content-header.php"; ?>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <?PHP include "parts/widgets/quickview.php"; ?>

                    <!-- top row -->
                    <div class="row">
                        <div class="col-xs-12 connectedSortable">
                            
                        </div><!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            <?PHP include "parts/widgets/server-load.php"; ?>
                            <?PHP include "parts/widgets/sales.php"; ?>
                            <?PHP include "parts/widgets/calendar.php"; ?>
                            <?PHP include "parts/widgets/quick-mail.php"; ?>
                        </section><!-- /.Left col -->

                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-6 connectedSortable">
                            <?PHP include "parts/widgets/mapbox.php"; ?>
                            <?PHP include "parts/widgets/chatbox.php"; ?>
                            <?PHP include "parts/widgets/todo.php"; ?>

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?PHP include "parts/footerjs.php"; ?>
    </body>
</html>