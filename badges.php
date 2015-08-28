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
 * Strings for component 'badges', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['activate'] = 'Habilitar acesso';
$string['activatesuccess'] = 'Acesso aos emblemas foi habiltiado com sucesso.';
$string['addbadgecriteria'] = 'Adicionar critérios ao emblema';
$string['addcourse'] = 'Adicionar cursos';
$string['addcourse_help'] = 'Selecione todos os cursos que podem ser adicionados a essa requisição de badge. Mantenha pressioanda a tecla CTRL para selecionar vários itens.';
$string['addcriteria'] = 'Adicionar critérios';
$string['addcriteriatext'] = 'Para começar a adicionar critérios, por favor, selecione uma das opções a partir do menu drop-down.';
$string['addtobackpack'] = 'Adicionar à mochila';
$string['adminonly'] = 'Esta página é restrita a administradores do site.';
$string['after'] = 'após a data de emissão.';
$string['aggregationmethod'] = 'Método de agregação';
$string['all'] = 'Tudo';
$string['allmethod'] = 'Todas as condições selecionadas estão satisfeitas';
$string['allmethodactivity'] = 'Todas as atividades selecionadas estão completas';
$string['allmethodcourseset'] = 'Todos os cursos selecionados estão completos';
$string['allmethodmanual'] = 'Todos os papeis selecionados concedem o badge';
$string['allmethodprofile'] = 'Todos os campos do perfil selecionados foram preenchidos';
$string['allowcoursebadges'] = 'Ativar emblemas do curso';
$string['allowcoursebadges_desc'] = 'Permite que emblemas sejam criados e concedidos no contexto do curso';
$string['allowexternalbackpack'] = 'Permitir conexões com mochilas externas';
$string['allowexternalbackpack_desc'] = 'Permite a usuários configurar conexões e mostrar emblemas a partir de seus provedores de mochilas externos.

Nota: É recomendado deixar esta opção desabilitada se o site não pode ser acessado a partir da internet (ex. por conta de um firewall)';
$string['any'] = 'Qualquer';
$string['anymethod'] = 'Qualquer uma das condições está cumprida';
$string['anymethodactivity'] = 'Qualquer uma das atividades selecionadas estar concluída';
$string['anymethodcourseset'] = 'Qualquer um dos cursos selecionados estar concluído';
$string['anymethodmanual'] = 'Qualquer um dos papeis selecionados concedem o emblema';
$string['anymethodprofile'] = 'Qualquer um dos campos do perfil estar preenchido';
$string['archivebadge'] = 'Gostaria de apagar o emblema \'{$a}\' mas manter os emblemas emitidos existentes?';
$string['archiveconfirm'] = 'Excluir e manter os emblemas emitidos existentes';
$string['archivehelp'] = '<p> Esta opção significa que o emblema será marcado como "aposentado" e não será mais exibido na lista de emblemas. Os usuários não serão mais capazes de ganhar este emblema, porém os usuários que já receberam este emblema ainda poderão exibí-lo na sua página de perfil e enviá-lo para mochilas externas.</p><p>Se você gostaria que seus usuários mantivessem o acesso aos emblemas ganhos, é importante que você selecione esta opção ao invés de excluir completamente os emblemas.</p>';
$string['attachment'] = 'Anexar emblema à mensagem';
$string['attachment_help'] = 'Se habilitado, um arquivo do emblema emitido será anexado ao email do destinatário para download. (Anexos devem estar habilitados em Administração do site > Plugins > Saídas de mensagens > Email , para usar esta opção.)';
$string['award'] = 'Conceder emblema';
$string['awardedtoyou'] = 'Emitido para mim';
$string['awardoncron'] = 'Acesso aos emblemas foi habilitado com sucesso. Muitos usuários podem receber instantaneamente este emblema. Para garantir uma boa performance no site, esta ação levará algum tempo para ser processada.';
$string['awards'] = 'Destinatários';
$string['backpackavailability'] = 'Verificação de emblema externo';
$string['backpackavailability_help'] = 'Para os beneficiários do emblema serem capazes de provar que eles ganharam seus emblemas de você, um serviço de mochila externo deve ser capaz de acessar o seu site e verificar emblemas emitidos a partir dele. Seu site atualmente não parece ser acessível, o que significa que emblemas que você já emitiu ou vai emitir no futuro não poderão ser verificados.

