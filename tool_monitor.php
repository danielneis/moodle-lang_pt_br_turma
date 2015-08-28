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
 * Strings for component 'tool_monitor', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Adicionar nova regra';
$string['allevents'] = 'Todos os eventos';
$string['allmodules'] = 'Todos os módulos';
$string['area'] = 'Área';
$string['areatomonitor'] = 'Área para monitorar';
$string['cachedef_eventsubscriptions'] = 'Este armazena a lista de assinaturas de eventos para cursos individuais';
$string['contactadmin'] = 'Contate o seu administrador para habilitá-lo.';
$string['core'] = 'Core';
$string['currentsubscriptions'] = 'Suas assinaturas atuais';
$string['defaultmessagetemplate'] = 'Nome da regra: {rulename}
Descrição: {description}
Nome do evento: {eventname}';
$string['deleterule'] = 'Apagar regra';
$string['deletesubscription'] = 'Deixar de monitorar';
$string['description'] = 'Descrição:';
$string['disablefieldswarning'] = 'Alguns campos não podem ser editados pois esta regra já tem assinaturas.';
$string['duplicaterule'] = 'Duplicar regra';
$string['editrule'] = 'Editar regra';
$string['enablehelp'] = 'Habilitar/desabilitar o monitoramento de eventos';
$string['enablehelp_help'] = 'O monitoramento de eventos deve estar habilitado para que você possa criar e assinar as regras. Note que habilitar o monitoramento de eventos pode afetar o desempenho do seu site.';
$string['errorincorrectevent'] = 'Por favor selecione um evento relacionado ao plugin selecionado';
$string['event'] = 'Evento';
$string['eventnotfound'] = 'Evento não encontrado';
$string['eventrulecreated'] = 'Regra criada';
$string['eventruledeleted'] = 'Regra apagada';
$string['eventruleupdated'] = 'Regra atula';
$string['eventsubcreated'] = 'Assinatura criada';
$string['eventsubcriteriamet'] = 'Critério de assinatura atingido';
$string['eventsubdeleted'] = 'Assinatura apagada';
$string['freqdesc'] = '{$a->freq} vez(es) em minutos {$a->mins}';
$string['frequency'] = 'Frequência';
$string['frequency_help'] = 'O número de eventos dentro de um determinado período de tempo necessário para que uma mensagem de notificação seja enviada.';
$string['inminutes'] = 'em minutos';
$string['invalidmodule'] = 'Módulo inválido';
$string['manage'] = 'Gerenciar';
$string['managerules'] = 'Regras de monitoramento de eventos';
$string['manageruleslink'] = 'Você pode gerenciar regras da página {$a}.';
$string['managesubscriptions'] = 'Monitoramento de eventos';
$string['managesubscriptionslink'] = 'Você pode se inscrever para as regras da página {$a}.';
$string['messageprovider:notification'] = 'Notificações de assinaturas de regras';
$string['messagetemplate'] = 'Modelo de mensagem';
$string['messagetemplate_help'] = 'Este é o conteúdo da mensagem que será enviada aos usuários quando estiverem reunidas as condições dadas da regra. Você está autorizado a usar seguintes modelos neste.
<br /> {link} - Link para o local onde o evento aconteceu.
<br /> {modulelink} - Link para o módulo onde o evento aconteceu.
<br /> {rulename} - Nome desta regra.
<br /> {description} - Descrição da regra.
<br /> {eventname} - Nome do evento associado à regra.';
$string['moduleinstance'] = 'Instância do módulo';
$string['monitordisabled'] = 'Monitoramento de eventos está atualmente desabilitado.';
$string['monitorenabled'] = 'Monitoramento de eventos está habilitado.';
$string['monitor:managerules'] = 'Gerenciar regras de monitoramento de eventos';
$string['monitor:managetool'] = 'Habilitar/desabilitar o monitoramento de eventos';
$string['monitor:subscribe'] = 'Assinar regras de monitoramento de eventos';
$string['norules'] = 'Não há regras para assinar.';
$string['pluginname'] = 'Monitoramento de ventos';
$string['processevents'] = 'Processar eventos';
$string['ruleareyousure'] = 'Tem certeza de que deseja excluir regra "{$a}"?';
$string['ruleareyousureextra'] = 'Existem {$a} assinaturas a esta regra que também serão excluídas.';
$string['rulecopysuccess'] = 'Regra duplicada com sucesso';
$string['ruledeletesuccess'] = 'Regra apagada com sucesso';
$string['rulehelp'] = 'Detalhes da regra';
$string['rulehelp_help'] = 'Esta regra de escuta para o tempo em que o evento {$a->frequency} \'{$a->eventname}\' em \'{$a->eventcomponent}\' tenha sido accionad em {$a->minutes} minuto (s).';
$string['rulename'] = 'Nome da regra';
$string['rulenopermission'] = 'Você não tem permissão para se inscrever em qualquer evento.';
$string['rulenopermissions'] = 'Você não tem permissões para "{$a} uma regra"';
$string['rulescansubscribe'] = 'Regras que você pode assinar';
$string['selectacourse'] = 'Escolher um curso';
$string['selectcourse'] = 'Visite este relatório no nível curso para obter uma lista de possíveis módulos';
$string['subareyousure'] = 'Tem certeza de que deseja excluir esta assinatura para a regra "{$a}"?';
$string['subcreatesuccess'] = 'Assinatura criada com sucesso';
$string['subdeletesuccess'] = 'Assinatura removida com sucesso';
$string['subhelp'] = 'Detalhes da assinatura';
$string['subhelp_help'] = 'Esta subscrição escuta quando o evento \'{$a->eventname}\' foi desencadeada no tempo {$a->frequency} \'{$a->moduleinstance}\' (s) em {$a->minutes} minuto (s).';
$string['subscribeto'] = 'Assinar regra "{$a}"';
$string['taskcleanevents'] = 'Remove todos os eventos desnecessários do monitor de eventos';
$string['unsubscribe'] = 'Cancelar assinatura';
