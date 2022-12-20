<?php
//sambung ke pangkalan data
include "config.php"; 
//sambung fail header
include "header.php";

if(isset($_POST['kegunaan'])) {    
  $idguru = $_POST['idguru'];
  $idperalatan = $_POST['idperalatan'];
  $kegunaan = $_POST['kegunaan'];
  $tarikh = $_POST['tarikh'];
  $padam = $_POST['padam'];
  $sql = "INSERT INTO rekod (idguru, idperalatan, kegunaan, tarikh, padam)
  VALUES ('$idguru', '$idperalatan', '$kegunaan', '$tarikh', '$padam')";
  $hasil = mysqli_query($samb, $sql); 
  if ($hasil)
      echo "<script>alert('berjaya ditambah')</script>";
  else 
      echo "<script>alert('Tidak berjayakemaskini')</script>";
  echo "<script>window.location='peralatan.php'</script>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<link rel="stylesheet" href="css/peraltan.css">


<html>

<body>
  <section>
   
    <table>
      <tr>
        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/kipas.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kipas</h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama : Toshiba</li>
                <li class="list-group-item">Kuantiti : 5 </li>

              </ul>
        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/layar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Screen Viewer </h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama : Sharks</li>
                <li class="list-group-item">Kuantiti : 8</li>

              </ul>

        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/mic.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Microfon</h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama : Finaliss</li>
                <li class="list-group-item">Kuantiti : 10</li>

              </ul>

        </td>
        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/stand mic.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stand Mic</h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama : Mey Yeang</li>
                <li class="list-group-item">Kuantiti : 4</li>

              </ul>
      </tr>

      <tr>
        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/plug.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Plug Extension </h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama : Kind</li>
                <li class="list-group-item">Kuantiti : 2 </li>

              </ul>

        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/projector1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Projector</h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama :Lumen 3800 </li>
                <li class="list-group-item">Kuantiti : 3</li>

              </ul>

        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/speaker.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Speaker</h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama : Sony</li>
                <li class="list-group-item">Kuantiti : 4</li>

              </ul>



        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/extension.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Long Extension</h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama : Panasonic</li>
                <li class="list-group-item">Kuantiti : 1</li>

              </ul>

        </td>
      </tr>
      <center>
        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/kerusi1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kerusi Majlis</h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama : Saidina Excel </li>
                <li class="list-group-item">Kuantiti : 100</li>

              </ul>

        </td>

        <td>
          <div class="card" style="width: 18rem;">
            <img src="gambar/lighting.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lampu</h5>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenama: GVM 560AS</li>
                <li class="list-group-item">Kuantiti : 2</li>

              </ul>

        </td>
        <td>

        <form action="rekod.php" method="POST">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="mb-3">
                  <label type="text"  name="idguru"class="form-label">Id Guru</label>
                  <input type="text" class="form-control" kegunaan="exampleFormControlInput1" placeholder="m223">
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Nama Peralatan</label>
                  <textarea class="form-control" kegunaan="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Kegunaan</option>
                <option value="DEWAN">DEWAN</option>
                <option value="PADANG">PADANG</option>
                <option value="BENGKEL">BENGKEL</option>
                <option value="LAIN-LAIN">LAIN-LAIN</option>

</select>
              <button type="submit" class="btn btn-warning">Simpan</button>
              </form>
          </td> </center> </table> </section> </body> </html>