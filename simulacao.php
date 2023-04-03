<?php

$cpf = isset($_GET['cpfCliente']) ? $_GET['cpfCliente'] : '';

?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-05ZFTN3SNZ"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BDEFQ5FX7P"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BDEFQ5FX7P');
    </script>

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

    <title>Kard Bank</title>
</head>

<body class="pt-5">

    <?php include("header.php") ?>

    <section id="formularioSimulcao">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <form id="simulacao">
                        <div class="ItemForm">
                            <label for="cpf"><i class="far fa-id-card iconeSimulacao"></i></label>
                            <input type="text" class="inputSimulacao" required id="cpf" name="cpf" placeholder="CPF" value="<?php echo $cpf ?>" maxlength="14">
                        </div>

                        <div class="ItemForm">
                            <label for="nome"><i class="far fa-user iconeSimulacao"></i></label>
                            <input type="text" class="inputSimulacao" required id="nome" name="nome" placeholder="Nome Completo" autofocus>
                        </div>

                        <div class="ItemForm">
                            <label for="dtNasci"><i class="far fa-calendar-alt iconeSimulacao"></i></label>
                            <input type="text" class="inputSimulacao" required id="dtNasci" name="dtNasci" placeholder="Data de Nascimento">
                        </div>

                        <div class="ItemForm">
                            <label for="telefone"><i class="fas fa-phone-alt iconeSimulacao"></i></label>
                            <input type="text" class="inputSimulacao" required id="telefone" name="telefone" placeholder="Telefone" maxlength="15">
                        </div>

                        <div class="ItemForm">
                            <label for="email"><i class="far fa-envelope iconeSimulacao"></i></label>
                            <input type="email" class="inputSimulacao" required id="email" name="email" placeholder="Email">
                        </div>


                        <div class="ItemForm">
                            <i class="fas fa-briefcase iconeSimulacao"></i>
                            <div class="w-100">
                                <h5 for="fContato">Carreira:</h5>
                                <select class="form-select form-select-sm selectSimulacao" name="cargo" required>
                                    <option disabled="" selected="" value="false">Selecione uma opção</option>
                                    <option value="Servidor Público">Servidor Público</option>
                                    <option value="Aposentado">Aposentado</option>
                                    <option value="Pensionistas">Pensionistas</option>
                                    <option value="Nenhuma opcao">Nenhuma das Opções</option>
                                </select>
                            </div>
                            <!--Fim flex colum-->
                        </div>
                        <!--Fim item form-->


                        <div class="ItemForm">
                            <i class="far fa-comment iconeSimulacao"></i>
                            <div class="w-100">
                                <h5 for="fContato">Como prefere ser atendido?</h5>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="fAtendimento" id="ligacao" value="ligacao">
                                    <label class="form-check-label" for="ligacao">Ligação</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="fAtendimento" id="aEmail" value="email">
                                    <label class="form-check-label" for="aEmail">E-mail</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="fAtendimento" id="whatsapp" value="whatsapp" checked="">
                                    <label class="form-check-label" for="whatsapp">Whatsapp</label>
                                </div>
                            </div>
                            <!--Fim flex colum-->
                        </div>
                        <!--Fim item form-->

                        <div class="itemForm">
                            <input type="checkbox" id="termos" class="form-check-input">
                            <label class="form-check-label" for="termos">
                                Eu concordo com os <a href="#modalTermos" data-bs-toggle="modal">Termos e Condições</a>
                            </label>
                        </div>

                        <div class="mt-3">
                            <button class="btnVerde py-2 w-100 rounded" id="btnEnviar">Enviar</button>
                        </div>
                    </form>
                </div>
                <!--Fim col-->

                <div class="col-md-6">
                    <img src="assets/img//urn_aaid_sc_US_3b1896d1-cb4a-4d17-bdd7-4d7101f3da2e.png" class="img-fluid mb-3" alt="">
                    <p class="txtIndiceImagemSimulacao">É muito importante que você preencha as informações corretamente, pois só assim conseguiremos lhe atender da melhor maneira possível! Não se esqueça de confirmar os dados antes de enviar. Duvidas? Fale conosco: <br><b>(11) 91343-5825</b></p>
                </div>

            </div>
            <!--fim row-->
        </div>
        <!--Fim container-->
    </section>

    <?php include("footer.php"); ?>

    <div class="modal fade" id="modalTermos" tabindex="-1" aria-labelledby="modalTermosLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTermosLabel">TERMOS DE USO E POLÍTICA DE PRIVACIDADE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea id="termosCompleto" class="termosArea" disabled="">
                        A AMP Barros Promotora, que nesses Termos de Uso e Política de Privacidade chamamos de “AMP” ou apenas “nós”, têm como propósito contribuir para que as pessoas possam alcançar seus sonhos e investir em grandes ideias. Tudo sempre feito de forma responsável, ética e transparente.

                        Aqui, apresentamos os nossos Termos de Uso e a nossa Política de Privacidade para que os nossos Usuários e titulares de dados pessoais compreendam facilmente as condições para uso dos nossos Sites e Aplicativos, e a forma como coletamos e usamos suas informações em nossas atividades.

                        Se tiver dúvidas, entre em contato conosco pelos nossos canais de atendimento.




                        ÍNDICE

                        Termos de Uso

                        1. Atualização dos Termos de Uso

                        2. Termos e condições de uso específicos

                        3. Acesso a conteúdo restrito

                        4. Conteúdos enviados por Usuários

                        5. Links para sites e aplicativos de terceiros

                        6. Como nossos Sites e Aplicativos não devem ser utilizados

                        7. Responsabilidades

                        8. Propriedade Intelectual

                        9. Suspensão de acesso

                        10. Legislação aplicável



                        

                        TERMOS DE USO

                        Estes Termos de Uso são aplicáveis a todos os Sites e Aplicativos da AMP e a todos que acessam os nossos Sites e Aplicativos.

                        Ao acessar os Sites e Aplicativos, você expressamente aceita e concorda com as disposições destes Termos de Uso para todos os Sites e Aplicativos da AMP. Por conta disso, você deve ler atentamente esses Termos de Uso antes de usar os nossos Sites e Aplicativos. Caso você não concorde com os Termos de Uso, você não deve usar os nossos Sites e Aplicativos.

                        



                        1. ATUALIZAÇÃO DOS TERMOS DE USO

                        Lembramos que os Termos de Uso, assim como os conteúdos e as funcionalidades dos nossos canais, poderão ser atualizados a qualquer momento por razões legais, pelo uso de novas tecnologias e funcionalidades e sempre que a AMP entender que as alterações são necessárias. Ao continuar a acessar nossos Sites e Aplicativos após as alterações, que serão publicadas nos Sites e Aplicativos, você concorda com as alterações também.




                        2. TERMOS E CONDIÇÕES DE USO ESPECÍFICOS

                        Além desses Termos de Uso e da Política de Privacidade, alguns Sites e Aplicativos podem ter serviços e funcionalidades específicos e termos e condições próprios ou adicionais para a sua utilização. Nesse caso, os termos adicionais estarão disponíveis em referidos Sites e Aplicativos e serão aplicáveis se você usar tais serviços e funcionalidades.




                        3. ACESSO A CONTEÚDO RESTRITO

                        Alguns dos nossos Sites e Aplicativos possuem área de conteúdo aberto e de conteúdo restrito. Para ter acesso ao conteúdo restrito, pode ser necessário que o Usuário faça um cadastro fornecendo algumas informações pessoais para a criação de um login e senha.

                        Fique atento se as informações fornecidas estão corretas, pois você é responsável pela veracidade delas. Caso haja alguma inconsistência, isso pode impactar no seu acesso ao Site ou ao Aplicativo.



                        Como meus dados de cadastro são utilizados?

                        Você pode conferir os Dados Pessoais coletados e como são usados em nossa Política de Privacidade.



                        Posso compartilhar meu login, senha e Dispositivo de Segurança com terceiros?

                        Somente você pode utilizar o seu login e senha, sendo assim proibido o compartilhamento com terceiros. Note que o seu acesso é pessoal e intransferível, e você é inteiramente responsável pela guarda, sigilo e bom uso do seu login e senha.



                        O que é Touch ID, Face ID e Fingerprint?

                        O Touch ID e o Fingerprint são sensores de identidade por impressão digital, já o Face ID é um sensor de reconhecimento facial. Os três facilitam a autenticação e reconhecimento do Usuário.



                        Posso utilizar os sensores de autenticação e reconhecimento do Touch ID, Face ID e Fingerprint para fazer login nos Aplicativos?

                        Estas funcionalidades estão disponíveis para alguns Aplicativos, dependendo do seu dispositivo e da versão do sistema operacional do seu dispositivo. Por meio delas, você poderá acessar sua conta digitando seus dados de acesso, como números de agência e conta ou cartão de crédito, por exemplo, e utilizar a impressão digital ou o reconhecimento facial, ao invés de digitar a sua senha eletrônica, desde que uma dessas funcionalidades esteja cadastrada e ativada no sistema operacional do seu dispositivo. Esses recursos não substituirão sua senha do cartão ou o dispositivo de segurança na utilização das outras funções dos Aplicativos.

                        Lembre-se que qualquer pessoa que tiver a impressão digital ou a face cadastrada para uso do seu celular ou outro dispositivo poderá ter acesso à parte logada dos Aplicativos, caso você habilite o acesso com Touch ID, Face ID ou Fingerprint. Você é responsável pela impressão digital ou face cadastrada no seu celular ou dispositivo, inclusive por habilitar ou desabilitar essa função para acessar os Aplicativos.



                        Posso desativar as funções de Touch ID, Face ID e Fingerprint para logar nos Aplicativos? Como funciona?

                        Sim, é possível desabilitar o acesso com o Touch ID, Face ID e Fingerprint nas configurações da área logada do Aplicativo. Já a alteração da impressão digital ou face cadastrada deve ser feita nas configurações do sistema operacional do seu celular ou dispositivo.

                        Não temos acesso às informações de impressão digital ou de reconhecimento facial cadastradas em seu celular ou dispositivo para acessar os Aplicativos, pois estas informações são mantidas apenas pelas empresas desenvolvedoras dos sistemas operacionais, de acordo com os termos de uso e as políticas de privacidade de cada empresa.




                        4. CONTEÚDOS ENVIADOS POR USUÁRIOS

                        Alguns de nossos Sites e Aplicativos podem permitir que os Usuários enviem conteúdos como comentários, imagens, mensagens, fotos etc., para divulgação em áreas de conteúdo aberto dos Sites e dos Aplicativos. Para estes casos, os conteúdos enviados e a identificação do seu perfil, se houver, poderão ser visualizados por outros Usuários, atendendo sempre às normas de sigilo bancário.

                        Pode também ser possível ao Usuário enviar conteúdo, como fotos, documentos, comentários e outras mensagens para fins de cadastro, atendimento, uso de serviços disponíveis nos Sites e Aplicativos ou outras finalidades. Nesses casos, os conteúdos enviados não ficarão disponíveis em áreas de conteúdo aberto dos Sites e Aplicativos.

                        Lembramos que, em qualquer dos casos, os conteúdos enviados serão de responsabilidade de quem os enviou.




                        5. LINKS PARA SITES E APLICATIVOS DE TERCEIROS

                        Nossos Sites e Aplicativos podem conter links para sites e aplicativos de terceiros. Note que dentro destes sites e aplicativos você estará sujeito a outros termos de uso e a outras políticas de privacidade. Nossos Termos de Uso e Política de Privacidade não são válidos nos sites e aplicativos de terceiros. A existência desses links não significa nenhuma relação de endosso ou de patrocínio entre a AMP e esses terceiros, e a AMP não tem nenhuma responsabilidade com relação a tais terceiros.




                        6. COMO NOSSOS SITES E APLICATIVOS NÃO DEVEM SER UTILIZADOS

                        Fique atento às seguintes práticas que vão contra as nossas condições de uso:

                        · Praticar qualquer ato ilícito, violar direitos da AMP ou de terceiros e violar a legislação vigente;

                        · Upload, envio ou transmissão de qualquer conteúdo erótico, pornográfico, obsceno, calunioso, difamatório, de violência física ou moral, com apologia ao crime, uso de drogas, consumo de bebidas alcoólicas ou produtos para fumo, bem como que promova ou incite o ódio, atividades ilegais, o preconceito ou qualquer outra forma de discriminação por qualquer motivo;

                        · Usar qualquer sistema/aplicação automatizada para realizar consultas, acessos ou qualquer outra operação massificada, para qualquer finalidade, sem autorização da AMP;

                        · Praticar atos que prejudiquem qualquer Site, Aplicativo e equipamento da AMP e de outros Usuários e terceiros, incluindo por meio de vírus, trojans, malware, worm, bot, backdoor, spyware, rootkit, ou qualquer outro meio com este fim.




                        7. RESPONSABILIDADES

                        Você como Usuário é responsável:

                        · Por todas as suas ações ou omissões realizadas nos nossos Sites e Aplicativos;

                        · Pelos conteúdos que você enviou e/ou transmitiu nos Sites e Aplicativos; e

                        · Pela reparação de danos causados a AMP, terceiros ou outros Usuários, a partir do seu acesso e uso dos nossos Sites e Aplicativos.

                        Desta forma, não nos responsabilizamos pelos itens citados acima e tampouco por indisponibilidades e falhas técnicas do sistema dos Sites e Aplicativos. Considere também que conteúdos enviados e/ou transmitidos por Usuários e/ou terceiros não representam a opinião ou a visão da AMP.




                        8. PROPRIEDADE INTELECTUAL

                        Os seguintes itens pertencem a AMP Promotora e somente podem ser usados com sua prévia e expressa autorização:

                        · Todos os softwares, aplicativos ou funcionalidades criados, produzidos ou contratados pela AMP para os Sites e Aplicativos, assim como sua identidade visual e conteúdo;

                        · Os nomes das empresas, marcas, patentes, nomes de domínio, slogans, propagandas ou qualquer sinal utilizado para distinguir o que é da AMP inseridos nos Sites e Aplicativos.

                        No caso de conteúdos que você enviar ou transmitir pelos Sites e Aplicativos, você autoriza a AMP a utilizar os direitos intelectuais sobre eles em caráter irrevogável, sem qualquer restrição ou limitação de qualquer natureza. Mas não se preocupe: a utilização, pela AMP Promotora, destes conteúdos enviados por você observará o previsto no item 4 dos nossos Termos de Uso. Você também garante que os conteúdos por você enviados não infringem direitos de terceiros.




                        9. SUSPENSÃO DE ACESSO

                        A qualquer momento, sem aviso prévio ou posterior, a AMP poderá suspender, cancelar ou interromper o acesso aos Sites e Aplicativos, inclusive se o uso destes canais contrariar o disposto neste documento.



                        

                        10. LEGISLAÇÃO APLICÁVEL

                        A legislação brasileira é aplicável a estes Termos de Uso e Política de Privacidade.



                        

                        POLÍTICA DE PRIVACIDADE

                        A privacidade, a proteção de Dados Pessoais e o seu tratamento de forma transparente, ética, segura e responsável são valores essenciais para nós.

                        Esta Política de Privacidade (ou apenas “Política”) explica como a AMP, na qualidade de Controladora de Dados Pessoais, coleta, usa, compartilha ou de outra forma trata informações e Dados Pessoais de pessoas físicas, inclusive de clientes e de terceiros, para o desempenho de nossas atividades, incluindo pelos nossos Sites e Aplicativos. Aqui você também encontra informações sobre os seus direitos em relação aos seus Dados Pessoais, de acordo com a LGPD - Lei Geral de Proteção de Dados Pessoais (Lei nº 13.709/18), e demais legislações aplicáveis.





                        ÍNDICE

                        Política de Privacidade

                        1. Atualização da Política de Privacidade

                        2. Quais informações utilizamos e como as coletamos?

                        3. Para que usamos os seus dados?

                        4. As informações podem ser compartilhadas?

                        5. Sobre os Cookies

                        6. Transferência internacional de dados

                        7. Por quanto tempo mantemos seus dados?

                        8. Segurança dos dados

                        9. Seus direitos

                        10. Encarregado de Proteção de Dados

                        11. Glossário




                        1. ATUALIZAÇÃO DA POLÍTICA DE PRIVACIDADE

                        Sempre que a AMP entender necessário, a Política de Privacidade poderá sofrer alterações que serão publicadas em nossos Sites e Aplicativos. Essas alterações serão válidas, eficazes e vinculantes após a nova versão ser divulgada nos nossos Sites e Aplicativos ou serem comunicadas de qualquer outra forma a você.




                        2. QUAIS INFORMAÇÕES UTILIZAMOS E COMO AS COLETAMOS?

                        Nós tratamos Dados Pessoais de quem é ou foi nosso cliente ou teve algum relacionamento conosco, foi ou é representante, procurador, empregado, sócio de algum cliente, empresa ou entidade com a qual nos relacionamos, realizou alguma transação conosco ou com nossos clientes, de pessoas com as quais pretendemos nos relacionar ou outros titulares de Dados Pessoais.

                        Os Dados Pessoais que tratamos variam de acordo as finalidades de uso, inclusive as indicadas nessa Política, e com as atividades que realizamos. Esses Dados Pessoais incluem dados cadastrais, financeiros e transacionais, tais como:



                        · Dados cadastrais: nome, data de nascimento, sexo, RG, CPF e/ou outros documentos de identificação, tais como carteira de habilitação, foto, endereço residencial e comercial, telefones residencial, comercial e celular, e-mail, profissão, ocupação, estado civil, nacionalidade, naturalidade, PEP – pessoa politicamente exposta, entre outros.

                        · Dados Pessoais Sensíveis: dados biométricos, inclusive facial e/ou digital, ou outros dados pessoais sensíveis, de acordo com a legislação aplicável.  Recebemos informações sobre validação biométrica de terceiros que prestam serviço de autenticação e validação da identidade, para fins de prevenção à fraude e segurança.

                        · Dados financeiros e transacionais: informações sobre operações e transações bancárias, financeiras e de pagamento, produtos e serviços contratados ou que se pretenda contratar e sua utilização (inclusive  produtos financeiros, bancários, de crédito, financiamento, câmbio, investimento, seguros, previdência, capitalização, consórcio, cartão de crédito e serviços de pagamento, entre outros; nossos ou de outras instituições financeiras)

                        · Dados sobre terceiros: filiação, representantes, representados, garantidor, contrapartes, procuradores, colaboradores, sócios ou beneficiários de produtos e serviços, como por exemplo de seguros, previdência, cartão de crédito e pagamento.

                        · Informações sobre seus dispositivos: informações sobre o seu dispositivo (tais como Advertising ID e informações técnicas, como sistema operacional, tamanho de tela), conexão (tais como data, hora e Endereço IP, rede utilizada), identificação do dispositivo, uso do dispositivo. Também poderemos coletar, se você nos autorizar pelos nossos Aplicativos, sua geolocalização, para usarmos para prevenção à fraude e segurança, proteção do crédito, indicarmos dependências próximas e fazermos ofertas de produtos e serviços para você.

                        · Informações que acessamos para te entregar uma funcionalidade: caso você autorize e para possibilitar determinadas funcionalidades de nossos Sites e Aplicativos, como quando tratamos suas fotos e dados de contatos para a criação e envio de comprovantes de pagamento.

                        · Informações sobre hábitos de navegação: páginas e funcionalidades acessadas em nossos Sites e Aplicativos, quantidade de cliques, páginas e aplicativos que originaram o acesso aos nossos Sites e Aplicativos (por exemplo, se você acessar um site que possuir um link para os nossos Sites e Aplicativos, ou se você acessar páginas de terceiros a partir de links nos nossos Sites e Aplicativos).

                        · Dados de mídias e plataformas sociais: interações que você possa ter com nossas redes sociais, tais como Facebook, Twitter, Instagram, LinkedIn e YouTube.

                        · Dados relacionados a situação financeira: podemos acessar os dados sobre sua situação financeira ou de crédito, tais como renda, patrimônio, negativação, dados do cadastro positivo, inclusive dados detalhados de cadastro positivo ou dados de Sistema de Informações de Crédito do Banco Central, de acordo com a legislação aplicável.

                        Os dados podem ser fornecidos diretamente por você, serem coletados em decorrência da prestação de serviços ou fornecimento de produtos pela AMP a você (ou a você relacionados), ou podem ser fornecidos por fontes externas legítimas, como parceiros estratégicos, corretoras, inclusive de valores e seguros, fornecedores, prestadores de serviços, outras instituições do sistema financeiro, bureaus de crédito, órgãos públicos, correspondentes e empresas ou órgãos com os quais a AMP ou você possua vínculo ou algum tipo de relação direta ou indireta. Também podemos obter Dados Pessoais e outras informações de fontes públicas e/ou acessíveis publicamente, como Internet, meios de comunicação, mídias sociais e registros públicos e de outras fontes, conforme permitido na legislação aplicável.

                        A seguir, indicamos alguns exemplos dessas situações.



                        · Dados podem ser fornecidos por você, por exemplo, no preenchimento de cadastros, formulários, propostas, simulações, adesões, contratações, acessos, procura ou manifestação de interesse em produtos e serviços.

                        · Dados que geramos sobre você decorrentes do seu relacionamento com os bancos, como por exemplo informações sobre contratação e uso de produtos e serviços ou quando você interage conosco pelos nossos Sites, Aplicativos, canais, estabelecimentos, centrais e locais de atendimento.

                        · Dados recebidos de terceiros são aqueles fornecidos por terceiros sobre você, inclusive por empresas ou órgãos com os quais a AMP ou você tenha alguma relação, bem como fornecedores e parceiros. Alguns exemplos de casos em que isso ocorre são:



                        · Alguém realiza uma transação financeira com você, como uma transferência bancária ou pagamento de boleto;

                        · Quando você é beneficiário ou Usuário de algum produto contratado por um terceiro, como cartão, seguro ou previdência;

                        · A empresa ou órgão em que você trabalha nos fornece informações sobre você para o fornecimento de produtos e serviços a você, como para o pagamento do seu salário, para concessão ou consignação de crédito ou produtos de previdência;

                        · Realizamos o pagamento de benefícios originados de órgãos públicos;

                        · Um cliente, contraparte, parceiro ou prestador de serviços indica você como seu sócio, representante, empregado, procurador ou contato;

                        · Um parceiro ou prestador de serviços nos fornece informações sobre você para a oferta ou contratação de produtos e serviços;

                        · Parceiros compartilham informações sobre seus hábitos de consumo para a análise de crédito para viabilizar oferta e/ou a contratação de produtos e serviços. 

                        · Buscamos informações sobre você ou confirmamos informações que você nos fornece para as nossas atividades, como realizar ou melhorar o seu cadastro e sua experiência, prevenir fraudes e cumprir outras obrigações legais;

                        · Quando você nos autoriza a acessar e utilizar seus dados fornecidos por outras instituições por meio do Open Finance como, por exemplo, dados cadastrais, financeiros, de seguros e previdência.




                        3.PARA QUE USAMOS OS SEUS DADOS?

                        A AMP realiza o tratamento de dados pessoais de acordo com as bases legais previstas na Lei Geral de Proteção de Dados (LGPD), como por exemplo, para cumprimento de obrigações legais e regulatórias; execução de contrato; proteção do crédito; para atender os interesses legítimos da AMP, dos nossos clientes e de terceiros; proteção da vida ou da incolumidade física do Titular ou de terceiros; nas situações em que o consentimento do Titular dos Dados Pessoais for coletado e para o exercício regular de direitos.

                        Poderemos tratar Dados Pessoais e outras informações para diversas finalidades relacionadas ao desempenho das atividades, conforme exemplos descritos abaixo:

                        · Realizar as nossas atividades, prestar os nossos serviços e fornecer os nossos produtos no nosso relacionamento com você:

                        · Realizar e manter o seu cadastro atualizado, verificar sua identidade e eventuais outras informações;

                        · Dar cumprimento e realizar ações relacionadas ao contrato, inclusive etapas anteriores à contratação, durante e após a contratação. Atividades como avaliação de propostas de contratação, atendimento nos nossos canais e processos operacionais para garantir a melhor experiência e atendimento para os nossos clientes;

                        · Atender os nossos clientes, potenciais clientes e terceiros, inclusive tratando dúvidas, reclamações, sinistros, solicitações e suporte pelos nossos canais de atendimento, possibilitando o seu contato conosco sempre que necessário, e o contrário também;

                        · Envio de comunicações sobre produtos e serviços contratados por você, necessários para o cumprimento do contrato;

                        · Avaliações e exercício regular de direitos necessários para execução de contratos, como por exemplo, informações sobre a sua saúde necessárias para a contratação de determinados produtos, como de seguros, ou ainda para a avaliação de sinistros relacionados;

                        · Entender os nossos clientes e oferecer produtos mais adequados às suas necessidades e perfil:

                        · Analisar informações demográficas e de interesses dos Usuários, por meio de ferramentas de analytics como Google Analytics e Facebook Ads, visando compreender o público-alvo das campanhas de publicidade;

                        · Avaliar os comportamentos de navegação e o perfil dos Usuários e clientes, inclusive para entender se o Usuário chegou até os Sites e Aplicativos por meio de acesso direto, links ou cookies próprios ou de terceiros, por exemplo;

                        · Realizar campanhas de marketing e utilizar tecnologias da informação e soluções de propaganda online;

                        · Realizar pesquisas com o público para melhoria dos nossos produtos, serviços, atendimento e iniciativas.

                        · Realizar análises estratégicas de produtos e serviços contratados em outras instituições financeiras para evolução dos nossos próprios produtos e serviços e para oferecer produtos e serviços mais adequados ao seu perfil.

                        · Segurança e risco:

                        · Identificar, prevenir e gerenciar eventuais riscos de segurança, física ou cibernética, sua, da AMP ou de terceiros;

                        · Prevenir fraudes e garantir a segurança, inclusive com utilização de sua biometria (facial, digital ou outra), bem como sua geolocalização, em quaisquer produtos, serviços, Sites e Aplicativos da AMP, para processos de identificação e/ou autenticação em sistemas eletrônicos próprios ou de terceiros, que também podem ser Controladores de Dados Pessoais, inclusive pelo desenvolvimento e/ou uso de ferramentas antifraude;

                        · Analisar perfil, identificar, gerenciar e tratar potenciais riscos na oferta e contratação de produtos e/ou serviços e nas demais atividades da AMP, como os riscos de crédito, riscos operacionais, riscos reputacionais, riscos de mercado, entre outros riscos. Monitorando esses riscos também estamos cuidando da segurança dos nossos clientes;

                        · Atividades relacionadas à proteção do crédito, como avaliação e gerenciamento de risco de crédito, avaliação de situação financeira e patrimonial, cobrança, cessão de crédito, atividades relacionadas à informação e consulta a entidades de proteção ao crédito e cadastro positivo, entre outras.

                        · Cumprimento de obrigações legais e regulatórias:

                        · Cumprir obrigações legais, regulatórias e de autorregulação, como por exemplo: atividades de auditoria interna e compliance, prevenção aos crimes de lavagem de dinheiro e financiamento ao terrorismo e outros ilícitos, atividades de know your client – KYC e outras atividades de gerenciamento de riscos, reportes à Receita Federal, medidas de prevenção à fraude, prestação de informações ao Banco Central e outros órgãos competentes, do Brasil e do exterior, para cumprimento de normas, comunicação de operações suspeitas ao Coaf, prova de vida de beneficiário do INSS, avaliação de representantes legais e sócios de empresas, entre outras atividades;

                        · Cumprir ordens e decisões judiciais, administrativas e arbitrais.

                        · Proteger os seus direitos, da AMP e de terceiros:

                        · Para o exercício regular de direitos, inclusive em contratos e processos judiciais, extrajudiciais, administrativos ou arbitrais.

                        · Manter, criar e melhorar as nossas atividades:

                        · Analisar, criar e aperfeiçoar os nossos produtos, serviços, atividades, sejam internas ou externas, iniciativas, projetos, recursos e funcionalidades das nossas plataformas, Sites e Aplicativos, inclusive para melhorar o seu acesso e utilização e fornecer a melhor experiência para você;

                        · Medir e entender a interação dos Usuários e clientes conosco, inclusive em redes sociais e em nossos canais, assim como a utilização dos nossos produtos, serviços, atividades, iniciativas, Sites e Aplicativos e a satisfação dos Usuários e clientes. Assim podemos criar, manter e melhorar os nossos produtos, serviços e nossos canais de atendimento;

                        · Execução de processos de negócios, gerenciamento interno e gerencial. Tratamos seus dados para nossas atividades e para nos ajudar a tomar melhores decisões sobre nossas operações, negócios, serviços, produtos, atividades e iniciativas;

                        · Atividades relacionadas à contratação e relacionamento com fornecedores, prestadores de serviços e outros terceiros.

                        · Outras situações de Tratamento baseadas em finalidades legítimas, como por exemplo o apoio e promoção de atividades da AMP ou para a prestação de serviços que beneficiem os nossos clientes.

                        · Promover eventos, realizar patrocínios e outras atividades e iniciativas.




                        4. AS INFORMAÇÕES PODEM SER COMPARTILHADAS?

                        A AMP somente compartilha suas informações quando é necessário ou pertinente para as finalidades previstas nos contratos com os nossos clientes e nessa Política de Privacidade, dentro de padrões rígidos de segurança, sempre visando a confidencialidade das suas informações e seguindo as normas de sigilo bancário e demais normas de proteção de dados e da privacidade.

                        Exemplos de situações de compartilhamento são:

                        · Com parceiros estratégicos, inclusive para oferta, contratação e uso de produtos e serviços destes, ou ainda desenvolvidos em conjunto ou que possam ter um benefício para você;

                        · Com prestadores de serviços, fornecedores, corretoras, inclusive de valores e seguros, e correspondentes contratados pela AMP para o desenvolvimento de nossas atividades;

                        · Com órgãos reguladores, outras entidades públicas, instituições do sistema financeiro e terceiros, inclusive para cumprimento e execução de obrigações legais, regulatórias e contratuais e para a proteção e o exercício regular de direitos;

                        · Para cumprimento de requisições, solicitações e decisões de autoridades judiciais, administrativas ou arbitrais;

                        · Para identificação, prevenção e investigação de possíveis infrações ou atos ilícitos (inclusive fraude, lavagem de dinheiro e financiamento ao terrorismo);

                        · Para prevenir riscos, fraudes e garantir a segurança, inclusive com utilização de sua biometria (facial, digital ou outra) em processos de identificação e/ou autenticação em sistemas eletrônicos próprios ou de terceiros, que também são Controladores de Dados Pessoais;

                        · Situações em que o compartilhamento seja relevante ou necessário para criação, oferta, manutenção, funcionamento e melhoria dos nossos Sites e Aplicativos, bem como das atividades, das iniciativas e dos produtos e serviços da AMP e de parceiros estratégicos;

                        · Com bureaus de crédito, inclusive de acordo com o disposto na legislação aplicável, como para cumprimento da legislação do cadastro positivo, nos casos de negativação, entre outros;

                        · Com outras instituições financeiras, inclusive quando necessário, para o processamento de alguma transação ou outras atividades para execução de contrato;

                        · Compartilhamento de informações anonimizadas, agrupadas, de cookies ou de outras informações ou formas que não possibilitem a identificação pessoal dos Titulares de Dados;

                        · Nos casos de aquisição, fusão ou outras reorganizações societárias;

                        · Situações em que o seu consentimento pode ser necessário e, caso seja, solicitaremos o seu consentimento oportunamente.




                        5. SOBRE OS COOKIES

                        Os cookies permitem a coleta de dados relacionadas à navegação dependendo do tipo de dispositivo usado, das autorizações concedidas por você através das configurações de seu dispositivo e das funcionalidades utilizadas em cada aplicação. Podemos utilizar cookies próprios ou de terceiros em nossos Sites e Aplicativos.



                        O que são cookies?

                        São pequenos arquivos de texto que podem ou não ser adicionados no navegador do dispositivo. Estes arquivos armazenam e reconhecem dados que garantem o correto funcionamento dos Sites e Aplicativos e nos ajudam a identificar suas preferências e melhoras suas experiências.



                        Tipos de cookies e suas finalidades

                        Os cookies podem coletar dados para diferentes finalidades relacionadas às funcionalidades de nossos Sites e Aplicativos. Confira a seguir os tipos que utilizamos:

                        · Funcionamento: para garantir o correto acesso e funcionamento das aplicações;

                        · Autenticação: para reconhecer o Usuário, possibilitando o seu acesso, inclusive, a áreas de acesso restrito e utilizados também para oferecer conteúdo, ofertas e/ou serviços de parceiros estratégicos;

                        · Segurança: para auxiliar no monitoramento e detecção de atividades não autorizadas, na prevenção à fraude e na proteção das informações dos Usuários, suas, da AMP e de terceiros;

                        · Pesquisa, análise e desempenho: para verificar, medir e analisar a audiência, o desempenho, a utilização das aplicações pelos Usuários;

                        · Propaganda: para apresentar publicidade relevante da AMP e de parceiros de acordo com o perfil do Usuário e para saber se os Usuários a visualizaram, tanto em nossos ambientes quanto em sites e aplicativos de parceiros. Também podem ser utilizados para lembrar eventuais pesquisas realizadas pelos Usuários, e com base no resultado dessas pesquisas, mostrar anúncios ou ofertas de produtos, serviços e iniciativas de seu interesse.



                        Posso desativar os cookies e as outras formas de coleta de informações?

                        Você pode desativar ou excluir os cookies, bem como demais tecnologias de coleta de dados, nas configurações do seu navegador e nas configurações do sistema operacional do seu dispositivo, com exceção dos cookies de funcionamento que, se desativados, não permitirão o uso dos Sites e Aplicativos.

                        Apenas lembramos que se determinados cookies forem desabilitados, os Sites ou Aplicativos ou alguns de seus recursos ou funcionalidades poderão não funcionar corretamente.




                        6. TRANSFERÊNCIA INTERNACIONAL DE DADOS

                        Os seus Dados Pessoais poderão ser transferidos e tratados em outros países, de acordo com as hipóteses previstas na LGPD e legislação aplicável, para as finalidades previstas nesta Política de Privacidade.

                        Por exemplo, os dados podem ser transferidos para o exterior caso seja necessário para a execução de contrato (como transações de cartão de crédito realizadas no exterior ou transações de cartões estrangeiros realizadas no Brasil, câmbio e outras operações bancárias, financeiras, securitárias e de investimento com outras empresas da AMP no exterior ou outras instituições financeiras); para o cumprimento de obrigações legais e regulatórias da AMP; para o exercício regular de direitos em processos administrativos, judiciais ou arbitrais ou para a investigação de crimes e outros ilícitos. Ainda, a transferência internacional de dados pode ocorrer para o desenvolvimento das atividades da AMP, mediante a adoção de medidas de proteção dos Dados Pessoais.




                        7. POR QUANTO TEMPO MANTEMOS SEUS DADOS?

                        O prazo pelo qual a AMP mantém os Dados Pessoais coletados depende do propósito e da natureza do tratamento dos dados. Nós trataremos seus dados pelo período necessário para o cumprimento de obrigações legais, regulatórias e contratuais, para continuar a fornecer e aprimorar nossos produtos e serviços, para o gerenciamento de riscos, para o exercício regular de direito em processos administrativos, judiciais e arbitrais e para as demais finalidades previstas nesta Política de Privacidade.




                        8. SEGURANÇA DOS DADOS

                        A segurança e proteção de dados pessoais e das informações da AMP é uma prioridade para nós. A AMP estabelece processos e controles para prevenção, detecção e resposta a incidentes e proteção dos seus dados de acessos e usos não autorizados, garantindo a gestão do risco de segurança, inclusive cibernética, e a construção de um alicerce robusto de segurança.

                        Consideramos que a informação deve ser protegida independentemente de onde ela esteja, seja em um prestador de serviço ou em uma unidade internacional, ou em parceiro, em todo o seu ciclo de vida, desde o momento que ela é coletada, passando pelo processamento, transmissão, armazenamento, análise e seu descarte.

                        Cuidamos dos dados seguindo padrões rígidos de segurança e confidencialidade, para fornecer aos nossos usuários e clientes um ambiente seguro e confiável. Usamos ferramentas e tecnologias para manter a integridade e confidencialidade das informações e protegê-las de acessos não autorizados.

                        Adicionalmente, restringimos o acesso aos dados na medida necessária, com rígidas obrigações de confidencialidade e sigilo e mediante a adoção de critérios de segurança.

                        As diretrizes de proteção dos dados da organização, dos clientes e do público em geral estão formalizadas na Política Corporativa de Segurança da Informação e Cyber Security.




                        9. SEUS DIREITOS

                        A LGPD garante direitos aos Titulares dos Dados. Como Titular dos seus Dados Pessoais, você pode nos fazer os seguintes requerimentos:

                        · Acesso e confirmação da existência de tratamento dos dados pessoais;

                        · Atualização, correção de dados incompletos, inexatos ou desatualizados

                        · Anonimização, bloqueio ou eliminação de dados desnecessários, excessivos ou tratados em desconformidade com o disposto na LGPD;

                        · Portabilidade dos dados, observadas as normas aplicáveis e os segredos comercial e industrial;

                        · Informação das entidades públicas e privadas com as quais o Controlador realizou uso compartilhado de dados

                        · Informação sobre a possibilidade de não fornecer consentimento e sobre as consequências da negativa;

                        · Revogação de consentimento que poderá ser realizada a qualquer momento e sem ônus, mediante manifestação expressa;

                        · Solicitar a eliminação dos Dados Pessoais Tratados com o consentimento, exceto nas hipóteses em que a manutenção dos dados é necessária ou permitida pela legislação;

                        · Oposição a Tratamento realizado com fundamento em outras bases legais, em caso de descumprimento da LGPD, ressaltando que pode haver situações em que poderemos continuar a realizar o Tratamento e recusar o seu pedido de oposição;

                        · Solicitar a revisão de decisões tomadas unicamente com base em Tratamento automatizado de Dados Pessoais que o afetem, como decisões de crédito;

                        · Solicitar o cancelamento do envio de ofertas direcionadas de produtos e serviços da AMP pelos nossos canais.

                        Para exercer seus direitos sobre os seus Dados Pessoais, você pode acionar os nossos canais de atendimento.

                        Reforçamos que poderemos manter alguns dados e/ou continuar a realizar o Tratamento, mesmo no caso de solicitação de eliminação, oposição, bloqueio ou anonimização, em algumas circunstâncias, como para cumprimento de obrigações legais, contratuais e regulatórias, para resguardar e exercer direitos da AMP, dos Usuários e clientes, para prevenção de atos ilícitos e em processos judiciais, administrativos e arbitrais, inclusive por questionamento de terceiros sobre suas atividades e em outras hipóteses previstas em lei.




                        10. ENCARREGADO DE PROTEÇÃO DE DADOS

                        Para obter mais informações sobre a Política ou sobre como tratamos os seus dados pessoais, você pode entrar em contato no e-mail com o título “aos cuidados do Encarregado”.




                        GLOSSÁRIO

                        Os termos abaixo são usados nos nossos Termos de Uso e Política de Privacidade.

                        · Controlador: pessoa natural ou jurídica, de direito público ou privado, a quem competem as decisões referentes ao Tratamento de Dados Pessoais.

                        · Dado Pessoal: informação relacionada a pessoa natural identificada ou identificável.

                        · Dado Pessoal Sensível: dado pessoal sobre origem racial ou étnica, convicção religiosa, opinião política, filiação a sindicato ou a organização de caráter religioso, filosófico ou político, dado referente à saúde ou à vida sexual, dado genético ou biométrico, quando vinculado a uma pessoa natural.

                        · Endereço de Protocolo de Internet (Endereço IP): código atribuído a um terminal de uma rede para permitir sua identificação, definido segundo parâmetros internacionais.

                        · Sites e Aplicativos: sites e aplicativos da AMP que podem ser acessados por Usuários.

                        · Titular de Dados Pessoais: pessoa natural a quem se referem os dados pessoais que são objeto de tratamento.

                        · Tratamento: toda operação realizada com Dados Pessoais, como as que se referem a coleta, produção, recepção, classificação, utilização, acesso, reprodução, transmissão, distribuição, processamento, arquivamento, armazenamento, eliminação, avaliação ou controle da informação, modificação, comunicação, transferência, difusão ou extração.

                        · Usuários: todas as pessoas que visitarem e acessarem os Sites e Aplicativos. Também podemos nos referir ao Usuário e ao Titular de Dados Pessoais como “você”.


                    </textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/controller/simulacaoController.js"></script>
    <script src="assets/js/simulacao.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>