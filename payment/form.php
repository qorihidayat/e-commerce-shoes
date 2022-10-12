<?php
require '../koneksi.php';
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM produk where id = '$id'");
$produk = mysqli_fetch_assoc($result);
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <h1>Payment Method</h1>
    <form action="#" method="get">
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode</label>
            <input type="text" class="form-control kode" id="" value="<?php echo $produk["id"]; ?>" disabled>
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cookie</label>
            <input type="text" class="form-control cookie" id="" value="<?php echo $produk["nama"]; ?>" disabled>
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga</label>
            <input type="text" class="form-control harga" id="" value="<?php echo $produk["harga"]; ?>" disabled>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Pemesan</label>
        <input type="text" class="form-control nama" id="" required>
      </div>
      <div class="mb-3">
        <div class="form-floating">
          <textarea class="form-control alamat" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Alamat Lengkap</label>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kota</label>
            <input type="text" class="form-control kota" id="" required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Provinsi</label>
            <input type="text" class="form-control provinsi" id="" required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Pos</label>
            <input type="text" class="form-control kodepos" id="" required>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jasa Kirim</label>
        <select class="form-select form-control jasa" aria-label="Default select example">
          <option value="JNE">JNE</option>
          <option value="Si Cepat">Si Cepat</option>
          <option value="Wahana">Wahana</option>
        </select>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="checkbox" onclick="submitData()">
        <label class="form-check-label" for="exampleCheck1">Saya setuju bahwa data diatas adalah benar!</label>
      </div>
      <a href="" class="btn btn-success whatsapp w-100">Kirim</a>
      <!-- <button type="submit" class="btn btn-primary whatsapp">Submit</button> -->
    </form>
  </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>