<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <?php
    
    // if(isset($_POST)){
    //     echo $_POST['name'] . ", le boutton a fonctionne sans soucis et je sais egalement que tu as " . $_POST['age'];
    // }
    
    // echo "<br><br>";
    // print_r($_POST);
    
    ?>

    <form action="get.php" method="get">

    <input type="text" name="name">

    <input type="text" name="age">

    <button type="submit">SUBMBIT</button>
    
    
    </form>
</body>
</html>