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
 * Strings for component 'assign', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Você tem tarefas que precisam de atenção';
$string['addattempt'] = 'Permitir outra tentativa';
$string['addnewattempt'] = 'Adicionar uma nova tentativa';
$string['addnewattemptfromprevious'] = 'Adicionar uma nova tentativa baseada na tentativa anterior';
$string['addnewattemptfromprevious_help'] = 'Isto irá copiar o conteúdo de sua tentativa anterior para uma nova tentativa para você trabalhar.';
$string['addnewattempt_help'] = 'Isto irá criar uma nova tentativa em branco para você trabalhar.';
$string['addsubmission'] = 'Adicionar tarefa';
$string['allocatedmarker'] = 'Avaliador';
$string['allocatedmarker_help'] = 'Avaliador atribuído para este envio';
$string['allowsubmissions'] = 'Permitir que usuário continue realizando envios para esta tarefa';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalhes da tarefa e formulário de envio ficarão disponíveis a partir de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Permite envios a partir de';
$string['allowsubmissionsfromdate_help'] = 'Caso habilitado, estudantes não terão disponibilidade para enviar antes desta data. Caso desabilitado, estudantes poderão enviar.';
$string['allowsubmissionsfromdatesummary'] = 'Esta tarefa aceitará envios a partir de <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Permite mudanças no envio';
$string['alwaysshowdescription'] = 'Sempre exibir descrição';
$string['alwaysshowdescription_help'] = 'Se desabilitado a descrição acima somente ficará visível aos alunos a partir da data configurada em "Permitir envios a partir de".';
$string['applytoteam'] = 'Habilitar notas e feedback para todo grupo';
$string['assign:addinstance'] = 'Adicionar uma nova tarefa';
$string['assign:editothersubmission'] = 'Editar o envio de outro estudante';
$string['assign:exportownsubmission'] = 'Exportar a própria apresentação';
$string['assignfeedback'] = 'Plugin de feedback';
$string['assignfeedbackpluginname'] = 'Plugin de feedback';
$string['assign:grade'] = 'Avaliar tarefa';
$string['assign:grantextension'] = 'Conceder prorrogação';
$string['assign:manageallocations'] = 'Gerenciar avaliadores atribuídos para envios';
$string['assign:managegrades'] = 'Revisar e liberar notas';
$string['assignmentisdue'] = 'Tarefa encerrada';
$string['assignmentmail'] = '{$a->grader} escreveu comentários sobre a seguinte tarefa que você envioiu em \'{$a->assignment}\'

Leia os comentários anexos à tarefa:

