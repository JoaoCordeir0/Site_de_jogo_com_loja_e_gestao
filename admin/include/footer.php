<div id="footergestao" class="d-flex justify-content-center">
    <p id="p_footer" style="color:#11101d; margin: auto; font-weight:bold;"> <i class="fas fa-terminal"></i> Desenvolvido por Jo&atilde;o Victor Cordeiro <i class="fab fa-angellist"></i></p>
    <p id="p_footer_mobile" style="color:#11101d; margin: auto; font-weight:bold;"> <i class="fas fa-terminal"></i> Desenvolvido por Jo&atilde;o V. Cordeiro <i class="fab fa-angellist"></i></p>
</div>

<style>
    #footergestao {    
        margin: 20px auto auto auto;
        bottom: 0 !important;
        text-align: center;
        width: 100%;
        padding: 7px;
    }

    #p_footer {
        padding: 7px;
        background-color: #e4e9f7;
        border-radius: 20px;
        width: 400px;
    }

    #p_footer_mobile {
        display: none;
    }

    @media(max-width:400px) {
        #p_footer_mobile {
            padding: 7px;
            margin-left: -20px !important;
            background-color: #e4e9f7;
            border-radius: 20px;
            width: 400px;
            display: block;
        }

        #p_footer {
            display: none;
        }
    }
</style>