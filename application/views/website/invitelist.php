
    <div class="mid-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="menu" id="st-trigger-effects">
                        <button data-effect="st-effect-11">
                            <img src="<?php echo base_url("webassets");?>/img/menu.png"><i class="menu-text">menu</i>
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navbar-header">

                        <a class="navbar-brands" href="#">
                            <img src="<?php echo base_url("webassets");?>/img/logo.png" alt="bootstrapwizard logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 social-link">
                    <?php $this->load->view("loginview");?>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a> 
                        <a href="#"> <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#"><i class="fa fa-youtube-square"></i></a> 
                    </div>
                </div>

            </div>
            <div class="content-center">
                <div class="follows">
                    <h5><span class="gold">595 </span>people are going to the bpft </h5>
                    <p>read/view their style statements below.</p>
                </div>
            </div>
        </div>
    </div>



    <div class="section top">
        <div class="container">

            <div class="row">
               <?php foreach($posts as $post) { // print_r($post); ?>
                <div class="col-md-3 col1 posts">
                    <div class="panel">
                        <div class="panel-heading">
                            <img class="circular" src="<?php echo base_url("webassets");?>/img/<?php echo $post->logo;?>"><span class="top-text"><?php echo $post->name;?></span>
                            <img src="<?php echo base_url("webassets");?>/img/rect.png" class="rect">

                        </div>
                        <?php if($post->image!="") { ?>
                        <div class="panel-body">
                            <a href="#">
                                    <img src="<?php echo base_url("webassets");?>/img/<?php echo $post->image;?>" width="100%">
                                </a>
                        </div>
                        <?php } if($post->text!=""){ ?>

                        <div class="panel-body body-text">
                            <p>
                                <?php echo $post->text;?></p>
                        </div>
                        <?php } ?>

                        <div class="panel-footer">
                            <div class="pull-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"> <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a href="#">
                <div class="foot-text">
                    <p>
                        View All Entries
                    </p>
                </div>
            </a>
        </div>
    </div>