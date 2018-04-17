<?php 
// To display Header Call Out section on front page
?>
<?php 
$ctah_btn_text1 = get_theme_mod("ctah_btn_text1",'');
$erzen_contact1_section_hideshow = get_theme_mod('erzen_contact1_section_hideshow','hide');
if ($erzen_contact1_section_hideshow =='show') { ?>
<!-- Header Callout Area-->
<div class="cta_area ">
	<div class="container">
		<div class="row wow fadeInUp">
			<div class="col-md-9">
				<div class="cta">
					<h2><?php echo esc_html(get_theme_mod('ctah_heading1')); ?></h2>
				</div>
			</div>
			<div class="col-md-3 text-right">
				<a href="<?php echo esc_url(get_theme_mod('ctah_btn_url1')); ?>" class="button hvr-bounce-to-right pbg"><i class="fa fa-long-arrow-right"></i><?php echo esc_attr($ctah_btn_text1); ?></a></a>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- /Header Callout Area -->