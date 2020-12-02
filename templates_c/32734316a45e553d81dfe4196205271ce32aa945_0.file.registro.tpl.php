<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 01:50:26
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6e4d22274d7_58698388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32734316a45e553d81dfe4196205271ce32aa945' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/registro.tpl',
      1 => 1606870220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc6e4d22274d7_58698388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ESTE TEMPLATE ES DEL REGISTRO -->
<div class ="mainDivPagina2">
    <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <section class="sectionAdministrator">
        <article class = "articleABSCategoria">  
            <form class="formRegistro" action="" method="POST">
                <h3>Registrarse</h3>
                <label for="">Nombre:</label>
                <input type="text" name="" id="" placeholder="Nombre" required>
                <label for="">Apellido:</label>
                <input type="text" name="" id="" placeholder="Apellido" required>
                <label for="">Dirección de correo electronico:</label>
                <input type="text" name="" id="" placeholder="Dirección de correo electronico" required>
                <label for="">Telefono:</label>
                <input type="number" name="" id="" placeholder="Telefono" required>
                <label for="">Password:</label>
                <input type="password" name="" id="" placeholder="Password" required>
            </form>
            <form action="" method="GET">
                <input type="submit" value="Registrarse">
            </form>
        </article>
    </section>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
