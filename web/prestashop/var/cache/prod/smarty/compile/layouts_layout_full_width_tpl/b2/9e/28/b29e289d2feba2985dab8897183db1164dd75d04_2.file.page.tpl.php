<?php
/* Smarty version 3.1.33, created on 2019-11-23 11:30:48
  from '/var/www/html/themes/warehouse/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd90a58e79856_32064085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b29e289d2feba2985dab8897183db1164dd75d04' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/page.tpl',
      1 => 1574447987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd90a58e79856_32064085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17390257845dd90a58e74014_56869634', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_11688551645dd90a58e74c19_67630647 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
            <h1 class="h1 page-title"><span><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</span></h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2531666775dd90a58e74593_21104505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11688551645dd90a58e74c19_67630647', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_19922720185dd90a58e77437_40836074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20687753285dd90a58e77b93_91927640 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18470249105dd90a58e76ec8_34935967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19922720185dd90a58e77437_40836074', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20687753285dd90a58e77b93_91927640', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_18593093315dd90a58e78bf5_01391789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7103160175dd90a58e786b5_84004991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18593093315dd90a58e78bf5_01391789', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_17390257845dd90a58e74014_56869634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17390257845dd90a58e74014_56869634',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2531666775dd90a58e74593_21104505',
  ),
  'page_title' => 
  array (
    0 => 'Block_11688551645dd90a58e74c19_67630647',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18470249105dd90a58e76ec8_34935967',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19922720185dd90a58e77437_40836074',
  ),
  'page_content' => 
  array (
    0 => 'Block_20687753285dd90a58e77b93_91927640',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7103160175dd90a58e786b5_84004991',
  ),
  'page_footer' => 
  array (
    0 => 'Block_18593093315dd90a58e78bf5_01391789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2531666775dd90a58e74593_21104505', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18470249105dd90a58e76ec8_34935967', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7103160175dd90a58e786b5_84004991', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
