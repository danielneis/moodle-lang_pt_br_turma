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
 * Strings for component 'completion', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Nota de aprovação';
$string['activities'] = 'Atividades';
$string['activitiescompleted'] = 'Atividades concluidas';
$string['activitiescompletednote'] = 'Nota: O monitoramento de conclusão de atividades precisa estar configurado nas atividades para que estas apareçam na lista a seguir.';
$string['activityaggregation'] = 'Agregador de condição';
$string['activityaggregation_all'] = 'TODAS as atividades selecionadas devem ser marcadas com concluídas';
$string['activityaggregation_any'] = 'QUALQUER uma das atividades deve ser marcada como concluída';
$string['activitycompletion'] = 'Conclusão de atividades na turma';
$string['aggregationmethod'] = 'Forma de agregação';
$string['all'] = 'Todos';
$string['any'] = 'Qualquer';
$string['approval'] = 'Aprovação';
$string['badautocompletion'] = 'Quando selecionar conclusão automática deve também habilitar pelo menos um requisito (abaixo)';
$string['completed'] = 'Concluído';
$string['completedunlocked'] = 'Opções de conclusão desbloqueadas';
$string['completedunlockedtext'] = 'Quando gravar as mudanças, o estado de progresso realizado pelos cursistas será apagado. Se mudar de ideia, não grave os dados deste formulário.';
$string['completedwarning'] = 'Opções de conclusão bloqueadas';
$string['completedwarningtext'] = 'Um ou mais estudantes ({$a}) já marcaram esta atividade como concluída. Mudar os requisitos de conclusão apagará o estado de progresso e poderá causar confusão. Por isto as opções estão bloqueadas e não devem ser desbloqueadas a menos que seja absolutamente necessário.';
$string['completion'] = 'Acompanhamento de Conclusão';
$string['completionactivitydefault'] = 'Usar padrões para atividades';
$string['completion-alt-auto-enabled'] = 'O sistema marca este item como concluído de acordo com as condições: {$a}';
$string['completion-alt-auto-fail'] = 'Concluído: {$a} (não obteve nota para aprovação)';
$string['completion-alt-auto-n'] = 'Não concluído(s): {$a}';
$string['completion-alt-auto-pass'] = 'Concluído: {$a} (foi atingida a nota de aprovação)';
$string['completion-alt-auto-y'] = 'Concluído: {$a}';
$string['completion-alt-manual-enabled'] = 'Os alunos podem marcar manualmente este item como concluído: {$a}';
$string['completion-alt-manual-n'] = 'Não concluído(s): {$a}. Selecione para marcar como concluído.';
$string['completion-alt-manual-y'] = 'Concluído(s): {$a}. Selecione para marcar como não concluído.';
$string['completion_automatic'] = 'Mostrar atividade como concluída quando as condições forem satisfeitas';
$string['completiondefault'] = 'Acompanhamento de conclusão padrão';
$string['completiondisabled'] = 'Desativado, não é exibido nas configurações de atividade';
$string['completionduration'] = 'Inscrição';
$string['completionenabled'] = 'Habilitado, controle pela configuração de atividades e de requisitos para concluí-las';
$string['completionexpected'] = 'Conclusão esperada em';
$string['completionexpected_help'] = 'Esta configuração especifica a data em que a atividade está prevista para ser concluída. A data não é mostrada aos alunos e só é exibida no relatório de conclusão da atividade.';
$string['completion-fail'] = 'Concluído (não alcançar grau passagem)';
$string['completion_help'] = 'Se habilitada, a conclusão de atividade é acompanhada, manual ou automaticamente, sob certas condições. Se desejado, podem ser configuradas múltiplas condições. Nesse caso, a atividade só será considerada concluída quando TODAS as condições forem satisfeitas.

Uma marca próximo ao nome da atividade na página da turma indica que ela foi concluída.';
$string['completionicons'] = 'Caixas para marcar atividades concluídas';
$string['completionicons_help'] = 'Uma marca próxima ao nome da atividade pode ser usada para indicar que a atividade foi concluída.

Se for mostrada uma caixa com borda pontilhada, a marca aparecerá automaticamente quando você completar a atividade de acordo com as condições estabelecidas pelo professor.

