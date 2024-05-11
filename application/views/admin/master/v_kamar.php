<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Data Kamar
              </h3>
              <nav aria-label="breadcrumb">
                
              </nav>
            </div>
            
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-header">
                      <!-- <h4 class="card-title">Data Fasilitas</h4> -->
                      <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/kamar/tambah') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
                      </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" id="example">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nomor Kamar</th>
                            <th>Tarif per Bulan</th>
                            <th>Jumlah Fasilitas</th>
                            <th>Status Kamar</th>
                            <th>Foto Kamar</th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach($master_kamar as $kamar) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $kamar->nomor_kamar ?></td>
                            <td><?= $kamar->harga ?></td>
                            <td><?= $kamar->jumlah_fasilitas, ' Fasilitas' ?></td>
                            <td>
                            <?php if ($kamar->status == 'Belum Terpakai'): ?>
                                <span class="badge bg-danger">Belum Terpakai</span>
                            <?php else: ?>
                                <span class="badge bg-primary">Terpakai</span>
                            <?php endif; ?>
                            </td>
                            <td>
                              <a href="<?= base_url('uploads/foto/'.$kamar->foto) ?>" target="_blank"><img src="<?= base_url('uploads/foto/'.$kamar->foto) ?>" alt="<?= $kamar->foto; ?>"></a>
                            </td>
                            <td>
                              <a href="" data-bs-target="#detailKamar<?= $kamar->nomor_kamar ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><i class="mdi mdi-eye"></i></a>
                                <a href="<?= base_url('admin/kamar/edit_kamar/'. $kamar->nomor_kamar) ?>" class="btn btn-info btn-sm"><i class="mdi mdi-pencil"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#hapuskamar<?= $kamar->nomor_kamar ?>" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
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
            
        </div>
  
<!-- Modal detail -->
<?php foreach($master_kamar as $kamar) : ?>
<div class="modal fade" id="detailKamar<?= $kamar->nomor_kamar ?>" tabindex="-1" aria-labelledby="detailKamarLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailKamarLabel">Detail Kamar | #<?= $kamar->nomor_kamar ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Nomor Kamar &nbsp;&nbsp;&nbsp; : <?= $kamar->nomor_kamar ?></h5>
                <h5>Tarif per Bulan &nbsp; : <?= $kamar->harga ?></h5>
                <h5>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $kamar->alamat ?></h5>
                <h5>Jumlah Fasilitas : <?= $kamar->jumlah_fasilitas ?> Fasilitas</h5>
                <h5>Status Kamar &nbsp;&nbsp;&nbsp;&nbsp; : <?php if ($kamar->status == 'Belum Terpakai'): ?>
                                <span class="badge bg-danger">Belum Terpakai</span>
                            <?php else: ?>
                                <span class="badge bg-primary">Terpakai</span>
                            <?php endif; ?></h5>
                <h5>Keterangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $kamar->keterangan ?></h5>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Modal Hapus -->
<?php foreach($master_kamar as $kamar) : ?>
<div class="modal fade" id="hapuskamar<?= $kamar->nomor_kamar ?>" tabindex="-1" aria-labelledby="hapuskamarLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapuskamarLabel">Apakah kamu ingin menghapus
                    data ini?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kamar/hapus_kamar/'.$kamar->nomor_kamar) ?>" method="POST">
                    <input type="hidden" id="nomor_kamar" name="nomor_kamar" value="<?= $kamar->nomor_kamar ?>">
                    <p class="text-danger">Menghapus Data Kamar denga nomor kamar :
                        <b><?= $kamar->nomor_kamar; ?></b>
                    </p>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>