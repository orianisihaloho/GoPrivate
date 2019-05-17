<?php
  session_start();
  include_once('fungsi.php');
  open_page('signup');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booku</title>
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
        background-color: lavender;
         color: black;
    }

    a{
        color: gray;
        text-decoration: none;
        list-style-type: none;
    }
    </style>
</head>
<body>
      <!-- navigasi -->
    <nav style="padding-top: 5px;background-color: lavender; letter-spacing: 2px;>
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><h3><b>GoPrivate</b></h3></a>
        <li style="padding-top: 5px; padding-right: 10px;padding-bottom: 5px;">
          <input style="float:right;" type="button" class="btn btn- btn-md" value="cari" style="text-decoration: none">
          <input style="float:right;" class="form-control" type="search" placeholder="search" required="" style ="text-decoration: none">
        </li>
      </nav>
    </div><br><br>
  <div class="container-fluid" style="height: 390px;">
    <center><h6>Silahkan Login dahulu untuk dapat melakukan pemesanan guru</h6></center><br>
    <div class="col-sm-12"><center><form action="login_process.php" method="post">
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" id="username" class="form-control" name="username" placeholder="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" id="password" class="form-control" name="password" placeholder="password"></td>
        </tr>
        <tr>
          <td>Role</td>
          <td>
              <select class="btn btn-default" id="role" name="role">
                <option value="orangtua">Orangtua</option>
                <option value="guru">Guru</option>
              </select>
            </td>
        </tr>
      </table><br>
      <button type="submit" class="btn btn- btn-info" name="action">LogIn</button></form>
      Anda belum memiliki akun? <a href="signup.php"> Buat Akun </a>
    </center>
    </div>
</div>
<div class="footer col-sm-12 fixed-buttom" style="background-color:lavender; padding-top: 20px;">
          <center><h3> GoTutor</h3></center>
          <center>Copyright GoPrivate - 2017</center><br>
        </div>
  </body>
  </html>

<?php
  close_page();
?>