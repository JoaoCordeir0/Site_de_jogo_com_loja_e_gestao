<script language="javascript">
        var url_atual = window.location.href;
        if (url_atual == 'http://cordeirovsk.com.br/admin/dash?acao=logado') {
            Swal.fire({
                title: 'Gestão Zombies Survival',
                text: 'Bem vindo(a) <?php echo $user['nome']; ?>',
                width: 600,
                showCancelButton: false,
                showConfirmButton: false,
                padding: '3em',
                color: '#716add',
                background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                backdrop: `
                rgba(0,0,123,0.4)
                url("https://sweetalert2.github.io/images/nyan-cat.gif")
                left top
                no-repeat
              `
            })
            <?php if($cont > 0):?>
                const timer = setInterval(function() {
                    window.location.href = "http://cordeirovsk.com.br/admin/dash?acao=New_notification";
                }, 2000)
            <?php else:?>
                const timer = setInterval(function() {
                    window.location.href = "http://cordeirovsk.com.br/admin/dash";
                }, 2000)
            <?php endif?>
        }
        if (url_atual == 'http://cordeirovsk.com.br/admin/dash?search=false') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'O termo buscado não foi encontrado',
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/dash?acao=New_notification") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'info',
                title: 'Você tem novas notificaçoes'
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/acesso?acao=sucess") {
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
                icon: 'success',
                title: 'Sucesso'
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/acesso?acao=error") {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Você não tem permissão para realizar está ação',
                showConfirmButton: false,
                timer: 2500
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/acesso?acao=erro") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Você não tem permissão para excluir',
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/acesso?acao=erro_cookie") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Houve um erro ao consultar os cokies, tente novamente',
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/email?acao=sucess") {
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
                icon: 'success',
                title: 'Sucesso'
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/email?acao=error") {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Você não tem permissão para realizar está ação',
                showConfirmButton: false,
                timer: 2500
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/email?acao=erro") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Você não tem permissão para excluir',
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/email?acao=erro_cookie") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Houve um erro ao consultar os cokies, tente novamente',
            })
        }
        
        if (url_atual == "http://cordeirovsk.com.br/admin/gestores?acao=erro") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Você não tem permissão para excluir',
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/gestores?acao=erro_cookie") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Houve um erro ao consultar os cokies, tente novamente',
            })
        }         
        if (url_atual == "http://cordeirovsk.com.br/admin/gestores?acao=error") {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Erro ao inserir usuário',
                showConfirmButton: false,
                timer: 2500
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/gestores?acao=sucess") {
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
                icon: 'success',
                title: 'Sucesso'
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/gestores?acao=email-enviado") {
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
                icon: 'success',
                title: 'Lembrete de senha enviado com sucesso'
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/loja?acao=sucess") {
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
                icon: 'success',
                title: 'Sucesso'
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/loja?acao=erro") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Você não tem permissão para excluir',
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/loja?acao=erro_cookie") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Houve um erro ao consultar os cokies, tente novamente',
            })
        }    
        
        if (url_atual == "http://cordeirovsk.com.br/admin/user?acao=erro") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Você não tem permissão para excluir',
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/user?acao=erro_cookie") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Houve um erro ao consultar os cokies, tente novamente',
            })
        }         
        if (url_atual == "http://cordeirovsk.com.br/admin/user?acao=sucess") {
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
                icon: 'success',
                title: 'Sucesso'
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/user?acao=error") {
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
                title: 'Erro'
            })
        }
        if (url_atual == "http://cordeirovsk.com.br/admin/user?acao=email-enviado") {
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
                icon: 'success',
                title: 'Lembrete de senha enviado com sucesso'
            })
        }
    </script>