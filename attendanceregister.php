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
 * Strings for component 'attendanceregister', language 'pt_br', branch 'MOODLE_26_STABLE'
 *
 * @package   attendanceregister
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Você tem certeza que deseja excluir este sessão offline?';
$string['attendanceregister:addinstance'] = 'Adicionar novo registro de presença';
$string['attendanceregister:addotherofflinesess'] = 'Pode adicionar sessões offline nos registros de outras pessoas';
$string['attendanceregister:addownofflinesess'] = 'Pode adicionar sessões offline nos seus próprios registros';
$string['attendanceregister:deleteotherofflinesess'] = 'Pode excluir sessões offline nos registros de outras pessoas';
$string['attendanceregister:deleteownofflinesess'] = 'Pode excluir sessões offline nos seus próprios registros';
$string['attendanceregister:recalcsessions'] = 'Pode forçar recálculos das sessões dos registros de presença';
$string['attendanceregister:tracked'] = 'É rastreado pelo registro de presença';
$string['attendanceregister:viewotherregisters'] = 'Pode visualizar registros de presença de outras pessoas';
$string['attendanceregister:viewownregister'] = 'Pode visualizar seus próprios registros de presença';
$string['back_to_normal'] = 'Voltar para a versão normal';
$string['back_to_tracked_user_list'] = 'Voltar a lista de usuários rastreados';
$string['click_for_detail'] = 'Clicar para detalhes';
$string['comments'] = 'Comentários';
$string['completiondurationgroup'] = 'Tempo total rastreado';
$string['completiontotalduration'] = 'Tempo requerido [minutos]';
$string['count'] = '#';
$string['dayscertificable'] = 'Dias atrás';
$string['dayscertificable_exceeded'] = 'Não devem ter mais do que {$a} dias atrás';
$string['dayscertificable_help'] = 'Limite de quão antiga as sessões offline podem ser. <br /> Um aluno não pode gravar uma sessão offline mais antiga do que esse número de dias.';
$string['duration'] = 'Duração';
$string['duration_hh_mm'] = '{$a->hours} h, {$a->minutes} min';
$string['duration_mm'] = '{$a->minutes} min';
$string['enable_offline_sessions_certification'] = 'Ativar Sessões offline';
$string['end'] = 'Fim';
$string['first_calc_at_next_cron_run'] = 'Qualquer sessão no passado será exibida na próxima execução do Cron';
$string['force_recalc_all_session'] = 'Recalcular todas as sessões on-line';
$string['force_recalc_all_session_help'] = 'Excluir e recalcular todas as sessões on-line de todos os usuários rastreados. <br />Normalmente você <b>não precisa fazê-lo!</b> <br /> Novas sessões são calculados automaticamente em segundo plano (depois de algum atraso). <br />Esta operação pode ser útil <b>apenas:</b> <ul><li> Depois de mudar o papel de um usuário que já atuou em qualquer um dos cursos rastreados com um papel diferente (ou seja, mudança de professor para aluno, quando os alunos são rastreados e professores não são). </li><li> Depois de modificar as definições de registro que afeta  o cálculos das sessões (por exemplo, <i>o modo de rastreamento de atendimento, timeout de sessão online )</i> </li></ul> Você <b>não precisa recalcular ao registrar novos usuários!</b> <br /><br /> Recálculo pode ser executado imediatamente ou agendada para a próxima execução do cron. Execução agendada pode ser mais eficiente para cursos muito lotados.';
$string['force_recalc_all_session_now'] = 'Recalcular sessões, agora';
$string['force_recalc_user_session'] = 'Recalcular sessões on-line deste usuário';
$string['force_recalc_user_session_help'] = 'Excluir e recalcular todas as sessões on-line deste usuário. <br /> Normalmente você <b>não precisa fazê-lo!</b> <br /> Novas sessões são calculados automaticamente em segundo plano (depois de algum atraso). <br /> Esta operação pode ser útil <b>apenas:</b> <ul><li> Depois de mudar o papel do usuário que já atuou em qualquer um dos cursos rastreados com um papel diferente (ou seja, mudança de professor para aluno, quando os alunos são rastreados e professores não são). </li><li> Depois de modificar as definições de registro que afeta  o cálculos das sessões (por exemplo, <i>o modo de rastreamento de atendimento, timeout de sessão online )</i> </li></ul>';
$string['fullname'] = 'Nome';
$string['grandtotal_time'] = 'Tempo total';
$string['insert_new_offline_session'] = 'Inserir uma sessão de trabalho novo offline';
$string['insert_new_offline_session_for_another_user'] = 'Inserir uma sessão de trabalho novo offline para {$a->fullname}';
$string['last_calc_online_session_logout'] = 'Último registro de fim de sessão online (exceto sessão atual)';
$string['last_session_logout'] = 'Fim da Última Sessão';
$string['last_site_access'] = 'Última atividade no site';
$string['last_site_login'] = 'Último login no site';
$string['login_must_be_before_logout'] = 'Iniciar depois do fim!';
$string['logout_is_future'] = 'Não pode ser no futuro';
$string['mandatory_offline_sessions_comments'] = 'Comentários obrigatórios';
$string['mandatoryofflinespecifycourse'] = 'Seleção do Curso obrigatório';
$string['mandatoryofflinespecifycourse_help'] = 'A especificação de uma curso nas sessões offline será obrigatória.';
$string['maynotaddselfcertforother'] = 'Você não pode adicionar um sessões offline para outros usuários.';
$string['modulename'] = 'Registro de presença';
$string['modulename_help'] = 'Registro de Presença calcula o tempo que os usuários passam trabalhando em cursos online. <br /> Opcionalmente permite o registro atividades offline do usuário. <br /> Dependendo do modo de rastreamento, o registro pode rastrear as atividades em um único curso, em todos os cursos da mesma categoria ou em todos os cursos "Meta ligados" no Curso que Registro de Presença esteja incluído <br />Sessões de trabalho online são calculadas com os registros de log gravados pelo Moodle. <br /> <b>Novas sessões on-line são adicionados com algum atraso pelo cron, após o logout do usuário.</b>';
$string['modulenameplural'] = 'Registros de presença';
$string['never'] = '(Nunca)';
$string['no_refcourse'] = '(Sem Curso especificado)';
$string['no_session'] = 'Nenhuma sessão';
$string['no_session_for_this_user'] = '- Nenhuma Sessão para este usuário, ainda -';
$string['no_tracked_user'] = '- Nenhum usuário rastreado por este registro de presença -';
$string['not_specified'] = '(Não especificado)';
$string['offline'] = 'Offline';
$string['offlinecomments'] = 'Comentários dos usuários';
$string['offlinecomments_help'] = 'Ativar recurso de adicionar comentários textuais às sessões offline';
$string['offline_refcourse_duration'] = 'Tempo Offline, Curso:';
$string['offline_session_comments'] = 'Comentários';
$string['offline_session_comments_help'] = 'Descreva o tema da sessão de trabalho offline.';
$string['offline_session_deleted'] = 'Sessão offline excluída';
$string['offline_session_end'] = 'Fim';
$string['offline_session_ref_course'] = 'Ref.Curso';
$string['offline_session_ref_course_help'] = 'Selecione o curso no qual o trabalho offline foi realizado ou o tópico do curso abordado no trabalho.';
$string['offline_session_saved'] = 'Sessão offline nova salva';
$string['offline_sessions_certification'] = 'Sessões de trabalho offline';
$string['offline_sessions_certification_help'] = 'Permitir aos usuários inserir sessões offline de trabalho. <br /> Este é um tipo de <i>auto-certificação</i> do trabalho realizado. <br />';
$string['offline_session_start'] = 'Iniciar';
$string['offline_session_start_help'] = 'Selecione data e hora de início e fim da trabalho da sessão offline que você quer enviar. <br /> A sessão offline não pode sobrepor qualquer sessão previamente gravada, online ou offline, nem a sessão online atual.';
$string['offline_sessions_total_duration'] = 'Tempo total offline';
$string['offlinespecifycourse'] = 'Especifique Curso de Sessões offline';
$string['offlinespecifycourse_help'] = 'Permitir que o usuário selecione o curso da sessão offline relacionada. <br /> Esta opção só tem sentido se registro de presença estiver no modo de rastreamento para mais de um curso(Por exemplo: mode de rastreamento "Categoria" ou "Meta-ligado")';
$string['online'] = 'Online';
$string['online_offline'] = 'Online/Offline';
$string['online_sessions_total_duration'] = 'Tempo Total das Sessões Online';
$string['online_session_updated'] = 'Sessões Online atualizadas';
$string['online_session_updated_report'] = '{$a->fullname} sessões online atualizadas: {$a->numnewsessions} novas encontradas';
$string['onlyrealusercanaddofflinesessions'] = 'Apenas usuário real pode adicionar uma sessão offline';
$string['onlyrealusercandeleteofflinesessions'] = 'Apenas usuário real pode excluir sessões offline';
$string['overlaps_current_session'] = 'Sobrepõe a sessão online atual (desde acesso corrente)';
$string['overlaps_old_sessions'] = 'Sobrepõe outra sessão, seja online ou offline';
$string['pluginadministration'] = 'Administração do registro de presenças';
$string['pluginname'] = 'Registro de Presenças';
$string['prev_site_login'] = 'Acesso anterior no site';
$string['recalc_already_pending'] = '(Já pendentes para execução no próximo Cron)';
$string['recalc_complete'] = 'Recálculo de sessões concluído';
$string['recalc_scheduled'] = 'Recálculo sessão foi agendado. Ele será executado no próximo Cron';
$string['recalc_scheduled_on_next_cron'] = 'Recálculo sessão está agendado para execução no próximo Cron';
$string['ref_course'] = 'Ref.Curso';
$string['registername'] = 'Nome do registro de frequência';
$string['registertype'] = 'Modo de rastreamento do registro de presença';
$string['registertype_help'] = 'Modos de rastreamento do registro de presença determina como será realizado o rastreamento(Por exemplo onde a atividade do usuário será rastreada):
* _Somente este Curso_: somente no curso onde a instância do registro de presença foi configurada.
* _Todos os cursos na mesma categoria_: a atividade será monitorada em todos os outros cursos na mesma categoria do curso onde a instância do registro de presença foi configurada.
* _Todos os cursos ligados por um curso meta link_: a atividade será monitorada neste curso em todos os outros cursos ligados por ligação meta curso.';
$string['schedule_reclalc_all_session'] = 'Agendar o recálculo das sessões';
$string['select_a_course'] = '- Selecione um curso -';
$string['select_a_course_if_any'] = '- Selecione um curso, se for o caso -';
$string['session_added_by_another_user'] = 'Adicionado por: {$a}';
$string['sessions_grandtotal_duration'] = 'Tempo Total Geral';
$string['sessiontimeout'] = 'Timeout de sessão online';
$string['sessiontimeout_help'] = 'Timeout da sessão é usado para estimar a duração da sessão online. <br />  Sessões on-line serão pelo menos <b>metade</b> da duração do tempo limite de sessão. <br /> Note que se o timeout da sessão é muito longo, o registro tende a superestimar duração das sessões online. <br /> Se for muito curto, sessões reais serão divididas em muitas sessões mais curtas. <br /> <h3>Explicação Detalhada</h3> Sessões de trabalho on-line são <b>estimadas</b> pelos registros no log do Usuário nos Cursos rastreados (ver <i>Modo de rastreamento do registro de presença).</i> <br/> Se um período de tempo é mais curto do que o tempo limite de sessão decorrido entre dois registros do log consecutivos, o registro de presença considera que o usuário está continuamente trabalhando online (ou seja, a continuidade da sessão). <br /> Se o período de tempo decorrido é mais longo do que o tempo limite de sessão, o registro de presença considera que o usuário parou de trabalhar online <b>metade</b> do tempo limite da sessão após o registro de log anterior (ou seja, a sessão termina) e voltou no seguinte  registro de log (ou seja, uma nova sessão é iniciada)';
$string['show_my_sessions'] = 'Mostrar minhas sessões';
$string['show_printable'] = 'Mostrar versão para impressão';
$string['start'] = 'Iniciar';
$string['total_time_offline'] = 'Tempo Total Offline';
$string['total_time_online'] = 'Tempo Total Online';
$string['tracked_courses'] = 'Cursos Rastreados';
$string['tracked_users'] = 'Usuários Rastreados';
$string['type_category'] = 'Todos os cursos na mesma categoria';
$string['type_course'] = 'Somente este Curso';
$string['type_meta'] = 'Todos os Cursos vinculados por Curso meta link';
$string['unknown'] = '(Desconhecido)';
$string['unreasoneable_session'] = 'Você tem certeza? Isso é mais do que {$a} horas de duração!';
$string['updating_online_sessions_of'] = 'Atualizando sessões online de {$a}';
$string['user_sessions_summary'] = 'Resumo das sessões do usuário';
