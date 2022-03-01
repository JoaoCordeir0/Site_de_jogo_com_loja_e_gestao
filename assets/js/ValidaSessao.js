function ValidaSessao() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Voc\u00ea precisa fazer login para poder adicionar produtos ao carrinho ou realizar uma compra',
        footer: '<a href="../acoes/login.php">Fa&#x000E7;a login</a>'
    })
    return false;
}