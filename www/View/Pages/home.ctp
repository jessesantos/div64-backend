<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>

<h2>https://github.com/jessesantos/div64-backend</h2>

<h3><?php echo __d('cake_dev', 'Navegação'); ?></h3>
<p>
<ul>
<?php
echo '<li>' . $this->Html->link('Categorias', '/categorias') . '</li>';
echo '<li>' . $this->Html->link('Produtos', '/produtos') . '</li>';
?>
</ul>
</p>