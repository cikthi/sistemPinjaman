<?php
//sambung ke pangkalan data
include "config.php"; 
//sambung fail header
include "header.php";
//semak sama ada data dengan ID pengguna nama telah dihantar 
if (isset($_POST['nama'])) {
//pembolehubah untuk memegang data yang dihantar

$nama = $_POST['nama'];
$idguru = $_POST['idguru'];
$jawatan = $_POST['jawatan'];
$kegunaan = $_POST['kegunaan'];
//tambah rekod baru ke dalam table
$sql = "INSERT INTO pendaftaran (nama, idguru, jawatan, kegunaan) 
VALUES ('$nama', '$idguru', '$jawatan', '$kegunaan')";
// Melaksanakan pertanyaan sql dengan sambungan ke p.data
$hasil = mysqli_query($samb, $sql);
//semak untuk melihat jika ada sebarang rekod dalam pangkalan data 
// papar mesej berjaya atau gagal simpan rekod baru 
if ($hasil) {
echo "<script>alert('PENDAFTARAN AHLI BERJAYA');
 window.location='peralatan.php'</script>";

}
else{
    echo "<script>alert('PENDAFTARAN AHLI GAGAL! kerana nama telah digunakan ');
window.location='pendaftaran.php'</script>";
}
}
?>
<!-- HTM1 Bermula -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/pendaftran.css">

<html>


<body>
    <fieldset>
        <center>
            <!-- Papar Borang Pendaftaran -->
            <form method="POST" >
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label" type="text">Sila Isikan Nama Anda :</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="nama"
                            id="nama" placeholder="Nama anda" size="60" required>

                    </div>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label" type="text">Sila Masukkan Idguru
                                :</label>
                            <input type="text" class="form-control" id="validationCustom01" name="idguru"
                                placeholder="m001" maxlength='12' size="15"
                                onkeypress='return event.charCode >= 48 && event.charCode <= 57' required autofocus
                                >
                        </div>

                        <br>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Jawatan : </label>
                            <select name="jawatan" id="jawatan" class="form-select" id="validationCustom04" required>
                                <option value="">--Pilih--</option>
                                <option value="PENGARAH">PENGARAH</option>
                                <option value="STAFF">STAFF</option>
                                <option value="ADMIN">ADMIN</option>
                            </select><br>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Kegunaan : </label>
                            <select name="kegunaan" id="kegunaan" class="form-select" id="validationCustom04" require>
                                <option value="">--Pilih--</option>
                                <option value="DEWAN">DEWAN</option>
                                <option value="PADANG">PADANG</option>
                                <option value="BENGKEL">BENGKEL</option>
                                <option value="LAIN-LAIN">LAIN-LAIN</option>
                            </select><br>
                        </div>

<!-- 
    <?php
      //$data1 =mysqli_query($samb,"SELECT * FROM pendaftaran ");
    //while ($info1=mysqli_fetch_array($data1))
   // {
      //  echo "<option hidden selected>--pilih anda--</option>";
       // echo "<option>$info1[nama]</option>";
    
   // }
        
    ?>  -->
                        </select><br>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" >Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button><br><br>
                            *pilih hanya sekali sahaja
                    </form>
                    <form action="index.php"><button type="submit" class="btn btn-warning">Home</button></form><br><br>
                    </div>
                </form>
        </center>
        </form>
    </fieldset>
</body>

</html>