{$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} escreveu comentários sobre a tarefa que você enviou: \'<i>{$a->assignment}</i>\'<br /><br />
Você pode vê-lo anexado à <a href="{$a->url}">tarefa enviada</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} publicou alguns comentários na tarefa enviada em \'{$a->assignment}\'. Você pode visualizar estes comentários incluídos em sua tarefa';
$string['assignmentname'] = 'Nome da tarefa';
$string['assignmentplugins'] = 'Plugins de tarefas';
$string['assignmentsperpage'] = 'Tarefas por página';
$string['assign:receivegradernotifications'] = 'Receber notificações de postagem de tarefas';
$string['assign:releasegrades'] = 'Liberar notas';
$string['assign:revealidentities'] = 'Revelar identidade dos estudantes no caso de avaliação anônima';
$string['assign:reviewgrades'] = 'Revisar notas';
$string['assignsubmission'] = 'Plugin para envio';
$string['assignsubmissionpluginname'] = 'Plugin para envio';
$string['assign:submit'] = 'Enviar tarefa em definitivo';
$string['assign:view'] = 'Ver tarefa';
$string['assign:viewblinddetails'] = 'Ver identidades dos estudantes quando a avaliação anônima estiver habilitada';
$string['assign:viewgrades'] = 'Ver notas';
$string['attemptheading'] = 'Tentativa {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Tentativas anteriores';
$string['attemptnumber'] = 'Número da tentativa';
$string['attemptreopenmethod'] = 'Tentativas reabertas';
$string['attemptreopenmethod_help'] = 'Determina como as tentativas de envio do estudante são reabertas.
As opções disponíveis são: <ul><li>Nunca - O envio do estudante não pode ser reaberto.</li><li>Manualmente -  O envio do estudante pode ser reaberto por um professor.</li> Automaticamente até passar - O envio do estudante é automaticamente reaberto até o estudante obter a nota para passar, este valor é definido no livro de notas (Categorias e seção itens) para esta tarefa.</li></ul>';
$string['attemptreopenmethod_manual'] = 'Manualmente';
$string['attemptreopenmethod_none'] = 'Nunca';
$string['attemptreopenmethod_untilpass'] = 'Automaticamente até que passe';
$string['attemptsettings'] = 'Configurações de tentativa';
$string['availability'] = 'Disponibilidade';
$string['backtoassignment'] = 'Voltar para tarefa';
$string['batchoperationconfirmaddattempt'] = 'Permitir uma outra tentativa para os envios selecionados?';
$string['batchoperationconfirmgrantextension'] = 'Conceder uma prorrogação para todos os envios selecionados?';
$string['batchoperationconfirmlock'] = 'Travar todos os envios selecionados?';
$string['batchoperationconfirmreverttodraft'] = 'Reverter envios selecionados para rascunho?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Definir a alocação de notas para todos os envios selecionados?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Definir estado no fluxo de avaliação para todos os envios selecionados?';
$string['batchoperationconfirmunlock'] = 'Destravar todos os envios selecionados ?';
$string['batchoperationlock'] = 'Travar envios';
$string['batchoperationreverttodraft'] = 'Reverter envios para rascunho';
$string['batchoperationsdescription'] = 'Com selecionados...';
$string['batchoperationunlock'] = 'desbloquear envios';
$string['batchsetallocatedmarker'] = 'Definir avaliador para {$a} usuário(s) selecionado(s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Definir estado de fluxo de avaliação para {$a} usuário(s) selecionado(s).';
$string['blindmarking'] = 'Avaliação anônima';
$string['blindmarking_help'] = 'Se habilitado, os avaliadores não verão a identidade dos estudantes, mas sim um identificador gerado aleatoriamente. Esta configuração será travada (não poderá ser alterada) assim que um estudante postar seu trabalho ou que seja realizada uma avaliação.
Uma vez que a avaliação esteja completa, o professor pode reverter o anonimato clicando em "Revelar identidades dos estudantes" no menu de "Administração de tarefas" do bloco de "Administração".';
$string['changegradewarning'] = 'Esta atribuição foi classificado inscrições e alterar a nota não será automaticamente re-calcular os graus de submissão existentes. Você deve reavaliar todas as propostas existentes, se você quiser alterar a nota.';
$string['choosegradingaction'] = 'Ação de avaliação';
$string['choosemarker'] = 'Escolha ...';
$string['chooseoperation'] = 'Escolha operação';
$string['comment'] = 'Comentário';
$string['completionsubmit'] = 'Estudante deverá postar seu trabalho nesta atividade de forma a completá-la';
$string['configshowrecentsubmissions'] = 'Todos podem ver listas de novos envios no relatório de atividades recentes';
$string['confirmbatchgradingoperation'] = 'Você tem certeza que quer {$a->operation} para {$a->count} aluno(s)?';
$string['confirmsubmission'] = 'Tem certeza de que deseja enviar seu trabalho para a classificação? Você não será capaz de fazer mais modificações.';
$string['conversionexception'] = 'Não foi possível converter tarefa. O problema foi: {$a}';
$string['couldnotconvertgrade'] = 'Não foi possível converter a nota da tarefa para o usuário {$a}';
$string['couldnotconvertsubmission'] = 'Não foi possível converter o envio de tarefa para o usuário {$a}';
$string['couldnotcreatecoursemodule'] = 'Não foi possível criar o módulo da turma.';
$string['couldnotcreatenewassignmentinstance'] = 'Não foi possível criar uma nova instância de tarefa.';
$string['couldnotfindassignmenttoupgrade'] = 'Não foi possível encontrar a antiga instância para fazer a migração.';
$string['currentattempt'] = 'Esta é a tentativa  {$a} .';
$string['currentattemptof'] = 'Esta é a tentativa {$a->attemptnumber} ({$a->maxattempts} tentativas permitidas).';
$string['currentgrade'] = 'Nota atual no livro de notas';
$string['cutoffdate'] = 'Data limite';
$string['cutoffdatefromdatevalidation'] = 'Data de corte deve ser após a permitir inscrições de data.';
$string['cutoffdate_help'] = 'Se configurado, a tarefa não aceitará envios após a data escolhida sem prorrogação.';
$string['cutoffdatevalidation'] = 'A data limite não pode ser anterior à data de vencimento.';
$string['defaultsettings'] = 'Configuração padrão de tarefa';
$string['defaultsettings_help'] = 'Estas configurações definem os padrões para todas as novas tarefas.';
$string['defaultteam'] = 'Grupo padrão';
$string['deleteallsubmissions'] = 'Apagar todos os envios';
$string['description'] = 'Descrição';
$string['downloadall'] = 'Fazer o download de todas as tarefas enviadas';
$string['duedate'] = 'Data de entrega';
$string['duedate_help'] = 'Isso acontece quando a tarefa está encerrada. Se envios atrasados são permitidos, qualquer envio depois dessa dada é marcado como atrasado. Para impedir envios após uma determinada data - definir a data limite para envio da tarefa.';
$string['duedateno'] = 'Nenhuma data de entrega';
$string['duedatereached'] = 'A data de encerramento para essa tarefa já foi atingida';
$string['duedatevalidation'] = 'Data de encerramento precisa ser depois do início da tarefa.';
$string['editaction'] = 'Ações ...';
$string['editattemptfeedback'] = 'Edite a nota e feedback para a tentativa número {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Você está editando o feedback para uma tentativa anterior. Esta é a tentativa {$a->attemptnumber}  de {$a->totalattempts} permitidas.';
$string['editingstatus'] = 'Editar estado';
$string['editsubmission'] = 'Editar envio';
$string['editsubmission_help'] = 'Fazer alterações em seu envio';
$string['editsubmissionother'] = 'Editar envio para {$a}';
$string['enabled'] = 'Habilitado';
$string['errornosubmissions'] = 'Não existem submissões para download.';
$string['errorquickgradingvsadvancedgrading'] = 'As avaliações não foram salvas pois esta tarefa está atualmente usando avaliação avançada';
$string['errorrecordmodified'] = 'As avaliações não foram salvas pois alguém modificou um ou mais registros após você ter carregado a página.';
$string['eventallsubmissionsdownloaded'] = 'Todos os envios estão sendo baixados.';
$string['eventassessablesubmitted'] = 'Um envio foi submetido.';
$string['eventbatchsetmarkerallocationviewed'] = 'Configuração em massa de avaliador visualizada';
$string['eventbatchsetworkflowstateviewed'] = 'Configuração de estado de workflow visualizado';
$string['eventextensiongranted'] = 'Uma prorrogação foi concedida.';
$string['eventfeedbackupdated'] = 'Comentário atualizado';
$string['eventfeedbackviewed'] = 'Comentário visualizado';
$string['eventgradingformviewed'] = 'Formulário de notas visualizado';
$string['eventgradingtableviewed'] = 'Tabela de notas visualizada';
$string['eventidentitiesrevealed'] = 'As identidades foram reveladas.';
$string['eventmarkerupdated'] = 'O avaliador alocado foi atualizado.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Página de confirmação de identidades reveladas visualizada.';
$string['eventstatementaccepted'] = 'O usuário aceitou o acordo da tarefa.';
$string['eventsubmissionconfirmationformviewed'] = 'Formulário de confirmação de submissão visualizado.';
$string['eventsubmissioncreated'] = 'Submissão criada.';
$string['eventsubmissionduplicated'] = 'O usuário duplicou seu envio.';
$string['eventsubmissionformviewed'] = 'Formulário de submissão visualizado.';
$string['eventsubmissiongraded'] = 'O envio foi avaliado.';
$string['eventsubmissionlocked'] = 'Os envios foram travados para um usuário.';
$string['eventsubmissionstatusupdated'] = 'O status do seu envio foi atualizado';
$string['eventsubmissionstatusviewed'] = 'O status da submissão foi visualizado.';
$string['eventsubmissionunlocked'] = 'O envio foi destravado para um usuário.';
$string['eventsubmissionupdated'] = 'O usuário salvou um envio.';
$string['eventsubmissionviewed'] = 'Envio visualizado.';
$string['eventworkflowstateupdated'] = 'O stado do workflow foi atualizado.';
$string['extensionduedate'] = 'Extensão do prazo de entrega';
$string['extensionnotafterduedate'] = 'A data de extensão deve ser posterior à data de encerramento';
$string['extensionnotafterfromdate'] = 'A data extendida deve ser posterior à data de encerramento';
$string['feedback'] = 'Feedback';
$string['feedbackavailablehtml'] = '{$a->username} postou feedback em seu envio de tarefa para \'<i>{$a->assignment}</i>\' <br/><br/>
Você pode visualizar em seu <a href="{$a->url}">envio</a>.';
$string['feedbackavailablesmall'] = '{$a->username} retornou feedback para a tarefa {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} postou feedback em seu envio de tarefa para \'<i>{$a->assignment}</i>\'


