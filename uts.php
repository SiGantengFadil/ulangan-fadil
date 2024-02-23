<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>document</title>
  </head>
  <body>
   
  <!--NAVBAR-->
<center>
    <div class="mt-3 mb-3">
<img src="gambar.png" width="200rem" alt="">
</div>
  <div>
  <h3 class="mb-5 mt-2">PENGGAJIHAN
    <p>GURU/KARYAWAN YAYASAN ASSALAAM</p>
    </h3>
</div>
</center>
<!--AKHIR NAVBAR-->

<!--CONTENT-->
<div class="card mt-5 ml-4 mr-5">
  <div class="card-header">
    Data Penggajihan
  </div>
  <div class="card-body bg- text-dark">
  <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">No</label>
    <input type="text" class="form-control" name="no" placeholder="no" name="nama_depan" id="exampleInputEmail1" aria-describedby="emailHelp" plq >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="nama">
  </div>
  <div class="form-group">
    <label for="">Unit Pendidikan</label><br>
    <select name="unit pendidikan" id="" class="form-control">
        <option selected disabled>Pilih Unit Pendidikan</option>
        <option value="Tk">TK</option>
        <option value="sd">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMK">SMK</option>
   </select>
   </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Gaji</label>
    <input type="date" class="form-control" name="tanggal_gaji" id="exampleInputPassword1">
  </div>
 <div class="row">
  <div class="col">
    <h3 class="font-italic">Gaji</h3>
  </div>
  <div class="col">
    <h3 class="font-italic">Potongan</h3>
 </div>
 </div>
<div class="row text-left mt- mb-3">
  <div class="col">
    <label for="">Jabatan</label>
    <select name="jabatan" id="" class="form-control">
      <option value="" selected disabled>Pilih Jabatan</option>
      <option value="kepala sekolah">Kepala sekolah</option>
      <option value="wakasek">Wakasek</option>
      <option value="guru">guru</option>
      <option value="karyawan">karyawan</option>
    </select>
</div>
<div class="col">
  <label for="">BPJS</label>
  <input type="number" name="bpjs" class="form-control" placeholder="bpjs">
</div>
</div>
<div class="row text-left mt-3 mb-3">
  <div class="col">
  <label for="">Lama Kerja</label>
  <input type="number" name="lama_kerja" class="form-control" placeholder="lama kerja">
</div>
  <div class="col">
  <label for="">Pinjaman</label>
  <input type="number" name="pinjaman" class="form-control" placeholder="Pinjaman">
 </div>
  </div>
  <div class="row text-left mt-3 mb-3">
  <div class="col">
    <label for="">status kerja</label>
    <select name="status_kerja" id="" class="form-control">
      <option value="" selected disabled>Pilih Status Kerja</option>
      <option value="tetap">Tetap</option>
      <option value="kontrak">Kontrak</option>
    </select>
    </div>
    <div class="col">
  <label for="">Tabungan</label>
  <input type="number" name="tabungan" class="form-control" placeholder="tabungan">
</div>
</div>
<div class="row text-left mt-3 mb-3">
  <div class="col">
</div>
<div class="col">
  <label for="">Lainnya</label>
  <input type="number" name="lainya" class="form-control" placeholder="lainya">
</div>
</div>
  <button type="submit" class="btn btn-warning" name="daftar">DAFTAR</button>
</form>
  </div>
</div>
<!--AKHIR CONTENT-->

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php


if(isset($_POST['daftar'])){

    $no= $_POST['no'];
    $nama= $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainya = $_POST['lainya'];


    if ($jabatan == "kepala sekolah") {
      $gaji =5000000;
    }elseif($jabatan == "wakasek") {
      $gaji =4000000;
    }elseif($jabatan == "guru") {
      $gaji =3000000;
    }elseif($jabatan == "karyawan") {
      $gaji =2000000;
    }else{
      $gaji =0;
    }
    if($status_kerja == "tetap"){
      $bonus = 1000000;
    }else{
      $bonus =0;
    }
    $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainya;



    class hasil{

        public function pendaftaran($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$tabungan2,$lainya2,$gaji_bersih2){
          ?>
          <center>
          <div class="card text-white bg-secondary mb-5 mt-5" style="max-width: 40rem;">
            <div class="card-header"><h3>SMK Assalaam Bandung</h3></div>
            <div class="card-body text-light bg-secondary">
              <h5 class="card-title">Struk Gajih</h5>
              <table>
                <tr>
                  <td>No</td>
                  <td>:</td>
                  <td><?php echo $no2 ?></td>
                </tr>
                <tr>
                <td>Nama</td>
                  <td>:</td>
                  <td><?php echo $nama2 ?></td>
                </tr>
                <tr>
                <td>Unit Pendidikan </td>
                  <td>:</td>
                  <td><?php echo $unit_pendidikan2 ?></td>
                </tr>
                <tr>
                <td>Tanggal gaji </td>
                  <td>:</td>
                  <td><?php echo $tanggal_gaji2 ?></td>
                </tr>
                <tr>
                <td>Jabatan </td>
                  <td>:</td>
                  <td><?php echo $jabatan2 ?></td>
                </tr>
                <tr>
                <td>Gaji</td>
                  <td>:</td>
                  <td><?php echo $gaji2 ?></td>
                </tr>
                <tr>
                <td>Lama Kerja </td>
                  <td>:</td>
                  <td><?php echo $lama_kerja2 ?></td>
                </tr>
                <tr>
                <td>Status Kerja</td>
                  <td>:</td>
                  <td><?php echo $status_kerja2 ?></td>
                </tr>
                <tr>
                <td>Bonus</td>
                  <td>:</td>
                  <td><?php echo $bonus2 ?></td>
                </tr>
                <tr>
                <td>Bpjs</td>
                  <td>:</td>
                  <td><?php echo $bpjs2 ?></td>
                </tr>
                <tr>
                <td>Pinjaman</td>
                  <td>:</td>
                  <td><?php echo $pinjaman2 ?></td>
                </tr>
                <tr>
                <td>Tabungan</td>
                  <td>:</td>
                  <td><?php echo $tabungan2 ?></td>
                </tr>
                <tr>
                <td>lainya</td>
                  <td>:</td>
                  <td><?php echo $lainya2 ?></td>
                </tr>
                <tr>
                <td>gaji bersih</td>
                  <td>:</td>
                  <td><?php echo $gaji_bersih2 ?></td>
                </tr>
                
              </table>
             
            </div>
            </div>
            </center>

            <?php
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainya,$gaji_bersih);

}