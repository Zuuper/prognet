<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <title>Tambah Data</title>
</head>
<body>
    <!-- Judul -->
    <div id="title">
        <h2 class="d-none d-md-block text-uppercase text-center">Biodata Pendaftaran</h2>
        <h4 class="d-md-none text-uppercase text-center">Biodata Pendaftaran</h4>
    </div>
    <!-- main page -->
    <main class="container">
        <form action="input-data.php" method="post" name="tambah-data">
            <div class="form-group">
                <label for="nik" >NIK</label>
                <input type="number" class="form-control" id="nik" name="nik">
            </div>
            <div class="form-group">
                <label for="nama" >Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nim" >NIM</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="form-group">
                <label for="tempat_lahir" >Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir" >Tangal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <h6>jenis kelamin</h6>
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
                <h6>jenis kelamin</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="hobi1" name="hobi[]" value="memancing keributan">
                        <label for="hobi1">Memancing keributan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hobi2" name="hobi[]" value="berfoya foya">
                        <label for="hobi2">berfoya - foya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hobi3" name="hobi[]" value="berdebat">
                        <label for="hobi3">berdebat</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hobi4" name="hobi[]" value="belajar online">
                        <label for="hobi4">Belajar Online</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hobi5" name="hobi[]" value="menari">
                        <label for="hobi5">Menari</label>
                    </div>
            </div>
            <div class="form-group">
                <label for="golongan_darah">Golongan Darah</label>
                <select name="golongan_darah" class="form-control" id="golongan_darah">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="ab">AB</option>
                    <option value="o">O</option>
                    <option value="biru">Biru</option>
                </select>
            </div>
            <div class="form-group">
                <label for="upload" >Upload Gambar</label>
                <input type="file" class="form-control" id="upload" name="upload">
            </div>
            <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-primary">save</button>
            </div>
        </form>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>