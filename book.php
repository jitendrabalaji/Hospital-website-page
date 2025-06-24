<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $conn = new mysqli('localhost', 'root','', 'book');
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into bookapp(firstName, lastName, address, phone)
            values(?, ?, ?, ?)");
        $stmt->bind_param("sssi",$firstName, $lastName, $address, $phone);
        $stmt->execute();
        header("Location: index.html");
        exit();
        $stmt->close();
        $conn->close();
    }

?>