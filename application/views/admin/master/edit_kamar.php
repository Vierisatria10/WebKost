<div class="content-wrapper">
            <div class="page-header">
              <!-- <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Tambah Kamar
              </h3> -->
              <nav aria-label="breadcrumb">
                
              </nav>
            </div>
            
            
            <div class="row">
              <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Edit Data Kamar</h4>
                        <form action="<?= base_url('admin/kamar/update_kamar/'.$edit_kamar->nomor_kamar) ?>" method="POST" enctype="multipart/form-data">

                        <div class="card border border-2">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nomor Kamar</label>
                                    <input type="text" readonly class="form-control" value="<?= $edit_kamar->nomor_kamar ?>" name="nomor_kamar" id="nomor_kamar">
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Kamar per Bulan</label>
                                    <input type="text" class="form-control" value="<?= $edit_kamar->harga ?>" name="harga" id="harga">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" value="<?= $edit_kamar->alamat ?>" name="alamat" id="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="hidden" class="form-control" value="<?= $edit_kamar->foto ?>" name="old_foto" id="old_foto">
                                    <input type="file" class="form-control" name="foto" id="foto">
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan <sup>(Optional)</sup></label>
                                    <textarea name="keterangan" id="keterangan" class="form-control">
                                    <?= $edit_kamar->keterangan ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Pilih Fasilitas Kamar</h4>
                        <div class="card border border-2">
                            <div class="card-body">
                                <?php if(empty($master_fasilitas)) : ?>
                                    <p class="text-danger">Data Fasilitas Belum Tersedia</p>
                                <?php else: ?>
                                <?php foreach($master_fasilitas as $fasilitas) : ?>
                                    <div class="form-check form-switch mx-3">
                                        <label for=""><?= $fasilitas->nama ?></label>
                                        <input type="checkbox" name="check[]" value="<?= $fasilitas->nama ?>" class="form-check-input" <?php if (in_array($fasilitas->nama, $selected_fasilitas)) echo 'checked'; ?>>
                                        <?php if (in_array($fasilitas->nama, $selected_fasilitas)): ?>
                                            <button class="btn btn-danger btn-sm btn-delete" data-nama="<?= $fasilitas->nama ?>"><i class="mdi mdi-delete"></i></button>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; 
                                    endif;
                                ?>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button class="btn btn-dark" type="reset">Reset</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.btn-delete').click(function() {
        var namaFasilitas = $(this).data('nama');
        $('input[type=checkbox][value="'+namaFasilitas+'"]').prop('checked', false);
    });
});
</script>
       