<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 09:09:13
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/adminPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86a419cc3707_69734664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c1e5b89656d8d17bd4ddb3cd59788c09ab74e72' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/adminPage.tpl',
      1 => 1602659307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f86a419cc3707_69734664 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class ="mainDivPagina2">
        <h1 class = "titulolo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <section class="sectionAdministrator">
            
            <article class = "articleABSCategoria">  
                <form action="addCategory" method="POST">
                    <h3>Agregar Categoria</h3>
                    <label for="">To Add:  </label>
                    <input type="text" name="nameAddCategory" id="" placeholder="Nombre">
                    <input type="text" name="descriptionAddCategory" id="" placeholder="Descripcion">
                    <input type="submit" value="Añadir">
                </form>

                <form action="updateCategory" method="GET">
                    <h3>Modificar Categoria</h3>
                    <label for="">To Change:  </label>
                    <input type="text" name="nameActualCategory" id="" placeholder="Nombre actual"> <br>
                    <label for="">New values:</label>
                    <input type="text" name="nameUpdateCategory" id="" placeholder="Nuevo Nombre">
                    <input type="text" name="descriptionUpdateCategory" id="" placeholder="Nueva descripcion">
                    <input type="submit" value="Update">
                </form>

                <form action="removeCategory" method="GET">
                    <h3>Eliminar Categoria</h3>
                    <label for="">To Delete:  </label>
                    <input type="text" name="nameRemoveCategory" id="" placeholder="Nombre">
                    <input type="submit" value="Delete">
                </form>

            </article>

            <article class = "articleABSProductos"> 
                <form action="addProduct" method="POST">
                    <h3>Agregar Producto</h3>
                    <label for="">To Add:  </label>
                    <input type="text" name="nameAddProduct" id="" placeholder="Nombre">
                    <input type="text" name="descriptionAddProduct" id="" placeholder="Descripcion">
                    <input type="text" name="precioAddProduct" id="" placeholder="Precio">
                    <input type="file" name="imageAddProduct" id="" accept=".jpg, .jpeg, .png">
                    <select name="categoryAddProduct" id="" value="Categoria">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                            <option><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="submit" value="Añadir">
                </form>

                <form action="updateProduct" method="GET">
                    <h3>Moficiar Producto</h3>
                    <label for="">To Change:  </label>
                    <input type="text" name="nameActualProduct" id="" placeholder="Nombre actual">
                    <label for="">New values:</label>
                    <input type="text" name="nameUpdateProduct" id="" placeholder="Nuevo Nombre">
                    <input type="text" name="descriptionUpdateProduct" id="" placeholder="Nueva descripcion">
                    <input type="text" name="priceUpdateProduct" id="" placeholder="Nuevo precio">
                    <select name="categoryUpdateProduct" id="" value="Categoria">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                            <option><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="file" name="imageUpdateProduct" id="" accept=".jpg, .jpeg, .png">
                    <input type="submit" value="Update">
                </form>

                <form action="removeProduct" method="GET">
                    <h3>Eliminar Producto</h3>
                    <label for="">To Delete:  </label>
                    <input type="text" name="nameRemoveProduct" id="" placeholder="Nombre">
                    <input type="submit" value="Delete">
                </form>
            </article>
            
        </section>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
