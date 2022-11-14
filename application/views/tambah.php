<?php 
if (isset($_POST['submit'])){
    if ($this->KelasModel->tambahData() > 0){
        echo "
        <script>
        alert('Data Fakultas Berhasil ditambah!');
        document.location.href = '" . site_url() . "';
        </script>
        ";
        
        
        
    } else {
        echo "
        <script>
        alert('Data Fakultas Gagal ditambah!');
        document.location.href = '" . site_url('kelascontroller/tambah') . "';
        </script>
        ";        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Fakultas</title>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tugas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo site_url() ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('kelascontroller/tambah') ?>">Tambah Data</a>
                        </li>
                    </ul>

                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">ARI RAMADHAN</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>


        <div class="alert alert-info mt-4 text-center" role="alert">
            <span class="fs-4">ARI RAMADHAN / 2001050007</span>
        </div>
        <div class="card mt-4">
            <span class="card-header">Tambah Data Fakultas</span>
            <div class="card-body row">

                <div class="col-8 ms-auto me-auto">
                    <form method="post" action="">

                        <div class="mb-3">
                            <label for="fakultas" class="form-label fw-bolder badge text-bg-dark fs-6">Fakultas</label>
                            <input type="text" class="form-control" id="fakultas" name="fakultas">
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label fw-bolder badge text-bg-dark fs-6">Prodi</label>
                            <input type="text" class="form-control" id="prodi" name="prodi">
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label fw-bolder badge text-bg-dark fs-6">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas">
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label fw-bolder badge text-bg-dark fs-6">isi</label>
                            <input type="number" class="form-control" id="isi" name="isi">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary " name="submit">Submit</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>