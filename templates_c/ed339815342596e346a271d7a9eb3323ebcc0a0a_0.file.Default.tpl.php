<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 08:11:06
  from 'C:\xampp\htdocs\mafergm\frameworkmvc\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee1cafabcf818_15922935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed339815342596e346a271d7a9eb3323ebcc0a0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mafergm\\frameworkmvc\\templates\\Default.tpl',
      1 => 1591855863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5ee1cafabcf818_15922935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </br>  </br>  </br>  </br>  </br>
  <h1 align = "center"><strong>Sign in</strong></h1>
  </br>
  <form align = "center" method = "post" action = "entrar.php">
  <div>
     <svg class="bi bi-person-circle" width="30px" height="40px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg>
    <label for="text"><strong>User</strong></label>
    <input type="text" class="form-control" id="User" name = "us">
  </div>
  </br>
  <div class="form-group">
   <svg class="bi bi-lock-fill" width="30px" height="40px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <rect width="11" height="9" x="2.5" y="7" rx="2"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>
    <label for="Password"><strong>Password</strong></label>
    <input type="password" class="form-control" id="Password1" name = "pass">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
