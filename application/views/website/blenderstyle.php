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
<!--
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ol>
-->

                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                           
                            <div class="item active">
                                <!-- Set the first background image using inline CSS below. -->
                                <img src="<?php echo base_url("webassets")?>/img/slider/Midival-Punditz.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                               <div class="style-icon">
                                                   <i class="fa flaticon-musical"></i>
                                               </div>
                    
                                        </div>
                                        <h5>Midival Punditz</h5>
                                        <h6>Musicians</h6>

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
                                <img src="<?php echo base_url("webassets")?>/img/slider/Rocky-S.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Rocky Star</h5>
                                        <h6>Designer</h6>

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
                                <img src="<?php echo base_url("webassets")?>/img/slider/Little-Shilpa.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-mannequin1"></i>
                                               </div>
                                        </div>
                                        <h5>Little Shilpa</h5>
                                        <h6>Designer</h6>

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
                                <img src="<?php echo base_url("webassets")?>/img/slider/Karsh-Kale.jpg" class="fill">
                                <div class="carousel-caption">
                                    <div class="blender-bottom">
                                        <div class="music text-center">
                                            <div class="style-icon">
                                                   <i class="fa flaticon-musical"></i>
                                               </div>
                                        </div>
                                        <h5>Grain featuring <br> Karsh Kale</h5>
                                        <h6>Musician</h6>

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

<div class="section tour" style="position:relative">
   
    <div class="container">
        <div class="show">
            <h3>show them how it's done.</h3>
            <p>select a style blender below and submit your style statement.</p>

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
            <div class="col-md-3 item <?php echo substr($post->type,0,3);?> blenderitem">
               
                <a href="<?php echo site_url('website/profile?id=').$post->id;?>"><img src="<?php echo base_url("uploads");?>/<?php echo $post->image;?>" style="width:100%;">
                    <div class="hidden contentblender"><?php echo $post->content; ?></div>
                    <h5 class="hidden"><?php echo $post->id; ?></h5>
                     <h2><?php echo $post->name;?></h2><br>
                     <?php switch($post->type)
            {
                case "des":
                echo "<h3>Designer</h3>";
                break;
                case "mus":
                echo "<h3>Musician</h3>";
                break;
                case "spe":
                echo "<h3>Speaker</h3>";
                break;
                case "dess":
                echo "<h3>Designers</h3>";
                break;
                case "muss":
                echo "<h3>Musicians</h3>";
                break;
                case "spes":
                echo "<h3>Speakers</h3>";
                break;
                
            }
                    ?>
                     </a> 
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    
    
    
    
    
    
    <div class="blenderoverlay">
       <div class="container" style="width:900px;margin-top:100px;" >
              <div style="position:relative;">
                  <a href="#" class="closeblender"><img src="<?php echo base_url("webassets/img/close.png"); ?>"></a>
              </div>
               <div class="row">

    <div class="col-md-4">
        <div class="profile-img">
            <img src="http://www.bpft.in/blender-master/webassets/img/Neeta-Lulla.jpg" width="100%" class="proimage">
            <div class="prof-mini">
                <img src="<?php echo base_url("webassets");?>/img/diamond.png">
                <p class="golden"><i class="fa "></i></p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="profile-text">
            <h3 class="nameblender"></h3>
            <h5 class="typeblender"></h5>
            <div class="part1">
            <p class="textblender">
                
            </p>
            <a class="chooseshow" href="#">
                <div class="style-text">
                    <p>choose this style blender</p>
                </div>
            </a>
            </div>
        </div>
        <div class="profile-text part2" style="display:none;margin-top:0px;margin-left:18px;">
                <div class="col-md-6">  
                        <div class="profile-edit">
                            <h5>submit text</h5> 
                            <form method="post" class="blendertextform" action="http://www.bpft.in/blender-master/index.php/website/textpost" enctype="multipart/form-data">
<input type="hidden" name="id" class="formidis" value="">
<textarea name="text" value="" id="comments" class="profile-textarea">
</textarea><br>
<input type="submit" value="Submit" class="profile-submit"><br>
<button type="reset" value="Reset" class="profile-cancel">cancel</button>
</form>
                        </div>
                </div>
                <div class="col-md-6">
                                        
                        <div class="profile-image">
                            
                            <span>or</span>
                        
                            <h5>submit photo</h5> 
                            <form method="post"  action="http://www.bpft.in/blender-master/index.php/website/imagepost" enctype="multipart/form-data" class="blenderphotoform dropzone" id="my-awesome-dropzone">
<input type="hidden" name="id" class="formidis" value="">
<input type="file" id="normal-field" class="form-control" name="logo" value="">

<input type="submit" value="Submit" class="profile-submit"><br>
<button type="reset" value="Reset" class="profile-cancel">cancel</button>

<div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                           </form>
                        </div>
                        </div>
           </div>

    </div>
           </div></div>
           
           
           
    </div>
</div>
<div><div><div>


<script>
    var isloggedin="<?php if(isset($isloggedin)) {echo $isloggedin;}?>";
</script>