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
 * Strings for component 'ratingallocate', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   ratingallocate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['algorithm_already_running'] = 'Outra instância do algoritmo de alocação já está em execução. Por favor, aguarde alguns minutos e atualize a página.';
$string['algorithmtimeout'] = 'Tempo limite do algoritmo';
$string['allocation_manual_explain_all'] = 'Selecione uma opção a ser atribuída a um usuário.';
$string['allocation_manual_explain_only_raters'] = 'Selecione uma opção a ser atribuída a um usuário. Somente os usuários que selecionaram pelo menos uma opção são listados.';
$string['allocation_notification_message'] = 'No que se refere a "{$a->ratingallocate}", você foi atribuído a escolha "{$a->choice}".';
$string['allocation_notification_message_subject'] = 'Notificação da alocação concluída para {$a}';
$string['allocation_statistics'] = 'Estatísticas de alocação';
$string['allocation_statistics_description'] = 'Esta tabela dá uma impressão da satisfação geral da alocação. Ela está contando as atribuições de acordo com a classificação do usuário que teve uma opção específica. Nesta caso {$a->users} fora de {$a->total} usuários tem uma escolha que eles classificaram com "{$a->rating}".
Para {$a->unassigned} usuários sem escolha ainda foram alocados.';
$string['at_least_one_rateable_choices_needed'] = 'Você precisa de pelo menos uma escolha calculável.';
$string['choice_active'] = 'Opção está ativa';
$string['choice_active_help'] = 'Somente opções ativas são exibidas ao usuário. Escolhas inativas não são exibidas.';
$string['choice_explanation'] = 'Descrição (opcional)';
$string['choice_maxsize'] = 'Número máximo de participantes';
$string['choice_maxsize_display'] = 'Número máximo de estudantes';
$string['choicestatusheading'] = 'Status';
$string['choice_title'] = 'Título';
$string['choice_title_help'] = 'Título da escolha. *Atenção* todas as escolhas ativas serão exibidas enquanto ordenada pelo título.';
$string['configalgorithmtimeout'] = 'O tempo em segundos após o qual cada algoritmo é considerado para ser preso. O prazo atual é terminado e marcado como falha.';
$string['confirm_start_distribution'] = 'A execução do algoritmo irá excluir todas as atribuições existentes, se houver. Tem certeza de que deseja continuar?';
$string['create_moodle_groups'] = 'Criar grupos para alocação';
$string['crontask'] = 'Alocação automática pela classificação';
$string['deletechoice'] = 'Excluir escolha';
$string['distribution_algorithm'] = 'Algoritmo de distribuição';
$string['distribution_published'] = 'Alocação foi publicada.';
$string['distribution_saved'] = 'Distribuição salva (em {$a}s).';
$string['distribution_table'] = 'Tabela de distribuição';
$string['download_problem_mps_format'] = 'Download de Equação (mps/txt)';
$string['download_votetest_allocation'] = 'Download da avaliação e alocação (csv)';
$string['edit_choice'] = 'Editar escolha "{$a}"';
$string['edit_rating'] = 'Editar classificação';
$string['err_maximum'] = 'O valor máximo para este campo é {$a}.';
$string['err_minimum'] = 'O valor mínimo para este campo é {$a}.';
$string['err_required'] = 'Você precisa fornecer um valor para este campo.';
$string['export_options'] = 'Opções de exportação';
$string['groupingname'] = 'Criado da classificação "{$a}"';
$string['invalid_dates'] = 'Datas são inválidas. Data de início deve ser anterior a data de término.';
$string['invalid_publishdate'] = 'Data de publicação é inválida. Data de publicação deve ser anterior ao término da classificação.';
$string['last_algorithm_run_date'] = 'Último algoritmo executado em';
$string['last_algorithm_run_date_none'] = '-';
$string['last_algorithm_run_status'] = 'Status da última execução';
$string['last_algorithm_run_status_0'] = 'Não iniciado';
$string['last_algorithm_run_status_1'] = 'Em execução';
$string['last_algorithm_run_status_-1'] = 'Falhou';
$string['last_algorithm_run_status_2'] = 'Bem sucedido';
$string['log_allocation_published'] = 'Alocação publicada';
$string['log_allocation_published_description'] = 'O usuário com id "{$a->userid}" publicou a alocação para a classificação com id "{$a->ratingallocateid}".';
$string['log_allocation_statistics_viewed'] = 'Estatísticas de alocação visualizada';
$string['log_allocation_statistics_viewed_description'] = 'O usuário com id "{$a->userid}" visualizou as estatísticas de alocação para a classificação com id "{$a->ratingallocateid}".';
$string['log_allocation_table_viewed'] = 'Tabela de alocação visualizada';
$string['log_allocation_table_viewed_description'] = 'O usuário com id "{$a->userid}" visualizou a tabela de alocação para a classificação com id "{$a->ratingallocateid}".';
$string['log_distribution_triggered'] = 'Distribuição desencadeada';
$string['log_distribution_triggered_description'] = 'O usuário com id "{$a->userid}" com distribuição desencadeada para a classificação com id "{$a->ratingallocateid}". O algoritmo necessita {$a->time_needed} seg.';
$string['log_manual_allocation_saved'] = 'Alocação manual salva';
$string['log_manual_allocation_saved_description'] = 'O usuário com id "{$a->userid}" salvou a alocação manul para a classificação com id "{$a->ratingallocateid}".';
$string['log_ratingallocate_viewed'] = 'Avaliação de alocação visualizada';
