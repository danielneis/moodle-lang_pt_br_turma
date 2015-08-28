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
 * Strings for component 'simplecertificate', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   simplecertificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Todos os usuários';
$string['awardedsubject'] = 'Notificação:
Certificado concedido: {$a->certificate} emitido para {$a->student}';
$string['awardedto'] = 'Obtido para';
$string['bulkaction'] = 'Escolha a operação em lote';
$string['bulkbuttonlabel'] = 'Enviar';
$string['bulkview'] = 'Operações em lote';
$string['cantdeleteissue'] = 'Ocorreu um erro ao remover os certificados emitidos';
$string['cantissue'] = 'O certificado não pode ser emitido pois o usuário não atigiu a meta da turma';
$string['certificatecopy'] = 'CÓPIA';
$string['certificateimage'] = 'Arquivo de Imagem do certificado';
$string['certificateimage_help'] = 'Esta é a imagem que será utilizada no certificado';
$string['certificatename'] = 'Nome do certificado';
$string['certificatename_help'] = 'Nome do certificado';
$string['certificatenot'] = 'Simple certificate não foi encontrado';
$string['certificatetext'] = 'Texto do certificado';
$string['certificatetext_help'] = 'Este é o texto que será usado no certificado, alguns marcadores especiais serão substituídos por variáveis do certificado, como o nome das turmas, nome do estudante, notas...
Os marcadores são:

<ul>
<li>{USERNAME} -> Nome completo do aluno</li>
<li>{COURSENAME} -> Nome completo da turma (ou o que estiver definido em "Nome Alternativo do Curso")</li>
<li>{GRADE} -> Nota formatada</li>
<li>{DATE} -> Data formatada</li>
<li>{OUTCOME} -> Resultados (Outcomes)</li>
<li>{TEACHERS} -> Lista de professores</li>
<li>{IDNUMBER} -> User id number</li>
<li>{FIRSTNAME} -> Nome</li>
<li>{LASTNAME} -> Sobrenome</li>
<li>{EMAIL} -> E-mail</li>
<li>{ICQ} -> ICQ</li>
<li>{SKYPE} -> Skype</li>
<li>{YAHOO} -> Yahoo messenger</li>
<li>{AIM} -> AIM</li>
<li>{MSN} -> MSN</li>
<li>{PHONE1} -> 1° Número de telefone</li>
<li>{PHONE2} -> 2° Número de telefone</li>
<li>{INSTITUTION} -> Instituição</li>
<li>{DEPARTMENT} -> Departamento</li>
<li>{ADDRESS} -> Endereço</li>
<li>{CITY} -> Cidade</li>
<li>{COUNTRY} -> País</li>
<li>{URL} -> Home-page</li>
<li>{CERTIFICATECODE} -> Texto do código do certificado</li>
<li>{PROFILE_xxxx} -> Campos personalizados</li>
</ul>
<p>
Para usar campos personalizados deve usar o prefixo "PROFILE_", por exemplo, se criar um campo com a abreviação (shortname) de aniversario, então deve-se usar o marcador
"PROFILE_ANIVERSARIO"
O texto pode ser um HTML básico, com fontes básicas do HTML, tabelas, mas evite utilizar o uso de posicionamento.</p>';
$string['certificatetextx'] = 'Posição Horizontal do texto do certificado\'';
$string['certificatetexty'] = 'Posição Vertical do texto do certificado\'';
$string['certificateverification'] = 'Verificação do Certificado';
$string['certlifetime'] = 'Manter os certificados emitidos por: (em Meses)';
$string['certlifetime_help'] = 'Está opção especifica por quanto tempo deve ser guardado um certificado emitido. Certificados emitidos mais velhos que o tempo determinado nesta opção será automaticamente removidos.';
$string['code'] = 'Código';
$string['codex'] = 'Posição Horizontal do QR Code do Certificado';
$string['codey'] = 'Posição Vertical do QR Code do Certificado';
$string['completedusers'] = 'Usuários que atingiram os objetivos definidos';
$string['completiondate'] = 'Conclusão de Turma';
$string['coursegrade'] = 'Nota da turma';
$string['coursename'] = 'Nome alternativo do Curso';
$string['coursename_help'] = 'Nome alternativo do Curso';
$string['coursenotfound'] = 'Curso não encontrado';
$string['coursetimereq'] = 'Minutos mínimos de participação na turma';
$string['coursetimereq_help'] = 'Coloque o tempo mínimo de participação (em minutos) que um aluno deve ter para conseguir obter o certificado';
$string['datefmt'] = 'Formato da data';
$string['datefmt_help'] = 'Coloque um formato de data válido aceito pelo PHP (http://www.php.net/manual/pt_BR/function.strftime.php). ou deixe-o em branco para usar o valor de formatação padrão definido pela a configuração de idioma do usuário.';
$string['defaultcertificatetextx'] = 'Posição Horizontal padrão do texto do certificado';
$string['defaultcertificatetexty'] = 'Posição Vertical padrão do texto do certificado';
$string['defaultcodex'] = 'Posição Horizontal padrão do QR code do certificado';
$string['defaultcodey'] = 'Posição Vertical padrão do QR code do certificado';
$string['defaultheight'] = 'Altura Padrão';
$string['defaultperpage'] = 'Por página';
$string['defaultperpage_help'] = 'Quantidade de certificados exibidos por página (Max. 200)';
$string['defaultwidth'] = 'Largura Padrão';
$string['deletissuedcertificates'] = 'Remover os certificados emitidos';
$string['delivery'] = 'Envio';
$string['delivery_help'] = 'Escolha como o certificado deve ser entregue aos alunos:<br>
<ul>
<li>Visualizar em uma nova janela: Abre uma nova janela no navegador do aluno contendo o certificado.</li>
<li>Forçar o download: Abre uma janela de download de arquivo para o aluno salvar em seu computador.</li>
<li>por Email: Envia o certificado para o email do aluno, e abre o certificado em uma nova janela do navegador.</li>
</ul><p>
Depois que estudante emite seu certificado, se ele clicar na atividade certificado aparecerá a data de emissão do certificado e ele poderá revisar ocertificado emitido</p>';
$string['designoptions'] = 'Opções de Design';
$string['download'] = 'Download de um único arquivo pdf com todos os certificados';
$string['emailcertificate'] = 'por Email';
$string['emailfrom'] = 'Nome alternativo do remetente do email';
$string['emailfrom_help'] = 'Nome a ser usado como remetente dos email enviados';
$string['emailothers'] = 'Enviar email para outros';
$string['emailothers_help'] = 'Digite os endereços de emails que vão receber o alerta de emissão de certificado';
$string['emailsent'] = 'Os emails foram enviados';
$string['emailstudentsubject'] = 'Seu certificado da turma {$a->course}';
$string['emailstudenttext'] = 'Olá {$a->username},

	Segue em anexo o certificado da turma: {$a->course}.


