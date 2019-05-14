<fieldset class="<?php echo html_escape($layout); ?>">

		<div class="section">
    	<?php 
    	    echo exhibit_builder_layout_form_text(1);
    	?>
		</div>


	<?php for($i=2; $i<=17; $i++): ?>
	    <div class="section">
    	<?php 
    	    echo exhibit_builder_layout_form_item($i);
    	?>
    	</div>
	<?php endfor; ?>
</fieldset>
