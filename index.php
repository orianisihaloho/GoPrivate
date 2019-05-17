<?php
  session_start();
  include_once('fungsi.php');
  open_page('index');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoPrivate</title>
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
      border: 1px solid lavender; 
      border-radius:2 !important;
      transition: box-shadow 0.5s;
  }
    .panel:hover {
        box-shadow: 5px 0px 40px rgba(0,0,0, .2);
    }
    .panel-footer .btn:hover {
        border: 1px solid lavender;
        background-color: #fff !important;
        color: #f4511e;
    }
    .panel-heading {
        color: #fff !important;
        background-color: lavender !important;
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
    <nav style="padding-top: 5px; padding-right: 20px; letter-spacing: 2px; background-color: lavender;">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><h3><b>GoPrivate</b></h3></a>
          <li><a href="akun_saya.php"> Akun Saya</li>
          <li><?php
            if(isset($_SESSION['is_logged_in'])){
              echo('<a href="logout.php">Logout</a><br>');
            }else{
              echo('<a href="login.php">Login</a><br>');
            }
            close_page();
          ?></li>

        <li><a href="signup.php">SignUp</a></li>
        <li style="padding-top: 5px; padding-right: 10px;padding-bottom: 5px;">
          <input style="float:right;" type="button" class="btn btn- btn-md" value="cari" style="text-decoration: none">
          <input style="float:right;" class="form-control" type="search" placeholder="search" required="" style ="text-decoration: none">
        </li>
      </nav>
  <div class="container-fluid">
      <!-- sisi kiri -->
      <div class="row">
        <div class="col-sm-3" style="padding-top: 15px;">
          <a href="#"> Petunjuk bagi Pemula<br></a>
          <a href="#"> Pengaturan Jadwal Les<br></a>
          <a href="#"> Artikel Terkait <br></a>
            <ul style="list-style-type: none;">
              <la></label><a href="#"> Tinjauan Biaya Pelajaran Biaya</a><br></la>
              <la><a href="#">Bagaimana Saya dapat <br>
                  Mempublikasikan Materi yang <br>
                  Saya Buat?</a></la>
            </ul>
          <a href="#"> Tanya & Jawab </a>
            <ul style="list-style-type: none;">
              <la><a href="#"> Pertanyaan Umum</a><br></la>
              <la><a href="#">Pertanyaan dalam Website</a></la>
            </ul>
        </div>

        <!-- sisi kanan -->
        <div class="col-sm-9"><hr>
          <nav class="navbar-collapse">
            <li><a href="pesanguru.php">Pesan Guru</a></li>
            <li><a href="testimoni.php">Testimoni</a></li>
            <li><a href="daftarguru.php">Daftar Guru</a></li>
            <li><a href="matapelajaran.php">Mata Pelajaran</a></li>
            <li><a href="index.php">Beranda</a></li>          
          </nav><hr>

          <img class="img-responsive" src="a.jpg" width="1000px;" style="float: right;"><br><br>
          <center><h2>Bagaimana Cara Mendapatkan Les Private yang Bermutu? </h2></center>
          <p>
            Ada banyak alasan mengapa beberapa orangtua memutuskan untuk memberikan les private kepada anak-anaknya. Seperti membantu anak untuk memahami pelajaran di sekolah, memperdalam suatu bidang pelajaran, membantu untuk mengerjakan pekerjaan rumah, ataupun ingin mengikuti suatu kompetisi.
          </p><br><hr>

          <br>
          <center><h2>Mempublikasikan Materi Anda</h2></center>
          <p>
            Ada dua pilihan untuk mempublikasikan materi yang anda ajarkan yaitu publish yang mengizinkan semua pengguna mengakses materi yang anda buat dan unpublish yang mengizinkan hanya murid anda untuk mengakses
          </p>
          <img class="img-responsive img-center" src="ab.png" width="870px;"><br><br>
          <p>
            Anda perlu mengisi rincian mengenai materi yang akan anda publikasikan untuk memberikan informasi lebih mengenai materi tersebut
          </p><br><hr><br>
          <center><h2>Guru Private untuk Anak Anda</h2></center>
          <p>
            Anda dapat menemukan guru private yang tepat untuk anak-anak anda berdasarkan tingkat pendidikan guru, pengalaman mengajar, tingkat peminatnya. Anda juga dapat berkomunikasi untuk menentukan waktu yang tepat
          </p><br><br>
        </div>
        <div class="footer col-sm-12 fixed-buttom" style="background-color:lavender; padding-top: 20px;">
          <center><h3> GoTutor</h3></center>
          <center>Copyright GoPrivate - 2017</center><br>
        </div>
      </div>

</body>