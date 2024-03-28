<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h2 align="center">Add User</h2>
    <form method="POST" enctype="multipart/form-data">
        <table border="0" width="50%" align="center">
            <tr>
                <td width="25%" align="right">Nama : </td>
                <td width="75%">
                    <input type="text" name="nama" size="60%" required>
                </td>
            </tr>
            <tr>
                <td width="25%" align="right">Email : </td>
                <td width="75%">
                    <input type="email" name="mail" size="60%" required>
                </td>
            </tr>
            <tr>
                <td width="25%" align="right">No HP : </td>
                <td width="75%">
                    <input type="text" name="mobile" size="60%" required>
                </td>
            </tr>
            <tr>
                <td width="25%" align="right">Foto : </td>
                <td width="75%">
                    <input type="file" name="foto" value="foto" required>
                </td>
            </tr>
            <tr>
                <td width="25%" align="right"></td>
                <td width="75%">
                    <input type="submit" name="save" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['save']))
    {
        $nama=$_POST['nama'];
        $email=$_POST['mail'];
        $mobile=$_POST['mobile'];
        
        $qry="INSERT INTO user (name, email, mobile) values ('$nama', '$email', '$mobile')";
        //var_dump($qry);
        $hasil=mysqli_query($conn,$qry);
        if($hasil)
            echo "<script language='JavaScript'>
                    (window.alert('Data User Sudah Di Simpan'))
                    location.href='index.php'
                </script>";
        else
            echo "<script language='JavaScript'>
                    (window.alert('Data User Tidak dapat di simpan))
                    location.href='index.php'
                </script>";  		  
    }
    ?>
</body>
</html>