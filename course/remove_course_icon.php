<?php
if(isset($_GET['path'])){
    if(file_exists($_GET['path'])){
        unlink($_GET['path']);
        echo "Path: {$_GET['path']} => File: ".basename($_GET['path']) . " DELETED<br>";

        require_once '../connection.php';
        $sql = "UPDATE course set cse_image = null where cse_id = {$_GET['cse_id']}";
        if(mysqli_query($conn, $sql)){
            echo "Deleted";
        }else{

        }
    }else{
        echo "File does not exists";
    }

}
header("location:{$_SERVER['HTTP_REFERER']}");

?>