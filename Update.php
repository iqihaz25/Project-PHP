<title>Database Siswa - Update</title>
<center>
<h1>Update Data Siswa</h1>

<style>
        body {
          background-image: url('https://www.thoughtco.com/thmb/kJXvM-MeeQLK8kqAcmeQuqTtzds=/1887x1415/smart/filters:no_upscale()/184848787-56a9e2053df78cf772ab37c2.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style>

<?php
    include './ConnectToDatabase.php';
    $nis = $_POST["nis"];
    $nama_siswa = $_POST["nama_siswa"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];
    $id_jurusan = $_POST["id_jurusan"];


    $sql = "UPDATE buku SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin' , alamat='$alamat' , id_jurusan='$id_jurusan' WHERE nis='$nis'";
    if($conn->query($sql) === TRUE){
        echo "Successfully updated data! <br>";
        echo "<a href='View.php'><button>Back</button></a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>