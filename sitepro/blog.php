<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
	<meta name="viewport" content="width=1003" />
	<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<style type="text/css">
		body { background: #e5eeef none no-repeat scroll center top; }
		.wb_sbg { background: transparent none repeat-x scroll left top; }
		.wb-stl-pagetitle { font: normal bold 200px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #ffffff; line-height: 38px; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; text-transform: none; }
		.wb-stl-pagetitle a { font: normal bold 200px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 38px; font-weight: normal; font-style: normal; }
		.wb-stl-pagetitle a:hover { font: normal bold 200px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 38px; font-weight: normal; font-style: normal; }
		.wb-stl-pagetitle ul { list-style-image: url('null'); }
		.wb-stl-subtitle { font: normal bold 72px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 64px; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; text-transform: none; }
		.wb-stl-subtitle a { font: normal bold 72px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 64px; font-weight: normal; font-style: normal; }
		.wb-stl-subtitle a:hover { font: normal bold 72px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 64px; font-weight: normal; font-style: normal; }
		.wb-stl-subtitle ul { list-style-image: url('null'); }
		.wb-stl-heading1 { font: normal bold 44px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; text-transform: capitalize; }
		.wb-stl-heading1 a { font: normal bold 44px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading1 a:hover { font: normal bold 44px Arial,Helvetica,sans-serif; text-align: left; text-decoration: underline; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading1 ul { list-style-image: url('null'); }
		.wb-stl-heading2 { font: normal bold 24px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-heading2 a { font: normal bold 24px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading2 a:hover { font: normal bold 24px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading2 ul { list-style-image: url('null'); }
		.wb-stl-heading3 { font: normal bold 42px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #ffffff; line-height: normal; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-heading3 a { font: normal bold 42px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading3 a:hover { font: normal bold 42px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading3 ul { list-style-image: url('null'); }
		.wb-stl-normal { font: normal normal 13px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #474747; line-height: 26px; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-normal a { font: normal normal 13px Arial,Helvetica,sans-serif; text-align: left; text-decoration: underline; color: #1b669f; line-height: 26px; font-weight: normal; font-style: normal; }
		.wb-stl-normal a:hover { font: normal normal 13px Arial,Helvetica,sans-serif; text-align: left; text-decoration: underline; color: #000000; line-height: 26px; font-weight: normal; font-style: normal; }
		.wb-stl-normal ul { list-style-image: url('null'); }
		.wb-stl-highlight { font: normal normal 16px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 24px; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-highlight a { font: normal normal 16px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 24px; font-weight: normal; font-style: normal; }
		.wb-stl-highlight a:hover { font: normal normal 16px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 24px; font-weight: normal; font-style: normal; }
		.wb-stl-highlight ul { list-style-image: url('null'); }
		.wb-stl-special { font: normal bold 18px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 28px; margin: 0px 0px 20px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-special a { font: normal bold 18px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 28px; font-weight: normal; font-style: normal; }
		.wb-stl-special a:hover { font: normal bold 18px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 28px; font-weight: normal; font-style: normal; }
		.wb-stl-special ul { list-style-image: url('null'); }
		.wb-stl-footer { font: normal normal 13px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 20px; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-footer a { font: normal normal 13px Arial,Helvetica,sans-serif; text-align: left; text-decoration: underline; color: #1b669f; line-height: 20px; font-weight: normal; font-style: normal; }
		.wb-stl-footer a:hover { font: normal normal 13px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #080808; line-height: 20px; font-weight: normal; font-style: normal; }
		.wb-stl-footer ul { list-style-image: url('null'); }
		body, .wb_sbg { min-width: 1003px; }
		#wb_element_instance11 ul { background: transparent none repeat scroll left top; border: 0px none #000000; text-align: left; }
		#wb_element_instance11 ul ul { background: #2e2e2e none repeat scroll left top; }
		#wb_element_instance11 li { margin: 10px 10px 10px 10px; }
		#wb_element_instance11 li a { text-transform: none; border: 0px none #000000; padding: 2px 2px 2px 2px; font: normal normal 22px Arial,Helvetica,sans-serif; text-decoration: none; color: #2c2c2c; line-height: 24px; background: transparent none repeat scroll left top; }
		#wb_element_instance11 li:hover > a, #wb_element_instance11 li:focus > a { border: 0px none #000000; font: normal normal 22px Arial,Helvetica,sans-serif; text-decoration: none; color: #43852d; line-height: 24px; background: transparent none repeat scroll left top; }
		#wb_element_instance11 li.active > a { border: 0px none #000000; font: normal normal 22px Arial,Helvetica,sans-serif; text-decoration: none; color: #43852d; line-height: 24px; background: transparent none repeat scroll left top; }
	</style>
	<link href="css/site.css?v=1.0.4" rel="stylesheet" type="text/css" />
		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root" style="width: 1003px;"><div class="vbox wb_container" id="wb_main" style="height: 177px;">
	
<div id="wb_element_instance11" class="wb_element" style="left: 710px; top: 20px; width: 280px; height: 57px; min-width: 280px; min-height: 57px; z-index: 39;"><ul class="hmenu"></ul></div><div id="wb_element_instance12" class="wb_element" style="left: 0px; top: 97px; min-width: 0px; min-height: 0px; z-index: 9000; width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance12");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance12").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance13" class="wb_element" style="left: 0px; top: 117px; min-width: 0px; min-height: 0px; z-index: 9999; text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(0);
				}
			});
			</script></div></div><div class="wb_sbg" style="min-height: 731px;"></div></div></body>
</html>