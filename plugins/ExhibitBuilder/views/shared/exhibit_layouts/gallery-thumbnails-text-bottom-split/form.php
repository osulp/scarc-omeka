<fieldset class="<?php echo html_escape($layout); ?>">
	<div class="primary">
    <?php
    for($i=1; $i <= 4; $i++):
	    echo exhibit_builder_layout_form_item($i);	    
    endfor;
    ?>
	</div>
	<div class="secondary">
	<?php
	    echo exhibit_builder_layout_form_text(1);
	?>
	</div>

	<div class="primary">
    <?php
    for($i=5; $i <= 12; $i++):
	    echo exhibit_builder_layout_form_item($i);	    
    endfor;
    ?>
	</div>
	<div class="secondary">
	<?php
	    echo exhibit_builder_layout_form_text(2);
	?>
	</div>
</fieldset>
