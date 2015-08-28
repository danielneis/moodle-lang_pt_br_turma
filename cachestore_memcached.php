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
 * Strings for component 'cachestore_memcached', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Escritas no buffer';
$string['bufferwrites_help'] = 'Habilita ou desabilita o buffer do I/O. Habilitar o buffer do I/O faz com que os comandos de armazenamento sejam guardados no buffer ao invés de serem enviados. Qualquer ação que busque informação faz com que esse buffer seja enviado para uma conexão remota. Cancelando ou fechando  a conexão também fará com que as informações que estão no buffer sejam enviadas para a conexão remota.';
$string['clustered'] = 'Ativar servidores em cluster';
$string['clusteredheader'] = 'Dividir Servidores';
$string['clustered_help'] = 'Esta é usada para permitir uma leitura, "set-multifuncionalidade". O caso de uso pretendido é criar um armazenameno melhorado para configurações de balanceamento de carga. A reserva buscará a partir de um servidor (normalmente localhost), mas configurado para muitos (todos os servidores no pool de balanceamento de carga). Para caches com leitura muito alta pode se definir proporções, isso economiza uma quantidade significativa de sobrecarga da rede. Quando essa configuração está ativada, os servidores listados acima serão utilizados para buscar.';
$string['hash'] = 'Método Hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Padrão (one-at-a-time)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Especifica os algoritmos de hashing usado para os itens chave. Cada algoritmo de hashing tem suas vantagens e desvantagens. Siga com o padrão se você não souber.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Tecla de prefixo';
$string['prefix_help'] = 'Isso pode ser usado para se criar um "domínio" para os seus itens chave, permitindo que você crie múltiplos depósitos de "memcached" em uma única instalação de  "memcached". Não pode ser maior do que 16 caracteres para se garantir de que não haverá problemas de comprimento de chave.';
$string['prefixinvalid'] = 'Prefixo inválido. Você só pode usar a-z A-Z 0-9-_.';
$string['serialiser_igbinary'] = 'O serializador igbinary.';
$string['serialiser_json'] = 'O serializador JSON.';
$string['serialiser_php'] = 'O serializador PHP.';
$string['servers'] = 'Servidores';
$string['serversclusterinvalid'] = 'Exatamente um servidor é necessário quando o agrupamento é ativado.';
$string['servers_help'] = 'Isso define os servidores que devem ser utilizados por este adaptador memcached. Servidores devem ser definidos por uma linha e constituído por um endereço de servidor e, opcionalmente, uma porta e peso. Se nenhuma porta é fornecida será utilizada a porta padrão (11211).

Por exemplo:

<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Se * Ativar servidores em cluster * está habilitado a seguir, deve haver apenas um servidor listado aqui. Isso normalmente seria um nome que sempre decide por uma maquina local, como 127.0.0.1 ou localhost.';
$string['sessionhandlerconflict'] = 'Aviso: Um exemplo memcache ({$a}) tem que ser configurado para usar o mesmo servidor memcached como sessões. Limpar todos os caches levará a sessões igualmente limpas.';
$string['setservers'] = 'Definir servidores';
$string['setservers_help'] = 'Isso define os servidores que devem ser utilizados por este adaptador memcached. Servidores devem ser definidos por uma linha e constituído por um endereço de servidor e, opcionalmente, uma porta e peso. Se nenhuma porta é fornecida será utilizada a porta padrão (11211).

Por exemplo:

<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>';
$string['testservers'] = 'Servidores de teste';
$string['testservers_desc'] = 'Os servidores teste são usados para testes unitários e testes de desempenho. É totalmente opcional se configurar servidores de teste. Servidores deveriam ser definidos um por linha e consistir de um endereço do servidor e, opcionalmente, uma porta e peso.
Se nenhuma porta for fornecida, então a porta padrão (11211) será usada.';
$string['usecompression'] = 'Usar compressão';
$string['usecompression_help'] = 'Habilita e desabilita e compressão do "payload". Quando habilitado, itens com valores maiores que um certo limite (atualmente 100 bytes) serão comprimidos durante o armazenamento e descomprimidos durante o retorno, de forma transparente.';
$string['useserialiser'] = 'Usar serializador';
$string['useserialiser_help'] = 'Especifica serializador para serialização de valores não escalares. Os serializadores válidos são Memcached::SERIALIZER_PHP ou Memcached::SERIALIZER_IGBINARY. O último é suportado apenas quando o mecached é configurado com a opção --enable-memcached-igbinary e a extensão igbinary estiver carregada.';
