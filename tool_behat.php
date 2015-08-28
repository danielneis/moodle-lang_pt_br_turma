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
 * Strings for component 'tool_behat', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta ferramenta de administração ajuda os desenvolvedores e escritores de teste a criar arquivos .feature que descrevem as funcionalidades do Moodle e executá-los automaticamente. Os passos das definições disponíveis para utilização de arquivos .feature estão listados abaixo';
$string['allavailablesteps'] = 'Todas as definições disponíveis passos';
$string['errorbehatcommand'] = 'Erro ao executar comando behat CLI. Tente executar "{$a} --help" manualmente a partir do CLI para saber mais sobre o problema.';
$string['errorcomposer'] = 'Dependências do compositor não estão instaladas.';
$string['errordataroot'] = '$CFG->behat_dataroot não está definido ou é inválido.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot precisa ser definido no config.php.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot values need to be different than $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot and $CFG->phpunit_prefix valores.';
$string['fieldvalueargument'] = 'Argumentos do campo valor';
$string['fieldvalueargument_help'] = 'Este argumento deve ser preenchido por um valor de campo, existem muitos tipos de campo, mais simples, como caixas de seleção, seleciona ou textareas ou mais complexas, como seletores de data. Você pode verificar <a href="http://docs.moodle.org/dev/Acceptance_testing#Providing_values_to_steps" target="_blank">os valores de campo</a> para ver o valor do campo esperado, dependendo do tipo de campo que você fornecer.';
$string['giveninfo'] = 'Dado. Processos para configurar o ambiente';
$string['infoheading'] = 'Informações';
$string['installinfo'] = 'Leia {$a} para instalação e testes Informações execução';
$string['newstepsinfo'] = 'Leia {$a} para informações sobre como adicionar novas definições de passos';
$string['newtestsinfo'] = 'Leia {$a} para informações sobre como escrever novos testes';
$string['nostepsdefinitions'] = 'Nenhuma definição de passos atende a esses filtros';
$string['pluginname'] = 'O teste de aceitação';
$string['stepsdefinitionscomponent'] = 'Área';
$string['stepsdefinitionscontains'] = 'Contém';
$string['stepsdefinitionsfilters'] = 'Definição de Passos';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Então. Verificações para garantir que os resultados são os esperados';
$string['unknownexceptioninfo'] = 'Houve um problema com Selenium ou com seu navegador. Certifique-se de que você está usando a última versão do Selenium. Erro:';
$string['viewsteps'] = 'Filtrar';
$string['wheninfo'] = 'Quando. Ações que provoca um evento';
$string['wrongbehatsetup'] = 'Algo está errado com a configuração do behat e as configurações de passos não podem ser listados: <b>{$a->errormsg}</b><br/><br/>Por favor verifique:
<ul>
  <li>$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot definidos em config.php com valores diferentes de $CFG->dataroot, $CFG->prefix e $CFG->wwwroot.</li>
<li>Você executou "{$a->behatinit}" no diretório raiz do Moodle.</li>
<li>As dependências estão instaladas em vendor/ e o arquivo {$a->behatcommand} tem permissões de execução.</li></ul>';
