<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 12:42:23
  from 'C:\xampp\htdocs\TPEWeb2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc2379f781720_57478176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f39a488c62cf7d9469f3f743e2ba29ec49d253e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\login.tpl',
      1 => 1602729617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc2379f781720_57478176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="login">
    <h1>Login to Web App</h1>
    <div class="alertMessage">
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    </div>
    <form action="verifyUser" method="post">
        <p><input type="text" id="user" name="input_user" placeholder="Email" required></p>
        <p><input type="password" class="form-control" id="pass" name="input_pass" placeholder="Password" required></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
