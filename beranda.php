<?php
    session_start();
    include "koneksi.php";
    if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
        $username = $_SESSION["username"];
    } else{
        header("location: index.php");
    }

?>
<div class="bg">
<div class="col -sm-4">
<center>
<h1>welcome <?= $username ?> !!</h1>
<a href="keluar.php">Log Out</a>
<br><br><br><br><br><br><br><br><br>

<table>
    <thead>
        <th>id_video</th>
        <th>title_video</th>
        <th>description</th>
        <th>pilihan</th>
    </thead>
<tbody>
<?php
$query = "SELECT * FROM video";
$result = $conn->query($query);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?=$row["id_video"]; ?></td>
            <td><?=$row["title_video"]; ?></td>
            <td><?=$row["description"]; ?></td>
            <td>
                <a href="hapus.php?id=<?=$row ['id']; ?>">hapus</a>
                <a href="edit.php?id=<?=$row ['id']; ?>">edit</a>
            </td>
        </tr>
    <?php 
    }
} ?>


</tbody>
</table>
<br>
<a href="Tambah.php">Tambah</a>
</div>
</div>
</center>
