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
 * Strings for component 'qtype_gapfill', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   qtype_gapfill
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerdisplay'] = 'Exibir respostas';
$string['answerdisplay_help'] = 'Arrastar e soltar exibe uma lista de palavras que podem ser arrastadas para as lacunas, São exibidas lacunas sem opções de palavras, arrastar e soltar exibe a mesma lista de respostas corretas (ou incorretas) para cada campo.';
$string['casesensitive'] = 'Caso sensitivo';
$string['casesensitive_help'] = 'Quando marcada, caso a resposta correta seja CAT, cat será marcada como resposta errada.';
$string['delimitchars'] = 'Caracteres delimitadores';
$string['delimitchars_help'] = 'Alterar os caracteres que delimitam um campo do padrão [ ], útil para questões de linguagens de programação';
$string['disableregex'] = 'Desabilitar REGEX';
$string['disableregex_help'] = 'Desabilitar expressões regulares e processar comparações de palavras. Isto pode ser utilizado para questões de HTML onde os caracteres: (&lt; e &gt) devem ser tratados literalmente e matematicamente onde símbolos como * devem ser vistos literalmente ao invés de ser tratado como expressão';
$string['displaydragdrop'] = 'Arrastar e soltar';
$string['displaydropdown'] = 'Caixa de seleção';
$string['displaygapfill'] = 'Preencher lacuna';
$string['duplicatepartialcredit'] = 'Crédito é parcial porque você tem respostas duplicadas';
$string['gapfill'] = 'Preencher lacuna';
$string['moreoptions'] = 'Mais opções';
$string['noduplicates'] = 'Sem duplicações';
$string['noduplicates_help'] = 'Quando marcada, cada resposta deve ser única, útil no caso em que cada campo tem o operador | exemplo: quais o as cores das medalhas olímpicas e cada campo tiver [ ouro | prata | bronze ], caso o estudante entre ouro em cada campo apenas o primeiro será marcado (os outros serão marcados). Isto funciona como um descarte de respostas duplicadas para propósitos de marcação';
$string['pleaseenterananswer'] = 'Por favor digite sua resposta';
$string['pluginname'] = 'Questão do tipo Preencher lacuna (gapfill)';
$string['pluginnameadding'] = 'Adicionando um';
$string['pluginnameediting'] = 'Editando Preencher lacuna';
$string['pluginname_help'] = 'Insira ao redor das palavras a serem completadas entre os caracteres. Ex.: O [gato] saltou no [arbusto]. Caso arbusto ou árvore forem aceitáveis utiliza [arbusto|árvore]. Os modos caixa de seleção ou arrastar e soltar permitem uma lista misturada que pode incluir palavras / distrações opcionais como resposta';
$string['pluginnamesummary'] = 'Menos características que o padrão do tipo Cloze, porém com sintaxe mais simples';
$string['questionsmissing'] = 'Você não incluiu nenhum campo no texto de sua questão';
$string['wronganswers'] = 'Distrações';
$string['wronganswers_help'] = 'Lista de palavras incorretas providenciadas para distrair a afastar da resposta correta. Cada palavra é separada por vírgulas, apenas aplica-se em modo arrastar/caixa de seleção (dragdrop/dropdowns)';
$string['yougotnrightcount'] = 'Seu número de lacunas preenchidas corretamente é {$a->num}';
