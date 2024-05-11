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
                        <h4>Tambah Data Kamar</h4>
                        <form action="<?= base_url('admin/kamar/add_kamar') ?>" method="POST" enctype="multipart/form-data">
                        <div class="card border border-2">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nomor Kamar</label>
                                    <input type="text" readonly class="form-control" value="<?= $kode_nomor ?>" name="nomor_kamar" id="nomor_kamar">
                                </div>
                                <div class="form-group">
                                    <label for="">Harga Kamar per Bulan</label>
                                    <input type="text" class="form-control" name="harga" id="harga">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan <sup>(Optional)</sup></label>
                                    <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
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
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php foreach($master_fasilitas as $fasilitas) : ?>
                                            <div class="form-check form-switch mx-3">
                                                <label for=""><?= $fasilitas->nama ?></label>
                                                <input type="checkbox" name="check[]" value="<?= $fasilitas->nama ?>" class="form-check-input">
                                            </div>
                                            <?php endforeach; 
                                                endif;
                                            ?>
                                        </div>
                                    
                                    </div>
                                    
                               
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
                $('#harga').on('input', function() {
                    var harga = $(this).val();
                    // Format harga menjadi mata uang dengan pemisah ribuan
                    var formatted_harga = formatRupiah(harga);
                    $(this).val(formatted_harga);
                });
            });

            function formatRupiah(angka) {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return 'Rp. ' + rupiah;
            }
        </script>
    