<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Asisten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="mt-4 p-5 text-white bg-primary rounded">
            <h1 style="text-align: left">Cari Asisten Praktikum</h1>
        </div>
        <div class="mt-4">
            <form action="/asisten/search" method="post">
                <?= csrf_field() ?>
                <p>
                    <label for="nim">Cari NIM </label>
                    <input type="text" name="key" class="form-control" placeholder="Masukkan NIM..">
                </p>
                <button type="submit" class="btn btn-primary" value="search">Cari</button>
            </form>
        </div>
        <?php
        if (!empty($hasil)) {
            echo "<br><h1>Hasil Pencarian</h1>";
            echo "Nama: " . $hasil['NAMA'];
            echo "<br>Praktikum: " . $hasil['PRAKTIKUM'];
            echo "<br>IPK: " . $hasil['IPK'];
        }
        ?>
    </div>
</body>

</html>