<br>
<h4><img class="center" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Logo-banco-inter-degrade.png" alt="Logo Banco Inter"></h4>
<br>
<div class="row">
    <div class="container">
        <div class="row">
            <center>
                <p class="flow-text">SOLICITAÇÃO DE CRÉDITO PRÉ-APROVADA</p>
                <p class="flow-text">CONCLUA O CADASTRO NO APP PARA FINALIZAR A COMPRA</p>
            </center>
        </div>
    </div>
</div>
<script>
    function verificaData(){
        date = $("#date").val();
        $.post( "api/validatedate", { "date": date }).done(function( data ) {
            $("#conteudo").html(data);
        });
    }
</script>