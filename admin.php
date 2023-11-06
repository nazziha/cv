<?php
// Connect to database
include_once 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // Update
    if (isset($_POST["update"])) {
        $pendidikan = $_POST["pendidikan"];
        $pengalaman_kerja = $_POST["pengalaman_kerja"];
        $keterampilan = $_POST["keterampilan"];

        $sql = "UPDATE users SET pendidikan='$pendidikan', pengalaman_kerja='$pengalaman_kerja', keterampilan='$keterampilan' WHERE id=$id";

        if ($conn->query($sql) === FALSE) {
            echo "Error updating record: " . $conn->error;
        }
    }


// Close connection
$conn->close();
?>

<!-- FILEPATH: /d:/Kuliahan/SEMESTER 3/Pemrograman Web/cv/admin.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css”> 
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js”></script> 
    <script src=”https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js”></script> 
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js”></script> 
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <a class="btn btn-danger" href="logout.php">Logout</a>
        <h2>Update CV</h2>
    <form method="POST" class="form-group row">
        <div class="col-xs-3">
            <label for="pendidikan">Pendidikan</label><br>
            <input type="text" name="pendidikan" class="form-control" required><br>
        </div>
        <div class="col-xs-3">
            <label for="pengalaman_kerja">Pengalaman Kerja</label><br>
            <input type="text" name="pengalaman_kerja" class="form-control" required><br>
        </div>
        <div class="col-xs-3">
            <label for="keterampilan">Keterampilan</label><br>
            <input type="text" name="keterampilan" class="form-control" required><br>
        </div>
        <input type="submit" name="update" value="Update" class="btn btn-success">
    </form>
    </div>
</body>
</html>
