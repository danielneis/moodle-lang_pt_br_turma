<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'certificate', language 'pt_br', branch 'MOODLE_28_STABLE'
 *
 * @package   certificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Incluir uma outra opção de atividade';
$string['addlinktitle'] = 'Clique para incluir outra opção de atividade';
$string['areaintro'] = 'Introdução do certificado';
$string['awarded'] = 'Conquistado';
$string['awardedto'] = 'Conquistado para';
$string['back'] = 'Voltar';
$string['border'] = 'Borda';
$string['borderblack'] = 'Preto';
$string['borderblue'] = 'Azul';
$string['borderbrown'] = 'Marrom';
$string['bordercolor'] = 'Linhas da borda';
$string['bordercolor_help'] = 'Uma vez que as imagens podem aumentar significativamente o tamanho do arquivo PDF, você pode optar por imprimir uma borda de linhas ao invés de utilizar uma imagem de borda (verifique se a opção Imagem de Borda está definida como Não). As Linhas de Borda irão imprimir uma borla de três linhas de diferentes larguras na cor selecionada.';
$string['bordergreen'] = 'Verde';
$string['borderlines'] = 'Linhas';
$string['borderstyle'] = 'Imagem da borda';
$string['borderstyle_help'] = 'A opção Imagem de Borda permite que você escolha uma imagem a partir da pasta certificate/pix/borders. Seleciona a imagem de borda que você deseja em torno das bordas do certificado ou selecione Nenhuma Borda.';
$string['certificate'] = 'Código para verificação do certificado:';
$string['certificate:addinstance'] = 'Adicionar uma nova instância do certificado';
$string['certificate:manage'] = 'Administrar uma instância do certificado';
$string['certificatename'] = 'Nome do certificado';
$string['certificate:printteacher'] = 'Ser listado como professor no certificado se a opção de impressão do professor estiver ativada';
$string['certificatereport'] = 'Relatório de Certificados';
$string['certificatesfor'] = 'Certificados para';
$string['certificate:student'] = 'Obter um certificado';
$string['certificatetype'] = 'Tipo do certificado';
$string['certificatetype_help'] = 'Aqui é onde você determina o layout do certificado. A pasta do tipo de certificado inclui quatro modelos padrão:
Incorporada em A4: Impressões em tamanho A4 com fontes incorporadas.
Não-incorporada em A4: Impressões em tamanho A4 sem fontes incorporadas.
Carta incorporada: impressões em papel tamanho carta com fontes incorporadas.
Carta não incorporada: impressões em papel tamanho carta sem fontes incorporadas.

Os tipos de certificado sem fontes incorporadas usam as fontes Helvetica e Times. Se você achar que os seus usuários não terão essas fontes em seus computadores, ou que a linguagem requer símbolos não disponíveis nas fontes Helvetica e Times, use os modelos de com fontes incorporadas.

Pastas com novos modelos podem ser adicionadas a certificate/type. O nome da pasta e qualquer novas strings de linguagem devem ser adicionados no arquivo de linguagem do certificado.';
$string['certificate:view'] = 'Ver um certificado';
$string['certify'] = 'Certificamos que';
$string['code'] = 'Código';
$string['completiondate'] = 'Conclusão de Turma';
$string['course'] = 'Para';
$string['coursegrade'] = 'Notas da turma';
$string['coursename'] = 'Curso';
$string['coursetimereq'] = 'Requer tempo mínimo de turma';
$string['coursetimereq_help'] = 'Digite aqui a quantidade mínima de tempo, em minutos, que um estudante precisa estar logado na turma para que ele esteja apto a receber o certificado.';
$string['credithours'] = 'Carga-horária';
$string['customtext'] = 'Texto personalizado';
$string['customtext_help'] = 'Se você deseja que o certificado imprima nomes diferentes para professores do que aqueles que são designados para a função de professor, não selecionar professor de impressão ou qualquer imagem de assinatura, exceto para a imagem de linha. Digite os nomes dos professores nesta caixa de texto como você gostaria que eles apareçam. Por padrão, o texto é colocado no canto inferior esquerdo do certificado. As seguintes tags HTML estão disponíveis: <p>, <br>, <b>, <i>, <u>, <img> (src e width (ou height) são obrigatórios), <a> (href é obrigatório), <font> (atributos possíveis são: cor, (código de cor hexadecimal), fontes, (Arial, Times, Courier, Helvetica, símbolo)).';
$string['date'] = 'Em';
$string['datefmt'] = 'Formato da data';
$string['datefmt_help'] = 'Escolha um formato de data para imprimir a data no certificado. Ou, escolha a última opção para imprimir a data no formato da linguagem escolhida pelo usuário.';
$string['datehelp'] = 'Data';
$string['deletissuedcertificates'] = 'Excluir certificados emitidos';
$string['delivery'] = 'Entrega';
$string['delivery_help'] = 'Escolha aqui como você gostaria que seus alunos obtenham o seu certificado. Abrir no navegador: Abre o certificado em uma nova janela do navegador. Força Download: Abre a janela do navegador de download de arquivos. Certificado e-mail: Escolhendo esta opção envia o certificado para o aluno como um anexo de e-mail. Depois que um usuário recebe seu certificado, se clicar no link certificado da página principal da turma, eles vão ver a data em que recebeu o seu certificado e será capaz de rever o seu certificado recebido.';
$string['designoptions'] = 'Opções de design';
$string['download'] = 'Forçar download';
$string['emailcertificate'] = 'Email (Deve também escolher salvar!)';
$string['emailothers'] = 'Outros e-mails';
$string['emailothers_help'] = 'Insira os endereços de e-mails aqui, separados por vírgula, daqueles que devem ser alertados com um e-mail sempre que alunos receberem um certificado.';
$string['emailstudenttext'] = 'Em anexo está o seu certificado para {$a->course}.';
$string['emailteachermail'] = '{$a->student} recebeu seu certificado: \'{$a->certificate}\'  para  {$a->course}.

