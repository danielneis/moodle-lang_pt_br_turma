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
 * Strings for component 'tool_task', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['blocking'] = 'Bloqueando';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Núcleo';
$string['default'] = 'Padrão';
$string['disabled'] = 'Desabilitado';
$string['disabled_help'] = 'Tarefas agendadas desabilitadas não são executadas pelo cron, entretanto elas podem ainda ser executadas manualmente pela ferramenta CLI.';
$string['edittaskschedule'] = 'Editar agenda de tarefa: {$a}';
$string['faildelay'] = 'Falha por atraso';
$string['lastruntime'] = 'Último período';
$string['nextruntime'] = 'Próximo período';
$string['plugindisabled'] = 'Plugin desabilitado';
$string['pluginname'] = 'Configuração de tarefa agendada';
$string['resettasktodefaults'] = 'Redefinir a agenda da tarefa para o padrão';
$string['resettasktodefaults_help'] = 'Isto irá descartar as alterações locais e reverter a agenda para esta tarefa de volta para as configurações originais.';
$string['scheduledtaskchangesdisabled'] = 'As alterações na lista de tarefas agendadas tem sido impedidas na configuração do Moodle';
$string['scheduledtasks'] = 'Tarefas agendadas';
$string['taskdisabled'] = 'Tarefa desabilitada';
$string['taskscheduleday'] = 'Dia';
$string['taskscheduleday_help'] = 'Campo Dia do mês para agendamento de tarefas. O campo usa o mesmo formato unix cron. Alguns exemplos são: <br/><ul><li> <strong>*</strong> Todos os dias </li><li> <strong>*/2</strong> Cada 2 dias </li><li> <strong>1</strong> O primeiro de cada mês </li><li> <strong>1,15</strong> O primeiro e o décimo quinto dia de cada mês </li></ul>';
$string['taskscheduledayofweek'] = 'Dia da semana';
$string['taskscheduledayofweek_help'] = 'Campo Dia da Semana para agenda de tarefas. O campo usa o mesmo formato unix cron. Alguns exemplos são: <br/><ul><li> <strong>*</strong> Todos os dias </li><li> <strong>0</strong> Todos os domingos </li><li> <strong>6</strong> Todo sábado </li><li> <strong>1,5</strong> Toda segunda-feira e sexta-feira </li></ul>';
$string['taskschedulehour'] = 'Hora';
$string['taskschedulehour_help'] = 'Campo Hora para agendamento da tarefa. O campo usa o mesmo formato unix cron. Alguns exemplos são: <br/><ul><li> <strong>*</strong> A cada hora </li><li> <strong>*/2</strong> cada 2 horas </li><li> <strong>10/02</strong> Cada hora das 02:00 as 10:00 (inclusive) </li><li> <strong>2,6,9</strong> 02:00, 06:00 e 09:00 </li></ul>';
$string['taskscheduleminute'] = 'Minuto';
$string['taskscheduleminute_help'] = 'Campo Minuto para agendamento de tarefas. O campo usa o mesmo formato unix cron. Alguns exemplos são: <br/><ul><li> <strong>*</strong> A cada minuto </li><li> <strong>*/5</strong> a cada 5 minutos </li><li> <strong>10/02</strong> Cada minuto entre 2 e 10 após a hora (inclusive) </li><li> <strong>2,6,9</strong> 2, 6 e 9 minutos após a hora </li></ul>';
$string['taskschedulemonth'] = 'Mês';
$string['taskschedulemonth_help'] = 'Campo Mês para agendamento de tarefas. O campo usa o mesmo formato unix cron. Alguns exemplos são: <br/><ul><li> <strong>*</strong> Todo mês </li><li> <strong>*/2</strong> Cada segundo mês </li><li> <strong>1</strong> Todo mês de janeiro </li><li> <strong>1,5</strong> Todo mês de janeiro e maio </li></ul>';
