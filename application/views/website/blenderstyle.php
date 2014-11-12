<div class="mid-content">
    <div class="">

        <div class="content-center">
            <h3>STYLE BLENDERS</h3>
            <h5>The finest and the classy names in fashion, music, design, technology and writing are here.</h5>
            <h5>Grab a seat as they take centre stage to style up the Blenders Pride Fashion Tour 2014.</h5>
            <a href="#">
                <div class="blend">
                    <p>VIEW ALL THE STYLE BLENDERS</p>
                </div>
            </a>
        </div>
    </div>
</div>


</div>
</div>
</div>


<header id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ol>

                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <!-- Set the first background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/bg3.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <a href="#">
                                                <img src="<?php echo base_url("webassets")?>/img/music.png" alt="">
                                            </a>
                                        </div>
                                        <h5>karsh kale</h5>
                                        <h6>Musician </h6>

                                        <a href="#">
                                            <div class="style-text">

                                                <p>choose this style blender</p>


                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="content-center blend">
                                                <p>VIEW ALL THE STYLE BLENDERS</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the second background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/bg3.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <a href="#">
                                                <img src="<?php echo base_url("webassets")?>/img/music.png" alt="">
                                            </a>
                                        </div>
                                        <h5>karsh kale</h5>
                                        <h6>Musician </h6>

                                        <a href="#">
                                            <div class="style-text">

                                                <p>choose this style blender</p>


                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="content-center blend">
                                                <p>VIEW ALL THE STYLE BLENDERS</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/bg3.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <a href="#">
                                                <img src="<?php echo base_url("webassets")?>/img/music.png" alt="">
                                            </a>
                                        </div>
                                        <h5>karsh kale</h5>
                                        <h6>Musician </h6>

                                        <a href="#">
                                            <div class="style-text">

                                                <p>choose this style blender</p>


                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="content-center blend">
                                                <p>VIEW ALL THE STYLE BLENDERS</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <img src="<?php echo base_url("webassets")?>/img/pre_button.png" class="pre-pos">
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <img src="<?php echo base_url("webassets")?>/img/next_button.png" class="next-pos">
                        </a>

                    </header>         


<div class="space">

</div>

<div class="section tour">
    <div class="container">
        <div class="show">
            <h3>show them how it's done.</h3>
            <p>select a stylebleneder below and submit your style statement.</p>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tabs">
                    <a href="#" class="filter active"><i class="fa flaticon-four102"><p class="icon-text">all</p></i>
                    </a>
                    <a href="#" class="filter"><i class="fa flaticon-mannequin1"><p class="icon-text">designers</p></i>
                    </a>
                    <a href="#" class="filter"><i class="fa flaticon-musical"><p class="icon-text">musicians</p></i>
                    </a>
                    <a href="#" class="filter"><i class="fa flaticon-microphone58"><p class="icon-text">speakers</p></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row blender-img">
           <?php
$i=0;
                foreach($posts as $post)
                {
                        //print_r($post);
                
            ?>
            <div class="col-md-3 item <?php echo $post->type?>">
                <a href="<?php echo site_url('website/profile?id=').$post->id;?>"><img src="<?php echo base_url("uploads");?>/<?php echo $post->image;?>" style="width:100%;">
                     <h2><?php echo $post->name;?></h2><br>
                     <h3>Designer</h3></a> 
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<div><div><div>