Você pode visualizar em seu envio:

{$a->url}';
$string['feedbackplugin'] = 'Plugin Feedback';
$string['feedbackpluginforgradebook'] = 'Plugin de feedback que publicará comentários no livro de notas';
$string['feedbackpluginforgradebook_help'] = 'Apenas um plugin de feedback para tarefa pode enviar feedback no livro de notas';
$string['feedbackplugins'] = 'Plugins de Feedback';
$string['feedbacksettings'] = 'Configurações de Feedback';
$string['feedbacktypes'] = 'Tipos de feedback';
$string['filesubmissions'] = 'Envio de arquivos';
$string['filter'] = 'Filtro';
$string['filternone'] = 'Sem filtro';
$string['filternotsubmitted'] = 'Não enviado';
$string['filterrequiregrading'] = 'Requer notas';
$string['filtersubmitted'] = 'Enviada';
$string['gradeabovemaximum'] = 'Notas precisam ser menores ou iguais a {$a}.';
$string['gradebelowzero'] = 'Notas precisam ser maiores ou iguais a zero.';
$string['gradecanbechanged'] = 'Nota pode ser alterada';
$string['graded'] = 'Avaliado';
$string['gradedby'] = 'Avaliado por';
$string['gradedon'] = 'Avaliado em';
$string['gradelocked'] = 'Esta nota está bloqueada ou sobreposta no livro de notas.';
$string['gradeoutof'] = 'Nota até {$a}';
$string['gradeoutofhelp'] = 'Nota';
$string['gradeoutofhelp_help'] = 'Digite a nota (podem ser utilizados valores decimas) correspondente à avaliação da tarefa.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} atualizou a sua tarefa <i>\'{$a->assignment}\' em{$a->timeupdated} </i><br /><br />
Esta pode ser acessada <a href="{$a->url}">no site</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} alterou seu envio para tarefa {$a->assignment}';
$string['gradersubmissionupdatedtext'] = '{$a->username} atualizou a sua tarefa \'{$a->assignment}\' em {$a->timeupdated}

