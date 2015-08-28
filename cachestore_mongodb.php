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
 * Strings for component 'cachestore_mongodb', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   cachestore_mongodb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Banco de dados';
$string['database_help'] = 'O nome do banco de dados para fazer uso.';
$string['extendedmode'] = 'Use chaves extendidas';
$string['extendedmode_help'] = 'Se habilitado, conjuntos inteiros de chaves serão usados quando trabalhando com o plugin. Isso não é usado internamente ainda, mas permitiria que você pudesse facilmente  pesquisar e investigar o plugin MongoDB manualmente. Habilitar isso causará uma pequena sobrecarga. então só deve ser habilitado se você realmente precisar.';
$string['password'] = 'Senha';
$string['password_help'] = 'A senha do usuário deverá ser usada para a conexão.';
$string['pleaseupgrademongo'] = 'Você está usando uma versão antiga da extensão PHP Mongo (< 1.3). O suporte para versões antigas da extensão Mongo serão abandonadas no futuro. Por favor, considere atualizá-la.';
$string['pluginname'] = 'MongoDB';
$string['replicaset'] = 'Conjunto de réplicas';
$string['replicaset_help'] = 'O nome do conjunto de réplicas para ser conectar. Se esta opção for fornecida, o mestre será determinado usando o comando "ismaster database" nos seeds, portanto o driver pode acabar conectando a um servidor que nem sequer estava listado.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Esta é a string de conexão para o servidor que você deseja usar. Múltiplos servidores podem ser especificados utilizando uma lista de valores separados por vírgulas.';
$string['testserver'] = 'Servidor de teste';
$string['testserver_desc'] = 'Esta é a string de conexão para o servidor teste que você deseja usar. Servidores teste são opcionais. Ao especificar um servidor teste, você poderá rodar testes de PHPunit para este armazenamento e rodar testes de performance.';
$string['username'] = 'Identificação de usuário';
$string['username_help'] = 'A identificação de usuário a ser utilizada quando fizer a conexão.';
$string['usesafe'] = 'Utilização segura';
$string['usesafe_help'] = 'Se habilitado, a opção "usesafe" será usada durante as operações de inserção, obtenção e remoção. Se você especificou um conjunto de réplicas isto será feito de forma forçada de qualquer maneira.';
$string['usesafevalue'] = 'Use valor de seguro';
$string['usesafevalue_help'] = 'Você pode escolher por usar um valor específico para o uso seguro. Isto determinará o número de servidores nos quais as operações deverão ser completadas antes de serem consideradas concluídas.';
