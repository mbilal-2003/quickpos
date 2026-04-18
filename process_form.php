<?php
// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Validate empty fields
if(empty($name) || empty($email) || empty($message)) {
    echo "<script>
        alert('Please fill in all fields!');
        window.history.back();
    </script>";
    exit();
}

// Validate email format
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        alert('Please enter a valid email address!');
        window.history.back();
    </script>";
    exit();
}

// Success - redirect to thank you page
header('Location: thankyou.html');
exit();
?>