<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="upper">
        <div class="logo"><?=$logoName?></div>
        <div class="subtext"><?=$subText?></div>
    </div>
    <div class="main"><?=listEx("Mr")?>
    <br>
    <?php
    $randomText="820922-6634 Karl.Otto Mengelman Katolik Tidigare straffad för grovt vapenbrott";
        $krypt= new Crypy();
        $showText=$krypt->enc($randomText);
        echo $randomText."<br>";
        echo $showText."<br>";
        echo $krypt->dec($showText);
    ?>
    
    </div>
</body>
</html>