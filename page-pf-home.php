
<?php if( have_rows('home_page_content') ){ ?>
    <?php while( have_rows('home_page_content') ){ the_row(); ?>
        <?php switch(get_row_layout()) {
          case 'banner_section':
            $banner_image =	get_sub_field('banner_image');
            if($banner_image) {
            ?>
              <figure class="banner-image">
                <img src="<?php echo $banner_image; ?>" alt="banner image">
              </figure>
            <?php }
            $main_heading =	get_sub_field('banner_heading');
            if($main_heading) {
              ?>
                <div class="banner-heading-main">
                  <?php echo $main_heading; ?>
                </div>
              <?php }
            $banner_description =	get_sub_field('banner_description');
            if($banner_description) {
              ?>
                <div class="banner-description">
                  <?php echo $banner_description; ?>
                </div>
              <?php }  
            break;

          case 'feature_post':
            $post_id =	get_sub_field('post_to_show');	
						echo $post_id;				
            if(get_post_type($post_id) == 'post') {
              ?>
                <div class="selected-post">
                <?php
                $post_content = get_post($post_id);
                $content = $post_content->post_content;
                echo $content;
								the_field('written_by', $post_id);?>
                </div>
              <?php } elseif ( get_post_type($post_id) == 'video_post') {
                $post_content = get_post($post_id);
								the_field('post_description', $post_id);
								
							} else {
								echo "infography";
							}
						break;



        }?>
    <?php }; ?>
<?php }; ?>

<?php
echo "this is the field";
the_field('post_description')
?>