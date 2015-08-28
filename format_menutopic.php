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
 * Strings for component 'format_menutopic', language 'pt_br', branch 'MOODLE_27_STABLE'
 *
 * @package   format_menutopic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionadd_sheet_daughter_sheetedit'] = 'Adicionar ao nível inferior';
$string['actionadd_sheet_sister_sheetedit'] = 'Adicionar ao mesmo nível';
$string['actiondeleteconfirm_sheet_sheetedit'] = 'Se você excluir o item vai apagar todos os itens do nível inferior. Você tem certeza que deseja continuar?';
$string['actiondelete_sheet_sheetedit'] = 'Excluir';
$string['actiondown_sheet_sheetedit'] = 'Mover para baixo';
$string['actionleft_sheet_sheetedit'] = 'Mover para a esquerda';
$string['actionright_sheet_sheetedit'] = 'Mover para a direit';
$string['actionsave_sheet_sheetedit'] = 'Alterar dados do item';
$string['actions_sheet_sheetedit'] = 'Ações do item';
$string['actionup_sheet_sheetedit'] = 'Mover para cima';
$string['config_editmenu'] = 'Configuração';
$string['config_editmenu_title'] = 'Configuração do menu';
$string['csscode'] = 'Código CSS';
$string['cssdefault'] = 'Incluir estilos CSS padrão';
$string['cssdefault_help'] = 'Define se estilos CSS são incluídos por padrão para o menu. Desativar esta opção pode ser útil para incluir personalizado estilos por opção <b>&quot;(CSS) modelo de estilos&quot;</b>';
$string['csstemplate'] = 'Sobre: estilos CSS';
$string['csstemplate_editmenu'] = 'Estilos de modelos (CSS)';
$string['csstemplate_editmenu_title'] = 'Estilos CSS';
$string['csstemplate_help'] = 'Permite incluir estilos CSS personalizados que você pode definir uma aparência personalizada gráfico para o menu <p> Um exercício simples de usar o modelo de estilos será: </p><div style=" white-space:nowrap; font-size: 12px; border: 1px solid #666; padding: 5px; background-color: #CCC"> # Id_menu_box {margin-bottom: 10px;} </div><p> Com o código anterior, o menu é separada 10px partir do fundo, de acordo com a posição definida para o menu. </p><p> <strong>Nota:</strong> <ul><li> O identificador (ID) da camada (div) que o menu contém é <strong>id_menu_box.</strong> Estes dados podem ser úteis para manipular os estilos de menu sem afectar os outros componentes da página. </li><li> É possível que, para fazer alterações nos estilos, eles não conseguem visualizar imediatamente na turma. Se assim for, ele deve atualizar a página. Em muitos navegadores, você pode fazê-lo pressionando a combinação de teclas Ctrl + F5. </li></ul></p>';
$string['currentsection'] = 'Este tópico';
$string['displaynavigation'] = 'Exibição da navegação';
$string['displaynavigation_help'] = 'Indica onde exibir a navegação entre as seções e na posição onde é mostrado.';
$string['displaynousedmod'] = 'Mostrar returmas não incluídos no modelo';
$string['displaynousedmod_help'] = 'Sobre: Mostrar returmas não incluídos no modelo';
$string['editmenu'] = 'Editar menu';
$string['end_editmenu'] = 'Encerrar edição do menu';
$string['error_jsontree'] = 'Erro na estrutura de dados retornados como composição da árvore';
$string['hidefromothers'] = 'Ocultar tópico';
$string['htmlcode'] = 'HTML';
$string['htmltemplate_editmenu'] = 'Modelo HTML';
$string['htmltemplate_editmenu_title'] = 'HTML';
$string['icons_templatetopic'] = 'Mostrar ícones em nomes de returmas';
$string['icons_templatetopic_help'] = 'Sobre: Mostrar ícones em nomes de returmas';
$string['jscode'] = 'Código';
$string['jsdefault'] = 'Incluir JavaScript padrão';
$string['jsdefault_help'] = 'Define se as funções de JavaScript que geram o menu estão incluídos. Desativa o javascript padrão pode ser útil se você quiser dar uma outra aparência para o menu usando o código Javascript que pode ser incluído no <b>&quot;modelo de Javascript&quot;.</b>';
$string['jstemplate'] = 'Código JavaScript';
$string['jstemplate_editmenu'] = 'Modelo de Javascript';
$string['jstemplate_editmenu_title'] = 'Código JavaScript';
$string['jstemplate_help'] = 'Permite definir o código JavaScript que irá trabalhar sobre o menu ou a página. Ele pode ser útil para definir comportamentos adicionais para o menu, ou mesmo a estrutura de um menu diferente do padrão. <p> <b>Notas:</b> <ul><li> O <b>id_menu_box</b> nome corresponde ao identificador div que contém o menu em HTML criado como aninhar listas, geralmente com as tags HTML: ul li y. </li><li> É possível que, para fazer alterações no JavaScript, eles não conseguem visualizar imediatamente na turma. Se assim for, ele deve atualizar a página. Em muitos navegadores, você pode fazê-lo pressionando a combinação de teclas Ctrl + F5. </li></ul></p>';
$string['linkinparent'] = 'Linkar raiz de submenu';
$string['linkinparent_help'] = '<p> Define o comportamento das opções de menu que atuam como raízes ou pais de um submenu. </p><p> Se for estabelecido em <b>Sim,</b> o item de menu funciona como um link para clicar sobre ele e abrir o URL que está definido na <b>&quot;árvore Menu&quot;.</b> Se for estabelecido em <b>Não,</b> o item de menu implanta os links filho a clicar sobre ele </p>';
$string['menuposition'] = 'Posição do menu';
$string['menuposition_help'] = '<p>Defines the position where the menu will appear in the course. The possible options are:
<ul>
	<li><b>Do not show:</b> menu is not generated</li>
	<li><b>Left:</b> menu is generated vertically in the column of the left blocks, if exist.</li>
	<li><b>Middle:</b> menu is generated horizontally as a bar in the middle part of the course, over the section</li>
	<li><b>Right:</b> menu is generated vertically in the column of the right blocks, if exist.</li>
