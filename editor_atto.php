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
 * Strings for component 'editor_atto', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   editor_atto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Não foi possível conectar ao servidor. Se você enviar esta página agora, as alterações podem ser perdidas.';
$string['autosavefrequency'] = 'Frequência de salvamento automático';
$string['autosavefrequency_desc'] = 'Este é o número de segundos entre o salvamento automático das tentativas. Será salvo automaticamente o texto no editor de acordo com esta definição, para que o texto possa ser recuperado automaticamente quando o mesmo usuário retornar ao mesmo formulário.';
$string['autosavesucceeded'] = 'Rascunho salvo.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'A linha \'{$a}\' não está no formato correto.';
$string['errorgroupisusedtwice'] = 'O grupo \'{$a}\' está definido duas vezes;, nomes de grupos devem ser únicos';
$string['errornopluginsorgroupsfound'] = 'Nenhum plugin ou grupo encontrado; por favor, adicione grupos e plugins.';
$string['errorpluginisusedtwice'] = 'O plugin \'{$a}\' está sendo usado duas vezes; plugins só podem ser definidos uma única vez.';
$string['errorpluginnotfound'] = 'O plugin \'{$a}\' não pode ser usado; parece que ele não está instalado.';
$string['errortextrecovery'] = 'Infelizmente, a versão anterior não pôde ser restaurada.';
$string['infostatus'] = 'Informações';
$string['pluginname'] = 'Editor de HTML atto';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['recover'] = 'Recuperar';
$string['settings'] = 'Configuração da barra de ferramentas atto';
$string['subplugintype_atto'] = 'Plugin atto';
$string['subplugintype_atto_plural'] = 'Plugins atto';
$string['textrecovered'] = 'Uma versão anterior deste texto foi automaticamente restabelecida.';
$string['toolbarconfig'] = 'Configuração da barra de ferramentas';
$string['toolbarconfig_desc'] = 'A lista de plugins e a ordem em que eles aparecem podem ser configuradas aqui. A configuração consiste de grupos (um por linha) acompanhada da lista ordenada de plugins para aquele grupo. Os grupos são separados dos plugins por um sinal de igual e os plugins são separados por vírgulas. O nome do grupo deve ser único e deve indicar o que há de comum com os botões. Os nomes dos botões e grupos não devem se repetir e devem conter apenas caracteres alfanuméricos.';
$string['warningstatus'] = 'Aviso';
