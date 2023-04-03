class Simulacao{
    
    constructor(){
        this.formSimulacao = document.querySelector("#simulacao");
        this.btnEnviar = document.querySelector("#btnEnviar");
        this.termos = document.querySelector("#termos");
        this.fullToken;
        this.salvaFormulario();
        this.addMascaras();
        this.alteraData();
        this.removeErroForm();
        this.recuperaToken();
    }

    alteraData(){

        let inputData = document.querySelector("#dtNasci");

        inputData.addEventListener("focus", ()=>{

            inputData.type = 'date';

        });

    }

    removeErroForm(){

        $("#cpf").keyup(()=> {
            $("#cpf").removeClass("erroForm");
        });

        $(".selectSimulacao").click(()=> {
            $(".selectSimulacao").removeClass("erroForm");
        });

    }

    addMascaras(){

        $('#telefone').mask('(00) 00000-0000');
        $('#cpf').mask('000.000.000-00');

    }

    removeMascaras(){

        $('#telefone').unmask();
        $('#cpf').unmask();

    }

    salvaFormulario(){

        $('#cpf').keyup(()=>{

            $('#cpf').removeClass("erroForm");

        });


        this.formSimulacao.addEventListener("submit", e=>{

            e.preventDefault();

            if(this.termos.checked){
                
                if(this.recuperaForm()){
                    this.enviaSimulacao(this.recuperaForm());
                    //console.log(this.recuperaForm());
                }

            }else{
                Swal.fire({
                    title: "Aceite os termos",
                    text: "Para sua segurança, leia e aceite os termos e condições",
                    icon: "warning",
                    button: "Fechar",
                });
            }

        });

    }

    enviaSimulacao(simulacao){

        $.ajax({

            url: 'assets/php/enviaSimulacao.php',
            method: 'POST',
            data: simulacao,
            success: data=>{

                if(data == "sucesso"){
                    this.enviaMsg(simulacao['telefone'], simulacao['nome']);

                    Swal.fire({
                            title: "Sucesso",
                            text: "Sua simulação foi enviada com sucesso!",
                            icon: "success",
                            button: "Fechar",
                        }).then(result=> {
                            if (result) {
                                this.formSimulacao.reset();
                            }
                        });

                }else if(data == 'cpfCadastrado'){

                        $( '#cpf' ).addClass( "erroForm" );

                        Swal.fire({
                            title: "CPF Cadastrado",
                            text: "Este CPF ja está cadastrado em nosso sistema",
                            icon: "warning",
                            button: "Fechar",
                        });

                }else if(data == 'atendAtivo'){

                    Swal.fire({
                            title: "Atendimento Ativo",
                            text: "Você ja possui um atendimento em andamento, entre em contato conosco em caso de duvidas",
                            icon: "warning",
                            button: "Fechar",
                        });

                }else if(data == 'erroQuery'){

                    Swal.fire({
                        title: "ERRO INTERNO",
                        text: "Entre em contato com o administrador",
                        icon: "error",
                        button: "Fechar",
                    });

                }

                this.btnEnviar.disabled = false;
                this.btnEnviar.innerHTML = 'Enviar';

            },
            beforeSend: ()=>{

                this.btnEnviar.disabled = true;
                this.btnEnviar.innerHTML = '<span class="spinner-border spinner-border-sm text-light" role="status"></span> Enviando';

            }

        });

    }

    recuperaForm(){

        let simulacao = {};
        let isValid = true;
        
        this.removeMascaras();

        [...this.formSimulacao.elements].forEach(element=>{

            if(element.name == 'fAtendimento'){

                if(element.checked){
                    simulacao[element.name] = element.value;
                }

            }else if(element.name == 'cpf'){

                if(this.validaCPF(element.value) == 'valido' && !this.cpfConhecidos(element.value)){

                    simulacao[element.name] = element.value;    

                }else{

                    Swal.fire({
                            title: "CPF inválido",
                            text: "Digite um CPF existente",
                            icon: "warning",
                            button: "Fechar",
                        }).then(result=> {
                            if (result) {
                                $("#cpf").addClass("erroForm");
                            }
                        });

                    isValid = false;

                }

            }else if(element.name == 'cargo'){

                if(element.value === "false"){
                    Swal.fire({
                            title: "Selecione um Cargo",
                            text: "Você precisa selecionar um cago para concluir sua simulação",
                            icon: "warning",
                            button: "Fechar",
                        }).then(result=> {
                            if (result) {
                                $(".selectSimulacao").addClass("erroForm");
                            }
                        });

                    isValid = false;
                }else{

                    simulacao[element.name] = element.value;

                }

            }else{

                simulacao[element.name] = element.value;

            }

        });

        this.addMascaras();

        if(!isValid){
            return false;
        }

        return simulacao;

    }


    enviaMsg(numero, nome){
    
    let primeiroNome = nome.split(" ");
    primeiroNome = primeiroNome[0];

    let msg = {
        "phone": "55"+numero,
        "message": "Olá " + primeiroNome + " Tudo bem? Sou a Adriana da AMP Barros, vi que você se cadastrou em nosso site, está podendo falar agora?",
        "isGroupMsg": false
    }

    $.ajax({

        url: 'https://whatsapp-free01.wppserver.com/api/'+ this.fullToken +'/send-message',
        method: 'POST',
        data: msg,
        success: data=>{

            console.log(data);

        }

    });

}


    recuperaToken(){

        $.ajax({

            url: 'assets/php/buscaTokenApi.php',
            success: data=>{

                this.fullToken = data;

            }
            
        })

    }


    cpfConhecidos(value){
        return (['00000000000', '11111111111', '22222222222', '33333333333', '44444444444', '55555555555', '66666666666', '77777777777', '88888888888', '99999999999'].indexOf(value) > -1);
    }

    validaCPF(c){
            var i;
            var s = c;
            var c = s.substr(0,9);
            var dv = s.substr(9,2);
            var d1 = 0;
            var v = false;

            for (i = 0; i < 9; i++){
                d1 += c.charAt(i)*(10-i);
            }
            if (d1 == 0){
                v = true;
                return ("invalido");
            }
            d1 = 11 - (d1 % 11);
            if (d1 > 9) d1 = 0;
            if (dv.charAt(0) != d1){
                v = true;
                return ("invalido");
            }
        
            d1 *= 2;
            for (i = 0; i < 9; i++){
                d1 += c.charAt(i)*(11-i);
            }
            d1 = 11 - (d1 % 11);
            if (d1 > 9) d1 = 0;
            if (dv.charAt(1) != d1){
                v = true;
                return ("invalido");
            }

            if (!v) {
                return ("valido");
            }
        }

}