**Por que estou vendo esta mensagem?**

Pode ser que seu firewall impede o acesso de usuários fora da rede, o site é protegido por senha, ou se você estiver executando o site em um computador que não está disponível na Internet (tais como uma máquina de desenvolvimento local).

**Isto é um problema?**

Você deve corrigir esse problema em qualquer local de produção onde você está planejando a emissão de emblemas, caso contrário, os destinatários não serão capazes de provar que eles ganharam seus emblemas de você. Se o seu site ainda não está em produção, você pode criar e fornecer emblemas de teste, desde que o site fique acessível antes de entrar em produção.

**E se eu não posso fazer todo o meu local de acesso público?**

A única URL necessárias para a verificação é [seu-site-url]/badges/assertion.php por isso, se você é capaz de modificar o seu firewall para permitir o acesso externo ao arquivo, verificação emblema continuará a funcionar.';
$string['backpackbadges'] = 'Você tem {$a->totalbadges} emblema(s) exibido(s) a partir de {$a->totalcollections} coleção(ões). <a href="mybackpack.php">Alterar configurações da mochila</a>.';
$string['backpackconnection'] = 'Conexão de mochila';
$string['backpackconnection_help'] = 'Esta página permite que você configure a conexão com um provedor de mochila externo. Conectar-se a uma mochila permite que você exiba emblemas externos neste site e que envie emblemas adquiridos aqui para sua mochila.

Atualmente, apenas <a href="http://backpack.openbadges.org">OpenBadges Mozilla Backpack</a> é suportado. Você precisa se inscrever para um serviço de mochila antes de tentar configurar a conexão mochila nesta página.';
$string['backpackdetails'] = 'Configurações de mochila';
$string['backpackemail'] = 'Endereço de e-mail';
$string['backpackemail_help'] = 'Endereço de e-mail associado à sua mochila. Enquanto você estiver conectado, quaisquer medalhas obtidas nesse site serão associadas ao seu ambiente de email.';
$string['backpackimport'] = 'Configurações de importação de emblema';
$string['backpackimport_help'] = 'Depois que a conexão com a mochila é estabelecida com sucesso, os emblemas de sua mochila podem ser exibidos em sua página "Meus emblemas" e em sua página de perfil.

Nesta área, você pode selecionar coleções de emblemas de sua mochila que você gostaria de exibir em seu perfil.';
$string['badgedetails'] = 'Detalhes do emblema';
$string['badgeimage'] = 'Imagem';
$string['badgeimage_help'] = 'Esta é uma imagem que vai ser utilizada quando este emblema é emitido.

Para adicionar uma nova imagem, procure e selecione uma imagem (em formato JPG ou PNG) e, em seguida, clique em "Salvar alterações". A imagem será recortada para um quadrado e redimensionada para atender às necessidades de imagem do emblema.';
$string['badgeprivacysetting'] = 'Configurações de privacidade de emblemas';
$string['badgeprivacysetting_help'] = 'Emblemas que você ganha podem ser exibidos em sua página de perfil. Esta configuração permite que você defina automaticamente a visibilidade dos emblemas recém-obtidos.

Você ainda pode controlar as configurações de privacidade dos emblemas individualmente em sua página "Meus emblemas".';
$string['badgeprivacysetting_str'] = 'Mostrar automaticamente emblemas que eu obtive em minha página de perfil';
$string['badges'] = 'Emblemas';
$string['badgesalt'] = 'Sal para o hash do endereço de email do remetente';
$string['badgesalt_desc'] = 'Usar um "hash" permite que os serviços de mochilas confirmem o ganhador do emblema sem ter que expor seu endereço de e-mail. Esta configuração deve usar apenas números e letras.

