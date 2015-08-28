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
 * Strings for component 'cachestore_file', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   cachestore_file
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Criação automática de diretório';
$string['autocreate_help'] = 'Se ativo, o diretório especificado será automaticamente criado se não ainda não existir.';
$string['path'] = 'Caminho do Cache';
$string['path_help'] = 'O diretório que deve ser usado para guardar arquivos para este depósito de cache. Se deixado em branco (padrão) um diretório será automaticamente criado no diretório moodledata. Isso pode ser usado para apontar um depósito de arquivos para um diretório com um drive de maior desempenho (como um em memória).';
$string['pluginname'] = 'Cache de arquivos';
$string['prescan'] = 'Diretório Prescan';
$string['prescan_help'] = 'Se habilitado, o diretório será escaneado quando o cache for usado pela primeira vez e as requisições por arquivos serão vistos primeiramente contra os dados escaneados. Isso ajuda se você tem um sistema de arquivos lento e acha que as operações com arquivos são o seu gargalo.';
$string['singledirectory'] = 'Armazenamento de diretório único';
$string['singledirectory_help'] = 'Se arquivos habilitados (itens que foram para o cache) serão guardados em um único diretório, ao invés de serem fragmentados em múltiplos diretórios <br />,  Ao habilitar isso a velocidade de interações entre arquivos irá aumentar mas implicará no risco de se atingir as limitações do sistema de arquivos.<br />.  Deve-se alertar para somente se habilitar se o seguinte for verdadeiro:<br />
- Se você souber que o número de itens que estão no cache será pequeno o bastante que não causará problemas no sistema de arquivos que você está operando.<br />
- Que as informações que estão indo para o cache não são sofisticadas para serem geradas.  Se o forem, então se ater com o padrão deve ser a melhor opção, uma vez que reduz a chance de problemas maiores';
