<?php
/* Smarty version 3.1.36, created on 2020-10-12 16:01:57
  from 'C:\xampp\htdocs\TPEWeb2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8461d56faaa4_54561767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f39a488c62cf7d9469f3f743e2ba29ec49d253e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\login.tpl',
      1 => 1602511314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8461d56faaa4_54561767 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">

<div class="alert alert-danger" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>

       <form action="verifyUser" method="post">
                    <div class="form-group">
                        <label for="user">Ususario</label>
                        <input class="form-control" id="user" name="input_user" aria-describedby="emailHelp">
                
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="input_pass">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>

</div>

<?php }
}
