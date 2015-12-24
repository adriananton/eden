<?php /* Smarty version Smarty-3.1.19, created on 2015-12-24 02:36:49
         compiled from "C:\WAMP\www\eden\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1488567b5a41a7ed02-66191509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '465253579c4cf7b0cadab9e7bb0eb686cbd878f8' => 
    array (
      0 => 'C:\\WAMP\\www\\eden\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1450923348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1488567b5a41a7ed02-66191509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567b5a41ac4c78_91988978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567b5a41ac4c78_91988978')) {function content_567b5a41ac4c78_91988978($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