</ul></p>';
$string['menuposition_hide'] = 'Não mostrar';
$string['menuposition_left'] = 'Esquerda';
$string['menuposition_middle'] = 'Meio';
$string['menuposition_right'] = 'Direito';
$string['name_sheet_sheetedit'] = 'Nome do item';
$string['navigationposition_both'] = 'Superior e inferior';
$string['navigationposition_bottom'] = 'Em baixo';
$string['navigationposition_nothing'] = 'Nada';
$string['navigationposition_top'] = 'Topo';
$string['next_topic'] = 'Próximo';
$string['nodesnavigation'] = 'Nós de navegação';
$string['nodesnavigation_help'] = '<p> Números de seção, separados por vírgulas <b>Exemplo:</b> 1,2,8,10,3. </p> . Se vazio, navegação padrão é usado. <p> Os números de seção não pode ser repetido, porque eles vão mostrar navegação a partir da primeira entrada coincidente. </p>';
$string['notsaved'] = 'Informação não pôde ser salva';
$string['page-course-view-topics'] = 'Qualquer página da turma principal em formato menutopic';
$string['page-course-view-topics-x'] = 'Qualquer página da turma no formato de menutopic';
$string['pluginname'] = 'Formato Menutopic';
$string['previous_topic'] = 'Anterior';
$string['savecorrect'] = 'As informações foram salvas com sucesso';
$string['sectionname'] = 'Tópico';
$string['separator_navigation'] = '-';
$string['showfromothers'] = 'Mostrar tópico';
$string['targetblank_sheet_sheetedit'] = 'Nova janela';
$string['targetself_sheet_sheetedit'] = 'Mesma janela';
$string['target_sheet_sheetedit'] = 'Destino do link';
$string['template_namemenutopic'] = 'Tópico {$a}';
$string['templatetopic_help'] = 'Sobre: Ativar título do tema como um modelo';
$string['title_panel_sheetedit'] = 'Editar árvore de itens';
$string['topic_sheet_sheetedit'] = 'Tópico de destino';
$string['tree_editmenu'] = 'Árvore do menu';
$string['tree_editmenu_title'] = 'Configuração do árvore do menu';
$string['tree_struct'] = 'Estrutura da árvore';
$string['tree_struct_help'] = '<p> A base do menu é uma estrutura de árvore onde cada ramo ou folha de árvore pode ser associado a uma URL. O URL pode ser externa ou directamente ligada a uma secção da turma. Ao assinar a primeira vez para definir a árvore de secção, a plataforma sugere uma estrutura linear, sem ramificações, com uma quantidade de folhas de igual ao número de secções do turma. <P />
<p> Para alterar as propriedades de uma folha, clique em seu nome, e ela vai aparecer uma janela onde você pode: realizar algumas ações para mover as folhas, eliminar a folha selecionada, crie uma nova planilha ou atualizar os dados da folha de <. / p>
<p> Entre as opções que você pode fazer sobre a folha são: </ p>
<ul>
    <li> <strong> Mover uma folha para a esquerda: </ strong> é feito selecionando a seta apontando para a esquerda. Converte a folha na irmã da folha que contém (folha de pai). Ele só está disponível se a folha é filha de uma outra folha, nunca se está no ramo principal. </ Li>
    <li> <strong> Mover uma folha para a direita: </ strong> é feito selecionando a seta apontando para a direita. Converte para a folha da filha da folha anterior. Ela não está disponível para a primeira folha do ramo principal. </ Li>
    <li> <strong> uma folha: </ strong> é feito selecionando a seta apontando para cima. Altera a ordem de uma folha de colocá-lo antes de seu irmão inmediately anterior. Ela não está disponível para a primeira folha de um ramo. </ Li>
    <li> <strong> baixo de uma folha: </ strong> é feito selecionando a seta apontando para baixo. Altera a ordem de uma folha de colocá-lo depois de seu irmão inmediately seguinte. Ela não está disponível para a última folha de um ramo. </ Li>
    <li> <strong> Excluir uma folha:. </ strong> é feito selecionando os Exclui X. a folha selecionada e todas as folhas que contém </ li>
