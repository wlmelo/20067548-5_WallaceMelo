$(document).ready(function () {
    $("#QuemSomos").click(function () {
        $("#conteudo").load("pages/quem-somos.php");
    });
    $("#Localizacao").click(function () {
        $("#conteudo").load("pages/onde-estamos.php");
    });
    $("#Contato").click(function () {
        $("#conteudo").load("pages/contate-nos.php");
    });
    $("#produto-1").click(function () {
        $("#conteudo").load("pages/produto-info.php?id=1");
    });
    $("#produto-2").click(function () {
        $("#conteudo").load("pages/produto-info.php?id=2");
    });
    $("#produto-3").click(function () {
        $("#conteudo").load("pages/produto-info.php?id=3");
    });
    $("#produto-4").click(function () {
        $("#conteudo").load("pages/produto-info.php?id=4");
    });
    $("#produto-5").click(function () {
        $("#conteudo").load("pages/produto-info.php?id=5");
    });
    $("#produto-6").click(function () {
        $("#conteudo").load("pages/produto-info.php?id=6");
    });
});

