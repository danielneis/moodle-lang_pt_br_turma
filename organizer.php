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
 * Strings for component 'organizer', language 'pt_br', branch 'MOODLE_27_STABLE'
 *
 * @package   organizer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline'] = 'Fim de registro';
$string['absolutedeadline_help'] = 'Marque essa opção para definir o tempo após o qual ações de aluno não serão mais possíveis.';
$string['addappointment'] = 'Adicionar compromisso';
$string['addslots_placesinfo'] = 'Essa ação criará {$a->numplaces} novos locais possíveis, perfazendo um total de {$a->totalplaces} locais possíveis para {$a->numstudents} alunos.';
$string['addslots_placesinfo_group'] = 'Essa ação criará {$a->numplaces} novos locais possíveis, perfazendo um total de {$a->totalplaces} locais possíveis para {$a->numgroups} grupos.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Os detalhes do organizador e formulário de registro estarão disponíveis de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Início do registro';
$string['allowsubmissionsfromdate_help'] = 'Marque essa opção se você quiser tornar esse organizador disponível para alunos após um certo período.';
$string['allowsubmissionsfromdatesummary'] = 'Esse organizador aceitará registros de  <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Sempre mostra descrição';
$string['appointmentcomments'] = 'Comentários';
$string['appointmentcomments_help'] = 'Informação adicional sobre os compromissos pode ser adicionada aqui.';
$string['appointmentdatetime'] = 'Data & hora';
$string['appointment_reminder:student:fullmessage'] = 'Olá {$a->receivername}!

Como parte da turma {$a->courseid} {$a->coursefullname}, você tem um compromisso com {$a->sendername} em {$a->date} às {$a->time} em {$a->location}.

TUWEL Messaging System';
$string['appointment_reminder:student:group:fullmessage'] = 'Olá {$a->receivername}!

Como parte da turma {$a->courseid} {$a->coursefullname}, você tem um compromisso de grupo com {$a->sendername} em {$a->date} às {$a->time} em {$a->location}.

TUWEL Messaging System';
$string['appointment_reminder:student:group:smallmessage'] = 'Você tem um compromisso de grupo com {$a->sendername} em {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso de grupo';
$string['appointment_reminder:student:smallmessage'] = 'Você tem um compromisso com {$a->sendername} em {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso';
$string['appointment_reminder:teacher:digest:fullmessage'] = 'Olá {$a->receivername}!

Amanhã você terá os seguintes compromissos:

{$a->digest}

TUWEL Messaging System';
$string['appointment_reminder:teacher:digest:smallmessage'] = 'Você recebeu uma mensagem com o resumo de seus compromissos amanhã';
$string['appointment_reminder:teacher:digest:subject'] = 'Resumo de compromisso';
$string['appointment_reminder:teacher:fullmessage'] = 'Olá {$a->receivername}!

Como parte da turma {$a->courseid} {$a->coursefullname}, você tem um compromisso com alunos em {$a->date} às {$a->time} em {$a->location}.

TUWEL Messaging System';
$string['appointment_reminder:teacher:group:digest:fullmessage'] = 'Olá {$a->receivername}!

Amanhã você terá os seguintes compromissos:

{$a->digest}

