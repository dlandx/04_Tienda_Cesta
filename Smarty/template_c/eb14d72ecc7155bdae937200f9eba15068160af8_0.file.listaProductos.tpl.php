<?php
/* Smarty version 3.1.33, created on 2019-02-07 23:17:41
  from 'C:\xampp\htdocs\T_Cesta\Smarty\template\listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5cae85dd0677_08506637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb14d72ecc7155bdae937200f9eba15068160af8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\T_Cesta\\Smarty\\template\\listaProductos.tpl',
      1 => 1549577856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5cae85dd0677_08506637 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="list_product">
    <form action="./productos.php" method="POST">
                        <?php $_smarty_tpl->_assignInScope('result', '');?> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaProductos']->value, 'producto', false, NULL, 'pos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("<div class='c_list'><div class='c_btn'>
                <button type='submit' name='btn' value='")).($_smarty_tpl->tpl_vars['producto']->value->getCod())).("'></button></div>"));?>
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->getName_short();
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("<div class='list'><span class='name'>")).($_prefixVariable1)).("</span>"));?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->getPrecio();
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("<span class='price'>")).($_prefixVariable2)).("</span></div>"));?>
 
            <?php $_smarty_tpl->_assignInScope('result', ($_smarty_tpl->tpl_vars['result']->value).("</div>"));?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
         

    </form>
</div>


<?php }
}
