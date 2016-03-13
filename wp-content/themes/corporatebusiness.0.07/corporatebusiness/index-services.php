<!-- Services Section -->
<?php
$mst = esc_attr (get_theme_mod( 'services_title' ));
$msd = esc_attr (get_theme_mod( 'services_desc' ));
?>
<div class="clear"></div>
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
<div class="container">
<?php
	//$count = get_theme_mod( 'services_quantity', 4 );
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
        <div class="hc_service_area <?php echo "sw-$w"; ?>">
        <?php
		// values
		$icon = esc_attr(get_theme_mod( 'service_icon'.$i, "fa-briefcase"));
		$title = esc_attr(get_theme_mod( 'service_title'.$i, "Lorem ipsum" ));
		$desc = esc_attr(get_theme_mod( 'service_desc'.$i, "Nullam fringilla lorem sed ante pharetra, et ultrices nisl rhoncus!" ));
		$link = esc_url(get_theme_mod( 'service_link'.$i ));
		$color = esc_attr(get_theme_mod( 'service_color'.$i ));
		// style
		$color = str_replace("#999",$color,'style="border-color:#999; color:#999;"');
		//
		if ($link):
		?>
        <a href="<?php echo $link; ?>"><i class=" fa <?php echo $icon; ?>" <?php echo $color;?>></i></a>
        <h2><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
        <p><?php echo $desc; ?> </p>
        <?php else: ?>
        <i class="fa <?php echo $icon; ?>" <?php echo $color;?>></i>
        <h2><?php echo $title; ?></h2>
        <p><?php echo $desc; ?> </p>
        <?php endif; ?>
        </div>	<!-- end hc_service_area -->	
		<?php
	}
?>
</div><!--container-->
<div class="hc_home_border"></div>
<div class="clear"></div>
	