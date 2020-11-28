<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 15:00:15
  from 'C:\xampp\htdocs\TPEWeb2\templates\detalleCat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc257ef65b477_76287608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37a03e43a70931a52d9ad63496a7dcd723f4dc92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\detalleCat.tpl',
      1 => 1606572009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc257ef65b477_76287608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- ESTE TEMPLATE  MUESTRA EL DETALLE DE LA CATEGORIA POR ID -->
    <div class ="mainDivPagina2">
        <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <section class="sectionProductos" >
        <article class="articleListProduct">  
            <div class = "productoContainer">
                <div class = "divNameAndButton">
                    <h3 class="listado"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h3>
                </div>
                <p class="texto">Nombre: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</p>
                <p class="texto">Descripcion: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</p>
            </div>    
        </article>
        </section>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
