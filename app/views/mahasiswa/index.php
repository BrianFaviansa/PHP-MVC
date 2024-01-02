<div class="container mt-4">

    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <button type="button" class="tombolTambahData btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data["mhs"] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?=$mhs["nama"]; ?>
                        <span class="d-flex">
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge bg-primary me-2 text-decoration-none">detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs["id"]; ?>" class="tampilModalUbah badge bg-success me-2 text-decoration-none" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"]; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('yakin ingin menghapus data ini?')">hapus</a>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
                    
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">nim</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="prodi">prodi</label>
                    <select class="form-control" name="prodi" id="prodi">
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Informatika">Informatika</option>
                    </select>
            </div>
    </div>
    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
</div>
</div>




