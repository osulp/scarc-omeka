<?php head(array('title'=>'Browse by Date','bodyid'=>'items','bodyclass'=>'dates')); ?>

<div id="primary">
    
	<h1>Browse by Date</h1>
	
    <ul class="navigation item-tags" id="secondary-nav">
    <?php echo nav(array('Browse All' => uri('items/browse'), 'Browse by Tag' => uri('items/tags'), 'Browse by Date' => uri('items/dates'))); ?>
    </ul>

    <?php echo tag_cloud($tags, uri('items/browse')); ?>
    
</div><!-- end primary -->

<?php foot(); ?>
