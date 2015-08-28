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
 * Strings for component 'qtype_varnumericset', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   qtype_varnumericset
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Campos em branco para {no} mais respostas';
$string['addmorevariants'] = 'Acrescente mais {$a} campos em branco para mais variantes';
$string['addmorevars'] = 'Acrescente mais campos em branco para mais variáveis';
$string['ae_numericallycorrect'] = 'A sua resposta está quase correta. O valor e arredondamento estão corretos.';
$string['ae_numericallycorrectandwrongformat'] = 'A sua resposta está quase correta. O valor e arredondamento estão corretos, mas não é escrita em notação científica.';
$string['ae_roundingincorrect'] = 'A sua resposta está quase correta. Mas não está arredondado corretamente.';
$string['ae_roundingincorrectandwrongformat'] = 'A sua resposta está quase correta, mas ainda não está arredondada corretamente e não usou notação científica.';
$string['ae_toomanysigfigs'] = 'A sua resposta está quase correta, mas usou algarismos significativos demais.';
$string['ae_toomanysigfigsandwrongformat'] = 'A sua resposta está quase correta, mas usou algarismos significativos demais e não usou notação científica.';
$string['ae_wrongbyfactorof10'] = 'A sua resposta não está correta por um fator 10.';
$string['ae_wrongbyfactorof10andwrongformat'] = 'A sua resposta não está correta por um fator 10, e não usou notação científica.';
$string['answer'] = 'Resposta: {$a}';
$string['answermustbegiven'] = 'Deve dar uma resposta correta caso houver uma nota ou feedback';
$string['answerno'] = 'Resposta {$a}';
$string['autofirehdr'] = 'Dar feedback e uma nota parcial se resposta {$a} estiver parcialmente correta';
$string['calculatewhen'] = 'Quando calcular valores calculados';
$string['cannotrecalculate'] = 'Não é possível recalcular os valores para as variáveis calculadas porque há erros neste formulário. Conserte os error e poderá recalcular os valores';
$string['checknumerical'] = 'Se correto numericamente';
$string['checkpowerof10'] = 'Se a potência de 10 está errada';
$string['checkrounding'] = 'Se não for arredondado corretamente';
$string['checkscinotation'] = 'Se foi pedido notação científica mas não for usada';
$string['correctansweris'] = 'A resposta correta é: {$a}';
$string['correctansweriserror'] = '{$a->answer} <sup>+</sup>/<sub>-</sub> {$a->error}';
$string['correctanswerissigfigs'] = '{$a->answer} ({$a->sigfigs} algarismos significantivos)';
$string['correctanswers'] = 'Respostas corretas';
$string['error'] = 'Error aceitável +/-';
$string['errorreportedbyexpressionevaluator'] = 'Erro na avaliação da expressão: {$a}';
$string['expectingassignment'] = 'Você deve usar uma expressão matemática para atribuir um valor a uma \'Variável Calculada\'.';
$string['expectingvariablename'] = 'Aqui esperamos um nome de uma variável';
$string['expressionevaluatesasinfinite'] = 'O resultado é infinito';
$string['expressionevaluatesasnan'] = 'O resultado não é um número';
$string['expressionmustevaluatetoanumber'] = 'Deve dar uma expressão que pode ser avaliada como sendo um número, não uma designação';
$string['filloutoneanswer'] = 'Você deve fornecer pelo menos uma resposta. Respostas deixado em branco não serão usadas. \'*\' pode ser usado para indicar qualquer número. A primeira resposta correspondente será usado para determinar a pontuação e feedback.';
$string['forallanswers'] = 'Para todas as respostas';
$string['hintoverride'] = 'Se auto-check é ligada permitir outra tentativa, mas não mostrar esta dica ou aplicar esta penalidade';
$string['illegalthousandseparator'] = 'Usou um separador de milhar "{$a->thousandssep}" illegal na sua resposta. Somente aceitamos respostas com o separador decimal "{$a->decimalsep}".';
$string['notenoughanswers'] = 'Este tipo de pergunta requer pelo menos {$a} respostas';
$string['notolerancehere'] = 'Você não pode dar uma tolerância para este tipo de resposta';
$string['notvalidnumber'] = 'Você não digitou um número em um formato reconhecido.';
$string['notvalidnumberprepostfound'] = 'Por favor insira um número válido e nada mais.';
$string['options'] = 'Opções';
$string['pleaseenterananswer'] = 'Por favor insira uma resposta.';
$string['pluginname'] = 'Conjunto de variáveis numéricas';
$string['pluginnameadding'] = 'Acrescentar um Conjunto de variáveis numéricas';
$string['pluginnameediting'] = 'Editanto um Conjunto de variáveis numéricas';
$string['pluginname_help'] = 'Em resposta a uma questão o estudante entra com um número.

