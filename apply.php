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
 * Strings for component 'apply', language 'pt_br', branch 'MOODLE_28_STABLE'
 *
 * @package   apply
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept_entry'] = 'aceitar';
$string['acked_accept'] = 'Aceitar';
$string['acked_notyet'] = 'Ainda não';
$string['acked_reject'] = 'Rejeitar';
$string['add_item'] = 'Adicionar item de entrada para a atividade';
$string['add_items'] = 'Adicionar itens de entrada à atividade';
$string['add_pagebreak'] = 'Adicionar uma quebra de página';
$string['adjustment'] = 'Ajuste';
$string['apply:addinstance'] = 'Adicionar uma nova solicitação';
$string['apply:applies'] = 'emitir uma solicitação';
$string['apply:createprivatetemplate'] = 'Criar modelo privado';
$string['apply:createpublictemplate'] = 'Criar modelo público';
$string['apply:deletesubmissions'] = 'Excluir submissões';
$string['apply:deletetemplate'] = 'Excluir modelo';
$string['apply:edititems'] = 'Editar Itens';
$string['apply:edittemplates'] = 'Editar Modelos';
$string['apply_is_already_submitted'] = 'A aplicação já foi submetida';
$string['apply_is_closed'] = 'Período de inscrição está fechado';
$string['apply_is_disable'] = 'Você não pode usar esta solicitação';
$string['apply_is_not_open'] = 'A aplicação ainda não foi aberta';
$string['apply_is_not_ready'] = 'Solicitação ainda não está pronta. Por favor edite os itens primeiro.';
$string['apply:mapcourse'] = 'Mapa de cursos para solicitações globais';
$string['apply:operatesubmit'] = 'Operação de entrada';
$string['apply_options'] = 'Aplicar opções';
$string['apply:preview'] = 'Visualizar';
$string['apply:receivemail'] = 'Receber notificações por email';
$string['apply:submit'] = 'Enviar mudanças';
$string['apply:view'] = 'Ver a modificação';
$string['apply:viewanalysepage'] = 'Ver a página de análise após enviar';
$string['apply:viewentries'] = 'Lista de Inscritos';
$string['apply:viewreports'] = 'Exibir relatórios';
$string['average'] = 'Média';
$string['back_button'] = 'Voltar';
$string['before_apply'] = 'Antes de submeter';
$string['cancel_entry'] = 'Cancelar';
$string['cancel_entry_button'] = 'Cancelar';
$string['cancel_moving'] = 'Cancelar movimento';
$string['cannot_save_templ'] = 'sem permissão para salvar os modelos';
$string['captcha'] = 'Captcha';
$string['check'] = 'Caixa de seleção';
$string['checkbox'] = 'Caixas de seleção';
$string['class_cancel'] = 'Cancelar';
$string['class_draft'] = 'Rascunho';
$string['class_newpost'] = 'Nova postagem';
$string['class_update'] = 'Atualizar';
$string['confirm_cancel_entry'] = 'Você tem certeza que deseja cancelar esta modificação?';
$string['confirm_delete_entry'] = 'Você tem certeza que quer retirar essa modificação?';
$string['confirm_delete_item'] = 'Tem certeza de que deseja excluir este elemento?';
$string['confirm_delete_submit'] = 'Tem certeza de que deseja excluir este aplicativo?';
$string['confirm_delete_template'] = 'Você tem certeza que deseja deletar esse modelo?';
$string['confirm_rollback_entry'] = 'Você tem certeza que quer retirar essa modificação?';
$string['confirm_use_template'] = 'Você tem certeza que quer usar esse modelo?';
$string['count_of_nums'] = 'Contagem de números';
$string['creating_templates'] = 'Guarde estas perguntas como um novo modelo';
$string['delete_entry'] = 'Retirar';
$string['delete_entry_button'] = 'Retirar';
$string['delete_item'] = 'Eliminar o item';
$string['delete_submit'] = 'Excluir aplicativo';
$string['delete_template'] = 'Excluir modelo';
$string['delete_templates'] = 'Excluir modelo...';
$string['depending'] = 'Dependências';
$string['depending_help'] = 'É possível mostrar um item que depende diretamente do valor de outro. <br /> <strong>Como fazer:</strong> <br /><ul><li> Primeiro, crie o item que comandará a dependência, o item do qual outros itens irão depender. </li><li> Em seguida, adicione uma quebra de página. </li><li> Em seguida, adicione o item dependente do anteriormente criado. Escolha o item da lista denominada "Item da Dependência" e escreva o valor desejado na caixa de texto chamada "Valor de Dependência". </li></ul> <strong>A estrutura do item deve ser semelhante ao exemplo abaixo:</strong> <ol><li> Item Q: Você tem um carro? A: sim / não </li><li> Quebra de página </li><li> Item Q: Qual é a cor do seu carro? <br /> (Este item depende diretamente da resposta do anterior, com valor = sim) </li><li> Item Q: Por que você não tem carro? <br /> (Este item também depende diretamente da resposta da primeira pergunta, porém com valor = não) </li><li> ... e assim por diante</li></ol>';
$string['dependitem'] = 'Item de Dependência';
$string['dependvalue'] = 'Valor da Dependência';
$string['description'] = 'Descrição';
$string['display_button'] = 'Exibir';
$string['do_not_analyse_empty_submits'] = 'Não analisar envios vazios.';
$string['dropdown'] = 'Lista suspensa';
$string['edit_entry'] = 'Editar';
$string['edit_entry_button'] = 'Editar';
$string['edit_item'] = 'Editar pergunta';
$string['edit_items'] = 'Editar Itens';
$string['email_confirm_html'] = ': <i>\'{$a->apply}\'</i><br /><br /> Você pode ver <a href="{$a->url}">aqui</a>.';
$string['email_confirm_text'] = ': \'{$a->apply}\'

