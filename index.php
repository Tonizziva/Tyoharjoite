<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

<style>
    .img-1 {
        background-image: url(wp-content/themes/wp-bootstrap-4/assets/images/3d965e9aa7fabdc37a0b6f095a80217cadfe4da0_m.jpg);
        background-size: cover;
        background-position: center; 
        background-color: aquamarine;
        background-repeat: no-repeat;
    }
    
    .img-2 {
        background-image: url(wp-content/themes/wp-bootstrap-4/assets/images/4af8a0e44000dcdfdccbb22c5408007361cca6cf_m.jpg);
        background-size: cover;
        background-position: center; 
        background-color: aquamarine;
        background-repeat: no-repeat;
    }
    
    .box{
        display: flex;
        align-items: center;
        height: 400px;
    }
    
    .more-link-black {
        font-size:0.9em;
        text-decoration: underline;
        color:black;
    }
    
    .more-link-white {
        font-size:0.9em;
        text-decoration: underline;
        color:white;
    }
    
    .red{
        background-color: #eda79d;
    }
    
    .blue{
        background-color: #addbdb;
    }
    
    @media only screen and (max-width: 1300px) {
        .masthead {
            height: 80vh;
        }

        .lead {
            font-size:0.8em;
        }

        .more-link-white {
            font-size:0.7em;
        }
    }

    @media only screen and (max-width: 1000px) {
        .masthead {
            height: 60vh;
        }
        
        .font-weight-light {
            font-size:2em;
        }
    }

    @media only screen and (max-width: 880px) {
        .masthead {
            background-size: 100% 100%;
            height: 50vh;
        }
    }
</style>

<?php if ( get_theme_mod( 'blog_display_cover_section', 1 ) ) : ?>
	<?php if( get_theme_mod( 'blog_cover_title' ) || get_theme_mod( 'blog_cover_lead' ) || get_theme_mod( 'blog_cover_btn_text' ) ) : ?>
		<section class="jumbotron bg-white text-center wp-bs-4-jumbotron border-bottom">
			<div class="container">

				<h1 class="jumbotron-heading"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_title' ) ); ?></h1>
				<p class="lead text-muted"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_lead' ) ); ?></p>
				<?php if( get_theme_mod( 'blog_cover_btn_text' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'blog_cover_btn_link' ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'blog_cover_btn_text' ) ); ?></a><?php endif; ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.jumbotron text-center -->
	<?php endif; ?>
<?php endif; ?>

    <div class="container h-100" style="padding-top:150px;">
            <div class="row h-100 align-items-center">
              <div class="col-12 text-left">
                <div class="row ">
                    <div class="col-sm">
                        <h4 class="bold"><?php echo get_theme_mod("oma_teema_para1-headline") ?></h4>
                        <p class="font-small" style="width:300px"><?php echo get_theme_mod("oma_teema_para1") ?></p>
                        <a href="#" class="more-link-black">Read more</a>
                    </div>
                    <div class="col-sm">
                        <h4 class="bold"><?php echo get_theme_mod("oma_teema_para2-headline") ?></h4>
                        <p class="font-small" style="width:300px"><?php echo get_theme_mod("oma_teema_para2") ?></p>
                        <a href="#" class="more-link-black">Read more</a>
                    </div>
                    <div class="col-sm">
                        <h4 class="bold"><?php echo get_theme_mod("oma_teema_para3-headline") ?></h4>
                        <p class="font-small" style="width:300px"><?php echo get_theme_mod("oma_teema_para3") ?></p>
                        <a href="#" class="more-link-black">Read more</a>
                    </div>
                </div> 
              </div>
            </div>
      </div>

        <section style="padding-top:150px">
            <div class="row" >
                <div class="col-8 img-1">
                    
                </div>
                <div class="col-4 box text-center red">
                    <div style="width: 50%; margin: 0 auto;">
                        <h1 class="font-weight-light white"><?php echo get_theme_mod("oma_teema_box1-headline") ?></h1>
                        <p class="lead white"><?php echo get_theme_mod("oma_teema_box1") ?></p>
                        <a href="#" class="more-link-white">Read more</a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-4 box text-center blue">
                    <div style="width: 50%; margin: 0 auto;">
                        <h1 class="font-weight-light white"><?php echo get_theme_mod("oma_teema_box2-headline") ?></h1>
                        <p class="lead white"><?php echo get_theme_mod("oma_teema_box2") ?></p>
                        <a href="#" class="more-link-white">Read more</a>
                    </div>
                </div>
                <div class="col-8 img-2">

                </div>
            </div>
      </section>

<?php
get_footer();