Nota: Para efeitos de verificação de destinatários, por favor, evite alterar essa configuração uma vez que você começar a emitir emblemas.';
$string['badgesdisabled'] = 'Emblemas não estão habilitados neste site.';
$string['badgesearned'] = 'Numero de emblemas obtidos: {$a}';
$string['badgesettings'] = 'Configurações de emblemas';
$string['badgestatus_0'] = 'Não disponível para os usuários';
$string['badgestatus_1'] = 'Disponível para usuários';
$string['badgestatus_2'] = 'Não disponível para os usuários';
$string['badgestatus_3'] = 'Disponível para usuários';
$string['badgestatus_4'] = 'Arquivada';
$string['badgestoearn'] = 'Número de emblemas disponíveis: {$a}';
$string['badgesview'] = 'Emblemas do curso';
$string['badgeurl'] = 'Link do emblema emitido';
$string['bawards'] = 'Destinatários ({$a})';
$string['bcriteria'] = 'Critérios';
$string['bdetails'] = 'Editar detalhes';
$string['bmessage'] = 'Mensagem';
$string['boverview'] = 'Visão geral';
$string['bydate'] = 'concluir até';
$string['clearsettings'] = 'Limpar configurações';
$string['completioninfo'] = 'Este emblema foi emitido por completar:';
$string['completionnotenabled'] = 'A conclusão de curso não está habilitada para esse curso e portanto não pode ser incluída no critério do emblema. Você pode habilitar a conclusão de curso nas configurações do curso.';
$string['configenablebadges'] = 'Quando habilitada, esta funcionalidade permite a você criar emblemas e concedê-los aos usuários do site.';
$string['configuremessage'] = 'Mensagem do emblema';
$string['connect'] = 'Conectar';
$string['connected'] = 'Conectado';
$string['connecting'] = 'Conectando...';
$string['contact'] = 'Contato';
$string['contact_help'] = 'Um endereço de email associado ao emissor do emblema.';
$string['copyof'] = 'Cópia de {$a}';
$string['coursebadges'] = 'Emblemas';
$string['coursebadgesdisabled'] = 'Emblemas de curso não estão habilitados neste site.';
$string['coursecompletion'] = 'Participantes precisam completar este curso.';
$string['create'] = 'Novo emblema';
$string['createbutton'] = 'Criar emblema';
$string['creatorbody'] = '<p>{$a->user} completou todos os requisitos e foi premiado com o emblema. Ver emblema emitido em {$a->link} </p>';
$string['creatorsubject'] = '\'{$a}\' foi concedido!';
$string['criteria_0'] = 'Este emblema é concedido quando';
$string['criteria_1'] = 'Conclusão de atividade';
$string['criteria_1_help'] = 'Permite que um emblema seja concedido a usuários baseado na conclusão de um conjunto de atividades de um determinado curso.';
$string['criteria_2'] = 'Atribuição manual por papel';
$string['criteria_2_help'] = 'Permite que um emblema seja concedido manualmente por um usuários que tenha um papel particular em um curso ou no site.';
$string['criteria_3'] = 'Participação social';
$string['criteria_3_help'] = 'Social';
$string['criteria_4'] = 'Conclusão de curso';
$string['criteria_4_help'] = 'Permite que um emblema seja atribuído a um usuário que concluiu o curso. Este critério pode conter parâmetros adicionais como nota mínima e data de conclusão do curso.';
$string['criteria_5'] = 'Conclusão de um conjunto de cursos';
$string['criteria_5_help'] = 'Permite que um emblema seja concedido a um usuário que concluiu um conjunto de cursos. Cada curso pode conter parâmetros adicionais como nota mínima ou data de conclusão de curso.';
$string['criteria_6'] = 'Preenchimento de perfil';
$string['criteria_6_help'] = 'Permite que um emblema seja concedido a um usuário por preencher determinados campos do perfil. Você pode selecionar campos padrão e personalizados que estejam disponíveis aos usuários.';
$string['criteriacreated'] = 'Critério de emblema criado com sucesso';
$string['criteriadeleted'] = 'Critério de emblema excluído com sucesso';
$string['criteria_descr'] = 'Os alunos são premiados com este emblema quando completam o seguinte requisito:';
$string['criteria_descr_0'] = 'Os alunos são premiados com este emblema quando completam <strong>{$a}</strong> dos requisitos listados.';
$string['criteria_descr_1'] = '<strong>{$a}</strong> das seguintes atividades estão concluídas:';
$string['criteria_descr_2'] = 'Este emblema deve ser concedido por usuários com <strong>{$a}</strong> dos seguintes papéis:';
$string['criteria_descr_4'] = 'Os usuários devem concluir o curso';
$string['criteria_descr_5'] = '<strong>{$a}</strong> dos seguintes cursos devem ser concluídos:';
$string['criteria_descr_6'] = '<strong>{$a}</strong> dos seguintes campos de perfil de usuário devem ser preenchidos:';
$string['criteria_descr_bydate'] = 'por <em>{$a}</em>';
$string['criteria_descr_grade'] = 'com nota mínima de <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Concluir <strong>{$a}</strong> de:';
$string['criteria_descr_short1'] = 'Concluir <strong>{$a}</strong> de:';
$string['criteria_descr_short2'] = 'Concedido por <strong>{$a}</strong> de:';
$string['criteria_descr_short4'] = 'Concluir o curso';
$string['criteria_descr_short5'] = 'Concluir <strong>{$a}</strong> de:';
$string['criteria_descr_short6'] = 'Concluir <strong>{$a}</strong> de:';
$string['criteria_descr_single_1'] = 'A seguinte atividade deve ser concluída:';
$string['criteria_descr_single_2'] = 'Este badge deve ser concedido por um usuário com o seguinte papel:';
$string['criteria_descr_single_4'] = 'Os usuários devem concluir o curso';
$string['criteria_descr_single_5'] = 'O seguinte curso deve ser concluído:';
$string['criteria_descr_single_6'] = 'O seguinte campo de perfil de usuário deve ser preenchido:';
$string['criteria_descr_single_short1'] = 'Concluir:';
$string['criteria_descr_single_short2'] = 'Concedido por:';
$string['criteria_descr_single_short4'] = 'Concluir o curso';
$string['criteria_descr_single_short5'] = 'Concluir:';
$string['criteria_descr_single_short6'] = 'Concluir:';
$string['criteriasummary'] = 'Resumo dos critérios';
$string['criteriaupdated'] = 'Critério do emblema atualizado com sucesso';
$string['criterror'] = 'Problemas com parâmetros atuais';
$string['criterror_help'] = 'Esse conjunto de campos mostra todos os parâmetros que foram inicialmente adicionados como requisitos deste emblema e não estão mais disponíveis. É recomendado que você desmarque estes parâmetros para se certificar de que os participantes podem obter esse badge no futuro.';
$string['currentimage'] = 'Imagem atual';
$string['currentstatus'] = 'Estado atual:';
$string['dateawarded'] = 'Data de emissão';
$string['dateearned'] = 'Data: {$a}';
$string['day'] = 'Dia(s)';
$string['deactivate'] = 'Desabilitar o acesso';
$string['deactivatesuccess'] = 'Acesso aos emblemas foi desabilitado com sucesso.';
$string['defaultissuercontact'] = 'Detalhes para contato com emissor do emblema';
$string['defaultissuercontact_desc'] = 'Um endereço de email associado ao emissor do emblema.';
$string['defaultissuername'] = 'Nome do emissor de emblema padrão';
$string['defaultissuername_desc'] = 'Nome do agente emissor ou autoridade.';
$string['delbadge'] = 'Você gostaria de apagar o emblema \'{$a}\' e remover todos os emblemas que já foram emitidos?';
$string['delconfirm'] = 'Excluir e remover emblemas emitidos';
$string['delcritconfirm'] = 'Tem certeza de que deseja excluir este critério?';
$string['deletehelp'] = '<p>Excluir totalmente um emblema quer dizer que todas as inforações e registros de critérios serão permanentemente removidos. Usuários que obtiveram o emblema não poderão mais acessá-lo nem mostrá-lo na página de perfil.</p>
<p>Nota: Usuários que obtiveram o emblema e já o enviaram para uma mochila externa ainda terão este emblema em sua mochila externa. No entanto, não será possível acessar os critérios e páginas de evidência com links de volta para este site.</p>';
$string['delparamconfirm'] = 'Tem certeza de que deseja excluir este parâmetro?';
$string['description'] = 'Descrição';
$string['disconnect'] = 'Desconectar';
$string['donotaward'] = 'No momento este emblema não está ativo, portanto não pode ser concedido aos usuários. Se você gostaria de conceder  este emblema, por favor, configure o status para ativo.';
$string['editsettings'] = 'Editar configurações';
$string['enablebadges'] = 'Habilitar emblemas';
$string['error:backpackdatainvalid'] = 'Os dados retornados pela mochila eram inválidos.';
$string['error:backpackemailnotfound'] = 'O e-mail "{$a}" não está associado com uma mochila. Você precisa <a href="http://backpack.openbadges.org">criar uma mochila</a> para essa conta ou entrar com outro endereço de e-mail.';
$string['error:backpackloginfailed'] = 'Você não pode ser conectado a uma mochila externa pelo seguinte motivo: {$a}';
$string['error:backpacknotavailable'] = 'Seu site não é acessível pela internet portanto qualquer emblema emitido a partir desse site não pode ser verificado por serviços de mochilas externas.';
$string['error:backpackproblem'] = 'Houve um problema de conexão com o provedor de serviços de mochila. Por favor, tente novamente mais tarde.';
$string['error:badjson'] = 'A tentativa de conexão retornou dados inválidos.';
$string['error:cannotact'] = 'Não é possível ativar o emblema.';
$string['error:cannotawardbadge'] = 'Não pode conceder emblemas para um usuário.';
$string['error:cannotdeletecriterion'] = 'Este critério não pode ser excluído.';
$string['error:clone'] = 'Não foi possível copiar o emblema.';
$string['error:connectionunknownreason'] = 'A conexão não foi bem sucedida, mas nenhuma razão foi dada.';
$string['error:duplicatename'] = 'Um emblema com esse nome já existe no sistema.';
$string['error:externalbadgedoesntexist'] = 'Emblema não encontrado';
$string['error:guestuseraccess'] = 'Você acessou como visitante. Para ver emblemas, você precisa fazer login com sua conta de usuário.';
$string['error:invalidbadgeurl'] = 'O formato da URL do emissor de emblemas é inválido.';
$string['error:invalidcriteriatype'] = 'Tipo de critérios inválido.';
$string['error:invalidexpiredate'] = 'Data de validade deve estar no futuro.';
$string['error:invalidexpireperiod'] = 'Período de validade não pode ser negativo ou igual a 0.';
$string['error:noactivities'] = 'Não há atividades com critérios de conclusão habilitadas neste curso.';
$string['error:noassertion'] = 'Nenhuma afirmação foi devolvida por Persona. Você pode ter fechado a janela antes de completar o processo de login.';
$string['error:nocourses'] = 'A conclusão de curso não está habilitada para nenhum curso do site, então nenhum pode ser mostrado. A conclusão de curso pode ser habilitada nas configurações do curso.';
$string['error:nogroups'] = '<p>Não há coleções públicas de emblemas disponíveis em sua mochila.</p>
<p>Somente coleções públicas são mostrados. <a href="http://backpack.openbadges.org">Visite sua mochila</a> para criar algumas coleções públicas. </p>';
$string['error:nopermissiontoview'] = 'Você não tem permissões para ver os usuários que receberam emblemas';
$string['error:nosuchbadge'] = 'Emblema com id {$a} não existe.';
$string['error:nosuchcourse'] = 'Aviso: Este curso não está mais disponível.';
$string['error:nosuchfield'] = 'Aviso: Este campo de perfil de usuário não está mais disponível.';
$string['error:nosuchmod'] = 'Aviso: Esta atividade não está mais disponível.';
$string['error:nosuchrole'] = 'Aviso: Este papel não está mais disponível.';
$string['error:nosuchuser'] = 'Usuário com este endereço de e-mail não tem uma conta com o provedor de mochilas atual.';
$string['error:notifycoursedate'] = 'Aviso: Emblemas associados com as conclusões de atividade e curso não serão emitidos até a data de início do curso.';
$string['error:parameter'] = 'Aviso: Pelo menos um parâmetro deve ser selecionado para assegurar a emissão apropriada do emblema.';
$string['error:personaneedsjs'] = 'Atualmente, é necessário Javascript para conectar à sua mochila. Se você puder, habilite o Javascript e recarregue a página.';
$string['error:requesterror'] = 'O pedido de conexão falhou (código do erro {$a}).';
$string['error:requesttimeout'] = 'O pedido de conexão expirou antes que pudesse ser concluído.';
$string['error:save'] = 'Não é possível salvar o emblema.';
$string['error:userdeleted'] = '{$a->user} (Este usuário não existe mais em {$a->site})';
$string['eventbadgeawarded'] = 'Emblema emitido';
$string['evidence'] = 'Evidência';
$string['existingrecipients'] = 'Usuários que receberam emblemas';
$string['expired'] = 'Expirado';
$string['expiredate'] = 'Este emblema expira em {$a}.';
$string['expireddate'] = 'Este emblema expirou em {$a}.';
$string['expireperiod'] = 'Este emblema expira {$a} dia(s) depois da emissão.';
$string['expireperiodh'] = 'Este emblema expira {$a} horas(s) depois da emissão.';
$string['expireperiodm'] = 'Este emblema expira {$a} minuto(s) depois da emissão.';
$string['expireperiods'] = 'Este emblema expira {$a} segundo(s) depois da emissão.';
$string['expirydate'] = 'Data de validade';
$string['expirydate_help'] = 'Opcionalmente, emblemas podem expirar em uma data específica ou a data pode ser calculada com base na data da emissão do emblema para o usuário.';
$string['externalbadges'] = 'Meus emblemas de outros sites';
$string['externalbadges_help'] = 'Esta área exibe emblemas de mochilas externas.';
$string['externalbadgesp'] = 'Emblemas de outros sites:';
$string['externalconnectto'] = 'Para exibir emblemas externos que você precisa <a href="{$a}">conectar a uma mochila</a> .';
$string['fixed'] = 'Data fixa';
$string['hiddenbadge'] = 'Infelizmente, o proprietário do emblema não disponibilizou esta informação.';
$string['issuancedetails'] = 'Expiração do emblema';
$string['issuedbadge'] = 'Informações do emblema emitido';
$string['issuerdetails'] = 'Detalhes do emissor';
$string['issuername'] = 'Nome do emissor';
$string['issuername_help'] = 'Nome do agente ou da autoridade emissora.';
$string['issuerurl'] = 'URL do emissor';
$string['localbadges'] = 'Meus emblemas do web site {$a}';
$string['localbadgesh'] = 'Meus emblemas deste web site';
$string['localbadgesh_help'] = 'Todos os emblemas ganhos neste web site por completar cursos, atividades de cursos e outros requisitos.

