<button class="btn btn-danger" type="submit" value="<?php $_COOKIE["Identifica_user"] ?>" onclick="apagadados()" style="display:flex;margin:auto;">Apagar todos os registros</button>

<script src="../../assets/js/sweetalert.js"></script>
<script>
    function apagadados() {
        Swal.fire({
            title: 'Você tem certeza disso?',
            text: "Está ação não pode ser revertida!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, apagar agora!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "http://cordeirovsk.com.br/admin/backend/delete_em_massa.php?acao_acesso=acesso"
            }
        })
    }
</script>