<?php if(have_posts()):while(have_posts()):the_post();?>


<div class="card mb-3">
    <div class="card-body">
      
    <?php if(has_post_thumbnail()):?>
        <div class="thumbnail">
            <img src="<?php the_post_thumbnail_url('blog-small');?>" class="img-fluid mb-3 img_thumbnail">
        </div>
        
    <?php endif; ?>


        <h3><?php the_title() ?></h3>
        <p><?php echo get_the_date('d/m/y h:i:s'); ?></p>
        <?php the_content()?>
        <p><?php the_tags(); ?></p>
        <p><?php echo the_category(',', '', get_the_ID()); ?></p>
        <?php 
            $fname = get_the_author_meta('first_name');
            $lname = get_the_author_meta('last_name');
            echo 'Posted by : '.$fname .' '.$lname;
        ?>
        <!-- <img src="<?php  echo $featuredImg[0]; ?>" alt="post featured image"> -->
    </div>
</div>
    
    

<?php endwhile; else:endif;?>

