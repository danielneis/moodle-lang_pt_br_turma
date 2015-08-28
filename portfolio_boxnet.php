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
 * Strings for component 'portfolio_boxnet', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   portfolio_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apiv1migration_message_content'] = 'Como parte da recente atualização do Moodle para 2.6, o plugin  de portfólio Box foi desativado. Para reativá-lo, você precisa reconfigurá-lo como descrito na documentação em {$a->docsurl} .';
$string['apiv1migration_message_small'] = 'Este plugin foi desativado, uma vez que requer configuração, conforme descrito na documentação de migração Box APIv1.';
$string['apiv1migration_message_subject'] = 'Informações importantes sobre o plugin portfólio Box';
$string['clientid'] = 'ID do cliente';
$string['clientsecret'] = 'Segredo do cliente';
$string['existingfolder'] = 'Diretório existente para adicionar os arquivos';
$string['folderclash'] = 'O diretório que tentou criar já existe!';
$string['foldercreatefailed'] = 'Falha ao criar seu diretório no box.net';
$string['folderlistfailed'] = 'Falha ao trazer uma lista a partir de box.net';
$string['missinghttps'] = 'HTTPS necessário';
$string['missinghttps_help'] = 'Box só funcionará com um site HTTPS ativado.';
$string['missingoauthkeys'] = 'ID e senha necessários';
$string['missingoauthkeys_help'] = 'Não há identificação do cliente ou cliente confidencial configurado para este plugin. Você pode obter um destes a partir da página de desenvolvimento Box.';
$string['newfolder'] = 'Novo diretório para adicionar arquivos';
$string['noauthtoken'] = 'Não foi possível trazer um token de autenticação para uso nesta sessão';
$string['notarget'] = 'Você deve especificar uma pasta existente ou uma nova pasta para carregar em';
$string['noticket'] = 'Não foi possível retornar um ticket de box.net para iniciar a sessão de autenticação';
$string['password'] = 'Sua senha box.net (não será armazenada)';
$string['pluginname'] = 'Box.net';
$string['sendfailed'] = 'Falha ao enviar conteúdo para box.net:{$a}';
$string['setupinfo'] = 'Instruções de configuração';
$string['setupinfodetails'] = 'Para obter a chave API, faça login no Box.net e visitar sua <a href="{$a->servicesurl}">página de desenvolvimento OpenBox</a> . Em \'Ferramentas desenvolvedor &quot;, siga\' Criar nova aplicação \'e criar novas aplicações para o seu site Moodle. Chave da API é exibido na seção dos parâmetros de back-end \'do formulário de edição. Nesse formulário, preencher &quot;Redirect URL \'campo para: <br /> <code>{$a->callbackurl}</code> <br /> Opcionalmente, você também pode fornecer outras informações sobre o seu site Moodle. Estes valores podem ser editados mais tarde em &quot;Ver minhas aplicações de página.';
$string['sharedfolder'] = 'Compartilhado';
$string['sharefile'] = 'Compartilhar este arquivo?';
$string['sharefolder'] = 'Compartilhar esta nova pasta?';
$string['targetfolder'] = 'Diretório alvo';
$string['tobecreated'] = 'Para ser criado';
$string['username'] = 'Seu identificador de usuário Box (não será armazenado)';
$string['warninghttps'] = 'Box exige que seu site esteja usando HTTPS para trabalhar com o portfólio.';
