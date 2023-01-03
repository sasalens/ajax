<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">
        <div class="row">
        <div class="tambah col-md-4">
        <h1>Form Pendaftaran</h1>
        <form id="input" method="POST" action="input.php">
            <div class="mb-3">
                <label class="form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" placeholder="masukkan nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat :</label>
                <input type="text" class="form-control" name="alamat" placeholder="masukkan alamat">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" id="sukses">Submit</button>
        </form>
        </div>
        <div class="data col-md-8">
            <div id="tampil"></div>
        </div>
        </div> 
    </div>






    <script src="jquery-3.6.3.min.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>