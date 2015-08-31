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
 * Strings for component 'lti', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceitar';
$string['accepted'] = 'Aceito';
$string['accept_grades'] = 'Aceitar notas da ferramenta';
$string['accept_grades_admin'] = 'Aceitar notas da ferramenta';
$string['accept_grades_admin_help'] = 'Especifique se o provedor de ferramenta pode adicionar, atualizar, ler e apagar notas associadas com casos deste tipo de ferramenta.

Alguns fornecedores de ferramenta de suporte relatando notas de volta ao Moodle baseado em ações realizadas dentro da ferramenta, criando uma experiência mais integrada.';
$string['accept_grades_help'] = 'Especifique se o provedor de ferramenta pode adicionar, atualizar, ler e apagar notas associadas apenas com essa instância ferramenta externa.

Alguns fornecedores de ferramenta de suporte relatando notas de volta ao Moodle baseado em ações realizadas dentro da ferramenta, criando uma experiência mais integrada.

Observe que essa configuração pode ser substituída na configuração da ferramenta.';
$string['action'] = 'Ação';
$string['active'] = 'Ativo';
$string['activity'] = 'Atividade';
$string['addnewapp'] = 'Habilitar aplicação externa';
$string['addserver'] = 'Adicionar novo servidor';
$string['addtype'] = 'Adicionar ferramenta de configuração externa';
$string['allow'] = 'Permitir';
$string['allowinstructorcustom'] = 'Permitir que professores adicionem parâmetros customizados';
$string['allowsetting'] = 'Permite ferramenta armazenar 8K de configurações no Moodle';
$string['always'] = 'Sempre';
$string['automatic'] = 'Automático, baseado na URL acessada';
$string['baseurl'] = 'URL Base';
$string['basiclti'] = 'LTI';
$string['basicltiactivities'] = 'Atividades LTI';
$string['basiclti_base_string'] = 'Base de strings LTI OAuth';
$string['basiclti_endpoint'] = 'Lançamento LTI Endpoint';
$string['basicltifieldset'] = 'Fieldset personalizado de exemplo';
$string['basiclti_in_new_window'] = 'Sua atividade foi aberta em uma nova janela';
$string['basicltiintro'] = 'Descrição da atividade';
$string['basicltiname'] = 'Nome da atividade';
$string['basiclti_parameters'] = 'Parâmetro LTI';
$string['basicltisettings'] = 'Configurações de ferramenta de interoperabilidade básica de aprendizagem';
$string['cancel'] = 'Cancelar';
$string['cancelled'] = 'Cancelado';
$string['cannot_delete'] = 'Você não pode excluir a configuração desta ferramenta.';
$string['cannot_edit'] = 'Você não deve editar a configuração desta ferramenta.';
$string['capabilities'] = 'Capacidades';
$string['capabilities_help'] = 'Selecione os recursos que você deseja oferecer ao provedor de ferramenta. Mais do que uma capacidade pode ser seleccionado.';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Clique aqui para continuar</a>';
$string['comment'] = 'Comentário';
$string['configpassword'] = 'Senha padrão - Ferramenta externa';
$string['configpreferheight'] = 'Altura';
$string['configpreferwidget'] = 'Conjunto de widgets como padrão de lançamento';
$string['configpreferwidth'] = 'Largura padrão preferida';
$string['configresourceurl'] = 'URL recurso padrão';
$string['configtoolurl'] = 'URL da ferramenta remota padrão';
$string['configtypes'] = 'Habilitar Aplicações LTI';
$string['configured'] = 'Configurado';
$string['courseid'] = 'Número id da turma';
$string['coursemisconf'] = 'Curso está desconfigurado';
$string['course_tool_types'] = 'Tipos de ferramentas de turma';
$string['createdon'] = 'Criada em';
$string['curllibrarymissing'] = 'Biblioteca PHP Curl deve estar instalada para utilizar LTI';
$string['custom'] = 'Parâmetros customizados';
$string['custom_config'] = 'Usando configuração personalizada da ferramenta.';
$string['custom_help'] = 'Parâmetros personalizados são as configurações utilizadas pelo provedor da ferramenta. Por exemplo, um parâmetro personalizado pode ser usada para exibir um recurso específico a partir do fornecedor.

