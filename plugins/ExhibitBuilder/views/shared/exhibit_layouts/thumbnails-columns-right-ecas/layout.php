<div class="thumbnails-columns-right">
	
	<div class="image-text-group">

	    <?php if($text = exhibit_builder_page_text(1)): ?>
        <div class="exhibit-text">
            <?php echo $text; ?>
        </div>
		<?php endif; ?>


	    <div class="right-gallery gallery">
			<?php	
				$start = 2;
				$end = 21;
				$props = array('class'=>'permalink');
				$thumbnailType = 'square_thumbnail';
				$html = '';
				for ($i = $start; $i <= $end; $i++) {
					if ($attachment = exhibit_builder_page_attachment($i)) {
            $html .= "\n" . '<div class="exhibit-item">';
            if ($attachment['file']) {
            	
		$title = metadata($attachment['item'], array('Dublin Core', 'Title'));
		$props = array('class'=>'permalink', 'title'=>$title, 'alt'=>$title);
		$thumbnail = file_image($thumbnailType, $props, $attachment['file']);
                $html .= exhibit_builder_link_to_exhibit_item($thumbnail, array(), $attachment['item']);
            }
            $html .= exhibit_builder_attachment_caption($attachment);
            $html .= '</div>' . "\n";
					}

					// force line breaks for 'rows'
					if ( ($i - 1) % 4 == 0)
					{	$html .= "\n" . '<br style="clear: both;"/>' . "\n";	}
				}
    
			echo htmlspecialchars_decode(apply_filters('exhibit_builder_thumbnail_gallery', $html,array('start' => $start, 'end' => $end, 'props' => $props, 'thumbnail_type' => $thumbnailType)));
			?>
			
			
			<?php // echo exhibit_builder_thumbnail_gallery(2, 17, array('class'=>'permalink')); ?>
			
	    </div>
	
	</div>
	
</div>
