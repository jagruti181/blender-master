<div class="container" style="zoom:0.7">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="section pad1">
                <div class="text-center">
                    <img src="" class="img-responsive">
                </div>
                <div class="follow1 text-center">
                    <h5>SIGN IN</h5>
                    <h4>YOU MUST LOG IN TO PARTICIPATE.</h4>
                </div>
                <form method="post" action="<?php echo site_url('website/normallogin');?>" enctype="multipart/form-data">
                    <div class="margin1">
                        <div class="input-content text-center">
                            <input value='' name="email" id="username-email" placeholder="USERNAME" type="text" class="" />
                            <div>
                                <input value='' name="password" id="password" placeholder="PASSWORD" type="password" class="" />
                            </div>
                        </div>
                    </div>
                    <div class="row row-margin">
                        <div class="col-md-6 col-md-6-pad">
                            <a href="#">
                                <button type="submit" class="">Sumbit</button>
                            </a>

                        </div>
                        <div class="col-md-6 col-md-6-pad1">
                            <a href="#">
                                <p>Forget Password?</p>
                            </a>
                        </div>
                    </div>
                </form>

                <div class="text-center color-p1">
                    <h3>-&nbsp;OR&nbsp;-</h3> 
                </div>
                <div class="home-invite">

                    <a href="#" class="facebooklogin">
                        <p> <i class="fa fa-facebook"></i> SIGN IN WITH FACEBOOK</p>
                    </a>
                </div>
                <div class="home-invite">

                    <a href="<?php echo site_url(" twitter/auth ");?>">
                        <p> <i class="fa fa-twitter"></i> SIGN IN WITH TWITTER</p>
                    </a>
                </div>

                <div class="content-newacc">
                    <a href="#">
                        <p>No Account?Create New Account</p>
                    </a>

                </div>
            </div>
            <div></div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

</div>


<script>
</script>