Você pode gerenciar suas medalhas aqui tornando-as públicas ou particulares na sua página de perfil.';
$string['localbadgesp'] = 'Emblemas de {$a}:';
$string['localconnectto'] = 'Para compartilhar estes emblemas fora deste site, você precisa <a href="{$a}">conectar a uma mochila</a> .';
$string['makeprivate'] = 'Tornar particular';
$string['makepublic'] = 'Tornar público';
$string['managebadges'] = 'Gerenciar emblemas';
$string['message'] = 'Corpo da mensagem';
$string['messagebody'] = '<p>Você foi premiado com o emblema "%badgename%"!</p>
<p>Mais informações sobre esse emblema podem ser encontradas em %badgelink%.</p>
<p>Você pode gerenciar e baixar o emblema em {$a}.</p>';
$string['messagesubject'] = 'Parabéns! Você acabou de ganhar um emblema!';
$string['method'] = 'Este critério é concluído quando...';
$string['mingrade'] = 'Nota mínima exigida';
$string['month'] = 'Mês(es)';
$string['mybackpack'] = 'Minhas configurações de mochila';
$string['mybadges'] = 'Meus emblemas';
$string['never'] = 'Nunca';
$string['newbadge'] = 'Adicionar um novo emblema';
$string['newimage'] = 'Nova imagem';
$string['noawards'] = 'Este emblema ainda não foi conquistado.';
$string['nobackpack'] = 'Não há serviço de mochila conectado a esta conta. <br/>';
$string['nobackpackbadges'] = 'Não há emblemas nas coleções selecionadas. <a href="mybackpack.php">Adicionar mais coleções</a> .';
$string['nobackpackcollections'] = 'Nenhuma coleção de emblemas foi selecionada. <a href="mybackpack.php">Adicionar coleções</ a>.';
$string['nobadges'] = 'Não há emblemas disponíveis.';
$string['nocriteria'] = 'Os critérios para este emblema ainda não foram definidos.';
$string['noexpiry'] = 'Este emblema não possui uma data de expiração.';
$string['noparamstoadd'] = 'Não existem parâmetros adicionais disponíveis para adicionar a este requisito do emblema.';
$string['notacceptedrole'] = 'Sua atribuição de papel atual não está entre os papéis que podem atribuir manualmente este emblema.<br/>
Se você gostaria de ver os usuários que já ganharam este badge, você pode visitar a página {$a}.';
$string['notconnected'] = 'Não conectado';
$string['nothingtoadd'] = 'Não existem critérios disponíveis para adicionar.';
$string['notification'] = 'Notificar criador do emblema';
$string['notification_help'] = 'Esta configuração controla as notificações enviadas para um criador de emblema para que ele saiba que o emblema foi emitido.

