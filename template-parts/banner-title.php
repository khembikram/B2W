<?php
/**
 * Title Banner and Subscribe Bar 
 * @package bootstrap2wordpress
 * @since 2.0
 */
?>

<?php

$blog_info = get_bloginfo('name');
$description = get_bloginfo('description', 'display');




?>


<section class="title-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center">


                <?php

                if (is_page()) {
                    the_time('<h1 class="page-title>', '</h1>');
                } elseif (is_single()) {
                    ?>
                    <p class="tag-line sub-title">
                        <?php echo get_the_date('M d, Y');
                        ?>
                    </p>
                    <?php
                } elseif (!is_front_page() && is_home()) {
                    $b2w_blog_title = get_the_title(get_option('page_for_posts', true));
                    ?>
                    <h1 class="page-title"><?php echo esc_html($b2w_blog_title); ?></h1>
                    ?>
                    <?php
                } elseif (is_home()) {
                    if($description){
                        ?>
                        <p class="tag-line sub-title">
                        <?php echo esc_html__($description) ?>
                        </p>
                    <?php
                    }
                    ?>
                    <h1><?php esc_html_e('Bootstrap to Wordpress Blog', 'bootstrap2wordpress'); ?></h1>
                } elseif (is_archive()) {

                } elseif (is_404()) {

                } elseif (is_search()) {

                }

                ?>
            </div>
        </div>
    </div>
</section>

<section class="subscribe-bar">
    <div class="container">
        <div class="row flex-vertical-center">
            <div class="col-sm-6">
                <p>
                    <strong>Want to save 20% on the course?</strong> Enter your email
                    and we'll send you the discount code!
                </p>
            </div>
            <div class="col-sm-6">
                <form action="index.html" class="" method="post">
                    <div class="row">
                        <div class="col-lg-8">
                            <input name="test" type="text" value="" />
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-invert m-0" name="button" type="button">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>