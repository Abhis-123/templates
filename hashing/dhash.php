<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $i= "Abhis@9911";
        echo "Abhis@9911";
        echo "<br>";
   $D= password_hash('Abhis@9911',PASSWORD_BCRYPT);
  /// echo $D;
  // echo '<br>$2y$10$Wm.ujblWY8KLqxBEfL8Qyeh9zE3ntDKnVW7dsGPgvwn8VZAj0sg9e';
     echo password_verify($i,$D);



    ?>
</body>
</html>