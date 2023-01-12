<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Hasil Hitung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <meta name="theme-color" content="#712cf9">
</head>

<body>
    <div class="container py-3">
        <div class="container">
            <section class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Hasil Hitung</h3>
                    <a href="<?= base_url('/'); ?>">Back</a>
                </div>
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <h3>Berat barang</h3>
                            <h1><?= $values[0];?>Kg</h1>
                            <div class="d-flex justify-content-between">
                                <h3>Chargeable Weight status</h3>
                                <?php if ($values[1] == True) : ?>
                                <p class="">✅</p>
                                <?php else: ?>
                                <p class="">❌</p>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <p>Keterangan:</p><br/>
                            <p>✅ menunjukan bahwa formula matrix lebih berat daripada berat barang</p><br/>
                            <p>❌ menunjukan bahwa formula matrix lebih ringan daripada berat barang</p><br/>
                            </div>
                        </div
                        </div>
                    </div>
                </div>
            </section>
        </div>
</body>

</html>
