<?php 
include '../_config/config.php';
include '../layout/top.php';
?>

<div class="container-fluid">
    <div
        class="card-header">
        <h1 class="h3 mb-2 text-gray-800">Data Algoritma AES</h1>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <!-- <a href="./create.php" class="btn btn-primary">Tambah Data</a> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama File</th>
                                <th>Nama File Enkripsi</th>
                                <th>Ukuran File</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                <!-- <th>Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                        $no=1;
                        $query = mysqli_query($con,"SELECT * FROM file");
                        while ($data = mysqli_fetch_array($query)) {
                            $a = $data['id_file'];
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['username'] ?></td>
                                <td><?php echo $data['file_name_source'] ?></td>
                                <td><?php echo $data['file_name_finish'] ?></td>
                                <td><?php echo $data['file_size'] ?></td>
                                <td><?php echo $data['tgl_upload'] ?></td>
                                <td><?php if ($data['status'] == 1) {
                                    echo "<span class='btn btn-danger'>Terenkripsi</span>";
                                    }elseif ($data['status'] == 2) {
                                        echo "<span class='btn btn-success'>Sudah Didekripsi</span>";
                                    }else {
                                        echo "<span class='btn btn-danger'>Status Tidak Diketahui</span>";
                                    }
                                ?>
                                </td>
                                <td>
                                <?php if ($data['status'] == 1) {
                                        ?><a class="btn btn-primary" href="halaman_detail.php?id_file=<?php echo $data['id_file'];?>">Download</a>
                                    <?php
                                    }elseif ($data['status'] == 2) {
                                        echo "";
                                    }
                                ?>
                                    
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- Proses delete -->
?>
<?php 
include '../layout/footer.php';
?>