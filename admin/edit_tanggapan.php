<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="card shadow">
    <div class="card-header py-3" style="color: #ffffff; background:#800000;">
            <center>
                <h4 class="m-0 font-weight-bold " style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">UBAH DATA TANGGAPAN</h4>
            </center>
        </div>
        <div class="card-body">
            <a href="?url=lihat_tanggapan" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
            <br>
            <br>
            <?php
            require '../koneksi.php';
            $sql = mysqli_query($conn, "select * from tanggapan where id_tanggapan='$_GET[id]'");
            if ($data = mysqli_fetch_array($sql)) {
            ?>
                <form action="update_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group cols-sm-6">
                    <div class="form-group cols-sm-6">
                        <label>ID Tanggapan</label>
                        <input type="text" name="id_tanggapan" value="<?php echo $data['id_tanggapan']; ?>" class="form-control" readonly>
                    </div>
                        <label>ID Petugas</label>
                        <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" class="form-control" readonly>
                    </div>

                    <div class="form-group cols-sm-6">
                        <label>ID Pengaduan</label>
                        <input type="text" name="id_pengaduan" value="<?php echo $data['id_pengaduan']; ?>" class="form-control" readonly>
                    </div>

                    <div class="form-group cols-sm-6">
                        <label>Tanggal Tanggapan</label>
                        <input type="text" name="tgl_tanggapan" value="<?php echo $data['tgl_tanggapan']; ?>" class="form-control" readonly>
                    </div>

                    <div class="form-group cols-sm-6">
                        <label>Tanggapan</label>
                        <input type="text" name="tanggapan" value="<?php echo $data['tanggapan']; ?>" class="form-control">
                    </div>

                    <div class="form-group cols-sm-6">
                        <label>ID Petugas</label>
                        <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" class="form-control" readonly>
                    </div>


                    <div class="form-group cols-sm-6">
                        <input type="submit" value="Edit data" class="btn btn-success">
                        <input type="reset" value="Kosongkan" class="btn btn-warning">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>