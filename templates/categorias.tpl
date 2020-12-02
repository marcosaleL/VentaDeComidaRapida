    
    {include file="./header.tpl"}
    <!-- ESTE TEMPLATE  MUESTRA UN LISTADO DE CATEOGRIAS -->
    <div class ="mainDivPagina2">
        <h1 class="titulo">{$titulo}</h1>
        <section class="sectionPagina2" >
            <article class="articleListCategory">  
                <p class="texto">Hasta el momento solo disponemos de una unica sucursal. <br>
                En esta se pueden encontrar los siguientes tipos de categorias:  <br>
                </p>
                <ul>
                    {foreach from=$categorias item=categoria}
                        <li><h3 class="listado">{$categoria->nombre}</h3></li>
                        <a class="botonDetalles" href="categorias/{$categoria->id_categoria}">Detalles</a>
                    {/foreach}
                </ul>
                <br>
            </article>
        </section>
    </div>

    {include file="./footer.tpl"}