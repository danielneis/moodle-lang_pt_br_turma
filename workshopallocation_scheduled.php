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
 * Strings for component 'workshopallocation_scheduled', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   workshopallocation_scheduled
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentstatus'] = 'Estado atual';
$string['currentstatusexecution'] = 'Status';
$string['currentstatusexecution1'] = 'Executado em {$a->datetime}';
$string['currentstatusexecution2'] = 'Para ser executado novamente em {$a->datetime}';
$string['currentstatusexecution3'] = 'Para ser executado em {$a->datetime}';
$string['currentstatusexecution4'] = 'Aguardando execução';
$string['currentstatusnext'] = 'Próxima execução';
$string['currentstatusnext_help'] = 'Em alguns casos, a atribuição é programado para ser executado automaticamente novamente mesmo que tenha sido já executado. Isso pode acontecer se o prazo de submissões foi prorrogado, por exemplo.';
$string['currentstatusreset'] = 'Reconfigurar';
$string['currentstatusreset_help'] = 'Salvando o formulário com essa caixa de seleção marcada resultará em redefinir o status atual. Toda a informação sobre a execução anterior será removido de modo a atribuição pode ser executado novamente (se estiver activado, supra).';
$string['currentstatusresetinfo'] = 'Marca a caixa e salve o formulário para reconfigurar o resultado da execução';
$string['currentstatusresult'] = 'Resultado recente da execução';
$string['enablescheduled'] = 'Habilitar alocação agendada';
$string['enablescheduledinfo'] = 'Alocar automaticamente observações no final da fase de submissão';
$string['pluginname'] = 'Alocação agendada';
$string['randomallocationsettings'] = 'Configurações da alocação';
$string['randomallocationsettings_help'] = 'Parâmetros para o método de amostragem aleatória são definidos aqui. Eles serão usados pelo plugin distribuição aleatória para a alocação real de submissões.';
$string['resultdisabled'] = 'Alocação agendada desabilitada';
$string['resultenabled'] = 'Alocação programada habilitado';
$string['resultexecuted'] = 'Sucesso';
$string['resultfailed'] = 'Alocação agendada habilitada';
$string['resultfailedconfig'] = 'Alocação programada incorretamente';
$string['resultfaileddeadline'] = 'Oficina não tem prazo definido submissões';
$string['resultfailedphase'] = 'Workshop não está em fase de envios';
$string['resultvoid'] = 'Nenhum envio foi alocado';
$string['resultvoiddeadline'] = 'Não depois do prazo submissões ainda';
$string['resultvoidexecuted'] = 'A alocação já foi executada';
$string['scheduledallocationsettings'] = 'Configurações de alocação agendada';
$string['scheduledallocationsettings_help'] = 'Se ativado, o método de atribuição prevista vai alocar automaticamente submissões para a avaliação no final da fase de submissão. O fim da fase pode ser definido em \'prazo Submissões\' a configuração da oficina. Internamente, o método de amostragem aleatória é executado com os parâmetros pré-definidos desta forma. Isso significa que a atribuição programada funciona como se o professor executada a atribuição aleatória-se no final da fase de apresentação utilizando as definições de atribuição abaixo. Note-se que a dotação programada * não * é executado, se você mudar manualmente o workshop para a fase de avaliação antes do prazo de inscrições. Você tem que alocar submissões-se nesse caso. O método de alocação prevista é particularmente útil quando usado juntamente com o recurso automático de comutação de fase.';
$string['setup'] = 'Configurar alocação agendada';
