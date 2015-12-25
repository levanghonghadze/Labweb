
<?php foreach ( $events as $e ) : ?>

<a href="<?php echo site_url('main/show_event/' . $e['id']) ?>">
<div><?php echo $e['name'] ?></div>
<div><?php echo $e['location'] ?></div>
<div><?php echo $e['date'] ?></div>
</a>

<?php endforeach; ?>