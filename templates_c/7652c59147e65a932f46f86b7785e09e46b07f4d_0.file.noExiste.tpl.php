<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 14:21:32
  from 'C:\xampp\htdocs\TPEWeb2\templates.\noExiste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc24edcd54dd0_56775349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7652c59147e65a932f46f86b7785e09e46b07f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates.\\noExiste.tpl',
      1 => 1606569602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc24edcd54dd0_56775349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- ESTE TEMPLATE  MUESTRA UN MENSAJE DE SI EL PRODUCTO O LA CATEGORIA NO EXISTE -->
    <div class ="mainDivPagina2">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <section class="sectionPagina2" >
        <article class="articleListProduct">  
            <?php if ($_smarty_tpl->tpl_vars['nombre']->value == "producto") {?>
                <p>El <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 con el ID: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 no existe en nuestro catalogo.</p> 
            <?php } else { ?>
                <p>La <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 con el ID: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 no existe en nuestro catalogo.</p>
            <?php }?> 
        </article>
    </section>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
