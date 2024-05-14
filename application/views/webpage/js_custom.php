<script>
      $(document).ready(function() {
        $('#range_awal').on('input', function() {
            var range_awal = $(this).val();
            // Format range_awal menjadi mata uang dengan pemisah ribuan
            var formatted_range_awal = formatRupiah(range_awal);
            $(this).val(formatted_range_awal);
        });

        $('#range_akhir').on('input', function() {
            var range_akhir = $(this).val();
            // Format range_akhir menjadi mata uang dengan pemisah ribuan
            var formatted_range_akhir = formatRupiah(range_akhir);
            $(this).val(formatted_range_akhir);
        });
              
        
        $('#formRegister').submit(function(e) {
          e.preventDefault();
          var formData = $(this).serialize();
          $.ajax({
            url: '<?php echo base_url('Page/register'); ?>',
            type: 'POST',
            dataType: 'json',
            data: formData,
            success: function(response) {
              if (response.status == 'success') {
                  // Redirect ke halaman login setelah pendaftaran berhasil
                  Swal.fire({
                    title: 'Register Berhasil',
                    text: response.message,
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 5000
                  });
                  window.location.href = '<?php echo base_url('Page/home'); ?>';
              } else {
                  // Tampilkan pesan error
                  Swal.fire({
                    title: 'Login Gagal',
                    text: response.message,
                    icon: 'error',
                    showConfirmButton: true,
                  });
              }
            }
          });
        });

        $('#logout').click(function() {
          Swal.fire({
              icon: 'warning',
              title: 'Logout',
              text: "Apakah anda ingin keluar dari halaman ini, Yakin?",
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Keluar',
              cancelButtonText: 'Batalkan',
              showLoaderOnConfirm: true,
              reverseButtons: true,
              preConfirm: function() {
                  return new Promise(function(resolve) {
                      Swal.fire({
                          icon: 'success',
                          type: 'success',
                          title: 'Berhasil!',
                          text: 'Anda Berhasil Logout, Terimakasih...',
                          showConfirmButton: true,

                      });
                      window.location = '<?php echo base_url('Page/logout') ?>';
                  });
              },
              allowOutsideClick: false
          });
        });

        $('#login_form').submit(function(e) {
          e.preventDefault();
          var formData = $(this).serialize();
          $.ajax({
              url: '<?php echo base_url('Page/login'); ?>',
              type: 'POST',
              dataType: 'json',
              data: formData,
              success: function(response) {
                  if (response.status == 'success') {
                      // alert(response.message);
                      Swal.fire({
                        title: 'Login Berhasil',
                        text: response.message,
                        icon: 'success',
                        showConfirmButton: true,
                      });
                      // Redirect ke halaman Home setelah login berhasil
                      window.location.href = '<?php echo base_url('Page/home'); ?>';
                  } else {
                      Swal.fire({
                        title: 'Gagal',
                        text: response.message,
                        icon: response.status,
                        showConfirmButton: true,
                      });
                      // alert(response.message);
                  }
              }
          });
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