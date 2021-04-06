<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ///$var="Henrik";
        ///echo "Hello $var!";
    if(isset($_POST['txtInput'])){
        echo $_POST['txtInput']
    }else{
        echo "Ingen data..."
    }
    ?>
    <form method="post" action="ny.php">
        <input type="text" name="txtInput" id="txtInput" placeholder="Skriv vad du vill!" required autocomplete="off">
        <button type="submit" name="btnSubmit" value=".">Tryck</button>
</body>
</html>