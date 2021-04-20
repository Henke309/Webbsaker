<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="yo.css">
</head>
<body>
<?php
    if(isset($_POST['username'])){
        echo "<h1>".$_POST['username']."</h1>"; 
        if(isset($_GET['stuff'])) echo "<h2>".$_GET['stuff']."</h2>";
    }
?>

    <form name="frmForm" id="frmForm" action="slutinl.php" method="POST">
        <input type="text" name="username id="txtField placeholder="Användarnamn">
        <input type="text" name="userpword id="txtField placeholder="Lösenord">
        <button type="submit" name="btnsubmit" id="btnSubmit">Logga In</button>
    </form>

</body>
</html>