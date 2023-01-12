<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Perhitungan Volume Matrix</title>
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
                    <h3 class="panel-title">Perhitungan Volume Matrix</h3>
                </div>
                <div class="panel-body mt-5">
                    <form action="<?= base_url('hitung'); ?>" method="post" class="form-horizontal" role="form" >
                        <?=csrf_field();?>
                        <div class="d-flex flex-column mb-3">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" min=0 id="floatingInput"
                                    placeholder="Masukan angka" value="<?= old('berat');?>" name="berat" required>
                                <label for="floatingInput">Berat barang(kg)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="panjang" value="<?= old('panjang');?> min=0 id="floatingInput"
                                    placeholder="Masukan angka" required>
                                <label for="floatingInput">Panjang barang(cm)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="tinggi" value="<?= old('tinggi');?>"  min=0 id="floatingInput"
                                    placeholder="Masukan angka" required>
                                <label for="floatingInput">tinggi barang(cm)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="lebar" value="<?= old('lebar');?>" min=0 id="floatingInput"
                                    placeholder="Masukan angka" required>
                                <label for="floatingInput">lebar barang(cm)</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
</body>

</html>
