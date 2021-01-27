<?php
 if (isset($_POST['submit'])){
   // include_once "createtable.php";
            $name= $_POST['name']; //test_input($_POST['name']);
            $lastname=$_POST['lastname'];//test_input($_POST['lastname']);
            $email=$_POST['email'];//test_input($_POST['email']);
            $m_number=$_POST['m-number'];//test_input($_POST['m-number']);
            $pass=$_POST['pass'];//test_input($_POST['pass']);
            // echo $pass,'<br>',$lastname,'<br>',$email,'<br>',$m_number,'<br>',$pass;
      if (empty($name)|| empty($email)|| empty($m_number)|| empty($pass)|| empty($lastname)) {
           echo '<script>alert("you left something empty")</script>';
                # code...
                header("Location: register.php?success=empty");
                exit();
        }       
         else {  

          //  echo "qawsedrftgyuhjk";
                $a=$b=$c=$d=null;
                if (preg_match(" /^[a-zA-Z ]*$/",$name)) {
                    // $nameErr = "Only letters and white space allowed";
                    $a=$name; 
                    echo "<br>".$a;
                }

               if (preg_match(" /^[a-zA-Z ]*$/",$lastname)) {
                    // $nameErr = "Only letters and white space allowed";
                    $b=$lastname;
                    echo "<br>".$b;
                }
               if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        //$emailErr = "Invalid email format";
                    $c=$email;
                    echo "<br>".$c;
                    }
               if (validate_phone($m_number)) {
                        $d=$m_number;
                        echo "<br>".$d;
                    }
              if ($a==null||$b==null||$c==null||$d==null) {
                      
                      header("location: register.php?success=error&name=$a&lastname=$b&email=$c&m_number=$d");  
                    }

                else {
                    echo '<br>you successfullly registered';
                   }

            }
        }   
    else {

       // echo 'enter';
      //  echo $_POST['submit'];
            header("Location: register.php?success=error");
            
    }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  function validate_phone($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     }
       return true;
       
    }


?>