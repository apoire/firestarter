<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/test.css" />
</head>
<br />
<h3>Edit a Record</h3><br />
<table>
<?php echo form_open('test/edit_validate/'.$row->id); ?>
<tr><td align='right'>Name:</td><td><?php $data = array('id' => 'name', 'name' => 'name', 'value' => $row->name); echo form_input($data, set_value('name')); ?></td></tr>
<tr><td align='right'> </td><td><?php echo form_submit('submit', 'Update'); ?></td></tr>
<?php echo form_close(); ?>
</table>
<?php echo validation_errors('<p class="error">'); ?>
<script type="text/javascript" src="<?php echo base_url() ?>js/test.js"></script>
