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
 * Strings for component 'block_dedication', language 'pt_br', branch 'MOODLE_26_STABLE'
 *
 * @package   block_dedication
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Ferramenta Dedicação';
$string['access_info'] = 'Somente para professores:';
$string['connectionratiorow'] = 'Conexões por dia';
$string['dedication:addinstance'] = 'Permitir adicionar o bloco Dedicação';
$string['dedicationall'] = 'Dedicação de todos os membros do curso. Clique em qualquer nome para ver sua dedicação detalhada.';
$string['dedication_estimation'] = 'Seu tempo estimado de dedicação é';
$string['dedicationgroup'] = 'Dedicação de todos os usuários do grupo <em>{$a}</em>. Escolha qualquer membro para ver sua dedicação detalhada.';
$string['dedicationrow'] = 'Dedicação ao curso';
$string['dedication:use'] = 'Permitir o uso de dedicação ao curso';
$string['form'] = 'Configuração de dedicação ao curso';
$string['form_help'] = 'O tempo é estimado com base nos conceitos de sessão e duração da sessão aplicado aos logs de acesso.

<strong>Clique:</strong> Toda vez que um usuário acessa a uma página no Moodle uma entrada de log é armazenada.

 <strong>Sessão:</strong> Conjunto de dois ou mais cliques consecutivos em que o tempo decorrido entre cada par de cliques consecutivos não supera o tempo máximo estabelecido.

<strong>Duração da sessão:</strong> Tempo decorrido entre o primeiro e o último clique da sessão.

<strong>Tempo de dedicação:</strong> Soma de todas a duração das sessões para um usuário.';
$string['form_text'] = 'Selecione o intervalo de datas e o tempo máximo entre os cliques de uma mesma sessão.';
$string['limit'] = 'Limite entre cliques (em minutos)';
$string['limit_help'] = 'O limite entre cliques define se dois cliques fazem parte da mesma sessão ou não.';
$string['maxtime'] = 'Fim do período';
$string['maxtime_help'] = 'Considerar apenas as entradas de log que terminam antes desta data';
$string['meandedication'] = '<strong>Dedicação média:</strong> {$a}';
$string['mintime'] = 'Início do período';
$string['mintime_help'] = 'Considerar apenas as entradas de log após esta data';
$string['pagetitle'] = '{$a}: dedicação ao curso';
$string['period'] = 'Período desde <em>{$a->mintime}</em> até <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tempo decorrido:</strong> {$a}';
$string['perioddiffrow'] = 'Tempo decorrido';
$string['pluginname'] = 'Dedicação ao curso';
$string['sessionduration'] = 'Duração';
$string['sessionstart'] = 'Início da sessão';
$string['show_dedication'] = 'Mostrar tempo de dedicação dos estudantes';
$string['show_dedication_help'] = 'Por padrão, o tempo de dedicação só pode ser visto pelos professores. Esta configuração permite que os alunos vejam seu tempo dedicação no bloco.';
$string['sincerow'] = 'Desde';
$string['submit'] = 'Calcular';
$string['torow'] = 'Até';
$string['totaldedication'] = '<strong>Dedicação total:</strong> {$a}';
$string['userdedication'] = 'Detalhes da dedicação ao curso de <em>{$a}</em>.';
