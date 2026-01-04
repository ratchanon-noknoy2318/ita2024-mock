<?php $active14 = "active"; ?>
<?php include 'variable-ita.php' ?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <title><?php echo $title2 ?> <?php echo $title3 ?></title>
        <?php include '../css/styleksp.php' ?>

        <style>
            body {
                position: relative;
            }
            .affix {
                top: 20px;
                z-index: 9999 !important;
            }
            @media screen and (max-width: 1170px) {
                #section1, #section2, #section3, #section41, #section42  {
                    margin-left: 0px;
                }
            }
        </style>

    </head>
    <body>
        <?php include '../component/navbar.php' ?>
        <?php include '../component/topksp.php' ?>
        <div class="container">
            <?php include '../main-menu/main-menu-xs-index.php' ?>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <h3  id="set9-1" class="well well-sm " style="background-color:#556B2F; color: #ffffff"><?php echo $header_name2 ?></h3>
                    <div class="panel-group" id="kspita">
                        <?php include '../ita-data/ita-14-data.php' ?>
                    </div>
                </div>
                <?php include '../main-menu/main-menu.php' ?>
            </div>
        </div>
    </body>
</html>