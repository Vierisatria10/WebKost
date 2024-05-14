<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Kriteria
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
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#modalAddKriteria">Tambah Data</button>
                      </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped" id="example">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama Kriteria</th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach($master_kriteria as $kriteria) : ?>
                          <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $kriteria->nama ?></td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#editkriteria<?= $kriteria->id_kriteria ?>" class="btn btn-info btn-sm"><i class="mdi mdi-pencil"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#hapuskriteria<?= $kriteria->id_kriteria ?>" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
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

<!-- Modal add -->
<div class="modal fade" id="modalAddKriteria" tabindex="-1" aria-labelledby="modalAddFasilitasLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddFasilitasLabel">Add Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-secondary btn-sm" id="btnAddRow"><i class="mdi mdi-plus"></i></button>

            </div>

            <div class="modal-body">
                <form id="formAddKriteria">
                    <div id="kriteriaFields">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="kriteria[]" placeholder="Nama Fasilitas">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<?php foreach($master_kriteria as $kriteria) : ?>
<div class="modal fade" id="editkriteria<?= $kriteria->id_kriteria ?>" tabindex="-1" aria-labelledby="editkriteriaLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editkriteriaLabel">Edit Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kriteria/update_kriteria') ?>" method="POST">
                    <div id="kriteriaFields">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id_kriteria" value="<?= $kriteria->id_kriteria ?>">
                            <input type="text" class="form-control" name="edit_kriteria" value="<?= $kriteria->nama ?>" placeholder="Nama kriteria">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Modal Hapus -->
<?php foreach($master_kriteria as $kriteria) : ?>
<div class="modal fade" id="hapuskriteria<?= $kriteria->id_kriteria ?>" tabindex="-1" aria-labelledby="hapuskriteriaLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapuskriteriaLabel">Apakah kamu ingin menghapus
                    data ini?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kriteria/hapus_kriteria/'.$kriteria->id_kriteria) ?>" method="POST">
                    <input type="hidden" id="id_kriteria" name="id_kriteria" value="<?= $kriteria->id_kriteria ?>">
                    <p class="text-danger">Menghapus Data Kriteria yang bernama :
                        <b><?= $kriteria->nama; ?></b>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
     $(document).ready(function () {
        // Add row
        $('#btnAddRow').on('click', function () {
            $('#kriteriaFields').append('<div class="mb-3"><input type="text" class="form-control" name="kriteria[]" placeholder="Nama Fasilitas"></div>');
        });

        // Submit form using AJAX
        $('#formAddKriteria').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/Kriteria/add_kriteria"); ?>',
                data: $(this).serialize(),
                success: function (response) {
                    console.log(response);
                    Swal.fire({
                        title: "Berhasil!",
                        text: response.message,
                        icon: response.status,
                        confirmButtonText: 'Ok',
                    });
                    setTimeout(function(){
                        location.reload();
                        window.location.href = "<?= base_url('admin/kriteria') ?>";
                    },2000);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Terjadi kesalahan saat menambahkan fasilitas.',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            });
        });
    });
</script>
