<!DOCTYPE html>
<html>

<head>
  <title>Data Diri</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin-top: 150px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .container {
      margin-top: auto;
      margin-bottom: auto;
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .data-label {
      font-weight: bold;
      color: #555;
    }

    .data-value {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Data Diri</h1>

    <?php
    $nama = "Darmawan Jiddan";
    $nim = 2115101013;
    $alamat = "Gunung Semeru Street, Buleleng, Bali";
    $email = "darmawan.jiddan@undiksha.ac.id";
    ?>

    <p class="data-label">Nama:</p>
    <p class="data-value"><?php echo $nama; ?></p>

    <p class="data-label">Umur:</p>
    <p class="data-value"><?php echo $nim; ?></p>

    <p class="data-label">Email:</p>
    <p class="data-value"><?php echo $email; ?></p>

    <p class="data-label">Alamat:</p>
    <p class="data-value"><?php echo $alamat; ?></p>

  </div>

</body>

</html>