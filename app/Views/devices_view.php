<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 20px;
        }

        .table {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Devices IoT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link active" aria-current="page" href="#">Devices</a>
                    <a class="nav-link" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTAINER -->
    <div class="container">
        <div class="card">
            <h5 class="card-header bg-secondary text-white">Data Perangkat Anda</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Kuantitas</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($devices as $d) : ?>
                            <tr>
                                <td><?= $d['ID']; ?></td>
                                <td><?= $d['Nama']; ?></td>
                                <td><?= $d['Brand']; ?></td>
                                <td><?= $d['Kuantitas']; ?></td>
                                <td><?= $d['Status']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-success">Details</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>


        <footer class="fixed-bottom text-center text-white" style="background-color: #0a4275;">
            <div class="container p-4 pb-0">
                <!-- Section -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Shelma Alifia - 105219051</span>
                    </p>
                </section>
                <!-- Section -->
            </div>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>