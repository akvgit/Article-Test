<?php 
$title = array(
				'name' => 'title',
				'id' => 'title',
				'value' => set_value('title'));
$body = array('name' => 'body', 'id' =>'body', 'value' => set_value('body'));
$save_button = array('name' => 'submit');
$cancel_button = array(
    'name' =>'cancel',
	'content' => 'Cancel',
	'class' => 'btn',
	'type' => 'button',
);	
?>
<fieldset>
<legend>Edit article</legend>
	<?php echo form_open(base_url('article/update/'.$article->id));;?>
	<div class="control-group">
	  <?php echo form_label(ucfirst($title['name']), $title['name']); ?>
	  <div class="controls">
		<?php 
		   echo form_input($title); 
		   echo form_error($title['name']);
		?>
	  </div>
	</div>

	<div class="control-group">
	 <?php echo form_label(ucfirst($body['name']), $body['name']); ?>
	 <div class="controls">
	  <?php 
		  echo form_textarea($body);
		  echo form_error($body['name']);
	  ?>
	 </div>
	</div>
	
	<div class="controls">  
		<div class="btn-toolbar">
		  <?php 
			   echo form_submit('submit', 'Submit'); 
			   //echo form_button($cancel_button); 
		  ?>  
		</div>
	</div>   
	<?php echo form_close() ?>
</fieldset>