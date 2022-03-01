function erroAcesso() {
    Swal.fire({
        icon: 'error',
        text: 'Realize o login para ter acesso!',
    })
    return false;
}