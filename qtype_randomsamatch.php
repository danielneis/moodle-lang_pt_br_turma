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
 * Strings for component 'qtype_randomsamatch', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Opções de seleção disponíveis são insuficientes para essa questão, portanto, não está disponível neste questionário. Por favor, informe seu professor.';
$string['nosaincategory'] = 'Não existe nenhuma questão com resposta breve disponível na categoria escolhida \'{$a->catname}\'. Escolha uma categoria diferente ou crie algumas questões nesta categoria.';
$string['notenoughsaincategory'] = 'Existem apenas {$a->nosaquestions} questões com resposta breve na categoria escolhida \'{$a->catname}\'. Escolha outra categoria, adicione questões a esta categoria ou reduza o número de questões configuradas.';
$string['pluginname'] = 'Correspondência de resposta curta randomica';
$string['pluginnameadding'] = 'Incluindo questão de correspondência de resposta curta randômica';
$string['pluginnameediting'] = 'Editando questão de correspondência de resposta curta randômica';
$string['pluginname_help'] = 'Da perspectiva do aluno, esta questão parece uma questão associativa. A diferença é que a lista de nomes ou afirmações (perguntas) para associação são desenhadas de forma randômica a partir da categoria de questões da resposta curta. É preciso que haja um número suficiente de questões de resposta curta não utilizadas, caso contrário uma mensagem de erro será exibida.';
$string['pluginnamesummary'] = 'Como a questão associativa, mas criada randomicamente a partir da s questões de resposta curta em uma categoria particular.';
$string['randomsamatch'] = 'Associação aleatória de respostas curtas.';
$string['randomsamatchintro'] = 'Para cada uma das seguintes perguntas, marque a resposta correspondente no menu.';
$string['randomsamatchnumber'] = 'Número de questões para selecionar';
$string['subcats'] = 'Incluir subcategorias';
$string['subcats_help'] = 'Se marcada, as perguntas serão também escolhidas a partir de subcategorias.';
