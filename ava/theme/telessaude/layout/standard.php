<?php 
$hassidepre = $PAGE->blocks->region_has_content('side-pre',$OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post',$OUTPUT);
echo $OUTPUT->doctype();
?>
<html <?php echo $OUTPUT->htmlattributes();?>>
<head>
	<title><?php echo $PAGE->title; ?></title>
	<link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
	<?php echo $OUTPUT->standard_head_html();?>
</head>
<body id="<?php p($PAGE->bodyid);?>" class="<?php p($PAGE->bodyclasses);?>">

<?php echo $OUTPUT->standard_top_of_body_html();?>
<div id="ts-page">
<?php if($PAGE->heading || (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar())){?>
	<div id="ts-page-header" align="center">
		<?php if($PAGE->heading){?>
		<div class="bannertop">
			<?php echo $OUTPUT->login_info();?>
		</div>
		<div id="HeaderContainer">
			<div class="HeaderLogo" align="left">
				<img src="<?php echo $OUTPUT->pix_url("logo","theme")?>"/>
				<p class="HeaderMain"><?php echo $PAGE->heading;?></p>
			</div>
			<?php if($hasHeading){?>
			<div class="HeaderMenu" align="left">&nbsp;sadfasdlfkasdflaskjf
				<?php
					
					if(!empty($PAGE->layout_options['langmenu'])){
						echo $OUTPUT->lang_menu();
					} 
					echo $OUTPUT->lang_menu();
					echo $PAGE->headingmenu;
				?>
			</div>
			<?php }?>
		</div>
		<?php }?>
		<?php if(empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar()){?>
			<div id="navigation" class="navbar clearfix">
				<div class="breadcrumb"><?php echo $OUTPUT->navbar();?></div>
				<div class="navbutton"><?php echo $PAGE->button;?></div>
			</div>
		<?php }?>
	</div>
<?php }?>
	<div id="ts-page-content">
	
		<div id="leftDiv" class="SpacerDiv leftColumn">&nbsp;</div>
	    <div id="ts-region-main-box">
	    <br/>
	        <?php if ($hassidepre) { ?>
	        	<div id="region-pre">
	            	<div class="region-content">
	                	<?php echo $OUTPUT->blocks_for_region('side-pre') ?>
	                </div>
	            </div>
			<?php } ?>
	            <div id="<?php 
					if(!$hassidepre && !$hassidepost){
						echo 'region-full';
					}else{ 
						if(!$hassidepre || !$hassidepost){
							echo 'region-half-full';
						}else{ 
							echo 'region-main-wrap';
						}
					}?>">
	                <div id="region-main">
	                    <div class="region-content">
	                        <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
	                    </div>
	                </div>
	            </div>
			<?php if ($hassidepost) { ?>
	        	<div id="region-post">
	        		<div class="region-content">
	                	<?php echo $OUTPUT->blocks_for_region('side-post') ?>
	                </div>
				</div>
			<?php } ?>
	    </div>
	    <div id="rightDiv" class="SpacerDiv rightColumn">&nbsp;</div>
	    <div style="clear: both"></div>
	</div>
<?php if (empty($PAGE->layout_options['nofooter'])) { ?>
    <div id="page-footer" class="clearfix bannerbottom">
    <br/>
        <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        
        ?>
        <div class="signature">
        Copyright (c) 2012 Secretaria Municipal de Saúde, Telessaúde Redes</div>
    </div>
    <?php } ?>
</div>
<script type="text/javascript">
	var h = document.getElementById("ts-page-content").offsetHeight;
	document.getElementById("leftDiv").style.height = h + "px";
	document.getElementById("rightDiv").style.height = h + "px";

	h = document.getElementById("ts-region-main-box").offsetWidth;
	document.getElementById("navigation").style.width = "80%";
</script>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>