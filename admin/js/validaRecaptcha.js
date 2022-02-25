function validaRecaptcha() {
    let validaCaptcha = grecaptcha.getResponse()

    if (validaCaptcha.length == 0) {
        Swal.fire({
            icon: 'error',
            text: 'Preencha o campo "Não sou um robô"!',
        })
        return false;
    }
}