<?php
date_default_timezone_set("Asia/Jakarta");
if (isset($_POST['kirim'])) {
    $namaWilayah = $_POST['namaWilayah'];
    $jumlahPositif = $_POST['positif'];
    $jumlahDirawat = $_POST['dirawat'];
    $jumlahSembuh = $_POST['sembuh'];
    $jumlahMeninggal = $_POST['meninggal'];
    $namaOperator =  $_POST['nama'];
    $nimMahasiswa = $_POST['nim'];
} else {
    $namaWilayah = "DKI Jakarta";
    $jumlahPositif = 0;
    $jumlahDirawat = 0;
    $jumlahSembuh = 0;
    $jumlahMeninggal = 0;
    $namaOperator =  "Budi Setio Nugroho";
    $nimMahasiswa = "191011401981";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 200px;">
            <div class="col">
                <p class="text-center">Data Pemantauan Covid19 Wilayah <?php echo $namaWilayah; ?> <br>Per <?php echo date("d m Y  H:i:s") ?> <br> <?php echo $namaOperator . " " . $nimMahasiswa ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table  table-sm table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Positif</th>
                            <th scope="col">Dirawat</th>
                            <th scope="col">Sembuh</th>
                            <th scope="col">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $jumlahPositif; ?></td>
                            <td><?php echo $jumlahDirawat; ?></td>
                            <td><?php echo $jumlahSembuh; ?></td>
                            <td><?php echo $jumlahMeninggal; ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>