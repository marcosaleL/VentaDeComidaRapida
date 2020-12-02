{include file="./header.tpl"}

<!-- ESTE TEMPLATE ES DEL REGISTRO -->
<div class ="mainDivPagina2">
    <h1 class="titulo">{$titulo}</h1>
    <section class="sectionAdministrator">
        <article class = "articleABSCategoria">  
            <form class="formRegistro" action="register" method="POST">
                <label for="">Nombre:</label>
                <input type="text" name="nameRegister" id="" placeholder="Nombre" required>
                <label for="">Apellido:</label>
                <input type="text" name="lastNameRegister" id="" placeholder="Apellido" required>
                <label for="">Dirección de correo electronico:</label>
                <input type="text" name="mailRegister" id="" placeholder="Dirección de correo electronico" required>
                <label for="">Telefono:</label>
                <input type="number" name="phoneRegister" id="" placeholder="Telefono" required>
                <label for="">Password:</label>
                <input type="password" name="passwordRegister" id="" placeholder="Password" required>
                <input type="submit" value="Registrarse">
            </form>
        </article>
    </section>
</div>

{include file="./footer.tpl"}