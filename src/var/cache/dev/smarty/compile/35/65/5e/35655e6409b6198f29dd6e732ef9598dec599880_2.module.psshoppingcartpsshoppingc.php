<?php
/* Smarty version 3.1.33, created on 2020-10-18 23:49:01
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8cb84d8e3bf7_21534672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1603047253,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8cb84d8e3bf7_21534672 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/etrendlite/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
    <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="header">
                        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
                <span class="cart-qty">
                    <span class="cart-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
 Item(s)</span>
                </span>
                            </a>
                    </div>
    </div>
</div>
<!-- end /var/www/html/themes/etrendlite/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }
}