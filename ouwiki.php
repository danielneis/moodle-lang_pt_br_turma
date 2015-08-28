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
 * Strings for component 'ouwiki', language 'pt_br', branch 'MOODLE_27_STABLE'
 *
 * @package   ouwiki
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionheading'] = 'Ações';
$string['add'] = 'Adicionar';
$string['addannotation'] = 'Adicionar anotação';
$string['addedbegins'] = '[Início do texto adicionado]';
$string['addedends'] = '[Fim do texto adicionado]';
$string['addnewsection'] = 'Adicionar uma nova seção a esta página';
$string['advice_annotate'] = '<p> Anotar a página abaixo. </p><ul><li> Para anotar clique em um dos marcadores de anotação e digite o texto desejado. </li><li> Anotações de novos e existentes podem ser apagados, removendo todo o texto no formulário abaixo. </li></ul>';
$string['advice_diff'] = 'A versão antiga está exibida a esquerda<span class=\'accesshide\'> sobre o texto "Versão antiga"</span>, onde o texto retirado está destacado. O texto adicionado está indicado na nova versão a direita<span class=\'accesshide\'> Sobre o texto "Nova versão"</span>.<span class=\'accesshide\'> Cada mudança está indicada por um par de imagens antes e depois do texto adicionado ou apagado.</span>';
$string['advice_edit'] = '<p>Edite a página abaixo</p>
<ul>
<li>Faça um link para uma nova página digitando o título da página entre colchetes duplos: [[Nome da Página]]. O link se tornará ativo assim que as alterações forem salvas.</li>
<li>Para criar uma nova página, clicar sobre um link criado seguindo as instruções do passo anterior. $a</li>
</ul>
</p>';
$string['advice_history'] = '<p>A tabela abaixo exibe todas as mudanças efetuadas na <a href="$a">página atual</a>.</p>
<p>Você pode ver a versão antiga ou visualizar as alterações de uma versão em particular. Se você quiser comparar quaisquer duas verões, selecione os marcadores correspondentes e clique \'Comparar selecionadas\' .</p>';
$string['advice_missingpage'] = 'Essa página está linkada, mas ainda não foi criada.';
$string['advice_missingpages'] = 'Essas páginas estão linkadas mas ainda não foram criadas.';
$string['advice_viewdeleted'] = 'Você está visualizando uma versão apagada dessa página.';
$string['advice_viewold'] = 'Você está visualizando uma versão antiga dessa página.';
$string['advice_wikirecentchanges_changes'] = '<p>A tabela abaixo exibe todas as mudanças feitas a qualquer página desse wiki, começando pelas últimas mudanças. A versão mais recente de cada página está destacada.</p><p>Utilizando os links você pode ver uma página tal qual ela era depois de cada mundança, e ver o que foi alterado</p>';
$string['advice_wikirecentchanges_changes_nohighlight'] = '<p>A tabela abaixo exibe todas as mudanças feitas a qualquer página desse wiki, começando pelas últimas mudanças.</p>
<p>Utilizando os links você pode ver uma página tal qual ela era depois de cada mundança, e ver o que foi alterado.</p>';
$string['advice_wikirecentchanges_pages'] = '<p>Essa tabela exibe quando cada página foi adicionada ao wiki, começando pela mais recentemente criada</p>';
$string['ajaxnotenabled'] = 'AJAX não está habilitado no seu perfil';
$string['allowediting_help'] = '<p> Se você ativar esta opção, o wiki entra modo de somente leitura até a data determinada. Em usuários modo de somente leitura pode ver páginas, navegue entre eles, ver a história, e participar de discussões, mas eles não podem editar páginas. </p><h2> Impedir a edição de </h2><p> Se você ativar esta opção, o wiki entra modo de somente leitura a partir da data determinada. </p>';
$string['annotate'] = 'Anotar';
$string['annotatingpage'] = 'Anotando página';
$string['annotationmarker'] = 'Marcador da anotação';
$string['annotations'] = 'Anotações';
$string['annotationsystem'] = 'Sistema de anotações';
$string['attachments'] = 'Anexos';
$string['cannotlockpage'] = 'A suas mudanças não foram salvos porque a página está bloqueada.';
$string['changebutton'] = 'Mudar';
$string['changedby'] = 'Alterado por';
$string['changes'] = 'alterações';
$string['changesnav'] = 'Alterações';
$string['collapseallannotations'] = 'Colapsar anotações';
$string['collapseannotation'] = 'Colapsar anotação';
$string['compare'] = 'Comparar';
$string['compareselected'] = 'Comparar selecionados';
$string['completionedits'] = 'Usuário precisa editar:';
$string['completioneditsgroup'] = 'Edições requeridas';
$string['completioneditshelp'] = 'edições requeridas para completar';
$string['completion_help'] = '<ul><li> Se você escolher &quot;Exigir novas páginas&quot;, então o wiki será marcado como completo para o usuário uma vez que criaram o número especificado de páginas. Com esta opção, os usuários têm que criar páginas a partir do zero, se alguém cria a página e depois editá-lo, ele não conta. </li><li> Se você escolher &quot;Exigir edições&quot;, então o wiki será marcado como completo para o usuário, uma vez que fazer um certo número de edições. O usuário pode estar editando muitas páginas, ou editar os lotes mesma página de vezes; tanto conta. </li></ul><p> Note-se que escrever a primeira versão de uma página também conta como uma edição, por isso, se você quiser alguém para criar uma página <i>e</i> fazer pelo menos uma outra edição do que isso, definir páginas a 1 e edita a 2. </p>';
$string['completionpages'] = 'Usuário precisa criar nova página:';
$string['completionpagesgroup'] = 'Requer novas páginas';
$string['completionpageshelp'] = 'requer novas páginas para completar';
$string['contributions'] = '<strong>{$a->pages}</strong> nova página{$a->pagesplural}, <strong>{$a->changes}</strong> outras mudanças{$a->changesplural}.';
$string['contributionsbyuser'] = 'Contribuições de';
$string['contributionsgrouplabel'] = 'Grupo';
$string['countdowntext'] = 'Este wiki permite somente $a minutos para edição. Faça suas mudanças e clique Salvar ou Cancelar antes do tempo restante (a direita) atingir zero.';
$string['countdownurgent'] = 'Por favor termine ou cancele sua edição agora. Se você não salvar até que o tempo se esgote, suas mudanças serão salvas automaticamente.';
$string['create'] = 'Criar';
$string['createdbyon'] = 'criado por {$a->name} em {$a->date}';
$string['createlinkedwiki'] = 'Criando nova página';
$string['createlinkedwiki_help'] = 'Durante a edição, você pode digitar um link para uma página que ainda não existe, como [[Sapos.]] Em seguida, salve esta página e clique no link &quot;Frogs \'para criar a nova página. Também é possível criar novas páginas do separador \'Ver\' usando o \'Criar nova página\' caixa.';
$string['createnewpage'] = 'Criar nova página';
$string['createpage'] = 'Criar página';
$string['csvdownload'] = 'Baixar planilha em formato .CSV';
$string['current'] = 'atual';
$string['currentversion'] = 'Versão atual';
$string['currentversionof'] = 'Versão atual de';
$string['deletedbegins'] = '[Texto apagado abaixo]';
$string['deletedends'] = '[Fim do texto apagado]';
$string['deleteorphanedannotations'] = 'Remover anotações perdidas';
$string['deleteversionerror'] = 'Erro ao excluir versão da página';
$string['deleteversionerrorversion'] = 'Impossívle apagar. Versão da página não existe';
$string['detail'] = 'detalhe';
$string['diff_nochanges'] = 'Esta edição não modificou o texto atual, portanto nenhuma diferença será destacada abaixo. Pode haver mudanças na aparencia.';
$string['diff_someannotations'] = 'Esta edição não fez alterações no texto, por isso não há diferenças destacadas abaixo, mas as anotações foram alteradas. Pode ter alterações na aparência também.';
$string['displayversion'] = 'Versão do OU wiki: <strong>{$a}</strong>';
$string['downloadspreadsheet'] = 'Baixar como planilha';
$string['duplicatepagetitle'] = 'A nova página não pode ter o mesmo título que uma página existente.';
$string['editbegin'] = 'Permitir edição de';
$string['editbegin_help'] = '<p> Se você ativar esta opção, o wiki entra modo de somente leitura até a data determinada. Em usuários modo de somente leitura pode ver páginas, navegue entre eles, ver a história, e participar de discussões, mas eles não podem editar páginas. </p>';
$string['editedby'] = 'Modificado por {$a}';
$string['editend'] = 'Impedir edição de';
$string['editend_help'] = 'Se você ativar esta opção, o wiki entra modo de somente leitura a partir da data determinada.';
$string['editingpage'] = 'Editando página';
$string['editingsection'] = 'Editando seção: $a';
$string['editpage'] = 'Editar página';
$string['editsection'] = 'Editar seção';
$string['emptypagetitle'] = 'O título da nova página não pode estar vazio';
$string['emptysectiontitle'] = 'O nome da nova seção não pode estar vazio';
$string['endannotation'] = 'Final da anotação';
$string['entirewiki'] = 'Wiki inteiro';
$string['errorcoursesubwiki'] = 'Deve ser ‘nenhum grupo’, a não ser que a opção de sub-wikis é  ‘Um wiki por grupo’';
$string['error_export'] = 'Um erro aconteceu durante a exportação dos dados do wiki.';
$string['errorgroupssubwiki'] = 'Deve ser ativado se a opção de sub-wikis é "Um wiki por grupo"';
$string['excelcsvdownload'] = 'Baixar em formato compatível com excel (.csv)';
$string['expandallannotations'] = 'Expandir anotações';
$string['expandannotation'] = 'Expandir anotação';
$string['externaldashboardadd'] = 'Adicionar wiki ao "dashboard"';
$string['externaldashboardremove'] = 'Remover wiki do "dashboard"';
$string['feedalt'] = 'Assinar feed';
$string['feedchange'] = 'Modificado por {$a->name} (<a href=\'{$a->url}\'>visualizar mudanças</a>)';
$string['feeddescriptionchanges'] = 'Lista todas as alterações feitas no wiki.
Assine esse feed se quiser ficar a par das mudanças no wiki.';
$string['feeddescriptionhistory'] = 'Lista todas as mudanças a essa página do wiki. Assine o feed se quiser ficar a par de mudanças nesta página.';
$string['feeddescriptionpages'] = 'Lista todas as páginas desse wiki. Assine o feed para saber quando uma nova página do wiki for criada.';
$string['feeditemdescriptiondate'] = '{$a->main} em {$a->date}.';
$string['feeditemdescriptionnodate'] = '{$a->main}.';
$string['feednewpage'] = 'Criado por {$a->name}';
$string['feedsubscribe'] = 'Você pode assinar um feed contendo essas informações: <a href=\'{$a->atom}\'>Atom</a> or <a href=\'{$a->rss}\'>RSS</a>.';
$string['feedtitle'] = '{$a->course} wiki: {$a->name} - {$a->subtitle}';
$string['format_html'] = 'Visualização online';
$string['format_rtf'] = 'Baixar em formato rtf (compativel com Word)';
$string['format_template'] = 'Baixar como template de wiki';
$string['frompage'] = 'de $a';
$string['frompages'] = 'de $a...';
$string['gradesupdated'] = 'Notas atualizadas';
$string['hideannotationicons'] = 'Ocultar anotações';
$string['historycompareaccessibility'] = 'Seleção {$a->lastdate} {$a->createdtime}';
$string['historyfor'] = 'Histórico para';
$string['index'] = 'Índice do Wiki';
$string['jsajaxrequired'] = 'Esta página de anotações requer Javascript no seu Navegador e a habilitação das opções AJAX e Javascript no seu perfil ("Use funcionalidades da Web avançadas")';
$string['jsnotenabled'] = 'O seu Navegador não permite uso do Javascript';
$string['lastchange'] = 'Última alteração:{$a->date} / {$a->userlink}';
$string['linkedfrom'] = 'Páginas ligadas a esta';
$string['linkedfromsingle'] = 'Página ligada a esta';
$string['lockcancelled'] = 'Seu bloqueio de edição foi sobreposto por alguem que está editando esta página agora. Se você quiser manter suas alterações, por favor selecione e copie antes de clicar em Cancelar. Depois tente editar novamente.';
$string['lockediting'] = 'Bloquear wiki - sem edições';
$string['lockpage'] = 'Bloquear página';
$string['missingpages'] = 'Faltando páginas';
$string['modulename'] = 'Wiki';
$string['modulename_help'] = '<p> Um wiki é um sistema baseado na web que permite aos usuários editar um conjunto de páginas ligadas. No Moodle, você usaria normalmente um wiki quando você quer que seus alunos para criar conteúdo. </p><p> O wiki OU tem uma variedade de opções. Por favor, consulte a ajuda individual de cada item para obter mais informações. </p>';
$string['modulenameplural'] = 'Wiki';
$string['mustspecify2'] = 'Você tem que especificar exatamente duas versões para comparar.';
$string['myparticipation'] = 'Minha participação';
$string['newerversion'] = 'Versão mais nova';
$string['newpage'] = 'primeira versão';
$string['next'] = 'Modificações antigas';
$string['nextversion'] = 'Next: $a';
$string['noattachments'] = 'Sem anexos';
$string['nochanges'] = 'Usuários que não contribuiram';
$string['nojsbrowser'] = 'Lamento, mas você está usando um navegador que não é totalmente suportado.';
$string['nojsdisabled'] = 'O JavaScript está desabilitado nas configurações do seu navegador.';
$string['nojswarning'] = 'Como resultado, nós podemos somente manter essa página editável por $a->minutes minutos. Por favor salve suas modificações por $a->deadline (está atualmente em $a->now). Caso contrário outra pessoa pode editar a página e suas mudanças podem se perder';
$string['noparticipation'] = 'Sem participação para mostrar.';
$string['nousersingroup'] = 'O grupo selecionado não contem usuários.';
$string['nowikipages'] = 'Este Wiki não contem páginas';
$string['numedits'] = '$a edit(s)';
$string['numwords'] = 'Palavras: {$a}';
$string['olderversion'] = 'Versão mais antiga';
$string['oldversion'] = 'Versão antiga';
$string['onepageview'] = 'Você pode visualizar todas as páginas desse wiki uma vez para uma impressão conveniente ou para uma referencia permanente.';
$string['orphanedannotations'] = 'Anotações perdidas';
$string['orphanpages'] = 'Páginas sem links';
$string['ouwiki:addinstance'] = 'Adicionar novo OU Wiki';
$string['ouwiki:annotate'] = 'Permissão para anotar';
$string['ouwiki:deletepage'] = 'Apagar versões da página wiki';
$string['ouwiki:edit'] = 'Editar paginas wiki';
$string['ouwiki:grade'] = 'Dar notas a usuários que podem editar o Wiki';
$string['ouwiki:lock'] = 'Permissão para bloquear e des-bloquear páginas';
$string['ouwiki:overridelock'] = 'Sobrescrever páginas bloqueadas';
$string['ouwiki:view'] = 'Visualizar wikis';
$string['ouwiki:viewallindividuals'] = 'Subwiki por-usuário: ver todos';
$string['ouwiki:viewcontributions'] = 'Ver lista de construbuições organizada por usuário';
$string['ouwiki:viewgroupindividuals'] = 'Subwiki por-usuário: visualizar mesmo grupo';
$string['ouwiki:viewparticipation'] = 'Ver participação de todos os usuários que tem acesso ao Wiki';
$string['overridelock'] = 'Sobrepor bloqueio';
$string['overviewnumentrysince'] = 'novas alterações no wiki desde o último login.';
$string['overviewnumentrysince1'] = 'nova alteração no wiki desde o último login';
$string['page'] = 'Página';
$string['pagedeletedinfo'] = 'Algumas versões apagadas são mostradas na lista abaixo. Estas estão visíveis somente ara usuários com permissão para apagar. Usuários comuns não podem vê-los.';
$string['pagedoesnotexist'] = 'Esta página ainda não existe no wiki.';
$string['pageedits'] = 'Edições de página';
$string['pagelockeddetails'] = '{$a->name} começou a editar esta página às {$a->lockedat}, e continua sendo editado {$a->seenat}. Você não pode editar até que ele termine.';
$string['pagelockeddetailsnojs'] = '{$a->name} começou a editar esta página às {$a->lockedat}. Ele tem até {$a->nojs} para editar. Você não pode editar até que ele termine.';
$string['pagelockedoverride'] = 'Você tem acesso especial para cancelar a edição e desbloquear a página. Se você fizer isso, as alterações feitas pelo usuário que está editando serão perdidas. Avalie com cuidado antes de clicar no botão Sobrepor';
$string['pagelockedtimeout'] = 'O tempo que o usuário atual tem para finalizar a edição termina às $a';
$string['pagelockedtitle'] = 'Esta página foi editada por mais alguem.';
$string['pagenameisstartpage'] = 'O nome da página é igual ao nome da página principal. Use um nome diferente.';
$string['pagenametoolong'] = 'O nome da página é muito longo. Use um nome de página mais curto';
$string['pagescreated'] = 'Páginas criadas';
$string['participation'] = 'Participação';
$string['participationbyuser'] = 'Participação por usuário';
$string['pluginadministration'] = 'Administração do OU Wiki';
$string['pluginname'] = 'OU Wiki';
$string['preview'] = 'Pré-visualizar';
$string['previewwarning'] = 'As seguintes pré-visualizações';
$string['previous'] = 'Novas mudanças';
$string['previousversion'] = 'Anterior: $a';
$string['recentchanges'] = 'Últimas edições';
$string['returntohistory'] = '(<a href=\'$a\'>Retornar a visualização do histórico</a>.)';
$string['returntopage'] = 'Retornar à página do wiki';
$string['returntoview'] = 'Visualizar página atual';
$string['revert'] = 'Reverter';
$string['reverterrorcapability'] = 'Você não tem permissão para reverter para uma versão anterior';
$string['reverterrorversion'] = 'Impossível reverter para uma versão não existente da página';
$string['revertversion'] = 'Reverter';
$string['revertversionconfirm'] = '<p>Esta página retornará à versão de $a, descartando todas as mudanças feitas desde então. Entretanto, as mudanças descartadas estarão disponíveis na página do histórico.</p><p>Você tem certeza que quer reverter para essa versão da página?</p>';
$string['savedat'] = 'Salvo em $a';
$string['savedby'] = 'salvo por $a';
$string['savefailcontent'] = 'Sua versão da página está exibida abaixo para que você possa copiar e colar as partes relevantes em um outro programa. Se você quiser colocar suas modificações mais tarde no wiki, seja cauteloso para não sobrescrever o trabalho de outra pessoa.';
$string['savefaildesynch'] = 'Enquanto você estava editando esta página, alguém conseguiu fazer uma mudança.
(Isso pode acontecer quando você está usando um navegador obsoleto ou com
Javascript desligado.) Infelizmente, as alterações não podem ser salvos porque isso iria substituir o
alterações da outra pessoa.';
$string['savefaillocked'] = 'Enquanto você estava editando esta página, alguém obteve o bloqueio de página.
(Isso pode acontecer quando você está usando um navegador obsoleto ou com
Javascript desligado.) Infelizmente, as alterações não podem ser salvas no momento.';
$string['savefailtitle'] = 'Página não pode ser salva';
$string['savegrades'] = 'Salvar notas';
$string['savetemplate'] = 'Salvar template wiki';
$string['search'] = 'Buscar wiki';
$string['search_help'] = 'Digite o termo de pesquisa e pressione Enter ou clique no botão. Para buscar frases exatas utilize aspas. Para excluir uma palavra inserir um hífen imediatamente antes da palavra. Exemplo: o termo de pesquisa <tt>picasso-escultura &quot;primeiras obras&quot;</tt> irá retornar resultados para \'picasso\' ou \'primeiras obras\' a frase, mas vai excluir itens que contêm &quot;escultura&quot;.';
$string['seedetails'] = 'Histórico completo';
$string['showannotationicons'] = 'Mostrar anotações';
$string['showwordcounts'] = 'Mostrar contagem de palavras';
$string['showwordcounts_help'] = 'Se ligado, em seguida, as palavras contam para as páginas serão calculados e exibidos na parte inferior do conteúdo principal.';
$string['sizewarning'] = 'Esta página está ficando muito grande, prejudicando o desempenho. Se for possível, considere separar o conteúdo em partes, cada na sua página, apontando "links" a partir desta página.';
$string['startpage'] = 'Página inicial';
$string['startpagedoesnotexist'] = 'A página inicial do wiki aina não foi criada.';
$string['subwikis'] = 'Sub-wikis';
$string['subwikis_groups'] = 'Um wiki por grupo';
$string['subwikis_help'] = '<ul><li> <strong>Wiki único para curso</strong> <br /> Este wiki comporta-se como um wiki único. Todo mundo no curso vê as mesmas páginas. </li><li> <strong>Um wiki por grupo</strong> <br /> Membros de cada grupo ver uma cópia totalmente separado do wiki (sub-wiki) específico para o seu grupo. Você só pode ver páginas criadas por pessoas do mesmo grupo. Se você estiver em mais de um grupo, ou você tem permissões que permitem que você visualize todos os grupos, você tem uma lista suspensa para escolher um grupo. </li><li> <strong>Wiki separada para cada usuário</strong> <br /> Cada usuário recebe um wiki totalmente diferente. Você só pode ver o seu próprio wiki, a menos que você tem permissões que permitem ver os outros, quando você começa uma lista suspensa para escolher um usuário. (Isto pode ser usado como uma maneira para que os alunos contribuam com trabalho, mas você deve considerar outras formas de conseguir isso, como a atividade de avaliação.) </li></ul><p> Note-se que a opção do grupo trabalha com o agrupamento escolhido. Ele vai ignorar grupos em outros grupos. </p>';
$string['subwikis_individual'] = 'Um wiki por usuário';
$string['subwikis_single'] = 'Um wiki por curso';
$string['summary'] = 'Resumo';
$string['summary_help'] = '<p> Se você digitar um resumo aparecerá na página inicial do wiki. O resumo aparece acima do texto normal wiki, editável e não pode-se ser editados pelos usuários. </p><p> Resumos são totalmente opcional e seu wiki pode não precisar de um. Se você não precisa de um resumo, basta deixar a caixa em branco. </p>';
$string['system'] = 'o sistema';
$string['tab_annotate'] = 'Anotar';
$string['tab_discuss'] = 'Discussão';
$string['tab_edit'] = 'Edição';
$string['tab_history'] = 'Histórico';
$string['tab_index_alpha'] = 'Alfabético';
$string['tab_index_changes'] = 'Todas as mudanças';
$string['tab_index_pages'] = 'Novas páginas';
$string['tab_index_tree'] = 'Estrutura';
$string['tab_view'] = 'Visualização';
$string['template'] = 'Template';
$string['template_help'] = '<p> Um modelo é um conjunto predefinido de páginas wiki. Quando um modelo é definido, o wiki começa com o conteúdo definido no modelo. </p><p> O modelo se aplica a cada subwiki, em &quot;Um wiki por grupo&quot; modo, por exemplo, wiki de cada grupo é iniciado com as páginas no modelo. </p><p> Para criar um modelo, escrever as páginas que você deseja em qualquer wiki, então visite a página de índice e clique em &quot;Salvar como modelo wiki&quot; botão. (Você também pode criar manualmente modelos em outro software, que é um formato extremamente simples XML Olhe para um modelo salvo para ver o formato.). </p><p> Você não pode mudar o modelo após o wiki foi criado. Se você quiser fazer isso, excluir o wiki inteiramente, em seguida, criar um novo usando o modelo. </p>';
$string['thispageislocked'] = 'Esta página está bloqueada e não pode ser editada.';
$string['timelocked_after'] = 'Este wiki está bloqueado não pode mais ser editado.';
$string['timelocked_before'] = 'Este wiki está atualmente bloqueado. Mas estará disponível para edição a partir de $a.';
$string['timeout'] = 'Tempo permitido para editar';
$string['timeout_help'] = '<p>
Se você selecionar um tempo limite, as pessoas de edição do wiki são permitidas apenas para editá-lo por um determinado tempo.
O wiki bloqueia páginas, enquanto eles estão sendo editados (de modo que duas pessoas não podem editar a mesma página
de uma só vez), para definir um tempo limite impede a wiki tornando bloqueado para os outros.
</ p>

