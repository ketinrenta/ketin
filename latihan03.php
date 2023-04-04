<?php
    $path = "upgambar";
    if(isset($_POST["uploadfile"])){
        
      if($_FILES["f1GAMBAR"]["error"]==0){
        $f1name = $path .basename($_FILES["f1GAMBAR"]["name"]);
        move_uploaded_file($_FILES["f1GAMBAR"]["tmp_name"],$f1name);
      }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>
<body>
    <form action="latihan03.php" method="POST" enctype="multipart/form-data">

        <div>
            upload gambar <br>
            <input type="file" name="f1GAMBAR">
        </div>
        <div>
            <input type="hidden" name="uploadfile" value="ok">
            <button type="submit">upload gambar</button>
        </div>
    </form>
    
</body>
</html>