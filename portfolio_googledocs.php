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
 * Strings for component 'portfolio_googledocs', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   portfolio_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Id de cliente';
$string['noauthtoken'] = 'Um token de autenticação não foi recebido do Google. Certifique-se que está permitindo que o moodle acesse sua conta do Google';
$string['nooauthcredentials'] = 'Credenciais OAuth exigidas.';
$string['nooauthcredentials_help'] = 'Para usar o plugin de portfólio do Google Drive você precisa configurar as credenciais OAuth nas configurações do portfólio.';
$string['nosessiontoken'] = 'Um token de sessão não existe prevenindo exportar ao Google';
$string['oauth2upgrade_message_content'] = 'Como parte da atualização para o Moodle 2.3, o plugin de Google Drive portfólio foi desabilitado por conta de mudanças na API do Google. Para re-habilitar seu plugin, você precisa configurar as credenciais oauth neste plugin.';
$string['oauth2upgrade_message_small'] = 'O plugin de portfólio do Google Drive foi desabilitado até a configuração do OAuth2';
$string['oauth2upgrade_message_subject'] = 'Informação importante sobre o plugin de portfólio do Google Drive';
$string['oauthinfo'] = '<p>Para usar o portfólio do google Drive você precisa estar registrado no Google. Instruções sobre o registro de sua instalação com o Google estão descritas no <a href="{$a->docsurl}">Moodle Drive</a>. A Url de redirecionamento precisa apontar para:</p><p>{$a->callbackurl}</p>';
$string['pluginname'] = 'Google Drive';
$string['secret'] = 'Segredo';
$string['sendfailed'] = 'Falha ao transferir o arquivo {$a} para o Google';
