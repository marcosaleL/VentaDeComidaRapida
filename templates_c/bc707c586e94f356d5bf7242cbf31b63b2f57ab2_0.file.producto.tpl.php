<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 18:59:15
  from 'C:\xampp\htdocs\TPEWeb2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f872e6396e153_36756868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc707c586e94f356d5bf7242cbf31b63b2f57ab2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\producto.tpl',
      1 => 1602643178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f872e6396e153_36756868 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class ="mainDivPagina2">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <section class="sectionProductos" >
            <article class="showArticle">  
                <!-- por cada item de productos, voy a agregando al article los products con misma categoria -->
                <!-- si encuentro uno con categoria diferente, agrego el separador de categorias -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['currentCategory']->value;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['producto']->value->nombreCategoria != $_prefixVariable1) {?>
                        <?php $_smarty_tpl->_assignInScope('currentCategory', $_smarty_tpl->tpl_vars['producto']->value->nombreCategoria);?>
                        <div class="categorySeparator">
                            <h2> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombreCategoria;?>
 </h2>
                        </div>
                        <div class="divisorLine"></div>              
                    <?php }?>

                    <div class="itemContainer">
                            <!-- Aca tambien irian la img pero no se como asociarla al item -->
                            <!-- Quiza la solucion sea agregar la url de la img a la base de datos  -->
                            <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
                            <p><span>Precio: </span><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </article>
        </section>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}