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
 * Strings for component 'portfolio_picasa', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   portfolio_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID do cliente';
$string['noauthtoken'] = 'Um token de autenticação do google não foi recebido. Verifique se você cedeu permissão ao moodle para acessar sua conta do Google';
$string['nooauthcredentials'] = 'Credenciais OAuth necessário.';
$string['nooauthcredentials_help'] = 'Para usar o plugin portfolio Picasa, você deve configurar credenciais OAuth nas configurações de carteira.';
$string['oauth2upgrade_message_content'] = 'Como parte da atualização do Moodle 2.3, o plugin portfolio Picasa foi desativado devido a mudanças no Googles API. Para reativar o seu plug-in, você deve configurar credenciais OAuth neste plugin.';
$string['oauth2upgrade_message_small'] = 'O plugin portfolio Picasa foi desativado até que configurado com OAuth2';
$string['oauth2upgrade_message_subject'] = 'Importar informações sobre o plugin de portfólio Picasa';
$string['oauthinfo'] = '<p> Para usar a carteira Picasa, você deve ser registrado com o Google. Instruções para registing sua instalação com Google estão descritos no <a href="{$a->docsurl}">Moodle Docs</a> . A redirecionar url deve ser definido como: </p><p> {$a->callbackurl} </p>';
$string['pluginname'] = 'Picasa';
$string['secret'] = 'Segredo';
$string['sendfailed'] = 'O arquivo {$a} falhou na transferência para o Picasa';
