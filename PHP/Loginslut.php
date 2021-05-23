<?php session_start(); //Gotta have dis to start session, othervise we can't make own session variables ?>
<!DOCTYPE html>
    <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="shoppinglist";
        $conn=mysqli_connect($host,$user,$pass,$db) or die("Couldn't connect!");
        if(isset($_POST['btnLogin'])){
            $userName=$_POST['userName']; //Gotta make variable for the SQL
            $password=$_POST['password'];
            $strQuery="SELECT * FROM listuser WHERE userName='$userName' AND password='$password';";  
            if($result=mysqli_query($conn,$strQuery)){ //Was it possible to question the database for this?
                if(!mysqli_num_rows($result)==1){   //It was, now check if it didn't was just one row
                   echo "Inte inloggad!";
                   //Now reset all session variables:
                   $_SESSION['userid']="";
                   $_SESSION['level']="";
                   $_SESSION['name']="";                   
                }else{  //You made it! you are authorized!
                    $raden=mysqli_fetch_assoc($result);   //Get the row with data
                    echo "Välkommen ".strtoupper($raden['userName']); //use this to print name
                    //Now set all our session variables. You could have secret names for these session variables 
                    $_SESSION['userid']=$raden['userID'];
                    $_SESSION['level']=$raden['userLevel'];
                    $_SESSION['name']=$raden['userName'];
                    //$skrivutvariabeln=$_SESSION['name'];
                    echo "<br><div class='showname'>Inloggad som ".strtoupper($_SESSION['name'])."</div><br>";
                    header("Location:slutp2.php");
                    if(intval($_SESSION['level'])>419){
                        echo "Welcome, Admin!";
                    }
                }
                ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
 </head>
<body>
    <div class="content">
    <!-- If someone tries to log in -->
<?php
            }else{
                echo "Oh, noo!<br>Anyway...";
            }   
        }else{  //else Show form   ?>
        <div class="formbox">
            <form action="Loginslut.php" method="post" id="frmLogin">
                <input type="text" name="userName" id="userName" placeholder="Username" required autocomplete="off">
                <input type="password" name="password" id="password" placeholder="Password" required autocomplete="off">
                <input type="submit" name="btnLogin" id="btnLogin" value="Login">
            </form>
        </div>
        <?php }?>
    </div>   
</body>
</html>