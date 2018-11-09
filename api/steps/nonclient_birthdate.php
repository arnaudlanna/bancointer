<br>
<h4><img class="center" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Logo-banco-inter-degrade.png" alt="Logo Banco Inter"></h4>
<br>
<div class="row">
    <div class="container">
        <div class="row">
            <center>
                <p class="flow-text">QUASE LÁ, DIGITE SUA DATA DE NASCIMENTO</p>
            </center>
            <div class="col s1"></div>
            <div class="col s10">
                <input type="text" id="date" maxlength="11" style="text-align:center;">
            </div>
            <div class="col s1">
            <a onclick="verificaData()" href="#"><i style="font-size: 40px;color: orange; padding-top: 10px; padding-left: 0px; margin-left: 0px" class="material-icons">arrow_forward</i></a>
            </div>
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