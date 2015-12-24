<?php /* Smarty version Smarty-3.1.19, created on 2015-12-24 03:01:19
         compiled from "C:\WAMP\www\eden\admin-dev\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26767567b5fff5b57d3-94387041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82980b81f6d389c573ae706c0817a13f66c2105c' => 
    array (
      0 => 'C:\\WAMP\\www\\eden\\admin-dev\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1450923429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26767567b5fff5b57d3-94387041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567b5fff5bdcb3_12678348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567b5fff5bdcb3_12678348')) {function content_567b5fff5bdcb3_12678348($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
