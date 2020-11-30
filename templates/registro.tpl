{include file="./header.tpl"}

<!-- ESTE TEMPLATE ES DEL REGISTRO -->
<div class ="mainDivPagina2">
    <h1 class="titulo">{$titulo}</h1>
    <section class="sectionAdministrator">
        <article class = "articleABSCategoria">  
            <form action="addCategory" method="POST">
                <label for="">Nombre:</label>
                <input type="text" name="nameAddCategory" id="" placeholder="Nombre" required>
                <label for="">Apellido:</label>
                <input type="text" name="descriptionAddCategory" id="" placeholder="Apellido" required>
                <label for="">Dirección de correo electronico:</label>
                <input type="text" name="nameAddCategory" id="" placeholder="Dirección de correo electronico" required>
                <label for="">Telefono:</label>
                <input type="email" name="descriptionAddCategory" id="" placeholder="Telefono" required>
                <label for="">Contraseña:</label>
                <input type="password" name="descriptionAddCategory" id="" placeholder="Contraseña" required>
                <form action="" method="GET">
                    <input type="submit" value="Registrarse">
                </form>
            </form>
        </article>
    </section>
</div>

{include file="./footer.tpl"}