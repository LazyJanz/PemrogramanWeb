<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h2 align="center">Data User</h2>
    <form align="center" method="POST">
		<input type="text" name="kata" size="40">
		<input type="submit" name="cari" value="Search!">
	</form>
    <form method="POST" action="addusr.php">
	    <input type="submit" name="add" value="Tambah User">
    </form>
    <table align="center" border="1" width="70%">
        <th width="7%">ID</th>
        <th width="25%">Nama</th>
        <th width="18%">Email</th>
        <th width="20%">Mobile</th>
        <th width="20%">Foto</th>
        <th width="10%">Action</th>
        <?php
        $kata=$_POST['kata'];
        $sql="SELECT * FROM user";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td align='center'>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td></td>";
            echo "<td align='center'>
                    <a href='delusr.php?id=$row[0]'>Delete</a> | 
                    <a href='editusr.php?id=$row[0]'>Edit</a>";
            echo "</tr>";
        }
        ?>
    </table>


<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
