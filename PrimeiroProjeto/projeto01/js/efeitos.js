$(document).ready(function() {

    //Controle da animação do banner ao clicar no logotipo
    /*$("#logotipo").on("mouseover", function() {

        $("#banner h1").addClass("efeito");

    }).on("mouseout", function() {

        $("#banner h1").removeClass("efeito");

    });*/

    //Controle da caixa de pesquisa
    $("#input-search").on("focus", function() {

        $("li.search").addClass("ativo");

    }).on("blur", function() {

        $("li.search").removeClass("ativo");

    });

    //Controle do Carrousel
    $(".thumbnails").owlCarousel({

        autoplay: 3000,
        items: 4
    });

    var owl = $(".thumbnails").data('owlCarousel');

    $('#btn-news-prev').on("click", function() {
        owl.prev();

    });

    $('#btn-news-next').on("click", function() {
        owl.next();

    });
});

//Controle dos videos
$(function() {

    $(".thumbnails .item").on("click", function() {

        $("video").attr({
            "src": "mp4/" + $(this).data('video') + ".mp4",
            "poster": "img/" + $(this).data('video') + ".jpg"
        });
    });

    $("#volume").on("mousemove", function() {
        $("video")[0].volume = parseFloat($(this).val());
    });

    $("#btn-play-pause").on("click", function() {

        var video = $("video")[0];

        if ($(this).hasClass("btn-success")) {
            $(this).text("STOP");
            video.play();
        } else {
            $(this).text("PLAY");
            video.pause();
        }

        $(this).toggleClass("btn-success btn-danger");
    });

    //Controle do botao voltar para o topo
    $("#page-up").on("click", function(event) {
        $("body").animate({
            scrollTop: 0
        }, 1000);

        event.preventDefault();
    });

    //controle do menu mobile
    $("#btn-bars").on("click", function() {
        $("header").toggleClass("open-menu");
    });

    $("#menu-mobile-mask, .btn-close").on("click", function() {
        $("header").removeClass("open-menu");
    });

    $("#btn-search").on("click", function() {
        $("header").toggleClass("open-search");
        $("#input-search-mobile").focus();
    });

});