<br>
<h4><img class="center" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Logo-banco-inter-degrade.png" alt="Logo Banco Inter"></h4>
<br>
<center>
    <p class="flow-text">SEJA BEM VINDO!</p>
    <p class="flow-text">SELECIONE AS INICIAIS DO SEU NOME ABAIXO</p>
    <button onclick="finaliza('AMML')" class="btn-large orange">AMML</button>
    <button onclick="finaliza('SPAM')" class="btn-large orange">SPAM</button>
    <button onclick="finaliza('MDL')" class="btn-large orange">MDL</button>
    <button onclick="finaliza('JPDC')" class="btn-large orange">JPDC</button>
</center>
<div class="row">
    <div class="container">
        <div class="row">
            
    </div>
</div>
<script>
    function finaliza(initials){
        $.post( "api/validateinitials", { "initials": initials }).done(function( data ) {
            $("#conteudo").html(data);
        });
    }
</script>