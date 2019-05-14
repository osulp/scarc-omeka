<fieldset class="<?php echo html_escape($layout); ?>">

		<div class="section">
    	<?php 
    	    echo exhibit_builder_layout_form_text(1);
    	?>
		</div>


	<?php for($i=2; $i<=21; $i++): ?>
	    <div class="section">
    	<?php 
    	    echo exhibit_builder_layout_form_item($i);
    	?>
    	</div>
	<?php endfor; ?>
	<div class="section" style="display:none">
	<?php echo exhibit_builder_layout_form_item(22); ?>
	</div>
</fieldset>
