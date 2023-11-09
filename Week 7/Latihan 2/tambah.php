<?php 
require 'function.php';



 if (isset( $_POST ["submit"])) {
    $NIM = $_POST ["NIM"];
    $Nama = $_POST ["Nama"];
    $Alamat = $_POST ["Alamat"];
    $Jurusan = $_POST ["Jurusan"];
    $Email = $_POST ["Email"];

    $query = "INSERT INTO camaba VALUES ('$NIM','$Nama','$Alamat','$Jurusan','$Email')";

    mysqli_query($conn,$query);
    
    
    
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calon Mahasiswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan 1/index.php">
        
        Calon Mahasiswa Baru
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="NIM" class="form-label">NIM :</label>
                <input type="text" class="form-control" id="NIM" name ="NIM" required>
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="Nama" name ="Nama" required>
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat :</label>
                <input type="text" class="form-control" id="Alamat" name ="Alamat" required>
            </div>
            <div class="mb-3">
                <label for="Jurusan" class="form-label">Jurusan :</label>
                <input type="text" class="form-control" id="Jurusan" name ="Jurusan" required>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email :</label>
                <input type="text" class="form-control" id="Email" name ="Email" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>