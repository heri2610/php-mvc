<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <?php flasher::flash(); ?>
  </div>
</div>


    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah
        </button>
            <h3 class="mt-2">Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs):?>
                <li class="list-group-item">
                    <?= $mhs['nama'];?>
                    <a href="<?=BASEURL?>/mahasiswa/hapus/<?=$mhs['id']?>" class="badge bg-danger float-end ms-1" onclick="return confirm('tindakan ini akan menghapus data mahasiswa. yakin?');">Delet</a>
                    <a href="<?=BASEURL?>/mahasiswa/edit/<?=$mhs['id']?>" class="badge bg-warning text-dark float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id=<?=  $mhs['id']; ?>>Edit</a>
                    <a href="<?=BASEURL?>/mahasiswa/detail/<?=$mhs['id']?>" class="badge bg-primary float-end ms-1">Detail</a>
            </li>
                <?php endforeach;?>
            </ul>
            
            

        </div>
    </div>
</div>
    
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?=BASEURL;?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
              <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" id="prodi" name="prodi">
                        <option value="Administrasi Publik">Administrasi Publik</option>
                        <option value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
                    </select>
                </div>
              <div class="mb-3">
                  <label for="nim" class="form-label">Nim</label>
                  <input type="number" class="form-control" id="nim" name="nim">
                </div>
              <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email">
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