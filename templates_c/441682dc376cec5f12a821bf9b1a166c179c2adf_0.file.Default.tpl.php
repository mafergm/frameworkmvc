<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 09:35:13
  from 'C:\xampp\htdocs\mafergm\Framework\frameworkmvc\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee08d311cc150_55794464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '441682dc376cec5f12a821bf9b1a166c179c2adf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mafergm\\Framework\\frameworkmvc\\templates\\Default.tpl',
      1 => 1591774509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5ee08d311cc150_55794464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <form>
  <div class="form-group">
    <label for="text">Usuario</label>
    <input type="text" class="form-control" id="User">
    
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password1">
  </div>
   <div class="form-group">
    <label for="text">Puesto</label>
    <input type="text" class="form-control" id="Puesto">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
