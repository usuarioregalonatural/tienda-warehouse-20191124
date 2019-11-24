<?php
/* Smarty version 3.1.33, created on 2019-11-23 19:58:51
  from '/var/www/html/themes/warehouse/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd9816b8ac131_29483697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32660d3483ebb034d541cfea6facbf995862f1b3' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/listing/product-list.tpl',
      1 => 1574447987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_5dd9816b8ac131_29483697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7685942225dd9816b894296_54373848', 'head_seo_canonical');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18189955205dd9816b8a1108_03518754', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo_canonical'} */
class Block_7685942225dd9816b894296_54373848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_canonical' => 
  array (
    0 => 'Block_7685942225dd9816b894296_54373848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['listing']->value['pagination'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['should_be_displayed']) {?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'], 'p_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p_page']->value) {
?>

                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['current']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['page'] == 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                            <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                            <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php } else { ?>
                            <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['type'] === 'previous') {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['clickable']) {?>
                            <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['type'] === 'next') {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['clickable']) {?>
                        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
        <?php }?>
    <?php }
}
}
/* {/block 'head_seo_canonical'} */
/* {block 'product_list_header'} */
class Block_20468072495dd9816b8a1652_41035842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h2 id="js-product-list-header" class="h1 page-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></h2>
        <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_active_filters'} */
class Block_12228706615dd9816b8a3f99_29901910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="">
                        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

                    </div>
                <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list_top'} */
class Block_6520995635dd9816b8a4fd0_97794009 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_facets_center'} */
class Block_4323794185dd9816b8a6a24_38894879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="facets_search_center">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_facetedsearch"),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'product_list_facets_center'} */
/* {block 'product_list'} */
class Block_1527431245dd9816b8a7df7_98424181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="facets-loader-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_11581663605dd9816b8a8db3_01759906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_bottom_static'} */
class Block_12389948585dd9816b8a9cf3_51521189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_bottom_static'} */
/* {block 'product_list_not_found'} */
class Block_2792330185dd9816b8aa696_88587209 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="alert alert-warning" role="alert">
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</strong>
                    </div>
                <?php
}
}
/* {/block 'product_list_not_found'} */
/* {block 'product_list_bottom_static'} */
class Block_5582757155dd9816b8ab546_60825584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_bottom_static'} */
/* {block 'content'} */
class Block_18189955205dd9816b8a1108_03518754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18189955205dd9816b8a1108_03518754',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_20468072495dd9816b8a1652_41035842',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_12228706615dd9816b8a3f99_29901910',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_6520995635dd9816b8a4fd0_97794009',
  ),
  'product_list_facets_center' => 
  array (
    0 => 'Block_4323794185dd9816b8a6a24_38894879',
  ),
  'product_list' => 
  array (
    0 => 'Block_1527431245dd9816b8a7df7_98424181',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_11581663605dd9816b8a8db3_01759906',
  ),
  'product_list_bottom_static' => 
  array (
    0 => 'Block_12389948585dd9816b8a9cf3_51521189',
    1 => 'Block_5582757155dd9816b8ab546_60825584',
  ),
  'product_list_not_found' => 
  array (
    0 => 'Block_2792330185dd9816b8aa696_88587209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20468072495dd9816b8a1652_41035842', 'product_list_header', $this->tplIndex);
?>

        <section id="products">
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12228706615dd9816b8a3f99_29901910', 'product_list_active_filters', $this->tplIndex);
?>

                <div id="">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6520995635dd9816b8a4fd0_97794009', 'product_list_top', $this->tplIndex);
?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_faceted_position']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4323794185dd9816b8a6a24_38894879', 'product_list_facets_center', $this->tplIndex);
?>

                <?php }?>
                <div id="">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1527431245dd9816b8a7df7_98424181', 'product_list', $this->tplIndex);
?>

                </div>
                <div id="infinity-loader-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11581663605dd9816b8a8db3_01759906', 'product_list_bottom', $this->tplIndex);
?>



                </div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12389948585dd9816b8a9cf3_51521189', 'product_list_bottom_static', $this->tplIndex);
?>

            <?php } else { ?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2792330185dd9816b8aa696_88587209', 'product_list_not_found', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5582757155dd9816b8ab546_60825584', 'product_list_bottom_static', $this->tplIndex);
?>


            <?php }?>
        </section>

    </section>
<?php
}
}
/* {/block 'content'} */
}
