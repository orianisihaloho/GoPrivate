<?php
    function checkUser($_username, $_password)
    {
        global $dbhandle;
        
        $query = "SELECT * FROM users WHERE username = '$_username' AND password = '$_password'";
        
        $check = mysqli_query($dbhandle, $query); 
        
        $user = mysqli_fetch_array($check); 
        
        if(mysqli_num_rows($check) == 1)
        {
            if($user['username'] == $_username && $user['password'] == $_password)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    function sendMail($id, $to_id, $subject, $message)
    {
        global $dbhandle;
        
        // insert to mails
        $query = "INSERT INTO mails(from_user_id, to_user_id, subject, message) VALUES('$id', '$to_id', '$subject', '$message')";
        
        $insert = mysqli_query($dbhandle, $query);
        
        return $insert;
    }
    
    function selectMail($id_mail)
    {
        global $dbhandle;
        
        // select mail
        $query = "SELECT mails.id, users.username, mails.subject, mails.message FROM mails LEFT JOIN users ON mails.from_user_id = users.id WHERE mails.id = '$id_mail'";
        $mail = mysqli_query($dbhandle, $query);
        
        return $mail;
    }
    
    function getUserId($username, $password)
    {
        global $dbhandle;
        
        $query = "SELECT id FROM users WHERE username='$username' && password='$password'";
        $query_run = mysqli_query($dbhandle, $query);
        $fetched_id = mysqli_fetch_array($query_run);
        
        // Get the id
        $id = $fetched_id['id'];
        
        return $id;
    }
?>
