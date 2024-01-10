<?php 
include '../_config/config.php';
include '../layout/top.php';
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Enkripsi AES</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="card">
                <!-- <div class="card-header justify-content-center">
                    Form Enkripsi
                </div> -->

                <div class="card-body">
                    <form action="encrypt-process.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputFile">File</label>
                            <input class="form-control" id="inputFile" placeholder="Input File" type="file" name="file" required>

                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Key</label>
                            <input class="form-control" id="inputPassword" type="password" placeholder="" name="pwdfile" required>

                        </div>
                        <div class="form-group">
                            <label for="textArea">Deskripsi File</label>
                            <input class="form-control" type="text" id="textArea" name="desc">

                        </div>
                        
                        <a href="./index.php" class="btn btn-danger">Close</a>
                        <button type="submit" name="encrypt_now" class="btn btn-primary float-right">Enkripsi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
