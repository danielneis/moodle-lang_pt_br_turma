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
 * Strings for component 'enrol_manual', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = 'Alterar o status';
$string['altertimeend'] = 'Alterar data de fim';
$string['altertimestart'] = 'Alterar data de início';
$string['assignrole'] = 'Atribuir papel';
$string['browsecohorts'] = 'Procurar coortes';
$string['browseusers'] = 'Procurar usuários';
$string['confirmbulkdeleteenrolment'] = 'Você tem certeza que deseja excluir estas inscrições de usuários?';
$string['defaultperiod'] = 'Duração padrão da inscrição';
$string['defaultperiod_desc'] = 'Intervalo padrão de tempo no qual a inscrição é válida. Se for definido para zero, a duração de inscrição será ilimitado por padrão.';
$string['defaultperiod_help'] = 'Duração padrão de tempo que a inscrição é válida, iniciando no momento que o usuário é inscrito. Caso desabilitado, a duração da inscrição será ilimitada por padrão.';
$string['deleteselectedusers'] = 'Excluir as inscrições de usuários selecionados';
$string['editselectedusers'] = 'Editar as inscrições de usuários selecionados';
$string['enrolledincourserole'] = 'Inscrito no curso "{$a->course}" como "{$a->role}"';
$string['enrolusers'] = 'Inscrever usuários';
$string['expiredaction'] = 'Ação de vencimento de Inscrição';
$string['expiredaction_help'] = 'Escolha a acção que determina quando a inscrição do usuário expira. Por favor, note que alguns dados e configurações do usuário são removidos naturalmente durante a desinscrição no curso.';
$string['expirymessageenrolledbody'] = 'Caro {$a->user},

Esta é uma notificação de que sua inscrição em &quot;{$a->course}&quot; expira em {$a->timeend}.

Se precisar de ajuda, entre em contato {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração de inscrição';
$string['expirymessageenrollerbody'] = 'Inscrição em &quot;{$a->course}&quot; irá expirar em {$a->threshold} para os seguintes usuários:

{$a->users}

Para externder a inscrição deles, acesse {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificação de expiração de inscrição';
$string['manual:config'] = 'Configurar instâncias de inscrição manual';
$string['manual:enrol'] = 'Inscrever usuários';
$string['manual:manage'] = 'Gerenciar inscrições de usuário';
$string['manualpluginnotinstalled'] = 'O plug-in "Manual" ainda não foi instalado';
$string['manual:unenrol'] = 'Desinscrever usuários do curso';
$string['manual:unenrolself'] = 'Cancelar a própria inscrição no curso';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração de inscrição manual';
$string['pluginname'] = 'Inscrições manuais';
$string['pluginname_desc'] = 'O plugin de matrículas manuais permite que os usuários sejam inscritos manualmente através de um link nas configurações de administração do curso, por um usuário com permissões adequadas, como um professor. O plugin deve estar habilitado normalmente, uma vez que certos plugins de inscrição, tais como a auto-inscrição, dependem dele.';
$string['status'] = 'Habilitar inscrições manuais';
$string['status_desc'] = 'Permitir acesso ao curso por usuários inscritos internamente. Isto deve ser mantido habilitado na maioria dos casos.';
$string['statusdisabled'] = 'Desabilitado';
$string['statusenabled'] = 'Habilitado';
$string['status_help'] = 'Esta configuração determina se usuários podem ser inscritos manualmente, através de um link na configuração da administração de cursos, através de um usuário com permissões apropriadas como um professor.';
$string['unenrol'] = 'Desinscrever usuário';
$string['unenrolselectedusers'] = 'Desinscrever usuários selecionados';
$string['unenrolselfconfirm'] = 'Você deseja realmente cancelar sua inscrição no curso "{$a}"?';
$string['unenroluser'] = 'Você tem certeza que deseja desinscrever "{$a->user}" do curso "{$a->course}"?';
$string['unenrolusers'] = 'Desinscrever usuários';
$string['wscannotenrol'] = 'A instância do Plugin não permite a inscrição manual de um usuário no curso  id = {$a->courseid}';
$string['wsnoinstance'] = 'A instância do Plugin para inscrição manual não existe ou foi desativada para o curso (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Você não tem permissão para atribuir este papel  ({$a->roleid}) para este usuário  ({$a->userid}) neste curso ({$a->courseid}).';
