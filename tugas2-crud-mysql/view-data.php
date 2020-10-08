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
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <h4 class="text-left">NIK</h4>
                </div>
                <div class="col-9">
                    <h4 class="text-left">: <?php echo $data['nik'] ?> </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <h4 class="text-left">Nama</h4>
                </div>
                <div class="col-9">
                    <h4 class="text-left">: <?php echo $data['nama'] ?> </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <h4 class="text-left">NIM</h4>
                </div>
                <div class="col-9">
                    <h4 class="text-left">: <?php echo $data['nim'] ?> </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <h4 class="text-left">Tempat Lahir</h4>
                </div>
                <div class="col-9">
                    <h4 class="text-left">: <?php echo $data['tempat_lahir'] ?> </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <h4 class="text-left">Tanggal Lahir</h4>
                </div>
                <div class="col-9">
                    <h4 class="text-left">: <?php echo $data['tanggal_lahir'] ?> </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <h4 class="text-left">Jenis Kelamin</h4>
                </div>
                <div class="col-9">
                    <h4 class="text-left">: <?php echo $data['jenis_kelamin'] ?> </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <h4 class="text-left">Golongan Darah</h4>
                </div>
                <div class="col-9">
                    <h4 class="text-left">: <?php echo $data['golongan_darah'] ?> </h4>
                </div>
            </div>
        </div>
    <?php } ?>
    <div>
        <a href="crud-mysql.php" class="col-2 d-flex align-items-end justify-content-end">
            <button type="button" class="btn btn-primary text-uppercase" style="width : 5rem">Kembali</button>        
        </a>
    </div>
    
    </main>
    
</body>
</html>