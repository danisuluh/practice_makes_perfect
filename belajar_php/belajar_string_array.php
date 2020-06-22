<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar String PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>

<body>
  <h1>
    <?php echo  "Belajar String PHP"; ?>
  </h1>
  <?php
  //tipe data string

  $nama = "Dani Suluh Permadi";
  $kelas = 'Sanbercode Batch';
  echo $nama;
  echo "<br>";
  echo $kelas;
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  $teks1 = "Halo Semuanya, Nama Saya Dani Suluh Permadi";

  echo $teks1;
  echo "<br>";
  //menghitung jumlah karakter
  echo "Kalimat Tersebut terdiri dari " . strlen($teks1) . " Karakter";
  echo "<br>";
  echo "<br>";

  //menghitung jumlah kata
  echo "Dan terdiri dari " . str_word_count($teks1) . " Kata";

  echo "<br>";
  echo "<br>";

  //Belajar Array dan Array Associative
  echo "<h1>Array dan Array Associative</h1>";

  //array biasa
  $array1 = array("Dani", "Suluh", "Permadi");
  print_r($array1);
  echo "<br>";
  echo "<br>";

  for ($a = 0; $a < count($array1); $a++) {
    echo '<div class="card">
            <div class="card-body">
              ' . $array1[$a] . '
            </div>
          </div>
    <br>';
  }

  //atau menggunakan foreach
  echo "<br>";
  echo "<br>";
  foreach ($array1 as $array) {
    echo $array . '<br>';
  }

  ?>
</body>

</html>