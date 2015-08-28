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
 * Strings for component 'alternative', language 'pt_br', branch 'MOODLE_25_STABLE'
 *
 * @package   alternative
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative'] = 'alternativa';
$string['alternativename'] = 'Nome da atividade';
$string['alternativeoptions'] = 'Opções para esta alternativa';
$string['alternativeoptions_help'] = 'Cada alternativa mostra ao usuário várias opções. Estas opções estão descritas neste formulário. Se o título não for definido, a opção não será criada (mas será excluída caso já exista). Você pode adicionar uma nova opção com o botão após preencher todos os campos.';
$string['changeallowed'] = 'Mudança permitida';
$string['changeallowed_help'] = 'Se não estiver habilitada, o usuário será incapaz de mudar sua escolha. Professores e todos os papéis atribuídos a `alternatives:forceregistration` serão incapazes de alterar escolhas feitas por outros usuários.';
$string['chooseteammembers'] = 'Por favor, escolha os membros de sua equipe';
$string['chooseuser'] = 'Por favor, escolha um usuário para registrar';
$string['csv'] = 'Importar CSV';
$string['csv2ndfield'] = 'O segundo campo (locais) deve ser numérico, com 0 = ilimitado.';
$string['csvbadfieldnb'] = 'Número de campos inválidos: {$a} ao invés de 4';
$string['csv_help'] = 'Cada linha é composta de Título; Locais; Date; Descrição';
$string['csvunableopen'] = 'Não é possível abrir arquivo CSV.';
$string['datecomment'] = 'Data';
$string['datecomment_help'] = 'Este campo pode conter qualquer texto relacionado a uma data ou a um intervalo entre datas.';
$string['displaycompact'] = 'Exibição Compacta';
$string['displaycompact_help'] = 'Se não for habilitada, cada opção será exibida em várias linhas, juntamente com uma descrição explícita. Se habilitado, cada opção será exibida em uma linha, com uma descrição compacta.';
$string['fieldsetcsv'] = 'Opções de importação de arquivos CSV';
$string['fieldsetmultiple'] = 'Configurações para vários registros';
$string['fieldsetteam'] = 'Configurações para as equipes';
$string['forceregister'] = 'Forçar inscrições';
$string['groupdependent'] = 'Dependente do Grupo';
$string['groupdependent_help'] = 'Se esta opção estiver habilitada, o texto mostrado a cada usuário vai depender do grupo ao qual ele pertence.';
$string['individual'] = 'Individual';
$string['instructionsforcereg'] = 'Você não pode se registar, mas o seu papel permite que você registre os alunos para qualquer opção.';
$string['instructionsmultiple'] = 'Você deve escolher entre as opções {$a->multiplemin} e {$a->multiplemax}.';
$string['instructionsmultiplenomax'] = 'Você deve escolher pelo menos {$a->multiplemin} opções.';
$string['instructionsnochange'] = 'Uma vez que a escolha é salva, a mudança não será permitida.';
$string['instructionsteam'] = 'Você pode se registrar como um time. A equipe deve ter entre {$a->teammin} e {$a->teammax} membros. Como você registrou outros membros de sua equipe, você será o líder da equipe.';
$string['modulename'] = 'Alternativa';
$string['modulename_help'] = 'O módulo alternativa permite que os alunos registrar uma ou várias escolhas em uma determinada lista.';
$string['modulenameplural'] = 'alternativas';
$string['multiple'] = 'Múltiplo';
$string['multipleenable'] = 'Ativar essas configurações';
$string['multipleenable_help'] = 'Cada usuário tem de registar opções, entre os valores mínimos e máximos.';
$string['multiplemax'] = 'Máximo de inscrições de usuários';
$string['multiplemin'] = 'Mínimo de inscrições de usuários';
$string['noselectedoption'] = 'Você tem que selecionar uma opção';
$string['noselectedusers'] = 'Não há usuários selecionados';
$string['option'] = 'Opção';
$string['optionintro'] = 'Descrição';
$string['optionname'] = 'Título';
$string['options'] = 'Opções';
$string['places'] = 'Locais';
$string['placesavail'] = 'Locais disponíveis';
$string['pluginadministration'] = 'Administração alternativa';
$string['pluginname'] = 'alternativa';
$string['potentialteammembers'] = 'Membros potenciais da equipe';
$string['private'] = 'Privado';
$string['public'] = 'Público';
$string['publicreg'] = 'Registros públicos';
$string['publicreg_help'] = 'As inscrições podem ser: <dl><dt> públicas </dt><dd> mostrada a todos, </dd><dt> públicas no mesmo grupo </dt><dd> usuários vêem registros de outros usuários que compartilham pelo menos um grupo em comum</dd><dt> privadas </dt><dd> mostradas apenas para usuários avançados (professores, etc.) </dd></dl>';
$string['register'] = 'Registrar';
$string['registrationforbidden'] = 'Você não pode se registrar aqui.';
$string['registrations'] = 'Inscrições';
$string['registrationsaved'] = 'Sua escolha de registro foi salvo.';
$string['regteams'] = 'Grupos inscritos';
$string['remains'] = 'Restos';
$string['reminderBefore'] = 'antes de [[AlterUntil]]';
$string['reminderFull'] = 'Você deve fazer uma escolha na atividade “[[AlterName]]”';
$string['reminderFullHtml'] = 'Você deve fazer uma escolha na atividade “<i>[[AlterName]]</i>”';
$string['reminderSmall'] = 'Você deve fazer uma escolha na atividade “[[AlterName]]”';
$string['reminderSubject'] = 'Lembrete: você deve escolher entre as opções alternativas';
$string['sendReminder'] = 'Enviar lembrete';
$string['separator'] = 'Separador';
$string['students'] = 'Estudantes';
$string['synthesis'] = 'Síntese';
$string['synthfree'] = 'Livre';
$string['synthlimitplaces'] = 'Opções de lugares limitados (individual)';
$string['synthlimitteamplaces'] = 'Opções de lugares limitados (equipe)';
$string['synthplaces'] = 'Locais (individual)';
$string['synthpotential'] = 'Potenciais alunos';
$string['synthregistered'] = 'Alunos matriculados';
$string['synthreserved'] = 'Reservado (entre limitado)';
$string['synthteamplaces'] = 'Locais (equipe)';
$string['synthunlimitplaces'] = 'Opções locais ilimitadas (individual)';
$string['synthunlimitteamplaces'] = 'Opções de lugares ilimitados (equipe)';
$string['synthunregistered'] = 'Estudantes não registrados';
$string['team'] = 'Equipe';
$string['teamenable'] = 'Ativar configurações da equipe';
$string['teamenable_help'] = 'Definir os tamanhos mínimo e máximo de equipes.';
$string['teamleader'] = 'Líder da equipe';
$string['teamleadernotamember'] = 'O líder da equipe não deve ser um membro de sua equipe.';
$string['teammax'] = 'Tamanho máximo da equipe';
$string['teammin'] = 'Tamanho mínimo da equipe';
$string['teamplaces'] = 'Lugares das equipes';
$string['teamplacesavail'] = 'Lugares disponíveis para as equipes';
$string['teams'] = 'Equipes';
$string['unique'] = 'Único';
$string['unregister'] = 'Cancelar o inscrição';
$string['unregisterLeader'] = 'Cuidado: o cancelamento da inscrição de um líder irá resultar no cancelamento das inscrições de toda a equipe.';
$string['uploadoverwrites'] = 'Atenção: atualizar um novo arquivo exclui todos os registros de arquivos e opções anteriores.';
$string['userinfo'] = 'Registrou a opções {$a}.';
$string['usersnotreg'] = 'Usuários não inscritos';
$string['usersreg'] = 'Usuários registrados';
$string['viewallregistrations'] = 'Ver inscrições';
$string['viewallusersnotreg'] = 'Ver usuários não registados';
$string['viewallusersreg'] = 'Ver usuários registrados';
$string['viewsynthesis'] = 'Ver síntese';
$string['viewteams'] = 'Visualizar Equipes';
$string['wrongteamsize'] = 'O tamanho da sua equipe não está entre os limites permitidos.';
