<!DOCTYPE html>
<html lang="en">
<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$dazz_cs_dashboard = unserialize(get_option('dazz_cs_dashboard'));
$dazz_cs_design = unserialize(get_option('dazz_cs_design'));	
$dazz_cs_social = unserialize(get_option('dazz_cs_social'));
$dazz_cs_seo = unserialize(get_option('dazz_cs_seo'));
$dazz_cs_contact = unserialize(get_option('dazz_cs_contact'));
 ?>
<head>
    <!-- ==========================
    	META TAGS 
    =========================== -->
	<!-- META DATA -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php echo esc_html($dazz_cs_seo['dazz_cs_seo_desc']); ?>">
    <!-- ==========================
    	TITLE 
    =========================== -->
    <title><?php echo esc_html($dazz_cs_seo['dazz_cs_seo_title']); ?></title>
	<link rel="icon" href="<?php echo esc_html($dazz_cs_seo['dazz_cs_favicon']); ?>">
    
    
    <link rel="stylesheet" href="<?php echo DAZZ_CSW_PLUGIN_URL.'assets/css/bootstrap.css'; ?>" />
    <link rel="stylesheet" href="<?php echo DAZZ_CSW_PLUGIN_URL.'assets/css/font-awesome/css/font-awesome.min.css'; ?>" />
    <link rel="stylesheet" href="<?php echo DAZZ_CSW_PLUGIN_URL.'frontend/assets/css/jquery.vegas.css'; ?>" />
    <link rel="stylesheet" href="<?php echo DAZZ_CSW_PLUGIN_URL.'frontend/assets/css/custom.css'; ?>" />
		
	<style>
		body{
			background:<?php echo esc_html($dazz_cs_design['dazz_cs_bg_clr']); ?> !important;
			font-family:'<?php echo esc_html($dazz_cs_design['dazz_ft_st']); ?>' !important;
		}
	
		
		.content h2{
			color:<?php echo esc_html($dazz_cs_design['dazz_headeline_ft_clr']); ?> !important;
			font-size:<?php echo esc_html($dazz_cs_design['dazz_headline_ft_size']); ?>px !important;
			font-family:'<?php echo esc_html($dazz_cs_design['dazz_ft_st']); ?>' !important;
		}
		.description{
			color:<?php echo esc_html($dazz_cs_design['dazz_desc_ft_clr']); ?> !important;
			font-size:<?php echo esc_html($dazz_cs_design['dazz_desc_ft_size']); ?>px !important;
			font-family:'<?php echo esc_html($dazz_cs_design['dazz_ft_st']); ?>' !important;
		}
		footer.navbar-default ul > li > a {
			
			color: <?php echo esc_html($dazz_cs_design['dazz_social_clr']); ?> !important;
			
		}
		footer.navbar-default ul > li > a:hover {
				border-color:<?php echo esc_html($dazz_cs_design['dazz_social_clr']); ?> !important;
			}
		.contact-info{
			color: <?php echo esc_html($dazz_cs_design['dazz_desc_ft_clr']); ?> !important;
			font-size:<?php echo esc_html($dazz_cs_design['dazz_desc_ft_size']); ?>px !important;
			font-family:'<?php echo esc_html($dazz_cs_design['dazz_ft_st']); ?>' !important;
		}
		@media (max-width:767px) {
			footer.navbar-default ul > li > a {
				border-color:<?php echo esc_html($dazz_cs_design['dazz_social_clr']); ?> !important;
			}
		}
	<?php echo html_entity_decode(stripslashes($dazz_cs_design['dazz_cs_custom_css'])); ?>
	</style>
    
  <?php echo $dazz_cs_seo['dazz_cs_seo_analytics']; ?>
</head>
<body>
<?php if($dazz_cs_design['dazz_cs_select_bg'] == "1") { ?>
<div id="overlay"></div> 
<?php } ?>
	
    
     <section class="content">
        <div class="container"> 
            <?php if($dazz_cs_dashboard['display_logo'] == "0") { ?>
			<div class="text-center" style="display:block;overflow:hidden">
				<img src="<?php echo esc_url($dazz_cs_dashboard['cs_logo_url']); ?>" style="display: inline-block;margin-bottom:40px;" class="img-responsive" />
            </div>
			<?php } ?>
			<h2><?php echo esc_html(stripslashes($dazz_cs_dashboard['cs_headline'])); ?></h2>
            <p class="description"><?php echo esc_html(stripslashes($dazz_cs_dashboard['cs_description'])); ?></p>
			<ul class="contact-info">
				<?php if($dazz_cs_contact['dazz_cs_address']!=""){ ?>
					<li><i class="fa fa-map-marker"></i> <?php echo esc_html($dazz_cs_contact['dazz_cs_address']); ?></a></li>
				<?php } ?>
				<?php if($dazz_cs_contact['dazz_cs_no']!=""){ ?>
					<li><i class="fa fa-phone"> </i> <?php echo esc_html($dazz_cs_contact['dazz_cs_no']); ?> </i></a></li>
				<?php } ?>
				<?php if($dazz_cs_contact['dazz_cs_email']!=""){ ?>
					<li><i class="fa fa-envelope-o"></i>  <?php echo esc_html($dazz_cs_contact['dazz_cs_email']); ?></a></li>
				<?php } ?>
			</ul>
		 </div>
    </section>
 
    <footer class="navbar navbar-expand-lg navbar-default fixed-bottom">
    	<div class="container">
            <div class="navbar-header" style="text-align:center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSocialContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
            </div>	
            <div class="collapse navbar-collapse" id="navbarSocialContent">
                <ul class="m-auto">
                    <?php if($dazz_cs_social['dazz_cs_fb']!=""){ ?>
						<li class="nav-item"><a href="<?php echo esc_url($dazz_cs_social['dazz_cs_fb']); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php } ?>
					<?php if($dazz_cs_social['dazz_cs_twit']!=""){ ?>
						<li class="nav-item"><a href="<?php echo esc_url($dazz_cs_social['dazz_cs_twit']); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<?php } ?>
					<?php if($dazz_cs_social['dazz_cs_ln']!=""){ ?>
						<li class="nav-item"><a href="<?php echo esc_url($dazz_cs_social['dazz_cs_ln']); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<?php } ?>
					<?php if($dazz_cs_social['dazz_cs_gp']!=""){ ?>					
						<li class="nav-item"><a href="<?php echo esc_url($dazz_cs_social['dazz_cs_gp']); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>  
					<?php } ?>
                </ul>
              
            </div>
      	</div>
    </footer>
	
    <?php 	
		$output ="";
		$output .= "<!-- JS -->\n";
		$include_url = includes_url();
		$last = $include_url[strlen( $include_url )-1];
		if ( $last != '/' ) {
			$include_url = $include_url . '/';
		}
		echo $output .= '<script src="'.esc_url($include_url).'js/jquery/jquery.js"></script>'."\n"; 
		?>
		<script type="text/javascript" src="<?php echo DAZZ_CSW_PLUGIN_URL.'assets/js/bootstrap.min.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo DAZZ_CSW_PLUGIN_URL.'frontend/assets/js/jquery.vegas.js'; ?>"></script>
		<?php if($dazz_cs_design['dazz_cs_select_bg'] == "1") { ?>
		<script>
			jQuery(document).ready(function() {	
				jQuery.vegas({src:'<?php echo esc_url($dazz_cs_design['dazz_cs_bg_img']); ?>'});
				});

		</script>
		<?php } ?>
</body>

</html>