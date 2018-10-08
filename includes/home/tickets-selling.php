<?php $root = get_template_directory_uri(); ?>

<section class="is-blue">
	<div class="spacing spacing--sm"></div>
	<div class="spacing spacing--md"></div>
	<div class="inner is-white">

		<div class="is-center">
			<div class="content-area">
				<h2 class="dates sm-hdr"><?php the_field('tickets_subtitle'); ?></h2>
			</div>
			<div class="section-header hdr-el content-area">
				<h1><?php the_field('tickets_headline'); ?></h1>
			</div>
			<div class="mini-spliter animated-spliter"></div>
			<div class="content-area has-max">
				<p><?php the_field('tickets_copy'); ?></p>
			</div>
			<div class="section-cta is-center">
				<a href="<?php the_field('view_packages_link', 'options'); ?>" class="cta"><?php the_field('view_packages_text', 'options'); ?></a>
			</div>
		</div>

	</div>
	<div class="spacing spacing--md"></div>
</section>