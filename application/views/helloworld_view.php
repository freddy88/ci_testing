<html>  
    <head>  
        <title><?=$page_title?></title>  
    </head>  
    <body>  
        <?php foreach($result as $row):?>
		<h2><?=$row->id?></h2>
        <h3><?=$row->title?></h3>  
        <p><?=$row->text?></p>  
        <br />  
        <?php endforeach;?>  
    </body>  
</html> 