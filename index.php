<?php 
if(isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    #echo "<script>window.location='".base_url('auth/login.php')."'</script>";
} else { 
    header('Location: auth/login.php');
    #echo "<script>window.location='".base_url('auth/login.php')."'</script>";
}
?>
