<?php
    include 'autoload.php';
    
    $id = $_GET['id'];
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message =  $_POST ['message'];
    
    // get 'to' i
    $query_to = "SELECT id from users WHERE username='$to'";
    
    $to = mysqli_query($dbhandle, $query_to);
    
    $fetched_id = mysqli_fetch_array($to);
    $to_id = $fetched_id['id'];
    
    $send = sendMail($id, $to_id, $subject, addslashes($message));
    //echo("".$id, $to_id, $subject, $message);
    //echo "$id, $to_id, $subject, $message";
    
    if($send)
    {
        echo 'mail has been sent.<br>';
        create_anchor('index.php', 'index');
    }
    else
    {
        echo 'invalid recepient.<br>';
        create_anchor('.php?id='.$id, 're-compose');
    }
?>
