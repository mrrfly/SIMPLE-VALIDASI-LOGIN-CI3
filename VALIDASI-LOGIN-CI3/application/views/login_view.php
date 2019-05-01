<?php $this->load->view('template/Login/atas');?>
<body class="bg-gradient-primary">

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">HALAMAN LOGIN!</h1>
                  <?php
                  if(!empty($notif)){
                      echo '<div class="alert alert-danger">';
                      echo $notif;
                      echo '</div>';
                  }
                  ?>
                </div>
                <form class="user" role="form" action="<?= base_url('Login/cek') ?>" method="post">
                  <div class="form-group">
                    <input type="text" name="USERNAME" class="form-control form-control-user" placeholder="Masukkan Username">
                  </div>
                  <div class="form-group">
                    <input type="PASSWORD" name="PASSWORD" class="form-control form-control-user" placeholder="Masukkan Password">
                  </div>
                  <input type="submit" value="Login" name="submit" class="btn btn-primary btn-user btn-block">
                  </form>
              </div>
            </div>
          </div>
        </div>
        <p class="footer text-center">Kecepatan Halaman <strong>{elapsed_time}</strong> Detik. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Versi <strong>' . CI_VERSION . '</strong>' : '' ?></p>
      </div>

    </div>

  </div>

</div>
<?php $this->load->view('template/Login/bawah') ?>