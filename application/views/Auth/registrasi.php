<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />

    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo_pp.png">
    <title><?= $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="node_modules/selectric/public/selectric.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/components.css" />
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="login-brand">
                            <img src="https://smktelkom-pwt.sch.id/wp-content/uploads/2018/10/Logo-SMK-Telkom-Purwokerto.png" alt="logo" width="200" />
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 offset-lg-3">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>Registrasi Akun Guru</h4>
                                    </div>

                                    <div class="card-body">
                                        <form method="POST" action="">
                                            <div class=" row">
                                                <div class="form-group col-12">
                                                    <label for="nama">Nama Lengkap</label>
                                                    <input id="nama" type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" />
                                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" />
                                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="password1" class="d-block">Password</label>
                                                <input id="password1" type="password" class="form-control" name="password1" />
                                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="password2" class="d-block">Konfirmasi Password</label>
                                                <input id="password2" type="password" class="form-control" name="password2" />
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                    Registrasi
                                                </button>
                                            </div>
                                            <a href="<?= base_url('Auth') ?>" class="btn btn-transparent text-primary btn-lg btn-block">Kembali ke login</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Buku Saku Siswa 2023
                            <br><center><p>by <a href='https://adityaekasantoso.my.id/' title='adityaekasantoso.my.id' target='_blank'>Aditya Eka Santoso</a></p></center>
                            <div class="text-center mt-5 text-small">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>assets/js/page/auth-register.js"></script>
</body>

</html>