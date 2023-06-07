<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Asisten Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        function checkIpk() {
            var ipk = parseFloat(document.getElementById("ipk").value);
            var msg = document.getElementById("valueCheck");
            if (ipk >= 3.0) {
                msg.textContent = "IPK memenuhi";
                msg.style.color = "#008000";
            } else {
                msg.textContent = "Maaf IPK tidak memenuhi";
                msg.style.color = "#ff0000";
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="mt-4 p-5 text-white bg-primary">
            <h1 style="text-align: left">Update Data Asisten Praktikum</h1>
        </div>
    </div>
    <div class="container">
        <form action="/asisten/update" method="post">
            <?= csrf_field() ?>
            <div class="mb-3 mt-4">
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" class="form-control" id="NIM" name="nim" placeholder="Masukkan NIM" />
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" />
            </div>
            <div class="mb-3">
                <label for="kelasPraktikum" class="form-label">KELAS PRAKTIKUM:</label>
                <select class="form-select" id="kelasPraktikum" name="praktikum">
                    <option>Pemrograman Berbasis Platform</option>
                    <option>Pembelajaran Mesin</option>
                    <option>Rekayasa Perangkat Lunak</option>
                    <option>Struktur Data Linear</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="ipk" class="form-label">IPK:</label>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan IPK" id="ipk" name="ipk" />
                <button class="btn" type="button" style="background-color: rgb(92, 206, 231)" onclick="checkIpk();">
                    Cek IPK
                </button>
            </div>
            <div id="valueCheck"></div>
            <button type="submit" class="btn btn-primary" style="margin-top: 35px">
                Update
            </button>
        </form>
    </div>
</body>

</html>