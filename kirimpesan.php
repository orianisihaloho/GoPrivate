<?php
     include 'autoload.php';
    if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
    {
        redirect_to('index.php');
    }
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DaftarGuru</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    
    <style>
      nav{
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
      }

     li {
        float: right;
      }

      li a {
        display: inline-block;
        color: gray;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        letter-spacing: 1.5px;
      }

      li a:hover {
         color: black;
         text-decoration: none;
    }
    a{
        color: gray;
        text-decoration: none;
        list-style-type: none;
    }
    .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
    }
    .panel:hover {
        box-shadow: 5px 0px 40px rgba(0,0,0, .2);
    }
    .panel-footer .btn:hover {
        border: 1px solid #f4511e;
        background-color: #fff !important;
        color: #f4511e;
    }
    .panel-heading {
        color: #fff !important;
        background-color: #f4511e !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }
    .panel-footer {
        background-color: white !important;
    }
    .panel-footer h3 {
        font-size: 32px;
    }
    .panel-footer h4 {
        color: #aaa;
        font-size: 14px;
    }
    .panel-footer .btn {
        margin: 15px 0;
        background-color: #f4511e;
        color: #fff;
    }

    </style>
</head>
<body>
    <!-- navigasi -->
    <nav style="padding-top: 5px;background-color: lavender; letter-spacing: 2px;>
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><h3><b>GoPrivate</b></h3></a>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">SignUp</a></li>
        <li style="padding-top: 5px; padding-right: 10px;padding-bottom: 5px;">
          <input style="float:right;" type="button" class="btn btn- btn-md" value="cari" style="text-decoration: none">
          <input style="float:right;" class="form-control" type="search" placeholder="search" required="" style ="text-decoration: none">
        </li>
      </nav><br><br>
  <div class="container-fluid">
    <div class="cl-sm-12"><center>
    <from action="kirimpesan_proses.php?id=<?php echo $id; ?>" method="POST">
      <table>
        <tr>
          <td>Kepada</td>
          <td>:</td>
          <td>
            <input type="text" id="to" class="form-control" name="to" placeholder="example@mail.com">
          </td>
        </tr>
        <tr>
          <td>Subject</td>
          <td>:</td>
          <td>
            <input type="text" id="subject" class="form-control" name="subject" placeholder="subject">
          </td>
        </tr>
        <tr>
          <td></td>
          <td colspan="2">
            <center><textarea class="form-control" style="float: left;" rows="6" id="comment"></textarea></center>
          </td>
        </tr>
        <tr>
        <td colspan="2"><button type="button" class="btn btn- btn-md" name="kirim">Kirim</button></from>
      </center>
        </td>
        </tr>
      </table><br>
      
    </div>
  </div>
</body>
</html>