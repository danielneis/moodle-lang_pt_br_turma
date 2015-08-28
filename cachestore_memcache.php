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
 * Strings for component 'cachestore_memcache', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   cachestore_memcache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Ativar servidores em cluster';
$string['clusteredheader'] = 'Dividir Servidores';
$string['clustered_help'] = 'Usado para permitir apenas leitura, configurando múltiplas funcionalidades. O resultado é criar um bloco customizado para configurações de balanceamento de carga. O bloco faz uma consulta a partir de um servidor (localhost), ou a definir (todos os servidores  no pool de balanceamento de carga).
Para caches com alto volume de leitura isto reduz a sobrecarga na rede. Quando habilitado, os servidores listados acima serão utilizados para busca.';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Prefixo chave';
$string['prefix_help'] = 'Este prefixo é usado para todos os nomes chaves no servidor memcache.
* Se você tiver apenas uma instância do Moodle usando este servidor, você pode deixar este valor como padrão.
* Devido a restrições de comprimento de chaves, o máximo de 5 caracteres é permitido';
$string['prefixinvalid'] = 'Prefixo inválido. Você só pode usar a-z A-Z 0-9-_.';
$string['servers'] = 'Servidores';
$string['serversclusterinvalid'] = 'Exatamente um servidor é necessário quando o agrupamento está ativado.';
$string['servers_help'] = 'Isso define os servidores que devem ser utilizados por este adaptador memcache. Servidores devem ser definidos por uma linha e constituído por um endereço de servidor e, opcionalmente, uma porta e peso. Se nenhuma porta é fornecida será utilizada a porta padrão (11211). Por exemplo:
<pre>
server.url.com
ipadress:port
servername:port:weight
</pre>';
$string['sessionhandlerconflict'] = 'Aviso: Um exemplo memcache ({$a}) tem que ser configurado para usar o mesmo servidor memcached como sessões. Limpar todos os caches levará a sessões igualmente limpas.';
$string['setservers'] = 'Definir servidores';
$string['setservers_help'] = 'Esta é a lista de servidores que serão atualizados quando os dados são modificados no cache. Geralmente, o nome completo de cada servidor no seu "pool". Ele ** ** deve incluir o servidor listado em * Servidores * acima, mesmo que por um nome diferente. Os servidores devem ser definidos um por linha e consistem de um endereço de servidor e, opcionalmente, uma porta. Se nenhuma porta é fornecida então a porta padrão (11211) é usada.

Por exemplo:
<pre>
server.url.com
ipaddress: port
</pre>';
$string['testservers'] = 'Servidores de teste';
$string['testservers_desc'] = 'Os servidores teste são usados para testes unitários e testes de desempenho. É totalmente opcional se configurar servidores de teste. Servidores deveriam ser definidos um por linha e consistir de um endereço do servidor e, opcionalmente, uma porta e peso.
Se nenhuma porta for fornecida, então a porta padrão (127.0.0.1:11211) será usada.';
