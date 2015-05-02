<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['titulo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), array(), __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Produtos Relacionados'); ?></h3>
	<?php if (!empty($categoria['Produto'])): ?>
	<table cellpadding ="0" cellspacing ="0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Preço'); ?></th>
		<th><?php echo __('Thumbnail'); ?></th>
		<th class="actions"></th>
	</tr>
	<?php foreach ($categoria['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id']; ?></td>
			<td><?php echo $produto['nome']; ?></td>
			<td><?php echo 'R$' . str_replace('.', ',', $produto['preco']); ?></td>
			<td><?php echo '<img width="150" src="' . $produto['thumbnail'] . '">'; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
				<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), array(), __('Are you sure you want to delete # %s?', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>