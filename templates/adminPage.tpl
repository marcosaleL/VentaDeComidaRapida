    
    {include file="./header.tpl"}
    <!-- ESTE TEMPLATE ES DEL ADMINISTRADOR -->
    <div class ="mainDivPagina2">
        <h1 class="titulo">{$titulo}</h1>
        <section class="sectionAdministrator">
        
            <article class = "articleABSCategoria">  
                <form action="addCategory" method="POST">
                    <h3>Agregar Categoria</h3>
                    <label for="">To Add:  </label>
                    <input type="text" name="nameAddCategory" id="" placeholder="Nombre" required>
                    <input type="text" name="descriptionAddCategory" id="" placeholder="Descripcion" required>
                    <input type="submit" value="Añadir">
                </form>

                <form action="updateCategory" method="GET">
                    <h3>Modificar Categoria</h3>
                    <label for="">To Change:  </label>
                    <input type="text" name="nameActualCategory" id="" placeholder="Nombre actual" required> <br>
                    <label for="">New values:</label>
                    <input type="text" name="nameUpdateCategory" id="" placeholder="Nuevo Nombre" required>
                    <input type="text" name="descriptionUpdateCategory" id="" placeholder="Nueva descripcion" required>
                    <input type="submit" value="Update">
                </form>

                <form action="removeCategory" method="GET">
                    <h3>Eliminar Categoria</h3>
                    <label for="">To Delete:  </label>
                    <input type="text" name="nameRemoveCategory" id="" placeholder="Nombre" required>
                    <input type="submit" value="Delete">
                </form>
            </article>

            <article class = "articleABSProductos"> 
                <form action="addProduct" method="POST" enctype="multipart/form-data">
                    <h3>Agregar Producto</h3>
                    <label for="">To Add:  </label>
                    <input type="text" name="nameAddProduct" id="" placeholder="Nombre" required>
                    <input type="text" name="descriptionAddProduct" id="" placeholder="Descripcion" required>
                    <input type="text" name="precioAddProduct" id="" placeholder="Precio" required>
                    <input type="file" name="imagen">
                    <select name="categoryAddProduct" id="" value="Categoria">
                        {foreach from=$categorias item=categoria}
                            <option>{$categoria->nombre}</option>
                        {/foreach}
                    </select>
                    <input type="submit" value="Añadir">
                </form>

                <form action="updateProduct" method="GET">
                    <h3>Moficiar Producto</h3>
                    <label for="">To Change:  </label>
                    <input type="text" name="nameActualProduct" id="" placeholder="Nombre actual" required>
                    <label for="">New values:</label>
                    <input type="text" name="nameUpdateProduct" id="" placeholder="Nuevo Nombre" required>
                    <input type="text" name="descriptionUpdateProduct" id="" placeholder="Nueva descripcion" required>
                    <input type="text" name="priceUpdateProduct" id="" placeholder="Nuevo precio" required>
                    <select name="categoryUpdateProduct" id="" value="">
                        {foreach from=$categorias item=categoria}
                            <option>{$categoria->nombre}</option>
                        {/foreach}
                    </select>
                    {* <input type="file" name="imageUpdateProduct" id="" accept=".jpg, .jpeg, .png"> *}
                    <input type="submit" value="Update">
                </form>

                <form action="removeProduct" method="GET">
                    <h3>Eliminar Producto</h3>
                    <label for="">To Delete:  </label>
                    <input type="text" name="nameRemoveProduct" id="" placeholder="Nombre" required>
                    <input type="submit" value="Delete">
                </form>
            </article>

            <article class = "articleABSCategoria">
                <h3>Cambiar privilegios a los usuarios</h3>  
                <form action="usuariosAdmin" method="POST" enctype="multipart/form-data">
                    <label for="">Usuarios con permisos de administracion:  </label>
                    <select name="usuariosConPermisos" id="" value="Usuarios">
                        {foreach from=$usuarios item=usuario}
                            {if $usuario->admin == 1}
                                <option>{$usuario->nombre}</option>
                            {/if}
                        {/foreach}
                    </select>
                    <input type="submit" value="Quitar permisos">
                </form>
                <form action="usuariosNoAdmin" method="POST" enctype="multipart/form-data">
                    {foreach from=$usuarios item=usuario}
                        {if $usuario->admin == 0}
                            <label for="">Usuarios sin permisos de administracion:  </label>
                            <select name="usuariosSinPermisos" id="" value="Usuarios">
                                {foreach from=$usuarios item=usuario}
                                    {if $usuario->admin == 0}
                                        <option>{$usuario->nombre}</option>
                                    {/if}
                                {/foreach}
                            </select>
                            <input type="submit" value="Añadir permisos">    
                        {/if}
                    {/foreach} 
                </form>
            </article>

            
        </section>
    </div>

    {include file="./footer.tpl"}