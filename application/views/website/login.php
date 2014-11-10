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
                <form method="post" action="<?php echo site_url('website/normallogin');?>" enctype= "multipart/form-data">
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

                    <a href="<?php echo site_url("twitter/auth");?>">
                        <p> <i class="fa fa-twitter"></i> SIGN IN WITH TWITTER</p>
                    </a>
                </div>

                <div class="content-newacc">
                    <a href="#">
                        <p>No Account?Create New Account</p><?php echo site_url();?>
                    </a>

                </div>
            </div>
            <div></div>
            <div class="col-md-3">
            </div>
        </div>
    </div>




    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '821682894560811',
                xfbml: true,
                version: 'v2.1'
            });
            
            
            
            $(".facebooklogin").click(function () {
                FB.getLoginStatus(function (response) {
                    if (response.status === 'connected') {
                        FB.api('/me?email', function (response) {
                            console.log('Good to see you, ' + response.name + '.');
                            console.log("already loged in");
                            console.log(response);
                            var fid = { id : response.id , firstname : response.first_name , lastname : response.last_name};
                            
// #########################################save facebook login#################################################
                             $.post("<?php echo site_url('website/facebooklogin'); ?>",fid,function(data){
                               console.log("after success");
                                console.log(data);
                            },'json');
// #########################################save facebook login#################################################
                        });
                        //window.location.href = "<?php echo site_url();?>";

                    } else {
                        FB.login(function (response) {
                            if (response.authResponse) {
                                console.log('Welcome!  Fetching your information.... ');
                                FB.api('/me', function (response) {
                                    console.log(response);
                                });
                            } else {
                                console.log('User cancelled login or did not fully authorize.');
                            }
                        });
                    }
                });
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
