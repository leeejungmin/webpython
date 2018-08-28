<?php
if(isset($_POST['submit'])){
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];


  // $fileName = $file['name'];
  // $fileTmpName = $file['tmp_name'];
  // $fileSize = $file['size'];
  // $fileError = $file['error'];
  // $fileType = $file['type'];
/// checking without ..
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');
// check if it is allowed of type which is contained in array
  // if (in_array($fileActualExt, $allowed)){
  //     if($fileError ===0){
  //       if($fileSize< 10000000){
          $fileNameNew = uniqid('',true).".".$fileActualExt;
          $fileDestination = 'uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName,$fileDestination);
          header("Location: upload.php?uploadsuccess");}
  //       }else{
  //         echo " your file is too big";
  //       }
  //     } else{
  //   echo "there was an error uploading your file";
  // }}else{
  //   echo "you cannot upload files of this type";
  // };
// why there is no
?>
