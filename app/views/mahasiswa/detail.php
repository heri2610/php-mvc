<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Detail Mahasiswa</h3>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['mhs']['nama']?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['email']?></h6>
                    <p class="card-text"><?= $data['mhs']['nim']?></p>
                    <p class="card-text"><?= $data['mhs']['prodi']?></p>
                    <p class="card-text"><?= $data['mhs']['alamat']?></p>
                    <a href="<?= BASEURL?>/mahasiswa" class="card-link badge bg-success">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