É seguro deixar este campo inalterado, a menos que orientado pelo provedor da ferramenta.';
$string['custominstr'] = 'Parâmetros customizados';
$string['debuglaunch'] = 'Opções de Debug';
$string['debuglaunchoff'] = 'Lançamento normal';
$string['debuglaunchon'] = 'Lançamento de debug';
$string['default'] = 'Padrão';
$string['default_launch_container'] = 'Lançador padrão';
$string['default_launch_container_help'] = 'O recipiente de lançamento afeta a exibição da ferramenta, quando iniciado a partir da turma. Alguns recipientes de lançamento podem fornecer mais espaço na tela para a ferramenta, e outros proporcionar uma sensação mais integrada com o ambiente Moodle.

Padrão - Use o recipiente de lançamento especificado pela configuração da ferramenta.

Incorporado - A ferramenta é exibida no interior da janela Moodle existente, de uma maneira semelhante à outra atividade.

Incorporada sem blocos - A ferramenta é exibida no interior da janela Moodle existente, com apenas os controlos de navegação no topo da página.

Nova janela - A ferramenta abre em uma nova janela, ocupando todo o espaço disponível. Dependendo do navegador, ela vai abrir em uma nova aba ou janela pop-up.';
$string['delegate'] = 'Delegar ao Professor';
$string['delete'] = 'Excluir';
$string['delete_confirmation'] = 'Tem certeza que quer apagar esta ferramenta de configuração externa?';
$string['deletetype'] = 'Apagar configuração de ferramenta externa';
$string['display_description'] = 'Exibir descrição da atividade quando lançado';
$string['display_description_help'] = 'Caso selecionado, a descrição da atividade (especificada acima) irá exibir o conteúdo do provedor da ferramenta.

A descrição será utilizada para providenciar instruções adicionais para inicializar a ferramenta, mas não é necessário.

A descrição nunca é exibida quando o container de inicialização da ferramenta está em uma nova janela';
$string['display_name'] = 'Exibir nome da atividade quando lançado';
$string['display_name_help'] = 'Se selecionado, o nome da atividade (especificado acima) irá exibir o conteúdo do provedor ferramenta.

É possível que o fornecedor de ferramenta também pode apresentar o título. Esta opção pode impedir o título da atividade seja exibida duas vezes.

O título nunca é exibido quando o recipiente de lançamento da ferramenta é em uma nova janela.';
$string['domain_mismatch'] = 'Domínio de URL de lançamento não corresponde à configuração da ferramenta.';
$string['donot'] = 'Não enviar';
$string['donotaccept'] = 'Não aceitar';
$string['donotallow'] = 'Não permitir';
$string['duplicateregurl'] = 'Esta URL de inscrição já está em uso';
$string['edittype'] = 'Editar configurações da ferramenta externa';
$string['embed'] = 'Embarcado';
$string['embed_no_blocks'] = 'Embarcado sem blocos';
$string['enableemailnotification'] = 'Enviar notificação por emails';
$string['enableemailnotification_help'] = 'Caso habilitado, estudantes irão receber notificações por email quando a ferramenta de submissão receber notas';
$string['errormisconfig'] = 'Ferramenta errada. Por favor, pergunte ao administrador do Moodle para corrigir a configuração da ferramenta.';
$string['existing_window'] = 'Janela existente';
$string['extensions'] = 'Serviço de extenção LTI';
$string['external_tool_type'] = 'Tipo de ferramenta externa';
$string['external_tool_type_help'] = 'O principal objetivo de uma ferramenta de configuração é criar um canal de comunicação segura entre Moodle eo provedor ferramenta.
Ele também fornece uma oportunidade para os padrões de configuração e criação de serviços adicionais fornecidos pela ferramenta.

*** Automática, com base na URL Lançamento ** - Esta definição deve ser usado em quase todos os casos. Moodle irá selecionar a configuração da ferramenta mais adequada
        com base na URL lançamento. Ferramentas configurados tanto por um administrador ou dentro desta turma será utilizado.
        Quando o URL lançamento está especificado, o Moodle irá fornecer feedback sobre se reconhece ou não. Se o Moodle não reconhece a URL de Lançamento,
        você pode precisar para entrar nos detalhes de configuração da ferramenta manualmente.
