<?php
/* Smarty version 3.1.33, created on 2020-10-18 23:49:06
  from '/var/www/html/themes/etrendlite/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8cb852593706_38626224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ad08295ee43207b4673e09d4211f717001624f' => 
    array (
      0 => '/var/www/html/themes/etrendlite/templates/catalog/_partials/products-top.tpl',
      1 => 1603047253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5f8cb852593706_38626224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="row products-selection">
    <div class="col-lg-7 col-md-4 display-and-count">
        <div class="display-mode">
            <i class="fa fa-th-large show_grid active" aria-hidden="true"></i>
            <i class="fa fa-list show_list" aria-hidden="true"></i>
        </div>
        <div class="hidden-sm-down total-products">
            <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</p>
            <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
            <?php }?>
        </div>
    </div>
    <div class="col-lg-5 col-md-8">
        <div class="row sort-by-row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15047345915f8cb8525901a8_57564786', 'sort_by');
?>

            <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
                <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
                    <button id="search_filter_toggler" class="btn btn-secondary">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    </button>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="col-sm-12 hidden-lg-up text-sm-center showing">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

    </div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_15047345915f8cb8525901a8_57564786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_15047345915f8cb8525901a8_57564786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
            <?php
}
}
/* {/block 'sort_by'} */
}