<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 08:10:38
  from 'C:\xampp\htdocs\mafergm\FrameworkMVC\frameworkmvc\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee0795e0636f2_16715532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c49b8e66d6a717e48217f146452ba4005e8085c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mafergm\\FrameworkMVC\\frameworkmvc\\templates\\Default.tpl',
      1 => 1591769432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5ee0795e0636f2_16715532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div align = "center">
    <h1>Hello, world!</h1>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
