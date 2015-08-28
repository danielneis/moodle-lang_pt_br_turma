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
 * Strings for component 'scheduler', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['addappointment'] = 'Adicionar outro estudante';
$string['addcommands'] = 'Adicionar slots';
$string['addondays'] = 'Adicionar compromissos em';
$string['addscheduled'] = 'Adicionar estudante agendado';
$string['addscheduled_help'] = '<h3> Adicionando uma consulta sobre a configuração do slot </h3>
<p> Usando este link, você irá adicionar um usuário à lista de compromissos definidos por esta informação do slot. Pode ser uma maneira simples e rápida para configurar um compromisso coletivo. </p>';
$string['addsession'] = 'Adicionar slots repetidos';
$string['addsingleslot'] = 'Adicionar um único slot';
$string['addslot'] = 'Você pode adicionar slots de compromisso adicionais a qualquer hora.';
$string['addstudenttogroup'] = 'Adicionar esse estudante ao grupo de compromisso';
$string['allappointments'] = 'Todos os compromissos';
$string['allowgroup'] = 'Slot exclusivo - clique para modificar';
$string['allslotsincloseddays'] = 'Todos os slots foram em dias fechados';
$string['allteachersgrading'] = 'Professores podem dar nota a todos os compromissos';
$string['allteachersgrading_desc'] = 'Quando habilitados, professores podem dar nota para compromissos nos quais não estão inscritos.';
$string['alreadyappointed'] = 'Não pode criar compromisso. O slot já está completamente reservado.';
$string['appointagroup'] = 'Compromisso do grupo';
$string['appointagroup_help'] = 'Escolha se você quiser fazer o compromisso apenas para si mesmo, ou para um grupo inteiro.';
$string['appointfor'] = 'Designar para';
$string['appointformygroup'] = 'Designar para meu grupo inteiro';
$string['appointingstudent'] = 'Compromisso para slot';
$string['appointingstudentinnew'] = 'Compromisso para novo slot';
$string['appointmentmode'] = 'Configurando o modo de compromisso';
$string['appointmentmode_help'] = '<p> Você pode escolher aqui algumas variantes na forma como os compromissos podem ser tomados. </p>
<p><ul>
<li><strong> "<emph>n</emph> compromissos neste organizador": </strong> O estudante só pode reservar um número fixo de compromissos nesta atividade. Mesmo se o professor os marca como "visto", eles não serão autorizados a reservar mais reuniões. A única maneira de restaurar a capacidade de um aluno para reservar é excluir os antigos registros "visto". </ Li>
<li><strong>"<emph>n</emph> compromissos em um momento": </strong> O aluno pode reservar um número fixo de compromissos. Quando a reunião acabou e que o professor tem marcado o aluno como "visto", o estudante pode fazer novas nomeações. No entanto, o estudante é limitado a <emph>n</ emph> slots "abertos" (não vistos), em determinado momento.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Compromisso {$a}';
$string['appointmentnotes'] = 'Notas para compromisso';
$string['appointments'] = 'Compromissos';
$string['appointmentsummary'] = 'Compromisso habilitado {$a->startdate} de {$a->starttime} para {$a->endtime} com {$a->teacher}';
$string['appointsolo'] = 'somente eu';
$string['appointsomeone'] = 'Adicionar novo compromisso';
$string['attendable'] = 'Apto';
$string['attendablelbl'] = 'Total de candidatos para agendamento';
$string['attended'] = 'Atendido';
$string['attendedlbl'] = 'Quantidade de alunos atendidos';
$string['attendedslots'] = 'Slots atendidos';
$string['availableslots'] = 'Slots disponíveis';
$string['availableslotsall'] = 'Todos os slots';
$string['availableslotsnotowned'] = 'Não possuído';
$string['availableslotsowned'] = 'Possuído';
$string['bookwithteacher'] = 'Professor';
$string['bookwithteacher_help'] = 'Escolha um professor para o compromisso.';
$string['break'] = 'Intervalo entre slots';
$string['breaknotnegative'] = 'Tamanho do intervalo não deve ser negativo';
$string['canbook1appointment'] = 'Você pode reservar mais um compromisso nesse organizador.';
$string['canbooknappointments'] = 'Você pode reservar {$a} mais compromissos nesse organizador.';
$string['canbooknofurtherappointments'] = 'Você não pode reservar novos compromissos nesse organizador.';
$string['canbooksingleappointment'] = 'Você pode reservar um compromisso nesse organizador.';
$string['canbookunlimitedappointments'] = 'Você pode reservar qualquer número de compromissos nesse organizador.';
$string['cancelledbystudent'] = '{$a} : Compromisso cancelado ou movido por um aluno';
$string['cancelledbyteacher'] = '{$a} : Compromisso cancelado pelo professor';
$string['choice'] = 'Escolha';
$string['chooseexisting'] = 'Escolher existente';
$string['choosingslotstart'] = 'Escolhendo o horário de início';
$string['choosingslotstart_help'] = 'Mude (ou escolha) o horário de início do compromisso. Se esse compromisso colide com alguns outros slots, você será perguntado
se esse slot substitui todos os compromissos conflitantes. Note-se que os novos parâmetros do slot substituirão todas as configurações anteriores.';
$string['comments'] = 'Comentários';
$string['complete'] = 'Reservado';
$string['composeemail'] = 'Escrever e-mail:';
$string['confirmdelete'] = 'A exclusão é definitiva. Continuar mesmo assim?';
$string['conflictingslots'] = 'Conflitante';
$string['course'] = 'Curso';
$string['csvencoding'] = 'Codificação do texto do arquivo';
$string['csvfieldseparator'] = 'Separador de campo para csv';
$string['csvparms'] = 'Parâmetros de formato de csv';
$string['csvrecordseparator'] = 'Separador de registros para csv';
$string['cumulatedduration'] = 'Duração somada dos compromissos';
$string['date'] = 'Data';
$string['datelist'] = 'Resumo';
$string['defaultslotduration'] = 'Duração padrão de slot';
$string['defaultslotduration_help'] = 'Tamanho padrão (em minutos) para os slots de compromissos que você configurou';
$string['deleteallslots'] = 'Excluir todos os slots';
$string['deleteallunusedslots'] = 'Excluir slots não utilizados';
$string['deletecommands'] = 'Excluir slots';
$string['deletemyslots'] = 'Excluir todos os meus slots';
$string['deleteselection'] = 'Excluir slots selecionados';
$string['deletetheseslots'] = 'Excluir esses slots';
$string['deleteunusedslots'] = 'Excluir meus slots não utilizados';
$string['department'] = 'De onde?';
$string['disengage'] = 'Excluir todos os meus compromissos';
$string['displayfrom'] = 'Mostrar compromissos para alunos de';
$string['distributetoslot'] = 'Distribuir para o grupo inteiro';
$string['divide'] = 'Dividir entre slots?';
$string['dontforgetsaveadvice'] = 'Você mudou a lista de pessoas nomeadas. Não se esqueça de salvar essa forma para confirmar as mudanças definitivamente.';
$string['downloadexcel'] = 'Exporta para Excel';
$string['downloads'] = 'Exporta';
$string['duration'] = 'Duração';
$string['durationrange'] = 'Duração de slot deve estar entre {$a->min} e {$a->max} minutos.';
$string['email_applied_html'] = '<p>Um compromisso foi aplicado em {$a->date} às {$a->time},<br/>
pelo aluno <a href="{$a->attendee_url}">{$a->attendee}</a> para a turma:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>usando o organizador intitulado "<em>{$a->module}</em>" no website: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Um compromisso foi aplicado em {$a->date} às {$a->time},
pelo aluno {$a->attendee} para a turma:

