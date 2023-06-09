<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <form action="/login/loginUser" method="post">
                <?= csrf_field() ?>
                <p>
                    <label for="user">User </label>
                    <input type="text" name="usr" class="form-control" placeholder="Masukkan Username..">
                </p>
                <p>
                    <label for="pwd">Password </label>
                    <input type="text" name="pwd" class="form-control" placeholder="Masukkan Password..">
                </p>
                <button type="submit" class="btn btn-primary" value="login" name="submit">Login</button>
            </form>
        </div>
        <br>
        <?php
        if (!empty($eror)) {
            echo $eror;
        }
        ?>
</body>

</html>