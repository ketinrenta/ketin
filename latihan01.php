<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from data</title>
</head>
<body>

<?php
   if(isset($_GET["txUSER"])){
      $usr = $_GET["txUSER"];
      if($usr==""){
        echo "<div style='color: red;padding:5px;'>user  name belum diisikan</div>";
    }
    
   }
   
  
?>
    <form action="latihan01.php" method="GET">
        <div>
            user name
            <input type="text" id="txUSER" name ="txUSER">
        </div>
        <div>
            password
            <input type="password" id="txPASKEY" name="txPASKEY">
        </div>
        <div>
            <button type="submit"> login </button>
            <a href="daftar.php"> Daftar</button>
        </div>

    </form>
</body>
</html>