<h3> que os usuários vêem </ h3>

<p>
Quando tempo limite é ativado, os usuários ver uma contagem quando editar uma página. Se a contagem regressiva atinge
zero, o seu navegador irá automaticamente salvar as alterações e parar de edição.
</ p>

Usuários <h3> Sem JavaScript habilitado </ h3>

<p>
Esta opção não tem efeito sobre os usuários que não têm o Javascript habilitado ou que têm navegadores antigos.
Um tempo limite de 15 minutos sempre se aplica a esses usuários. Quando editar uma página, ele exibe o tempo
por que deve salvá-lo, se não o fizerem, eles poderiam perder seus trabalhos.
</ p>

<h3> Por que você pode não precisar desta opção </ h3>

<p>
Mesmo quando esta opção estiver desligada, os bloqueios são automaticamente descartados nas seguintes situações após
um usuário começou a editar uma página:
</ p>

<ul>
<li> sem salvar as alterações ou cancelamento, o usuário se move para uma página diferente. </ li>
<li> O usuário fecha seu navegador. </ li>
<li> falhas do computador do usuário. </ li>
<li> O usuário perde a sua ligação à Internet. </ li>
</ ul>

<p>
Nestas situações, o bloqueio é removido automaticamente depois de cerca de dois minutos.
</ p>

