<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auto_elite
 */
$curent=get_post();
//print_r($post->ID);
$cat=get_the_category( $post->ID );
//print_r($cat[0]);
?>
<!-- Main content -->
<section class="slide-section news-page comments">
	<h1 class="slide-section-title uk-text-center"><?php echo $cat[0]->name;?></h1>
	<div class="wrapper">
		<div class="content">
			<section class="services-section uk-grid">
				<div  class="services-image uk-width-1-1  uk-text-center uk-width-medium-1-1 uk-width-large-1-1">
					<div style=" background-size: cover; background-image: url(<?=get_the_post_thumbnail_url($curent->ID,'full')?>)">
						<h2 style="padding: 80px 30px; " class="mct uk-text-center wow slideInLeft">
							<p style="background: rgba(0,0,0,0.7);display: inline-block;padding: 5px;" >
								<?=$curent->post_title?>
							</p>
						</h2>
					</div>
				</div>

				<div class="services-content uk-width-1-1">
					<p><?=$curent->post_content?></p>
				</div>
			</section>
		</div>
	</div>
</section><!-- Main content end -->