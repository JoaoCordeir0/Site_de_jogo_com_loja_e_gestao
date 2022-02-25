function confirmaAcaoApagar() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Tem certeza que deseja apagar?',
        text: "Isso não poderá ser revertido",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim!',
        cancelButtonText: 'Não!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
                'Deletado!',
                'O registro foi excluido com sucesso.',
                'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'Seu registro não foi apagado :)',
                'error'
            )
        }
    })
}