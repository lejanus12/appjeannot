<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type= "text/css" href="style.css">

</head>
<body>
    <div>
    <h1>
    Get in touch
    </h1>
    <p>please fill in the field</p>

    <form action="contact.php" method="post">
    <input type="text" name="name" placeholder="Full name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="subject" placeholder="Subject">
    <br><br>
    <textarea name="message" placeholder= "enter message" ></textarea>
    <br><br>

    <button type ="submit"> SEND EMAIL</button>
    </form>
    
    </div>
</body>
</html>