Os números usados na questão e usadas para calcular a resposta são escolhidos a partir de conjuntos predefinidos, que podem ser calculados a partir de expressões matemáticas.

Todas as expressões são calculados na hora da criação da questão ou de funções aleatórias e podem ser os mesmos para todos os estudantes.

Para uma questão sem variantes, com expressões calculadas na hora da aplicação e com valores aleatórios diferentes para cada usuário, veja o tipo de questão \'variável numérica\'.';
$string['pluginnamesummary'] = 'Permite respostas numéricas, questões podem ter \'variantes\' e expressões são calculados previamente para cada variante da questão';
$string['preandpostfixesignored'] = 'Apenas a parte numérica de sua resposta foi avaliada';
$string['questiontext'] = 'Enunciado da questão e variáveis embutidas';
$string['questiontext_help'] = 'É possível incorporar variáveis e expressões no enunciado da questão.

Tudo entre colchetes duplos será avaliada antes de ser mostrado. Por exemplo, se entrar com [[a]], o valor da variável a será mostrado. [[log(a)]] mostrará o log de a.

Pode determinar a visualização dos números usando código printf. Por exemplo, [[a,.3e]] mostrará o valor de a usando notação científica com 4 algarismos científicos';
$string['randomseed'] = 'String para agir como uma semente para randomização';
$string['recalculatenow'] = 'Recalcular agora';
$string['requirescinotation'] = 'Exigir notação científica';
$string['sigfigs'] = 'Algarismos significativos';
$string['syserrorpenalty'] = 'Para cada erro deduzir';
$string['unspecified'] = 'Indeterminado';
$string['usesuperscript'] = 'Usar entrada sobrescrita';
$string['varheader'] = 'Variável {no}';
$string['variant'] = 'Valor para a variante {$a}';
$string['variants'] = 'Value for variants';
$string['variants_help'] = 'Digite os valores para \'variáveis pré-definidas\'. Ou, se isto é uma \'variável calculada\' você vai ver os valores calculados exibidos aqui.

Para uma variável predefinida você deve digitar um valor para pelo menos uma variante da questão e para todas as variáveis predefinidas você deve preencher um número igual de caixas.

Moodle determina automaticamente quantas variantes a questão tem usando o número de variantes de variáveis pré-definidas foram preenchidos, ou, se não existem variáveis pré-definidas mas apenas variáveis calculadas, assumimos 5 variantes da questão.

Não é preciso preencher os campos em branco no final, eles estão lá para adicionar mais valores para as variantes para a questão, se necessário.';
$string['varname'] = 'Nome ou designação';
$string['varname_help'] = 'Para uma \'variável predefinida\' digite apenas um nome aqui, por exemplo \'a \'. Em seguida, insira os valores para esta variável para cada variante da questão.

Ou, para uma \'variável calculada\' entre com um nome da variável e atribuia um valor usando uma expressão,  por exemplo, \'b = a^4\' (onde\' a \'é uma variável definida anteriormente).

Se você deixar este campo em branco, os valores abaixo seão simplesmente ignorados.';
$string['varnumericset'] = 'Conjunto de variáveis numéricas';
$string['varnumericset_help'] = 'Em resposta a uma questão o estudante entra com um número.

Os números usados na questão e usadas para calcular a resposta são escolhidos a partir de conjuntos predefinidos, que podem ser calculados a partir de expressões matemáticas.

Todas as expressões são calculados na hora da criação da questão ou de funções aleatórias e podem ser os mesmos para todos os estudantes.

Para uma questão sem variantes, com expressões calculadas na hora da aplicação e com valores aleatórios diferentes para cada usuário, veja o tipo de questão \'variável numérica\'.';
$string['varnumericsetsummary'] = 'Permite respostas numéricas e a questão pode ter \'variantes\'. Expressões são calculadas para cada variante.';
$string['vartypecalculated'] = 'Variável calculada';
$string['vartypepredefined'] = 'Variável predefinida';
$string['youmustprovideavalueforallvariants'] = 'Por favor, preencha os campos em branco para todas as variáveis pré-definidas, ou seja. um valor para cada variável predefinida, para todos os variantes da questão que precisa.';
$string['youmustprovideavalueforatleastonevariant'] = 'É preciso dar um valor aqui.';
