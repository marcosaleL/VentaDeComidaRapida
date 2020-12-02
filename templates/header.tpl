
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{BASE_URL}">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>{$titulo}</title>
</head>
<body>
    <header>
        <img class="imglogo" src="./images/logo2.png">
        <div class="botonera">
            <nav>
                <ul class="listaNav">
                    <li><a class="button" href="home">Inicio</a></li>
                    <li><a class="button" href="productos">Productos</a></li>
                    <li><a class="button" href="categorias">Categorias</a></li>
                    {if !$logged} <!--Si esta logueado no hace falta mostrar para que se registre ni para que inicie sesión-->
                        <li><a class="button" href="registro">Sign Up</a></li>
                        <li><a class="button" href="login">Sign In</a></li>
                    {/if}
                    {if $logged} <!--Si no esta logueado no muestro estos dos botones-->
                        <li><a class="button" href="logout">Sign Out</a></li>
                        <li><a class="button" href="administracion">Administrador</a></li>
                    {/if}
                </ul>
            </nav>
        </div>
    </header>