Para acessar a nova versão:

{$a->url}';
$string['gradestudent'] = 'Avaliar estudante: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Nota {$a}';
$string['grading'] = 'Avaliação';
$string['gradingchangessaved'] = 'As mudanças de nota foram salvas';
$string['gradingmethodpreview'] = 'Critério de pontuação';
$string['gradingoptions'] = 'Opções';
$string['gradingstatus'] = 'Status da avaliação';
$string['gradingstudent'] = 'Avaliando estudante';
$string['gradingsummary'] = 'Sumário de avaliação';
$string['grantextension'] = 'Atribuir extensão';
$string['grantextensionforusers'] = 'Atribuir extensão para o usuário {$a}';
$string['groupsubmissionsettings'] = 'Configurações de envio em grupo';
$string['hiddenuser'] = 'Participante';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['instructionfiles'] = 'Aquivos de instrução';
$string['introattachments'] = 'Arquivos adicionais';
$string['introattachments_help'] = 'Arquivos anexados para uso na tarefa, tais como modelos de resposta, podem ser adicionados. O Link para download dos arquivos será exibida na página de classificação nos termos da descrição.';
$string['invalidfloatforgrade'] = 'A nota inserida não pode ser compreendida: {$a}';
$string['invalidgradeforscale'] = 'A nota fornecida não é válida para a escala atual';
$string['lastmodifiedgrade'] = 'Última modificação (nota)';
$string['lastmodifiedsubmission'] = 'Última modificação (envio)';
$string['latesubmissions'] = 'Submissões atrasadas';
$string['latesubmissionsaccepted'] = 'Somente estudante(s) contemplados com uma extensão ainda poderá(ão) enviar a tarefa';
$string['locksubmissionforstudent'] = 'Impedir envio para o estudante: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Travar envios';
$string['manageassignfeedbackplugins'] = 'Gerenciar plugins de feedback de tarefa';
$string['manageassignsubmissionplugins'] = 'Gerenciar plugins de envio de tarefa';
$string['marker'] = 'Avaliador';
$string['markerfilter'] = 'Filtro por avaliador';
$string['markerfilternomarker'] = 'Nenhum avaliador';
$string['markingallocation'] = 'Usar alocação de avaliadores';
$string['markingallocation_help'] = 'Se habilitado (depende da habilitação de "Usar fluxo de avaliação"), é possível atribuir avaliadores para avaliar ou rever o trabalho de estudantes específicos.';
$string['markingworkflow'] = 'Usar fluxo de avaliação';
$string['markingworkflow_help'] = 'Se habilitado, os avaliadores (em geral os professores) poderão especificar o estágio em que eles se encontram no processo de avaliação das tarefas submetidas.
A lista de estágios inclui: em avaliação, em revisão, avaliação concluída, pronto para publicação e publicado.
Este mecanismo possibilita, dentre outras coisas, a publicação conjunta (ao mesmo tempo) das notas para os estudantes.';
$string['markingworkflowstate'] = 'Estado do fluxo de avaliação';
$string['markingworkflowstate_help'] = 'Possíveis estados para o fluxo de avaliação de trabalhos (dependendo de suas permissões):

