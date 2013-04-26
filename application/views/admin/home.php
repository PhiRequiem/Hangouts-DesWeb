<?php 
if(!isset($youtube_url)){$youtube_url='';}
$add_video = array('class' => 'add_video');
$yt_input = array(
		'name' => 'youtube_url',
		'id' => 'youtube_url',
		'style' => 'yt_input',
		'value' => $youtube_url,
		'type' => 'url',
		'class' => 'span8',
    	'placeholder' => 'Youtube Url',
   		'autofocus' => 'autofocus',
    	'required' => 'required'
	);
$send_b = array(
		'class' => 'span4 btn btn-inverse btn-large',
		'value' => 'Agregar hangout!! ヘ(^_^ヘ)'
	);
?>

<div class="container">
	<?php echo form_open('admin/add_hangout', $add_video); ?>
	<div class="controls controls-row">
	<?php echo form_input($yt_input); ?>
	<?php echo form_submit($send_b); ?>
	</div>
	<?php echo form_close(); ?>
	<div class="space-2"></div>
	<div class="row-fluid">
		<div class="span4"><h2>Últimos Agregados</h2>
			<div class="listas">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="span4"><h2>Últimos Editados</h2>
			<div class="listas">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="span4"><h2>Incompletos</h2>
			<div class="listas">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
	</div>
</div>