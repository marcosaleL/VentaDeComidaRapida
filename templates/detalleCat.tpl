
{include file="./header.tpl"}
<!-- ESTE TEMPLATE  MUESTRA EL DETALLE DE LA CATEGORIA POR ID -->
    <div class ="mainDivPagina2">
        <h1>{$titulo}</h1>
        <section class="sectionProductos" >
        <article class="articleListProduct">  
            <div class = "productoContainer">
                <div class = "divNameAndButton">
                    <h3>{$categoria->nombre}</h3>
                </div>
                <p>Descripcion: {$categoria->nombre}</p>
                <p>Precio: ${$categoria->descripcion}</p>
            </div>    
        </article>
        </section>
    </div>
{include file="./footer.tpl"}