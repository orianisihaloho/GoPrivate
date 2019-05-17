<?php
  session_start();
  include_once('fungsi.php');

  if(!isset ($_SESSION ['is_logged_in'])){
    redirect('login.php');
  }
  open_page('pesan_guru');
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
          <a class="navbar-brand" href="index.php"><h3><b>GoPrivate</b></h3></a>
        <li style="padding-top: 5px; padding-right: 10px;padding-bottom: 5px;">
          <input style="float:right;" type="button" class="btn btn- btn-md" value="cari" style="text-decoration: none">
          <input style="float:right;" class="form-control" type="search" placeholder="search" required="" style ="text-decoration: none">
        </li>
      </nav>

      <div class="container-fluid" style="height: 445px;"><center><br>
        <form action="pesanguru_process.php" method="post">
        <table>
          <tr>
            <td>Nama Guru</td>
            <td>&nbsp;:&nbsp;</td>
            <td><input type="text" id="namaguru" class="form-control" name="namaguru" placeholder="Nama Guru" required=""></td>
          </tr>
          <tr>
            <td>Nomor Telepon Anda</td>
            <td>&nbsp;:&nbsp;</td>
            <td><input type="text" id="telepon" class="form-control" name="telepon" placeholder="Nomor Telepon Anda" required=""></td>
          </tr>
          <tr>
            <td>Tingkat Pendidikan</td>
            <td>&nbsp;:&nbsp;</td>
            <td>
              <select class="btn btn-default" id="level" name="level">
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Mata Pelajaran</td>
            <td>&nbsp;:&nbsp;</td>
            <td><input type="text" id="pelajaran" class="form-control" name="pelajaran" placeholder="Mata Pelajaran" required=""></td>
          </tr>
          <tr>
            <td>Hari</td>
            <td>&nbsp;:&nbsp;</td>
            <td>
              <select class="btn btn-default" id="hari1" name="hari1">
                <option value="disabled"> Hari</option>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
              </select>
              <input type="text" id="pukul1" style="float: left;" class="form-control" name="pukul1" placeholder="00:00" required="" style ="text-decoration: none">
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <select class="btn btn-default" id="hari2" name="hari2">
                <option value="disabled"> Hari</option>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
              </select>
              <input type="text" id="pukul2" style="float:left;" class="form-control" name="pukul2" placeholder="00:00" style ="text-decoration: none">
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <select class="btn btn-default" id="hari3" name="hari3">
                <option value="disabled"> Hari</option>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
              </select>
              <input type="text" id="pukul3" style="float:left;" class="form-control" name="pukul3" placeholder="00:00" style ="text-decoration: none">
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              Anda hanya dapat mengatur jadwal 3 
              <br>waktu dalam satu minggu
            </td>
          </tr>
          <tr>
            <td colspan="3"><center><br>
              <input type="submit" class="btn btn- btn-md" value="Pesan" style="text-decoration: none"></center>
            </td>
          </tr>
        </table>
        </center>
      </div>
      <div class="footer col-sm-12 fixed-buttom" style="background-color:lavender; padding-top: 20px;">
      </form>
          <center><h3> GoTutor</h3></center>
          <center>Copyright GoPrivate - 2017</center><br>
        </div>
  </body>
  </html>
  <?php
  close_page();
?>