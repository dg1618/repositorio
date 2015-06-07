<html>
    <head>
        <title><?=$page_title?></title>
    </head>
    <body>

        <?php foreach($todo as $row):?>
        <h3><?=$row->title?></h3>
        <p><?=$row->text?></p>
        //////////////
        <br />
        <?php endforeach;?>
    </body>
</html>