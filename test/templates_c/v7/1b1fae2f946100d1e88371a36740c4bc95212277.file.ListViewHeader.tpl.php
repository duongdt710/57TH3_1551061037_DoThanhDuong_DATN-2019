<?php /* Smarty version Smarty-3.1.7, created on 2019-12-26 19:17:29
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Users/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4032328225e0507492ba1f9-83818704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b1fae2f946100d1e88371a36740c4bc95212277' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/v7/modules/Users/ListViewHeader.tpl',
      1 => 1577386164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4032328225e0507492ba1f9-83818704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e0507492bf5e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e0507492bf5e')) {function content_5e0507492bf5e($_smarty_tpl) {?>

<div class="listViewPageDiv" id="listViewContent"><div class="col-sm-12 col-xs-12 full-height"><div id="listview-actions" class="listview-actions-container"><div class = "row"><div class="btn-group col-md-2"></div><div class='col-md-7' style="padding-top: 5px;text-align: center;"><div class="btn-group userFilter" style="text-align: center;"><button class="btn btn-default btn-primary" id="activeUsers" data-searchvalue="Active"><?php echo vtranslate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><button class="btn btn-default" id="inactiveUsers" data-searchvalue="Inactive"><?php echo vtranslate('LBL_INACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div><div class="col-md-3"><?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>
</div></div><div class="list-content">
<?php }} ?>