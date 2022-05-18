<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="color: #ffffff; background:#800000;">
            <center>
                <h4 class="m-0 font-weight-bold " style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">DATA PETUGAS</h4>
            </center>
        </div>
        <div class="card-body">
            <a href="admin.php?url=tambah_Petugas" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="color: #4d4d33;">
                            <th>
                                <center>ID Petugas</center>
                            </th>
                            <th>
                                <center>Username</center>
                            </th>
                            <th>
                                <center>Nama Petugas</center>
                            </th>
                            <th>
                                <center>Password</center>
                            </th>
                            <th>
                                <center>Telp</center>
                            </th>
                            <th>
                                <center>Level</center>
                            </th>
                            <th>
                                <center>Aksi</center>
                            </th>
                        </tr>
                    </thead>
                    <?php
                    require '../koneksi.php';
                    $sql = mysqli_query($conn, "select * from petugas");
                    while ($data = mysqli_fetch_array($sql)) {

                    ?>
                        <tbody>
                            <tr>
                                <td>
                                    <center><?php echo $data['id_petugas']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $data['nama_petugas']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $data['username']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $data['password']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $data['telp']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $data['level']; ?></center>
                                </td>
                                <td>
                                    <!--button-->
                                    <center><a href="admin.php?url=edit_petugas&id=<?php echo $data['id_petugas']; ?>" class="btn btn-warning btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="delete_petugas.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Hapus?')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </center>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
            <br>
            <br>
            <a href="cetak_petugas.php" class="btn btn-warning btn-icon-split" target="_blank">
                <span class="icon text-white-50">
                    <i class="fas fa-print"></i>
                </span>
                <span class="text">Cetak Data Petugas</span>
            </a>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2019</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>