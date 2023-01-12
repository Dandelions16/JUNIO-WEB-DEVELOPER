<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
    if( isset($_POST['submit'])){
        $email    =  isset($_POST['email'])? $_POST['email'] : "";
        $pass    =  isset($_POST ['password'])? $_POST['password'] : "";
        // menampilkan data dari databases
        $strQuery = "SELECT * FROM user WHERE  email='$email' AND pass ='$pass'";
        $qry    = mysqli_query($db,$strQuery);
        $sesi   = mysqli_num_rows($qry);

        // pr login menggunakan passowrd verify
        if ($sesi == 1){
            $data_user = mysqli_fetch_array($qry);
            $_SESSION['iduser'] = $data_user['id_user'];
            $_SESSION['sesi'] = $data_user['nm_user'];

            echo "<script> alert('Anda berhasil Log In');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        }
        else
        {
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
            echo "<script>alert('Email atau Password salah');</script>";
        }
        
}
    else{
        include "login.php";
    }
?>