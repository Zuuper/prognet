<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
    <title>Tabel Perkalian</title>
</head>
<body>
    <!-- Judul -->
    <div id="title">
        <h1 class="big-text text-uppercase text-center ">Table Perkalian menggunakan Php</h1>
    </div>
    <!-- main section -->
    <main id="main-menu">
        <!-- form section -->
        <section id="form">
            <h3>Masukan jumlah table perkalian</h3>
            <form action="tabel_perkalian.php" method="post" id="isian-data">
                <div class="form-section">
                    <label for="nilai">Jumlah nilai</label>
                    <input type="number" class="form-control col-5" id="nilai" name="fnilai" aria-describedby="nilai-baris" required>
                    <small id="nilai-baris">menentukan jumlah baris yang akan digunakan dalam </small>
                </div>
                <div class="form-section">
                    <button type="submit" class="btn btn-primary text-uppercase">Buat table</button>
                </div>
                
            </form>
        </section>

        <!-- table section -->
        <section id="table-perkalian">
            <?php 
            $nilai = $_POST['fnilai'];
            echo '<table id="table" class="table form-section ">';
            echo '<tr class="yellow-background">';
            echo '<th class="">X</th>';
            // nilai x berfungsi untuk kolom pada tabel
            for($x = 0; $x <= $nilai ;$x++){
                echo '<th>'.$x.'</th>';
            }
            echo '</tr>';
            for($x = 0; $x <= $nilai;$x++){
                echo '<tr>';
                echo '<th class="yellow-background">'.$x.'</th>';
                // nilai y berfungsi untuk baris pada tabel
                for($y = 0; $y <=$nilai;$y++){
                    $hasil = $x * $y;
                    echo '<td class="isi-table">'.$hasil.'</td>';
                }
                echo '<tr>';
            }
            echo '</table>'
            ?>
        </section>
    </main>
</body>
<!-- Js Script for Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>