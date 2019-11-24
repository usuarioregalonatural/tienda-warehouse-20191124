<?php
/* Smarty version 3.1.33, created on 2019-11-23 11:30:48
  from '/var/www/html/themes/warehouse/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd90a58e70db4_74336114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3d19c8701d2d398ded42f687709ef31c6ec5bcf' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/index.tpl',
      1 => 1574447987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd90a58e70db4_74336114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18399106785dd90a58e6a8a7_71664146', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16741554245dd90a58e6d334_60471045', 'head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1615735245dd90a58e6ae78_03845728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9572722315dd90a58e6bbe2_39285502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_727414645dd90a58e6b6a8_79879284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9572722315dd90a58e6bbe2_39285502', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18399106785dd90a58e6a8a7_71664146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18399106785dd90a58e6a8a7_71664146',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1615735245dd90a58e6ae78_03845728',
  ),
  'page_content' => 
  array (
    0 => 'Block_727414645dd90a58e6b6a8_79879284',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9572722315dd90a58e6bbe2_39285502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1615735245dd90a58e6ae78_03845728', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727414645dd90a58e6b6a8_79879284', 'page_content', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'head'} */
class Block_16741554245dd90a58e6d334_60471045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_16741554245dd90a58e6d334_60471045',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

    <?php $_smarty_tpl->_assignInScope('searchUrl', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['urls']->value['pages']['search'],"/\?controller=search+"."$"."/",''));?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
",
			"potentialAction": {
			    "@type": "SearchAction",
			    "target": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchUrl']->value, ENT_QUOTES, 'UTF-8');?>
?controller=search&s={s}",
			    "query-input": "required name=s"
			}
		}
		
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
}
