function showComment(element, element2) {
    var x = document.getElementById(element);

    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById(element2).innerHTML ="Esconder Comentarios"
    } else {
        x.style.display = "none";
        document.getElementById(element2).innerHTML ="Mostrar Comentarios"
    }
}