*** Um tipo de ferramenta específica ** - Ao selecionar um tipo de ferramenta específica, você pode forçar Moodle para usar essa configuração de ferramentas de comunicação com o
        provedor de ferramenta externa. Se o URL de lançamento não parecem pertencer ao fornecedor de ferramenta, aparecerá um aviso. Em alguns casos, não é necessário
        para introduzir um URL de lançamento na prestação de um tipo de ferramenta específica (se não o lançamento de um recurso especial no âmbito do provedor de ferramenta).
Configuração personalizada *** ** - Para configurar ferramenta de configuração personalizada em apenas um exemplo disso, mostrar as opções avançadas, e inserir a chave do consumidor e
        segredo compartilhado si mesmo. Se você não tem uma chave do consumidor e segredo compartilhado, você pode ser capaz de solicitá-los a partir do fornecedor de ferramenta.
        Nem todas as ferramentas necessitam de uma chave secreta do consumidor e partilhada, caso em que os campos podem ser deixados em branco.

 # # # Edição tipoFerramenta

Três ícones estão disponíveis após a lista externo ferramenta de texto dropdown:

 ***Adicionar ** - Criar um turma de configuração de ferramentas de nível. Todas as instâncias de ferramentas externas nesta turma podem usar a ferramenta de configuração.
 ***Editar ** - Escolha um tipo de turma ferramenta de nível no menu suspenso, clique neste ícone. Os pormenores da configuração da ferramenta pode ser editado.
 ***Excluir ** - Retire o selecionado tipo de turma ferramenta de nível.';
$string['external_tool_types'] = 'Tipos de ferramentas externas';
$string['failedtoconnect'] = 'O Moodle não foi capaz de se comunicar com o sitema "{$a}"';
$string['filter_basiclti_configlink'] = 'Configure seus sites preferidos e suas senhas';
$string['filter_basiclti_password'] = 'Senha é obrigatória';
$string['filterconfig'] = 'Administração LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Usar uma configuração existente para a instancia desconfigurada';
$string['fixnew'] = 'Nova configuração';
$string['fixnewconf'] = 'Definir uma nova configuração para a instância desconfigurada';
$string['fixold'] = 'Utilizar existente';
$string['forced_help'] = 'Esta configuração foi forçada em uma ferramenta de configuração de um turma ou ao nível do site. Você não pode modificar a partir da interface.';
$string['force_ssl'] = 'Forçar SSL';
$string['force_ssl_help'] = 'Selecionando esta opção é forçada a utilização de SSL para inicialização de ferramentas.

Em adição, todos as requisições via web services do provedor da ferramenta utilizarão SSL.

Caso utilizar esta opção, confirme que o site Moodle e o provedor SSL suportam SSL';
$string['generaltool'] = 'Ferramenta Geral';
$string['global_tool_types'] = 'Tipos globais de ferramentas';
$string['grading'] = 'Grau de Roteamento';
$string['icon_url'] = 'URL do ícone';
$string['icon_url_help'] = 'A URL do ícone permite ser modificado na listagem de turmas para esta atividade. Ao invés de usar o ícone LTI padrão, um ícone transmite o tipo de atividade que pode ser especificado';
$string['id'] = 'id';
$string['invalidid'] = 'LTI ID está incorreta';
$string['launch_in_moodle'] = 'Ferramenta de lançamento no moodle';
$string['launchinpopup'] = 'Lançamento do Container';
$string['launch_in_popup'] = 'Ferramenta de lançamento em pop-up';
$string['launchinpopup_help'] = 'O recipiente de lançamento afecta a exibição da ferramenta, quando iniciado a partir da turma. Alguns recipientes de lançamento fornecer mais espaço na tela para a ferramenta, e outros proporcionar uma sensação mais integrada com o environemnt Moodle. Padrão *** ** - Use o recipiente lançamento especificado pela configuração da ferramenta. Incorporar *** ** - A ferramenta é exibido no interior da janela Moodle existente, de uma maneira semelhante à maioria dos tipos outra actividade. Incorporar ***, sem blocos ** - A ferramenta é exibido no interior da janela Moodle existente, com apenas os controlos neavigation no topo da página. Nova janela *** ** - A ferramenta abre em uma nova janela, ocupando todo o espaço disponível. Dependendo do navegador, ele vai abrir em uma nova aba ou janela pop-up. É possível que navegadores irá impedir que a janela de novo a partir da abertura.';
$string['launchoptions'] = 'Opções de lançamento';
$string['launch_url'] = 'Lançamento de URL';
$string['launch_url_help'] = 'A URL de lançamento indica que o endereço web da ferramenta externa, e pode conter informações adicionais, tais como o recurso para mostrar.

