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
 * Strings for component 'repository_picasa', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   repository_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID de cliente';
$string['configplugin'] = 'Configuração do repositório Picasa';
$string['oauth2upgrade_message_content'] = 'Como parte da atualização para o Moodle 2.3, a carteira do plugin Picasa foi desativada. Para reativá-lo, o seu site Moodle precisa ser registrado com o Google, conforme descrito na documentação {$a->docsurl}, a fim de obter o ID do cliente e secreto. O ID do cliente e secreto pode, então, ser usado para configurar todos os plugins do Google Drive e Picasa.';
$string['oauth2upgrade_message_small'] = 'O plugin do repositório do Picasa foi desabilitado até sua re-configuração com OAuth2

Este plugin foi desativado, pois requer configuração como descrito na documentação do Google OAuth 2.0 setup.';
$string['oauth2upgrade_message_subject'] = 'Informação importante a respeito do plugin do repositório do Picasa';
$string['oauthinfo'] = '<p>Para usar este plugin, você deve registrar seu site com o Google, conforme descrito na documentação <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Como parte do processo de registro, você precisará digitar o seguinte URL como "Autorizado redirecionamento URIs":</p><p>{$a->callbackurl}</p><p>Uma vez cadastrado, será fornecido a você uma ID do cliente e o segredo que pode ser usado para configurar todos os plugins do Google Drive e Picasa.</p>';
$string['picasa:view'] = 'Visualize o repositório Picasa';
$string['pluginname'] = 'Web albúm do Picasa';
$string['secret'] = 'Segredo';
