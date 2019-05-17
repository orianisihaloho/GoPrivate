<?php
  session_start();
  include_once('fungsi.php');

  if(!isset ($_SESSION ['is_logged_in'])){
    redirect('login.php');
  }
  open_page('daftar_pesanan');

  $database = new mysqli('127.0.0.1', 'root', '', 'goprivate');

  $result = mysqli_query($database, "SELECT `namaguru`, `telepon`, `level`, `pelajaran`, `hari1`, `pukul1`, `hari2`, `pukul2`, `hari3`, `pukul3` FROM pesan_guru");
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
        color: white;
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

    <div class="container-fluid">
      <center><h2>Daftar Pesanan Les</h2></center>
      <div class="col-sm-12">
        <?php
        echo "<table class='table table-striped text-center'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nama Pemesan</th>";
        echo "<th>Hari Les</th>";
        echo "<th>Email</th>";
        echo "<th>NoTelepon</th>";
        echo "<th>Aksi</th>";
        echo "</tr>";
        echo "</thead>";

        while($row = mysqli_fetch_array($result)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>".$row['namaguru']."</td>";
        echo "<td>".$row['hari1'].", ".$row['pukul1']."</td>";
        echo "<td>john@example.com</td>";
        echo "<td>0813-7833-9910</td>";
        echo "<td>";
        echo('<a href="kirimpesan.php"> Kirim Pesan</button>');
        echo('<a href="tolak.php"> Tolak</button>');
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
        }
        echo "</table>";
      ?>
</div>
</div>
</body>
</html>