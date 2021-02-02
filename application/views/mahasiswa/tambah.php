<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?= validation_errors(); ?>
                    <form action="nama" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" name="nrp" class="form-control" id="nrp">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatik"> Teknik Informatika</option>
                                <option value="Teknik Sipil"> Teknik Sipil</option>
                                <option value="Teknik Pemesinan"> Teknik Pemsinan</option>
                                <option value="Desain Komunikasi Visual"> Desain Komunikasi Visual</option>
                            </select>
                        </div>
                        <a href="" type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>