Você pode revê-lo aqui:
  {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} recebeu seu certificado: <i>\'{$a->certificate}\'</i> para {$a->course}.

Você pode revê-lo aqui:

<a href="{$a->url}">Certificado</a> .';
$string['emailteachers'] = 'E-mail professores';
$string['emailteachers_help'] = 'Se ativado, os professores receberão um e-mail sempre que os alunos receberem um certificado.';
$string['entercode'] = 'Entre o código do certificado para verificar:';
$string['fontsans'] = 'Família de fontes Sans-serif';
$string['fontsans_desc'] = 'Família de fontes Sans-serif para certificados com fontes incorporadas';
$string['fontserif'] = 'Família de fontes Serif';
$string['fontserif_desc'] = 'Família de fontes Serif para certificados com fontes incorporadas';
$string['getcertificate'] = 'Obtenha o seu certificado';
$string['grade'] = 'Nota';
$string['gradedate'] = 'Data da nota';
$string['gradefmt'] = 'Formato da nota';
$string['gradefmt_help'] = 'Existem três formatos disponíveis se você optar por imprimir uma nota no certificado:

Nota Percentual: Imprime a nota como uma porcentagem.
Nota em Pontos: Imprime o valor do ponto da nota. Nota em Letras: Imprime a nota percentual como uma letra.';
$string['gradeletter'] = 'Nota em Letra';
$string['gradepercent'] = 'Nota Percentual';
$string['gradepoints'] = 'Nota em Pontos';
$string['imagetype'] = 'Tipo da imagem';
$string['incompletemessage'] = 'Para fazer o download do certificado, você deve primeiro preencher todas as atividades necessárias. Por favor retorne para a turma para concluí-lo.';
$string['intro'] = 'Introdução';
$string['issued'] = 'Emitido';
$string['issueddate'] = 'Data de emissão';
$string['issueoptions'] = 'Opções de emissão';
$string['landscape'] = 'Paisagem';
$string['lastviewed'] = 'Você recebeu este certificado pela última vez em:';
$string['letter'] = 'Carta';
$string['lockingoptions'] = 'Bloquear Opções';
$string['modulename'] = 'Certificado';
$string['modulenameplural'] = 'Certificados';
$string['mycertificates'] = 'Meus certificados';
$string['nocertificates'] = 'Não existem certificados';
$string['nocertificatesissued'] = 'Não há certificados que foram emitidos';
$string['nocertificatesreceived'] = 'Ainda não recebeu os certificados da turma.';
$string['nofileselected'] = 'Você deve escolher um arquivo para enviar!';
$string['nogrades'] = 'Nenhuma nota disponível';
$string['notapplicable'] = 'N/A';
$string['notfound'] = 'O número do certificado não pôde ser validado.';
$string['notissued'] = 'Não emitido';
$string['notissuedyet'] = 'Ainda não emitido';
$string['notreceived'] = 'Você não recebeu este certificado';
$string['openbrowser'] = 'Abrir em nova janela';
$string['opendownload'] = 'Clique no botão abaixo para salvar o seu certificado para o seu computador.';
$string['openemail'] = 'Clique no botão abaixo e seu certificado será enviado a você como um anexo no e-mail.';
$string['openwindow'] = 'Clique no botão abaixo para abrir seu certificado em numa nova janela do navegador.';
$string['or'] = 'Ou';
$string['orientation'] = 'Orientação';
$string['orientation_help'] = 'Escolha se você quer que a orientação do certificado seja retrato ou paisagem.';
$string['pluginadministration'] = 'Administração de certifcado';
$string['pluginname'] = 'Certificado';
$string['portrait'] = 'Retrato';
$string['printdate'] = 'Data de impressão';
$string['printdate_help'] = 'Esta é a data que será impressa, se uma data de impressão é selecionado. Se a data de conclusão da turma é selecionada, mas o estudante não tenha concluído o turma, a data de recebimento será impresso. Você também pode optar por imprimir a data com base em quando uma atividade foi graduada. Se um certificado for emitido antes que a atividade é classificada, a data de recebimento será impresso.';
$string['printerfriendly'] = 'Página de impressão amigável';
$string['printgrade'] = 'Imprimir nota';
$string['printgrade_help'] = 'Você pode escolher qualquer item de nota do quadro de nota disponível na turma, para imprimir a nota do usuário recebida para esse item no certificado. Os itens de nota são listados na ordem em que aparecem no quadro de nota. Escolha o formato da nota abaixo.';
$string['printhours'] = 'Imprimir carga horária';
$string['printhours_help'] = 'Digite aqui a carga horária a ser impressa no certificado.';
$string['printnumber'] = 'Imprimir código';
$string['printnumber_help'] = 'Um código de 10 dígitos exclusivos de letras e números aleatórios pode ser impresso no certificado. Este número pode então ser verificado comparando com o número de código exibido no relatório certificado.';
$string['printoutcome'] = 'Imprimir Resultados';
$string['printoutcome_help'] = 'Você pode escolher qualquer resultado de um turma para imprimir o resultado e os usuários que obtiveram esse resultado. Um exemplo pode ser: Resultado da Atribuição: Proficiente.';
$string['printseal'] = 'Imagem de selo ou logotipo';
$string['printseal_help'] = 'Esta opção permite que você selecione um selo ou logotipo para ser impresso no certificado na pasta certificate/pix/seals. Por padrão, essa imagem é colocada no canto inferior direito do certificado.';
$string['printsignature'] = 'Imagem de assinatura';
$string['printsignature_help'] = 'Esta opção permite imprimir uma imagem de assinatura na pasta certificate/pix/signatures. Você pode imprimir uma representação gráfica de uma assinatura, ou imprimir uma linha para uma assinatura por escrito. Por padrão, essa imagem é colocada na parte inferior esquerda do certificado.';
$string['printteacher'] = 'Imprimir Nome(s) Professor(es)';
$string['printteacher_help'] = 'Para imprimir o nome do professor no certificado, defina o papel do professor no nível de módulo. Faça isso se, por exemplo, você tem mais de um professor para a turma ou se você tiver mais de um certificado no turma e que pretende imprimir nomes diferentes de professores em cada certificado. Clique para editar o certificado, em seguida, clique na guia papéis designados localmente. Em seguida, atribua a função de Professor (professor autor) para o certificado (não tem que ser um professor no turma - você pode atribuir essa função a qualquer um). Esses nomes serão impressos no certificado para o professor.';
$string['printwmark'] = 'Imagem de marca d\'água';
$string['printwmark_help'] = 'Uma marca de água pode ser colocada no plano de fundo do certificado. Uma marca d\'água é um figura desbotada. Uma marca d\'água pode ser um logotipo, selo, frase, ou o que você deseja usar como uma figura de plano de fundo.';
$string['receivedcerts'] = 'Certificados recebidos';
$string['receiveddate'] = 'Data de Recebimento';
$string['removecert'] = 'Certificados emitidos foram removidos';
$string['report'] = 'Relatório';
$string['reportcert'] = 'Relatório de certificados';
$string['reportcert_help'] = 'Se você escolher sim aqui, então a data de recebimento desse certificado, o número de código, e o nome da turma serão mostrados nos relatórios de certificado do usuário. Se você optar por imprimir uma nota sobre este certificado, então essa nota também será mostrada no certificado do relatório.';
$string['requiredtimenotmet'] = 'Você deve utilizar pelo menos um mínimo de {$a->requiredtime} minutos na turma antes de poder receber esse certificado';
$string['requiredtimenotvalid'] = 'O tempo requerido deve ser um número maior que zero';
$string['reviewcertificate'] = 'Rever seu certificado';
$string['savecert'] = 'Salvar certificador';
$string['savecert_help'] = 'Se você escolher esta opção, então uma cópia do arquivo pdf do certificado de cada usuário é salvo nos arquivos da turma na pasta moddata para esse certificado. Um link para certificado salvo de cada usuário será exibido no relatório certificado.';
$string['seal'] = 'Selo';
$string['sigline'] = 'linha';
$string['signature'] = 'Assinatura';
$string['statement'] = 'completou a turma';
$string['summaryofattempts'] = 'Resumo dos certificados recebidos
anteriormente';
$string['textoptions'] = 'Opções de texto';
$string['title'] = 'CERTIFICADO de CONCLUSÃO';
$string['to'] = 'Concedido a';
$string['typeA4_embedded'] = 'A4 Incorporado';
$string['typeA4_non_embedded'] = 'A4 Não-incorporado';
$string['typeletter_embedded'] = 'Carta Incorporada';
$string['typeletter_non_embedded'] = 'Carta Não-incorporada';
$string['unsupportedfiletype'] = 'O arquivo deve ter extensão jpge ou png';
$string['uploadimage'] = 'Enviar uma imagem';
$string['uploadimagedesc'] = 'Este botão vai remeter a uma nova janela onde você poderá enviar imagens.';
$string['userdateformat'] = 'Formato de data do Usuário';
$string['validate'] = 'Verificar';
$string['verifycertificate'] = 'Verificar certificado';
$string['viewcertificateviews'] = 'Ver {$a} certificados emitidos';
$string['viewed'] = 'Você recebeu este certificado em:';
$string['viewtranscript'] = 'Ver certificados';
$string['watermark'] = 'Marca d\'água';
