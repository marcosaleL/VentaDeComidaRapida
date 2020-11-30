<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 21:48:07
  from 'C:\xampp\htdocs\TPEWeb2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc55a87a19625_24996600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '861a2a662998997ea03a8cef5d2bff0447a5d1dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\registro.tpl',
      1 => 1606769283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc55a87a19625_24996600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ESTE TEMPLATE ES DEL REGISTRO -->
<div class ="mainDivPagina2">
    <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <section class="sectionAdministrator">
        <article class = "articleABSCategoria">  
            <form action="addCategory" method="POST">
                <label for="">Nombre:</label>
                <input type="text" name="nameAddCategory" id="" placeholder="Nombre" required>
                <label for="">Apellido:</label>
                <input type="text" name="descriptionAddCategory" id="" placeholder="Apellido" required>
                <label for="">Dirección de correo electronico:</label>
                <input type="text" name="nameAddCategory" id="" placeholder="Dirección de correo electronico" required>
                <label for="">Telefono:</label>
                <input type="email" name="descriptionAddCategory" id="" placeholder="Telefono" required>
                <label for="">Contraseña:</label>
                <input type="password" name="descriptionAddCategory" id="" placeholder="Contraseña" required>
                <form action="" method="GET">
                    <input type="submit" value="Registrarse">
                </form>
            </form>
        </article>
    </section>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
