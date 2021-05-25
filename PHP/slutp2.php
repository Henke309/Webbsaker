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
        $sql="INSERT INTO `listtext`(`Text`) VALUES ('$txtText')";
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
        $sql="UPDATE `listtext` SET `Text`='$texten' WHERE TextID=$editid";
        $result=mysqli_query($conn, $sql);
    }

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP-magic</title>
    <link rel="stylesheet" href="sluttest.css">
</head>
<body>
<?php  if(isset($_GET['edit'])){ 
        $editid=$_GET["edit"];
        $sql="SELECT * FROM `listtext` WHERE TextID=$editid";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
    ?>
    <form method="post" action="slutp2.php">
        <input type="text" name="txtEditInput" id="txtEditInput" value="<?=$row['Text'];?>" required autocomplete="off">
        <input type="hidden" name="TextID" value="<?=$row['TextID']?>">
        <button type="submit" name="btnEditSubmit" value=".">Ändra!</button>
    </form>
<?php }else{ ?>    
    <form method="post" action="slutp2.php">
        <input type="text" name="txtInput" id="txtInput" placeholder="Skriv in en vara!" required autocomplete="off">
        <button type="submit" name="btnSubmit" value=".">Lägg till</button>
    </form>
<?php } ?>    
    <div class="ruta">
    <div class="rubrik">
    <h1>Köplista</h1>
    </div>
    
    <?php 
        //-------------------Get all data from table, and print its
        $sql="SELECT * FROM listtext";
        $result=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_assoc($result)){
            echo $row['Text']."&nbsp;<a href='slutp2.php?del=".$row['TextID']."'>Ta bort!</a><a href='slutp2.php?edit=".$row['TextID']."'>Ändra</a><br>";
        }
        //--------------------------------------------------------
    ?>
    </div>
</body>
</html>