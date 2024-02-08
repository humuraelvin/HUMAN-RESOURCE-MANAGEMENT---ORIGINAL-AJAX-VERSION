<?php



session_start();

$host = "localhost";

$user = "root";

$password = "";

$db = "companyproject";

$data = mysqli_connect($host, $user, $password, $db);


if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
    
    $name = $_POST['username'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '".$name."' AND password = '".$password."' ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if ($row['usertype']=="admin") {

        $_SESSION['username'] = $name;

        header("location:index.php");
    }

    else{

        
        $message =  "Acess Denied (Username or password mismatch)";

        $_SESSION['loginMessage'] = $message;

        header("location:login.php");
    }

}

?>