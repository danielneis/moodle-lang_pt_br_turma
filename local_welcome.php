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
 * Strings for component 'local_welcome', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   local_welcome
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Novo usuário: [[fullname]]</h3>
Uma nova conta foi criada com os seguintes detalhes:</td></tr>
<tr><td>Nome:</td><td>[[fullname]]</td></tr>
<tr><td>Identificação do usuário: </td><td>[[username]]</td></tr>
<tr><td>E-mail: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Um novo usuário se inscreveu em [[sitename]]: [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Bem-vindo [[fullname]]</h3>
Sua conta no Moodle foi criada e está pronta para usar!
Abaixo estão os detalhes da sua conta no site [[sitelink]]:</td></tr>
<tr><td>Nome:</td><td>[[fullname]]</td></tr>
<tr><td>Identificação do usuário: </td><td>[[username]]</td></tr>
<tr><td>E-mail: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Se você perder sua senha, é fácil recuperá-la acessando:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Olá, [[fullname]]. Bem-vindo a {$a}';
$string['message_moderator'] = 'Mensagem do moderador';
$string['message_moderator_desc'] = 'Mensage enviada aos moderadores';
$string['message_moderator_enabled'] = 'Habilitar mensagens ao moderador';
$string['message_moderator_enabled_desc'] = 'Esta configuração habilita o envio de mensagens de notificação aos moderadores';
$string['message_moderator_subject'] = 'Assunto ao moderador';
$string['message_moderator_subject_desc'] = 'Este será o assunto do email enviado ao moderador. Use [[fullname]] como marcador. Ele será substituído pelo nome completo do usuário.';
$string['message_user'] = 'Mensagem ao usuário';
$string['message_user_desc'] = 'Mensagem enviada aos novos usuários';
$string['message_user_enabled'] = 'Habilitar mensagens ao usuário';
$string['message_user_enabled_desc'] = 'Esta configuração habilita o envio de mensagens de boas vindas a novos usuários';
$string['message_user_subject'] = 'Assunto da mensagem ao usuário';
$string['message_user_subject_desc'] = 'Este será o assunto do email enviado ao usuário. Utilize [[fullname]] como um marcador. Ele será substituído pelo nome completo do usuário.';
$string['moderator_email'] = 'Email do moderador';
$string['moderator_email_desc'] = 'Notificações de novos usuários são enviadas a este endereço de email';
$string['pluginname'] = 'Boas vindas do Moodle';
$string['resetpass'] = 'Recupere sua senha aqui';
$string['sender_email'] = 'Endereço de email do remetente';
$string['sender_email_desc'] = 'Quando novos usuários se logarem este endereço de email será usado para enviar uma mensagem de notificação. Usuários serão capazes de ver este endereço de email';
$string['sender_firstname'] = 'Primeiro nome do remetente da mensagem de boas vindas';
$string['sender_firstname_desc'] = 'Primeiro nome usado ao enviar emails aos usuários.';
$string['sender_lastname'] = 'Sobrenome do moderador';
$string['sender_lastname_desc'] = 'Sobrenome usado ao enviar email aos usuários.';
