<?php /* Smarty version Smarty-3.1.19, created on 2015-12-24 02:38:03
         compiled from "C:\WAMP\www\eden\admin-dev\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12766567b5a8bacc705-13794710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f3b2e1d607ef93850f899f8ddc82966342e5e27' => 
    array (
      0 => 'C:\\WAMP\\www\\eden\\admin-dev\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1450923429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12766567b5a8bacc705-13794710',
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
  'unifunc' => 'content_567b5a8bafc156_36393330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567b5a8bafc156_36393330')) {function content_567b5a8bafc156_36393330($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
