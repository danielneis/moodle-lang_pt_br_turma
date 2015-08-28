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
 * Strings for component 'logstore_database', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   logstore_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Tamanho do buffer';
$string['buffersize_help'] = 'Número de entradas de log inseridas em uma única operação em lote, o que melhora o desempenho.';
$string['conectexception'] = 'Não pode se conectar à base de dados';
$string['create'] = 'Criar';
$string['databasecollation'] = '"Collation" da base de dados';
$string['databasepersist'] = 'Conexões persistentes da base de dados';
$string['databaseschema'] = 'Esquema da base de dados';
$string['databasesettings'] = 'Configuração da base de dados';
$string['databasesettings_help'] = 'Detalhes da conexão para a base de dados externa de logs: {$a}';
$string['databasetable'] = 'Tabela da base de dados';
$string['databasetable_help'] = 'Nome da tabela onde os logs serão armazenados. Esta tabela deverá ter uma estrutura idêntica àquela usada pelo logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filtros de log';
$string['filters_help'] = 'Hablitar filtros que excluem algumas ações de serem registradas.';
$string['includeactions'] = 'Incluir ações destes tipos';
$string['includelevels'] = 'Incluir ações com estes níveis educacionais';
$string['logguests'] = 'Registrar ações de convidados';
$string['other'] = 'Outro';
$string['participating'] = 'Participando';
$string['pluginname'] = 'Log em base de dados externa';
$string['pluginname_desc'] = 'Um  plugin de log que armazena as entradas de log em uma tabela externa.';
$string['read'] = 'Ler';
$string['tablenotfound'] = 'A tabela especificada não foi encontrada';
$string['teaching'] = 'Ensinando';
$string['testingsettings'] = 'Configurações de base de dados de testes...';
$string['testsettings'] = 'Conexão de teste';
$string['update'] = 'Atualizar';
