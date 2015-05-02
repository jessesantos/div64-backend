<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('slug');
		echo $this->Form->input('titulo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Categoria.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Categoria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
