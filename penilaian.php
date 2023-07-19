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
                <li><i class="fa fa-list-ol"></i><a href="penilaian.php"> Penilaian</a></li>
              </ol>
            </div>
          </div>

          <!--START SCRIPT INSERT-->
          <?php

          include 'koneksi.php';

          if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $prestasi = $_POST['prestasi'];
            $ipk = substr($_POST['ipk'], 1, 1);
            $wawasan = substr($_POST['wawasan'], 1, 1);
            $talenta = substr($_POST['talenta'], 1, 1);
            $tinggi_badan = substr($_POST['tinggi_badan'], 1, 1);
            if ($prestasi == "" || $ipk == "" || $wawasan == "" || $talenta == "" || $tinggi_badan == "") {
              echo "<script>
              alert('Tolong Lengkapi Data yang Ada!');
              </script>";
            } else {
              $sql = "SELECT*FROM spk_penilaian WHERE nama='$nama'";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                $row = $hasil->fetch_row();
                echo "<script>
                alert('Nama Calon $nama sudah ada!');
                </script>";
              } else {
                //insert name
                $sql = "INSERT INTO spk_penilaian(
                nama,prestasi,ipk,wawasan,talenta,tinggi_badan)
                values ('" . $nama . "',
                '" . $prestasi . "',
                '" . $ipk . "',
                '" . $wawasan . "',
                '" . $talenta . "',
                '" . $tinggi_badan . "')";
                $hasil = $conn->query($sql);
                echo "<script>
                alert('Penilaian Berhasil di Tambahkan!');
                </script>";
              }
            }
          }
          ?>
          <!-- END SCRIPT INSERT-->

          <!--start inputan-->
          <form method="POST" action="">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Alternatif</label>
              <div class="col-sm-4">
                <select class="form-control" name="nama">
                  <?php
                  //load nama
                  $sql = "SELECT * FROM spk_calon";
                  $hasil = $conn->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    while ($row = mysqli_fetch_array($hasil)) :; {
                      } ?> <option><?php echo $row[0]; ?></option>
                  <?php endwhile;
                  } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Prestasi</label>
              <div class="col-sm-4">
                <select class=" form-control" name="prestasi">
                  <option>(1) Tidak  Memiliki Prestasi</option>
                  <option>(2) Memiliki 1 Prestasi</option>
                  <option>(3) Memiliki 3 Prestasi</option>
                  <option>(4) Memiliki 4 Prestasi</option>
                  <option>(5) Memiliki lebih dari 4 Prestasi</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">IPK</label>
              <div class="col-sm-4">
                <select class=" form-control" name="ipk">
                  <option>(1) 2.5</option>
                  <option>(2) IPK 2.5-2.9</option>
                  <option>(3) IPK 3.0-3.4</option>
                  <option>(4) IPK 3.5-3.8</option>
                  <option>(5) IPK 3.8-4.0</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tes Wawasan</label>
              <div class="col-sm-4">
                <select class=" form-control" name="wawasan">
                  <option>(1) Kurang dari 60</option>
                  <option>(2) 60-70</option>
                  <option>(3) 71-80</option>
                  <option>(4) 81-90</option>
                  <option>(5) Lebih dari 90</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Talenta</label>
              <div class="col-sm-4">
                <select class=" form-control" name="talenta">
                  <option>(1) Memiliki 1 Talenta</option>
                  <option>(2) Memiliki 2 Talent</option>
                  <option>(3) Memiliki 3 Talenta</option>
                  <option>(4) Memiliki 4 Talenta</option>
                  <option>(5) Memiliki lebih dari 4 Talenta</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tinggi Badan</label>
              <div class="col-sm-4">
                <select class=" form-control" name="tinggi_badan">
                  <option>(1) 160 cm </option>
                  <option>(2) 160 cm - 165 cm</option>
                  <option>(3) 166 cm - 170 cm</option>
                  <option>(4) 171 cm - 175 cm</option>
                  <option>(5) Lebih dari 175 cm</option>
                </select>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Submit</button>
            </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th><i class="fa fa-arrow-down"></i> No</th>
                <th><i class="fa fa-arrow-down"></i> Alternatif</th>
                <th><i class="fa fa-arrow-down"></i> Prestasi</th>
                <th><i class="fa fa-arrow-down"></i> IPK</th>
                <th><i class="fa fa-arrow-down"></i> Wawasan</th>
                <th><i class="fa fa-arrow-down"></i> Talenta</th>
                <th><i class="fa fa-arrow-down"></i> Tinggi Badan</th>
                <th><i class="fa fa-cogs"></i> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $b = 0;
              $sql = "SELECT*FROM spk_penilaian ORDER BY nama ASC";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                while ($row = $hasil->fetch_row()) {
              ?>
                  <tr>
                    <td align="center"><?php echo $b = $b + 1; ?></td>
                    <td><?= $row[0] ?></td>
                    <td align="center"><?= $row[1] ?></td>
                    <td align="center"><?= $row[2] ?></td>
                    <td align="center"><?= $row[3] ?></td>
                    <td align="center"><?= $row[4] ?></td>
                    <td align="center"><?= $row[5] ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="penilaian_hapus.php?nama=<?= $row[0] ?>">
                          <i class="fa fa-close"></i></a>
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