Se você não sabe o que para entrar para a URL de Lançamento, por favor verifique com o fornecedor de ferramenta para obter mais informações. Se você tiver selecionado um tipo de ferramenta específica, você pode não precisar digitar uma URL de lançamento. Se a ligação ferramenta é usada apenas para lançar no sistema do fornecedor de ferramenta, e não ir para um recurso específico, este será provavelmente o caso.';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Adicionar configurações no nível da turma à ferramenta';
$string['lti:addinstance'] = 'Adicionar uma nova atividade LTI';
$string['lti_administration'] = 'Administração do LTI';
$string['lti_errormsg'] = 'A ferramenta retornou a mensagem de erro a seguir: "{$a}"';
$string['lti:grade'] = 'Avaliar atividades LTI';
$string['lti_launch_error'] = 'Ocorreu um erro ao lançar a ferramenta externa:';
$string['lti_launch_error_tool_request'] = '<p>Para enviar uma requisição para o administrador para completar a ferramenta de configuração, clique <a href="{$a->admin_request_url}" target="_top">aqui</a></p>';
$string['lti_launch_error_unsigned_help'] = '<p> Este erro pode ser um resultado de uma chave secreta consumidor ausente e partilhada para o prestador de ferramenta. </p><p> Se você tem uma chave secreta compartilhada do consumidor e, pode introduzi-lo ao editar a instância ferramenta externa (certifique-se opções avançadas são visíveis). <br /> Alternativamente, você pode criar um turma de nível configuração do provedor ferramenta <a href="{$a->course_tool_editor}">aqui</a> . </p>';
$string['lti:manage'] = 'Editar atividades LTI';
$string['lti:requesttooladd'] = 'Enviar uma ferramenta aos administradores para configuração';
$string['ltisettings'] = 'Configurações LTI';
$string['lti_tool_request_added'] = 'Solicitação de pedido para configuração da ferramenta enviado com sucesso. Você talvez precise contatar o administrador para completar a configuração da ferramenta';
$string['lti_tool_request_existing'] = 'A ferramenta de configuração para o domínio de ferramentas já foi apresentado.';
$string['ltiunknownserviceapicall'] = 'Chamada LTI de serviço desconhecido';
$string['lti:view'] = 'Ver atividades LTI';
$string['main_admin'] = 'Ajuda geral';
$string['main_admin_help'] = 'Ferramentas externas permitem que os usuários do Moodle para interagir sem interferências com recursos de aprendizagem hospedados remotamente. Através de um protocolo especial de lançamento, a ferramenta remota terá acesso a algumas informações gerais sobre o usuário de lançamento. Por exemplo, o nome da instituição, turma ID, ID de usuário e outras informações como nome do usuário ou endereço de correio electrónico. Tipos de ferramentas listados nesta página são separados em três cursos: *** atividade ** - Estes provedores de ferramentas têm sido aprovado e configurado por um administrador. Eles podem ser usados a partir de qualquer turma nessa instância Moodle. Se uma chave secreta compartilhada do consumidor e são inseridos, uma relação de confiança é estabelecida entre esta instância Moodle ea ferramenta de controle remoto, proporcionando um canal de comunicação seguro. Enquanto *** ** - Estes fornecedores de ferramenta veio através de um pacote de importação, mas não foi configurado por um administrador. Os professores podem ainda utilizar ferramentas desses fornecedores se eles têm uma chave secreta compartilhada e consumidor, ou se nenhum for necessário. Rejeitado *** ** - Estes fornecedores de ferramentas são marcados como aqueles que um administrador não tem a intenção de disponibilizar para a instância Moodle inteiro. Os professores podem ainda utilizar ferramentas desses fornecedores se eles têm uma chave secreta compartilhada e consumidor, ou se nenhum for necessário.';
$string['manage_tool_proxies'] = 'Gerenciar Ferramenta de Inscrições Externas';
$string['manage_tools'] = 'Gerenciar Tipos de ferramentas externas';
$string['miscellaneous'] = 'Miscelânea';
$string['misconfiguredtools'] = 'Instâncias de ferramentas não configuradas foram detectadas';
$string['missingparameterserror'] = 'Esta página não está configurada: "{$a}"';
$string['module_class_type'] = 'Tipo de módulo do Moodle';
$string['modulename'] = 'Ferramenta externa';
$string['modulename_help'] = 'O módulo de atividade externa ferramenta permite aos alunos interagir com os recursos de aprendizagem e atividades em outros sites. Por exemplo, uma ferramenta externa pode fornecer acesso a um tipo de atividade nova ou materiais de aprendizagem de uma editora. Para criar uma atividade ferramenta externa, um fornecedor de ferramenta que suporta a LTI (Learning Tools Interoperability) é necessária. Um professor pode criar uma atividade ferramenta externa ou fazer uso de uma ferramenta configurado pelo administrador do site. Atividades de ferramentas externas diferem de recursos URL em alguns aspectos: * As ferramentas externas são ie contexto conscientes de que têm acesso a informações sobre o usuário que iniciou a ferramenta, como a turma, instituição e nome * ferramentas externas suportam a leitura, atualização e exclusão de notas associado com a instância atividade * configurações de ferramentas externas criar uma relação de confiança entre seu site eo fornecedor de ferramenta, permitindo a comunicação segura entre eles.';
$string['modulenameplural'] = 'Ferramentas Externas';
$string['modulenamepluralformatted'] = 'Instâncias LTI';
$string['name'] = 'Nome';
$string['never'] = 'Nunca';
$string['new_window'] = 'Nova janela';
$string['noattempts'] = 'Nenhuma tentativa foi realizada nesta instância desta ferramenta';
$string['no_lti_configured'] = 'Não há ferramentas externas ativas configuradas';
$string['no_lti_pending'] = 'Não há ferramentas externas pendentes';
$string['no_lti_rejected'] = 'Não há ferramentas externas rejeitadas';
$string['noltis'] = 'Não há instâncias LTI';
$string['noprofileservice'] = 'Serviço de Perfil não encontrado';
$string['noservers'] = 'Nao foram encontrados servidores';
$string['no_tp_accepted'] = 'Não há inscrições aceitas de ferramentas externas.';
$string['no_tp_cancelled'] = 'Não há inscrições canceladas de ferramentas externas.';
$string['no_tp_configured'] = 'Não há inscrições registradas por ferramentas externas configuradas.';
$string['no_tp_pending'] = 'Não há inscrições pendentes de ferramentas externas.';
$string['no_tp_rejected'] = 'Não há inscrições rejeitadas de ferramentas externas.';
$string['notypes'] = 'No momento não existem ferramentas de configuração LTI no Moodle. Clique no link Install acima para adicionar alguns.';
$string['noviewusers'] = 'Não foram encontrados usuários com permissões para usar esta ferramenta';
$string['optionalsettings'] = 'Configurações opcionais';
$string['organization'] = 'Detalhes da organização';
$string['organizationdescr'] = 'Descrição da organização';
$string['organizationid'] = 'ID da organização';
$string['organizationid_help'] = 'Um identificador único para esta instância Moodle. Tipicamente, o nome DNS da organização é utilizado.

