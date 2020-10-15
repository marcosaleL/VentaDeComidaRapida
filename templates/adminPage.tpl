    
    {include file="./header.tpl"}

    <div class ="mainDivPagina2">
        <h1 class = "titulolo">{$titulo}</h1>
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
                <form action="addProduct" method="POST" enctype=”multipart/form-data“>
                    <h3>Agregar Producto</h3>
                    <label for="">To Add:  </label>
                    <input type="text" name="nameAddProduct" id="" placeholder="Nombre">
                    <input type="text" name="descriptionAddProduct" id="" placeholder="Descripcion">
                    <input type="text" name="precioAddProduct" id="" placeholder="Precio">
                    {* <input type="file" name="imageUpdateProduct" id="" accept=".jpg, .jpeg, .png"> *}
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
                    <input type="text" name="nameActualProduct" id="" placeholder="Nombre actual">
                    <label for="">New values:</label>
                    <input type="text" name="nameUpdateProduct" id="" placeholder="Nuevo Nombre">
                    <input type="text" name="descriptionUpdateProduct" id="" placeholder="Nueva descripcion">
                    <input type="text" name="priceUpdateProduct" id="" placeholder="Nuevo precio">
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
                    <input type="text" name="nameRemoveProduct" id="" placeholder="Nombre">
                    <input type="submit" value="Delete">
                </form>
            </article>
            
        </section>
    </div>

    {include file="./footer.tpl"}