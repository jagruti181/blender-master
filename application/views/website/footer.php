<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url("webassets");?>/js/jquery.min.js"></script>
<!-- compiled and minified Bootstrap JavaScript -->
<script src="<?php echo base_url("webassets");?>/js/bootstrap.min.js"></script>

<script src="<?php echo base_url("webassets");?>/js/main.js"></script>

<script src="<?php echo base_url("webassets");?>/js/classie.js"></script>
<script src="<?php echo base_url("webassets");?>/js/sidebarEffects.js"></script>
<script src="<?php echo base_url("webassets");?>/js/masonry.pkgd.min.js"></script>
<!-- For the demo ad only -->
<script src="<?php echo base_url("webassets");?>/slider_js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url("webassets");?>/slider_js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("webassets");?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo base_url("webassets");?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="<?php echo base_url("webassets");?>/js/isotope.pkgd.min.js"></script>


<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    var container = document.querySelector('.section.top .container .row');

    $(".posts img").load(function () {
        var msnry = new Masonry(container, {
            // options
            columnWidth: 0,
            itemSelector: '.posts'
        });
    });
    var $container=0;
    $(document).ready(function () {
        $(".videoonly").fancybox({
            fitToView: true
        });
        $container = $('.blender-img');
        // init
        $container.isotope({
            // options
            itemSelector: '.item',
            layoutMode: 'fitRows'
        });
    });
    
</script>

</body>

</html>
