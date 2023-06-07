<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hapus Data Asisten Praktikum</title>
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
            <h1 style="text-align: left">Hapus Data Asisten Praktikum</h1>
        </div>
    </div>
    <div class="container">
        <form action="/asisten/delete" method="post">
            <?= csrf_field() ?>
            <div class="mb-3 mt-4">
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" class="form-control" id="NIM" name="nim" placeholder="Masukkan NIM" />
            </div>
            <div id="valueCheck"></div>
            <button type="submit" class="btn btn-primary" style="margin-top: 35px">
                Hapus
            </button>
        </form>
    </div>
</body>

</html>