<?php 
require_once '_config/config.php';
if(!isset($_SESSION['job_title']) && !isset($_SESSION['username'])) {
    echo "<script>window.location='".base_url('auth/login.php')."';</script>"; 
} else {
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Algoritma Kriptografi</title>
        <link href="<?=base_url()?>/assets/img/icon.png" rel='shortcut icon'>

        <!-- Custom fonts for this template-->

        <link
            href="assets/vendor/fontawesome-free/css/all.min.css"
            rel="stylesheet"
            type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?=base_url()?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul
                class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
                id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a
                    class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Keamanan Data
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="?page=<?=$_SESSION['job_title'];?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
                
                <div class="sidebar-heading">
                    Algoritma Vigenere
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="vigenere/index.html" onclick="return confirm('Anda ingin ke halaman Algoritma VIGENERE?')">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Enrkipsi & Dekripsi</span></a>
                </li>
                
                <div class="sidebar-heading">
                    Algoritma Elgamal
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="elgamal/index.php" onclick="return confirm('Anda ingin ke halaman Algoritma ELGAMAL?')">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Enrkipsi & Dekripsi</span></a>
                </li>  

                <!-- Nav Item - Tables -->

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav
                        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button
                            id="sidebarToggleTop"
                            class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control bg-light border-0 small"
                                    placeholder="Search for..."
                                    aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="searchDropdown"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div
                                    class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control bg-light border-0 small"
                                                placeholder="Search for..."
                                                aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="userDropdown"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['username'] ?></span>
                                    <img class="img-profile rounded-circle" src="./assets/img/undraw_profile_3.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div
                                    class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a
                                        class="dropdown-item"
                                        href="../auth/logout.php"
                                        data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>

<!-- Content Row -->
<div class="row">

<!-- Project Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Dashboard</h6>
    </div>
    <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                    src="assets/img/keamanandata.png" alt="...">
            </div>
            <p class="text-center">Website Project UAS Keamanan Data yang Membahas Tentang
                Keamanan Data Khususnya Kriptografi Modern dan Percobaan Enkripsi dan Dekripsi 
                Menggunakan Algoritma Simetris - Vigenere Cipher dan Algoritma Asimetris - ElGamal</p>
</div>

<!-- Content Column -->
<div class="col-lg-6 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kriptografi Modern</h6>
        </div>
        <div class="card-body text-justify">
        <p>Kriptografi merupakan ilmu yang mempelajari teknik-teknik matematika yang berhubungan dengan 
        aspek keamanan informasi seperti kerahasian data, keabsahan data, integritas data serta autentikasi data. 
        Secara umum yang kita ketahui, kriptografi terdiri atas dua buah bagian utama yang penting yaitu bagian 
        enkripsi dan bagian deskripsi. Enkripsi merupakan proses transformasi informasi atau plaintext menjadi 
        bentuk lain sehingga isi pesan yang sebenarnya tidak dapat dipahami atau sering disebut ciphertext, 
        hal ini dimaksudkan agar informasi tetap terlindung dari pihak yang tidak berhak menerima. Sedangkan, 
        pengertian Deskripsi adalah proses kebalikan dari enkripsi, yaitu transformasi data ke data bentuk semula.</p>
    <p>Algoritma kriptografi modern umumnya beroperasi dalam mode bit ketimbang mode karakter 
        (seperti yang dilakukan pada cipher sibstitusi atau cipher transposisi dari algoritma kriptografi klasik). 
        Operasi dalam mode bit berarti semua data dan informasi (baik kunci, plaintext maupun ciphertext) dinyatakan dalam rangkaian 
        (string) bit binner, 0 dan 1. Algoritma enkripsi dan deskripsi memproses semua data dan informasi dalam bentuk mode bit. 
        Rangkaian bit yang menyatakan plaintext dienkripsi menjadi ciphertext dalam bentuk rangkaian bit, demikian sebaliknya.</p>
    <p class="mb-0">Enkripsi modern berbeda dengan enkripsi konvensional. Enkripsi modern sudah menggunakan komputer 
        untuk pengoperasiannya, berfungsi untuk mengamankan data baik yang ditransfer melalui jaringan komputer maupun yang bukan. 
        Hal ini sangat berguna untuk melindungi privacy, data integrity, authentication, dan non- repudiation. Perkembangan 
        algoritma kriptografi modern berbasis bit didorong oleh penggunaan komputer digital yang merepresentasikan data dalam bentuk biner. 
        Pengirim pesan akan mengatur sandi pada pesan awal yang nantinya menjadi kode dan hanya bisa dibaca oleh penerima pesan tersebut. 
        Kemudian, penerima pesan akan mengembalikan kode-kode yang didapatkan menjadi pesan asli.</p>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Public Key</h6>
        </div>
        <div class="card-body text-justify">
        <p>Public Key Encryption adalah Sistem enkripsi (penyandian) yang menggunakan dua kunci, yaitu kunci publik dan kunci privat. 
            Kunci publik diberitahukan oleh pemilik dan digunakan oleh semua orang yang ingin mengirimkan pesan terenkripsi kepada 
            pemilik kunci. Kunci privat digunakan oleh pemilik kunci untuk membuka pesan terenkripsi yang ia terima.</p>
        <p>Public Key Encryption - Enkripsi kunci publik, atau kriptografi kunci publik, adalah metode mengenkripsi data dengan dua
             kunci berbeda dan membuat salah satu kunci, kunci publik, tersedia bagi siapa saja untuk digunakan. Kunci lainnya dikenal
              sebagai kunci pribadi. Data yang dienkripsi dengan kunci publik hanya dapat didekripsi dengan kunci pribadi, dan data
               dienkripsi dengan kunci pribadi hanya dapat didekripsi dengan kunci publik. Enkripsi kunci publik juga dikenal sebagai 
               enkripsi asimetris. Ini banyak digunakan, terutama untuk TLS/ SSL, yang memungkinkan HTTPS.</p>
        </div>
    </div>

</div>

<div class="col-lg-6 mb-4">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Algoritma Simetris - Vigenere Cipher</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                    src="assets/img/simetris.png" alt="...">
            </div>
            <p class="text-justify">Algoritma simetris Vigenere Cipher adalah sebuah metode penyandian teks yang menggunakan teknik
                 substitusi karakter berdasarkan kunci yang terdiri dari kata atau frase. Ditemukan oleh seorang
                  ahli kriptografi Prancis bernama Blaise de Vigenère pada abad ke-16, Vigenere Cipher menyajikan 
                  perbaikan dari Caesar Cipher yang lebih sederhana. Keunggulan utama dari Vigenere Cipher terletak 
                  pada kemampuannya untuk mengatasi kelemahan Caesar Cipher, yang dapat dengan mudah dipecahkan dengan 
                  analisis frekuensi huruf.</p>
            <p class="text-justify">Dalam Vigenere Cipher, setiap huruf dari teks terbuka dienkripsi dengan menggunakan 
                huruf kunci yang sesuai. Jika panjang kata kunci lebih pendek daripada panjang teks terbuka, maka kunci 
                akan diulang untuk mencocokkan panjang teks terbuka. Hal ini membuat Vigenere Cipher lebih sulit dipecahkan 
                dibandingkan dengan substitusi sederhana, karena frekuensi huruf dalam pesan terenkripsi menjadi lebih sulit untuk dianalisis.</p>
        </div>
    </div>

    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Algoritma Asimetris - ElGamal</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                    src="assets/img/asimetris.png" alt="...">
            </div>
            <p class="text-justify">Algoritma asimetris ElGamal adalah sebuah protokol kriptografi kunci publik yang pertama kali 
                diperkenalkan oleh ahli matematika dan kriptografi Tunisia, Taher ElGamal, pada tahun 1985. Algoritma ini tergolong 
                dalam keluarga kriptografi kunci publik dan menggunakan konsep dasar dari teori bilangan bulat dan sifat-sifatnya 
                untuk menyediakan keamanan komunikasi digital. ElGamal menyajikan sebuah pendekatan yang inovatif dengan 
                memanfaatkan operasi matematika seperti eksponensial modular dan logaritma diskret.</p>
            <p class="text-justify">Salah satu keunggulan utama dari algoritma asimetris ElGamal adalah kemampuannya untuk menyediakan 
                keamanan komunikasi tanpa memerlukan pertukaran kunci rahasia sebelumnya di antara pihak-pihak yang terlibat. 
                ElGamal didasarkan pada kesulitan permasalahan logaritma diskret, yang merupakan dasar keamanan algoritma ini. 
                Kunci publik dan kunci privat yang digunakan dalam ElGamal memungkinkan pihak pengirim untuk mengenkripsi pesan, 
                sedangkan pihak penerima menggunakan kunci privatnya untuk mendekripsi pesan tersebut.</p>
        </div>
    </div>

</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Projek UAS Keamanan Data</span>
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
<div
    class="modal fade"
    id="logoutModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <a class="btn btn-primary" href="auth/logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?=base_url()?>/assets/vendor/jquery/jquery.min.js"></script>
<script
    src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url()?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url()?>/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?=base_url()?>/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?=base_url()?>/assets/js/demo/chart-area-demo.js"></script>
<script src="<?=base_url()?>/assets/js/demo/chart-pie-demo.js"></script>

</body>
</html>
<?php } ?>