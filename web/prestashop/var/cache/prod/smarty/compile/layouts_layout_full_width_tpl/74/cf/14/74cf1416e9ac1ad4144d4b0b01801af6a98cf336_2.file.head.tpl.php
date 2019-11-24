<?php
/* Smarty version 3.1.33, created on 2019-11-23 11:30:48
  from '/var/www/html/themes/warehouse/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd90a58ec49f8_85287009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74cf1416e9ac1ad4144d4b0b01801af6a98cf336' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/head.tpl',
      1 => 1574447987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5dd90a58ec49f8_85287009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7787665445dd90a58ea29d3_95858079', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19554627175dd90a58ea32f3_29474739', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5149347825dd90a58ea3ba7_74493589', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2250880125dd90a58eac1b8_37455396', 'head_og_tags');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15473385205dd90a58eb26c9_34695248', 'head_viewport');
?>



<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'] != '') {?>
  <meta name="theme-color" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="msapplication-navbutton-color" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12434877185dd90a58eb5d72_27606534', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18783234745dd90a58ebb455_29525151', 'hook_fonts');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18714907025dd90a58ebe942_11635733', 'head_organization_snippet');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20566880195dd90a58ec0cb9_88080037', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5314956565dd90a58ec1f04_50001319', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10733389815dd90a58ec3517_31679334', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17460629315dd90a58ec4364_24198739', 'hook_extra');
?>

<?php }
/* {block 'head_charset'} */
class Block_7787665445dd90a58ea29d3_95858079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_7787665445dd90a58ea29d3_95858079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_19554627175dd90a58ea32f3_29474739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_19554627175dd90a58ea32f3_29474739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_10133913755dd90a58ea40e8_29675082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_8600527825dd90a58ea5069_00832127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_11818932355dd90a58ea5fb2_65313825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo_canonical'} */
class Block_8269099865dd90a58ea8334_54397022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php
}
}
/* {/block 'head_seo_canonical'} */
/* {block 'head_hreflang'} */
class Block_9272811725dd90a58ea9bb0_18469574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
?>
      <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_seo'} */
class Block_5149347825dd90a58ea3ba7_74493589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_5149347825dd90a58ea3ba7_74493589',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_10133913755dd90a58ea40e8_29675082',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_8600527825dd90a58ea5069_00832127',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_11818932355dd90a58ea5fb2_65313825',
  ),
  'head_seo_canonical' => 
  array (
    0 => 'Block_8269099865dd90a58ea8334_54397022',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_9272811725dd90a58ea9bb0_18469574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10133913755dd90a58ea40e8_29675082', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8600527825dd90a58ea5069_00832127', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11818932355dd90a58ea5fb2_65313825', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8269099865dd90a58ea8334_54397022', 'head_seo_canonical', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9272811725dd90a58ea9bb0_18469574', 'head_hreflang', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_og_tags'} */
class Block_2250880125dd90a58eac1b8_37455396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_2250880125dd90a58eac1b8_37455396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:url" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:type" content="website">

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'] != '') {?>
      <meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'], ENT_QUOTES, 'UTF-8');?>
" />
      <?php } else { ?>
      <meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}
}
/* {/block 'head_og_tags'} */
/* {block 'head_viewport'} */
class Block_15473385205dd90a58eb26c9_34695248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_15473385205dd90a58eb26c9_34695248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_pinch_zoom'] == 1) {?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php } else { ?>
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
  <?php }
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_12434877185dd90a58eb5d72_27606534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_12434877185dd90a58eb5d72_27606534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple'] != '') {?>
    <link rel="apple-touch-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android'] != '') {?>
    <link rel="icon" sizes="192x192" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head_icons'} */
/* {block 'hook_fonts'} */
class Block_18783234745dd90a58ebb455_29525151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_fonts' => 
  array (
    0 => 'Block_18783234745dd90a58ebb455_29525151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_t'] == 'google') {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_t'] == 'google') {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
  <?php }
}
}
/* {/block 'hook_fonts'} */
/* {block 'head_organization_snippet'} */
class Block_18714907025dd90a58ebe942_11635733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_organization_snippet' => 
  array (
    0 => 'Block_18714907025dd90a58ebe942_11635733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="application/ld+json">

{
"@context": "https://schema.org",
"@type": "Organization",
"url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
",
"name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
",
"logo": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
",
"@id": "#store-organization"
}

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head_organization_snippet'} */
/* {block 'stylesheets'} */
class Block_20566880195dd90a58ec0cb9_88080037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_20566880195dd90a58ec0cb9_88080037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_5314956565dd90a58ec1f04_50001319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_5314956565dd90a58ec1f04_50001319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_10733389815dd90a58ec3517_31679334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_10733389815dd90a58ec3517_31679334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_17460629315dd90a58ec4364_24198739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_17460629315dd90a58ec4364_24198739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
