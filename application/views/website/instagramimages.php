<div class="container555">
   <?php foreach($instagrams as $instagram) { ?>
    <div class="posts" style="width:160px;margin:5px;">
        <img src="<?php echo $instagram->image;?>" alt="" style="width:100%;">
    </div>
    <?php } ?>
</div>