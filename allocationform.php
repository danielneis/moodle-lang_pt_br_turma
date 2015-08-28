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
 * Strings for component 'allocationform', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   allocationform
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acesso negado ao formulário de atribuição';
$string['add_option'] = 'Adicionar nova opção';
$string['allocationform'] = 'Formulário de atribuição';
$string['allocationform:addinstance'] = 'Adicionar um novo formulário de atribuição';
$string['allocationform:edit'] = 'Editar formulários de atribuição';
$string['allocationform_instructions'] = 'Você deve se classificar {$a->choices} opções, você será atribuído para {$a->alocation} das opções. {$a->extratext}';
$string['allocationformname'] = 'Nome do formulário de atribuição';
$string['allocationformname_help'] = 'O nome deste formulário de atribuição  será usado para se conectar ao formulário.';
$string['allocationform_notwant'] = 'Você pode selecionar 1 opção para a qual você não deseja ser atribuído.';
$string['allocationform:reallocate'] = 'Forçar uma redistribuição';
$string['allocationform:reopen'] = 'Permitir que um usuário reabra um formulário de atribuição.';
$string['allocationform:viewallocations'] = 'Ver todas as atribuições feitas';
$string['allocationform:viewform'] = 'Ver formulários de atribuição';
$string['allocations'] = 'Atribuições';
$string['allocations_not_visible'] = 'Aviso: as atribuições só podem ser vistas pelos editores até que eles as disponibilizem';
$string['allocationviewed'] = 'Formulário de Atribuição visto';
$string['al_notwant'] = 'Não quero';
$string['al_notwant_help'] = 'Selecione uma opção que você não deseja ser atribuído para';
$string['availabilityheading'] = 'Formato da disponibilidade';
$string['back_to_edit'] = 'Mudar o modo de edição';
$string['back_to_edit_warning'] = 'Isto irá apagar todas as informações apresentadas ao formulário.';
$string['before_start'] = 'A data de início do presente formulário de atribuição ainda não chegou.';
$string['choice'] = 'Preferência {$a->choice}';
$string['choiceheading'] = 'Opções de preferência';
$string['choice_help'] = 'Selecione uma opção que você gostaria de ser atribuído';
$string['cron'] = 'Processamento em segundo plano para formulários de Atribuição';
$string['csvgenerated'] = 'CSV gerado';
$string['deadline'] = 'Prazo de Entrega';
$string['deadline_help'] = 'A última vez que os usuários serão capazes de selecionar as suas atribuições, também é a primeira vez que um formulário de atribuição será colocado em fila para o processo de atribuição acontecer.';
$string['deadline_message'] = 'O prazo para preencher este formulário é: {$a->deadline}';
$string['deadline_passed'] = 'O prazo desse formulário já terminou, se você ativá-lo agora ele  começara a processar imediatamente.';
$string['defaultrole'] = 'Papel padrão';
$string['defaultrole_help'] = 'Definir o papel padrão que será utilizado para selecionar os usuários que serão atribuídos usando a atividade';
$string['deny_access'] = 'Você não tem permissão para ver este formulário de atribuição.';
$string['disallow_list'] = 'Proibir lista';
$string['disallow_list_help'] = 'Todos os usuários assinalados não serão capazes de selecionar {$a->option_name}';
$string['duplicate_choice'] = 'Você só pode selecionar uma opção de cada vez';
$string['duplicateoption'] = 'Erro: Suas alterações não puderam ser salvas no banco de dados. Isso ocorreu muito provavelmente devido a inserção de um nome de opção duplicado.';
$string['form_allocation_error'] = 'ERRO no formID {$a->formid}:';
$string['form_allocation_error2'] = 'ERRO: Não é possível atribuir UserID {$a->userid}';
$string['generate_allocation_csv'] = 'Gerar CSV de atribuições de usuários';
$string['generate_csv'] = 'Gerar CSV de opções do usuário';
$string['invalidstate'] = 'Uma mudança de estado inválida foi passada para o formulário de atribuição';
$string['make_active'] = 'Faça um formulário ativo';
$string['modulename'] = 'Formulário de atribuição';
$string['modulenameplural'] = 'Formulários de atribuição';
$string['noallocationforms'] = 'Formulários de atribuição não encontrados para este curso';
$string['no_allocations'] = 'Atribuições não encontradas';
$string['not_active'] = 'O formulário de atribuição não está disponível, por favor, tente novamente mais tarde.';
$string['not_enough_slots'] = 'Não há vagas suficientes disponíveis para todas as pessoas aceitáveis para atribuição';
$string['notrequired'] = 'não requerido';
$string['notsaved'] = 'Não salvo, você não tem o papel necessário.';
$string['not_set'] = 'Você deve fazer uma escolha';
$string['notwant'] = 'Incluir não quer';
$string['numberofallocations'] = 'Atribuições por usuário';
$string['numberofallocations_help'] = 'O número de opções que um usuário será atribuído a';
$string['numberofchoices'] = 'Número de escolhas';
$string['numberofchoices_help'] = 'O número de opções que um usuário terá que escolher';
$string['ok_to_continue'] = 'Tem certeza de que deseja continuar?';
$string['optionedited'] = 'Opções editadas';
$string['option_form_header'] = 'Nova opção';
$string['option_heading'] = 'Título';
$string['option_heading_help'] = 'Um título a ser exibido acima desta opção.';
$string['option_list'] = 'Lista de Opções';
$string['option_maxallocation'] = 'Atribuições máximas';
$string['option_maxallocation_help'] = 'O número máximo de pessoas que podem ser atribuídas para essa opção.';
$string['option_maxallocation_invalid'] = 'Atribuições máximas não definidas';
$string['option_name'] = 'Nome da Opção';
$string['option_name_help'] = 'O nome da opção, pois ela será exibida para o usuário';
$string['option_restricted'] = 'Usuários restritos';
$string['overviewclose'] = 'Data de Encerramento: {$a->closedate}';
$string['overviewname'] = 'Atribuição: {$a->link}';
$string['overviewready'] = 'Sua atribuição está disponível.';
$string['overviewreview'] = 'Pronto para revisão. As pessoas afetadas não podem ver os resultados.';
$string['people'] = 'Número de pessoas a serem atribuídas';
$string['permissionedited'] = 'Permissão editada';
$string['pluginadministration'] = 'Formulário de administração de atribuição';
$string['pluginname'] = 'Formulários de Atribuição (eForms)';
$string['queued_for_processing'] = 'O formulário de atribuição está esperando para ser processado ... por favor, volte mais tarde.';
$string['reprocess'] = 'Forçar reatribuição';
$string['reprocess_warning'] = 'Isto irá apagar todas as atribuições atuais';
$string['requirechoice'] = 'Exigir escolha';
$string['restrict'] = 'Restringir';
$string['roleselect'] = 'Papel a atribuir';
$string['roleselect_help'] = 'Selecione o papel dos utilizadores sobre este curso que será atribuído através deste formulário.';
$string['saved'] = 'Opções salvas, você pode agora retornar ao curso';
$string['show_allocations'] = 'Disponibilizar atribuições';
$string['show_course'] = 'Voltar para {$a->coursename}';
$string['slots'] = 'Número de vagas para a atribuição';
$string['startdate'] = 'Data de Início';
$string['startdate_help'] = 'A primeira data em que os usuários serão capazes de selecionar as suas atribuições.';
$string['statechanged'] = 'Estado alterado';
$string['trackcompletion'] = 'Exigir a apresentação de uma escolha para completar esta atividade?';
$string['unallocated'] = 'Não atribuído';
