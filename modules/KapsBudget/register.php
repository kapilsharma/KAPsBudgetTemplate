<?PHP require_once "../../config.php" ?>
<!DOCTYPE html>
<html>
<?PHP include $config['base_path'] . "parts/head.php"; ?>
    <body class="skin-blue">
        <?PHP include $config['base_path'] . "parts/header.php"; ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?PHP include $config['base_path'] . "parts/sidebar.php"; ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <?PHP include $config['base_path'] . "parts/content-header.php"; ?>

                <!-- Main content -->
                <section class="content">
                    <?PHP include $config['base_path'] . "parts/pages/register_contents.php"; ?>                    
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <?PHP include $config['base_path'] . "parts/footerjs.php"; ?>
    </body>
</html>