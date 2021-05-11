<div id="mk-info">
    
    <?php if(get_field('telefoon', 'option') != '') { ?>
        <div class="mk_telefoon"><span></span><a href="tel:<?php echo the_field('telefoon', 'option'); ?>"><?php echo the_field('telefoon', 'option'); ?></a></div>
    <?php } ?>

    <?php if(get_field('email', 'option') != '') { ?>
        <div class="mk_email"><span></span><a href="mailto:<?php echo the_field('email', 'option'); ?>"><?php echo the_field('email', 'option'); ?></a></div>
    <?php } ?> 

</div> <!-- #mk-info -->