{$a->course_short}: {$a->course}

usando o organizador intitulado "{$a->module}" no website: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Novo compromisso';
$string['email_cancelled_html'] = '<p>Seu compromisso em <strong>{$a->date}</strong> às <strong>{$a->time}</strong>,<br/>
com o aluno <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> para a turma:</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>no organizador intitulado "<em>{$a->module}</em>" no website : <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">foi cancelado ou removido</span></strong>.</p>';
$string['email_cancelled_plain'] = 'Seu compromisso em  {$a->date} às {$a->time},
com o aluno {$a->attendee} para a turma:

{$a->course_short} : {$a->course}

no organizador intitulado "{$a->module}" no website : {$a->site}

foi cancelado ou removido.';
$string['email_cancelled_subject'] = '{$a->course_short}: Compromisso cancelado ou removido por um aluno';
$string['emailreminder'] = 'Envie um lembrete';
$string['email_reminder_html'] = '<p>Você tem um próximo compromisso em <strong>{$a->date}</strong>
de <strong>{$a->time}</strong> até<strong>{$a->endtime}</strong><br/>
com<strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>Local: <strong>{$a->location}</strong></p>';
$string['emailreminderondate'] = 'Envie um lembrete em';
$string['email_reminder_plain'] = 'Você tem um próximo compromisso
em {$a->date} de {$a->time} até {$a->endtime}
com {$a->attendant}.

Local: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Lembrete de compromisso';
$string['email_teachercancelled_html'] = '<p>Seu compromisso em <strong>{$a->date}</strong> às <strong>{$a->time} </strong>,<br/>
com o {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> para a turma:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>no organizador "<em>{$a->module}</em>" no website: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">foi cancelado</span></strong>. Por favor, solicite por um novo slot.</p>';
$string['email_teachercancelled_plain'] = 'Seu compromisso em {$a->date} às {$a->time},
com o {$a->staffrole} {$a->attendant} para a turma:

{$a->course_short}: {$a->course}

no organizador intitulado "{$a->module}" no website: {$a->site}

foi cancelado. Por favor, solicite por um novo slot.';