TUWEL Messaging System';
$string['appointment_reminder:teacher:group:digest:smallmessage'] = 'Você recebeu uma mensagem com o resumo de seus compromissos amanhã';
$string['appointment_reminder:teacher:group:digest:subject'] = 'Resumo de compromisso';
$string['appointment_reminder:teacher:smallmessage'] = 'Você terá um compromisso com alunos em {$a->date} às {$a->time} em {$a->location}.';
$string['appointment_reminder:teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Lembrete de compromisso';
$string['atlocation'] = 'em';
$string['availability'] = 'Disponibilidade';
$string['availablefrom'] = 'Possíveis aplicações de';
$string['availablefrom_help'] = 'Armazenar o quadro de tempo no qual alunos terão a permissão de registrar esses intervalos. De forma alternativa, marque a opção "Começando agora" para habilitar registro imediatamente.';
$string['availablegrouplist'] = 'Grupos disponíveis';
$string['back'] = 'Retornar';
$string['btn_add'] = 'Adicionar novos intervalos';
$string['btn_comment'] = 'Editar comentário';
$string['btn_delete'] = 'Remover intervalos selecionados';
$string['btn_edit'] = 'Editar intervalos selecionados';
$string['btn_eval'] = 'Avaliar intervalos selecionados';
$string['btn_eval_short'] = 'Nota';
$string['btn_print'] = 'Imprimir intervalos selecionados';
$string['btn_reeval'] = 'Reavaliar';
$string['btn_register'] = 'Registrar';
$string['btn_remind'] = 'Enviar lembrete';
$string['btn_reregister'] = 'Registrar de novo';
$string['btn_save'] = 'Salvar comentário';
$string['btn_send'] = 'Enviar';
$string['btn_unregister'] = 'Cancelar registro';
$string['cannot_eval'] = 'Não pode avaliar, o aluno tem um';
$string['can_reregister'] = 'Você pode registrar novamente para outro compromisso.';
$string['collision'] = 'Atenção! Colisão detectada com seguinte(s) evento(s):';
$string['configabsolutedeadline'] = 'Compensar o padrão do seletor de data e hora a partir da data e hora atuais.';
$string['configahead'] = 'adiante';
$string['configday'] = 'dia';
$string['configdays'] = 'dia';
$string['configdigest'] = 'Enviar sumário dos compromissos do dia seguinte ao professor.';
$string['configdigest_label'] = 'Enviar resumo dos compromissos aos professores';
$string['configdontsend'] = 'Não enviar';
$string['configemailteachers'] = 'Enviar notificações de e-mail aos professores sobre mudanças no status de registro.';
$string['configemailteachers_label'] = 'Enviar notificações de e-mail aos professores';
$string['confighour'] = 'hora';
$string['confighours'] = 'horas';
$string['configintro'] = 'Os valores que você armazenou aqui definem os valores padrões que são usados no formulário de configurações quando você cria um novo organizador.';
$string['configlocationlink'] = 'O link para um mecanismo de busca usado para mostrar o caminho para a localização. Coloque $searchstring na URL onde a consulta passa';
$string['configmaximumgrade'] = 'Armazena o valor padrão selecionado no campo de notas ao criar um novo organizador. Essa é a nota máxima atribuível para um aluno para esse compromisso.';
$string['configminute'] = 'minuto';
$string['configminutes'] = 'minutos';
$string['configmonth'] = 'mês';
$string['configmonths'] = 'meses';
$string['confignever'] = 'Nunca';
$string['configrelativedeadline'] = 'O tempo padrão adiantado de um compromisso quando os participantes devem ser notificados sobre ele.';
$string['configrequiremodintro'] = 'Desabilitar essa opção se não quiser obrigar os usuários a entrar com a descrição de cada atividade.';
$string['configweek'] = 'semana';
$string['configweeks'] = 'semanas';
$string['configyear'] = 'ano';
$string['confirm_delete'] = 'Remover';
$string['confirm_organizer_remind_all'] = 'Enviar';
$string['create'] = 'Criar';
$string['createsubmit'] = 'Criar intervalos de tempo';
$string['datapreviewtitle'] = 'Pré-visualização de dados';
$string['datetemplate'] = '%d.%m.%Y';
$string['day'] = 'dia';
$string['day_0'] = 'Segunda-feira';
$string['day_1'] = 'Terça-feira';
$string['day_2'] = 'Quarta-feira';
$string['day_3'] = 'Quinta-feira';
$string['day_4'] = 'Sexta-feira';
$string['day_5'] = 'Sábado';
$string['day_6'] = 'Domingo';
$string['day_pl'] = 'dias';
$string['deleteheader'] = 'Removendo os seguintes intervalos:';
$string['deletekeep'] = 'Os seguintes compromissos serão cancelados. Alunos registrados serão notificados e os intervalos serão removidos:';
$string['deletenoslots'] = 'Nenhum intervalo removível selecionado';
$string['deleteorganizergrades'] = 'Remover notas do livro de notas';
$string['delete_organizer_grades'] = 'Removendo notas de todos os organizadores';
$string['downloadfile'] = 'Baixar arquivo';