* Não avaliado - a avaliação ainda não iniciou
* Em avaliação - a avaliação foi iniciada, mas ainda não foi concluída
* Avaliação concluída - a avaliação foi concluída, mas talvez ainda sejam necessárias verificações/correções
* Em revisão - a avaliação está, agora, com o professor responsável para revisão final
* Pronto para publicação - a revisão final foi completada, mas aguarda publicação
* Publicado - os estudantes tem acesso às notas e aos retornos';
$string['markingworkflowstateinmarking'] = 'Em avaliação';
$string['markingworkflowstateinreview'] = 'Em revisão';
$string['markingworkflowstatenotmarked'] = 'Não avaliado';
$string['markingworkflowstatereadyforrelease'] = 'Pronto para publicação';
$string['markingworkflowstatereadyforreview'] = 'Avaliação concluída';
$string['markingworkflowstatereleased'] = 'Publicado';
$string['maxattempts'] = 'Máximo de tentativas';
$string['maxattempts_help'] = 'O número máximo de tentativas de inscrições que podem ser feitas por um estudante. Depois de esgotado este número de tentativas de envio do estudante não poderá ser reaberto.';
$string['maxgrade'] = 'Nota máxima';
$string['messageprovider:assign_notification'] = 'Notificações de tarefa';
$string['modulename'] = 'Tarefa';
$string['modulename_help'] = 'O módulo de atividade permite a atribuição de um professor para comunicar tarefas, recolher o trabalho e fornecer notas e comentários.

Os alunos podem apresentar qualquer conteúdo digital (arquivos), como documentos de texto, planilhas, imagens ou áudio e videoclipes. Alternativamente, ou adicionalmente, a atribuição pode exigir dos estudantes a digitação do conteúdo diretamente no editor de texto. Uma tarefa também pode ser usada para lembrar aos alunos das atribuições \'mundo real\' que eles precisam para completar off-line, tais como obras de arte e, portanto, não necessita de qualquer conteúdo digital. Os estudantes podem submeter trabalhos, individualmente ou como membro de um grupo.

