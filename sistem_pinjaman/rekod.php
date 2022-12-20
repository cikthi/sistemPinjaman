<?php 
//sambung ke pangkalan data
 include "config.php"; 
// sambung fail header
 include "header.php";
 
//tambah
 if(isset($_POST['idguru'])) {    
    $idguru = $_POST['idguru'];
    $idperalatan = $_POST['idperalatan'];
    $idguru = $_POST['idguru'];
    $kegunaan= $_POST['kegunaan'];
	$tarikh = $_POST['tarikh'];
    $padam = $_POST['padam'];
    $sql = "UPDATE pekerja SET idguru='$idguru', idperalatan='$idperalatan',idguru='$idguru', 
	kegunaan = '$kegunaan', tarikh = '$tarikh' , padam = '$padam 'WHERE idguru = $idguru";
    $result = mysqli_query($conn, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='rekod.php'</script>";
}

//update 
$idguru = $_GET['idguru'];
$sql = "SELECT * FROM rekod WHERE idguru = '$idguru' ";
$result = mysqli_query($samb, $sql);
while ($pekerja = mysqli_fetch_array($result)) {
    $idguru = $pekerja['idguru'];
    $idperalatan = $pekerja['idperalatan'];
    $idguru = $pekerja['idguru'];
    $kegunaan = $pekerja['kegunaan'];
    $tarikh = $pekerja['tarikh'];
    $padam = $_POST['padam'];
}
//padam rekod
$nokp = $_GET['nokp'];
$sql = "DELETE FROM pekerja WHERE nokp= '$nokp'";
$result = mysqli_query($conn, $sql);
if ($result)
    echo "<script>alert('Berjaya padam rekod')</script>";
else 
  echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='index.php'</script>";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="css/rekod.css">

<html>

<body>

    <fieldset>
                     <table class="table table-striped">
            <thead class="table-danger">
                <td>Bil</td>
                <td>Id Guru </td>
                <td>Id Peralatan</td>
                <td>Kegunaan</td>
                <td>Tarikh </td>
                <td>Keputusan</td>
            </thead> 
            <?php
            $sql = "SELECT * FROM rekod ORDER BY idguru ASC";
            $data = mysqli_query($samb, $sql);
            $bil = 1;
            while ($rekod = mysqli_fetch_array($data)){
                ?>
            <tbody>
           
              <tr>
                <td class="bilnum"><?php echo $bil; ?></td>
                <td><?php echo $rekod['idguru']; ?></td>
                <td><?php echo $rekod['idperalatan']; ?></td>
                <td><?php echo $rekod['kegunaan']; ?></td>
                <td><?php echo $rekod['tarikh']; ?></td>
                <td><?php echo $rekod['padam']; ?></td>
                <td>
                  <a href="peralatan.php?idperalatan=<?php echo $peralatan['idperalatan'];?>">
                    <img src=img/update.png> </a> <a href="rekod.php?idperalatan=<?php echo $peralatan['idperalatan'];?>">
                    <img src=img/delete.png> </a> 
                    <img src=img/tambah.png> </a> 
                
                
                </td>
                    </tr>
                    
                    <?php $bil = $bil + 1; 
            } 
            ?>
            </tbody>
            <!-- kira bil. rekod mengikut koko yang pelajar daftar dengan fungsi count -->
            <center>
                <a href="javascript:window.print()">Cetak Laporan</a> |
                <a href="logout.php">Logout</a>
            </center>
    </fieldset>
</body>

</html>