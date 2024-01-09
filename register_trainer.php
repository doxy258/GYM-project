<?php 

require_once 'config.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
   
    $sql = "INSERT INTO trainers (first_name, last_name, email, phone_number) VALUES (?, ?, ?, ?)";


    $run = $conn->prepare($sql);
    $run->bind_param("ssss", $first_name, $last_name, $email, $phone_number);
    $run->execute();

    $_SESSION['success_message'] = 'Trener uspešno dodat.';
    header('location: admin_dashboard.php');
    exit();

}
else {
  
    echo 'Invalid input data.';
}

function isValidName($name) {
return (bool) ctype_alpha($name);
}

function isValidEmail($email) {
return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isValidPhoneNumber($phone_number) {
return (bool) ctype_digit($phone_number);
}

?>