<?php 
include '../_config/config.php';
include '../layout/top.php';
?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dekripsi AES</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php
                    $id_file = $_GET['id_file'];
                    $query = mysqli_query($con,"SELECT * FROM file WHERE id_file='$id_file'");
                    $data2 = mysqli_fetch_array($query);
                ?>
                <div class="card-body">
                <form action="decrypt-process.php" method="POST">
                    <h3 align="center" style="color:#fff;">Dekripsi File
                        <i style="color:red"><?php echo $data2['file_name_finish'] ?></i>
                    </h3><br>
                    <div class="form-group">
                        <label>Nama File Sumber</label>
                        <input
                            class="form-control"
                            type="text"
                            value="<?php echo $data2['file_name_source']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama File Enkripsi</label>
                        <input
                            class="form-control"
                            type="text"
                            value="<?php echo $data2['file_name_finish']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Enkripsi</label>
                        <input
                            class="form-control"
                            type="text"
                            value="<?php echo $data2['tgl_upload']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input
                            class="form-control"
                            type="text"
                            value="<?php echo $data2['keterangan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input
                            class="form-control"
                            type="hidden"
                            name="fileid"
                            value="<?php echo $data2['id_file']; ?>">
                        <input
                            class="form-control"
                            id="inputPassword"
                            type="password"
                            placeholder="Password"
                            name="pwdfile"
                            required="required">
                    </div>
                    <button type="submit" name="decrypt_now" class="btn btn-primary float-right" onclick="">Dekripsi</button>
                </div>
            </div>
        </div>
    </div>
</div>