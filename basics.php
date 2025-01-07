<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $hour=date("H");
      if($hour < 12){
        echo "good mor";
      }
      else if($hour < 18){
        echo "good mor";
      }
    
      else{
        echo "good evening";
      }

    
    ?>
<hr>
      <?php
      $rasmakan=["1.png","2.png","3.png"];

      foreach($rasmakan as $rasm){
          echo "<img src=".$rasm.">";
      }
      ?>
<hr>
      <?php 
      $arr=[
          ["name" => "ali", "role"=>"admin"],
          ["name"=> "sara", "role"=>"manager"],
          ["name"=> "aya", "role"=>"guide"],
      ];
      foreach($arr as $a){
          echo "<p>".$a["name"]." " .$a["role"]."</p>";
      }
      ?>


</body>
</html>