Ao analisar os trabalhos, os professores podem deixar comentários de feedback e fazer upload de arquivos, como marcar apresentações dos alunos, documentos com comentários ou feedback de áudio falado. Atribuições podem ser classificadas de acordo com uma escala numérica ou customizada ou um método de classificação avançada, como uma rubrica. Notas finais são registradas no livro de notas.';
$string['modulenameplural'] = 'Tarefas';
$string['moreusers'] = '{$a} mais...';
$string['mysubmission'] = 'Minha submissão :';
$string['newsubmissions'] = 'Tarefas apresentadas';
$string['noattempt'] = 'Nenhuma tentativa';
$string['nofiles'] = 'Não há arquivos';
$string['nograde'] = 'Não há nota';
$string['nolatesubmissions'] = 'Não são aceitas submissões atrasadas';
$string['nomoresubmissionsaccepted'] = 'Só é permitido para os participantes que tenham beneficiado de uma extensão';
$string['noonlinesubmissions'] = 'Esta tarefa não requer o envio online';
$string['nosavebutnext'] = 'Próximo';
$string['nosubmission'] = 'Nada foi enviado para esta tarefa';
$string['nosubmissionsacceptedafter'] = 'Nenhum envio aceito depois de';
$string['noteam'] = 'Você não é membro de nenhum grupo. Por favor entre em contato com seu professor.';
$string['notgraded'] = 'Não há notas';
$string['notgradedyet'] = 'Ainda não avaliada';
$string['notifications'] = 'Notificações';
$string['notsubmittedyet'] = 'Ainda não apresentadas';
$string['nousersselected'] = 'Não foi selecionado usuário';
$string['numberofdraftsubmissions'] = 'Rascunhos';
$string['numberofparticipants'] = 'Participantes';
$string['numberofsubmissionsneedgrading'] = 'Precisa de avaliação';
$string['numberofsubmittedassignments'] = 'Enviado';
$string['numberofteams'] = 'Grupos';
$string['offline'] = 'Não há envios online solicitados';
$string['open'] = 'Aberto';
$string['outlinegrade'] = 'Nota: {$a}';
$string['outof'] = '{$a->current} de {$a->total}';
$string['overdue'] = '<font color="red">A tarefa está atrasada há: {$a}</font>';
$string['page-mod-assign-view'] = 'Página principal da tarefa';
$string['page-mod-assign-x'] = 'Qualquer página de tarefa';
$string['participant'] = 'Participante';
$string['pluginadministration'] = 'Administração de tarefas';
$string['pluginname'] = 'Tarefa';
$string['preventsubmissionnotingroup'] = 'Somente membros de grupo podem fazer envio';
$string['preventsubmissionnotingroup_help'] = 'Se habilitado, usuários que não estão em grupos serão proibidos de fazer envios.';
$string['preventsubmissions'] = 'Impede o usuário de fazer outros envios para essa tarefa.';
$string['preventsubmissionsshort'] = 'Impedir modificações no envio';
$string['previous'] = 'Anterior';
$string['quickgrading'] = 'Avaliação rápida';
$string['quickgradingchangessaved'] = 'A nota alterada foi salva';
$string['quickgrading_help'] = 'A avaliação rápida faz com que seja aberta uma caixa de edição de nota ao lado de cada envio, possibilitando, assim, a edição de várias notas de uma só vez.
A avaliação rápida não é compatível com métodos avançados de avaliação. Ela não é recomendada quando há vários avaliadores, pois há risco de sobreposição de avaliações.';
$string['quickgradingresult'] = 'Avaliação rápida';
$string['recordid'] = 'Identificador';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Reabrir até opção de aprovação é incompatível com a avaliação cega, porque as notas não são liberados para o livro de notas até que as identidades estudantis são reveladas.';
$string['requireallteammemberssubmit'] = 'Exigir que todos os membros do grupo enviem';
$string['requireallteammemberssubmit_help'] = 'Se habilitado, todos os membros do grupo devem clicar no botão de confirmação desta tarefa antes que ela seja considerada enviada. Se desabilitada, o envio do grupo será considerado enviado assim que qualquer membro do grupo clicar no botão de envio.';
$string['requiresubmissionstatement'] = 'Exigir aceite da declaração de não plágio ao enviar';
$string['requiresubmissionstatement_help'] = 'Exigir que os alunos aceitem a declaração indicando que o trabalho é seu (não plágio) em todos os envios desta tarefa.';
$string['revealidentities'] = 'Revelar identidades dos estudantes';
$string['revealidentitiesconfirm'] = 'Você tem certeza de que deseja revelar as identidades dos estudantes nesta tarefa? Esta operação não pode ser desfeita. Uma vez que as identidades dos estudantes sejam reveladas, as notas serão publicadas no livro de notas.';
$string['reverttodraft'] = 'Reverter para rascunho.';
$string['reverttodraftforstudent'] = 'Reverter envio para rascunho para o estudante: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Reverter o envio para rescunho';
$string['reviewed'] = 'Revisado';
$string['saveallquickgradingchanges'] = 'Salvar todas as alterações de avaliação rápida';
$string['savechanges'] = 'Salvar mudanças';
$string['savegradingresult'] = 'Nota';
$string['savenext'] = 'Salvar e exibir o próximo';
$string['scale'] = 'Escala';
$string['selectedusers'] = 'Usuários selecionados';
$string['selectlink'] = 'Selecionar ...';
$string['selectuser'] = 'Selecione {$a}';
$string['sendlatenotifications'] = 'Notificar avaliadores sobre submissões atrasadas';
$string['sendlatenotifications_help'] = 'Se habilitado, avaliadores (normalmente professores) recebem uma mensagem quando o aluno envia uma tarefa atrasada. Métodos de envio de mensagem são configuráveis.';
$string['sendnotifications'] = 'Notificar avaliador a respeito de novos envios';
$string['sendnotifications_help'] = 'Se habilitado, avaliadores (geralmente professores) recebem uma mensagem quando o aluno envia uma tarefa. Métodos de mensagem são configuráveis.';
$string['sendstudentnotifications'] = 'Notificar alunos';
$string['sendstudentnotificationsdefault'] = 'Opção padrão para "Notificar estudantes"';
$string['sendstudentnotificationsdefault_help'] = 'Defina o valor padrão para caixa de seleção "Notificar os alunos" no formulário de notas.';
$string['sendstudentnotifications_help'] = 'Se ativado, os alunos recebem uma mensagem sobre a nota atualizada ou feedback.';
$string['sendsubmissionreceipts'] = 'Enviar comprovante de entrega a estudantes';
$string['sendsubmissionreceipts_help'] = 'Esta opção habilita o envio de comprovantes para estudantes. Estudantes receberão uma notificação toda a vez que enviar com sucesso uma tarefa';
$string['setmarkerallocationforlog'] = 'Definir alocação de avaliação : (id={$a->id}, fullname={$a->fullname}, avaliador={$a->marker}).';
$string['setmarkingallocation'] = 'Atribuir avaliador';
$string['setmarkingworkflowstate'] = 'Definir estado do fluxo de avaliação';
$string['setmarkingworkflowstateforlog'] = 'Definir estado no fluxo de avaliação :  (id={$a->id}, nome={$a->fullname}, estado={$a->state}).';
$string['settings'] = 'Configurações da tarefa';
$string['showrecentsubmissions'] = 'Mostrar envios recentes';
$string['status'] = 'Status';
$string['studentnotificationworkflowstateerror'] = 'A configuração do estado do fluxo de trabalho deve ser \'Liberado\' para notificar os alunos.';
$string['submission'] = 'Envio de tarefas';
$string['submissioncopiedhtml'] = '<p>Você fez uma cópia do seu envio anterior \'<i>{$a->assignment}</i>\'.</p>
<p>Você pode ver o status do seu <a href="{$a->url}">envio</a>.</p>';
$string['submissioncopiedsmall'] = 'abs';
$string['submissioncopiedtext'] = 'Você fez uma cópia do seu envio anterior para \'{$a->assignment}\'

