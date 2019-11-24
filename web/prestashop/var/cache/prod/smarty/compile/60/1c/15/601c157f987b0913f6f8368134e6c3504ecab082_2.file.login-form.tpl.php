<?php
/* Smarty version 3.1.33, created on 2019-11-23 11:30:49
  from '/var/www/html/themes/warehouse/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd90a59144869_99015864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '601c157f987b0913f6f8368134e6c3504ecab082' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/customer/_partials/login-form.tpl',
      1 => 1574447987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5dd90a59144869_99015864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6320073085dd90a5913acc6_60894576', 'login_form');
?>

<?php }
/* {block 'login_form_start'} */
class Block_6445254785dd90a5913b252_79904299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_start'} */
/* {block 'login_form_errors'} */
class Block_2986010355dd90a5913b9f9_68545624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_8278910375dd90a5913e0f8_87094946 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_662122935dd90a59140123_35308314 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_476466225dd90a5913ecf0_11791515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_662122935dd90a59140123_35308314', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_12284402905dd90a59142cd0_52011889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary form-control-submit" data-link-action="sign-in" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_13510379345dd90a59142750_39931532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12284402905dd90a59142cd0_52011889', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form_end'} */
class Block_6392642845dd90a59143eb8_59331588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_end'} */
/* {block 'login_form'} */
class Block_6320073085dd90a5913acc6_60894576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_6320073085dd90a5913acc6_60894576',
  ),
  'login_form_start' => 
  array (
    0 => 'Block_6445254785dd90a5913b252_79904299',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_2986010355dd90a5913b9f9_68545624',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_8278910375dd90a5913e0f8_87094946',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_476466225dd90a5913ecf0_11791515',
  ),
  'form_field' => 
  array (
    0 => 'Block_662122935dd90a59140123_35308314',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_13510379345dd90a59142750_39931532',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_12284402905dd90a59142cd0_52011889',
  ),
  'login_form_end' => 
  array (
    0 => 'Block_6392642845dd90a59143eb8_59331588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6445254785dd90a5913b252_79904299', 'login_form_start', $this->tplIndex);
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2986010355dd90a5913b9f9_68545624', 'login_form_errors', $this->tplIndex);
?>


    <form <?php if (isset($_smarty_tpl->tpl_vars['idForm']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idForm']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8278910375dd90a5913e0f8_87094946', 'login_form_actionurl', $this->tplIndex);
?>
"  <?php }?>  method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_476466225dd90a5913ecf0_11791515', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13510379345dd90a59142750_39931532', 'login_form_footer', $this->tplIndex);
?>


  </form>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6392642845dd90a59143eb8_59331588', 'login_form_end', $this->tplIndex);
?>

<?php
}
}
/* {/block 'login_form'} */
}
