<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root','', 'test');
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullName, email, password)
            values(?, ?, ?)");
        $stmt->bind_param("sss",$fullName, $email, $password);
        $stmt->execute();
        header("Location: login.html");
        exit();
        $stmt->close();
        $conn->close();
    }

?>
