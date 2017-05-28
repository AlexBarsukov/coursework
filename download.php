<?php
// if (isset($_GET['file']) and preg_match("/^document[a-zA-Z0-9_]{0,50}\.doc$/",$_GET['file']) and file_exists($_GET['file'])) {
//   $content = file_get_contents($_GET['file']);
//   header('Content-Type: '.$ctype.'; charset=utf-8');
//   header("Content-Disposition: attachment; filename=".$_GET['file']);
//   ob_end_clean();
//   ob_start();
//   echo $content;
//   ob_end_flush();
//   exit();
// } else {
//   echo "Файл не найден.";
//   exit();
// }

    if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = 'files/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'The file does not exist.';
    }
}
?> 
