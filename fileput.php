<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_POST['age'])){

    $age = $_POST['age'];
    
    echo $age;
    // fopen("uploads/file.txt");

    file_put_contents("uploads/file.txt",$age);

}

?>

</body>

<form action="fileput.php" method="post">
    <input type="text" name="age">
    <input type="submit" name="submit">
</form>
</html>