As seguintes opções estão disponíveis:

* **NUNCA** – Não enviar notificações.

* **CADA VEZ** – Enviar uma notificação cada vez que este emblema é concedido.

* **DIÁRIO** – Enviar notificações uma vez por dia.

* **SEMANAL** – Enviar notificações uma vez por semana.

* **MENSAL** – Enviar notificações uma vez por mês.';
$string['notifydaily'] = 'Diariamente';
$string['notifyevery'] = 'Cada vez';
$string['notifymonthly'] = 'Mensal';
$string['notifyweekly'] = 'Semanal';
$string['numawards'] = 'Este emblema foi emitido para <a href="{$a->link}">{$a->count}</a> usuário(s).';
$string['numawardstat'] = 'Este emblema foi emitido {$a} usuário(s).';
$string['overallcrit'] = 'dos critérios selecionados estão completos.';
$string['personaconnection'] = 'Acessar com seu e-mail';
$string['personaconnection_help'] = 'Persona é um sistema para identificar-se em toda a web, usando um endereço de e-mail que você possui. The Open Badges mochila usa Persona como um sistema de login, de modo a ser capaz de se conectar a uma mochila com você precisa de uma conta Persona. Para mais informações sobre Persona visita <a href="https://login.persona.org/about">https://login.persona.org/about</a> .';
$string['potentialrecipients'] = 'Usuários aptos a receber o emblema';
$string['preferences'] = 'Preferências de emblema';
$string['recipientdetails'] = 'Detalhes do usuário a receber o emblema';
$string['recipientidentificationproblem'] = 'Não foi possível encontrar um que recebeu este emblema entre os usuários existentes.';
$string['recipients'] = 'Usuários que receberam o emblema';
$string['recipientvalidationproblem'] = 'O usuário atual não pode ser verificado como tendo recebido este emblema.';
$string['relative'] = 'Data relativa';
$string['requiredcourse'] = 'Pelo menos um curso deve ser adicionado ao critério conjunto de cursos.';
$string['reviewbadge'] = 'Alterações de acesso ao emblema';
$string['reviewconfirm'] = '<p>Isso tornará o emblema visível para os usuários e permitir-lhes começar a ganhá-lo. </p>