Você pode ver o status de seu envio:
{$a->url}';
$string['submissiondrafts'] = 'Exigir que os alunos cliquem no botão enviar';
$string['submissiondrafts_help'] = 'Se habilitado, alunos terão que clicar no botão "Enviar" para declarar seu envio como final. Isto possibilita aos alunos manter uma versão de rascunho no sistema. Se esta configuração for alterada de "Não" para "Sim" depois que os estudantes já tiverem enviado suas tarefas, este envios serão considerados como finais.';
$string['submissioneditable'] = 'Estudantes podem editar essa submissão';
$string['submissionempty'] = 'Sem submissões';
$string['submissionlog'] = 'Estudante: {$a->fullname}, Estado: {$a->status}';
$string['submissionnotcopiedinvalidstatus'] = 'O envio foi copiado pois foi editado após ser reaberto.';
$string['submissionnoteditable'] = 'Estudante não pode editar este envio';
$string['submissionnotready'] = 'Essa tarefa não está pronta para envios:';
$string['submissionplugins'] = 'Plugins de envio';
$string['submissionreceipthtml'] = '<p>Você enviou uma tarefa em <i>{$a->assignment}</i>\'.</p>
<p>Você pode ver aqui o status da sua <a href="{$a->url}">tarefa enviada</a>.</p>';
$string['submissionreceiptotherhtml'] = 'Sua submissão de tarefa para \'<i>{$a->assignment}</i>\' foi submetida. <br /><br /> Você pode ver o status da sua <a href="{$a->url}">submissão de tarefa</a>.';
$string['submissionreceiptothersmall'] = 'Sua submissão de tarefa para {$a->assignment} foi submetida.';
$string['submissionreceiptothertext'] = 'Sua tarefa enviada para
\'{$a->assignment}\' foi submetida.

Você pode ver o status de sua submissão de tarefa:
{$a->url}';
$string['submissionreceipts'] = 'Destinatário do envio de tarefas';
$string['submissionreceiptsmall'] = 'Você enviou sua tarefa para {$a->assignment}';
$string['submissionreceipttext'] = 'Você enviou uma tarefa para \'{$a->assignment}\'

Você pode ver o estado do seu envio:

  {$a->url}';
