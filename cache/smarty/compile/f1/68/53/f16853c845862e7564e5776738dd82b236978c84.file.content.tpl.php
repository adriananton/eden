<?php /* Smarty version Smarty-3.1.19, created on 2015-12-24 03:01:19
         compiled from "C:\WAMP\www\eden\admin-dev\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30057567b5fff0049d5-79667806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f16853c845862e7564e5776738dd82b236978c84' => 
    array (
      0 => 'C:\\WAMP\\www\\eden\\admin-dev\\themes\\default\\template\\content.tpl',
      1 => 1450923419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30057567b5fff0049d5-79667806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567b5fff020595_36343291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567b5fff020595_36343291')) {function content_567b5fff020595_36343291($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