<p>
Além disso, os tutores e funcionários têm curso (por padrão) a capacidade de substituir qualquer bloqueio a qualquer momento.
</ p>

<h3> que esta opção não faz </ h3>

<p>
Esta opção não parar de alguém segurando em uma página e impedindo que outros usuários editem-lo se
eles são muito determinado. Eles poderiam editar uma página e esperar até o tempo limite está prestes a expirar antes
salvar as alterações em seguida, muito rapidamente editá-lo novamente.
</ p>';
$string['timeout_none'] = 'Sem timeout';
$string['tryagain'] = 'Tente novamente';
$string['typeinpagename'] = 'Digite o nome da página aqui';
$string['typeinsectionname'] = 'Digite o título da seção aqui';
$string['undelete'] = 'Desfazer exclusão';
$string['unlockpage'] = 'Desbloquear a página';
$string['userdetails'] = 'Detalhe para {$a}';
$string['usergrade'] = 'Nota do usuário';
$string['userparticipation'] = 'Participação do usuário';
$string['viewdeletedversionerrorcapability'] = 'Erro ao visualizar versão da página';
$string['viewparticipationerrror'] = 'Não pode visualizar a participação do usuário';
$string['viewwikichanges'] = 'Mudanças para {$a}';
$string['viewwikistartpage'] = 'Ver {$a}';
$string['wikifor'] = 'Visualizando wiki para:';
$string['wikifullchanges'] = 'Visualizar lista completa de alterações';
$string['wikirecentchanges'] = 'Mudanças no wiki';
$string['wikirecentchanges_from'] = 'Mudanças no wiki (página $a)';
$string['words'] = 'Palavras';
$string['wordsadded'] = 'Palavras adicionadas';
$string['wordsdeleted'] = 'Palavras excluídas';
$string['wouldyouliketocreate'] = 'Você gostaria de criá-la?';
