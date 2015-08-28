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
 * Strings for component 'url', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Escolha uma variável ...';
$string['clicktoopen'] = 'Clique o link {$a} para abrir o recurso';
$string['configdisplayoptions'] = 'Selecione todas as opções que devem estar disponíveis, configurações existentes não serão modificadas. Pressione a tecla CTRL para selecionar múltiplos campos.';
$string['configframesize'] = 'Quando uma página web ou um arquivo enviado é exibido dentro de um frame, este valor será a altura (em pixeis) do frame do topo (que contém a navegação)';
$string['configrolesinparams'] = 'Habilite caso deseje incluir nomes de papéis localizados na lista de parâmetros disponíveis.';
$string['configsecretphrase'] = 'Esta frase secreta é utilizada para produzir um valor criptografado que pode ser enviado para alguns servidores como parâmetro. O código criptografado é produzido por um valor md5 do endereço IP do usuário atual concatenado com sua frase secreta. Exemplo código = md5(IP.secretphrase) . Por favor note que isto não é confiável por que endereço IP pode mudar e é frequentemente compartilhada por diferentes computadores.';
$string['contentheader'] = 'Conteúdo';
$string['createurl'] = 'Criar uma URL';
$string['displayoptions'] = 'Opções de exibição disponíveis';
$string['displayselect'] = 'Exibir';
$string['displayselectexplain'] = 'Escolha o tipo de exibição, infelizmente nem todos os tipos são adequados para todas as URLs.';
$string['displayselect_help'] = 'Esta definição, juntamente com o tipo de arquivo URL,  determina como a URL será exibida, caso o navegador permita incorporação. As opções podem incluir:

* Automática - A melhor opção de exibição para a URL é automaticamente seleccionada
* Incorporar - A URL é exibido dentro da página, abaixo da barra de navegação em conjunto com a descrição da URL e todos os blocos
* Forçar download - O usuário é solicitado a baixar o arquivo da URL
* Abrir - Somente a URL é exibida na janela do navegador
* Em pop-up - A URL é exibida em uma nova janela do navegador sem menus nem barra de endereços
* No frame - A URL é exibida em um quadro abaixo da barra de navegação e descrição da URL
* Nova janela - A URL é exibida em uma nova janela do navegador com menus e uma barra de endereços';
$string['externalurl'] = 'URL externa';
$string['framesize'] = 'Altura do frame';
$string['invalidstoredurl'] = 'Impossível mostrar este recurso pois a URL é inválida.';
$string['invalidurl'] = 'A URL inserida é inválida';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'O módulo de URL permite que um professor para fornecer um link de web como um recurso curso. Tudo o que está online disponível gratuitamente, tais como documentos ou imagens, pode ser ligado a, a URL não tem que ser a home page de um site. A URL de uma página web em particular pode ser copiado e colado ou um professor pode usar o seletor de arquivo e escolha um link de um repositório, como Flickr, YouTube ou Wikipédia (dependendo de qual repositórios estão habilitados para o site). Há uma série de opções de exibição para a URL, como embutidos ou abrir em uma nova janela e opções avançadas de informação que passa, tal como o nome de um aluno, para a URL, se necessário.';
$string['modulenameplural'] = 'URLs';
$string['page-mod-url-x'] = 'Qualquer URl do módulo página';
$string['parameterinfo'] = '&amp;parâmetro=variável';
$string['parametersheader'] = 'Variáveis de URL';
$string['parametersheader_help'] = 'Algumas variáveis internas do Moodle serão automaticamente adicionadas a URL. Digite seu nome para o parâmetro em cada caixa de texto e depois selecione a variável necessária correspondente.';
$string['pluginadministration'] = 'Módulo de administração de URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Altura da janela pop-up (em pixels)';
$string['popupheightexplain'] = 'Especifica a altura padrão de janelas pop-up.';
$string['popupwidth'] = 'Largura da janela pop-up (em pixels)';
$string['popupwidthexplain'] = 'Especifica a largura padrão de janelas pop-up.';
$string['printintro'] = 'Exibir descrição da URL';
$string['printintroexplain'] = 'Exibe a descrição URL abaixo de conteúdo? Alguns tipos de exibição não podem exibir a descrição, mesmo se estiverem ativados';
$string['rolesinparams'] = 'Incluir nomes de papéis nos parâmetros';
$string['serverurl'] = 'URL do servidor';
$string['url:addinstance'] = 'Adicionar novo recurso URL';
$string['url:view'] = 'Visualizar URL';
