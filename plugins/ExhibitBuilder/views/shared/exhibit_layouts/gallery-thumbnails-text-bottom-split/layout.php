<?php 
//Name: Gallery Thumbnails Text Bottom Split - 2 parts, with Titles;
//Description: Displays 4 items with titles, then a text block, followed by up to 8 items with titles and a 2nd text block;
//Author: Ryan Wick;
?>

<div class="gallery-thumbnails-text-bottom">
	<div class="primary">

<?php echo exhibit_builder_thumbnail_gallery(1, 4, array('class'=>'permalink'), 'thumbnail'); ?>

	</div>
	<div class="secondary">
		<div class="exhibit-text">
		<?php echo exhibit_builder_page_text(1); ?>
		</div>
	</div>

	<div class="primary">

<?php echo exhibit_builder_thumbnail_gallery(5, 12, array('class'=>'permalink'), 'thumbnail'); ?>

	</div>
	<div class="secondary">
		<div class="exhibit-text">
		<?php echo exhibit_builder_page_text(2); ?>
		</div>
	</div>
</div>
