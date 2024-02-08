<?php

require "dbcon.php";

$response = array('success' => false);


if (isset($_POST)) {
    parse_str(file_get_contents("php://input"), $_POST);

    $name = $_POST['name'];
    $idNum = $_POST['idNum'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO jobapplicants(name, idNum, email, phone, gender) VALUES ('$name', $idNum, '$email', $phone, '$gender') ";

    $result = mysqli_query($connection, $sql);

    if ($connection -> query($sql) ) {
        
        $response['success'] = true; 

    }

}

echo json_encode($response);


?>
