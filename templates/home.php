<?php
/**
 * Template Name: Home
 */
get_header(); 
$mypost= $post;
?>
<section>
    <div class="slidersection">
        <div class="swiper-container1">
            <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'sliserhome',
                'posts_per_page' => '-1',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide" >	
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                    <div class="slider__content">
                        <div class="contain">
                            <h2><?php the_content();?></h2>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<div class="cub"><div class="one"></div></div>

<section id="products">
    <div class="productssection">
        
        <!-- <div class="container"> -->
        <div class="prod-c">
            <div class="title">
                <h1><?php the_field('title'); ?></h1>
                <h2><?php the_field('sub'); ?></h2>
            </div>
        
            <div class="outside__product">
                <?php
                $args = array(
                'post_type' => 'productspost',
                'posts_per_page' => '2',
                'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                

                    <div class="inside__product">
                        <div class="inner">
                        <h1><?php the_title(); ?></h1>
                        <h2><?php the_content();?></h2>
                        <h3><?php the_field('cont');?></h3>
                        
                        </div>
                        <a href="#contact">Get Quote</a>
                        <!-- the_field('button'); -->
                    </div>
                

                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- </div> -->
    </div>
</section>



<section>
    <div class="betweensection">
        <div class="prod-c">
           
                

                    <div class="inside__bet">
                        <h3><?php the_field('conte');?></h3>
                        <div class="button">
                        <a href="#contact">Contact</a>
                        </div>
                        </div>
                    </div>
                

        </div>
    </div>
</section>
<div class="cub"><div class="two"></div></div>



<section id="process">
    <div class="processsection">

<div class="roww">
            
            <div class="leftside">
                <div class="title">
                    <h1><?php the_field('titleprocess'); ?></h1>
                </div>

                <div class="inside__process">
                    <div class="left">
                    <h2><?php the_field('contentt'); ?></h2>
                    </div>
                </div>
            </div>

            <div class="rightside">
                <img src="<?php the_field('img');?>" alt="">
            </div>
</div>
    </div>
</section>


<section id="about">
    <div class="aboutsection" style="background-image: url('<?php the_field('imgg');?>');">
    <div class="desktopv">
            <div class="titsub">
                <h1><?php the_field('titleee'); ?></h1>

                <h2><?php the_field('contenttt'); ?></h2>
            </div>
        </div>
    </div>
    <div class="mobilev">
            <div class="titsub">
                <h1><?php the_field('titleee'); ?></h1>

                <h2><?php the_field('contenttt'); ?></h2>
            </div>
        </div>
    <div class="cub"><div class="three"></div></div>
</section>



<section id="contact">
    <div class="contactsection">
        <div class="onlymargin">
            <div class="title">
                <h1><?php the_field('ttitle'); ?></h1>
            </div>
            <?php the_field('contact'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
