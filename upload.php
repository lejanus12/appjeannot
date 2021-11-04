<?php

echo "check avant isseet"."<br>";
print_r($_FILES['file'] );


// if (isset($_POST['submit'])){

    echo $_FILES['file']['tmp_name']." = FILE TEMP NAME"."<br>";
    echo $_FILES['file']['name']." = FILE NAME"."<br>";
    echo $_FILES['file']['size']." = FILE SIZE"."<br>";
    echo $_FILES['file']['error']." = FILE ERROR "."<br>";

    echo $tempname = $_FILES['file']['tmp_name'];
    echo $name = $_FILES['file']['name'];
    echo $size = $_FILES['file']['size'];
    echo $error = $_FILES['file']['error'];

    echo "<br>"."<br>"."<br>";

    if (isset($_POST['submit'])){
        echo " VRAI "."<br>";
    } else{
        echo "FAUX "."<br>";
    }
    
// echo(upload_max_filesize());
// php_ini_loaded_file()

    //  header("Location: file.php");

    if ($error*1==0){

        $newFileName= uniqid('').$name;
        $destinationFile= "uploads/".$newFileName;

        // echo $newFileName."<br>";
        echo $destinationFile."<br>"."<br>";

        if (move_uploaded_file($tempname,$destinationFile)){
            echo " UPLOAD OK "."<br>";
        } else{
            echo " UPLOAD NOK "."<br>";
        }

        // move_uploaded_file($tempname,$destinationFile);

        // header("Location: file.php?successulupload");


    }

    // }

?>