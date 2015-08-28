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
 * Strings for component 'engagement', language 'pt_br', branch 'MOODLE_27_STABLE'
 *
 * @package   engagement
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachettl'] = 'Cache TTL';
$string['cachingdisabled'] = 'Cache Desativado';
$string['configcachettl'] = 'Esta configuração especifica o tempo de vida para os dados armazenados em cache do módulo de Engajamento. Se isso for definido, cálculos de risco apresentados no bloco não refletem, necessariamente, dados em tempo real, em vez disso os cálculos de risco serão realizados sobre as informações armazenadas em cache. Por exemplo: novos envios de trabalhos, logins, etc não serão detectados até que os dados em cache expirem. Esta definição é importante por razões de desempenho, de modo a não sobrecarregar o banco de dados com consultas em sites de alto tráfego.';
$string['engagement:addinstance'] = 'Adicione uma instância do "engagement"';
$string['incorrectlyconfigured'] = 'Este plugin foi configurado incorretamente. Não se destina a ser adicionado a um curso desta forma. Por favor, contate o administrador do sistema para configurar o plugin mod_engagement como oculto.';
$string['modulename'] = 'Análise de engajamento';
$string['modulenameplural'] = 'Análise de engajamento';
$string['pluginname'] = 'Análise de engajamento';
$string['riskscore'] = 'Pontuação de risco';
$string['roles_desc'] = 'Os papéis para incluir no bloco de engajamento e relatórios';
