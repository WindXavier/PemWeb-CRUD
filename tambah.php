<html>
<head>
    <title>Tambah Video</title>
</head>

<body>
    <a href="beranda.php">Ke Beranda</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id Video</td>
                <td><input type="text" name="id_video"></td>
            </tr>
            <tr> 
                <td>Judul</td>
                <td><input type="text" name="title_video"></td>
            </tr>
            <tr> 
                <td>description</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr> 
                <td>Thumbnail</td>
                <td><input type="text" name="thumbnail"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $id_video = $_POST['id_video'];
        $title_video = $_POST['title_video'];
        $description = $_POST['description'];
        $thumbnail = $_POST['thumbnail'];
        
        include_once("koneksi.php");
        
        $result = mysqli_query($mysqli, "INSERT INTO video(id_video,title_video,description,thumbnail) VALUES('$id_video','$title_video','$description','$thumbnail')");
        echo "User added successfully. <a href='beranda.php'>Lihat daftar video</a>";
    }
    ?>
</body>
</html>