Caso este campo seja deixado em branco, o "host name" deste site Moodle será utilizado como valor padrão.';
$string['organizationurl'] = 'URL da organização';
$string['organizationurl_help'] = 'A URL base desta instância do Moodle.

Caso este campo tenha sido deixado em branco, um valor padrão será utilizado com base na configuração do site.';
$string['pagesize'] = 'Envios submetidos por página';
$string['parameter'] = 'Parâmetros da ferramenta';
$string['parameter_help'] = 'Parâmetros da ferramenta são configurações solicitadas a serem passadas pelo provedor de ferramenta no proxy ferramenta aceita.';
$string['password'] = 'Segredo compartilhado';
$string['password_admin'] = 'Segredo compartilhado';
$string['password_admin_help'] = 'O segredo compartilhado pode ser pensado como uma senha usada para autenticar o acesso à ferramenta. Deve ser fornecido juntamente com a chave do consumidor a partir do fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir um segredo compartilhado.';
$string['password_help'] = 'Para a pré-configurados ferramentas, não é necessário para inserir um segredo compartilhado aqui, como o segredo compartilhado será fornecido como parte do processo de configuração. Este campo deve ser preenchido se criar um link para um provedor de ferramenta que não já está configurado. Se o fornecedor de ferramenta deve ser usada mais de uma vez nesta turma, acrescentando uma ferramenta de configuração da turma é uma boa idéia. O segredo compartilhado pode ser pensado como uma senha usada para autenticar o acesso à ferramenta. Deve ser fornecido juntamente com a chave do consumidor a partir do fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir um segredo compartilhado.';
$string['pending'] = 'Pendente';
$string['pluginadministration'] = 'Administração LTI';
$string['pluginname'] = 'LTI';
$string['preferheight'] = 'Altura preferida';
$string['preferwidget'] = 'Widget de lançamento preferido';
$string['preferwidth'] = 'Largura preferida';
$string['press_to_submit'] = 'Pressione para iniciar esta atividade';
$string['privacy'] = 'Privacidade';
$string['quickgrade'] = 'Permitir avaliação rápida';
$string['quickgrade_help'] = 'Caso habilitado, múltiplas ferramentas podem associar notas em uma única página. Adicione notas e comentários e clique em "Salvar todos meus feedbacks"  para salvar todas as mudanças para aquela página.';
$string['redirect'] = 'Você será redirecionado em alguns segundos. Caso contrário, pressione o botão.';
$string['register'] = 'Cadastre-se';
$string['registertype'] = 'Configurar uma nova Ferramenta de registro externo';
$string['register_warning'] = 'A página de registro parece estar demorando para abrir. Se ela não aparecer, verifique se você digitou a URL correta nas definições de configuração.';
$string['registrationname'] = 'Nome do provedor de ferramentas';
$string['registrationname_help'] = 'Digite o nome do provedor de ferramenta que está sendo registrada.';
$string['registration_options'] = 'Opções de Inscrição';
$string['registrationurl'] = 'URL do registro';
$string['registrationurl_help'] = 'A URL de registro deve estar disponível a partir do fornecedor de ferramentas como o local para o qual os pedidos de registo devem ser enviados.';
$string['reject'] = 'Rejeitar';
$string['rejected'] = 'Rejeitado';
$string['resource'] = 'Recurso';
$string['resourcekey'] = 'Chave do consumidor';
$string['resourcekey_admin'] = 'Chave do consumidor';
$string['resourcekey_admin_help'] = 'A chave do consumidor pode ser pensado como um nome utilizado para autenticar o acesso à ferramenta. Ele pode ser usado pelo prestador de ferramenta para identificar exclusivamente o sítio Moodle a partir do qual os utilizadores lançar para a ferramenta. A chave consumidor deve ser fornecido pelo fornecedor de ferramenta. O método de obtenção de uma chave consumidor varia entre os prestadores de ferramenta. Pode ser um processo automatizado, ou pode requerer um diálogo com o fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir uma chave de recurso.';
$string['resourcekey_help'] = 'Para a pré-configurados ferramentas, não é necessário introduzir uma chave de recurso aqui, como a chave consumidor será fornecido como parte do processo de configuração. Este campo deve ser preenchido se criar um link para um provedor de ferramenta que não já está configurado. Se o fornecedor de ferramenta deve ser usada mais de uma vez nesta turma, acrescentando uma ferramenta de configuração da turma é uma boa idéia. A chave do consumidor pode ser pensado como um nome utilizado para autenticar o acesso à ferramenta. Ele pode ser usado pelo prestador de ferramenta para identificar exclusivamente o sítio Moodle a partir do qual os utilizadores lançar para a ferramenta. A chave consumidor deve ser fornecido pelo fornecedor de ferramenta. O método de obtenção de uma chave consumidor varia entre os prestadores de ferramenta. Pode ser um processo automatizado, ou pode requerer um diálogo com o fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir uma chave de recurso.';
$string['resourceurl'] = 'Recurso URL';
$string['return_to_course'] = 'Clique <a href="{$a->link}" target="_top">aqui</a> para retornar à turma';
$string['saveallfeedback'] = 'Salvar todos os meus feedbacks';
$string['secure_icon_url'] = 'URL de ícone seguro';
$string['secure_icon_url_help'] = 'Similar ao URL do ícone, mas usada se o usuário acessar o Moodle de forma segura através de SSL. O principal objectivo para este campo é para impedir que o navegador alerta o usuário se a página subjacente foi acessado através de SSL, mas pedindo para mostrar uma imagem insegura.';
$string['secure_launch_url'] = 'URL de lançamento segura';
$string['secure_launch_url_help'] = 'Similar to Launch URL, mas usado em vez do url lançamento, se a segurança é necessária. Moodle usará o URL lançamento seguro em vez do URL do lançamento se o site Moodle é acessado através de SSL, ou se a ferramenta de configuração está definida para sempre lançar através de SSL. A URL de lançamento também pode ser configurado para um endereço https para forçar o lançamento através de SSL, e este campo pode ser deixado em branco.';
$string['send'] = 'Enviar';
$string['services'] = 'Serviços';
$string['services_help'] = 'Selecione os serviços que deseja oferecer ao provedor de ferramenta. Mais do que um serviço pode ser selecionado.';
$string['setupoptions'] = 'Opções de configuração';
$string['share_email'] = 'Compartilhar email da inicialização com ferramenta';
$string['share_email_admin'] = 'Compartilhar email de inicialização com ferramenta';
$string['share_email_admin_help'] = 'Especifique se o endereço de e-mail do usuário lançar a ferramenta será compartilhado com o fornecedor da ferramenta. O fornecedor de ferramenta pode precisar lançador de endereços de correio electrónico para distinguir usuários com o mesmo nome na interface do usuário, ou enviar e-mails aos usuários com base em ações dentro da ferramenta.';
$string['share_email_help'] = 'Especifique se o endereço de e-mail do usuário lançar a ferramenta será compartilhado com o fornecedor da ferramenta. O fornecedor de ferramenta pode precisar lançador de endereços de correio electrónico para distinguir usuários com o mesmo nome, ou enviar e-mails aos usuários com base em ações dentro da ferramenta. Observe que essa configuração pode ser substituído na configuração da ferramenta.';
$string['share_name'] = 'Compartilhar nome de inicialização com a ferramenta';
$string['share_name_admin'] = 'Compartilhar nome de inicialização com ferramenta';
$string['share_name_admin_help'] = 'Especifique se o nome completo do usuário lançar a ferramenta deve ser compartilhado com o fornecedor da ferramenta. O fornecedor de ferramenta pode precisar nomes dos lançadores para mostrar informação relevante dentro da ferramenta.';
$string['share_name_help'] = 'Especifique se o nome completo do usuário lançar a ferramenta deve ser compartilhado com o fornecedor da ferramenta. O fornecedor de ferramenta pode precisar nomes dos lançadores para mostrar informação relevante dentro da ferramenta. Observe que essa configuração pode ser substituído na configuração da ferramenta.';
$string['share_roster'] = 'Permitir a ferramenta acesso a lista de turmas';
$string['share_roster_admin'] = 'Ferramenta pode acessar lista de turmas';
$string['share_roster_admin_help'] = 'Especificar se a ferramenta pode acessar a lista de usuários inscritos em turmas a partir do qual o tipo de ferramenta é inicializado';
$string['share_roster_help'] = 'Especifica caso uma ferramentapossa acessara lista de usuários inscritos nesta turma.

