<div class="show_event">
<div class="event_img" style="background: url(<?php echo base_url('uploads/' . $events['photo']) ?>) no-repeat center center / cover;">
	<h1><?php echo $events['name'] ?></h1>
</div>

<div class="event_overview">
<?php echo $events['overview'] ?>
</div>

<div class="lab_info">
<?php echo $events['lab_name'] ?>
<?php echo $events['lab_photo'] ?>
</div>
<section class="show_event_mentors">
<h2>მენტორები</h2>
<?php echo $events['mentor_name'] ?>
</section>

<div class="event_location"><i class="fa fa-map-marker"></i> <?php echo $events['location'] ?></div>
<div class="event_date"><i class="fa fa-clock-o"></i> <?php echo $events['event_start_date'] ?></div>

<button>რეგისტრაცია</button>
</div><!-- /show_event -->

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
            "cid": "c1",
            "name": "levani"
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