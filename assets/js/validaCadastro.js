function validarCadastro() {
    var nome = formulario.nome.value;
    var user = formulario.user.value;
    var idade = formulario.idade.value;
    var email = formulario.email.value;
    var senha = formulario.senha.value;
    var rep_senha = formulario.confirmaSenha.value;
    let checkbox = document.getElementById('termos');

    if (senha != rep_senha) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Senhas não coincidem!',
        })
        return false;
    }

    let validaCaptcha = grecaptcha.getResponse()

    if (validaCaptcha.length == 0) {
        Swal.fire({
            icon: 'error',
            text: 'Preencha o campo "Não sou um robô"!',
        })
        return false;
    }

    if (!(nome != "" && idade != "" && email != "" && user != "" && senha.length > 6 && senha != "" && rep_senha != "" && checkbox.checked)) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'error',
            title: 'Preencha todos os dados'
        })
        return false;
    }
}

function validardataDeNascimento(data) {

    dataMin = new Date(2005, 10, 16, 00, 00, 00);

    data = new Date(data);

    if (data > dataMin) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Idade inv\u00e1lida. Voc\u00ea precisa ter 16 anos',
        })
        return false;
    }


}