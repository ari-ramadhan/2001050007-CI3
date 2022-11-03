<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Document</title>

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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tambah Data</a>
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
            <span class="card-header">Data Mahasiswa</span>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Ari Ramadhan</td>
                        <td>2001050007</td>
                        <td>Seganteng Kr. Monjok</td>
                        <td>
                            <button type="button" class="btn btn-warning">UBAH</button>
                            <button type="button" class="btn btn-danger">HAPUS</button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Ferdi Sambo</td>
                        <td>2001050001</td>
                        <td>Lapas Suka Suka</td>
                        <td>
                            <button type="button" class="btn btn-warning">UBAH</button>
                            <button type="button" class="btn btn-danger">HAPUS</button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Kekeyi ™</td>
                        <td>2001050001</td>
                        <td>Nganjuk</td>
                        <td>
                            <button type="button" class="btn btn-warning">UBAH</button>
                            <button type="button" class="btn btn-danger">HAPUS</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>