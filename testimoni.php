<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimoni</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    
    <style>
    #publishcomment {
border: 2px solid #848484;
box-shadow: 12px 12px 7px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
max-height: 100%;
color: #3d3d3d;
width: 550px;
font-size: 12px;
line-height: 15px;
}
#publishcomment hr {
color: #ccc;
}
#publishcomment a {
color: #da5700;
text-decoration: none;
font-weight:normal;
}
#publishcomment a:link {
font-weight: bold;
}
#publishcomment a:hover {
text-decoration: underline;
}
    textarea {
    width: 450px;
    height: 252px;
  }
  .field.extra {
    height: 268px;
}
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
          <a class="navbar-brand" href="index.html"><h3><b>GoPrivate</b></h3></a>
        <li><a href="login.html">Login</a></li>
        <li><a href="signup.html">SignUp</a></li>
        <li style="padding-top: 5px; padding-right: 10px;padding-bottom: 5px;">
          <input style="float:right;" type="button" class="btn btn- btn-md" value="cari" style="text-decoration: none">
          <input style="float:right;" class="form-control" type="search" placeholder="search" required="" style ="text-decoration: none">
        </li>
      </nav>
  <div class="container-fluid">
      <!-- sisi kiri -->
      <div class="row">
        <div class="col-sm-4" style="padding-top: 15px;">
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
        <div class="col-sm-8">
          <nav class="navbar-collapse"><hr>
              <li><a href="testimoni.html">Testimoni</a></li>
              <li><a href="daftarguru.html">Daftar Guru</a></li>
              <li><a href="matapelajaran.html">Mata Pelajaran</a></li>
              <li><a href="index.html">Beranda</a></li>            
          </nav><hr>
<section id="content">
      <div class="inside">
       
        </div>
        <p>Apa yang anda pikirkan?</p>
        <form id="contacts-form" action="submit_tes.php" method="post">
          <fieldset>
            <div class="field">
              <label>Nama:</label>
              <input type="text" name="nama" value=""/>
            </div>
            <div class="field">
              <label>E-mail:</label>
              <input type="email" name="email" value=""/>
            </div>
            <div class="field extra">
              <label>Testimoni:</label><br>
              <textarea cols="1" rows="1" name="testimoni"></textarea>
              <input name="art_id" value="1" type="hidden">
<input name="art_url" value="testimoni.php" type="hidden"><br>
            </div><br>
            <input type="submit" name="tombol" value="Kirim"/>
          </fieldset>
        </form>
        <div id="publishcomment">
<?php include("publishcomment.php"); gettestimoni("1"); ?></div>
      </div>


    </section>
        </div>
        <div class="footer col-sm-12" style="background-color:lavender; padding-top: 20px;">
          <center><h3> GoPrivate </h3></center>
          <center>Copyright GoPrivate - 2017</center><br>
        </div>
      </div>
</body>