Se for mostrada uma caixa com borda sólida, você pode clicar nela para marcar quando achar que já concluiu a atividade. (Se mudar de ideia é só clicar novamente). A marca é opcional e é só uma forma de acompanhar seu avanço na turma.';
$string['completion_manual'] = 'Os alunos podem marcar manualmente a atividade como concluída';
$string['completionmenuitem'] = 'Conclusão';
$string['completion-n'] = 'Não concluído(a)';
$string['completion_none'] = 'Não indicar a conclusão de atividade';
$string['completionnotenabled'] = 'Acompanhamento de conclusão não habilitado';
$string['completionnotenabledforcourse'] = 'Acompanhamento de conclusão não está habilitado neste curso';
$string['completionnotenabledforsite'] = 'Acompanhamento de conclusão não está habilitado neste site';
$string['completionondate'] = 'Data';
$string['completionondatevalue'] = 'Usuário precisa permanecer inscrito até';
$string['completion-pass'] = 'Concluído (grau passagem alcançado)';
$string['completionsettingslocked'] = 'Configurações de conclusão bloqueadas';
$string['completion-title-manual-n'] = 'Marcar como concluído: {$a}';
$string['completion-title-manual-y'] = 'Marcar como não concluído: {$a}';
$string['completionusegrade'] = 'Requer nota';
$string['completionusegrade_desc'] = 'Estudante deve receber uma nota, para concluir essa atividade';
$string['completionusegrade_help'] = 'Se habilitado, a atividade será considerada concluída quando o cursista receber uma nota. Os ícones de aprovado ou reprovado podem ser exibidos se for fixada uma nota de aprovação para a atividade.';
$string['completionview'] = 'Requer visualização';
$string['completionview_desc'] = 'Aluno deve visualizar esta atividade para concluí-la';
$string['completion-y'] = 'Concluído';
$string['configcompletiondefault'] = 'A configuração padrão para o monitoramento de conclusão ao criar novas atividades.';
$string['configenablecompletion'] = 'Quando habilitado, permite ligar o acompanhamento de conclusão de atividades no nível da turma.';
$string['confirmselfcompletion'] = 'Confirmar auto-concluir';
$string['courseaggregation'] = 'Agregador de condição';
$string['courseaggregation_all'] = 'TODOS os cursos selecionados precisam ser marcados como concluídos';
$string['courseaggregation_any'] = 'QUALQUER um dos cursos selecionados precisa ser marcado como concluído';
$string['coursealreadycompleted'] = 'Você já completou este curso';
$string['coursecomplete'] = 'Curso concluído';
$string['coursecompleted'] = 'Curso concluído';
$string['coursecompletion'] = 'Conclusão de curso';
$string['coursecompletioncondition'] = 'Condição: {$a}';
$string['coursegrade'] = 'Nota da turma';
$string['coursesavailable'] = 'Cursos disponíveis';
$string['coursesavailableexplaination'] = 'Nota: O monitoramento de conclusão de curso precisa estar configurado em algum curso para que estes apareçam na lista a seguir';
$string['criteria'] = 'Critérios';
$string['criteriagroup'] = 'Grupo de critérios';
$string['criteriarequiredall'] = 'Todos os critérios abaixo são necessários';
$string['criteriarequiredany'] = 'Qualquer um dos critérios abaixo são necessários';
$string['csvdownload'] = 'Download em formato de planilha (UTF-8. csv)';
$string['datepassed'] = 'Data passada';
$string['days'] = 'Dias';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['deletecompletiondata'] = 'Excluir dados de conclusão';
$string['dependencies'] = 'Dependências';
$string['dependenciescompleted'] = 'Conclusão de outros cursos';
$string['editcoursecompletionsettings'] = 'Editar configurações de conclusão da turma';
$string['enablecompletion'] = 'Ativar acompanhamento de conclusão';
$string['enablecompletion_help'] = 'Se habilitado, condições de conclusão de atividades e conclusão de curso poderão ser configuradas.';
$string['enrolmentduration'] = 'Duração da inscrição';
$string['enrolmentdurationlength'] = 'O usuário deve permanecer inscritos para';
$string['err_noactivities'] = 'Informações de conclusão não estão ativadas para nenhuma atividade, de modo que nenhuma informação pode ser exibida. Você pode ativar informações de conclusão editando as configurações para uma atividade.';
$string['err_nocourses'] = 'O acompanhamento de conclusão de curso não está habilitado para nenhum outra turma e, por isto, nada pode ser mostrado. Você pode habilitar o acompanhamento de conclusão de curso nas configurações do curso.';
$string['err_nograde'] = 'Não foi fixada uma nota de aprovação para este curso. Para habilitar estes critérios deve criar uma nota de aprovação para a turma.';
$string['err_noroles'] = 'Não há papéis com a permissão \'moodle/course:markcomplete\' neste curso.';
$string['err_nousers'] = 'Não há cursistas neste curso ou grupo para os que possa ser mostrada a informação de progresso na turma. (Por padrão, a informação de progresso só é mostrada para os cursistas, assim, este erro será mostrado se não houver cursistas. Os administradores podem alterar esta opção nas telas de administração).';
$string['err_settingslocked'] = 'Um ou mais cursistas já cumpriram o critério, por isto a configuração está bloqueada. Desbloquear a configuração dos critérios apagará os dados de usuários e poderá causar confusão.';
$string['err_system'] = 'Ocorreu um erro interno no sistema de acompanhamento de tarefas concluídas. (Os administradores do ambiente podem habilitar a informação sobre falhas para ver mais detalhes).';
$string['eventcoursecompleted'] = 'Curso concluído';
$string['eventcoursecompletionupdated'] = 'Conclusão da turma atualizada';
$string['eventcoursemodulecompletionupdated'] = 'Conclusão de módulo de curso atualizada';
$string['excelcsvdownload'] = 'Download em formato compatível com Excel (. csv)';
$string['fraction'] = 'Fração';
$string['graderequired'] = 'Nota de curso obrigatória';
$string['gradexrequired'] = '{$a} necessário';
$string['inprogress'] = 'Em andamento';
$string['manualcompletionby'] = 'Conclusão manual por outros';
$string['manualcompletionbynote'] = 'Nota: A permissão moodle/course:markcomplete deve ser permitido para um papel aparecer na lista.';
$string['manualselfcompletion'] = 'Conclusão manual por si mesmo';
$string['manualselfcompletionnote'] = 'Nota: O bloco de auto conclusão deverá ser adicionado à turma se auto conclusão manual for ativada.';
$string['markcomplete'] = 'Marcar como concluído';
$string['markedcompleteby'] = 'Marcado como concluída por {$a}';
$string['markingyourselfcomplete'] = 'Se marcar como concluído';
$string['moredetails'] = 'Mais detalhes';
$string['nocriteriaset'] = 'Não existem critérios de conclusão para este curso';
$string['notcompleted'] = 'Não concluído';
$string['notenroled'] = 'Você não está inscrito como estudante neste curso';
$string['nottracked'] = 'Você não está sendo monitorado pelo sistema de conclusão neste curso';
$string['notyetstarted'] = 'Não iniciado ainda';
$string['overallaggregation'] = 'Requisitos de conclusão';
$string['overallaggregation_all'] = 'Curso é completo quando estão reunidas todas as condições';
$string['overallaggregation_any'] = 'Curso é completo quando qualquer uma das condições forem atendidas';
$string['pending'] = 'Pendentes';
$string['periodpostenrolment'] = 'Período de pós-inscrição';
$string['progress'] = 'Progresso do aluno';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progresso: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconhecimento de aprendizagem anterior';
$string['remainingenroledfortime'] = 'Permanecer matriculado por um período específico de tempo';
$string['remainingenroleduntildate'] = 'Permanecer matriculado até uma data especificada';
$string['reportpage'] = 'Exibindo usuários {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Critérios exigidos';
$string['restoringcompletiondata'] = 'Escrevendo dados de conclusão';
$string['roleaggregation'] = 'Requer condição';
$string['roleaggregation_all'] = 'Todos os papéis selecionados para marcar para marcar quando a condição for atendida';
$string['roleaggregation_any'] = 'Quaisquer dos papéis selecionados para marcar quando a condição for atendida';
$string['roleidnotfound'] = 'ID do Papel {$a} não encontrado';
$string['saved'] = 'Salvo';
$string['seedetails'] = 'Ver detalhes';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Auto conclusão';
$string['showinguser'] = 'Exibindo usuário';
$string['unenrolingfromcourse'] = 'Cancelando inscrição na turma';
$string['unenrolment'] = 'Desinscrição';
$string['unit'] = 'Unidade';
$string['unlockcompletion'] = 'Desbloquear opções de conclusão';
$string['unlockcompletiondelete'] = 'Desbloquear opções de conclusão e apagar os dados de progresso dos usuários';
$string['usealternateselector'] = 'Usar o seletor de cursos alternativo';
$string['usernotenroled'] = 'Usuário não está inscrito neste curso';
$string['viewcoursereport'] = 'Ver relatório da turma';
$string['viewingactivity'] = 'Visualizando o {$a}';
$string['writingcompletiondata'] = 'Gravando dados de conclusão';
$string['xdays'] = '{$a} dias';
$string['yourprogress'] = 'Seu progresso';
