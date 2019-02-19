
<?php
  //Variable Pemrograman Database Teori
  $databaseteori_pg_uas = 60;
  $databaseteori_essay_uas = 5 . "m";
  $nilaipersoal_pg_uas = 1;
  $nilaipersoal_essay_uas = 8;
?>

<?php
  include 'data/nilaikurikulum_basicserver.php';
?>

<table class="kompetensimp" border=0>
        <?php
          // include 'layout/teori/teori_basic_server.php';
          // include 'layout/praktikum/praktikum_basic_server.php';

          // include 'layout/teori/teori_database_programming.php';
          // include 'layout/praktikum/praktikum_database_programming.php';

          // include 'layout/teori/teori_website_programming.php';
          // include 'layout/praktikum/praktikum_website_programming.php';

          include 'layout/teori/teori_mobile_programming.php';
          include 'layout/praktikum/praktikum_mobile_programming.php';
          ?>
</table>

<div id="informasi">
  <font style="background-color: red; line-height: 30px; color: white;">&nbsp;</font><font style="background-color: rgb(132, 168, 132); line-height: 30px; color: white; text-transform: uppercase;">&nbsp;Informasi Pembaharuan Data Kompetensi&nbsp;</font>
  <p id="data">
    Editor : <br><?php include 'author/data_editor.php'; ?>
    <br><br>
    <font style="font-size: 10px">Copyright &copy; 2018-2019 Asep Septiadi. All right reserved.</font>
  </p>
</div>

<div id="informasi_penilaianrbs">
  <font style="background-color: red; line-height: 30px; color: white;">&nbsp;</font><font style="background-color: rgb(250, 146, 11); line-height: 30px; color: white; text-transform: uppercase;">&nbsp;Informasi Penilaian SMK Rabaanii&nbsp;</font>
  <p id="data">
    <font style="margin-bottom: 10px;">Data Nilai Kelas X RPL: </font><br>
    <?php include 'assesment/penilaian.php'; ?>
    <br>
  </p>
</div>

<div id="informasi_targetpembelajaran">
  <font style="background-color: red; line-height: 30px; color: white;">&nbsp;</font><font style="background-color: #00BFA5; line-height: 30px; color: white; text-transform: uppercase;">&nbsp;Target Pembelajaran&nbsp;</font>
  <p id="data">
    <font style="margin-bottom: 10px;">Target Pembelajaran RPL: </font><br>

    <br>
  </p>
</div>

<div id="informasi_versi">
  <font style="background-color: red; line-height: 30px; color: black;">&nbsp;</font><font style="background-color: purple; line-height: 30px; color: white; text-transform: uppercase;">&nbsp;About Apps&nbsp;</font>
  <p id="data">
    <font style="margin-bottom: 10px;">Build Version: </font><br>
      Version 1.0 Static
      Date 2018-04-22-23:35:00
      Build Number 2018.01.88974392
      Spesifikasi Web Browser Zoom 80% sdfgd
    <br>
  </p>
</div>