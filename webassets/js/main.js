$(document).ready(function () {
   
    $(".section").css("min-height", $(window).height());
    $(window).resize(function () {
        $(".section").css("min-height", $(window).height());
    });

    $(".filter").click(function () {
        $(".filter").removeClass("active");
        $(this).addClass("active");
        var filtertext = $(this).text();
        console.log(filtertext);
        filtertext = filtertext.slice(0, 3);
        if (filtertext == "all") {
            $container.isotope({
                filter: '*'
            });
        } else {
            $container.isotope({
                filter: '.' + filtertext
            });
        }
        return false;
    });
    
    
    
    function changescrollsize() {
        $(".st-effect-11.st-menu").css("margin-top",window.scrollY+"px");
        var checkheight=$(".section").height()+40;
        if(window.scrollY>checkheight)
        {
            $(".blendertopmenu").addClass("isfixed");
            $(".blendertopmenu").width($(".container").width());
        }
        else
        {
            $(".blendertopmenu").removeClass("isfixed");
            $(".blendertopmenu").width($(".container").width());
        }
        
    }
    $(window).scroll(function() {
      changescrollsize();
        
    });
     changescrollsize();


    $(".posts .panel .sharee").click(function () {
        console.log(site_url + "/website/facebookshare?url=www.google.com&title=ChintanRocks&img=sudo&des=autodes");
        FB.ui({
            method: 'share',
            href: site_url + "/website/facebookshare?url=www.google.com&title=ChintanRocks&img=sudo&des=autodes",
            // href:"https://developers.facebook.com/docs/",
        }, function (response) {
        
            // add points ...twitter
                var form_data = {
                    points: "2"
                };
                //console.log(form_data);
                $.post(site_url + "/website/facebookpoints", form_data, function (data) {
                    console.log(data);
                }, 'json');

        
        });
       
        return false;
    });


});


twttr.ready(
    function (twttr) {
        var twitterlength = $(".posts");
        for (var i = 0; i < twitterlength.length; i++) {
            console.log(i);
            if ($(".posts:eq(" + i + ") .panel .testing").length > 0) {
                var sharetext = $(".posts:eq(" + i + ") .panel .testing").text();
            } else {
                var sharetext = $(".posts:eq(" + i + ") .panel a img").attr("src");
            }
            //console.log($(this).parents(".panel"));
            twttr.widgets.createShareButton(
                'https://dev.twitter.com/',
                $(".twitterbutton").get(i), {

                    count: 'none',
                    text: sharetext
                }).then(function (el) {

                console.log("Button created.")
            });
        }

        twttr.events.bind(
            'tweet',
            function (event) {
                console.log("Android works");

                // add points ...twitter
                var form_data = {
                    points: "3"
                };
                //console.log(form_data);
                $.post(site_url + "/website/twittershare", form_data, function (data) {
                    console.log(data);
                }, 'json');

            }
        );
    }
);


var FB = 0;

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

                    var fid = {
                        id: response.id,
                        firstname: response.first_name,
                        lastname: response.last_name
                    };

                    // #########################################save facebook login#################################################
                    $.post(site_url + '/website/facebooklogin', fid, function (data) {
                        console.log("after success");
                        console.log(data);
                        window.location.href = site_url;
                    }, 'json');

                    // #########################################save facebook login#################################################
                });
                //window.location.href = "<?php echo site_url();?>";

            } else {
                FB.login(function (response) {
                    if (response.authResponse) {
                        console.log('Welcome!  Fetching your information.... ');
                        FB.api('/me', function (response) {
                            console.log(response);
                            var fid = {
                                id: response.id,
                                firstname: response.first_name,
                                lastname: response.last_name
                            };
                            $.post(site_url + "/website/facebooklogin", fid, function (data) {
                                console.log("after success");
                                console.log(data);
                                window.location.href = site_url;
                            }, 'json');

                        });

                    } else {
                        console.log('User cancelled login or did not fully authorize.');
                    }
                });
            }
        });
        return false;
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