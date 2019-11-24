<?php
/* Smarty version 3.1.33, created on 2019-11-23 19:58:51
  from '/var/www/html/themes/warehouse/templates/catalog/listing/manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd9816b88fe66_21737481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '791e45a4c810df0709ec83247040f06f415d970b' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/listing/manufacturer.tpl',
      1 => 1574447987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd9816b88fe66_21737481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13746358465dd9816b888122_73783315', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_13746358465dd9816b888122_73783315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_13746358465dd9816b888122_73783315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="h1 page-title">
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of products by brand %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></h1>

    <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['short_description'] || $_smarty_tpl->tpl_vars['manufacturer']->value['description']) {?>
    <div id="manufacturer-description-wrapper" class="mb-3">
    <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['short_description']) {?>
        <div class="card">
        <div id="manufacturer-short-description">
                <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>


                <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['description']) {?>
                    <a class="btn btn-secondary btn-brands-more float-right collapsed "  data-toggle="collapse" data-parent="#manufacturer-description"
                   href="#manufacturer-description">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>

        </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['description']) {?>
            <div class="card">
                <div id="manufacturer-description" class="collapse" role="tabpanel">
                    <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>

                    <a class="btn btn-secondary float-right"  data-toggle="collapse" data-parent="#manufacturer-description"
                       href="#manufacturer-description">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Less','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>

                    </a>
                </div>   </div>
        <?php }?>
        <?php } else { ?>
        <div class="card">
            <div id="manufacturer-description">
                <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>

            </div>
        </div>
    <?php }?>
    </div>
    <?php }
}
}
/* {/block 'product_list_header'} */
}
