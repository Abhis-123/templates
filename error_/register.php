<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.mainpage{
        background-color: 
        position: absolute;
        margin-top:10%;
        margin-left:30%;
        width:530px;
        height:300px;
        padding: 20px;
     

}
.input{
    width:500px;
    height:20px;
    margin:5px;
    background-color:
}


</style>
<body>
<div class="mainpage">  
    <form action="signup.php" method="POST">
     <?php  
    if(isset($_GET['name'])){
            $first=$_GET['name'];
            echo '<div>Name: &nbsp &nbsp &nbsp &nbsp &nbsp<input class="input name" type="text" name="name" placeholder="name"  value="'.$first.'" ></div>';
            
            }
    else{
         echo '<div>Name: &nbsp &nbsp &nbsp &nbsp &nbsp<input  class="input name" type="text" name="name" placeholder="name"  ></div>';
        
        }
    if(isset($_GET['lastname'])){
            $first=$_GET['lastname'];
            echo '<div>Lastname:  &nbsp &nbsp  <input  class="input lastname" type="text" value="'.$first.'" name="lastname" placeholder="lastname"  > </div>';
            
        }
    else{
       echo '<div>Lastname: &nbsp &nbsp  <input class="input lastname" type="text" name="lastname" placeholder="lastname"  > </div>';
        
        }
    if(isset($_GET['email'])){
            $first=$_GET['email'];
            echo '<div>E-mail: &nbsp &nbsp &nbsp &nbsp  <input  class="input email" type="text" value="'.$first.'" name="email" placeholder="email"  > </div>';
            
        }
    else{
        echo '<div>E-mail: &nbsp &nbsp &nbsp &nbsp  <input  class="input email" type="text" name="email" placeholder="email"  > </div>';
        
        }
    if(isset($_GET['m_number'])){
            $first=$_GET['m_number'];
            echo  '<div>M-Number: &nbsp<input type="text" class="input m-number" name="m-number"  value="'.$first.'" placeholder="Mobile-Number" ></div>';

        }
    else{
        echo  '<div>M-Number: &nbsp<input type="text" name="m-number" class="input m-number" placeholder="Mobile-Number" ></div>';
        
        }
    
    ?>
        <div>Password: &nbsp  &nbsp
        <input type="password" name="pass" id="pass" class="input pass"  placeholder="password" >
        </div>       

        <div><button class="submit" name="submit" value="submit">submit</button></div>
</form>

<div>

<?php
if (isset($_GET['success'])) {
    # code...
    echo 'you did not entered details correctly';
}


?>
</body>
</html>