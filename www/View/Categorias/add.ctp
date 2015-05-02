<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('slug', array('label'=>'Slug'));
		echo $this->Form->input('titulo', array('label'=>'Título'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
