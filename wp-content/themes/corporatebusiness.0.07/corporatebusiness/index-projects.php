<!--Projects Section-->
<?php
$mst = esc_attr (get_theme_mod( 'projects_title' ));
$msd = esc_attr (get_theme_mod( 'projects_desc' ));
?>
<div class="container" id="service_section">	
    <div class="hc_service_title">
        <?php if($mst!='') { ?>
        	<h1><?php echo $mst; ?></h1>
        <?php } ?>
        <?php if($msd!='') { ?>
        	<p><?php echo $msd; ?>.</p>
        <?php } ?>		
    </div>
</div>	
    
<div class="hc_home_border"></div>

<div class="container" id="project_section">
<?php
	$count = 4;
	//
	$w = 25;
	switch ($count) {
		case 1:
			$w = 100;
			break;
		case 2:
			$w = 50;
			break;
		case 3:
			$w = 33;
			break;
	}
	//
	for( $i=1; $i<=$count; $i++) {
		?>
        <div class="hc_project_area <?php echo "sw-$w"; ?>">
        <?php
		// values
		$image = esc_url(get_theme_mod( 'project_image'.$i, get_template_directory_uri() . '/images/thumbnail.png' ));
		$title = esc_attr(get_theme_mod( 'project_title'.$i, "Lorem ipsum" ));
		$desc = esc_attr(get_theme_mod( 'project_desc'.$i, "Nullam fringilla lorem sed ante pharetra, et ultrices nisl rhoncus!" ));
		$link = esc_url(get_theme_mod( 'project_link'.$i ));
		//
		if ($link):
		?>
        <a href="<?php echo $link; ?>"><img alt="<?php echo $title;?>" src="<?php echo $image;?>" /></a>
        <h2><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
        <p><?php echo $desc; ?> </p>
        <?php else: ?>
        <img alt="<?php echo $title;?>" src="<?php echo $image; ?>" />
        <h2><?php echo $title; ?></h2>
        <p><?php echo $desc; ?> </p>
        <?php endif; ?>
        </div>	<!-- end hc_project_area -->	
		<?php
	}
?>
</div><!--container-->
<div class="clear"></div>