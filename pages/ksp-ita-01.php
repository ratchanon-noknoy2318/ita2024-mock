<?php $active1 = "active"; ?>
<?php include 'variable-ita.php' ?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <title><?php echo $title2 ?> <?php echo $title3 ?></title>
        <?php include '../css/styleksp.php' ?>
    </head>
    <body>
        <?php include '../component/navbar.php' ?>
        <?php include '../component/topksp.php' ?>
        <div class="container">
            <?php include '../main-menu/main-menu-xs-index.php' ?>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <h3  id="set9-1" class="well well-sm well-ksp"><?php echo $header_name1 ?></h3>
                    <div class="panel-group" id="kspita">
                        <?php include '../ita-data/ita-01-data.php' ?>
                    </div>
                </div>
                <?php include '../main-menu/main-menu.php' ?>
            </div>
        </div>
    </body>
</html>