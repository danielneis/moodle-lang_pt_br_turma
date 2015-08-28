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
 * Strings for component 'tool_dbtransfer', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Drivers de banco de dados disponíveis para a migração';
$string['cliheading'] = 'Migração de banco de dados - certifique-se que ninguém está acessando o servidor durante a migração!';
$string['climigrationnotice'] = 'Migração de banco de dados em andamento, aguarde até que a migração seja concluída e administrador do servidor de configuração de atualizações exclua o arquivo  $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'Convertendo log de ações de exibição';
$string['dbexport'] = 'Exportação de banco de dados';
$string['dbtransfer'] = 'Transferência de banco de dados';
$string['enablemaintenance'] = 'Ativar o modo de manutenção';
$string['enablemaintenance_help'] = 'Esta opção ativa modo de manutenção durante e após a migração do banco de dados, que impede o acesso de todos os usuários, até a conclusão da migração. Por favor, note que o administrador tem que apagar manualmente o arquivo $CFG->dataroot/climaintenance.html, depois atualizar as configurações no config.php para retomar a operação normal.';
$string['exportdata'] = 'Exportar dados';
$string['notargetconectexception'] = 'Desculpe, não foi possível conectar ao banco de dados alvo.';
$string['options'] = 'Opções';
$string['pluginname'] = 'Transferência de banco de dados';
$string['targetdatabase'] = 'Banco de dados destino';
$string['targetdatabasenotempty'] = 'Banco de dados de destino não contem nenhuma tabela com prefixo informado!';
$string['transferdata'] = 'Transferência de dados';
$string['transferdbintro'] = 'Este script irá transferir todo o conteúdo desse banco de dados para outro servidor de banco de dados.';
$string['transferdbtoserver'] = 'Transferência do banco de dados deste Moodle para outro servidor';
$string['transferringdbto'] = 'Transferindo este banco de dados para {$a->dbtype} banco de dados {$a->dbname} em {$a->dbhost}';
