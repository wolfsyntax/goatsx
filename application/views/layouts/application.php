<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title ><?= $title; ?>&nbsp;&mdash;&nbsp;Goats Organize Application Tracking System</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome">

	<link rel="stylesheet" href="<?= base_url()?>public/css/app.css" >
	<style>
		[data-style=primary] + .popover {background:  #E74C3C; border-radius: 0;}
	[data-style=primary] + .popover .popover-title {background-color: #FC6; border-radius: 0; color: #E74C3C;}
	</style>
</head>
<body id="back2top">

	<?php if($this->config->item('base_timestamp') < time()) {?>
	<main role="main">

		<a style="float: right" class="nav-link" id = "back2top-btn" onclick="scrollTops();"><i class="fa fa-angle-up fa-lg text-danger font-weight-bold"></i></a>

		<?php $this->load->view($body); ?>
		
	</main>

	<?php } else { 
		show_404("sitemap/404.php"); //echo "<h1>To continue, Please set date and time correctly</h1>";
	} ?>
	<!--Starter Template-->
	<script src="<?= base_url()?>public/js/jquery-3.3.1.slim.min.js"></script>

    <script src="<?= base_url()?>public/js/popper.min.js"></script>    
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>

   	<script src="<?= base_url(); ?>assets/js/jquery-editable-select.min.js"></script>
    
	<script type="text/javascript">
		window.onscroll = function() {
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		        document.getElementById("back2top-btn").style.display = "block";
		    } else {
		        document.getElementById("back2top-btn").style.display = "none";
		    }
		};

		// When the user clicks on the button, scroll to the top of the document
		function scrollTops() {
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		}

		

	$(document).ready(function () {
		$('#gender').change(function () {
			
			if($(this).val() == 'male'){
				
				$("#is_castrated").prop("disabled",false);

			}else{

				$("#is_castrated").prop("checked",false);
				$("#is_castrated").prop("disabled",true);

			}
		})
	});

	$(function () {
  		
	  	$('[data-toggle="popover"]').popover({

	  		placement: "right",
	  		trigger: "focus",
	  		template: '<div class="popover"><div class="arrow"></div><div class="popover-header  text-white" style="background-color: #20c997;"><h3 class="popover-title"></h3></div><div class="popover-body"><p class="popover-content"></p></div></div></div>'
	  	});
	  	
	  	
	  	

	  	$('[data-target="#breedingInfo"]').popover({

	  		placement: "right",
	  		trigger: "focus",
	  		template: '<div class="popover"><div class="arrow"></div><div class="popover-header bg-warning text-white"><h3 class="popover-title text-white"></h3></div><div class="popover-body"><p class="popover-content"></p></div></div></div>'
	  	});

	  	$('[data-target="#healthCheck"]').popover({

	  		placement: "right",
	  		trigger: "focus",
	  		template: '<div class="popover"><div class="arrow"></div><div class="popover-header bg-success text-white"><h3 class="popover-title"></h3></div><div class="popover-body"><p class="popover-content"></p></div></div></div>'
	  	});

	  	$('[data-target="#goatManagement"]').popover({

	  		placement: "right",
	  		trigger: "focus",
	  		template: '<div class="popover"><div class="arrow"></div><div class="popover-header bg-dark text-white"><h3 class="popover-title"></h3></div><div class="popover-body"><p class="popover-content"></p></div></div></div>'
	  	});
	  	

	  	$('[data-target="#financialManagement"]').popover({

	  		placement: "right",
	  		trigger: "focus",
	  		template: '<div class="popover"><div class="arrow"></div><div class="popover-header bg-info text-white"><h3 class="popover-title"></h3></div><div class="popover-body"><p class="popover-content"></p></div></div></div>'
	  	});

//		$('.popover-header').css("background-color", "#9FC53B");

  		$('[data-toggled="popover"]').popover({	container: "body",trigger: "focus", placement: "right" });

  		$('#dam_id_select').editableSelect();

  		$('#sire_id_select').editableSelect();

		$('#body_color_select').editableSelect();

		$('#tag_color_select').editableSelect();

		$('#goat_id_select').editableSelect();

		$('#client_select').editableSelect();		
		
  		$("#sidebar > li div.collapse a.nav-link").each(function(){
  			var self = $(this);
  			var href = self.attr("href");

  			self.attr("href","javascript:void(0);");

  			self.click(function(){
  				//alert(href);
  				$("#ui_view").prop('src',href)
//  				$("#body-content ui_view").load();
  			});
  		});
	});

	</script>

	<script>

	/**	$(function () {
			$("#gender").on("change", function() {
		    	// Check the option value for gender is "male" then enable checkbox, otherwise disable the checkbox
		    	if ($("#gender").val() === "male") {
		        	$("#is_castrated").prop("disabled",false);

		    	// For all other options, enable the checkbox
		    	} else {
		        	$("#is_castrated").prop("disabled",true);
		    	}
			});
		});
	**/

	</script>	
</body>
</html>