<p>É possível que alguns usuários já atendam aos critérios deste emblema e receberão este emblema imediatamente após ativá-lo. </p>

<p>Uma vez que um emblema foi emitido, ele será <strong>bloqueado</strong> - certas configurações, incluindo os critérios e as configurações de validade não poderão ser alterados. </p>

<p>Tem certeza que você deseja habilitar o acesso ao badge \'{$a}\'?</p>';
$string['save'] = 'Salvar';
$string['searchname'] = 'Pesquisar por nome';
$string['selectaward'] = 'Por favor, selecione o papel que você gostaria de usar para conceder este emblema:';
$string['selectgroup_end'] = 'Somente coleções públicas são mostradas. <a href="http://backpack.openbadges.org">Visite sua mochila</a> para criar mais coleções públicas.';
$string['selectgroup_start'] = 'Selecione as coleções de sua mochila para mostrar neste site:';
$string['selecting'] = 'Com emblemas selecionados...';
$string['setup'] = 'Configurar a conexão';
$string['signinwithyouremail'] = 'Acessar com seu e-mail';
$string['sitebadges'] = 'Emblemas do site';
$string['sitebadges_help'] = 'Emblemas do site só podem ser concedidos aos usuários para atividades relacionadas ao site. Esses incluem a conclusão de um conjunto de cursos ou partes de perfis de usuário. Emblemas do site também podem ser emitidos manualmente de um usuário para outro.