ESTA É UMA MENSAGEM AUTOMÁTICA, NÃO RESPONDA POR FAVOR';
$string['emailteachermail'] = '{$a->student} recebeu o certificado: \'{$a->certificate}\' para a turma
{$a->course}.

Você pode vê-lo aqui:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} recebeu o certificado: \'<i>{$a->certificate}</i>\'
para a turma {$a->course}.

Você pode vê-lo aqui:

    <a href="{$a->url}">Certificate Report</a>.';
$string['emailteachers'] = 'Enviar email para os Professores';
$string['emailteachers_help'] = 'Quando habilitado, os professores recebem os emails toda vez que um aluno emitir um certificado.';
$string['enablesecondpage'] = 'Ativar o verso do Certificado';
$string['enablesecondpage_help'] = 'Ativa a edição do verso do certificado, se estiver desativado, somente o código QR do certificado será impresso (se código QR estiver ativo)';
$string['filenotfound'] = 'Arquivo não encontrado: {$a}';
$string['getcertificate'] = 'Obter o Certificado';
$string['grade'] = 'Nota';
$string['gradefmt'] = 'Formato da nota';
$string['gradefmt_help'] = 'Pode-se escolher o formato da nota que são:<br>
<ul>
<li>Nota por percentual: Imprime a nota como um percentual.</li>
<li>Nota pot pontos: Imprime a nota por pontos, o valor da nota tirada.</li>
<li>Nota por conceito: Imprime o conceito relacionado a nota obtida (A, A+, B, ...).</li>
</ul>';
$string['gradeletter'] = 'Nota por Conceito';
$string['gradepercent'] = 'Nota por perrcentual';
$string['gradepoints'] = 'Nota por pontos';
$string['height'] = 'Altura do certificado';
$string['hours'] = 'horas';
$string['intro'] = 'Introdução';
$string['invalidcode'] = 'Código do certificado é inválido';
$string['issued'] = 'Emitidos';
$string['issuedcertificatenotfound'] = 'Certificado emitido não foi encontrado';
$string['issueddate'] = 'Data da emissão';
$string['issueddownload'] = 'Certificado [id: {$a}] baixado';
$string['issuedview'] = 'Certificados emitidos';
$string['issueoptions'] = 'Opções de Emissão';
$string['keywords'] = 'cetificate, course, pdf, moodle';
$string['modulename'] = 'Certificado Simples';
$string['modulename_help'] = 'O módulo simple certificate permite ao professor criar um certificado personalizado que pode ser emitido pelos os participantes que completarem os requisitos especificados pelo professor.';
$string['modulenameplural'] = 'Certificados Simples';
$string['multipdf'] = 'Download de um arquivo zip com os pdfs dos certidicados';
$string['neverdeleteoption'] = 'Nunca remover';
$string['nocertificatesissued'] = 'Nenhum certificado emitido';
$string['nodelivering'] = 'Sem envio, o usuário vai receber o certificado por outros meios';
$string['onepdf'] = 'Download de um único arquivo pdf com todos os certificados';
$string['openbrowser'] = 'Visualizar em uma nova janela';
$string['opendownload'] = 'Pressione o botão abaixo para salvar o seu certificado no seu computador.';
$string['openemail'] = 'Pressione o botão abaixo e seu certificado será enviado por email.';
$string['openwindow'] = 'Pressione o botão abaixo para visualizar o seu certificado em uma nova tela';
$string['pluginadministration'] = 'Administração de Certificado';
$string['pluginname'] = 'Certificado Simples';
$string['printdate'] = 'Tipo de data do certificado';
$string['printdate_help'] = 'Esta é a data que será impressa, você pose escolher entre a data que o aluno completou a turma, ou a data de emissão do certificado.
Também pode-se escolher a data que uma certa atividade foi corrigida, se em algum dos casos o aluno não tiver a data, então a data de emissão será usada.';
$string['printgrade'] = 'Tipo de nota do certificado';
$string['printgrade_help'] = 'Pode-se escolher a nota que será impressa no certificado, esta pode ser a nota final da turma ou a nota em uma atividade.';
$string['printoutcome'] = 'Imprimir resultado (Outcome)';
$string['printoutcome_help'] = 'Você pode escolher qualquer resultado (outcome) definido nesta turma. Será impresso o nome do resultado e o resultado recebido  pelo usuário. Um exemplo poderia ser: Resultado: Proficiente.';
$string['printqrcode'] = 'Imprimir o QR Code do certificado';
$string['printqrcode_help'] = 'Habilita ou desabilita a impressão do QR Code do certificado';
$string['qrcodefirstpage'] = 'Imprimir o código QR na primeira página';
$string['qrcodefirstpage_help'] = 'Imprime o código QR na primeira página';
$string['qrcodeposition'] = 'Posicionamento do QR Code do Certificado';
$string['qrcodeposition_help'] = 'Essas são as coordenadas XY (em milímetros) do QR Code do certificado';
$string['receiveddate'] = 'Data de Recebimento';
$string['report'] = 'Relatório';
$string['requiredtimenotmet'] = 'Você precisa ter ao menos {$a->requiredtime} minutos nesse turma para emitir este certificado';
$string['secondimage'] = 'Imagem do verso do certificate';
$string['secondimage_help'] = 'Esta figura será usada no verso do certificado';
$string['secondpageoptions'] = 'Página de Verso do certificado';
$string['secondpagetext'] = 'Texto do verso do certificado';
$string['secondpagex'] = 'Posição Horizontal do texto do verso';
$string['secondpagey'] = 'Posição Vertical do texto do verso';
$string['secondtextposition'] = 'Posição do texto do verso';
$string['secondtextposition_help'] = 'As coordenadas XY (em milímetros) do texto do verso';
$string['sendtoemail'] = 'Enviar os certificados para o email do usuário';
$string['showusers'] = 'Mostrar';
$string['simplecertificate:addinstance'] = 'Adicionar uma atividade simple certificate';
$string['simplecertificate:manage'] = 'Gerenciar a atividade simple certificate';
$string['simplecertificate:view'] = 'Exibir a atividade simple certificate';
$string['size'] = 'Tamanho do Certificado';
$string['size_help'] = 'Esse é o tamanho, Largura e Altura (em milímetros) do certificado, o padrão é A4 paisagem';
$string['standardview'] = 'Emitir um certificado de teste';
$string['summaryofattempts'] = 'Resumo dos certificados emitidos';
$string['textposition'] = 'Posicionamento do Texto do Certificado';
$string['textposition_help'] = 'Essas são as coordenadas XY (em milímetros) do texto do certificado';
$string['timestartdatefmt'] = 'Formato da data de matrícula';
$string['timestartdatefmt_help'] = 'Digite um formato de data válido no  padrão do PHP  ( <a href="http://www.php.net/manual/en/function.strftime.php">formatos de data</a> ). Ou, deixe-o em branco para usar o formato do idioma escolhido pelo usuário.';
$string['upgradeerror'] = 'Erro durante o upgrade $a';
$string['usercontextnotfound'] = 'Contexto do usuário não encontrado';
$string['userdateformat'] = 'Formato definido pelas definições do usuário';
$string['usernotfound'] = 'Usuário não encontrado';
$string['variablesoptions'] = 'Outras Opções';
$string['verifycertificate'] = 'Verificar Certificado';
$string['viewcertificateviews'] = '{$a} certificados emitidos';
$string['width'] = 'Largura do certificado';
