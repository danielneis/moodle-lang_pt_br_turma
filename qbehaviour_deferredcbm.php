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
 * Strings for component 'qbehaviour_deferredcbm', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   qbehaviour_deferredcbm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisão';
$string['accuracyandbonus'] = 'Precisão + Bônus';
$string['assumingcertainty'] = 'Você não selecionou um nível de certeza. Considerando: {$a}.';
$string['averagecbmmark'] = 'Nota média CBM';
$string['basemark'] = 'Nota base {$a}';
$string['breakdownbycertainty'] = 'Distribuição por certeza';
$string['cbmbonus'] = 'Bônus CBM';
$string['cbmgradeexplanation'] = 'Para o CBM, a nota acima é calculada em relação ao máximo de todas as corretas em C=1.';
$string['cbmgrades'] = 'Notas CBM';
$string['cbmgrades_help'] = 'Com Certainty Based Marking (CBM) cada questão ficará correta com C = 1 (baixa certeza) atribuindo uma nota de 100%. As escalas podem ser tão elevadas como 300%, se todas as perguntas estão corretas com C = 3 (alta certeza). Equívocos (respostas erradas) escalas  muito mais inferiores do que as respostas erradas que são reconhecidas como incertas. Isso pode até mesmo levar a escalas negativas globais.

** Correção ** é a % correta, ignorando a certeza, mas ponderada para a marca de máximo de cada questão. Distinguindo com sucesso mais e menos respostas confiáveis é atribuída uma nota melhor do que selecionar a mesma certeza para cada questão. Isso se reflete no ** CBM Bonus **. ** Correção ** + ** CBM Bonus ** é uma medida melhor do conhecimento do que ** Correção **. Equívocos podem levar a um bônus negativo, uma prevenção é olhar atentamente para o que é e o que não é conhecido.';
$string['cbmmark'] = 'Nota CBM {$a}';
$string['certainty'] = 'Certeza';
$string['certainty1'] = 'C=1 (Inseguro: <67%)';
$string['certainty-1'] = 'Não tenho ideia';
$string['certainty2'] = 'C=2 (Razoavelmente certo: >67%)';
$string['certainty3'] = 'C=3 (Tenho certeza: >80%)';
$string['certainty_help'] = 'Marcação baseada na certeza requer que você indique o quão confiável você acha que sua resposta é. Os níveis disponíveis são:

Nível de certeza | C = 1 (Incerto) | C = 2 (Médio) | C = 3 (Certo)
---------------------- |------------------- | ----------------- | ---------------- Marca se correto|           1            |            2         |         3
Mark se errado   |           0            |           -2         |        -6
Probabilidade correto | <67%      |      67-80%     |    > 80%

Melhores marcas são ganhas por reconhecer a incerteza. Por exemplo, se você acha que há mais de um 1 em 3 chances de estar errado, você deve digitar C = 1 e evitar o risco de uma marca negativa.';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort-1'] = 'Não tenho ideia';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Não tenho ideia';
$string['foransweredquestions'] = 'Resultados para apenas as {$a} questões respondidas';
$string['forentirequiz'] = 'Resultados para todo o quiz ({$a} questões)';
$string['howcertainareyou'] = 'Certeza {$a->help}: {$a->choices}';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Respostas: {$a->responses}. Precisão: {$a->fraction}. (Intervalo ideal {$a->idealrangelow} até {$a->idealrangehigh}). Você está {$a->judgement} utilizando este nível de certeza.';
$string['noquestions'] = 'Sem respostas';
$string['overconfident'] = 'bastante confiante';
$string['pluginname'] = 'Feedback adiado com CBM';
$string['slightlyoverconfident'] = 'um pouco confiante';
$string['slightlyunderconfident'] = 'um pouco inseguro';
$string['underconfident'] = 'inseguro';
$string['weightx'] = 'Peso {$a}';
