<section class="login_body">
	<div class="login">
		<h1><strong>Labweb</strong> Dashboard</h1>
		<form method="POST" action="<?php echo site_url('admin/login'); ?>">
			<input id="name" type="text" name="username" placeholder="ელ-ფოსტა" required />
			<input placeholder="პაროლი" name="password" type="password" required />
			<button type="submit" class="button">შესვლა</button>
		</form>
		<p><a href="#">პაროლის აღდგენა</a></p>
	</div>
</section>

