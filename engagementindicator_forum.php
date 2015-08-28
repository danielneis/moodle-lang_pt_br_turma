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
 * Strings for component 'engagementindicator_forum', language 'pt_br', branch 'MOODLE_27_STABLE'
 *
 * @package   engagementindicator_forum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['e_newposts'] = 'Novas mensagens por semana';
$string['e_readposts'] = 'Ler mensagens por semana';
$string['e_replies'] = 'Respostas por semana';
$string['e_totalposts'] = 'Total de mensagens por semana';
$string['localrisk'] = 'Risco local';
$string['localrisk_help'] = 'O percentual risco do fórum sozinho, em 100. O risco local é multiplicado pelo coeficiente de ponderação de login para formar a Contribuição de Risco.';
$string['logic'] = 'Lógica';
$string['logic_help'] = 'Este campo fornece algumas dicas sobre a lógica utilizada para se chegar ao valor de Risco Local.';
$string['maxrisk'] = 'Risco Máximo';
$string['maxrisktitle'] = 'Nenhuma leitura ou contribuição no fórum';
$string['norisk'] = 'Nenhum Risco';
$string['pluginname'] = 'Atividade Fórum';
$string['riskcontribution'] = 'Contribuição de risco';
$string['riskcontribution_help'] = 'A quantidade de risco que esta consideração de fórum em particular contribui para o risco global retornado pelo o indicador Fórum. Este é formado pela multiplicação de Risco Local com a ponderação. As contribuições de risco de cada item fórum são somados para formar o risco global para o indicador.';
$string['weighting'] = 'Ponderação';
$string['weighting_help'] = 'Esta figura mostra a quantidade que este item contribui para o risco total  para o indicador Fórum. O risco local será multiplicado por este para formar a contribuição de risco.';
