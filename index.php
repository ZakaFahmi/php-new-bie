<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <h2>daftar absensi mahasiswa</h2>
    <ol>
     <!--ini adalah perintah untuk membuat list-->
    <?php 
    for ($i=1; $i <=10; $i++){
        echo"<li>nama mahasiswa ke -$i </li>"
    }
    ?>
    </ol>
</body>
</html>
