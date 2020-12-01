"use strict"
/*

//document.addEventListener("DOMContentLoaded", fetchComments(buttonThing));


let app = new Vue(
    {
        el: '#commentSection',
        data:
        {
            test: "Vue works",
            comments: [],
            commentexists: true,
            superUser: true,
        },
        methods: {
            fetchDeleteComment: async function (commentId) {
                const res = await fetch("api/comment/" + commentId, {
                    method: "DELETE",
                });
                if (200 < res.status && res.status < 300) { fetchComments(); } else
                    if (res.value = 401) {
                        const arrUrl = window.location.href.split('/');
                        arrUrl.pop();
                        arrUrl.pop();
                        const baseUrl =arrUrl.join('/');
                        window.location.href = baseUrl + "/login";
                    } else {
                        alert("no tienes permisos para lo que intentas hacer")
                    }


            }
        }
    }
);

*/

document.getElementById("commentButton").addEventListener("click", postComment);

let app = new Vue({
    el: "#commentSection",
    data: {
        subtitle: "Subtitle, no se ni lo que es",
        comments: [], 
        commentexists: true,
        auth: true
    }
});


function getComments(){
    let id = getProductId();
    fetch("api/comments/" + id)
    .then(response => response.json())
    .then(comments => {
        app.comments = comments;
    })
    .catch(error => console.log(error));
}


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
        texto: texto,
        valoracion: valoracion,
        id_producto: id_producto,
    }
    const res = await fetch("api/comment", {
        method: 'POST',
        headers: { "Content-Type": "application/Json" },
        body: JSON.stringify(commentData),
    });
    if (200 < res.status && res.status < 300) {
        fetchComments();
    } else {
        if (res.status == 401) {
            const baseUrl = "http://localhost/VentaDeComidaRapida"; //hay que dinamizar esto
            window.location.href = baseUrl + "/login";
        }
    }
}

async function fetchComments() {
    let id_producto = getProductId();
    const res = await fetch("api/comments/" + id_producto);
    if (res.ok) {
        const comments = await res.json();
        app.comments = comments;
        app.commentexists = true;
    } else { app.commentexists = false; }
}


function getProductId() {
    let params = window.location.href.split("/");
    return params[parseInt(params.length) - 1];
}


/*

if (document.getElementById("admin-deck")) {
    app.superUser = true;
}

function buttonThing() {
    let deleteButtons = document.getElementsByClassName("deleteComment");
    if (deleteButtons.length > 0) {
        deleteButtons.forEach(button => {
            button.addEventListener("click", fetchDeleteComment(this.dataset.id));
            console.log("llegaste, varias veces");
            console.log(button.dataset.id);
        });
    }
}



*/

getComments();

