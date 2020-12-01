{include file="./header.tpl"}

<!-- ESTE TEMPLATE ES DEL REGISTRO -->
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

    </section>
</div>

{include file="./footer.tpl"}