</ Ul>
<p> O <strong> opção "Adicionar uma nova folha" </ strong> cria uma cópia da folha de selecionado e adiciona-la como sua filha. Filha folhas não são copiadas, apenas o selecionado. </ P>
<p> O <strong> opção "Alterar dados da folha de" </ strong> atualiza os valores selecionados para as propriedades da folha selecionada. As propriedades que podem ser modificados são: </ p>
<ul>
    <li> nome Folha <strong>:. </ strong> a marca que aparece para esta folha no menu </ li>
    <li> secção <strong> Alvo: </ strong> Se a folha é usada para uma secção de turma, esta opção indica que a secção será o seleccionado. Se uma seção é selecionada, uma URL externa não pode ser selecionado para que direcionam o link da opção no menu. </ Li>
    <li> <strong> URL: </ strong> indica um URL para o qual fará referência à opção de menu. É só podem ser especified se uma secção alvo não foi seleccionada. </ Li>
    <li> alvo ligação <strong>: </ strong> Indica se você deseja abrir o link, a seção ou a URL externa, em uma nova janela ou na mesma janela. Se uma opção não for selecionada, o link será aberto na mesma janela. </ Li>
</ Ul>
<p> As mudanças realizadas no menu são armazenadas somente para selecionar o <strong> opção "Salvar alterações" </ strong> na parte inferior da página. </ p>';
$string['url_sheet_sheetedit'] = 'URL';
