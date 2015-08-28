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
 * Strings for component 'engagementindicator_login', language 'pt_br', branch 'MOODLE_27_STABLE'
 *
 * @package   engagementindicator_login
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eavgsessionlength'] = 'Média de duração da sessão esperada (segundos)';
$string['eloginspastweek'] = 'Acessos esperados na semana passada';
$string['eloginsperweek'] = 'Acessos esperados por semana';
$string['etimesincelast'] = 'Tempo esperado desde último acesso (segundos)';
$string['localrisk'] = 'Risco Local';
$string['localrisk_help'] = 'O percentual risco deste login sozinho, em 100. O risco local é multiplicado pelo coeficiente de ponderação de login para formar a Contribuição de Risco.';
$string['logic'] = 'Lógica';
$string['logic_help'] = 'Este campo fornece algumas dicas sobre a lógica utilizada para se chegar ao valor de Risco Local.';
$string['maxrisktitle'] = 'Nunca acessou';
$string['pluginname'] = 'Atividade Login';
$string['reasonavgsessionlen'] = '0% de risco para uma média de sessões menor que {$a}, 100% para sessões com comprimento de 0';
$string['reasonloginspastweek'] = '0% de risco para mais de {$a} logins por semana. 100% para 0 logins na última semana';
$string['reasonloginsperweek'] = '0% de risco por se logar ao curso >= {$a} vezes por semana. 100% de risco para 0 logins por semana.';
$string['reasonnologin'] = 'Este usuário nunca se logou no curso, portanto está com o risco de 100%.';
$string['reasontimesincelogin'] = '0% de risco por ter acabo de se logar ao curso. Escala para o máximo de 100% de risco após {$a} dias.';
$string['riskcontribution'] = 'Contribuição de risco';
$string['riskcontribution_help'] = 'A quantidade de risco que este login em particular contribui para o risco global retornado pelo indicador de Login. Este é formado pela multiplicação de Risco Local com a ponderação de login. As contribuições de risco de cada sessão são somados para formar o risco global para o indicador.';
$string['sessionlength'] = 'Tempo da sessão (segundos)';
$string['weighting'] = 'Ponderação';
$string['weighting_help'] = 'Esta figura mostra a quantidade que este item contribui para o risco total para o indicador de Login. O risco local será multiplicado por este para formar a contribuição de risco.';
