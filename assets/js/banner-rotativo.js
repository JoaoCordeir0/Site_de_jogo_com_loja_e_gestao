let fotos = ["banner2-loja.png", "banner3-loja.png"];

function trocafoto(foto) {
    document.querySelector(".bannerRotativo").src = "img/" + fotos[foto];
}

let fotoatual = 0;
trocafoto(fotoatual);

setInterval(function() {
    fotoatual++;
    if (fotoatual > 1) {
        fotoatual = 0;
    }

    trocafoto(fotoatual);
}, 5000);