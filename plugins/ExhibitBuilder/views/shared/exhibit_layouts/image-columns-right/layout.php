<div class="image-columns-right">
	<?php 

	if(($text = exhibit_builder_page_text(1)) || exhibit_builder_page_attachment(1)): ?>
	    
	<div class="image-text-group">
	       
	    <?php if($text): ?>
        <div class="exhibit-text">
            <?php echo $text; ?>
        </div>
		<?php endif; ?>

<?php 	for ($i=2; $i <= 9; $i++):  ?>

		<?php if(exhibit_builder_page_attachment($i)):?>
	    <div class="exhibit-item">
			<?php echo exhibit_builder_attachment_markup(exhibit_builder_page_attachment($i), array('imageSize'=>'fullsize'), array('class'=>'permalink')); ?>

	    </div>
		<?php endif; endfor; ?>
	</div>
	<?php endif; ?>
</div>
