<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/test.css" />
</head>
<br />
<h3>Test Records</h3><br />
<h4><a href="<?php echo base_url() ?>test/add">Add a Record</a></h4><br />
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Actions</th>
</tr>
<?php foreach ($rows->result() as $row): ?>
<tr>
<td><?php echo $row->id; ?></td>
<td><?php echo $row->name; ?></td>
<td><a href="<?php echo base_url() ?>test/edit/<?php echo $row->id; ?>">Edit</a> <a href="<?php echo base_url() ?>test/delete/<?php echo $row->id; ?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
