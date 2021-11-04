<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE FORM</title>
</head>
<body>
    <?php

    // echo $_FILES['file']['name']." = FILE NAME"."<br>";
    // echo $_FILES['file']['type']." = FILE TYPE"."<br>";
    // echo $_FILES['file']['tmp_name']." = FILE TEMP NAME"."<br>";
    // echo $_FILES['file']['size']." = FILE SIZE "."<br>";
    // echo $_FILES['file']['error']." = FILE ERROR"."<br>";
    
    ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        
        <input type="file" name="file">
        <button type="submit">SUBMIT</button>
    
    
    </form>
</body>
</html>