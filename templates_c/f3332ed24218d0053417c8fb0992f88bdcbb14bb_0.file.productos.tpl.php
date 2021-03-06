<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 01:23:31
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6de83646419_19011474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3332ed24218d0053417c8fb0992f88bdcbb14bb' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/productos.tpl',
      1 => 1606868485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc6de83646419_19011474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- ESTE TEMPLATE  MUESTRA UN LISTADO DE CATEOGRIAS -->
       <div class ="mainDivPagina2">
            <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <section class="sectionPagina2" >
                <p class="texto">Hasta el momento solo disponemos de una unica sucursal. <br>
                    En esta se pueden encontrar los siguientes tipos de productos:  <br>
                </p>
                <article class="articleListProduct">  
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                            <div class = "productoContainer">
                                <div class = "divNameAndButton">
                                    <h3 class="listado"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3>
                                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->imagen) {?>
                                        <img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" class="img-prod">
                                    <?php }?>
                                    <a class="botonDetalles" href="productos/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Detalles</a>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </article>
            </section>
        </div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