Você pode vê-lo aqui:
{$a->url}';
$string['email_entry'] = 'Enviar e-mail ao requerente';
$string['email_notification'] = 'Enviar notificações por e-mail';
$string['email_notification_help'] = 'Se ativado, os administradores recebem uma notificação por e-mail sobre submissões aplicadas.';
$string['email_notification_user'] = 'enviar notificações por e-mail aos candidatos';
$string['email_notification_user_help'] = 'Se ativado, o administrador pode enviar e-mail de aplicação de processos aos candidatos.';
$string['email_teacher'] = '{$a->username} Enviou atividade aplicar';
$string['email_user_accept'] = 'Seu pedido foi aceito';
$string['email_user_done'] = 'O processamento de sua aplicação já foi completado';
$string['email_user_other'] = 'O administrador processou sua aplicação';
$string['email_user_reject'] = 'Sua aplicação foi rejeitada';
$string['enable_deletemode'] = 'Modo de Excluir';
$string['enable_deletemode_help'] = 'Isso permite que um professor possa excluir todos os aplicativos. <br /> Normalmente, defina como "Não" por segurança.';
$string['entries_list_title'] = 'Lista de inscritos';
$string['entry_saved'] = 'Sua aplicação foi salva. Obrigado.';
$string['entry_saved_draft'] = 'Sua solicitação foi salva como <strong>rascunho.</strong>';
$string['entry_saved_operation'] = 'O seu pedido foi processado.';
$string['execd_done'] = 'Pronto';
$string['execd_entry'] = 'pronto';
$string['execd_notyet'] = 'Ainda Não';
$string['exist'] = 'Existir';
$string['export_templates'] = 'Exportar Modelos';
$string['hide_no_select_option'] = 'Esconder a opção "Não selecionado"';
$string['horizontal'] = 'horizontal';
$string['import_templates'] = 'Importar modelos';
$string['info'] = 'Informações';
$string['infotype'] = 'Tipo-Informação';
$string['item_label'] = 'Etiqueta';
$string['item_label_help'] = 'Etiquetas Especiais <br /><ul><li> <strong>submit_title</strong> <ul><li> Quando este código é anexado ao campo de texto (texto curto), ele é tratado como título do aplicativo. </li></ul></li><li> <strong>submit_only</strong> <ul><li> Este é um item apresentado apenas no momento da aplicação. Isto é usado para uso consentido, etc. </li></ul></li><li> <strong>admin_reply</strong> <ul><li> Apesar de não ser exibido em um usuário no momento do aplicativo, ele é exibido após a aplicação. Uma vez que o administrador pode editar. Isto é usado para o comentário de um administrador, etc </li></ul></li><li> <strong>admin_only</strong> <ul><li> Este é um item que pode ser exibido para apenas um administrador e pode ser editado somente por um administrador. É usado para o memorando de um administrador, etc. </li></ul></li></ul>';
$string['item_name'] = 'Pergunta';
$string['items_are_required'] = 'As respostas são obrigatórias para itens com estrela.';
$string['label'] = 'Etiqueta';
$string['maximal'] = 'máxima';
$string['modulename'] = 'Aplicação formulário';
$string['modulename_help'] = 'Você pode criar formulários de aplicação simples e fazer um usuário enviá-lo.';
$string['modulenameplural'] = 'Aplicação Formulários';
$string['movedown_item'] = 'Mova esta pergunta para baixo';
$string['move_here'] = 'Mova aqui';
$string['move_item'] = 'Mova esta pergunta';
$string['moveup_item'] = 'Mova esta questão para cima';
$string['multichoice'] = 'Múltipla Escolha';
$string['multichoicerated'] = 'Múltipla escolha (nominal)';
$string['multichoicetype'] = 'Tipo múltipla escolha';
$string['multichoice_values'] = 'Valores de múltipla escolha';
$string['multiple_submit'] = 'Submissões múltiplas';
$string['multiple_submit_help'] = 'Se habilitado para pesquisas anônimas, os usuários podem enviar um número ilimitado de vezes.';
$string['name'] = 'Nome';
$string['name_required'] = 'Nome é obrigatório';
$string['next_page_button'] = 'Próxima página';
$string['no_itemlabel'] = 'Nenhum rótulo';
$string['no_itemname'] = 'Nenhum nome de item';
$string['no_items_available_yet'] = 'Nenhum pergunta foi criada ainda';
$string['no_settings_captcha'] = 'Definição de CAPTCHA não pode ser editado.';
$string['no_submit_data'] = 'Dado de entrada especificado não existe';
$string['no_templates_available_yet'] = 'Não há modelos disponíveis ainda';
$string['not_exist'] = 'não existe';
$string['no_title'] = 'Nenhum Título';
$string['not_selected'] = 'não selecionado';
$string['numeric'] = 'Resposta numérica';
$string['numeric_range_from'] = 'Faixa de';
$string['numeric_range_to'] = 'Faixa a';
$string['only_one_captcha_allowed'] = 'Apenas um CAPTCHA é permitido em uma aplicação';
$string['operate_is_disable'] = 'Você não pode usar esta operação';
$string['operate_submit'] = 'Operar';
$string['operate_submit_button'] = 'Processar';
$string['operation_error_execd'] = 'Quando você não aceitar a entrada, você não pode marcar &quot;feito&quot;';
$string['overview'] = 'Revisar e Enviar';
$string['pagebreak'] = 'Quebra de página';
$string['pluginadministration'] = 'Aplicar Administração';
$string['pluginname'] = 'Aplicação Formulário';
$string['position'] = 'Posição';
$string['preview'] = 'Visualização';
$string['preview_help'] = 'Na visualização, você pode alterar a ordem das perguntas.';
$string['previous_apply'] = 'Enviar anterior';
$string['previous_page_button'] = 'Página anterior';
$string['public'] = 'Público';
$string['radio'] = 'Botão Rádio';
$string['radiobutton'] = 'Botão Rádio';
$string['radiobutton_rated'] = 'Botão de rádio (Classificado)';
$string['radiorated'] = 'Botão de rádio (Classificado)';
$string['reject_entry'] = 'rejeitar';
$string['related_items_deleted'] = 'Todas as respostas do  seu usuário para essa pergunta também serão excluídos';
$string['required'] = 'Obrigatório';
$string['resetting_data'] = 'Redefinir aplicar respostas';
$string['responsetime'] = 'Tempo de respostas';
$string['returnto_course'] = 'Voltar';
$string['rollback_entry'] = 'Retirar';
$string['rollback_entry_button'] = 'Retirar';
$string['save_as_new_item'] = 'Salvar como nova pergunta';
$string['save_as_new_template'] = 'Salvar como novo modelo';
$string['save_draft_button'] = 'Salvar como rascunho';
$string['save_entry_button'] = 'Submeter a entrada';
$string['save_item'] = 'Salvar item';
$string['saving_failed'] = 'Falha ao salvar';
$string['saving_failed_because_missing_or_false_values'] = 'Falha ao salvar devido a falta ou erro nos valores.';
$string['separator_decimal'] = '.';
$string['separator_thousand'] = ',';
$string['show_all'] = 'Mostrar todos {$a}';
$string['show_perpage'] = 'Mostrar {$a} por página';
$string['start'] = 'Iniciar';
$string['started'] = 'iniciar';
$string['stop'] = 'Final';
$string['subject'] = 'Assunto';
$string['submit_form_button'] = 'Novo Aplicativo';
$string['submit_new_apply'] = 'Enviar um novo Aplicar';
$string['submit_num'] = 'Número submetido';
$string['submitted'] = 'enviado';
$string['switch_item_to_not_required'] = 'Mudar para: responder não é necessário';
$string['switch_item_to_required'] = 'Mudar para: resposta obrigatória';
$string['templates'] = 'Modelos';
$string['template_saved'] = 'Modelo salvo';
$string['textarea'] = 'Resposta longa';
$string['textarea_height'] = 'Número de linhas';
$string['textarea_width'] = 'Largura';
$string['textfield'] = 'Resposta breve';
$string['textfield_maxlength'] = 'Máximo de caracteres aceitos';
$string['textfield_size'] = 'Largura do campo de texto';
$string['time_close'] = 'Tempo para fechar';
$string['time_close_help'] = 'Você pode especificar momentos em que a inscrição é acessível para as pessoas respondem às aplicações. Se a opção não for assinalada, não há limite definido.';
$string['time_open'] = 'Tempo para abrir';
$string['time_open_help'] = 'Você pode especificar momentos em que a inscrição é acessível para as pessoas respondem às aplicações. Se a opção não for assinalada, não há limite definido.';
$string['title_ack'] = 'Receber';
$string['title_before'] = 'Antes de Enviar';
$string['title_check'] = 'Verificar';
$string['title_class'] = 'Estado';
$string['title_draft'] = 'Rascunho';
$string['title_exec'] = 'Exec.';
$string['title_title'] = 'Título';
$string['title_version'] = 'Versão.';
$string['update_entry'] = 'Atualizar';
$string['update_entry_button'] = 'Atualizar';
$string['update_item'] = 'Salvar alterações na questão';
$string['use_calendar'] = 'Use o Calendário';
$string['use_calendar_help'] = 'O prazo para apresentação de um aplicativo é registrado em um calendário.';
$string['use_item'] = 'usar {$a}';
$string['use_one_line_for_each_value'] = '<br /> Use uma linha para cada resposta!';
$string['username_manage'] = 'Gerenciamento de nome de usuário';
$string['username_manage_help'] = 'Você pode selecionar o padrão de exibição de nome deste módulo.';
$string['user_pic'] = 'Imagem';
$string['use_this_template'] = 'Utilize este modelo';
$string['using_templates'] = 'Use um modelo';
$string['vertical'] = 'vertical';
$string['view_entries'] = 'Exibir Entradas.';
$string['wiki_url'] = 'http://www.nsl.tuis.ac.jp/xoops/modules/xpwiki/?mod_apply%20%28E%29';
$string['yes_button'] = 'Sim';
