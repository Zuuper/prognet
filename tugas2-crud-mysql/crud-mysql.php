
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Judul -->
    <div id="title">
        <h2 class="d-none d-md-block text-uppercase text-center">Biodata Pendaftaran</h2>
        <h4 class="d-md-none text-uppercase text-center">Biodata Pendaftaran</h4>
    </div>
    <!-- main page -->
    <main>
        <!-- buat add data dengan cara ngeklik button add data -->
        <section id="new-data-md">
            <!-- opsi yang keliatan saat ukuran layar diatas medium -->
            <div class="container d-none d-md-block">
                <div class="row">
                    <div class="col-10">
                        <h4>Masukan Data Baru</h4>
                        <h4>Menggunakan button disebelah kanan</h4>
                    </div>
                    <div class="col-2 text-center d-flex align-items-center justify-content-center">
                        <a href="add-data.php" target="_blank" rel="noopener noreferrer">
                            <button type="button" class="btn btn-primary" style="width : 5rem"> <i class="fas fa-plus    "></i></button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- opsi yang keliatan saat ukuran layar dibawah medium -->
            <div class="container d-flex justify-content-center d-md-none text-center">
                <a href="add-data.php" target="_blank" rel="noopener noreferrer">
                    <button type="button" class="btn btn-primary ">add data</button>       
                </a>            
            </div>
        </section>
        <!-- buat nampilin tabelnya -->
        <section id="data-tabel">
            <!-- opsi yang keliatan saat ukuran layar diatas medium -->
            <div class="container table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-uppercase ">No</th>
                            <th scope="col" class="text-uppercase ">Nik</th>
                            <th scope="col" class="text-uppercase ">nama</th>
                            <th scope="col" class="text-uppercase ">jenis Kelamin</th>
                            <th scope="col" class="text-uppercase ">option</th>
                        </tr>
                    </thead>
                    <?php
                        // masukin konfigurasi database
                        include('koneksi.php');

                        // fecth semua data dari table database
                        // or die itu maksudnya kalo misalnya databasenya off nanti bakal ngasi error (CMIIW)
                        $result = mysqli_query($conn, "SELECT * FROM tugas2");
                        $nomor = 1;
                        while($data = mysqli_fetch_array($result)){
                    ?>
                    <tbody>
                        <th scope="row"><?php echo $nomor++ ?></th>
                        <td><?php echo $data['nik'] ?> </td>
                        <td><?php echo $data['nama'] ?> </td>
                        <td><?php echo $data['jenis_kelamin'] ?></td>
                        <td>
                            <a href="view-data.php?id=<?php echo $data['id']?>"><i class="fas fa-eye fa-lg"></i></a>
                            <a href="edit-data.php?id=<?php echo $data['id']?>"><i class="fas fa-pen fa-lg"></i></a>
                            <a href="delete-data.php?id=<?php echo $data['id']?>"><i class="fas fa-trash-alt fa-lg   "></i></a>
                        </td>
                    </tbody>
                        <?php } ?>
                </table>
            </div>
            <!-- opsi yang keliatan saat ukuran layar dibawah medium -->
            <div>

            </div>
        </section>
    </main>

    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>