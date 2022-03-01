function Pagamento() {
    var select = document.getElementById("formaPagamento");
    var op = select.options[select.selectedIndex].value;

    let forma1 = document.querySelector(".forma1");
    let forma2 = document.querySelector(".forma2");
    let forma3 = document.querySelector(".forma3");
    let botaoConfirmar = document.querySelector(".botaoConfirmar");

    if (op == 1) {
        forma1.style.display = "block";
        botaoConfirmar.style.display = "block";
    }
    if (op == 2) {
        forma2.style.display = "block";
        botaoConfirmar.style.display = "block";
    }
    if (op == 3) {
        forma3.style.display = "block";
        botaoConfirmar.style.display = "block";
    }
}