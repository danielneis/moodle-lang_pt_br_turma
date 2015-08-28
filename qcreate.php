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
 * Strings for component 'qcreate', language 'pt_br', branch 'MOODLE_28_STABLE'
 *
 * @package   qcreate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Atividade está fechada';
$string['activitygrade'] = 'Você ganhou nota total de {$a->grade} / {$a->outof} para essa atividade.';
$string['activityname'] = 'Nome da atividade';
$string['activityopen'] = 'Atividade está aberta.';
$string['addminimumquestionshdr'] = 'Número de Questões de Tipo requeridos (opcional)';
$string['addmorerequireds'] = 'Adicionar mais tipos de questão requeridos';
$string['allandother'] = 'Para permitir todos os tipos de questão, verifique  \'{$a}\' e não verifique mais nada.';
$string['allowall'] = 'Permitir todos os tipos de questão';
$string['allowedqtypes'] = 'Tipos de questão nivelados';
$string['allowedqtypes_help'] = 'Aqui você especifica o tipo de questões que são permitidas. Se você selecionar \'Permitir todos os tipos de questão\', então alunos podem combinar qualquer tipo de questão para o total especificado em \'Total de Questões Niveladas\'.';
$string['allquestions'] = '0 - (Todas as questões)';
$string['alreadydone'] = 'Você fez {$a} questões desse tipo.';
$string['alreadydoneextra'] = 'Você fez {$a} questões extra desse tipo.';
$string['alreadydoneextraone'] = 'Você fez uma questão extra desse tipo.';
$string['alreadydoneone'] = 'Você fez uma questão desse tipo.';
$string['and'] = '{$a} E';
$string['andmorenewquestions'] = 'e {$a} mais nova(s) questão(ões).';
$string['automaticgrade'] = 'Você ganhou uma nota automática de {$a->grade} / {$a->outof} para essas questões, uma vez que fez {$a->done} of {$a->required} questões requeridas.';
$string['availability'] = 'Disponibilidade';
$string['betterthangrade'] = 'Questões com <strong>manual</strong> nota maior ou igual a';
$string['clickhere'] = 'Clique aqui para criar uma questão de tipo \'{$a}\'.';
$string['clickhereanother'] = 'Clique aqui para criar outra questão de tipo \'{$a}\'.';
$string['close'] = 'Encerrar atividade';
$string['closeon'] = 'Encerrar em';
$string['comma'] = '{$a},';
$string['comment'] = 'Comentar';
$string['completionquestions'] = 'Aluno deve criar:';
$string['completionquestionsgroup'] = 'Requerer questões:';
$string['completionquestions_help'] = 'Se habilitada, essa atividade é considerada completa quando o aluno criou o número de questões (niveladas ou não).';
$string['confirmdeletequestion'] = 'Você tem certeza de que deseja excluir essa questão?';
$string['createdquestions'] = 'Questões criadas';
$string['creating'] = 'Criando Questões';
$string['deletegrades'] = 'Excluir questões criadas e notas manuais';
$string['donequestionno'] = 'Você completou {$a->done} de {$a->no} questões de tipo \'{$a->qtypestring}\'. Essas estão listadas abaixo.';
$string['eventeditpageviewed'] = 'Págine de edição de criação de questão visualizada';
$string['eventoverviewviewed'] = 'Visão geral de criação de questão visualizado';
$string['eventquestiongraded'] = 'Questão nivelada';
$string['eventquestionregraded'] = 'Questão com modificação de nota';
$string['exportgood'] = 'Exportar Bom';
$string['exportgoodquestions'] = 'Exportar questões que foram avaliadas acima de uma nota selecionada';
$string['exportnaming'] = 'Prefixar nomes de questão exportada com';
$string['exportquestions'] = 'Exportar questões para o arquivo';
$string['exportselection'] = 'Exportar somente essas questões';
$string['extraqdone'] = 'Você fez uma questão extra';
$string['extraqgraded'] = 'Uma questão de qualquer um dos tipos abaixo será avaliada';
$string['extraqsdone'] = 'Você fez {$a->extraquestionsdone} questões extra.';
$string['extraqsgraded'] = '{$a->extrarequired} questões de qualquer dos tipos abaixo serão avaliadas';
$string['fullstop'] = '{$a}.';
$string['grade'] = 'Nota';
$string['gradeallautomatic'] = 'Notas são completamente automáticas, sem avaliação manual.';
$string['gradeallmanual'] = 'Avaliação é completamente manual, sem avaliação automática.';
$string['gradeavailablehtml'] = '{$a->username} avaliou sua questão criada \'<i>{$a->questionname}</i>\' para \'<i>{$a->qcreate}</i>\'<br /><br />
Você pode vê-la na <a href="{$a->url}">página de atividade</a>.';
$string['gradeavailablesmall'] = '{$a->username} avaliou sua questão criada para {$a->qcreate}';
$string['gradeavailabletext'] = '{$a->username} avaliou sua questão criada \'{$a->questionname}\' para \'{$a->qcreate}\'

