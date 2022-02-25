function validaLogin() {
    var user = formulario.user.value;
    var senha = formulario.senha.value;

    let validaCaptcha = grecaptcha.getResponse()

    if (validaCaptcha.length == 0) {
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
            title: 'Preencha o campo "Não sou um robô"!'
        })
        return false;
    }

    if (!(user != "" && senha.length > 5 && senha != "")) {
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