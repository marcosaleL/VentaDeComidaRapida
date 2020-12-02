"use strict"

document.getElementById("commentButton").addEventListener('click', (event) => {
    postComment(event);
});

/*
let buttonsDel = document.querySelectorAll(".deleteComment");
buttonsDel.forEach(boton => {
    boton.addEventListener('click', fetchDeleteComment(boton.id))
});
*/

let app = new Vue({
    el: "#commentSection",
    data: {
        subtitle: "Subtitle, no se ni lo que es",
        comments: [], 
        commentexists: true,
        auth: true
    },
    methods: {
        fetchDeleteComment: async function (id_producto) {
            const res = await fetch("api/delComment/" + id_producto, {
                method: "DELETE",
            });
            if (200 <= res.status && res.status < 300) { 
                fetchComments(); 
            }else
                if (res.value = 401) {
                    //MANDARLO AL LOGIN (NO SE SI DE ESTA FORMA)
                    const arrUrl = window.location.href.split('/');
                    arrUrl.pop();
                    arrUrl.pop();
                    const baseUrl =arrUrl.join('/');
                    window.location.href = baseUrl + "/login";
                } else {
                    alert("no tienes permisos para lo que intentas hacer");
                }
        }
    }
});




async function getComments(){
    let id_producto = getProductId();
    const res = await fetch("api/comments/" + id_producto);
    if (res.ok) {
        const comments = await res.json();
        app.comments = comments;
        app.commentexists = true;
    } else { 
        app.commentexists = false; 
    }
}



function getProductId() {
    let params = window.location.href.split("/");
    return params[parseInt(params.length) - 1];
}
getComments();

function postComment(event) {
    event.preventDefault();
    let texto = document.getElementById("commentTexto").value;
    let valoracion = document.getElementById("valoracion").value;
    let id_producto = getProductId();
    fetchPostComment(texto, valoracion, id_producto);
    document.getElementById("commentTexto").value = "";
    document.getElementById("valoracion").value = 5;
}



async function fetchPostComment(texto, valoracion, id_producto) {
    let commentData = {
        valoracion: valoracion,
        texto: texto,
        id_producto: id_producto,
    }
    const res = await fetch("api/comment", {
        method: 'POST',
        headers: { "Content-Type": "application/Json" },
        body: JSON.stringify(commentData),
    });
    if (200 < res.status && res.status < 300) {
        getComments();
    } else {
        if (res.status == 401) {
            //MANDARLO AL LOGIN (NO DE ESTA FORMA)
            const baseUrl = "http://localhost/VentaDeComidaRapida"; //hay que dinamizar esto
            window.location.href = baseUrl + "/login";
        }
    }
}
