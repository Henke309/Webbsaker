<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<h1>Hello World</h1>";
echo "<h2 style='text-align:center;'>Hello World </h2>";

if ("Boll"=="Gurka"){
	echo "Nej!";
}else{
	echo "Boll har aldrig varit lika med gruka! SLUTA!";
}

function myFunc($param='Stig'){
	switch($param){
      case "Stig":
        $result="Security hazard";
        break;
      case "Admin":
        $result="Welcome almighty!";
        break;
      default:
        $result="No data";      
    }
  return $result;
}

echo myFunc("Admin");

?>

<?="hej"?>

<ul>
<?php
  for($vdo=1;$vdo<11;$vdo++){
  	echo "<li>rad $vdo</li>";
  }
?>
<ul>
  
 
    <?php
    /*
    echo "<h1>Hello World</h1>";
    echo "<h2 style='text-align:center;'>Hello World </h2>";

    if ("Boll"=="Gurka"){
      echo "Nej!";
    }else{
      echo "Boll har aldrig varit lika med gruka! SLUTA!";
    }

    function myFunc($param='Stig'){
      $result= match($param){
        "Admin" =>"Welcome superuser", 
        "Stig","stig", "Stickan" =>"Gå hem och kamma din katt!",
        default => "No data"   
      };
      return $result;
    }

    echo "<br>".myFunc()."<br>";

    ?>
    <br>
    <?=myFunc("Stickan")?>
    <br>


    <?=
      /*
      "hej"
      */
    ?>
    
    <!-- Kommentera i HTML -->

    <ul>
    <?php
    /*
      for($vdo=1;$vdo<11;$vdo++){
        echo "<li>rad $vdo</li>";
      }
    ?>
    <ul>
    */
</body>
</html>