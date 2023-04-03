<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="assets/css/style.css" rel="stylesheet">

    <!--JQUERY E JQUERY MASK-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/59f636855b.js" crossorigin="anonymous"></script>

    <!--sweet alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="icon" href="assets/img//logo-karbank-branco.png">
    <title>Kard Bank</title>

</head>

<body>

    <?php include("header.php") ?>

    <section id="bannerInicio">

        <div class="container">

            <div class="containerBanner">

                <div class="containerTextoBanner text-center">

                    <h2>Kardbank. Muito mais que salário!</h2>

                    <p>Realize uma simulação, leva menos de 1 minuto</p>

                    <input type="text" class="inputBanner mb-3" id="cpf" placeholder="Digite seu CPF aqui!">

                    <button class="btnAzulEscuro px-5 py-2 rounded" id="btnSimular" type="button">Simular <i class="fa-solid fa-chevron-right"></i></button>

                </div>

            </div>

            <!--Fim row-->

        </div>

        <!--Fim container-->

    </section>

    <section id="sobre">

        <div class="container-fluid ps-0">

            <div class="row">

                <div class="col-md-6">

                    <img src="assets/img/img_top.png" class="img-fluid" alt="Imagem primária">

                </div>

                <!--fim col-->

                <div class="col-md-6 d-flex flex-column justify-content-center gap-5">

                    <div class="textoSobreNos">

                        <h6 class="subtituloPag">Sobre</h6>

                        <h2 class="tituloPag">Muito mais <br><b>que salário!</b></h2>

                        <p>Já parou para pensar por que as pessoas trabalham todos os dias e só recebem no final do mês?</p>

                        <p>Falando assim parece até estranho, mas é a realidade da maioria dos trabalhadores brasileiros. E o pior, imprevistos não esperam o salário chegar. Por isso, ter dinheiro disponível para usar nos momentos de aperto é fundamental para uma vida tranquila.</p>

                        <p>Foi pensando nisso que criamos a Kardbank.</p>

                    </div>

                    <div class="alinhamentoCentroCelular">

                        <a class="btnVerde px-5 py-3 rounded" href="#" target="_blank">Como Fazemos</a>

                    </div>

                </div>

            </div>

            <!--Fim row-->

        </div>

        <!--Fim container-->

    </section>

    <section id="servicos">

        <div class="container">

            <div class="row text-center mb-5">

                <h2 class="tituloPag weightForte">Principais Serviços</h2>

            </div>

            <div class="row">

                <div class="col-md-6 col-lg-4">

                    <div class="containerServico">

                        <i class="fa-solid fa-dollar-sign"></i>

                        <h5>Crédito Consignado</h5>

                        <p>O Crédito consignado é um empréstimo com pagamento indireto, cujas parcelas são deduzidas diretamente da folha de pagamento ou benefício da pessoa física.</p>

                    </div>

                </div>

                <!--Fim col-->

                <div class="col-md-6 col-lg-4">

                    <div class="containerServico">

                        <i class="fa-solid fa-calendar-days"></i>

                        <h5>Adiantamento 13º</h6>

                            <p>Uma modalidade de empréstimo presente em diversos bancos do país, que tem como finalidade receber da empresa em que você trabalha, o adiantamento dos valores que você tem para ganhar no final do ano, com acréscimo de juros.</p>

                    </div>

                </div>

                <!--Fim col-->



                <div class="col-md-6 col-lg-4">

                    <div class="containerServico">

                        <i class="fa-solid fa-hand-holding-dollar"></i>

                        <h5>FGTS</h5>

                        <p>Fundo de Garantia do Tempo de Serviço é um fundo criado com o objetivo de proteger o trabalhador que for demitido sem justa causa.</p>

                    </div>

                </div>

                <!--Fim col-->



            </div>

            <!--Fim row-->

        </div>

        <!--Fim container-->

    </section>



    <section id="resultados">

        <div class="container">



            <div class="row mb-3 text-center">

                <h2 class="tituloPag weightForte">Nossos Resultados</h2>

            </div>



            <div class="row">

                <div class="col-md-6 col-lg-3">

                    <div class="containerResultados">

                        <span><span class="numeroResultado">98</span>%</span>

                        <span class="tituloResultado">Cliente Satisfeitos</span>

                    </div>

                </div>

                <!--Fim col-->



                <div class="col-md-6 col-lg-3">

                    <div class="containerResultados">

                        <span><span class="numeroResultado">24541</span>+</span>

                        <span class="tituloResultado">Pessoas Atendidas</span>

                    </div>

                </div>

                <!--Fim col-->



                <div class="col-md-6 col-lg-3">

                    <div class="containerResultados">

                        <span><span class="numeroResultado">21261</span>+</span>

                        <span class="tituloResultado">Acordos Fechados</span>

                    </div>

                </div>

                <!--Fim col-->



                <div class="col-md-6 col-lg-3">

                    <div class="containerResultados">

                        <span><span class="numeroResultado">5</span>+</span>

                        <span class="tituloResultado">Anos no Mercado</span>

                    </div>

                </div>

                <!--Fim col-->



            </div>

            <!--Fim row-->

        </div>

    </section>



    <section id="contato">

        <div class="container">

            <div class="row">

                <div class="col-md-6 d-flex flex-column justify-content-center align-items-end gap-5 containerConsultor">



                    <div class="text-center text-md-end">

                        <h6 class="subtituloPag">CONSULTOR</h6>



                        <h2 class="tituloPag">Segurança financeira e <b>bem-estar ao seu alcance</b></h2>



                        <p>Entre em contato com um de nossos consultores e conheça mais sobre as vantagens dos diversos produtos e soluções que a Kardbank tem pra você</p>



                    </div>



                    <div class="alinhamentoCentroCelular">

                        <a class="btnVerde px-5 py-3 btnFaleConosco rounded" href="#" target="_blank">Fale com um consultor</a>

                    </div>



                </div>



                <div class="col-md-6">

                    <img src="assets/img/contato_.png" class="img-fluid" alt="Imagem Contato">

                </div>

                <!--fim col-->



            </div>

            <!--Fim row-->

        </div>

        <!--Fim container-->

    </section>



    <?php include("footer.php"); ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <script>
        const btnSimular = document.querySelector("#btnSimular");

        const inputCpf = document.querySelector("#cpf");



        $('#cpf').mask('000.000.000-00');



        btnSimular.addEventListener("click", () => {



            window.location.href = 'simulacao.php?cpfCliente=' + inputCpf.value;



        });
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!--

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    -->

</body>



</html>