<?php include 'variable-ita.php' ?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <title><?php echo $title2 ?> <?php echo $title3 ?></title>
        <?php include 'css/style.php' ?>

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
        <?php include 'component/navbar.php' ?>
        <?php include 'component/top.php' ?>
        <div class="container">
            <?php include 'main-menu/main-menu-xs-index.php' ?>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <h3  id="set9-1" class="well well-sm " style="background-color:#556B2F; color: #ffffff; margin-bottom: 20px"><?php echo $header_name1 ?></h3>
                    <div class="panel-group" id="kpruita">
                        <?php include 'ita-data/ita-01-data-noactive.php' ?>
                        <?php include 'ita-data/ita-02-data-noactive.php' ?>
                        <?php include 'ita-data/ita-03-data-noactive.php' ?>
                        <?php include 'ita-data/ita-04-data-noactive.php' ?>
                        <?php include 'ita-data/ita-05-data-noactive.php' ?>
                        <?php include 'ita-data/ita-06-data-noactive.php' ?>
                        <?php include 'ita-data/ita-07-data-noactive.php' ?>
                        <?php include 'ita-data/ita-08-data-noactive.php' ?>
                        <?php include 'ita-data/ita-09-data-noactive.php' ?>
                        <?php include 'ita-data/ita-10-data-noactive.php' ?>
                        <?php include 'ita-data/ita-11-data-noactive.php' ?>
                        <?php include 'ita-data/ita-12-data-noactive.php' ?>
                        <?php include 'ita-data/ita-13-data-noactive.php' ?>
                        <?php include 'ita-data/ita-14-data-noactive.php' ?>
                        <?php include 'ita-data/ita-15-data-noactive.php' ?>
                        <?php include 'ita-data/ita-16-data-noactive.php' ?>
                        <?php include 'ita-data/ita-17-data-noactive.php' ?>
                        <?php include 'ita-data/ita-18-data-noactive.php' ?>
                        <?php include 'ita-data/ita-19-data-noactive.php' ?>
                        <?php include 'ita-data/ita-20-data-noactive.php' ?>
                        <?php include 'ita-data/ita-21-data-noactive.php' ?>       
                        <?php include 'ita-data/ita-22-data-noactive.php' ?>
                    </div>                    
                </div>
                <?php include 'main-menu/main-menu-right.php' ?>
            </div>
        </div>          
    </body>
</html>
