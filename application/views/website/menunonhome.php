<div class="st-container" id="st-container">

    

        <nav class="st-menu st-effect-11" id="menu-11">
            <ul>
                <li><a class="" href="<?php echo site_url('website/schedule'); ?>">EVENT SCHEDULE</a>
                </li>
                <li><a class="" href="<?php echo site_url('website/blenderstyle'); ?>">STYLE BLENDERS</a>
                </li>
                <li><a class="" href="<?php echo site_url('website/invitelist'); ?>">INVITE LIST</a>
                </li>
                <li><a class="" href="#">BPFT 2013</a>
                </li>

            </ul>
        </nav>
        <div class="st-pusher">
            <div class="st-content-inner">
                 
                <div class="st-content" >
                  <div class=" <?php if(isset($nobackbackground)) { echo $nobackbackground; } else {echo "reset";} ?>" >
                        <div class="container">


                            <div class="row">
                                <div class="col-md-3">
                                    <div class="menu" id="st-trigger-effects">
                                        <button data-effect="st-effect-11">
                                            <img src="<?php echo base_url("webassets");?>/img/menu.png"><i class="menu-text">menu</i>
                                        </button>
                                    </div>




                                </div>
                                <div class="col-md-6">
                                    <div class="navbar-header">

                                        <a class="navbar-brands" href="<?php echo site_url(); ?>">
                                            <img src="<?php echo base_url("webassets");?>/img/logo<?php if($page=="blenderstyle") echo 2;?>.png" alt="bootstrapwizard logo" >
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 social-link">
                                    <?php $this->load->view("loginview");?>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                        <a href="#"> <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#"><i class="fa fa-youtube"></i></a> 
                                    </div>
                                </div>

                            </div>
                            <div class="row topleave">
                              
                                <div class="col-md-12">
                                    
                                    
                                    
                                    
                                    
                                    