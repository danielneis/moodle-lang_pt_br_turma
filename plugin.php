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
 * Strings for component 'plugin', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['availability'] = 'Disponibilidade';
$string['checkforupdates'] = 'Verificar atualizações disponiveis';
$string['checkforupdateslast'] = 'Última verificação feita em {$a}';
$string['dependencyinstall'] = 'Instalar';
$string['dependencyupload'] = 'Enviar';
$string['detectedmisplacedplugin'] = 'O plugin "{$a->component}" está incorretamente instalado em "{$a->current}", o local esperado é "{$a->expected}"';
$string['displayname'] = 'Nome do plugin';
$string['err_response_curl'] = 'Não foi possível obter dados das atualizações disponíveis -  erro inesperado do cURL.';
$string['err_response_format_version'] = 'Versão inesperada do formato de resposta. Por favor, tente novamente verificar se há atualizações disponíveis.';
$string['err_response_http_code'] = 'Não foi possível obter dados das atualizações disponíveis - código de resposta HTTP inesperado.';
$string['filterall'] = 'Mostrar todos';
$string['filtercontribonly'] = 'Mostrar apenas plugins de terceiros';
$string['filtercontribonlyactive'] = 'Mostrando apenas plugins de terceiros';
$string['filterupdatesonly'] = 'Mostrar apenas atualizável';
$string['filterupdatesonlyactive'] = 'Mostrando apenas atualizável';
$string['moodleversion'] = 'Moodle {$a}';
$string['nonehighlighted'] = 'Nenhum plugin requer sua atenção neste momento';
$string['nonehighlightedinfo'] = 'Mostrar a lista de todos os plugin instalados de qualquer forma';
$string['noneinstalled'] = 'Nenhum plugin desse tipo está instalado';
$string['notdownloadable'] = 'Não é possível baixar o pacote';
$string['notdownloadable_help'] = 'Pacote ZIP com a atualização não pode ser baixado automaticamente. Por favor, consulte a página de documentação para obter mais ajuda.';
$string['notes'] = 'Notas';
$string['notwritable'] = 'Arquivos do plugin não graváveis';
$string['notwritable_help'] = 'Você ativou a implantação automática de atualizações e existe uma atualização disponível para este plugin. No entanto, os arquivos do plugin não são graváveis pelo servidor web, impedindo a instalação automática desta atualização.

