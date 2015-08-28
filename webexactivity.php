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
 * Strings for component 'webexactivity', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   webexactivity
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalsettings'] = 'Configurações adicionais de reuniões';
$string['allchat'] = 'Os participantes podem conversar com outros participantes';
$string['apipassword'] = 'Senha do administrador do WebEx';
$string['apipassword_help'] = 'A senha para uma conta de administrador no seu site.';
$string['apisettings'] = 'Configurações da API';
$string['apiusername'] = 'Nome de usuário do Administrador do WebEx';
$string['apiusername_help'] = 'O nome de usuário para uma conta de administrador no seu site. Esta deve ser uma conta de usuário dedicada para Moodle por razões de segurança.';
$string['availabilityendtime'] = 'Horário final da disponibilidade estendida';
$string['badpassword'] = 'O seu nome de usuário e senha WebEx estão incorretos.';
$string['badpasswordexception'] = 'Sua senha WebEx esta incorreta e não pôde ser atualizada.';
$string['confirmrecordingdelete'] = 'Tem a certeza que pretende excluir a gravação <b>{$a->name}</b>, com duração de {$a->time}? Isso não poderá ser desfeito.';
$string['connectionexception'] = 'Ocorreu um erro ao tentar conectar: {$a->error}';
$string['curlsetupexception'] = 'Ocorreu um erro durante a configuração de CURL.';
$string['defaultmeetingtype'] = 'Tipo de reunião padrão';
$string['defaultmeetingtype_help'] = 'O tipo de reunião que será pré-selecionada ao criar uma nova reunião.';
$string['deletelink'] = '<a href="{$a->url}">Excluir</a>';
$string['deletetime'] = 'Horário da exclusão';
$string['deletionin'] = '<div>{$a->time} até a exclusão. </div>';
$string['deletionsoon'] = '<div>Será excluído em breve. </div>';
$string['description'] = 'Descrição';
$string['duration'] = 'Duração esperada';
$string['duration_help'] = 'A duração prevista da reunião. É apenas para fins informativos, e não afeta o tempo que o encontro pode ser executado.';
$string['errordeletingrecording'] = 'Erro ao excluir gravação';
$string['error_HM_AccessDenied'] = 'O acesso foi negado ao hospedar esta reunião.';
$string['error_JM_InvalidMeetingKey'] = 'Houve um erro de chave de reunião no WebEx e você não pode participar desta reunião.';
$string['error_JM_InvalidMeetingKeyOrPassword'] = 'Houve um erro de chave em reunião ou de senha no WebEx e você não pode participar desta reunião.';
$string['error_JM_MeetingLocked'] = 'Esta reunião está bloqueada e você não pode participar.';
$string['error_JM_MeetingNotInProgress'] = 'A reunião não está em andamento. Ela pode ainda não ter iniciado, ou já terminou.';
$string['error_LI_AccessDenied'] = 'O usuário não pode ser conectado a WebEx.';
$string['error_LI_AccountLocked'] = 'A conta de usuário WebEx está bloqueada.';
$string['error_LI_AutoLoginDisabled'] = 'Autenticação automática está desativada para esse usuário';
$string['error_LI_InvalidSessionTicket'] = 'O bilhete da sessão é inválido. Por favor, tente novamente.';
$string['error_unknown'] = 'Ocorreu um erro desconhecido.';
$string['event_meeting_ended'] = 'A reunião terminou';
$string['event_meeting_hosted'] = 'A reunião está organizada';
$string['event_meeting_started'] = 'A reunião começou';
$string['event_recording_created'] = 'Gravação criada';
$string['event_recording_deleted'] = 'Gravação excluída';
$string['event_recording_downloaded'] = 'Gravação baixada';
$string['event_recording_viewed'] = 'Gravação visualizada';
$string['externalpassword'] = 'Os participantes também vão precisar saber a senha da reunião: <b>{$a}</b>';
$string['inprogress'] = 'Em andamento';
$string['invalidtype'] = 'Tipo inválido';
$string['joinmeetinglink'] = '<a href="{$a->url}">Participar da reunião</a>';
$string['longavailability'] = 'Disponibilidade estendida';
$string['manageallrecordings'] = 'Gerenciar todas as gravações da WebEx';
$string['manageallrecordings_help'] = 'Gerenciar todas as gravações do servidor WebEx, e não apenas aqueles com uma atividade Moodle.';
$string['meetingclosegrace_help'] = 'O número de minutos após a hora de início mais tempo após o qual a reunião será considerada completa.';
$string['meetingpassword'] = 'Senha da reunião';
$string['meetingsettings'] = 'Configurações da reunião';
$string['meetingtype'] = 'Tipo de reunião';
$string['meetingtypes'] = 'Tipos de reunião';
$string['meetingupcoming'] = 'Esta reunião ainda não está disponível para participação.';
$string['modulename'] = 'Reunião WebEx';
$string['modulenameplural'] = 'Reuniões WebEx';
$string['page_managerecordings'] = 'Gerenciar gravações';
$string['page_manageusers'] = 'Gerenciar usuários';
$string['pluginadministration'] = 'Administração de reunião WebEx';
$string['pluginname'] = 'Reunião WebEx';
$string['pluginnamepural'] = 'Reuniões WebEx';
$string['prefix'] = 'Prefixo do nome de usuário';
$string['prefix_help'] = 'Este texto será prefixado para todos os nomes de usuário criados por este módulo.';
$string['recordingfileurl'] = 'Baixar';
$string['recordinglength'] = '({$a->time}, {$a->size})';
$string['recordingname'] = 'Nome da gravação';
$string['recordings'] = 'Gravações';
$string['recordingsettings'] = 'Configurações das gravações';
$string['requiremeetingpassword'] = 'Exigir senhas de reunião';
$string['settings'] = 'Configurações de reunião WebEx';
$string['sitename'] = 'Nome do site';
$string['sitename_help'] = 'A parte da URL antes de .webex.com. Se a  URL do site for "https://exemplo.webex.com", você deve digitar "exemplo" acima.';
$string['startssoon'] = 'Inicia em breve';
$string['starttime'] = 'Horário de início';
$string['studentdownload'] = 'Permitir que os alunos baixem as gravações';
$string['studentdownload_help'] = 'Permitir aos alunos o acesso ao link de download para as gravações.';
$string['studentvisible'] = 'Visível para alunos';
$string['typeforall'] = 'Disponível para todos os usuários';
$string['typeinstalled'] = 'Disponível';
$string['typemeetingcenter'] = 'Centro de reuniões';
$string['typepwreq'] = 'Senha da reunião requerida';
$string['typetrainingcenter'] = 'Centro de treinamento';
$string['undeletelink'] = '<a href="{$a->url}">Desfazer exclusão</a>';
$string['usereditauto'] = 'Seu usuário WebEx é gerenciado internamente, e não pode ser editado.';
$string['usereditbad'] = 'Você não deveria ter chegado a esta página.';
$string['usereditunabletoload'] = 'Não é possível carregar o seu usuário de WebEx.';
$string['userexistsexplanation'] = 'O seu endereço de e-mail ({$a->email}) já está em uso pelo o usuário da WebEx <b>{$a->username}</b>. Por favor, digite a sua senha WebEx abaixo.';
$string['webexactivity:addinstance'] = 'Adicionar uma nova reunião WebEx';
$string['webexactivity:allavailabletypes'] = 'Criar reuniões de todos os tipos instalados';
$string['webexactivityname'] = 'Nome da reunião';
$string['webexactivity:reports'] = 'Usar relatórios WebEx';
$string['webexactivity:view'] = 'Ver reunião WebEx';
$string['webexid'] = 'ID WebEx';
$string['webexrecordings'] = 'Gravações WebEx';
$string['webexxmlexception'] = 'Ocorreu um erro no WebEx ao processar XML: {$a->errorcode} {$a->error}';
