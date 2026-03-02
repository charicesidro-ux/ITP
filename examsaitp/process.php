<?php
// process.php – handle submission

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // Redirect to success page with all info
    header("Location: success.php?firstname=".urlencode($firstname)."&lastname=".urlencode($lastname)."&age=".urlencode($age)."&email=".urlencode($email)."&course=".urlencode($course));
    exit();
} else {
    // If someone directly visits process.php without form submission
    header("Location: form.php");
    exit();
}
?>