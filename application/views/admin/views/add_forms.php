<section class="admin_section">

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


</section>