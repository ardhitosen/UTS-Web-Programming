<?php

if(isset($_POST['ijazah'])){
    $filename = $_POST['ijazah'];
}else{
    $filename = $_POST['akteLahir'];
}
  
header("Content-type: application/pdf");
  
header("Content-Length: " . filesize($filename));
  
// Send the file to the browser.
readfile($filename);
?> 