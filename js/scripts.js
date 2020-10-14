document.addEventListener("DOMContentLoaded", function(){

    function addButtonsFuncionality(){
        botones = document.querySelectorAll(".btnShowMore");
        for (let index = 0; index < botones.length; index++) {
            botones[index].addEventListener("click", function(){
                botones[index].classList.toggle("more");
                botones[index].classList.toggle("less");
                document.querySelector("#div"+botones[index].name).classList.toggle("hidden"); 
            })
        }
    }
    addButtonsFuncionality();
});

