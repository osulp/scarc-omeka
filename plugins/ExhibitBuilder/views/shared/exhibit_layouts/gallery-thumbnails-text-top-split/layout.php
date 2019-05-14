<?php 
	//Name: Gallery Thumbnails Text Top Split - 2 parts, with Titles;
	//Description: Displays a block of text above 4 items with titles, followed by another text block and then up to 8 items with titles;
	//Author: Ryan Wick; 
?>

<div class="gallery-thumbnails-text-top">
	<div class="primary">
		<div class="exhibit-text">
		<?php echo exhibit_builder_page_text(1); ?>
		</div>
	</div>
	<div class="secondary">

<?php echo exhibit_builder_thumbnail_gallery(1, 4, array('class'=>'permalink'), 'thumbnail'); ?>

	</div>

	<div class="primary">
		<div class="exhibit-text">
		<?php echo exhibit_builder_page_text(2); ?>
		</div>
	</div>
	<div class="secondary">

<?php echo exhibit_builder_thumbnail_gallery(5, 12, array('class'=>'permalink'), 'thumbnail'); ?>

	</div>

</div>
