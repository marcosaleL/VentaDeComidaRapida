    
    {include file="./header.tpl"}

    <div class ="mainDivPagina2">
        <h1 class = "titulolo">{$titulo}</h1>
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
                    <input type="file" name="" id="">
                    <input type="submit" value="Añadir">
                </form>

                <form action="" method="get">
                    <h3>Moficiar Producto</h3>
                    <label for="">To Change:  </label>
                    <input type="text" name="" id="" placeholder="Nombre actual de Categoria"> <br>
                    <label for="">New values:</label>
                    <input type="text" name="" id="" placeholder="Nuevo Nombre">
                    <input type="text" name="" id="" placeholder="Nueva descripcion"><br>
                    <input type="text" name="" id="" placeholder="Nuevo precio">
                    <input type="file" name="" id="">
                    <select name="cate" id="">
                        <option>Hola</option>
                        <option selected>Chau</option>
                    </select>
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

    {include file="./footer.tpl"}