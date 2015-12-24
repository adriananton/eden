<?php /* Smarty version Smarty-3.1.19, created on 2015-12-24 03:01:54
         compiled from "C:\WAMP\www\eden\admin-dev\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23151567b6022bde8d9-64699712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '212f2d57ddfdb4f4ab62a8bc4b08bd18136fce38' => 
    array (
      0 => 'C:\\WAMP\\www\\eden\\admin-dev\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1450923428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23151567b6022bde8d9-64699712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567b6022c199b6_73069745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567b6022c199b6_73069745')) {function content_567b6022c199b6_73069745($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