Você pode vê-la na página de atividade:

    {$a->url}';
$string['graded'] = 'Avaliado';
$string['grade_help'] = 'Essa é a nota total para a atividade que está informada no livro de notas. É possível configurar \'Sem nota\' e assim a atividade não é avaliada.';
$string['grademixed'] = 'Avaliação é {$a->automatic}%% automática, {$a->manual}%% manual.';
$string['gradequestions'] = 'Avaliar questões';
$string['graderatio'] = 'Razão de Avaliação Automática / Manual';
$string['graderatio_help'] = 'Aqui você especifica como a Nota total será dividida: a porcentagem para a nota Automática está à esquerda, e para a nota Manual está à direita. A nota automática é a nota \'dada\' pelo sistema para simplesmente marcar uma questão.';
$string['graderatiois'] = 'Razão de Avaliação Automática / Manual: {$a}';
$string['graderatiooptions'] = '{$a->automatic} / {$a->manual}';
$string['gradesdeleted'] = 'Questões e notas manuais removidas';
$string['grading'] = 'Avaliação';
$string['intro'] = 'Introdução';
$string['invalidqcreatezid'] = 'ID de criação de questão inválida';
$string['manualgrade'] = 'Um professor lhe avaliou com nota {$a->grade} / {$a->outof} para as questões que você fez.';
$string['marked'] = 'Marcada';
$string['messageprovider:gradernotification'] = 'Notificação de questão criada';
$string['messageprovider:studentnotification'] = 'Notificação de questão avaliada';
$string['minimumquestions'] = 'Mínimo de questões';
$string['minimumquestions_help'] = 'Nesse menu, você pode especificar quantas questões de um tipo específico alunos devem criar.';
$string['modulename'] = 'Criação de Questão';
$string['modulename_help'] = 'A criação de questão habilita um professor a pedir aos alunos para criar questões, número de questões requeridas, tipos de questão disponíveis e o número de questões requeridas de cada tipo de questão que pode ser especificado.';
$string['modulenameplural'] = 'Criações de questão';
$string['needsgrading'] = 'Precisa de avaliação';
$string['needsregrading'] = 'Precisa de reavaliação';
$string['needtoallowatleastoneqtype'] = 'Você precisa permitir no mínimo um tipo de questão';
$string['needtoallowqtype'] = 'Você precisa permitir tipo de questão \'{$a}\' se quiser requerir um número mínimo de questões desse tipo necessário para serem criadas.';
$string['newquestions'] = 'Novas questões criadas';
$string['noofquestionstotal'] = 'Total de questões avaliadas';
$string['noofquestionstotal_help'] = 'Esse é o número total de questões que os alunos devem criar. Esse número deve ser maior ou igual ao número mínimo de questões requerido.';
$string['noquestions'] = 'Nenhuma questão foi criada.';
$string['noquestionsabove'] = 'Não existem questões com uma nota manual configurada acima {$a->betterthan} na categoria \'{$a->categoryname}\'.';
$string['notgraded'] = 'Não avaliada ainda';
$string['notifications'] = 'Notificações';
$string['nousers'] = 'Não há usuários inscritos nesse curso / nesse grupo.';
$string['open'] = 'Atividade aberta';
$string['open_help'] = 'Você pode especificar tempos em que a atividade de criação de questão é acessível para pessoas criarem questões. Antes do tempo de abertura, e após o tempo de término, alunos não são capazes de criar questões.';
$string['openmustbemorethanclose'] = 'Tempo de abertura de atividade deve ser antes do tempo de fechamento de atividade.';
$string['openon'] = 'Abrir em';
$string['overview'] = 'Visão geral';
$string['pagesize'] = 'Número de questões para mostrar por página';
$string['pluginadministration'] = 'Administração de criação de Questão';
$string['pluginname'] = 'criação de Questão';
$string['preview'] = 'Visualizar';
$string['previewquestion'] = 'Visualizar questão';
$string['qcreate'] = 'criar';
$string['qcreate:addinstance'] = 'Adicionar uma instância de criação de questão';
$string['qcreatecloses'] = 'Atividade de criação de questão fecha';
$string['qcreate:grade'] = 'Avaliar questão';
$string['qcreateopens'] = 'Atividade de criação de Questão abre';
$string['qcreate:receivegradernotifications'] = 'Receber notificações de avaliador';
$string['qcreate:receivestudentnotifications'] = 'Receber notificações de aluno';
$string['qcreate:submit'] = 'Submeter questão';
$string['qcreate:view'] = 'Visualizar atividade de criação de questão';
$string['qsgraded'] = '{$a} questão(ões) de qualquer desses tipos será(ão) avaliada(s) :';
$string['qtype'] = 'Tipo de questão';
$string['qtype_help'] = 'Nesse menu você pode especificar que tipo de questão alunos devem criar.';
$string['questions'] = 'questão(ões) para completar essa atividade';
$string['questionscreated'] = '{$a} questão(ões) criada(s)';
$string['questiontogradehtml'] = '{$a->username} criou uma nova questão <i>\'{$a->questionname}\'</i>
para <i>\'{$a->qcreate}\'  às {$a->timeupdated}</i><br /><br />
Está <a href="{$a->url}">disponível no web site</a>.';
$string['questiontogradesmall'] = '{$a->username} criou uma nova questão para {$a->qcreate}.';
$string['questiontogradetext'] = '{$a->username} criou uma nova questão \'{$a->questionname}\'
para \'{$a->qcreate}\' às {$a->timeupdated}