Note que esta configuração pode ser sobreescrita na ferramenta de configuração.';
$string['show_in_course'] = 'Exibir tipo de ferramenta quando criando instâncias';
$string['show_in_course_help'] = 'Se selecionada, esta ferramenta de configuração irá aparecer no &quot;tipo de ferramenta externa&quot; suspensa quando os professores configurar as ferramentas externas dentro das turmas. Na maioria dos casos, essa opção não precisa ser selecionado. Os professores podem utilizar esta ferramenta de configuração baseada na URL lançamento correspondente a URL base da ferramenta, que é o método preferido. O único caso em que esta opção deve ser selecionada é se a ferramenta de configuração é apenas destinado para uma única assinatura. Por exemplo, se todos os lançamentos para o provedor de ferramenta apenas levar o usuário para uma página de destino, em vez de a um recurso específico.';
$string['size'] = 'Parâmetros de tamanho';
$string['submission'] = 'Envio';
$string['submissions'] = 'Envios';
$string['submissionsfor'] = 'Envios para {$a}';
$string['subplugintype_ltiresource'] = 'Recurso de serviço LTI';
$string['subplugintype_ltiresource_plural'] = 'Recursos de serviços LTI';
$string['subplugintype_ltiservice'] = 'Serviço LTI';
$string['subplugintype_ltiservice_plural'] = 'Serviços LTI';
$string['subplugintype_ltisource'] = 'Fonte LTI';
$string['subplugintype_ltisource_plural'] = 'Fontes LTI';
$string['toggle_debug_data'] = 'Inicialize dados para debugar';
$string['tool_config_not_found'] = 'Configuração da ferramenta não encontrada para esta URL';
$string['toolproxy'] = 'Ferramenta de inscrições externas';
$string['toolproxy_help'] = 'Inscrições ferramenta externa permitir Moodle administradores do site para configurar ferramentas externas a partir de um proxy ferramenta obtido de um fornecedor de ferramentas de apoio LTI 2.0. A URL de inscrição fornecido pelo provedor de ferramenta é tudo o que é necessário para iniciar o processo. Os recursos e serviços oferecidos ao provedor ferramenta estiver selecionada quando a configuração de um novo registo. Inscrições Ferramenta listados nesta página são separadas em quatro cursos: * ** Configurado ** - Esses registros ferramentas foram criadas, mas o processo de registro ainda não foi iniciado. * Pendente ** ** - O processo regisitration para esses registros ferramenta foi iniciada, mas não foi concluída. Abrir e salvar as configurações para movê-lo de volta para o curso \'configurado\'. * ** Aceito ** - Esses registros ferramentas foram aprovados; os recursos especificados no proxy ferramenta aparecerá na página de tipos de ferramenta externa com um estado inicial de &quot;pendentes&quot;. * ** Rejeitado ** - Esses registros ferramentas são aquelas que foram rejeitadas durante o processo de registro. Abrir e salvar as configurações para movê-lo de volta para a categoria \'configurado\' para que o processo de registro cna ser reiniciado.';
$string['toolproxyregistration'] = 'Ferramenta de registro externo';
$string['toolregistration'] = 'Ferramenta de registro externo';
$string['tool_settings'] = 'Configurações da ferramenta';
$string['toolsetup'] = 'Configuração da ferramenta externa';
$string['toolurl'] = 'URL base da ferramenta';
$string['toolurl_help'] = 'A URL base da ferramenta é usada para combinar com URLs lançamento ferramenta para a configuração correta da ferramenta. Prefxing a URL com http (s) é opcional. Além disso, o URL de base é utilizada como o URL lançamento se um URL lançamento não é especificado no exemplo ferramenta externa. <table><thead><tr><td> <b>URL Base</b> </td><td> <b>Casa com padrões</b> </td></tr></thead><tbody><tr><td> tool.com </td><td> tool.com, tool.com / quizzes, tool.com / quizzes / quiz.php? id = 10, www.tool.com / quizzes </td></tr><tr><td> www.tool.com / quizzes </td><td> tool.com / quizzes, tool.com / quizzes / take.php? id = 10, www.tool.com / quizzes </td></tr><tr><td> quiz.tool.com </td><td> quiz.tool.com, quiz.tool.com / take.php? ID = 10 </td></tr></tbody></table> Se duas configurações diferentes de ferramentas são válidos para o mesmo domínio, a correspondência mais específica será usado.';
$string['typename'] = 'Nome da ferramenta';
$string['typename_help'] = 'O nome da ferramenta é utilizado pelo provedor da ferramenta através do moodle. O nome inserido será visível a professores quando adicionadas ferramentas externas nas turmas.';
$string['types'] = 'Tipos';
$string['update'] = 'Atualização';
$string['using_tool_configuration'] = 'Configurações da ferramenta:';
$string['validurl'] = 'Um aURL válida deve iniciar com http(s)://';
$string['viewsubmissions'] = 'Ver envios e tela de notas';
