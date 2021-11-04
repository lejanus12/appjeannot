<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    $fileDir2 =  __DIR__. DIRECTORY_SEPARATOR ."uploads". DIRECTORY_SEPARATOR ."newText.txt";

    echo $fileDir2."<br>";

    file_put_contents($fileDir2,"what is the fuck");
    echo "<br>";
        
    
    ?>
</body>
</html>