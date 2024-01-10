<?php 
include '../_config/config.php';
include '../layout/top.php';
?>

<div class="container-fluid">
    <div
        class="card-header">
        <h1 class="h3 mb-2 text-gray-800">Dekripsi AES</h1>
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
                                <th>Nama File Sumber</th>
                                <th>Nama File Enkripsi</th>
                                <th>Path File</th>
                                <th>Status File</th>
                                <th>Aksi</th>
                                
                                <!-- <th>Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                        $no=1;
                        $query = mysqli_query($con,"SELECT * FROM file");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['file_name_source'] ?></td>
                                <td><?php echo $data['file_name_finish'] ?></td>
                                <td><?php echo $data['file_url'] ?></td>
                                <td><?php if ($data['status'] == 1) {
                                echo "Enkripsi";
                                }elseif ($data['status'] == 2) {
                                echo "Dekripsi";
                                }else {
                                echo "Status Tidak Diketahui";
                                }
                                ?></td>
                                <td>
                                <?php
                                $a = $data['id_file'];
                                if ($data['status'] == 1) {
                                    echo '<a href="decrypt-file.php?id_file='.$a.'" class="btn btn-primary">Dekripsi File</a>';
                                }elseif ($data['status'] == 2) {
                                    echo '<a href="enkripsi.php" class="btn btn-success">Enkripsi File</a>';
                                }else {
                                    echo '<a href="dekripsi.php" class="btn btn-danger">Data Tidak Diketahui</a>';
                                }
                                ?>

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- Proses delete -->
<?php 
if(isset($_GET['delete'])) {
  mysqli_query($con,"DELETE FROM tb_ip where id_ip='$_GET[delete]'")
  or die (mysqli_error($con));
  echo "<script>alert('Data berhasil dihapus');
  window.location='".base_url('ip_admin/index.php')."';</script>";
}
?>

<?php 
include '../layout/footer.php';
?>