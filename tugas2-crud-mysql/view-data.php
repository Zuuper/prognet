<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <title>Data Pendaftar</title>
</head>
<body>
    <div id="title">
        <h2 class="d-none d-md-block text-uppercase text-center">Biodata Pendaftar</h2>
        <h4 class="d-md-none text-uppercase text-center">Biodata Pendaftar</h4>
    </div>
    <main class="container">
    <?php 
            include('koneksi.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM tugas2 WHERE id='$id'";
	        $result = mysqli_query($conn,$sql);
	        while($data = mysqli_fetch_array($result)){
        ?>
        <div class="card" style="width: 50rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <h6 class="text-left">NIK</h6>
                            </div>
                            <div class="col-9">
                                <p class="text-left">: <?php echo $data['nik'] ?> </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <h6 class="text-left">Nama</h6>
                            </div>
                            <div class="col-9">
                                <p class="text-left">: <?php echo $data['nama'] ?> </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <h6 class="text-left">NIM</h6>
                            </div>
                            <div class="col-9">
                                <p class="text-left">: <?php echo $data['nim'] ?> </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <h6 class="text-left">Tempat Lahir</h6>
                            </div>
                            <div class="col-9">
                                <p class="text-left">: <?php echo $data['tempat_lahir'] ?> </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <h6 class="text-left">Tanggal Lahir</h6>
                            </div>
                            <div class="col-9">
                                <p class="text-left">: <?php echo $data['tanggal_lahir'] ?> </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <h6 class="text-left">Jenis Kelamin</h6>
                            </div>
                            <div class="col-9">
                                <p class="text-left">: <?php echo $data['jenis_kelamin'] ?> </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2">
                                <h6 class="text-left">Golongan Darah</h6>
                            </div>
                            <div class="col-9">
                                <p class="text-left">: <?php echo $data['golongan_darah'] ?> </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6 class="text-left">Hobi</h6>
                        </div>
                        <div class="col-9">
                            <p class="text-left">: <?php echo $data['hobby'] ?> </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a href="crud-mysql.php" class="btn btn-primary">kembali</a>
        </div>
    <?php } ?>
    </main>
    
</body>
</html>