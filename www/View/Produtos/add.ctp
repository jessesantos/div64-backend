<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Add Produto'); ?></legend>
	<?php
		echo $this->Form->input('slug');
		echo $this->Form->input('nome');
		echo $this->Form->input('preco');
		echo $this->Form->input('thumbnail');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Produtos'), array('action' => 'index')); ?></li>
	</ul>
</div>
