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
 * Strings for component 'tool_messageinbound', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nome da classe';
$string['component'] = 'Componente';
$string['configmessageinboundhost'] = 'O endereço do servidor que o Moodle deve verificar contra o e-mail. Para especificar uma porta não padrão, você pode usar o [servidor]: [porta], por exemplo formato mail.example.com:587. Se você deixar este campo em branco, o Moodle irá utilizar a porta padrão para o tipo de servidor de email que você especificar.';
$string['defaultexpiration'] = 'Período de validade do endereço padrão';
$string['defaultexpiration_help'] = 'Quando um endereço de e-mail é gerado pelo gerenciador, este endereço pode ser configurado para expirar automaticamente após um período de tempo, de forma que ele não poderá mais ser utilizado. É recomendável definir um período de validade.';
$string['description'] = 'Descrição';
$string['domain'] = 'Domínio de e-mail';
$string['edit'] = 'Editar';
$string['edithandler'] = 'Editar configurações para o gerenciador {$a}';
$string['editinghandler'] = 'Editando {$a}';
$string['enabled'] = 'Ativado';
$string['fixedenabled_help'] = 'Você não pode mudar o estado deste gerenciador. Isso pode ocorrer por que outros gerenciadores podem depender deste.';
$string['fixedvalidateaddress'] = 'Validar endereço de remetente';
$string['fixedvalidateaddress_help'] = 'Você não pode alterar a validação de endereços para esse gerenciador. Isso pode ocorrer porque o gerenciador requer uma configuração específica.';
$string['handlerdisabled'] = 'O gerenciador de e-mail que você tentou contata foi desabilitado. Não é possível processar mensagem neste momento.';
$string['incomingmailconfiguration'] = 'Configuração de entrada de e-mails';
$string['incomingmailserversettings'] = 'Configurações do servidor de entrada de e-mails';
$string['incomingmailserversettings_desc'] = 'O Moodle é capaz de se conectar a servidores IMAP devidamente configurados. Você pode especificar as configurações usadas para conectar ao seu servidor IMAP aqui.';
$string['invalidrecipientdescription'] = 'A mensagem "{$a->subject}" não pôde ser autenticada, pois ela foi enviada de um endereço de e-mail diferente daquele cadastrado em seu perfil de usuário. Para que a mensagem seja autenticada, você precisa responder a esta mensagem.';
$string['invalidrecipientdescriptionhtml'] = 'A mensagem "{$a->subject}" não pôde ser autenticada, desde que ela foi enviada de um endereço de e-mail diferente daquele vinculado ao seu perfil de usuário. Para que a mensagem seja autenticada, você precisa responder a esta mensagem.';
$string['invalidrecipientfinal'] = 'A mensagem "{$a->subject}" não pôde ser autenticada. Por favor, verifique se você está enviando a sua mensagem a partir do mesmo endereço de e-mail cadastrado no seu perfil.';
$string['invalid_recipient_handler'] = 'Se uma mensagem válida é recebida, mas o remetente não pode ser autenticado, a mensagem é armazenada no servidor de e-mail e o usuário é contactado através do endereço de e-mail no seu perfil de usuário. Ao usuário é dada a chance de responder para confirmar a autenticidade da mensagem original.

Este handler processa essas respostas.

