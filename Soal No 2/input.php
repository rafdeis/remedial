<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<?php
// if (isset($_POST['submit'])) {
//   # code...
//   $img_name=$_FILES['image']['name'];
//   $tmp_img_name=$_FILES['image']['tmp_name'];
//   move_uploaded_file($tmp_img_name,$img_name);
// }

?>
<body>
    <form action="hasil.php" method="post"  enctype='multipart/form-data'>
      <fieldset>
        <legend>Your Review:</legend><br>
        <input type="file" name="image">Yes
        <button type="submit" name="submit" value="Submit">Submit Review</button>
      </fieldset>
    </form>

</body>
</html>