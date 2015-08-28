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
 * Strings for component 'engagementindicator_assessment', language 'pt_br', branch 'MOODLE_27_STABLE'
 *
 * @package   engagementindicator_assessment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dayslate'] = 'Dias de atraso';
$string['dayslate_help'] = 'Número de dias de atraso que a tarefa foi enviada. Isso leva em conta eventuais substituições que afetam o
data de vencimento do usuário ..';
$string['localrisk'] = 'Risco local';
$string['localrisk_help'] = 'O risco desta avaliação sozinha, em 100. O risco local é multiplicado pelo coeficiente de ponderação de avaliação para formar a Contribuição de Risco.';
$string['logic'] = 'Lógica';
$string['logic_help'] = 'Este campo fornece algumas dicas sobre a lógica utilizada para se chegar ao valor de Risco Local.';
$string['overduegracedays'] = 'Dias de tolerância após atraso';
$string['overduemaximumdays'] = 'Máximo número de dias de atraso';
$string['overduenotsubmittedweighting'] = 'Ponderação de envio não atrasado';
$string['overduesubmittedweighting'] = 'Ponderação de envio atrasado';
$string['override'] = 'Sobrescrever';
$string['override_help'] = 'Algumas atividades de avaliação (ex: quiz) contêm um recurso para configurar datas alternativas de vencimento para usuários individuais ou grupos de usuários. Este campo indica que data de vencimento do usuário foi modificada por uma substituição.';
$string['pluginname'] = 'Atividade de avaliação';
$string['riskcontribution'] = 'Contribuição de risco';
$string['riskcontribution_help'] = 'A quantidade de risco que esta avaliação em particular contribui para o risco global retornado pelo indicador de avaliação. Este é formado pela multiplicação de Risco Local com a ponderação de avaliação. As contribuições de risco de cada avaliação são somados para formar o risco global para o indicador.';
$string['status'] = 'Estado';
$string['status_help'] = 'Status indica se o usuário realizou essa avaliação ou não.';
$string['weighting'] = 'Ponderação';
$string['weighting_help'] = 'Esta figura mostra a nota máxima desta avaliação como um percentual da nota máxima total para todas as avaliações de rastreados pelo indicador Avaliação. O risco local será multiplicado por este de modo a formar a contribuição de risco.';
