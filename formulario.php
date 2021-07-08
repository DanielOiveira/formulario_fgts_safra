<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulário</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        
        <div class="container mt-5 d-flex justify-content-center align-items-center">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12">
                    <form id="regForm" method="post" action="processa-envio.php">
                        <img id="logo" src="img/safra-home.png" alt="safra">
                        <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-address-card"></i></span><span class="step"><i class="fa fa-home"></i></span> <span class="step"><i class="fa fa-piggy-bank"></i></span> <span class="step"><i class="fa fa-headset"></i></span> <span class="step"><i class="fa fa-check"></i></span></div>
                        <div class="tab">
                            <p> <input placeholder="NOME COMPLETO" oninput="this.className = ''" name="nomeCompleto" id="nomeCompleto"></p>
                        </div>
                        <div class="tab">
                            <p> <input placeholder="NOME DA MÃE" oninput="this.className = ''" name="mae" id="nomeMae"></p>
                            <p> <input placeholder="CPF" maxlength="11" oninput="this.className = ''" name="cpf" id="cpf" onkeypress="$(this).mask('000.000.000-00');"></p>
                            <p> <input placeholder="RG" maxlength="9" oninput="this.className = ''" name="rg" id="rg"onkeypress="$(this).mask('00.000.000-0');"></p>
                            <p> <input placeholder="UF de RG" oninput="this.className = ''" name="uf_rg" id="uf_rg"></p>
                            <p> <input placeholder="DATA de NASCIEMENTO" type="date" oninput="this.className = ''" name="dt_nasc" id="dt_nasc"> <small>*Data de Nascimento</small></p>
                            
                        </div>
                        <div class="tab">
                            <p><input placeholder="CEP" onblur="pesquisacep(this.value);"  oninput="this.className = ''" name="cep" id="cep"></p>
                            <p><input placeholder="RUA" name="rua"  type="text" id="rua" oninput="this.className = ''" ></p>
                            <p><input placeholder="BAIRRO" name="bairro"  type="text" id="bairro" oninput="this.className = ''" ></p>
                            <p><input placeholder="CIDADE" name="cidade"  type="text" id="cidade" oninput="this.className = ''" ></p>
                            <p><input placeholder="UF" name="uf"  type="text" id="uf" oninput="this.className = ''" ></p>
                        </div>
                        <div class="tab">
                                <select name="tp_conta" id="sel" class="tp_conta">
                                    <option  style="color: dimgray;" >TIPO CONTA</option>
                                    <option value="Corrente">CORRENTE</option>
                                    <option value="Poupanca">POUPANÇA</option>
                                </select> 

                            <!--<p><input placeholder="TIPO CONTA" name="tp-conta" type="text" oninput="this.className = ''" ></p> -->
                            <p><input placeholder="BANCO" name="banco" id="banco" type="text" oninput="this.className = ''" > <small>*Não aceitamos Bancos Digitais</small></p>
                            <p><input placeholder="AGÊNCIA" name="ag" id="ag" type="text" oninput="this.className = ''" ></p>
                            <p><input placeholder="CONTA" name="conta" id="conta" type="text" oninput="this.className = ''" ></p>
                            <p><input placeholder="DIGITO" name="digito" id="digito" type="text" oninput="this.className = ''" ></p>
                        </div>
                        <div class="tab">
                            <select oninput="this.className = ''" name="assessor" class="assessor" id="sel">
                                <option value="" >Qual Assessor te atendeu?</option>
                                <option value="Scarlet">SCARLET</option>
                                <option value="Maria">MARIA</option>
                                <option value="Ana">ANA</option>
                                <option value="Madruga">MADRUGA</option>
                            </select>
                        </div>
                        <div class="tab">
                               <div class="hand-dollar  d-flex justify-content-center align-items-center">
                                    <span><i class="fa fa-comments-dollar fa-3x"></i></span>
                               </div> 
                            <h5 class="title-home">Agradecemos pelas infomações</h5>
                            <h5 class="title-home">Aguarde o retorno de um de nossos Assessores</h5>
                            <div class="mt-5 d-flex justify-content-center align-items-center">
                                <button type="submit" name="submit" value="submit" class="btn btn-outline-success" >Enviar</button>
                            </div>
                        </div>
                        <div style="overflow:auto;" id="nextprevious">
                            <div style="float:right;"> <button type="button" id="prevBtn" class="button-form" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn" class="button-form" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                        </div>
                   
                    </form>
                </div>
            </div>
        </div>
       
      
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/valida-cep.js"></script>
    </body>
</html>