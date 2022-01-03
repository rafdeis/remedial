<?php
// Get the image and convert into string
include_once "koneksi.php";
  if($_POST['submit']){
      $nama = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];	
      move_uploaded_file($file_tmp, $nama);
      $query = mysqli_query($koneksi,"INSERT INTO upload(img_name) VALUES('$nama')");
      if($query){
        echo 'FILE BERHASIL DI UPLOAD <br>';
    }else{
        echo 'GAGAL MENGUPLOAD GAMBAR <br>';
    }
  }
  
$img = mysqli_query($koneksi,"SELECT img_name FROM upload ORDER BY id DESC LIMIT 1");
$d = mysqli_fetch_array($img);
$s = file_get_contents($d['img_name']);
      
    // Encode the image string data into base64
    $data = base64_encode($s);
    $src = 'data:'.mime_content_type($d['img_name']).';base64,'.$data;
    // Display the output
    echo "silahkan copy code berikut <br>";
    echo "<textarea id='w3review' name='w3review' rows='10' cols='50'>".$src."</textarea> <br>";
    echo "<a href='bagus.php'>Kembali</a> <br>";
    echo "<img src=".$d['img_name']." alt='hello' width='500' height='600'>";