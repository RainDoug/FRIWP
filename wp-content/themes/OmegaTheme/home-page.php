<?php
/** Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

			<div class="container-header">
				<div class="row">
					<div class="col-md-5 logo">
						<img src='<?php the_field(logo); ?>' class="img-responsive" alt="Responsive image">
					</div>

					<div class="col-md-7 menu">
						<?php wp_nav_menu(); ?>
					</div>

				</div>
			</div>
			<div class="container-fluid body">
			<div class="row">
			<div class="col-md-12 tabs">
			<?php
// check if the flexible content field has rows of data
if (have_rows('tab')):
// loop through the rows of data
    while (have_rows('tab')):
        the_row();
?>
			<ul class="nav nav-tabs" id="myTab">
			  <li class="active"><a data-target="#home" data-toggle="tab"><?php
                    the_sub_field('tab_title');?></a></li>





			  <li><a data-target="#profile" data-toggle="tab">Profile</a></li>
			  <li><a data-target="#messages" data-toggle="tab">Messages</a></li>
			  <li><a data-target="#settings" data-toggle="tab">Settings</a></li>
			</ul>

			<div class="tab-content">
			  <div class="tab-pane active" id="home">Home</div>
			  <div class="tab-pane" id="profile">Profile</div>
			  <div class="tab-pane" id="messages">Message</div>
			  <div class="tab-pane" id="settings">Settings</div>
			</div>

			</div>
			</div>
			</div>

<?php
endwhile;
endif;
?>

<?php get_footer(); ?>




        

