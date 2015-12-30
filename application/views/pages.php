<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

			<div class="page_slides" id="slideout">
			<div class="background" >
				<ul class="slides-container">
					<li style="margin-top: 70px; background: url('<?php echo base_url('theme/images') . $pages['bg1']; ?>') no-repeat bottom center / cover;">
					</li>
					<li style="margin-top: 70px; background: url('<?php echo base_url('theme/images') . $pages['bg2']; ?>') no-repeat bottom center / cover;">
					</li>
				</ul>
			</div>
			</div><!-- /page_slides -->

			<script>window.setTimeout(function(){
		document.getElementById("slideout").style.display="none";
		},8000); </script>

		<script>window.setTimeout(function(){
		document.getElementById("slidestart").style.display="block";
		},7000); </script>

	<div style="width: 100%; height: 100vh; position:fixed; z-index: -101; margin-top: 70px; display: none; background: url('<?php echo base_url('theme/images') . $pages['bg2']; ?>') no-repeat bottom center / cover;" id="slidestart">
	</div>

	<div class="page">
	   <h1><?php echo $pages['page_title'] ?></h1>
	   <h2><?php echo $pages['page_text'] ?></h2>
	</div>
	<!--page-->