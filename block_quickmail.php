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
 * Strings for component 'block_quickmail', language 'pt_br', branch 'MOODLE_28_STABLE'
 *
 * @package   block_quickmail
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['add_all'] = 'Adicionar todos';
$string['add_button'] = 'Adicionar';
$string['additional_emails'] = 'Adicionar e-mails';
$string['additional_emails_help'] = 'Outros endereços de e-mail que você gostaria de adicionar a uma mesma mensagem, devem ser separados por "vírgula" ou "ponto e vírgula". Exemplo: email1@exemplo.com.br,email2@exemplo.com.br ou email1@exemplo.com.br;email2@exemplo.com.br';
$string['allowstudents'] = 'Permitir que os estudantes usem o Correio Eletrônico';
$string['allowstudentsdesc'] = 'Permitir que os alunos usem o coreiro eletrônico. Se você escolher "NUNCA", o bloco não pode ser configurado para permitir que os alunos tenham acesso ao nível da turma.';
$string['all_sections'] = 'Todos os grupos';
$string['alternate'] = 'E-mails alternativos';
$string['alternate_body'] = '<p>
{$a->fullname} adicionou o endereço {$a->address} como um endereço alternativo para a turma {$a->course}.
</p>

<p>
O propósito deste e-mail é verificar se este endereço existe e se o dono
deste endereço possui as permissões apropriadas no Moodle.
</p>

<p>
Se vocẽ deseja completar o processo de verificação, por favor acesse o
link: {$a->url}.
</p>

<p>
Se a descrição deste e-mail não faz sentido para você, você pode tê-la recebido
por engano. Simplesmente ignore esta mensagem.
</p>

