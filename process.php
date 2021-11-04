<?php

    $dest_file = "uploads/file.txt";
    $ecriture = "super c'est Jeannot";
    $methode = "w";

file_put_contents(
    $dest_file,
    $ecriture
);


// $fichier = fopen("file.txt","w");
// isTrue($fichier);

// $letexte = "jean";
// fwrite($fichier,$letexte);
// echo $fichier;



    // isTrue( isset($_POST['submit']) );

    // if (isset($_POST['submit'])){

    //     isTrue(fwrite("uploads/file.txt","a"));

    //     var_dump( 
    //         fopen("uploads/file.txt","w")
    //     );
        
        
    //     $text = "my age is ".$_POST['age']."\n"."<br>";
    //     echo $text."<br>";
        
        
    //     $myfile = file_put_contents("uploads/file.txt","acool",FILE_APPEND);
    //     // isTrue(fwrite($myfile,$text));

    //     fclose($myfile);
    // }



    function isTrue($arg){
        if ($arg){
            echo "VRAI"."<br>"."<br>";
        }else{
            echo "FAUX"."<br>"."<br>";
        }
    }
    
?>