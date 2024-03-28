<?php   

include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = $conn->query($query);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <style>
  /* CSS untuk menempatkan form di tengah */
  body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  form {
    width: 300px;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  h2 {
    margin-top: 0;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
    </style>
<body>
    <div class="center">
    <form action="insert.php" method="POST">
        <h3> Form Data Mahasiswa STT NF</h3>
        <br>

        Nama: <input type="text" name="nama" required><br>

        NIM: <input type="text" name="nim" required><br>

        Prodi: <input type="text" name="jurusan" required><br>

        Angkatan: <input type="number" name="semester" required><br><p></p>
        
        <input type="submit" value="Tambah">
        </p>
    </form>


    <br>

<table border="5" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>


        <?php while( $row = $result->fetch_assoc() )  :   ?>       
        <tr>
            <td> <?php echo $row['id'] ?> </td>
            <td> <?php echo $row['nama'] ?> </td>
            <td> <?php echo $row['nim'] ?> </td>
            <td> <?php echo $row['jurusan'] ?> </td>
            <td> <?php echo $row['semester'] ?> </td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php  endwhile;   ?>


    </table>


</body>
</html>