<?php
/* Smarty version 3.1.33, created on 2019-11-23 15:09:30
  from '/var/www/html/themes/warehouse/templates/cms/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd93d9aef2993_08466193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e26bb9e41cc9f1cee2ad6a14d580350cbd11b6' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/cms/category.tpl',
      1 => 1574447987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd93d9aef2993_08466193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17586469555dd93d9aee8300_91491674', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17415676835dd93d9aee9cd8_69048996', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_17586469555dd93d9aee8300_91491674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_17586469555dd93d9aee8300_91491674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value['name'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_sub_categories'} */
class Block_19641602655dd93d9aeea275_40477093 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['sub_categories']->value) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of pages in %category_name%:','d'=>'Shop.Theme.Global','sprintf'=>array('%category_name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl ) );?>
</p>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_categories']->value, 'sub_category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sub_category']->value) {
?>
          <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_category']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }?>
  <?php
}
}
/* {/block 'cms_sub_categories'} */
/* {block 'cms_sub_pages'} */
class Block_17767985345dd93d9aeef237_51801731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['cms_pages']->value) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of pages in %name%:','d'=>'Shop.Theme.Global','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl ) );?>
</p>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_pages']->value, 'cms_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->value) {
?>
          <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }?>
  <?php
}
}
/* {/block 'cms_sub_pages'} */
/* {block 'page_content'} */
class Block_17415676835dd93d9aee9cd8_69048996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17415676835dd93d9aee9cd8_69048996',
  ),
  'cms_sub_categories' => 
  array (
    0 => 'Block_19641602655dd93d9aeea275_40477093',
  ),
  'cms_sub_pages' => 
  array (
    0 => 'Block_17767985345dd93d9aeef237_51801731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19641602655dd93d9aeea275_40477093', 'cms_sub_categories', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17767985345dd93d9aeef237_51801731', 'cms_sub_pages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
