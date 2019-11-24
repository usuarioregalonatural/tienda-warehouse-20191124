<?php
/* Smarty version 3.1.33, created on 2019-11-23 12:09:59
  from 'module:iqitcookielawviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd91387ace189_02073447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7588a77287e3c02dfc5dfe6fd3a17abf03f7e2e' => 
    array (
      0 => 'module:iqitcookielawviewstemplat',
      1 => 1574447986,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd91387ace189_02073447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '4604455925dd91387acae03_68797821';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16880017845dd91387acc146_51471847', 'iqitcookielaw');
?>

<?php }
/* {block 'iqitcookielaw'} */
class Block_16880017845dd91387acc146_51471847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitcookielaw' => 
  array (
    0 => 'Block_16880017845dd91387acc146_51471847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="iqitcookielaw" class="p-3">
<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>


<button class="btn btn-primary" id="iqitcookielaw-accept"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept','mod'=>'iqitcookielaw'),$_smarty_tpl ) );?>
</button>
</div>
<?php
}
}
/* {/block 'iqitcookielaw'} */
}
