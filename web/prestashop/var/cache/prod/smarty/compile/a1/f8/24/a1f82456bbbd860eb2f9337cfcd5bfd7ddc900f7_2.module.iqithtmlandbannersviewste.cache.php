<?php
/* Smarty version 3.1.33, created on 2019-11-23 13:37:56
  from 'module:iqithtmlandbannersviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd92824a0cf97_99207192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f82456bbbd860eb2f9337cfcd5bfd7ddc900f7' => 
    array (
      0 => 'module:iqithtmlandbannersviewste',
      1 => 1574447986,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqithtmlandbanners/views/templates/hook/_partials/html.tpl' => 1,
    'module:iqithtmlandbanners/views/templates/hook/_partials/banner.tpl' => 1,
  ),
),false)) {
function content_5dd92824a0cf97_99207192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '102383455dd92824a0a524_68459423';
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>

  <?php if ($_smarty_tpl->tpl_vars['block']->value['type']) {?>
    <?php $_smarty_tpl->_subTemplateRender("module:iqithtmlandbanners/views/templates/hook/_partials/html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("module:iqithtmlandbanners/views/templates/hook/_partials/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php }?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
