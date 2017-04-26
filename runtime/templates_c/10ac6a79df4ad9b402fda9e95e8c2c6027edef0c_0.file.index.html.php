<?php /* Smarty version 3.1.27, created on 2016-11-11 08:20:55
         compiled from "D:\WWW\www.js.net\application\templates\Index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:2299458257f67dec449_96657614%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10ac6a79df4ad9b402fda9e95e8c2c6027edef0c' => 
    array (
      0 => 'D:\\WWW\\www.js.net\\application\\templates\\Index\\index.html',
      1 => 1478852017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2299458257f67dec449_96657614',
  'variables' => 
  array (
    'user' => 0,
    'v' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58257f67e301e1_28779000',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58257f67e301e1_28779000')) {
function content_58257f67e301e1_28779000 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2299458257f67dec449_96657614';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    测试二维数组循环：
    <?php
$_from = $_smarty_tpl->tpl_vars['user']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
        <li>ID:<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
用户名:<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
密码:<?php echo $_smarty_tpl->tpl_vars['v']->value['pwd'];?>
</li>
    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

    <table>
        <?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
        <tr>
            <td>标题:<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
内容:<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
    </table>

</body>
</html><?php }
}
?>