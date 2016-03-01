<!-- <section class="admin_section">

  <link rel="stylesheet" href="<?php echo base_url('assets/style/vendor.css'); ?>" />
  <link rel="stylesheet" href=" <?php echo base_url('assets/style/formbuilder.css'); ?>" />
  <style>
  * {
    box-sizing: border-box;
  }
  input[type=text] {
    height: 25px;
    margin-bottom: 3px;
  }
  </style>


  <div class='fb-main'></div>

  <script src="<?php echo base_url('assets/js/vendor.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/formbuilder.js'); ?>"></script>
 
  <script>
    $(function(){
      fb = new Formbuilder({
        selector: '.fb-main',
        bootstrapData: [
          {
            "label": "სახელი",
            "field_type": "text",
            "required": true,
            "field_options": {},
            "cid": "c1"
          }, {
            "label": "გვარი",
            "field_type": "text",
            "required": true,
            "field_options": {},
            "cid": "c1"
          }, {
            "label": "ელ-ფოსტა",
            "field_type": "text",
            "required": true,
            "field_options": {},
            "cid": "c1"
          }, {
            "label": "ტელეფონის ნომერი",
            "field_type": "number",
            "required": true,
            "field_options": {},
            "cid": "c1"
          }, {
          	"label":"სქესი",
          	"field_type":"dropdown",
          	"required":true,
     		"field_options":{"options":[{"label":"ქალი",
     		"checked":false},
     		{"label":"კაცი","checked":false}],
     		"include_blank_option":false},
     		"cid":"c22"
     	}
        ]
      });

      fb.on('save', function(payload){
        console.log(payload);
      })
    });
  </script>

</section> -->

  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/form/form-builder.min.css'); ?>">



<section class="admin_section">
<h1>ფორმის შექმნა</h1>
    <div id="main_content_wrap" class="outer">
        
        <div class="build-form">
          <form action="">
            <textarea name="form-builder-template" id="form-builder-template" cols="30" rows="10"></textarea>
          </form>
          <br style="clear:both">
        </div>
        <div class="render-form">
          <form  action="<?php echo site_url('admin/insert_form'); ?>" method="post">
            <textarea style="display: none;" name="form" cols="30" rows="10" id="rendered-form"></textarea>
            <button class="button" style="width: 100%; margin: 0 2%; padding: 10px 0;" type="submit">ფორმის შექმნა</button>
          </form>
          
            <button type="submit" id="render-form-button" class="btn btn-primary">Render form</button>
          </div>
        <br style="clear:both">
        
    </div>
  </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <!-- Only include on form edit page -->
  <script src="<?php echo base_url('assets/form/form-builder.min.js'); ?>"></script>
  <!-- Only include on form render page -->
  <script src="<?php echo base_url('assets/form/form-render.min.js'); ?>"></script>
  <script>
  jQuery(document).ready(function($) {
    'use strict';
    var template = document.getElementById('form-builder-template'),
      formContainer = document.getElementById('rendered-form'),
      renderBtn = document.getElementById('render-form-button');
    $(template).formBuilder();

    $(renderBtn).click(function(e) {
      e.preventDefault();
      $(template).formRender({
        container: $(formContainer)
      });
    });
  });
  </script>