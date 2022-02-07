<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?php echo metadata('exhibit', 'title'); ?> - <?php echo option('site_title'); ?></title>

<!-- Meta -->
<meta name="description" content="OSU Archives" /> 
<meta name="keywords" content="Oregon State University Special Collections & Archives Research Center" /> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<meta name="author" content="Oregon State University Special Collections & Archives Research Center" /> 
<meta name="robots" content="all" /> 
<meta name="rating" content="general" /> 

<!-- Plugin Stuff -->
<?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

<!-- Stylesheets -->
<?php 
    queue_css_file('screen');
    echo head_css(); 
?>

<!-- JavaScripts -->
<?php queue_js_url('http://osulibrary.oregonstate.edu/specialcollections/omeka/themes/Fighters/jquery-1.4.2.js'); ?>
		<?php queue_js_file('googleanalytics'); ?>
<?php echo head_js(); ?>

</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>


<div id="wrap2">
<a href="<?php echo exhibit_builder_exhibit_uri(); ?>"><img src="<?php echo html_escape(url('themes/Fighters/Other%20Images/banner.png')); ?>" alt="Fighters on the Farm Front: Oregon's Emergency farm Labor, 1943-1947" /></a>
</div>

<div id="wrap">    
	<div id="exhibit-nav">
    	 <?php echo exhibit_builder_page_nav();?>
    </div>
    
    <div id="content">
    	<?php // echo exhibit_builder_page_nav(); ?>
    <?php // echo flash(); ?>
	