Você precisa fazer com que o diretório do plugin e todo o seu conteúdo sejam graváveis para poder instalar a atualização disponível automaticamente.';
$string['numdisabled'] = 'Desabilitado(s): {$a}';
$string['numextension'] = 'Adicional: {$a}';
$string['numtotal'] = 'Instalado: {$a}';
$string['numupdatable'] = 'Atualizações disponíveis: {$a}';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['pluginchecknotice'] = 'Essa página mostra os plugins que podem requerer sua atenção durante a atualização. Itens destacados incluem novos plugins que serão instalados, plugins com novas versões que serão atualizados e plugins que estão faltando. Plugins de terceiros são destacados se houver uma atualização disponível para eles. Recomenda-se que você verifique se há versões mais recentes do plugins disponíveis e atualizar seu código fonte antes de continuar com esta atualização Moodle.';
$string['plugindisable'] = 'Desabilitar';
$string['plugindisabled'] = 'Desabilitado';
$string['pluginenable'] = 'Habilitar';
$string['pluginenabled'] = 'Habilitado';
$string['release'] = 'Lançamento';
$string['requiredby'] = 'Requerido por: {$a}';
$string['requires'] = 'Requer';
$string['rootdir'] = 'Diretório';
$string['settings'] = 'Configurações';
$string['showall'] = 'Recarregar e mostrar todos os plugins';
$string['somehighlighted'] = 'Número de plugins que requerem sua atenção: {$a}';
$string['somehighlightedinfo'] = 'Mostrar a lista completa de plugins instalados';
$string['somehighlightedonly'] = 'Exibir somente plugins que precisam de atenção';
$string['source'] = 'Fonte';
$string['sourceext'] = 'Adicional';
$string['sourcestd'] = 'Padrão';
$string['status'] = 'Status';
$string['status_delete'] = 'A ser excluído';
$string['status_downgrade'] = 'Versão mais alta já está instalada!';
$string['status_missing'] = 'Está faltando no disco';
$string['status_new'] = 'A ser instalado';
$string['status_nodb'] = 'Sem banco de dados';
$string['status_upgrade'] = 'A ser atualizado';
$string['status_uptodate'] = 'Instalado';
$string['systemname'] = 'Identificador';
$string['type_auth'] = 'Método de autenticação';
$string['type_auth_plural'] = 'Plugins de autenticação';
$string['type_availability'] = 'Restrição de disponibilidade';
$string['type_availability_plural'] = 'Restrições de disponibilidade';
$string['type_block'] = 'Bloco';
$string['type_block_plural'] = 'Blocos';
$string['type_cachelock'] = 'Manipulador de bloqueio de cache';
$string['type_cachelock_plural'] = 'Bloqueio manipuladores de cache';
$string['type_cachestore'] = 'Armazenamento de cache';
$string['type_cachestore_plural'] = 'Armazenamentos de cache';
$string['type_calendartype'] = 'Tipo de calendário';
$string['type_calendartype_plural'] = 'Tipo de calendário';
$string['type_coursereport'] = 'Relatório do curso';
$string['type_coursereport_plural'] = 'Relatórios do curso';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editores';
$string['type_enrol'] = 'Método de inscrição';
$string['type_enrol_plural'] = 'Métodos de inscrição';
$string['type_filter'] = 'Filtro';
$string['type_filter_plural'] = 'Filtros de texto';
$string['type_format'] = 'Formato de curso';
$string['type_format_plural'] = 'Formatos de curso';
$string['type_gradeexport'] = 'Método de exportação de notas';
$string['type_gradeexport_plural'] = 'Métodos de exportação de notas';
$string['type_gradeimport'] = 'Método de importação de notas';
$string['type_gradeimport_plural'] = 'Métodos de importação de notas';
$string['type_gradereport'] = 'Relatório de livro de notas';
$string['type_gradereport_plural'] = 'Relatórios de livro de notas';
$string['type_gradingform'] = 'Método de avaliação avançados';
$string['type_gradingform_plural'] = 'Métodos de avaliação avançados';
$string['type_local'] = 'Plugin local';
$string['type_local_plural'] = 'Plugins locais';
$string['type_message'] = 'Processador de mensagens';
$string['type_message_plural'] = 'Processadores de mensagens';
$string['type_mnetservice'] = 'Serviço MNet';
$string['type_mnetservice_plural'] = 'Serviços MNet';
$string['type_mod'] = 'Módulo de atividades';
$string['type_mod_plural'] = 'Atividades';
$string['type_plagiarism'] = 'Plugin de prevenção de plágio';
$string['type_plagiarism_plural'] = 'Plugins de prevenção de plágio';
$string['type_portfolio'] = 'Portfólio';
$string['type_portfolio_plural'] = 'Portfólios';
$string['type_profilefield'] = 'Tipo de campo de perfil';
$string['type_profilefield_plural'] = 'Tipos de campo de perfil';
$string['type_qbehaviour'] = 'Comportamento de questão';
$string['type_qbehaviour_plural'] = 'Comportamentos de questão';
$string['type_qformat'] = 'Formato de importação/exportação de questões';
$string['type_qformat_plural'] = 'Formatos de importação/exportação de questões';
$string['type_qtype'] = 'Tipo de questão';
$string['type_qtype_plural'] = 'Tipos de questão';
$string['type_report'] = 'Relatório do site';
$string['type_report_plural'] = 'Relatórios';
$string['type_repository'] = 'Repositório';
$string['type_repository_plural'] = 'Repositórios';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temas';
$string['type_tool'] = 'Ferramenta de administração';
$string['type_tool_plural'] = 'Ferramentas de administração';
$string['type_webservice'] = 'Protocolo de webservice';
$string['type_webservice_plural'] = 'Protocolos de webservice';
$string['uninstall'] = 'Desinstalar';
$string['uninstallconfirm'] = 'Você está prestes a desinstalar o plugin <em>{$a->name}</em>. Isto excluirá completamente do banco de dados tudo associado a este plugin, incluindo suas configurações, registros de log, arquivos de usuários gerenciados pelo plugin etc. Não é possível desfazer esta operação, e o Moodle em si não cria nenhum backup de recuperação. Você TEM CERTEZA que deseja continuar?';
$string['uninstalldelete'] = 'Todos os dados associados ao plugin <em>{$a->name}</em> foram excluídos do banco de dados. Para prevenir que o plugin reinstale-se, seu diretório <em>{$a->rootdir}</em> deve ser agora manualmente removido do servidor. O Moodle em si não pode remover o diretório devido a permissões de escrita.';
$string['uninstalldeleteconfirm'] = 'Todos os dados associados ao plugin <em>{$a->name}</em> foram excluídos do banco de dados. Para prevenir que o plugin reinstale-se, seu diretório <em>{$a->rootdir}</em> deve ser removido do servidor. Você deseja remover o diretório do plugin agora?';
$string['uninstalldeleteconfirmexternal'] = 'Parece que a versão atual do plugin foi obtido através do sistema de gerenciamento de código fonte ({$a}). Se você remover a pasta do plugin, você pode perder importantes modificações locais do código. Por favor, esteja seguro que você definitivamente deseja remover a pasta deste plug-in antes de continuar.';
$string['uninstallextraconfirmblock'] = 'Há {$a->instances} instâncias deste bloco.';
$string['uninstallextraconfirmenrol'] = 'Há {$a->enrolments} usuários inscritos';
$string['uninstallextraconfirmmod'] = 'Há {$a->instances} instâncias desse módulo em {$a->courses} cursos.';
$string['uninstalling'] = 'Desinstalando {$a->name}';
$string['updateavailable'] = 'Há uma nova versão {$a} disponível!';
$string['updateavailable_moreinfo'] = 'Mais informações...';
$string['updateavailable_release'] = 'Versão {$a}';
$string['updatepluginconfirm'] = 'Confirmação de atualização de plugin';
$string['updatepluginconfirmexternal'] = 'Parece que a versão atual do plugin foi obtida através de sistema de gerenciamento de código ({$a}) check-out. Se você instalar esta atualização, você não será mais capaz de obter atualizações de plugins do sistema de gerenciamento de código fonte. Certifique-se de que você definitivamente quer atualizar o plugin antes de continuar.';
$string['updatepluginconfirminfo'] = 'Você está prestes a instalar uma nova versão do <strong>{$a->name}</strong> plugin. Um pacote zip com a versão {$a->version} do plugin será baixado a partir <a href="{$a->url}">{$a->url}</a> e extraído para a sua instalação Moodle para que ele possa atualizar sua instalação.';
$string['updatepluginconfirmwarning'] = 'Por favor, note que o Moodle não irá automaticamente fazer um backup do seu banco de dados antes da atualização. Nós recomendamos que você faça um backup instantâneo completo agora, para lidar com o caso raro em que o novo código tem bugs que fazem o seu site disponível ou mesmo corrompe seu banco de dados. Prossiga por sua conta e risco.';
$string['version'] = 'Versão';
$string['versiondb'] = 'Versão atual';
$string['versiondisk'] = 'Nova versão';
