

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <title>Edit Data</title>
</head>
<body>
    <div id="title">
        <h2 class="d-none d-md-block text-uppercase text-center">Biodata Pendaftaran</h2>
        <h4 class="d-md-none text-uppercase text-center">Biodata Pendaftaran</h4>
    </div>
    <!-- main page -->
    <main class="container">
        <?php 
            include('koneksi.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM tugas2 WHERE id='$id'";
	        $result = mysqli_query($conn,$sql);
	        while($data = mysqli_fetch_array($result)){
        ?>
        <form action="update-data.php" method="post" name="update-data">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="form-group">
                <label for="nik" >NIK</label>
                <input type="number" class="form-control" id="nik" name="nik" value="<?php echo $data['nik']; ?>">
            </div>
            <div class="form-group">
                <label for="nama" >Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="nim" >NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $data['nim']; ?>">
            </div>
            <div class="form-group">
                <label for="tempat_lahir" >Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir" >Tangal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
            </div>
            <div class="form-group">
                <h6>jenis kelamin sebelumnya : <?php echo $data['jenis_kelamin']; ?></h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="jenis_kelamin1" name="jenis_kelamin" value="laki-laki">
                        <label for="jenis_kelamin1">Laki - Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="perempuan">
                        <label for="jenis_kelamin2">perempuan</label>
                    </div>
            </div>
            <div class="form-group">
                <label for="golongan_darah">Golongan Darah sebelumnya : <?php echo $data['golongan_darah']; ?></label>
                <select name="golongan_darah" class="form-control" id="golongan_darah">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="ab">AB</option>
                    <option value="o">O</option>
                    <option value="biru">Biru</option>
                </select>
            </div>
            <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-primary">save</button>
            </div>
        </form>
            <?php } ?>
    </main>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
