<?php /* Smarty version Smarty-3.1.7, created on 2019-12-27 09:58:48
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12096737575e05d5d8679260-10652990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dca9fa9c50d7516212057c048d981952543aea4' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewPreProcess.tpl',
      1 => 1577386164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12096737575e05d5d8679260-10652990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e05d5d867dcc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e05d5d867dcc')) {function content_5e05d5d867dcc($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CalendarDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>