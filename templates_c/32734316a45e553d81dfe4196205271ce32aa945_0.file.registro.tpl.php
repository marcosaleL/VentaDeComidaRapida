<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 19:47:19
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7e137cba8a3_74853116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32734316a45e553d81dfe4196205271ce32aa945' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/registro.tpl',
      1 => 1606932823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc7e137cba8a3_74853116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ESTE TEMPLATE ES DEL REGISTRO -->
<div class ="mainDivPagina2">
    <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <section class="sectionAdministrator">
        <article class = "articleABSCategoria">  
            <form class="formRegistro" action="register" method="POST">
                <label for="">Nombre:</label>
                <input type="text" name="nameRegister" id="" placeholder="Nombre" required>
                <label for="">Apellido:</label>
                <input type="text" name="lastNameRegister" id="" placeholder="Apellido" required>
                <label for="">Dirección de correo electronico:</label>
                <input type="text" name="mailRegister" id="" placeholder="Dirección de correo electronico" required>
                <label for="">Telefono:</label>
                <input type="number" name="phoneRegister" id="" placeholder="Telefono" required>
                <label for="">Password:</label>
                <input type="password" name="passwordRegister" id="" placeholder="Password" required>
                <input type="submit" value="Registrarse">
            </form>
        </article>
    </section>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
