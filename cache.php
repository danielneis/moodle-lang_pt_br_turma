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
 * Strings for component 'cache', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   cache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['addinstance'] = 'Adicionar instância';
$string['addlocksuccess'] = 'Adicionado com sucesso uma nova instância de bloqueio.';
$string['addnewlockinstance'] = 'Adicionar uma nova instância de bloqueio';
$string['addstore'] = 'Adicionar armazenamento {$a}';
$string['addstoresuccess'] = 'Armazenamento {$a} adicionado com sucesso.';
$string['area'] = 'Área';
$string['cacheadmin'] = 'Administração de cache';
$string['cacheconfig'] = 'Configuração';
$string['cachedef_calendar_subscriptions'] = 'Assinaturas de calendário';
$string['cachedef_capabilities'] = 'Lista de recursos do sistema';
$string['cachedef_completion'] = 'Status de conclusão da atividade';
$string['cachedef_config'] = 'Definições de configuração';
$string['cachedef_coursecat'] = 'Lista de categoria de curso para um usuário em particular';
$string['cachedef_coursecatrecords'] = 'Registros de categoria de curso';
$string['cachedef_coursecattree'] = 'Árvore de categorias curso';
$string['cachedef_coursecontacts'] = 'Lista de contatos do curso';
$string['cachedef_coursemodinfo'] = 'Informações acumuladas sobre módulos e seções para cada usuário';
$string['cachedef_databasemeta'] = 'Meta informações de banco de dados';
$string['cachedef_eventinvalidation'] = 'Invalidação de evento';
$string['cachedef_externalbadges'] = 'Emblemas externos para determinado usuário';
$string['cachedef_groupdata'] = 'Informações do grupo de curso';
$string['cachedef_htmlpurifier'] = 'HTML Purifier - o conteúdo limpo';
$string['cachedef_langmenu'] = 'Lista de idiomas disponíveis';
$string['cachedef_locking'] = 'Bloqueio';
$string['cachedef_navigation_expandcourse'] = 'Navegação em cursos expansíveis';
$string['cachedef_observers'] = 'Observadores de eventos';
$string['cachedef_plugin_functions'] = '"Callbacks" de plugins disponíveis';
$string['cachedef_plugin_manager'] = 'Gerenciador de informações de plugin';
$string['cachedef_questiondata'] = 'Definições de pergunta';
$string['cachedef_repositories'] = 'Repositórios de instâncias de dados';
$string['cachedef_string'] = 'Cache de strings de idioma';
$string['cachedef_suspended_userids'] = 'Lista de usuários suspensos por curso';
$string['cachedef_userselections'] = 'Dados usado para manter seleções do usuário em todo Moodle';
$string['cachedef_yuimodules'] = 'Definições do módulo YUI';
$string['cachelock_file_default'] = 'Bloqueio de arquivo padrão';
$string['cachestores'] = 'Armazenagem de cache';
$string['caching'] = 'Caching';
$string['component'] = 'Componente';
$string['confirmlockdeletion'] = 'Confirme a eliminação de bloqueio';
$string['confirmstoredeletion'] = 'Confirmação de exclusão de armazenagem';
$string['default_application'] = 'Aplicação de armazenagem padrão';
$string['defaultmappings'] = 'Armazenagens utilizadas quando o mapeamento está presente';
$string['defaultmappings_help'] = 'Estas são as armazenagens padrão que serão usadas se você não mapear uma ou mais armazenagens à definição de cache.';
$string['default_request'] = 'Requisição de armazenagem padrão';
$string['default_session'] = 'Seção de armazenagem padrão';
$string['defaultstoreactions'] = 'As armazenagens padrão não pode ser modificadas';
$string['definition'] = 'Definição';
$string['definitionsummaries'] = 'Definições de cache conhecidas';
$string['delete'] = 'Apagar';
$string['deletelock'] = 'Excluir bloqueio';
$string['deletelockconfirmation'] = 'Você tem certeza que deseja excluir o bloqueio {$a}?';
$string['deletelockhasuses'] = 'Você não pode excluir esse exemplo de bloqueio, porque ele está sendo usado por uma ou mais lojas.';
$string['deletelocksuccess'] = 'Excluído com sucesso o bloqueio.';
$string['deletestore'] = 'Apagar armazenagem';
$string['deletestoreconfirmation'] = 'Você tem certeza que quer apagar a armazenagem "{$a}"?';
$string['deletestorehasmappings'] = 'Você não pode apagar armazenagens que tem mapeamento. Por favor apague todos os mapeamentos antes de apagar a armazenagem.';
$string['deletestoresuccess'] = 'Armazenagem de cache apagada com sucesso';
$string['editdefinitionmappings'] = 'Definição do mapeamento de armazenagem {$a}';
$string['editdefinitionsharing'] = 'Editar compartilhamento de definição para {$a}';
$string['editmappings'] = 'Editar mapeamento';
$string['editsharing'] = 'Edite compartilhamento';
$string['editstore'] = 'Editar armazenamento';
$string['editstoresuccess'] = 'Armazenamento de cache editado com sucesso';
$string['ex_configcannotsave'] = 'Não foi possível salvar a configuração de cache no arquivo.';
$string['ex_nodefaultlock'] = 'Não foi possível encontra instância de bloqueio padrão';
$string['ex_unabletolock'] = 'Não foi possível adquirir um bloqueio para o cache.';
$string['ex_unmetstorerequirements'] = 'Você está impossibilitado de usar esta armazenagem no momento presente. Consulte a documentação para determinar os requisitos.';
$string['gethit'] = 'Get - Hit';
$string['getmiss'] = 'Get - Miss';
$string['inadequatestoreformapping'] = 'Este armazenamento não cumpre os requisitos para todas as definições conhecidas. As definições para que este armazenamento é inadequada, será dado o armazenamento padrão original, em vez do armazenamento selecionado.';
$string['invalidlock'] = 'Bloqueio inválido';
$string['invalidplugin'] = 'Plugin inválido';
$string['invalidstore'] = 'Armazenagem de cache fornecida inválida';
$string['lockdefault'] = 'Padrão';
$string['locking'] = 'Bloqueio';
$string['locking_help'] = 'O bloqueio é um mecanismo que restringe o acesso aos dados em cache para um processo de cada vez, evitando que os dados sejam substituídos. O método de bloqueio determina como o bloqueio é adquirido e verificado.';
$string['lockingmeans'] = 'Mecanismo de bloqueio';
$string['lockmethod'] = 'Método de bloqueio';
$string['lockmethod_help'] = 'Este é o método utilizado para o bloqueio quando esta armazenagem é requisitada.';
$string['lockname'] = 'Nome';
$string['locknamedesc'] = 'O nome deve ser único e só pode consistir dos personagens: a-zA-Z_';
$string['locknamenotunique'] = 'O nome que você selecionou não é único. Por favor selecione um nome único.';
$string['locksummary'] = 'Resumo de ocorrências de bloqueio de cache.';
$string['locktype'] = 'Tipo';
$string['lockuses'] = 'Usos';
$string['mappingdefault'] = '(Padrão)';
$string['mappingfinal'] = 'Armazenagem final';
$string['mappingprimary'] = 'Armazenagem inicial';
$string['mappings'] = 'Mapeamento de armazenagem';
$string['mode'] = 'Modo';
$string['mode_1'] = 'Aplicação';
$string['mode_2'] = 'Sessão';
$string['mode_4'] = 'Requisição';
$string['modes'] = 'Modos';
$string['nativelocking'] = 'Este plugin lida com seu próprio bloqueio.';
$string['none'] = 'Nenhum';
$string['plugin'] = 'Plugin';
$string['pluginsummaries'] = 'Armazenagens de cache isntaladas';
$string['purge'] = 'Limpar';
$string['purgedefinitionsuccess'] = 'A definição solicitada foi purgada com sucesso.';
$string['purgestoresuccess'] = 'A armazenagem foi limpa com sucesso.';
$string['requestcount'] = 'Testar com {$a} requisições';
$string['rescandefinitions'] = 'Re-escanear definições';
$string['result'] = 'Resultado';
$string['set'] = 'Conjunto';
$string['sharing'] = 'Compartilhando';
$string['sharing_all'] = 'Todos.';
$string['sharing_help'] = 'Isso permite que você para determinar como os dados de cache pode ser compartilhado se você tiver uma configuração de cluster, ou se você tiver vários sites todos configurados com a mesma armazenagem e quiser compartilhar os dados. Esta é uma configuração avançada, por favor certifique-se de compreender o seu propósito antes de modificá-lo.';
$string['sharing_input'] = 'Chave Personalizada (indicados abaixo)';
$string['sharingrequired'] = 'Você deve selecionar pelo menos uma opção de compartilhamento.';
$string['sharingselected_all'] = 'Todos';
$string['sharingselected_input'] = 'Chave personalizada';
$string['sharingselected_siteid'] = 'Identificador do site';
$string['sharingselected_version'] = 'Versão';
$string['sharing_siteid'] = 'Sites com o mesmo ID de local.';
$string['sharing_version'] = 'Sites rodando a mesma versão.';
$string['storeconfiguration'] = 'Configuração da armazenagem';
$string['store_default_application'] = 'Armazenagem padrão para cache de aplicação';
$string['store_default_request'] = 'Armazenagem estática padrão para cache de requisição';
$string['store_default_session'] = 'Armazenagem de seção padrão para o cache de seção';
$string['storename'] = 'Nome da armazenagem';
$string['storenamealreadyused'] = 'Você deve escolher um nome exclusivo para esta armazenagem.';
$string['storename_help'] = 'Isso define o nome da armazenagem. Ele é utilizado para identificar o armazenamento no interior do sistema e pode consistir somente de az 0-9 _-e espaços. Ele também deve ser único. Se você tentar usar um nome que já foi usado, você receberá um erro.';
$string['storenameinvalid'] = 'Nome da armazenagem inválido. Você só pode usar az AZ 0-9-_ e espaços.';
$string['storenotready'] = 'Armazenagem indisponível';
$string['storeperformance'] = 'Guardar relatório de desempenho da armazenagem - {$a} pedidos únicos por operação.';
$string['storeready'] = 'Pronto';
$string['storerequiresattention'] = 'Requer atenção.';
$string['storerequiresattention_help'] = 'Esta instância de armazenagem não está pronta para ser usada, mas tem mapeamentos. Corrigir esse problema vai melhorar o desempenho do sistema. Por favor, verifique se a armazenagem está pronta para ser utilizado e que todos os requisitos PHP são cumpridos.';
$string['storeresults_application'] = 'Armazenar solicitações quando usado como um cache do aplicativo.';
$string['storeresults_request'] = 'Armazenar solicitações quando usado como um cache de requisição.';
$string['storeresults_session'] = 'Armazenar solicitações quando usado como um cache de sessão.';
$string['stores'] = 'Armazenagem';
$string['storesummaries'] = 'Instâncias de armazenagem configuradas';
$string['supports'] = 'Suporta';
$string['supports_dataguarantee'] = 'garantia de dados';
$string['supports_keyawareness'] = 'chave de conciência';
$string['supports_multipleidentifiers'] = 'múltiplos identificadores';
$string['supports_nativelocking'] = 'bloqueio';
$string['supports_nativettl'] = 'ttl';
$string['supports_searchable'] = 'buscar por chave';
$string['tested'] = 'Testado';
$string['testperformance'] = 'Performance de teste';
$string['unsupportedmode'] = 'Modo não suportado';
$string['untestable'] = 'Impossível testar';
$string['userinputsharingkey'] = 'Chave personalizada para compartilhamento';
$string['userinputsharingkey_help'] = 'Digite sua própria chave privada aqui. Quando você configurar outras armazenagens em outros sites que você deseja compartilhar dados com certifique-se de definir a mesma chave exata lá.';
