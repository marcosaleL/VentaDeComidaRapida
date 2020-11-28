
{include file="./header.tpl"}
<!-- ESTE TEMPLATE  MUESTRA EL DETALLE DE LA CATEGORIA POR ID -->
    <div class ="mainDivPagina2">
        <h1 class="titulo">{$titulo}</h1>
        <section class="sectionProductos" >
        <article class="articleListProduct">  
            <div class = "productoContainer">
                <div class = "divNameAndButton">
                    <h3 class="listado">{$categoria->nombre}</h3>
                </div>
                <p class="texto">Nombre: {$categoria->nombre}</p>
                <p class="texto">Descripcion: {$categoria->descripcion}</p>
            </div>    
        </article>
        </section>
    </div>
{include file="./footer.tpl"}