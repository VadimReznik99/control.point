<?php
//if($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $sender = $_POST['sender'];
//    $email = $_POST['email'];
//    $message = $_POST['message'];
//
//    echo $sender."<br />".$email."<br />".$message."<br />";
//}
//


if (!empty($data) ) {
var_dump($data);
    foreach ($data as $val) {
        echo $val["sender"] . '<br/>';
        echo $val["email"] . '<br/>';
        echo $val["message"] . '<br/>';
        echo '<hr/>';
    }
}
?>

<form action='/guest-book' method="POST" enctype="multipart/form-data">

    <label>Name:</label>
    <input type="text" name="sender" />
    <br/>
    <br/>
    <label>Email:</label>
    <input type="text" name="email" />
    <br/>
    <br/>
    <label>Message:</label>
    <textarea name="message"></textarea>
    <br/>
    <br/>
    <input type="submit" value="SEND">

</form>

