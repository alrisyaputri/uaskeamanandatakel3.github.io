<?php 
include "../_config/config.php";
include "../layout/top.php";

$idfile = $_GET['id_file'];
$query = mysqli_query($con,"SELECT * FROM file WHERE id_file='$idfile'");
while ($data1 = mysqli_fetch_array($query)) {
?>

<div class="card">
    <div class="card-body">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">File Enkripsi</h5>
                    <p><?php echo $data1['file_name_finish']; ?></p>
                    <a
                        href="download.php?id_file=<?php echo $data1['id_file']; ?>"
                        class="btn btn-primary">Unduh File</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php } ?>
    <?php
include "../layout/footer.php"
?>