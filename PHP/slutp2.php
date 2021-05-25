<!DOCTYPE html>
<?php
    //------------------------------Connect to database
    $host="localhost";
    $user="root";
    $pass="";
    $db ="shoppinglist";
    $conn=mysqli_connect($host, $user, $pass, $db);
    //------------------------------------------------

    //--------------------------------If FORM is sent, 
    //---take data from textbox and put it in database
    if(isset($_POST['btnSubmit'])){
        $txtText=$_POST['txtInput'];
        $sql="INSERT INTO `listtext`(`text`) VALUES ('$txtText')";
        $result=mysqli_query($conn, $sql);
    }
    //-----------------------------------------------
    
    if(isset($_GET['del'])){
        $delid=$_GET["del"];
        $sql="DELETE FROM `listtext` WHERE TextID=$delid";
        $result=mysqli_query($conn, $sql);
    }

    if(isset($_POST['btnEditSubmit'])){
        $editid=$_POST['TextID'];
        $texten=$_POST['txtEditInput'];
        $sql="UPDATE `listtext` SET `text`='$texten' WHERE TextID=$editid";
        $result=mysqli_query($conn, $sql);
    }

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP-magic</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php  if(isset($_GET['edit'])){ 
        $editid=$_GET["edit"];
        $sql="SELECT * FROM `listtext` WHERE TextID=$editid";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
    ?>
    <form method="post" action="slutp2.php">
        <input type="text" name="txtEditInput" id="txtEditInput" value="<?=$row['text'];?>" required autocomplete="off">
        <input type="hidden" name="TextID" value="<?=$row['TextID']?>">
        <button type="submit" name="btnEditSubmit" value=".">Ändra!</button>
    </form>
<?php }else{ ?>    
    <form method="post" action="slutp2.php">
        <input type="text" name="txtInput" id="txtInput" placeholder="Skriv vad du vill!" required autocomplete="off">
        <button type="submit" name="btnSubmit" value=".">Tryck!</button>
    </form>
<?php } ?>    
    <div class="ruta">
    <?php 
        //-------------------Get all data from table, and print its
        $sql="SELECT * FROM listtext";
        $result=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_assoc($result)){
            echo $row['text']."&nbsp;<a href='slutp2.php?del=".$row['TextID']."'>X</a><a href='slutp2.php?edit=".$row['TextID']."'>/</a><br>";
        }
        //--------------------------------------------------------
    ?>
    </div>
</body>
</html>