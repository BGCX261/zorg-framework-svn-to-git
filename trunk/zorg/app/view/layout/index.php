<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo Zorg::getApp()->name; ?></title>
        <?php echo $zorgStylesheet; ?>
        <?php echo $zorgScript; ?>
    </head>
    <body>
        <?php
        echo $zorgContent;
        ?>
    </body>
</html>
