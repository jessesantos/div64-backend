<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Produto'); ?></legend>
	<?php
	    echo $this->Form->input('categoria_id', array('label'=>'Categoria'));
	    echo $this->Form->input('slug', array('label'=>'Slug'));
		echo $this->Form->input('nome', array('label'=>'Nome'));
		echo $this->Form->input('preco', array('label'=>'Preço'));
		echo $this->Form->input('thumbnail', array('label'=>'Thumbnail'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Produtos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>