Obrigado.';
$string['alternate_from'] = 'Moodle: Correio Eletrônico';
$string['alternate_new'] = 'Adicionar endereço alternativo';
$string['alternate_subject'] = 'Validação de endereço de e-mail alternativo';
$string['approved'] = 'Aprovado';
$string['are_you_sure'] = 'Você tem certeza de que deseja apagar {$a->title}? Esta ação não pode ser revertida.';
$string['attachment'] = 'Anexo(s)';
$string['backup_history'] = 'Incluir histórico de mensagens';
$string['body'] = 'Mensagem';
$string['composenew'] = 'Escrever e-mail';
$string['config'] = 'Configuração';
$string['courseferpa'] = 'Respeitar a configuração de grupos';
$string['courselayout'] = 'Layout da turma';
$string['courselayout_desc'] = 'Utilizar o layout _Course_ quando desenhar as páginas do bloco Correio Eletrônico. Habilite esta configuração se você utiliza formulários de largura fixa.';
$string['default_flag'] = 'Padrão';
$string['delete_confirm'] = 'Você tem certeza que deseja apagar a mensagem com as seguintes informações: {$a}';
$string['delete_failed'] = 'Falha ao apagar o e-mail.';
$string['download_all'] = 'Baixar tudo';
$string['drafts'] = 'Rascunhos';
$string['draftssuccess'] = 'Rascunho';
$string['email'] = 'E-mail';
$string['email_error'] = 'Não é possível enviar e-mail: {$a->firstname} {$a->lastname} ({$a->email})';
$string['email_error_field'] = 'O campo {$a} é de preenchimento obrigatório.';
$string['entry_activated'] = 'O e-mail alternativo {$a->address} agora pode ser utilizado na turma {$a->course}.';
$string['entry_failure'] = 'Um e-mail não pode ser enviado para {$a->address}. Por favor, verifique se o endereço {$a->address} existe e tente novamente.';
$string['entry_key_not_valid'] = 'Seu link de ativação não é mais válido para {$a->address}. Continue para reenviar o link de ativação.';
$string['entry_saved'] = 'O endereço alternativo {$a->address} foi salvo.';
$string['entry_success'] = 'Um e-mail de validação de endereço foi enviado para {$a->address}. As intruções para a ativação do endereço estão descritas no corpo da mensagem enviada.';
$string['failed_to_send_to'] = 'falhou ao enviar para';
$string['ferpa'] = 'FERPA(Group) Mode';
$string['ferpa_desc'] = 'Permite ao sistema ajustar-se de acordo com as configurações de grupo da turma, ignorando as configurações de grupo mas separando os grupos ou ignorando os grupos completamente.';
$string['from'] = 'Para';
$string['history'] = 'Histórico';
$string['log'] = 'Ver histórico';
$string['logsuccess'] = 'todas as mensagens foram enviadas com sucesso!';
$string['message'] = 'Mensagem';
$string['message_body_as_follows'] = 'segue o corpo da mensagem';
$string['message_failure'] = 'alguns usuários não receberam a mensgem';
$string['messageprovider:broadcast'] = 'Enviar e-mail a todos usando o e-mail do administrador';
$string['message_sent_to'] = 'Mensagem enviada';
$string['moodle_attachments'] = 'Moodle Anexos ({$a})';
$string['no_alternates'] = 'Não foram encontrados e-mails alternativos para {$a->fullname}. Continue para adicionar um.';
$string['no_course'] = 'O curso com id {$a} é inválido.';
$string['no_drafts'] = 'Você não possui rascunhos de e-mails.';
$string['no_email'] = 'Não foi possível enviar e-mail para {$a->firstname} {$a->lastname}.';
$string['no_email_address'] = 'Não foi possível enviar e-mail para {$a}';
$string['noferpa'] = 'Não respeitar configuração de grupos';
$string['no_filter'] = 'Sem filtro';
$string['no_log'] = 'Você ainda não possui histórico de e-mails.';
$string['no_permission'] = 'Você não tem permissão para enviar e-mails utilizando o Correio Eletrônico.';
$string['noreply'] = 'Sem resposta';
$string['no_section'] = 'Sem grupo';
$string['no_selected'] = 'Você precisa selecionar algum usuário para encaminhar a mensagem.';
$string['no_subject'] = 'Você precisa adicionar um Assunto';
$string['not_valid'] = 'Este não é um tipo válido para visualização: {$a}';
$string['not_valid_action'] = 'Você precisa fornecer uma ação válida: {$a}';
$string['not_valid_typeid'] = 'Você precisa fornecer um e-mail válido para: {$a}';
$string['not_valid_user'] = 'Você não pode visualizar o histórico de e-mails de outros usuários.';
$string['no_type'] = '{$a} não é um tipo aceito para visualização. Por favor, utilize o aplicativo correto.';
$string['no_usergroups'] = 'Não há usuários no seu grupo capazes de receber e-mails.';
$string['no_users'] = 'Não há usuários para os quais você pode enviar e-mails.';
$string['overwrite_history'] = 'Sobrescrever histórico de mensagens';
$string['pluginname'] = 'Correio eletrônico';
$string['potential_sections'] = 'Potenciais Grupos';
$string['potential_users'] = 'Potenciais Destinatários';
$string['prepend_class'] = 'Adicionar nome da turma como prefixo';
$string['prepend_class_desc'] = 'Adicionar o nome curto da turma como prefixo no assunto do e-mail.';
$string['qm_contents'] = 'Baixar o conteúdo do arquivo';
$string['quickmail:addinstance'] = 'Adicionar um novo bloco Correio Eletrônico';
$string['quickmail:allowalternate'] = 'Permite aos usuários adicionar e-mails alternativos (externos à turma) no formulário de envio de e-mails.';
$string['quickmail:canconfig'] = 'Permite os usuários configurar a instância do Correio Eletrônico.';
$string['quickmail:candelete'] = 'Permite os usuários apagar o histórico de e-mails.';
$string['quickmail:canimpersonate'] = 'Permite acessar como outros usuários e visualizar o histórico.';
$string['quickmail:cansend'] = 'Permite os usuários encaminhar e-mails através do Correio Eletrônico';
$string['quickmail:myaddinstance'] = 'Adicionar um novo Correio Eletrônico à Minha página inicial';
$string['receipt'] = 'Receber uma cópia';
$string['receipt_help'] = 'Receber uma cópia do e-mail enviado';
$string['remove_all'] = 'Remover todos';
$string['remove_button'] = 'Remover';
$string['required'] = 'Por favor, preencha os campos obrigatórios.';
$string['reset'] = 'Restaurar padrão do sistema';
$string['restore_history'] = 'Restaurar histórico de mensagens';
$string['role_filter'] = 'Filtro por função';
$string['save_draft'] = 'Salvar rascunho';
$string['seconds'] = 'segundos';
$string['selected'] = 'Destinatários selecionados';
$string['select_groups'] = 'Selecionar Grupos...';
$string['select_roles'] = 'Funções filtradas por';
$string['select_users'] = 'Selecionar Usuários...';
$string['sendadmin'] = 'Enviar um e-mail do administrador';
$string['send_again'] = 'enviar novamente';
$string['send_email'] = 'Enviar e-mail';
$string['sent_success'] = 'todas as mensagens foram enviadas com sucesso';
$string['sent_successfully_to_the_following_users'] = 'enviado com sucesso para os seguintes usuários:';
$string['sig'] = '- Sem Assinaturas';
$string['signature'] = 'Assinatura';
$string['something_broke'] = 'Parece que o endereço de e-mail que você está enviando está desativado ou corrompido.';
$string['status'] = 'status';
$string['strictferpa'] = 'Sempre separar os grupos';
$string['subject'] = 'Assunto';
$string['sure'] = 'Você tem certeza de que deseja apagar {$a->address}? Esta ação não pode ser desfeita.';
$string['time_elapsed'] = 'Tempo decorrido:';
$string['title'] = 'Título';
$string['user'] = 'usuário';
$string['users'] = 'usuários';
$string['valid'] = 'Status de ativação';
$string['waiting'] = 'Aguardando';
$string['warnings'] = 'Advertências';
