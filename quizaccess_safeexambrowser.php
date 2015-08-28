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
 * Strings for component 'quizaccess_safeexambrowser', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   quizaccess_safeexambrowser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedbrowserkeys'] = 'Chaves de navegador permitidas';
$string['allowedbrowserkeysdistinct'] = 'As chaves devem ser todas diferentes.';
$string['allowedbrowserkeys_help'] = 'Nessa caixa, você pode digitar as chaves de navegador autorizadas para as versões do "Safe Exam Browser" que têm permissão para acessar este quiz. Se nenhuma chave for informada, então o SEB não é exigido para este questionário.';
$string['allowedbrowserkeyssyntax'] = 'Você deve digitar as chaves permitidas uma por linha. A chave deve ser uma cadeia hexadecimal de 64 caracteres.';
$string['allowedkeys_adv'] = 'Chaves são uma configuração avançada';
$string['allowedkeys_adv_desc'] = 'Se esta opção estiver habilitada, então a lista de chaves de navegador permitidas é um campo avançado no formulário de configurações do questionário.';
$string['pluginname'] = 'Regra de acesso do questionário com "Safe Exam Browser"';
$string['safebrowserdownloadurl'] = 'URL de download do "Safe Exam Browser".';
$string['safebrowserdownloadurl_desc'] = 'Se você fornecer uma URL aqui, então os usuários serão informados de que eles podem baixar a versão necessária do "Safe Exam Browser" de lá.';
$string['safebrowsermustbeused'] = 'Você deve usar uma versão aprovada do "Safe Exam Browser" para iniciar tentativa no questionário.';
$string['safebrowsermustbeusedwithlink'] = 'Você deve usar uma versão aprovada do "Safe Exam Browser" para tentar este questionário. Você pode baixá-lo a partir de {$a->link}.';
$string['safeexambrowser:exemptfromcheck'] = 'Isento de verificação do "Safe Exam Browser"';
