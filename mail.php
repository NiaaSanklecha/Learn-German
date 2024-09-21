<?php 
if(isset($_POST['submit'])){
    $to = "contact@easygermanschool.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $request = $_POST['request'];

    $formcontent = "Name: $name \n   Phone: $number \n  Email: $from \n  Course Type: $subject \n   Request: $request";
    $subject = "Quote Form";
    $mailheader = "From: $from \r\n";
    if (mail($to,$subject,$formcontent,$mailheader) )
    {
        echo '<script language="javascript">';
    echo 'alert("Thank you for Contacting Us.")';
    echo '</script>';
    header("Location: http://easygermanschool.com/index.html?success=1");
    }
    else
    {
        echo "Error: Message not accepted";
    }
    exit;

}
    
?>