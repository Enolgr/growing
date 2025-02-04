$(document).ready(function () {
    $(".estrella").click(function () {
        var $this = $(this); // Referencia al elemento clicado
        var currentSrc = $this.attr("src");

        if (currentSrc === "./img/icons/Property 1=Favorito.svg") {
            // Si la imagen actual es la "favorita", la cambiamos a "favorito neutro"
            $this.attr("src", "./img/icons/Property 1=Favorito neutro.svg");
        } else {
            // En caso contrario, la cambiamos a la imagen "favorita"
            $this.attr("src", "./img/icons/Property 1=Favorito.svg");
        }
    });
});
