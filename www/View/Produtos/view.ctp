<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Categoria']['titulo'], array('controller' => 'categorias', 'action' => 'view', $produto['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preço'); ?></dt>
		<dd>
			<?php echo 'R$' . str_replace('.', ',', h($produto['Produto']['preco'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail'); ?></dt>
		<dd>
			<?php echo '<img width="500" src="' . h($produto['Produto']['thumbnail']) . '">'; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Produto'), array('action' => 'delete', $produto['Produto']['id']), array(), __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
