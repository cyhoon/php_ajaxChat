<?php

    include "./dbconn.php";

    $name = $_POST['writer'];
    $content = $_POST['content'];

    $sql = "INSERT INTO cha2t (`name`,`msg`,`date`) VALUES (?,?,now());";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$content);
    if($stmt->execute()) { // success -> true , false -> false 
        echo json_encode("success");
    }else{
        echo json_encode("error");
    }

?>