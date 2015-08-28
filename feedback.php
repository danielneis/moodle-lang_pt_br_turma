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
 * Strings for component 'feedback', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Adicionar pergunta a atividade';
$string['add_pagebreak'] = 'Adicionar uma quebra de página';
$string['adjustment'] = 'Ajuste';
$string['after_submit'] = 'Após submissão';
$string['allowfullanonymous'] = 'Permitir anônimo';
$string['analysis'] = 'Análise';
$string['anonymous'] = 'Anônimo';
$string['anonymous_edit'] = 'Gravar nomes de usuários';
$string['anonymous_entries'] = 'Entradas anônimas';
$string['anonymous_user'] = 'Usuário anônimo';
$string['append_new_items'] = 'Acrescentar novos itens';
$string['autonumbering'] = 'Números automáticos de questões';
$string['autonumbering_help'] = 'Habilita ou desabilita os números automáticos para cada questão';
$string['average'] = 'Média';
$string['bold'] = 'Negrito';
$string['cancel_moving'] = 'Cancelar movimento';
$string['cannotmapfeedback'] = 'Problema no banco de dados, incapaz de mapear o gabarito para a turma';
$string['cannotsavetempl'] = 'Não é permitido salvar modelos';
$string['cannotunmap'] = 'Problema da base de dados. Não é possível desmapear.';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha não está configurado';
$string['check'] = 'Múltipla escolha - múltiplas respostas';
$string['checkbox'] = 'Múltipla escolha - permite múltiplas respostas (check boxes)';
$string['check_values'] = 'Possíveis respostas';
$string['choosefile'] = 'Escolha um arquivo';
$string['chosen_feedback_response'] = 'Escolha a resposta';
$string['completed'] = 'terminado';
$string['completed_feedbacks'] = 'Respostas submetidas';
$string['complete_the_form'] = 'Responda as questões';
$string['completionsubmit'] = 'Ver como concluída se as respostas foram enviadas';
$string['configallowfullanonymous'] = 'Se definido como "sim", os usuários podem completar uma atividade comentários na primeira página, sem ser obrigada a efetuar login.';
$string['confirmdeleteentry'] = 'Você tem a certeza que deseja apagar esta entrada?';
$string['confirmdeleteitem'] = 'Você tem a certeza que deseja apagar este elemento?';
$string['confirmdeletetemplate'] = 'Você tem certeza que deseja excluir este template?';
$string['confirmusetemplate'] = 'Você tem certeza que deseja utilizar este template?';
$string['continue_the_form'] = 'Continue o formulário';
$string['count_of_nums'] = 'Contagem de números';
$string['courseid'] = 'ID da turma';
$string['creating_templates'] = 'Salvar estas perguntas em um novo template';
$string['delete_entry'] = 'Excluir entrada';
$string['delete_item'] = 'Excluir questão';
$string['delete_old_items'] = 'Excluir itens antigos';
$string['delete_template'] = 'Excluir template';
$string['delete_templates'] = 'Excluir template...';
$string['depending'] = 'Dependências';
$string['depending_help'] = 'Itens dependentes possibilitam mostrar itens que dependendem de valores de outros itens.<br />
<strong>Aque está um exemplo:</strong><br />
<ul>
<li>Inicialmente crie um item do qual outros itens dependem de um valor.</li>
<li>Na sequência, adicione uma nova página..</li>
<li>Na sequencia adicione o item dependente do valor apresentado no iem anterior.<br />
<li>Escolha \'Item dependente\' no formulário de criação de um item e indique o valor na caixa de texto.</li>
</ul>
<strong>A estrutura deve ser como a seguir:</strong>
<ol>
<li>Item pergunta: Você tem um carro? Resposta: sim/não</li>
<li>Quebra de páginak</li>
<li>Item pergunta: Qual é a cor de seu carro?<br />
(este item depende da resposta \'sim\' ao item 1)</li>
<li>Item perguna: Por que você não tem um carro?<br />
(este item depende da resposta \'não ao item 1)</li>
<li> ...outros itens</li>
</ol>';
$string['dependitem'] = 'Item dependente';
$string['dependvalue'] = 'Valor dependente';
$string['description'] = 'Descrição';
$string['do_not_analyse_empty_submits'] = 'Não analisar submissões vazias';
$string['dropdown'] = 'Múltipla escolha - resposta única (\'dropdown list\') ';
$string['dropdownlist'] = 'Múltipla escolha - resposta única (\'dropdown\') ';
$string['dropdownrated'] = 'Lista dropdown (rateada)';
$string['dropdown_values'] = 'Respostas';
$string['drop_feedback'] = 'Remover deste curso';
$string['edit_item'] = 'Editar questão';
$string['edit_items'] = 'Editar questões';
$string['email_notification'] = 'Habilitar notificações de submissões';
$string['email_notification_help'] = 'Se habilitado, os professores receberão uma notificação de submissões de feedback.';
$string['emailteachermail'] = '{$a->username} completou a atividade: \'{$a->feedback}\'

Você pode ver aqui:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} completou a atividade: <i>\'{$a->feedback}\'</i>.</p>
<p>A atividade está <a href="{$a->url}">disponível neste endereço</a>.</p>';
$string['entries_saved'] = 'Suas respostas foram gravadas. Obrigado';
$string['eventresponsedeleted'] = 'Resposta excluída';
$string['eventresponsesubmitted'] = 'Resposta enviada';
$string['export_questions'] = 'Exportar perguntas';
$string['export_to_excel'] = 'Exportar para o Excel';
$string['feedback:addinstance'] = 'Adicionar novo feedback';
$string['feedbackclose'] = 'Permitir respostas em';
$string['feedback:complete'] = 'Completar a pesquisa';
$string['feedbackcompleted'] = '{$a->username} concluiu {$a->feedbackname}';
$string['feedback:createprivatetemplate'] = 'Criar um modelo privado';
$string['feedback:createpublictemplate'] = 'Criar um modelo público';
$string['feedback:deletesubmissions'] = 'Apagar envios concluídos';
$string['feedback:deletetemplate'] = 'Excluir template';
$string['feedback:edititems'] = 'Editar itens';
$string['feedback_is_not_for_anonymous'] = 'A pesquisa não é para anônimos';
$string['feedback_is_not_open'] = 'A pesquisa não está aberta';
$string['feedback:mapcourse'] = 'Mapear cursos para pesquisas globais';
$string['feedbackopen'] = 'Permitir respostas de';
$string['feedback:receivemail'] = 'Receber um email de notificação';
$string['feedback:view'] = 'Ver uma pesquisa';
$string['feedback:viewanalysepage'] = 'Ver a página de análise após a submissão';
$string['feedback:viewreports'] = 'Ver relatórios';
$string['file'] = 'Arquivo';
$string['filter_by_course'] = 'Filtrar por curso';
$string['handling_error'] = 'Ocorreu erro na ação de processar o módulo de pesquisa';
$string['hide_no_select_option'] = 'Esconder a opção \'Não selecionado\'';
$string['horizontal'] = 'horizontal';
$string['importfromthisfile'] = 'Importar a partir do arquivo';
$string['import_questions'] = 'Importar questões';
$string['import_successfully'] = 'Importação bem sucedida';
$string['info'] = 'Informação';
$string['infotype'] = 'Tipo de informação';
$string['insufficient_responses'] = 'Respostas insuficientes';
$string['insufficient_responses_for_this_group'] = 'Há respostas insuficientes para este grupo';
$string['insufficient_responses_help'] = 'Há respostas insuficientes para este grupo.

Para manter a pesquisa anônima precisam-se, ao menos, duas respostas.';
$string['item_label'] = 'Rótulo';
$string['item_name'] = 'Questão';
$string['label'] = 'Rótulo';
$string['line_values'] = 'Avaliação';
$string['mapcourse'] = 'Mapear pesquisas para os cursos';
$string['mapcourse_help'] = 'Por padrão, os formulários de pesquisa criados em sua página inicial estão disponíveis em todo o site e estarão disponíveis em todos os cursos usando o bloco de comentários. Você pode forçar a disponibilização do formulário de pesquisa, tornando-a um bloco aderente ou limitar os cursos em que um formulário será exibido pelo mapeamento para cursos específicos.';
$string['mapcourseinfo'] = 'Esta é uma pesquisa no nível do site que está disponível para todos os cursos usando o bloco de comentários. No entanto,você pode mapear os cursos disponíveis para mapeá-los. Localize a turma e mapei-o para esta pesquisa.';
$string['mapcoursenone'] = 'Nenhum curso foi mapeado. A pesquisa estará disponível a todos os cursos.';
$string['mapcourses'] = 'Mapear pesquisa para os cursos';
$string['mapcourses_help'] = 'Após ter selecionado o(s) curso(s) relevante(s) para a pesquisa, você pode associá-lo(s) com usando este mapa de curso(s). Vários cursos podem ser selecionados mantendo pressionada a tecla Ctrl (ou Apple, no Mac) e clicando nos nomes dos cursos. Um curso pode ser dissociada de uma pesquisa a qualquer momento.';
$string['mappedcourses'] = 'Cursos mapeados';
$string['max_args_exceeded'] = 'Máximo 6 argumentos podem ser manipulados, muitos argumentos para';
$string['maximal'] = 'máximo';
$string['messageprovider:message'] = 'Lembrete de feedback';
$string['messageprovider:submission'] = 'Notificações de pesquisa';
$string['mode'] = 'Modo';
$string['modulename'] = 'Pesquisa';
$string['modulename_help'] = 'O módulo de atividade de feedback permite que um professor criar uma pesquisa personalizada para a recolha de feedback dos participantes usando uma variedade de tipos de questões, incluindo múltipla escolha, sim / não ou de entrada de texto.

Respostas de feedback pode ser anônimo, se desejar, e os resultados podem ser mostrados para todos os participantes ou restrita a apenas os professores. Todas as atividades de comentários na primeira página site também pode ser preenchido por usuários não-registrados.

Actividades de feedback pode ser usado

* Para avaliações da turma, contribuindo para melhorar o conteúdo para os participantes posteriores
* Para capacitar os participantes para se inscrever para módulos de cursos, eventos etc.
* Para levantamentos de hóspedes de opções de cursos, políticas escolares etc.
* Para inquéritos anti-bullying nas quais os alunos podem relatar incidentes de forma anônima';
$string['modulenameplural'] = 'Pesquisa';
$string['movedown_item'] = 'Mover a questão para baixo';
$string['move_here'] = 'Mover aqui';
$string['move_item'] = 'Mover esta questão';
$string['moveup_item'] = 'Mover esta questão para cima';
$string['multichoice'] = 'Múltipla escolha';
$string['multichoicerated'] = 'Múltiplas escolhas (rateadas)';
$string['multichoicetype'] = 'Tipos de múltipla escolha';
$string['multichoice_values'] = 'Valores de múltipla escolha';
$string['multiplesubmit'] = 'Habilitar múltiplas submissões';
$string['multiplesubmit_help'] = 'Se for possível a pesquisa para anônimos, os usuários poderão submetê-las ilimitadas vezes.';
$string['name'] = 'Nome';
$string['name_required'] = 'O nome é exigido';
$string['next_page'] = 'Próxima página';
$string['no_handler'] = 'Nenhuma ação de manipulação para';
$string['no_itemlabel'] = 'Sem rótulo';
$string['no_itemname'] = 'Sem nome do item';
$string['no_items_available_yet'] = 'Nenhuma pergunta foi ainda configurada';
$string['non_anonymous'] = 'O nome do usuário será registrado e mostrado com as respostas';
$string['non_anonymous_entries'] = 'entradas não anônimas';
$string['non_respondents_students'] = 'estudantes não respondentes';
$string['notavailable'] = 'esta pesquisa não está disponível';
$string['not_completed_yet'] = 'Ainda não foi concluído(a)';
$string['no_templates_available_yet'] = 'Nenhum modelo já está disponível';
$string['not_selected'] = 'Não selecionado';
$string['not_started'] = 'não iniciado';
$string['numeric'] = 'Resposta numérica';
$string['numeric_range_from'] = 'Valor de';
$string['numeric_range_to'] = 'Valor até';
$string['of'] = 'de';
$string['oldvaluespreserved'] = 'Todas as perguntas antigas e valores atribuídos serão preservados ';
$string['oldvalueswillbedeleted'] = 'As questões atuais e todas as respectivas respostas do usuário serão excluídas
';
$string['only_one_captcha_allowed'] = 'Apenas um \'captcha\' é permitido em uma pesquisa';
$string['overview'] = 'Visão geral';
$string['page'] = 'Página';
$string['page_after_submit'] = 'Mensagem de conclusão';
$string['pagebreak'] = 'Quebra de página';
$string['page-mod-feedback-x'] = 'Qualquer página de modulo de feedback';
$string['parameters_missing'] = 'Parâmetros em falta';
$string['picture'] = 'Figura';
$string['picture_file_list'] = 'Lista de figuras';
$string['picture_values'] = 'Escolha uma ou mais<br />figuras na lista de arquivos:';
$string['pluginadministration'] = 'Administração da pesquisa';
$string['pluginname'] = 'Pesquisa';
$string['position'] = 'Posição';
$string['preview'] = 'Previsão';
$string['preview_help'] = 'Na previsão você pode alterar a ordem das perguntas.';
$string['previous_page'] = 'Página anterior';
$string['public'] = 'Público';
$string['question'] = 'Questão';
$string['questionandsubmission'] = 'Configurações de perguntas e apresentação';
$string['questions'] = 'Questões';
$string['radio'] = 'Múltipla escolha - resposta única';
$string['radiobutton'] = 'Múltipla escolha - resposta única (botões rádio)';
$string['radiobutton_rated'] = 'Radiobutton (nominal)';
$string['radiorated'] = 'Botão rádio (rateado)';
$string['radio_values'] = 'Respostas';
$string['ready_feedbacks'] = 'Feedbacks prontos';
$string['relateditemsdeleted'] = 'Todos as respostas de seus usuários para esta pergunta também serão apagadas.';
$string['required'] = 'Exigido';
$string['resetting_data'] = 'Reset das respostas da pesquisa';
$string['resetting_feedbacks'] = 'Reconfigurando pesquisas';
$string['response_nr'] = 'Resposta numérica';
$string['responses'] = 'Respostas';
$string['responsetime'] = 'Tempo de resposta';
$string['save_as_new_item'] = 'Salvar como nova questão';
$string['save_as_new_template'] = 'Salvar como novo template';
$string['save_entries'] = 'Submeter as suas respostas';
$string['save_item'] = 'Salvar questão';
$string['saving_failed'] = 'Falha ao salvar';
$string['saving_failed_because_missing_or_false_values'] = 'Falha ao tentar salvar devido a valores não informados ou incorretos';
$string['search_course'] = 'Buscar curso';
$string['searchcourses'] = 'Buscar cursos';
$string['searchcourses_help'] = 'Procure pelo(s) código(s) ou nome(s) do(s) curso(s) que você deseja associar a esta pesquisa.
';
$string['selected_dump'] = 'Os índices selecionados da variável $SESSION estão mostrados abaixo:';
$string['send'] = 'enviar';
$string['send_message'] = 'enviar mansagem';
$string['separator_decimal'] = ',';
$string['separator_thousand'] = '.';
$string['show_all'] = 'Mostrar tudo';
$string['show_analysepage_after_submit'] = 'Mostrar a página de análise';
$string['show_entries'] = 'Mostrar respostas';
$string['show_entry'] = 'Mostrar resposta';
$string['show_nonrespondents'] = 'Mostrar não respondentes';
$string['site_after_submit'] = 'Site após submissão';
$string['sort_by_course'] = 'Ordenar por curso';
$string['start'] = 'Início';
$string['started'] = 'iniciado';
$string['stop'] = 'Fim';
$string['subject'] = 'Assunto';
$string['switch_group'] = 'Comutar grupo';
$string['switch_item_to_not_required'] = 'Comutar para: resposta não exigida';
$string['switch_item_to_required'] = 'Comutar para: resposta exigida';
$string['template'] = 'Modelo';
$string['templates'] = 'Modelos';
$string['template_saved'] = 'Modelo gravado';
$string['textarea'] = 'Resposta de texto longo';
$string['textarea_height'] = 'Número de linhas';
$string['textarea_width'] = 'Largura';
$string['textfield'] = 'resposta de texto curto';
$string['textfield_maxlength'] = 'Caracteres máximos aceitos';
$string['textfield_size'] = 'largura do campo de exto';
$string['there_are_no_settings_for_recaptcha'] = 'O \'captcha\' não foi configurado';
$string['this_feedback_is_already_submitted'] = 'Você já terminou esta atividade.';
$string['typemissing'] = 'valor \'tipo\' perdido';
$string['update_item'] = 'Gravar modificações da pergunta';
$string['url_for_continue'] = 'Link para a próxima atividade';
$string['url_for_continue_help'] = 'Após enviar o feedback, um botão de continuar é exibida, que liga à página da turma. Alternativamente, pode ligar para a próxima atividade, se o URL da atividade é adicionado aqui.';
$string['use_one_line_for_each_value'] = '<br/>Use uma linha para cada resposta!';
$string['use_this_template'] = 'Utilizar este template';
$string['using_templates'] = 'Utilizar um template';
$string['vertical'] = 'vertical';
$string['viewcompleted'] = 'pesquisas completas';
$string['viewcompleted_help'] = 'Você pode ver formulários de completo de pesquisa, pesquisáveis por curso e / ou por pergunta.
 As respostas podem ser exportadas para o Excel.';
