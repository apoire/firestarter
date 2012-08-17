    <h1>Hello, <?php echo isset($username) ? $username : ''?></h1>
	
	<p>User ID: <?php echo isset($id) ? $id : ''?></p>
	
    <p><a href="<?php echo base_url()?>logout">Log Out</a></p>