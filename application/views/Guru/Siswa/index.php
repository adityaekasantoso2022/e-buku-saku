<?php
date_default_timezone_set('Asia/Jakarta');
?>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('Guru/Dashboard'); ?>">E-Buku Saku</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('Guru/Dashboard'); ?>">PS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Guru</li>
            <li class="nav-item">
                <a href="<?= base_url('Guru/Dashboard'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master</li>
            <li class="nav-item">
                <a href="<?= base_url('Guru/Pelanggar'); ?>" class="nav-link"><i class="fas fa-user-tie"></i> <span>Pelanggar</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Guru/Jenispelanggaran'); ?>"><i class="fas fa-exclamation"></i>
                    <span>Jenis Pelanggaran</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Guru/Siswa'); ?>"><i class="fas fa-users"></i> <span>Siswa</span></a>
                </li>
            <li class="nav-item">
                 <a class="nav-link" href="https://drive.google.com/file/d/1a5n1pyfim3mMAVNxHrFNj7Ca0BS5eWfY/view?usp=share_link"; ?><i class="fas fa-book"></i> <span>Jadwal Piket</span></a>
            </li>
        </ul>
    </aside>
</div>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Siswa</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="<?= base_url('Guru/Dashboard') ?>">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Siswa</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Daftar Peserta Didik</h2>
            <p class="section-lead">
                Disini anda dapat Melihat, dan Mencari Data
                Siswa
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="mytable">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>Profil</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Email</th>
                                        <th>Sisa Point</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($allSiswa as $as) : ?>
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                <?= $i++; ?>
                                            </td>
                                            <td>
                                                <img alt="image" src="https://ui-avatars.com/api/?background=FC544C&bold=true&color=fff&length=1&size=128&name=<?= $as['nama'] ?>" style="width: 40px; height: 40px;" class="rounded-circle mr-1" />
                                            </td>
                                            <td style="vertical-align: middle;"><?= $as['nama']; ?></td>
                                            <td style="vertical-align: middle;"><?= $as['kelas']; ?></td>
                                            <td style="vertical-align: middle;"><?= $as['email']; ?></td>
                                            <?php
                                            $badge = '';
                                            if ($as['sisa_point'] > 75 and $as['sisa_point'] <= 100) {
                                                $badge = 'badge-success';
                                            } elseif ($as['sisa_point'] > 51 and $as['sisa_point'] <= 75) {
                                                $badge = 'badge-warning';
                                            } elseif ($as['sisa_point'] > 4 and $as['sisa_point'] <= 50) {
                                                $badge = 'badge-danger';
                                            } elseif ($as['sisa_point'] < 5) {
                                                $badge = 'badge-dark';
                                            }
                                            ?>
                                            <td style="vertical-align: middle;"><span class="badge <?= $badge ?>"><?= $as['sisa_point']; ?></span></td>
                                            <td class="text-center">
                                                <div class="dropdown d-inline">
                                                    <a href="<?= base_url('Guru/Siswa/infopelanggaran/') . $as['siswa_id'] ?>" class="btn btn-info text-white" type="button" data-toggle="tooltip" data-placement="top" title="Info Pelanggaran">
                                                        <i class="fas fa-info-circle"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>