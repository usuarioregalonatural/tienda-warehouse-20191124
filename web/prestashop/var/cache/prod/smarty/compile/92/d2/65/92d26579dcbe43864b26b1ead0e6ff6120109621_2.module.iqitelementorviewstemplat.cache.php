<?php
/* Smarty version 3.1.33, created on 2019-11-23 11:30:48
  from 'module:iqitelementorviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd90a58866923_39412585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d26579dcbe43864b26b1ead0e6ff6120109621' => 
    array (
      0 => 'module:iqitelementorviewstemplat',
      1 => 1574447986,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd90a58866923_39412585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '19133136635dd90a588653f9_21768693';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4655400405dd90a58865bf5_38697412', 'iqitelementor');
?>

<?php }
/* {block 'iqitelementor'} */
class Block_4655400405dd90a58865bf5_38697412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitelementor' => 
  array (
    0 => 'Block_4655400405dd90a58865bf5_38697412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php
}
}
/* {/block 'iqitelementor'} */
}
