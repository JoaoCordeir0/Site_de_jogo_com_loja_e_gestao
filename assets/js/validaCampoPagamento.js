function validaCampoPagamento() {
    var numero = formpagamento.num.value;
    var pessoa = formpagamento.nome.value;
    var cod = formpagamento.codigo.value;
    var val = formpagamento.validade.value;

    if (numero != "" && pessoa != "" && cod != "" && val != "") {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 10000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Sucesso'
        })
    }
}