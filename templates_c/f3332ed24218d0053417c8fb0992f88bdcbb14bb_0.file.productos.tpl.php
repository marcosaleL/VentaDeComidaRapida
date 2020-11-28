<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 04:45:45
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc1c7e94fb8b1_58008764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3332ed24218d0053417c8fb0992f88bdcbb14bb' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/productos.tpl',
      1 => 1606534779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc1c7e94fb8b1_58008764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- ESTE TEMPLATE  MUESTRA UN LISTADO DE CATEOGRIAS -->
       <div class ="mainDivPagina2">
            <h1  class="holaol" ><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <section class="sectionPagina2" >
                <article class="articleListProduct">  
                    <p>Hasta el momento solo disponemos de una unica sucursal. <br>
                    En esta se pueden encontrar los siguieten tipos de productos:  <br>
                    </p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                            <div class = "productoContainer">
                                <div class = "divNameAndButton">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3>
                                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->imagen) {?>
                                        <img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" class="img-prod">
                                    <?php }?>
                                    <button name = "<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class = "btnShowMore more"   ></button>
                                </div>
                                <div id = "div<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class = "hidden productDetail" >
                                    
                                    <p>Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
                                    <p>Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
                                </div>
                                <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
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