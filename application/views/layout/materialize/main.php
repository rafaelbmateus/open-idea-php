<!-- start main -->
<div id="main">
  <!-- START WRAPPER -->
  <div class="wrapper">

    <!-- START LEFT SIDEBAR NAV-->
    <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                      <!-- TODO, alterar imagem do avatar -->
                        <img src="<?php echo base_url(); ?>assets/plugins/materialize/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i><?php echo $this->lang->line('profile');?></a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i><?php echo $this->lang->line('config');?></a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i><?php echo $this->lang->line('help');?></a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url();?>sessions/lock"><i class="mdi-action-lock-outline"></i><?php echo $this->lang->line('lock');?></a></li>
                            <li><a href="<?php echo base_url();?>sessions/logout"><i class="mdi-hardware-keyboard-tab"></i><?php echo $this->lang->line('logout');?></a></li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $this->session->userdata('user_name'); ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <!-- TODO, pegar o perfil do usuário -->
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
            <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="fa fa-bullseye"></i><?php echo $this->lang->line('challanges');?></a></li>
            <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="fa fa-diamond"></i><?php echo $this->lang->line('ideas');?></a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-cog"></i><?php echo $this->lang->line('configuration');?></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo base_url() . 'users';?>"><?php echo $this->lang->line('users');?></a></li>
                                <li><a href="<?php echo base_url() . 'jobs';?>"><?php echo $this->lang->line('jobs');?></a></li>
                                <li><a href="<?php echo base_url() . 'user_types';?>"><?php echo $this->lang->line('user_types');?></a></li>
                                <li><a href="#">Menu 4</a></li>
                                <li><a href="#">Menu 5</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="sample-chart-wrapper">
                            <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                        </div>
                    </div>
                </div>
            </li>
          -->
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
    </aside>
    <!-- END LEFT SIDEBAR NAV-->

    <!-- START CONTENT -->
    <section id="content">
      <div class="container">
        <div class="section">
          <?php if(isset($view)){ $this->load->view($view); } ?>
        </div>
      </div>
    </section>
    <!-- END CONTENT -->

  </div>
  <!-- END WRAPPER -->

</div>
<!-- END MAIN -->
