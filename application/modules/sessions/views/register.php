<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Plataforma de inovação aberta. ">
  <meta name="keywords" content="open innovation, inovação aberta, innovation, inovação,">
  <title><?php echo $this->config->item('app_title'); ?></title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo base_url(); ?>assets/plugins/materialize/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/plugins/materialize/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/plugins/materialize/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->

  <!-- CORE CSS-->
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url(); ?>assets/plugins/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="<?php echo base_url() . $module . '/add';?>" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">Junte-se a nossa comunidade agora!</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="name" type="text">
            <label for="name" class="center-align">Nome</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s2">
            <i class="mdi-social-person-outline prefix"></i>
          </div>
          <div class="input-field col s10">
            <select name="job_id" required>
              <option value="" disabled selected>Choose your option</option>
              <?php if (isset ($jobs)) { ?>
            		<?php foreach ( $jobs as $job ) { ?>
                  <option value="<?php echo $job->job_id; ?>"><?php echo $this->lang->line($job->job_name); ?></option>
                <?php } ?>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input name="email" type="email">
            <label for="email" class="center-align">E-mail</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" type="password">
            <label for="password">Senha</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password-again" type="password">
            <label for="password-again">Repita a senha</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Registrar</button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Já tem uma conta? <a href="<?php echo base_url() . $module;?>">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- ================================================ Scripts ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/materialize/js/plugins.js"></script>

  <script type="text/javascript">
    window.onload = function(){
      // toast success
      <?php
      if ($this->session->flashdata('success')){
      ?>
      setTimeout(function(){Materialize.toast("<?php echo $this->session->flashdata('success'); ?>", 3000, 'rounded');}, 1500);
      <?php
      }
      ?>
      // toast error
      <?php
      if ($this->session->flashdata('error')){
      ?>
      setTimeout(function(){Materialize.toast("<?php echo $this->session->flashdata('error'); ?>", 3000, 'rounded');}, 1500);
      <?php
      }
      ?>
    }
  </script>
  </body>
</html>
