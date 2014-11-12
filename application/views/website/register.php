<div class="" id="st-container">


    <!-- 
            <nav class="st-menu st-effect-11" id="menu-11">
                <h2 class="">menu</h2>
                <ul>
                    <li><a class="" href="#">SCHEDULE</a>
                    </li>
                    <li><a class="" href="blender-style.html">STYLE BLENDERS</a>
                    </li>
                    <li><a class="" href="invite-list.html">INVITE LIST</a>
                    </li>
                    <li><a class="" href="#">ARCHIVE SITE</a>
                    </li>

                </ul>
            </nav> -->
    <div class="">
        <div class="st-content-inner">
            <div class="st-content">
                <div class="section reset" style="min-height: 471px;">
                    <div class="row">


                        <!-- <div class="row index">
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
                                            <img src="<?php echo base_url("webassets");?>/img/logo.png" alt="bootstrapwizard logo" height=85>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 social-link">
                                    <div class="signin">
                                        <a href="#"><i>signup /</i></a>
                                        <a href="login.html"><i>login</i></a>
                            
                                    </div>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook"></i></a> 
                                        <a href="#"> <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#"><i class="fa fa-youtube-square"></i></a> 
                                    </div>
                                </div>
                            
                            </div> -->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="contents-reg">
                                    <h3>Register</h3>

                                    <div class="reg-invite text-center">

                                        <a href="#" class="facebooklogin">
                                            <p> <i class="fa fa-facebook"></i> SIGN IN WITH FACEBOOK</p>
                                        </a>
                                    </div>
                                    <div class="reg-invite text-center">

                                        <a href="<?php echo site_url(" twitter/auth ");?>">
                                            <p> <i class="fa fa-twitter"></i> SIGN IN WITH TWITTER</p>
                                        </a>
                                    </div>

                                    <div class="pad-btm">
                                        <div class="text-center color-p1">
                                            <h4>-&nbsp;OR&nbsp;-</h4> 
                                        </div>
                                    </div>
                                    <h5 class="text-center">enter your details below</h5>
                                    <form method="post" action="<?php echo site_url('website/registeruser');?>" enctype="multipart/form-data">
                                        <div class="input-content1 text-center">
                                            <input value="" name="name" id="password" placeholder="NAME  * " type="text" class="usericon" required>
                                            <input value="" name="email" id="conformPassword" placeholder="EMAIL *" type="text" class="emailicon" required>
                                            <input value="" name="city" id="conformPassword" placeholder="CITY *" type="text" class="cityicon" required>
                                        </div>
                                        <div class=" pad-select text-center">
                                            <span class="contage">AGE</span>
                                            <span class="pad-left">
                                        <input type="number" placeholder="DD" name="day" min="1" max="30" class="input-age">
                                    <input type="number"  placeholder="MM" name="month" min="1" max="12" class="input-age" >
                                        <input type="number" placeholder="YY" name="year" min="00" max="2040" class="input-age">
                                            </span>
                                            <span class="contage">SEX</span>
                                            <select class="select-sex" name="sex" required>
                                                <option value="male">MALE</option>
                                                <option value="female">FEMALE</option>
                                            </select>

                                        </div>
                                        <div class="input-content2 text-center pad-btm" style="margin-left: 13%;">
                                            <input id="uploadpic" placeholder="UPLOAD PROFILE PHOTO" name="logo" type="file" class="uploadicon" required>
                                        </div>
                                        <div class="text-center">
                                            <div class="gift-head">
                                                <img class="img-responsive" src="<?php echo base_url("webassets");?>/img/gift.png" style="margin:0 auto -2px;">
                                            </div>

                                            <div class="gift-head1">
                                                <p>WOULD YOU LIKE REDEEMABLE POINTS?</p>

                                            </div>
                                            <div class="gift-body">
                                                <div class="gift-body1">
                                                    <p>Each time you use our hashtag (#BPFT) on</p>
                                                    <p>Facebook,Twitter or Instagram you earn points</p>
                                                    <p>that are redeemable for cool prizes.</p>
                                                </div>
                                                <div class="gift-body2">
                                                    <p>You can keep a track of the points you earn on</p>
                                                    <p>your profile page.</p>
                                                </div>

                                                <div class="gift-body3">
                                                    <p>YES. CONNECT MY</p>
                                                    <p>SOCIAL MEDIA ACCOUNTS
                                                </div>
                                                <div class="reg-social">
                                                    <i class="fa fa-facebook"></i>
                                                    <i class="fa fa-instagram"></i>
                                                    <i class="fa fa-twitter"></i>


                                                </div>
                                                <div class="gift-body4">
                                                    <p>No sneaky business promise. We only take the information</p>
                                                    <p>needed to assign you your redeemable points.</p>

                                                </div>
                                            </div>
                                            <div class="pad-input">
                                                <div class="input-content text-center">
                                                    <input value="" id="password" name="password" placeholder="PASSWORD *" type="password" class="lockicon" required>
                                                    <div>
                                                        <input value="" id="conformPassword" name="confirmpassword" placeholder="CONFIRM PASSWORD *" type="password" class="lockicon">
                                                    </div>
                                                </div>
                                            </div>


                                            <!--
                                                <div id="captcha-wrap">
        <div class="captcha-box">
            <img src="get_captcha.php" alt="" id="captcha" />
        </div>
        <div class="text-box">
            <label>Type the two words:</label>
            <input name="captcha-code" type="text" id="captcha-code">
        </div>
        <div class="captcha-action">
            <img src="refresh.jpg"  alt="" id="captcha-refresh" />
        </div>
    </div> 
-->


                                            <div class="reg-policy ">
                                                <p>By registering, you agree to our <a href="#">Privacy Policy</a> 
                                                </p>
                                                <p>and <a href="<?php echo site_url("website/termscondition "); ?>">Terms &amp; Conditions</a>
                                                </p>
                                            </div>
                                            <div class="pad-pad">
                                                <div class="content-button2 text-center">
                                                    <a>
                                                        <button type="submit" class="text-center">CREATE AN ACCOUNT</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="reg-policy pad-btm">
                                                <p>Already have an account? <a href="<?php echo site_url("website/login "); ?>">Login</a>
                                                </p>
                                            </div>
                                    </form>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>


                        <!-- /.navbar-collapse -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // refresh captcha
        $('img#captcha-refresh').click(function() {

            change_captcha();
        });

        function change_captcha() {
            document.getElementById('captcha').src = "get_captcha.php?rnd=" + Math.random();
        }
    });
</script>