Emblemas para atividades relacionadas com o curso deve ser criados no nível do curso. Emblemas do curso podem ser encontrados em Administração do curso > Emblemas.';
$string['status'] = 'Status do emblema';
$string['status_help'] = 'Status de um emblema determina seu comportamento no sistema:

* ** DISPONÍVEL** - Significa que este emblema pode ser conquistado pelos usuários. Enquanto um emblema está disponível para os utilizadores, os seus critérios não podem ser modificados.

* **Não disponível** - Significa que este emblema não está disponível para os usuários e não pode ser ganho ou emitido manualmente. Se tal emblema nunca foi emitido antes, os seus critérios podem ser alterados.

Uma vez que um emblema foi emitido, pelo menos, um utilizador, torna-se automaticamente **BLOQUEADO**. Emblemas bloqueados ainda podem ser obtidos pelos usuários, mas os seus critérios não pode mais ser mudados. Se você precisar modificar detalhes ou critérios de um emblema bloqueado, você pode duplicar este emblema e fazer todas as alterações necessárias.

*Por que bloqueamos os emblemas?*

Queremos ter certeza que todos os usuários completaram os mesmos requisitos para ganhar um emblema. Atualmente, não é possível revogar emblemas. Se nós permitirmos que requisitos de emblemas sejam modificados o tempo todo, nós provavelmente acabaríamos com usuários tendo o mesmo emblema por completar requisitos completamente diferentes.';
$string['statusmessage_0'] = 'Este emblema não está disponível para os usuários. Permita o acesso caso queira que os usuários ganhem este emblema.';
$string['statusmessage_1'] = 'Este emblema está disponível para os usuários. Desabilite o acesso para fazer quaisquer alterações.';
$string['statusmessage_2'] = 'Este emblema não está disponível para os usuários e seus critérios estão bloqueados. Permita o acesso caso queira que os usuários ganhem este emblema.';
$string['statusmessage_3'] = 'Este emblema está disponível para os usuários e seus critérios estão bloqueados.';
$string['statusmessage_4'] = 'Este emblema está arquivado.';
$string['subject'] = 'Assunto da mensagem';
$string['variablesubstitution'] = 'Substituição de variáveis nas mensagens.';
$string['variablesubstitution_help'] = 'Em uma mensagem de emblema, determinadas variáveis podem ser inserida no assunto e/ou no corpo de uma mensagem de modo que elas serão substituídass por valores reais quando a mensagem for enviada. As variáveis devem ser inseridas no texto da mesma forma que são mostradas a seguir. As seguintes variáveis podem ser usadas:

%badgename%
: Isso será substituído pelo nome completo do emblema.

%username%
: Isso será substituído pelo nome completo do destinatário.

%badgelink%
: Isto será substituído pela URL pública com informações sobre o emblema emitido.';
$string['viewbadge'] = 'Ver emblema emitido';
$string['visible'] = 'Visível';
$string['warnexpired'] = '(Este emblema expirou!)';
$string['year'] = 'Ano(s)';
