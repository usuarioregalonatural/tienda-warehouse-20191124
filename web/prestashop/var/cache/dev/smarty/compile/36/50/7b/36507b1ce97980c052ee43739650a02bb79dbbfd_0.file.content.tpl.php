<?php
/* Smarty version 3.1.33, created on 2019-11-22 19:42:00
  from '/var/www/html/admin23874crkw/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd82bf8277ba7_43450966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36507b1ce97980c052ee43739650a02bb79dbbfd' => 
    array (
      0 => '/var/www/html/admin23874crkw/themes/default/template/content.tpl',
      1 => 1574445054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd82bf8277ba7_43450966 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
