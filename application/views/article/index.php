<?php if($this->session->flashdata('flashSuccess')):?>
<div class="alert alert-success"> 
<button type="button" class="close" data-dismiss="alert">&times;</button>
<?php echo $this->session->flashdata('flashSuccess');?> 
</div>
<?php endif;?>

<table class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th>Sl. No</th>
<th>Title</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php 
$i=0;
foreach($articles as $article_item):?>
<tr>
<td><?php echo ++$i;?></td>
<td><?php echo $article_item->title;?></td>
<td><?php echo anchor(base_url('article/update/'.$article_item->id), 'Edit', 'Edit');?></td>
<td><?php echo anchor(base_url('article/delete/'.$article_item->id), 'Delete', array('title' =>'Delete',  'class' => 'delete_article'));?></td>
</tr>
<?php endforeach;?>
</tbody>
</table>

<?php echo anchor(base_url('article/create'), 'Create New Article', 'Create New Article');?>
<script>
$('.delete_article').click(function(e) {
  var didConfirm = confirm("Are you sure you want to delete?");
  if (didConfirm == false) {
    e.preventDefault();
  }
});
</script>