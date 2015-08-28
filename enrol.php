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
 * Strings for component 'enrol', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Plugins de inscrição em curso disponíveis';
$string['addinstance'] = 'Adicionar método';
$string['addinstanceanother'] = 'Adicionar método e criar outro';
$string['ajaxnext25'] = 'Próximos 25...';
$string['ajaxoneuserfound'] = '1 usuário encontrado';
$string['ajaxxusersfound'] = '{$a} usuários encontrados';
$string['assignnotpermitted'] = 'Você não tem permissão ou não pode atribuir papéis nesta turma.';
$string['bulkuseroperation'] = 'Operação em um conjunto de usuários';
$string['configenrolplugins'] = 'Por favor selecione todos os plugins necessários e organize-os na ordem apropriada.';
$string['custominstancename'] = 'Nome personalizado da instância';
$string['defaultenrol'] = 'Adicionar instância a novas turmas';
$string['defaultenrol_desc'] = 'É possível adcionar este plugin a todos os novas turmas por padrão.';
$string['deleteinstanceconfirm'] = 'Você está prestes a apagar o método de inscrição "{$a->name}". Todos os usuários {$a->users} atualmente matriculados usando este método serão descadastrados e todos os dados relacionados com a turma, tais como notas de usuários, membros do grupo ou assinaturas fórum serão apagados. Tem certeza de que quer continuar?';
$string['deleteinstanceconfirmself'] = 'Você tem certeza que deseja excluir instância "{$a->name}", que dá acesso a esta turma? É possível que você não seja capaz de acessar este curso, se você continuar.';
$string['deleteinstancenousersconfirm'] = 'Você está prestes a apagar a inscrição método &quot;{$a->name}&quot;. Tem certeza de que quer continuar?';
$string['disableinstanceconfirmself'] = 'Você tem certeza que deseja desativar instância "{$a->name}", que dá acesso a esta turma? É possível que você não seja capaz de acessar este curso, se você continuar.';
$string['durationdays'] = '{$a} dias';
$string['editenrolment'] = 'Editar inscrição';
$string['enrol'] = 'Inscrever';
$string['enrolcandidates'] = 'Usuários não inscritos';
$string['enrolcandidatesmatching'] = 'Usuários não matriculados achados';
$string['enrolcohort'] = 'Inscrever coorte';
$string['enrolcohortusers'] = 'Inscrever usuários';
$string['enrollednewusers'] = '{$a} novos usuários inscritos com sucesso';
$string['enrolledusers'] = 'Usuários inscritos';
$string['enrolledusersmatching'] = 'Usuários matriculados achados';
$string['enrolme'] = 'Faça a minha inscrição nesta turma';
$string['enrolmentinstances'] = 'Métodos de inscrição';
$string['enrolmentnew'] = 'Nova inscrição em {$a}';
$string['enrolmentnewuser'] = '{$a->user} fez a inscrição em "{$a->course}"';
$string['enrolmentoptions'] = 'Opções de inscrição';
$string['enrolments'] = 'Inscrições';
$string['enrolnotpermitted'] = 'Você não tem permissão para inscrever alguém nesta turma';
$string['enrolperiod'] = 'Período de validade da inscrição';
$string['enroltimecreated'] = 'Inscrição criada';
$string['enroltimeend'] = 'Inscrição termina';
$string['enroltimestart'] = 'Inscrição começa';
$string['enrolusage'] = 'Instâncias / matrículas';
$string['enrolusers'] = 'Inscrever usuários';
$string['enrolxusers'] = 'Inscrever {$a} usuários';
$string['errajaxfailedenrol'] = 'Falha ao inscrever usuário';
$string['errajaxsearch'] = 'Erro ao procurar usuários';
$string['erroreditenrolment'] = 'Um erro ocorreu enquanto se tentava editar as inscrições dos usuários';
$string['errorenrolcohort'] = 'Erro ao criar uma instância de sincronização de inscrição de coorte nesta turma.';
$string['errorenrolcohortusers'] = 'Erro ao inscrever membros do coorte nesta turma.';
$string['errorthresholdlow'] = 'Limite de notificação deve ser de pelo menos 1 dia.';
$string['errorwithbulkoperation'] = 'Ocorreu um erro no processamento das alterações no conjunto de inscrições';
$string['eventuserenrolmentcreated'] = 'Usuário matriculado na turma';
$string['eventuserenrolmentdeleted'] = 'Usuário removido da turma';
$string['eventuserenrolmentupdated'] = 'Desinscrição de usuário atualizada';
$string['expirynotify'] = 'Notificar Antes da Inscrição expirar';
$string['expirynotifyall'] = 'Inscrever e desinscrever usuário';
$string['expirynotifyenroller'] = 'Somente inscritos';
$string['expirynotify_help'] = 'Esta configuração determina quando as mensagens de notficação de expiramento de inscrição são enviadas.';
$string['expirynotifyhour'] = 'Hora para enviar notificações de expiração de inscrição';
$string['expirythreshold'] = 'Limite de notificação';
$string['expirythreshold_help'] = 'Quanto tempo antes de expirar a inscrição os usuários devem ser notificados?';
$string['extremovedaction'] = 'Ação para desinscrição externa';
$string['extremovedaction_help'] = 'Selecionar o que deve ser feito quando a inscrição de usuários desaparece de uma fonte externa de inscrições. Note que alguns dadoss de usuários e configurações são apagadas da turma quando é cancelada a matrícula.';
$string['extremovedkeep'] = 'Manter usuário inscrito';
$string['extremovedsuspend'] = 'Desativar inscrição na turma';
$string['extremovedsuspendnoroles'] = 'Desativar inscrição na turma e remover papéis';
$string['extremovedunenrol'] = 'Desinscrever usuário da turma';
$string['finishenrollingusers'] = 'Concluir a inscrição de usuários';
$string['foundxcohorts'] = 'Encontrados {$a} coortes';
$string['instanceadded'] = 'Método adicionado';
$string['instanceeditselfwarning'] = 'Aviso:';
$string['instanceeditselfwarningtext'] = 'Você está matriculado nesta turma através deste método de inscrição, alterações podem afetar seu acesso a este curso.';
$string['invalidenrolinstance'] = 'Instância de inscrição inválida';
$string['invalidrole'] = 'Papel inválido';
$string['manageenrols'] = 'Gerenciar plugins de inscrição';
$string['manageinstance'] = 'Gerenciar';
$string['migratetomanual'] = 'Migrar para inscrições manuais';
$string['nochange'] = 'Nenhuma alteração';
$string['noexistingparticipants'] = 'Nenhum participante existente';
$string['nogroup'] = 'Nenhum grupo';
$string['noguestaccess'] = 'Visitantes não podem acessar esta turma, por favor tente fazer login.';
$string['none'] = 'Nenhum';
$string['notenrollable'] = 'Você não pode se matricular nesta turma.';
$string['notenrolledusers'] = 'Outros usuários';
$string['otheruserdesc'] = 'Os usuários a seguir não estão matriculados nesta turma, mas tem papéis herdados ou atribuidos dentro da turma.';
$string['participationactive'] = 'Ativo';
$string['participationstatus'] = 'Estado';
$string['participationsuspended'] = 'Suspenso';
$string['periodend'] = 'até {$a}';
$string['periodnone'] = 'matriculados {$a}';
$string['periodstart'] = 'de {$a}';
$string['periodstartend'] = 'de {$a->start} até {$a->end}';
$string['proceedtocourse'] = 'Ir para o conteúdo da turma';
$string['recovergrades'] = 'Restaurar as notas antigas do usuário se possível';
$string['rolefromcategory'] = '{$a->role} (Herdado da categoria da turma)';
$string['rolefrommetacourse'] = '{$a->role} (Herdado de turma pai)';
$string['rolefromsystem'] = '	
{$a->role} (Atribuído no nível do site)';
$string['rolefromthiscourse'] = '{$a->role} (Atribuído nesta turma)';
$string['startdatetoday'] = 'Hoje';
$string['synced'] = 'Sincronizadas';
$string['testsettings'] = 'Configurações de teste';
$string['testsettingsheading'] = 'Teste as configurações de inscrição - {$a}';
$string['totalenrolledusers'] = '{$a} usuários inscritos';
$string['totalotherusers'] = '{$a} outros usuários';
$string['unassignnotpermitted'] = 'Você não tem permissão para retirar papéis nesta turma';
$string['unenrol'] = 'Cancelar inscrição';
$string['unenrolconfirm'] = 'Você quer mesmo desinscrever o usuário "{$a->user}" da turma "{$a->course}"?';
$string['unenrolme'] = 'Cancelar a minha inscrição na turma {$a}';
$string['unenrolnotpermitted'] = 'Você não tem permissão ou não pode desinscrever este usuário desta turma.';
$string['unenrolroleusers'] = 'Cancelar inscrições';
$string['uninstallmigrating'] = 'Migrando &quot;{$a}&quot; inscrições';
$string['unknowajaxaction'] = 'Ação solicitada desconhecida';
$string['unlimitedduration'] = 'Ilimitado';
$string['usersearch'] = 'Busca';
$string['withselectedusers'] = 'Com os usuários selecionados';
