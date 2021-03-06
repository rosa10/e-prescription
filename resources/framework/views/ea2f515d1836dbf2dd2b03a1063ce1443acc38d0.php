<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">E-Prescription</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Prescription Form</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <form action=""></form>
  <div class="mb-3 row">
    <label for="pasien" class="col-sm-2 col-form-label">Pasien</label>
    <div class="col-sm-10">
      <input  class="form-control" id="pasien">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="ket" class="col-sm-2 col-form-label">Jumlah Item</label>
    <div class="col-sm-10">
      <input type="string" class="form-control" id="ket">
    </div>
  </div>
<div class="mb-3 row">
    <label for="exampleDataList" class="form-label">Jenis Obat</label>
    <div class="col-sm-10">
      <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="Non Racikan">
  <option value="Racikan">
</datalist>
<button type="button" class="btn btn-secondary">Secondary</button>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="exampleDataList" class="form-label">Nama Obat</label>
    <div class="col-sm-10">
      <input class="form-control" list="nama" id="exampleDataList" placeholder="Type to search...">
<datalist id="nama">

  <?php $__currentLoopData = $obatalkes_m; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obatalkes_m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($obatalkes_m->obatalkes_nama); ?>">stok: <?php echo e($obatalkes_m->stok); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</datalist>
    </div>
  </div>
    <div class="mb-3 row">
    <label for="exampleDataList" class="form-label">Ketentuan</label>
    <div class="col-sm-10">
      <input class="form-control" list="signa" id="exampleDataList" placeholder="Type to search...">
<datalist id="signa">
  <?php $__currentLoopData = $signa_m; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $signa_m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($signa_m->signa_nama); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</datalist>
    </div>
  </div>
<div class="mb-3 row">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="int" class="form-control" id="jumlah"
      
      >
    </div>
  </div>

      
<?php # membuka tag PHP

$jumlahitem = @$_POST['jumlahitem'];
$jenis = @$_POST['jenis'];

# jangan lupa tutup tag PHP
if ($jumlahitem) {
    echo "<strong>Email:</strong> {$jumlahitem} <br>";
}

if ($jenis) {
    echo "<strong>Kata Sandi:</strong> {$jenis} <br>";
}
?>
      <h2>Draft Resep</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\example-app\resources\views/dashboard.blade.php ENDPATH**/ ?>