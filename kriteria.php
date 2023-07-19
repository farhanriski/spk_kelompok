<!doctype html>
<html lang="en">

<?php
include 'components/head.php';
?>

<body>

<div class="wrapper d-flex align-items-stretch">
    <?php
    include 'components/sidebar.php';
    ?>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <?php
      include 'components/navbar.php';
      ?>

      <section id="main-content">
        <section class="wrapper">
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
              <ol class="breadcrumb">
                <li><i class="fa fa-list-ol"></i><a href="kriteria.php"> Kriteria</a></li>
              </ol>
            </div>
          </div>
         
          <?php

          include 'koneksi.php';

          if (isset($_POST['submit'])) {
            $prestasi = $_POST['prestasi'];
            $ipk = $_POST['ipk'];
            $wawasan = $_POST['wawasan'];
            $talenta = $_POST['talenta'];
            $tinggi_badan = $_POST['tinggi_badan'];
            if (($prestasi == "") or
              ($ipk == "") or
              ($wawasan == "") or
              ($talenta == "") or
              ($tinggi_badan == "")
            ) {
              echo "<script>
              alert('Tolong Lengkapi Data yang Ada!');
              </script>";
            } else {
              $sql = "SELECT * FROM spk_kriteria";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                echo "<script>
                alert('Hapus Bobot Lama untuk Membuat Bobot Baru');
                </script>";
              } else {
                $sql = "INSERT INTO spk_kriteria(
                  prestasi,ipk,wawasan,talenta,tinggi_badan)
                  values ('" . $prestasi . "',
                  '" . $ipk . "',
                  '" . $wawasan . "',
                  '" . $talenta . "',
                  '" . $tinggi_badan . "')";
                $hasil = $conn->query($sql);
                echo "<script>
                alert('Bobot Berhasil di Inputkan!');
                </script>";
              }
            }
          }
          ?>
          <!--start inputan-->
          <form class="form-validate form-horizontal" id="register_form" method="post" action="">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><b>Kriteria</b></label>
              <div class="col-sm-3">
                <label><b>Bobot</b></label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Prestasi</label>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="prestasi" id="prestasi">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">IPK</label>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="ipk" id="ipk">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tes Wawasan</label>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="wawasan" id="wawasan">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Talenta</label>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="talenta" id="talenta">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tinggi Badan</label>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan">
              </div>
            </div>
            <div class="mb-4">
              <button class="btn btn-outline-primary" type="submit" name="submit"><i class="fa fa-save"></i> Submit</button>
            </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th><i class="fa fa-arrow-down"></i> Prestasi</th>
                <th><i class="fa fa-arrow-down"></i> IPK</th>
                <th><i class="fa fa-arrow-down"></i> Wawasan</th>
                <th><i class="fa fa-arrow-down"></i> Talenta</th>
                <th><i class="fa fa-arrow-down"></i> Tinggi_Badan</th>
                <th><i class="fa fa-cogs"></i> Aksi</th>
              </tr>
            </thead>
            <?php
            $b = 0;
            $sql = "SELECT * FROM spk_kriteria";
            $hasil = $conn->query($sql);
            $rows = $hasil->num_rows;
            if ($rows > 0) {
              while ($row = $hasil->fetch_row()) {
            ?>
                <tr>
                  <td Align="center"><?= $row[1] ?></td>
                  <td Align="center"><?= $row[2] ?></td>
                  <td Align="center"><?= $row[3] ?></td>
                  <td Align="center"><?= $row[4] ?></td>
                  <td Align="center"><?= $row[5] ?></td>
                  
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger" href="kriteria_hapus.php?id=<?= $row[0] ?>"><i class="fa fa-close"></i></a>
                    </div>
                  </td>
                </tr>
            <?php }
            } else {
              echo "<tr>
                  <td>Data Tidak Ada</td>
              <tr>";
            } ?>
            </tbody>
          </table>
        </section>
      </section>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>