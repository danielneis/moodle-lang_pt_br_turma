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
 * Strings for component 'repository_boxnet', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   repository_boxnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Chave da API';
$string['apiv1migration_message_content'] = 'Como parte da recente atualização Moodle (2.6, 2.5.3, 2.4.7), o plugin de repositório Box foi desativado. Para reativá-lo, você precisa reconfigurá-lo como descrito na documentação {$a->docsurl}.';
$string['apiv1migration_message_small'] = 'Este plugin foi desativado, uma vez que requer configuração, conforme descrito na documentação de migração APIv1 Box.';
$string['apiv1migration_message_subject'] = 'Informações importantes sobre o plugin do repositório Box';
$string['boxnet:view'] = 'Visualizar o repositório box.net';
$string['cannotcreatereference'] = 'Não é possível criar uma referência, as permissões não são suficientes para compartilhar o arquivo na caixa.';
$string['clientid'] = 'ID do cliente';
$string['clientsecret'] = 'Chave do cliente';
$string['configplugin'] = 'Configuração do box.net';
$string['filesourceinfo'] = 'Box ({$a->fullname}): {$a->filename}';
$string['information'] = 'Obtenha uma chave API em <a href="http://www.box.net/developers/services">Box.net developer page</a> para seu site Moodle.';
$string['invalidpassword'] = 'Senha inválida';
$string['migrationadvised'] = 'Parece que você estava usando Box com a versão da API 1, tente executar o <a href="{$a}">ferramenta de migração</a> para converter paras antigas referências';
$string['migrationinfo'] = 'Como parte da migração para a nova API fornecida pelo Box, suas referências de arquivos tem que ser migradas. Infelizmente, o sistema de referência não é compatível com a API v2, por isso estamos precisamos baixá-los e convertê-los em arquivos reais.
Por favor, esteja ciente de que a migração pode <strong>levar muito tempo,</strong> dependendo do número de referências utilizadas e do tamanho de seus arquivos.
Você pode executar a ferramenta de migração, clicando no botão abaixo, ou, alternativamente, executando o script CLI: repositório/boxnet/cli/migrationv1.php.
Saiba mais <a href="{$a->docsurl}">aqui</a> .';
$string['migrationtool'] = 'Ferramenta de migração do Box APIv1';
$string['nullfilelist'] = 'Não há arquivos neste repositório';
$string['password'] = 'Senha';
$string['pluginname'] = 'Box.net';
$string['pluginname_help'] = 'Repositório no Box.net';
$string['runthemigrationnow'] = 'Executar a ferramenta de migração agora';
$string['saved'] = 'Dados do Box.net foram salvos';
$string['shareurl'] = 'Compartilhe a URL';
$string['username'] = 'Identificação de usuário do Box.net';
$string['warninghttps'] = 'Box exige que seu site esteja usando HTTPS para que o repositório possa funcionar.';