$string['submissions'] = 'Tarefas enviadas';
$string['submissionsclosed'] = 'Envios encerrados';
$string['submissionsettings'] = 'Configurações de envio';
$string['submissionslocked'] = 'A tarefa não está aceitando envios';
$string['submissionslockedshort'] = 'Alteração de envio não permitida';
$string['submissionsnotgraded'] = 'Envios não avaliados: {$a}';
$string['submissionstatement'] = 'Declaração de envio';
$string['submissionstatementacceptedlog'] = 'Declaração de envio aceita pelo usuário {$a}';
$string['submissionstatementdefault'] = 'Esta tarefa é meu próprio trabalho, exceto onde eu reconheço o uso do trabalho de outras pessoas.';
$string['submissionstatement_help'] = 'Confirmação da declaração do envio da tarefa';
$string['submissionstatus'] = 'Status de envio';
$string['submissionstatus_'] = 'Nenhum envio';
$string['submissionstatus_draft'] = 'Rascunho (não enviado)';
$string['submissionstatusheading'] = 'Status de envio';
$string['submissionstatus_marked'] = 'Avaliado';
$string['submissionstatus_new'] = 'Nenhum envio';
$string['submissionstatus_reopened'] = 'Reaberto';
$string['submissionstatus_submitted'] = 'Enviado para avaliação';
$string['submissionsummary'] = '{$a->status}. Última modificação em {$a->timemodified}';
$string['submissionteam'] = 'Grupo';
$string['submissiontypes'] = 'Tipos de envio';
$string['submitaction'] = 'Enviar';
$string['submitassignment'] = 'Enviar tarefa em definitivo';
$string['submitassignment_help'] = 'Uma vez que a tarefa for enviada você não poderá mais fazer alterações.';
$string['submitforgrading'] = 'Submeter para avaliação';
$string['submitted'] = 'Enviada';
$string['submittedearly'] = 'A tarefa foi enviada {$a} adiantado';
$string['submittedlate'] = 'A tarefa foi enviada {$a} atrasada';
$string['submittedlateshort'] = '{$a} atrasado';
$string['subplugintype_assignfeedback'] = 'Plugin do comentário';
$string['subplugintype_assignfeedback_plural'] = 'Plugin de comentários';
$string['subplugintype_assignsubmission'] = 'Plugin de submissão';
$string['subplugintype_assignsubmission_plural'] = 'Plugins de submissão';
$string['teamsubmission'] = 'Envio em grupos de estudantes';
$string['teamsubmissiongroupingid'] = 'Agrupamento para grupos de estudantes';
$string['teamsubmissiongroupingid_help'] = 'Este é o grupo que a atribuição irá usar para encontrar grupos para grupos de estudantes. Se não definido - o conjunto padrão de grupos será usado.';
$string['teamsubmission_help'] = 'Se habilitado, os estudantes serão divididos em grupos com base no conjunto padrão de grupos ou de um agrupamento personalizado. A apresentação do grupo será compartilhada entre os membros do grupo e de todos os membros do grupo vão ver cada outras mudanças para a apresentação.';
$string['textinstructions'] = 'Instruções da tarefa';
$string['timemodified'] = 'Última modificação';
$string['timeremaining'] = 'Tempo restante';
$string['ungroupedusers'] = 'A configuração "Somente membros de grupo podem fazer envio" está ligada e existem usuários não alocados em grupos. Isso impedira que estes usuários consigam enviar tarefas.';
$string['unlimitedattempts'] = 'Ilimitado';
$string['unlimitedattemptsallowed'] = 'Tentativas Ilimitadas permitidas.';
$string['unlocksubmissionforstudent'] = 'Permitir envio para o estudante: (id={$a->id}, nome={$a->fullname}).';
$string['unlocksubmissions'] = 'Desbloquear envios';
$string['updategrade'] = 'Atualizar nota';
$string['updatetable'] = 'Salvar e atualizar tabela';
$string['upgradenotimplemented'] = 'Atualização não implementada no plugin ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Prorrogação concedida até: {$a}';
$string['usergrade'] = 'Nota do usuário';
$string['userswhoneedtosubmit'] = 'Usuários que precisam enviar: {$a}';
$string['validmarkingworkflowstates'] = 'Estados de fluxo de avaliação válidos';
$string['viewbatchmarkingallocation'] = 'Ver página de alocação de avaliação em lote.';
$string['viewbatchsetmarkingworkflowstate'] = 'Ver página de alteração em lote do estado do fluxo de avaliação.';
$string['viewfeedback'] = 'Ver  avaliação e feedback';
$string['viewfeedbackforuser'] = 'Ver feedback para o usuário {$a}';
$string['viewfull'] = 'Ver completo';
$string['viewfullgradingpage'] = 'Abrir a página de avaliação completa para enviar feedback';
$string['viewgradebook'] = 'Ver livro de notas';
$string['viewgrading'] = 'Ver/Avaliar todos os envios';
$string['viewgradingformforstudent'] = 'Ver página de avaliação para o estudante: (id={$a->id}, nome={$a->fullname}).';
$string['viewownsubmissionform'] = 'Ver própria página de envio de tarefa.';
$string['viewownsubmissionstatus'] = 'Ver própria página de status de envio.';
$string['viewrevealidentitiesconfirm'] = 'Ver identidade do estudante na página de confirmação';
$string['viewsubmission'] = 'Ver envio';
$string['viewsubmissionforuser'] = 'Ver envio para usuário: {$a}';
$string['viewsubmissiongradingtable'] = 'Ver tabela de avaliação de tarefas.';
$string['viewsummary'] = 'Ver resumo';
$string['workflowfilter'] = 'Filtro por fluxo de avaliação';
