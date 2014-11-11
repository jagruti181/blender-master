<div class="signin">
    <?php if($this->session->userdata('logged_in')) { ?>
    
     <a href="<?php echo site_url('website/profilee'); ?>"><i>profile / </i></a>
     <a href="<?php echo site_url("website/logout");?>"><i>logout</i></a>
    <?php } else { ?>
    
    <a href="<?php echo site_url("website/register");?>"><i>signup / </i></a>
    <a href="<?php echo site_url("website/login");?>"><i>login</i></a>
    <?php } ?>
</div>