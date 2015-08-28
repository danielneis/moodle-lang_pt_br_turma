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
 * Strings for component 'qbehaviour_adaptive', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   qbehaviour_adaptive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disregardedwithoutpenalty'] = 'O envio foi inválido e descartado sem penalidades.';
$string['gradingdetails'] = 'Notas para este envio: {$a->raw}/{$a->max}.';
$string['gradingdetailsadjustment'] = 'Levando-se em conta as tentativas anteriores, isto dá <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailspenalty'] = 'Este envio acarretou em uma penalidade de {$a}.';
$string['gradingdetailspenaltytotal'] = 'Total de penalidades até agora: {$a}.';
$string['gradingdetailswithadjustment'] = 'Notas para o envio: {$a->raw}/{$a->max}. De acordo com as tentativas anteriores <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailswithadjustmentpenalty'] = 'Notas para o envio: {$a->raw}/{$a->max}. De acordo com as tentativas enteriores <strong>{$a->cur}/{$a->max}</strong>. Este envio trouxe uma penalidade de {$a->penalty}.';
$string['gradingdetailswithadjustmenttotalpenalty'] = 'Notas para esse envio: {$a->raw}/{$a->max}. De acordo com as tentativas enteriores <strong>{$a->cur}/{$a->max}</strong>. Este envio trouxe uma penalidade de {$a->penalty}. Total de penalidades até agora: {$a->totalpenalty}.';
$string['gradingdetailswithpenalty'] = 'Notas para esse envio: {$a->raw}/{$a->max}. Este envio trouxe uma penalidade de {$a->penalty}.';
$string['gradingdetailswithtotalpenalty'] = 'Notas para esse envio: {$a->raw}/{$a->max}. Este envio trouxe uma penalidade de{$a->penalty}. Total de penalidades até agora: {$a->totalpenalty}.';
$string['notcomplete'] = 'Incompleto';
$string['pluginname'] = 'Modo adaptativo';
