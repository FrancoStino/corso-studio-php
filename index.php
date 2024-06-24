<?php

// Array superglobale $_FILES
// echo $_SERVER['DOCUMENT_ROOT'];
if (isset($_POST['submit'])) {
  $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

  $tmpFile = $_FILES['fileToUpload']['tmp_name'];


  move_uploaded_file($tmpFile, $uploadPath . $_FILES['fileToUpload']['name']);
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>
  </body>

</html>