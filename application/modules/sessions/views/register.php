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
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <!-- For Windows Phone -->
  <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png">

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
            <img src="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png" alt="Open Idea" class="circle responsive-img valign profile-image-login">
            <p class="center"><?php echo $this->lang->line('join_us'); ?></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person prefix"></i>
            <input id="name" name="name" type="text">
            <label for="name" class="center-align"><?php echo $this->lang->line('name'); ?></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s2">
            <i class="mdi-action-perm-contact-cal prefix"></i>
          </div>
          <div class="input-field col s10">
            <select id="job_id" name="job_id" onchange="job()" required>
              <option value="" disabled selected><?php echo $this->lang->line('choice_job'); ?></option>
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
            <i id="cnpj_icon" class="mdi-action-assignment-ind prefix" hidden></i>
            <input id="cnpj_input" name="cnpj" type="text" data-inputmask="'mask': 'y/m/d'" hidden>
            <label id="cnpj_label" for="cnpj" class="center-align active" hidden><?php echo $this->lang->line('cnpj'); ?></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input name="email" type="email">
            <label for="email" class="center-align"><?php echo $this->lang->line('email'); ?></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-https prefix"></i>
            <input name="password" type="password">
            <label for="password"><?php echo $this->lang->line('password'); ?></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light cyan col s12"><?php echo $this->lang->line('register'); ?></button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up"><?php echo $this->lang->line('have_account'); ?> <a href="<?php echo base_url() . $module;?>"><?php echo $this->lang->line('login'); ?></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- ---------------------------------------- functions - start ---------------------------------------- -->
  <script type="text/javascript">
    function job(){
      if(document.getElementById("job_id").value==1){
        document.getElementById('cnpj_input').style.display = 'block';
        document.getElementById('cnpj_label').style.display = 'block';
        document.getElementById('cnpj_icon').style.display = 'block';
        // TODO, required field cnpj

      }else{
        document.getElementById('cnpj_input').style.display = 'none';
        document.getElementById('cnpj_label').style.display = 'none';
        document.getElementById('cnpj_icon').style.display = 'none';
        // TODO, no required field cnpj
      }
    }
  </script>

  <script type="text/javascript">
    window.onload = function(){
      // focus in name
      document.getElementById('name').focus();

      $('#cnpj_input').formatter({
        'pattern': '{{99}}.{{999}}.{{999}}/{{9999}}-{{99}}',
        'persistent': true
      });
      // hidden field cnpj
      job(0);

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

  <!-- ---------------------------------------- functions - end ---------------------------------------- -->

  <!-- ---------------------------------------- scripts - start ---------------------------------------- -->

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

  <!-- maskeinput -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/maskedinput/jquery.formatter.min.js"></script>
  <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/maskedinput/jquery-1.2.6.pack.js"></script> -->

  <!-- ---------------------------------------- scripts - end ---------------------------------------- -->

  </body>
</html>
