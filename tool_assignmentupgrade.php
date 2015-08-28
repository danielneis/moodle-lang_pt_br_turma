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
 * Strings for component 'tool_assignmentupgrade', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_assignmentupgrade
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'Você tem certeza?';
$string['areyousuremessage'] = 'Você tem certeza que quer atualizar a tarefa "{$a->name}"?';
$string['assignmentid'] = 'ID da tarefa';
$string['assignmentnotfound'] = 'Tarefa não pode ser encontrada (id={$a})';
$string['assignmentsperpage'] = 'Tarefas por página';
$string['assignmenttype'] = 'Tipo de tarefa';
$string['backtoindex'] = 'Voltar ao índice';
$string['batchoperations'] = 'Operações em lote';
$string['batchupgrade'] = 'Atualizar múltiplas tarefas';
$string['confirmbatchupgrade'] = 'Confirmar atualização em lote de tarefas';
$string['conversioncomplete'] = 'Tarefas convertidas';
$string['conversionfailed'] = 'A conversão da tarefa não foi bem sucedida. O log da atualização foi: <br />{$a}';
$string['listnotupgraded'] = 'Listar tarefas que não foram atualizadas';
$string['listnotupgraded_desc'] = 'Você pode atualizar tarefas individualmente daqui';
$string['noassignmentsselected'] = 'Nenhuma tarefa selecionada';
$string['noassignmentstoupgrade'] = 'Não há tarefas que requerem atualização';
$string['notsupported'] = '';
$string['notupgradedintro'] = 'Esta página lista as tarefas criadas com uma versão antiga do Moodle que não foram atualizadas para o novo módulo de tarefa do Moodle 2.3. Nem todas as tarefas podem ser atualizadas - se foram criadas a partir de um tipo personalizado de tarefa, então esse tipo de tarefa precisa ser atualizado para o novo formato de plugin da tarefa para que a atualização seja completa.';
$string['notupgradedtitle'] = 'Tarefas não atualizadas';
$string['pluginname'] = 'Ajuda de atualização de tarefas';
$string['select'] = 'Selecione';
$string['submissions'] = 'Envios';
$string['supported'] = 'Atualizar';
$string['unknown'] = 'Desconhecido';
$string['updatetable'] = 'Atualizar tabela';
$string['upgradable'] = 'Atualizável';
$string['upgradeall'] = 'Atualizar todas as tarefas';
$string['upgradeallconfirm'] = 'Atualizar todas as tarefas?';
$string['upgradeassignmentfailed'] = 'Resultado: Atualização falhou. O log do upbrade foi: <br/><div class="tool_assignmentupgrade_upgradelog">{$a->log}</div>';
$string['upgradeassignmentsuccess'] = 'Resultado: Atualização bem sucedida';
$string['upgradeassignmentsummary'] = 'Atualizar tarefa: {$a->name} (Course: {$a->shortname})';
$string['upgradeprogress'] = 'Atualizar tarefa {$a->current} of {$a->total}';
$string['upgradeselected'] = 'Atualizar tarefas selecionadas';
$string['upgradeselectedcount'] = 'Atualizar {$a} tarefas selecionadas?';
$string['upgradesingle'] = 'Atualizar tarefa individualmente';
$string['viewcourse'] = 'Ver o curso com a tarefa convertida';
