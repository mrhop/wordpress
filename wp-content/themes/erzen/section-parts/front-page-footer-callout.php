<?php 
// To display Footer Call Out section on front page
?>
<!-- 03. cta_area -->
<?php
$erzen_contact2_section_hideshow = get_theme_mod('erzen_contact2_section_hideshow','hide');
if ($erzen_contact2_section_hideshow =='show') { ?>
<?php $ctah_btn_text2 = get_theme_mod('ctah_btn_text2'); ?>  
    <div class="cta_area">
        <div class="container">
            <div class="row  wow fadeInUp">
                <div class="col-md-9">
                    <div class="cta">
                        <h2>
						<?php echo esc_html(get_theme_mod('ctah_heading2')); ?></h2>
                    </div>
                </div>
                <?php if (!empty($ctah_btn_text2)) { ?>
                <div class="col-md-3 text-right">
                    <a href="<?php echo esc_url(get_theme_mod('ctah_btn_url2')); ?>" class="button hvr-bounce-to-right pbg"><i class="fa fa-long-arrow-right"></i> 
					<?php echo esc_attr($ctah_btn_text2); ?></a>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
<?php } ?>	