Está disponível aqui:

    {$a->url}';
$string['requiredanyplural'] = '{$a->no} questões de qualquer tipo são requeridas';
$string['requiredanysingular'] = 'Uma questão de qualquer tipo é requerida';
$string['requiredplural'] = '{$a->no} questões de \'{$a->qtypestring}\' tipo de questão são requeridas';
$string['requiredquestions'] = 'Questões requeridas para criar:';
$string['requiredsingular'] = 'Uma questão de tipo \'{$a->qtypestring}\' é requerida';
$string['saveallfeedback'] = 'Salvar todas as minhas respostas';
$string['saveallfeedbackandgrades'] = 'Salvar todas as notas & respostas';
$string['selectone'] = 'Selecionar um...';
$string['sendgradernotifications'] = 'Notificar avaliadores';
$string['sendgradernotifications_help'] = 'Se habilitados, avaliadores (usualmente professores) recebem uma mensagem sempre que um aluno criar uma nova questão. Métodos de mensagem são configuráveis.';
$string['sendstudentnotifications'] = 'Notificar alunos';
$string['sendstudentnotifications_help'] = 'Se habilitados, alunos recebem uma mensagem quando uma de suas questões é avaliada.';
$string['show'] = 'Mostrar';
$string['showgraded'] = 'questões que não precisam de avaliação';
$string['showneedsregrade'] = 'questões de precisam de reavaliação';
$string['showungraded'] = 'questões que precisam de avaliação';
$string['specifictext'] = 'Especificar texto';
$string['studentaccessaddonly'] = 'criar somente';
$string['studentaccessedit'] = 'pré-visualizar, visualizar / salvar como novo e editar / remover';
$string['studentaccessheader'] = 'Acesso à questão do aluno';
$string['studentaccesspreview'] = 'Pré-visualizar';
$string['studentaccesssaveasnew'] = 'pré-visualizar e visualizar / salvar como novo';
$string['studentqaccess'] = 'Possuir questões';
$string['studentqaccess_help'] = 'Usar esse menu para definir quais direitos de acesso os alunos têm sobre questões que eles criam.';
$string['studentshavedone'] = 'Alunos criaram {$a} questão(ões).';
$string['synchronizeqaccesstask'] = 'Sincronizar capacidades de acesso das questões dos alunos';
$string['timeclose'] = 'Atividade fecha em {$a->timeclose}';
$string['timeclosed'] = 'Atividade fechada em {$a}.';
$string['timecreated'] = 'Tempo de questão criado';
$string['timenolimit'] = 'Nenhum limite de tempo configurado.';
$string['timeopen'] = 'Atividade abre em {$a->timeopen}';
$string['timeopenclose'] = 'Atividade abre de {$a->timeopen} até {$a->timeclose}';
$string['timeopened'] = 'Atividade aberta em {$a}.';
$string['timewillclose'] = 'Atividade fechará em {$a}.';
$string['timewillopen'] = 'Atividade fechará em {$a}.';
$string['timing'] = 'Tempo de atividade';
$string['todoquestionno'] = 'Você ainda tem que fazer {$a->stillrequiredno} questão(ões) do tipo \'{$a->qtypestring}\'.';
$string['totalgrade'] = 'Nota total';
$string['totalgradeis'] = 'Nota total: {$a}';
$string['totalrequiredislessthansumoftotalsforeachqtype'] = 'Total requerido é menor que a soma dos totais avaliados para cada tipo de questão.<br />Deve ser maior ou igual!';
$string['updategradestask'] = 'Atualizar notas de atividade de criação de questão';
$string['username'] = 'Nome do usuário criador de questão';
$string['youhavedone'] = 'Você criou {$a} questão(ões).';
$string['youvesetmorethanonemin'] = 'Você configurou mais do que o número mínimo de questões para tipo \'{$a}\'!';
