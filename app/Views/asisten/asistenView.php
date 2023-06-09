<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pendaftaran Asisten Praktikum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="mt-4 p-5 text-white bg-primary rounded">
      <h1 style="text-align: left">Daftar Asisten Praktikum</h1>
      <p>
        Asisten Praktikum mempunyai peran yang sangat penting dalam kegiatan
        Praktikum di kelas. Keberadaannya sangat dibutuhkan oleh dosen
        pengampu untuk membantu dosen dalam mendampingi peserta praktikum
        dalam melaksanakan percobaan-percobaan yang telah disiapkan oleh dosen
        pengampu. Mahasiswa-mahasiswa sangat didorong untuk dapat menjadi
        seorang asisten praktikum. Selain memberikan pengalaman bekerja
        bersama dosen, menjadi Asisten Praktikum dapat mengasah kepedulian
        terhadap orang lain yang membutuhan.
      </p>
    </div>
  </div>
  <div class="container mt-3">
    <?php
    echo '<table class="table table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas Praktikum</th>
            <th>IPK</th>
          </tr>
        </thead>';
    $iterator = 1;
    foreach ($mahasiswa as $asisten) {
      echo '<tr>';
      echo '<td>' . $iterator++ . '</td>';
      echo '<td>' . $asisten['NIM'] . '</td>';
      echo '<td>' . $asisten['NAMA'] . '</td>';
      echo '<td>' . $asisten['PRAKTIKUM'] . '</td>';
      echo '<td>' . $asisten['IPK'] . '</td>';
      echo '</tr>';
    }
    echo '</table>';
    ?>
    <br>
    <form action="/login/logoutasisten" method="post">
      <button type="submit" class="btn btn-primary" value="logout" name="submit">Logout</button>
    </form>
    <br>
  </div>
</body>

</html>