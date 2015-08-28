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
 * Strings for component 'assignfeedback_offline', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   assignfeedback_offline
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Confirmar importação notas';
$string['default'] = 'Habilitado por padrão';
$string['default_help'] = 'Se habilitado, a avaliação offline com planilhas será ativada por padrão para todas as novas tarefas.';
$string['downloadgrades'] = 'Baixar planilha de notas';
$string['enabled'] = 'Planilha de notas offline';
$string['enabled_help'] = 'Se habilitado , o professor poderá baixar e enviar uma planinha com as notas dos alunos ao avaliar as tarefas.';
$string['feedbackupdate'] = 'Definer o campo"{$a->field}" de "{$a->student}" para "{$a->text}"';
$string['gradelockedingradebook'] = 'A nota foi bloqueada no livro de notas para {$a}';
$string['graderecentlymodified'] = 'A avaliação foi modificada no Moodle mais recentemente do que na planilha de classificação para {$a}';
$string['gradesfile'] = 'Planilha de notas (formato csv)';
$string['gradesfile_help'] = 'Avaliando planilha com notas alteradas. Este arquivo deve ser um arquivo CSV que foi baixado a partir desta tarefa e deve conter colunas para a avaliação do estudante, e identificador. A codificação para o arquivo deve ser "UTF-8"';
$string['gradeupdate'] = 'Definir a nota {$a->grade} para o aluno {$a->student}';
$string['ignoremodified'] = 'Permitir a atualização dos registros que foram modificados mais recentemente, em Moodle que na planilha.';
$string['ignoremodified_help'] = 'Quando a planilha de avaliação é baixado do Moodle, esta contém a data da última modificação de cada uma das notas. Se qualquer uma das notas são atualizadas no Moodle após esta planilha ser baixado, por padrão o Moodle irá se recusar a substituir essa informação actualizada ao importar as notas. Ao selecionar esta opção irá Moodle desativar essa verificação de segurança e isto tornará possível a sobreposição de múltiplas notas.';
$string['importgrades'] = 'Confirmar mudanças na planilha de notas';
$string['invalidgradeimport'] = 'Moodle não conseguiu ler a planilha carregada. Certifique-se de que está no formato de valor separado por vírgula (.csv) e tente novamente.';
$string['nochanges'] = 'Nenhuma modificação encontrada na planilha de notas enviada';
$string['offlinegradingworksheet'] = 'Notas';
$string['pluginname'] = 'Planilha de notas offline';
$string['processgrades'] = 'Importar notas';
$string['skiprecord'] = 'Pular registro';
$string['updatedgrades'] = '{$a} notas e feedback atualizados';
$string['updaterecord'] = 'Atualizar o registro';
$string['uploadgrades'] = 'Carregar planilha de notas';