Não é possível desabilitar a verificação de remetente deste handler porque o usuário pode responder a partir de um endereço de e-mail incorreto se sua configuração do cliente de e-mail está incorreta.';
$string['invalid_recipient_handler_name'] = 'destinatário handler inválido';
$string['mailbox'] = 'Nome da "mailbox"';
$string['mailboxconfiguration'] = 'Configuração da "mailbox"';
$string['mailboxdescription'] = '[Caixa de e-mail] + subaddress @ [domínio]';
$string['mailsettings'] = 'Configurações de e-mail';
$string['message_handlers'] = 'Mensagens dos handlers';
$string['messageinbound'] = 'Limite de mensagens';
$string['messageinboundenabled'] = 'Habilitar o processamento de entrada de e-mails';
$string['messageinboundenabled_desc'] = 'O processamento de entrada e-mails deve estar habilitado para que as mensagens sejam enviadas com as informações apropriadas.';
$string['messageinboundgeneralconfiguration'] = 'Configurações gerais';
$string['messageinboundgeneralconfiguration_desc'] = 'Processamento de entrada de mensagens permite que você receba e processe e-mails dentro do Moodle. Isto tem aplicações como o envio de respostas de fóruns por e-mail ou adicionar arquivos à área de arquivos privados de um usuário.';
$string['messageinboundhost'] = 'Entrada do Servidor de E-mails';
$string['messageinboundhostpass'] = 'Senha';
$string['messageinboundhostpass_desc'] = 'Esta é a senha que seu provedor de serviços forneceu para fazer login em sua conta de e-mail.';
$string['messageinboundhostssl'] = 'Usar SSL';
$string['messageinboundhostssl_desc'] = 'Alguns servidores de correio suportam um nível adicional de segurança, criptografando a comunicação entre o Moodle e seu servidor. Recomendamos usar essa criptografia SSL se o seu servidor suportar.';
$string['messageinboundhosttype'] = 'Tipo de servidor';
$string['messageinboundhostuser'] = 'Identificação de usuário';
$string['messageinboundhostuser_desc'] = 'Este é o nome de usuário que o provedor de serviços forneceu para fazer login em sua conta de e-mail.';
$string['messageinboundmailboxconfiguration_desc'] = 'Quando as mensagens são enviadas para fora, elas se encaixam no formato address+data@example.com. Para gerar de forma confiável endereços de e-mail no Moodle, por favor especifique o endereço que você usaria normalmente antes do sinal @ e o domínio após o sinal @ separadamente. Por exemplo, o nome da caixa de correio no exemplo seria "endereço", e o domínio de e-mail seria "example.com". Você deve usar uma conta de e-mail específica para esta finalidade.';
$string['messageprocessingerror'] = 'Você enviou recentemente um e-mail "{$a->subject}" mas, infelizmente, ele não pôde ser processado.

Os detalhes do erro são mostrados abaixo.

{$a->error}';
$string['messageprocessingerrorhtml'] = 'Você enviou recentemente um e-mail "{$a->subject}" mas, infelizmente, ele não pôde ser processado.

Os detalhes do erro são mostrados abaixo.

{$a->error}';
$string['messageprocessingfailed'] = 'O e-mail "{$a->subject}" não pôde ser processado. O erro é como se segue: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'O e-mail "{$a->subject}" não pôde ser processado. Contacte o seu administrador para obter mais informações.';
$string['messageprocessingsuccess'] = '{$a->plain}

Se você não deseja receber essas notificações no futuro, você pode editar suas preferências de mensagens pessoais, abrindo {$a->messagepreferencesurl} no seu navegador.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
Se você não deseja receber essas notificações no futuro, você pode <a href="{$a->messagepreferencesurl}"> editar suas preferências de mensagens pessoais</a> .';
$string['messageprovider:invalidrecipienthandler'] = 'Mensagem para confirmar que uma mensagem de entrada veio de você';
$string['messageprovider:messageprocessingerror'] = 'Aviso quando uma mensagem de entrada não pôde ser processada';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmação de que a mensagem foi processada com sucesso';
$string['name'] = 'Nome';
$string['noencryption'] = 'Off - Nenhuma criptografia';
$string['noexpiry'] = 'Sem validade';
$string['oldmessagenotfound'] = 'Você tentou autenticar manualmente uma mensagem, mas a mensagem não pôde ser encontrada. Isso pode ser porque ela já foi processada, ou porque a mensagem expirou.';
$string['oneday'] = 'Um dia';
$string['onehour'] = 'Uma hora';
$string['oneweek'] = 'Uma semana';
$string['oneyear'] = 'Um ano';
$string['pluginname'] = 'Configuração de entrada de mensagens';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Validar endereço do remetente';
$string['ssl'] = 'SSL (Auto-detectar versão SSL)';
$string['sslv2'] = 'SSLv2 (Forçar SSL versão 2)';
$string['sslv3'] = 'SSLv2 (Forcar SSL versão 3)';
$string['taskcleanup'] = 'Limpeza de e-mails recebidos não verificada';
$string['taskpickup'] = 'Captação de e-mails';
$string['tls'] = 'TLS (TLS; iniciado através de nível de protocolo de negociação sobre o canal não criptografado; RECOMENDADO maneira de iniciar a conexão segura)';
$string['tlsv1'] = 'TLSv1 (TLS conexão direta versão 1.x para servidor)';
$string['validateaddress'] = 'Validar endereço de e-mail do remetente';
$string['validateaddress_help'] = 'Quando uma mensagem é recebida de um usuário, o Moodle tenta validar a mensagem através da comparação do endereço de e-mail do remetente com o endereço de e-mail no seu perfil de usuário.

Se o remetente não corresponder, é enviada uma notificação ao usuário para confirmar que ele realmente enviou o e-mail.

Se essa configuração for desabilitada, então o endereço de e-mail do remetente não será verificado.';
