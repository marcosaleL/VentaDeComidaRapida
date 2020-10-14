<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 03:55:39
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/adminPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f865a9b838bb8_66067352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3acca5810db4c1e4004ca71ebf8efe879910afd9' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/adminPage.tpl',
      1 => 1602640529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f865a9b838bb8_66067352 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class ="mainDivPagina2">
        <h1 class = "titulolo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <section class="sectionAdministrator">
            
            <article class = "articleABSCategoria">  
                <form action="" method="get">
                    <h3>Agregar Categoria</h3>
                    <label for="">To Add:  </label>
                    <input type="text" name="" id="" placeholder="Nombre">
                    <input type="text" name="" id="" placeholder="Descripcion">
                    <input type="submit" value="Añadir">
                </form>

                <form action="" method="POST">
                    <h3>Modificar Categoria</h3>
                    <label for="">To Change:  </label>
                    <input type="text" name="" id="" placeholder="Nombre actual"> <br>
                    <label for="">New values:</label>
                    <input type="text" name="" id="" placeholder="Nuevo Nombre">
                    <input type="text" name="" id="" placeholder="Nueva descripcion">
                    <input type="submit" value="Update">
                </form>

                <form action="" method="GET">
                    <h3>Eliminar Categoria</h3>
                    <label for="">To Delete:  </label>
                    <input type="text" name="" id="" placeholder="Nombre">
                    <input type="submit" value="Delete">
                </form>

            </article>

            <article class = "articleABSProductos"> 
                <form action="" method="get">
                    <h3>Agregar Producto</h3>
                    <label for="">To Add:  </label>
                    <input type="text" name="" id="" placeholder="Nombre">
                    <input type="text" name="" id="" placeholder="descripcion">
                    <input type="file" name="" id="" accept=".jpg, .jpeg, .png">
                    <input type="submit" value="Añadir">
                </form>

                <form action="" method="get">
                    <h3>Moficiar Producto</h3>
                    <label for="">To Change:  </label>
                    <input type="text" name="" id="" placeholder="Nombre actual">
                    <label for="">New values:</label>
                    <input type="text" name="" id="" placeholder="Nuevo Nombre">
                    <input type="text" name="" id="" placeholder="Nueva descripcion">
                    <input type="text" name="" id="" placeholder="Nuevo precio">
                    <select name="cate" id="" value"Categoria"">
                        <option>Hola</option>
                        <option>Chau</option>
                    </select>
                    <input type="file" name="" id="" accept=".jpg, .jpeg, .png">
                    <input type="submit" value="Update">
                </form>

                <form action="" method="GET">
                    <h3>Eliminar Producto</h3>
                    <label for="">To Delete:  </label>
                    <input type="text" name="" id="" placeholder="Nombre">
                    <input type="submit" value="Delete">
                </form>
            </article>
            
        </section>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
