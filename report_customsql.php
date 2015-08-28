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
 * Strings for component 'report_customsql', language 'pt_br', branch 'MOODLE_29_STABLE'
 *
 * @package   report_customsql
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Adicionar uma novo curso';
$string['addcategorydesc'] = 'Para alterar o curso de um relatório, você deve editar o relatório. Aqui você pode editar textos de categoria, excluir uma categoria ou adicionar uma nova categoria.';
$string['addreport'] = 'Adicionar uma nova consulta';
$string['addreportcategory'] = 'Adicionar uma novo curso para os relatórios';
$string['anyonewhocanveiwthisreport'] = 'Qualquer um que possa ver este relatório (report/customsql:view)';
$string['archivedversions'] = 'Versões arquivadas desta consulta';
$string['at'] = 'em';
$string['automaticallymonthly'] = 'Programado, no primeiro dia de cada mês';
$string['automaticallyweekly'] = 'Programado, no primeiro dia de cada semana';
$string['availablereports'] = 'Consultas sob demanda';
$string['availableto'] = 'Disponível para {$a}.';
$string['backtoreportlist'] = 'Voltar à lista de consultas';
$string['categoryexists'] = 'Os nomes de cursos deve ser único, este nome já existe';
$string['categorynamex'] = 'Nome do curso: {$a}';
$string['changetheparameters'] = 'Alterar os parâmetros';
$string['customsql:definequeries'] = 'Definir consultas personalizadas';
$string['customsql:managecategories'] = 'Definir cursos personalizadas';
$string['customsql:view'] = 'Visualizar relatório de consulta personalizada';
$string['defaultcategory'] = 'Diversos';
$string['delete'] = 'Excluir';
$string['deleteareyousure'] = 'Tem certeza de que deseja excluir esta consulta?';
$string['deletecategoryareyousure'] = '<p> Tem certeza de que deseja apagar este curso? </p><p> Ela não pode conter quaisquer consultas. </p>';
$string['deletecategoryyesno'] = '<p> Você tem certeza que deseja apagar este curso? </p>';
$string['deletethiscategory'] = 'Apagar este curso';
$string['deletethisreport'] = 'Apagar esta consulta';
$string['description'] = 'Descrição';
$string['displayname'] = 'Nome de consulta';
$string['displaynamerequired'] = 'Você deve digitar um nome de consulta';
$string['displaynamex'] = 'Nome da consulta: {$a}';
$string['downloadthisreportascsv'] = 'Baixe estes resultados como CSV';
$string['edit'] = 'Adicionar/Editar';
$string['editcategory'] = 'Atualizar categoria';
$string['editingareport'] = 'Edição de uma consulta de banco de dados ad-hoc';
$string['editthiscategory'] = 'Editar este curso';
$string['editthisreport'] = 'Editar esta consulta';
$string['emailbody'] = 'Caro {$a}';
$string['emailink'] = 'Para acessar o relatório, clique neste link: {$a}';
$string['emailnumberofrows'] = 'Apenas o número de linhas e o link';
$string['emailresults'] = 'Coloque os resultados no corpo do email';
$string['emailrow'] = 'O relatório retornou {$a} linha';
$string['emailrows'] = 'O relatório retornou {$a} linhas';
$string['emailsent'] = 'Uma notificação de e-mail foi enviado para {$a}';
$string['emailsentfailed'] = 'E-mail não pode ser enviado para {$a}';
$string['emailsubject'] = 'Consulta {$a}';
$string['emailto'] = 'Enviar e-mail automaticamente para';
$string['emailwhat'] = 'O que enviar por email';
$string['enterparameters'] = 'Digite parâmetros para consulta de banco de dados ad-hoc';
$string['errordeletingcategory'] = '<p> Erro ao excluir um curso de consulta. </p><p> Ela deve estar vazia para excluí-la. </p>';
$string['errordeletingreport'] = 'Erro ao excluir uma consulta.';
$string['errorinsertingreport'] = 'Erro ao inserir uma consulta.';
$string['errorupdatingreport'] = 'Erro ao atualizar uma consulta.';
$string['invalidreportid'] = 'ID de consulta inválido {$a}';
$string['lastexecuted'] = 'Esta consulta foi executada pela última vez em {$a->lastrun}. Demorou {$a->lastexecutiontime}s para ser executada.';
$string['managecategories'] = 'Gerenciar cursos de relatório';
$string['messageprovider:notification'] = 'Notificações e alertas de relatórios SQL personalizado';
$string['morethanonerowreturned'] = 'Mais do que uma linha foi retornada. Esta consulta deve retornar uma linha.';
$string['nodatareturned'] = 'Esta consulta não retornou nenhum dado.';
$string['noexplicitprefix'] = 'Por favor, para incluir o nome da tabela <tt>{$a}</tt> prefixo no SQL. Em vez disso, colocar o nome da tabela como prefixo-un dentro <tt>{}</tt> caracteres.';
$string['noreportsavailable'] = 'Não há consultas disponíveis';
$string['norowsreturned'] = 'Nenhuma linha foi retornado. Esta consulta deve retornar uma linha.';
$string['noscheduleifplaceholders'] = 'Consultas contendo marcadores de posição só pode ser executado sob demanda.';
$string['nosemicolon'] = 'Não é permitido utilizar o caractere ; na consulta SQL';
$string['notallowedwords'] = 'Você não tem permissão para usar as palavras <tt>{$a}</tt> no SQL.';
$string['note'] = 'Notas';
$string['notrunyet'] = 'Esta consulta ainda não foi executado.';
$string['onerow'] = 'A consulta retorna uma linha, acumular os resultados uma linha de cada vez';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Consultas Ad-hoc à base de dados';
$string['queryfailed'] = 'Erro ao executar a consulta: {$a}';
$string['querylimit'] = 'Limitar linhas devolvidas';
$string['querylimitrange'] = 'O número deve estar entre 1 e {$a}';
$string['querynote'] = '';
$string['queryparameters'] = 'Os parâmetros de consulta';
$string['queryparams'] = 'Por favor insira os valores padrão para os parâmetros de consulta.';
$string['queryparamschanged'] = 'Os espaços reservados na consulta mudaram.';
$string['queryrundate'] = 'data de execução de consulta';
$string['querysql'] = 'Consulta SQL';
$string['querysqlrequried'] = 'Você deve digitar algum SQL.';
$string['recordlimitreached'] = 'Esta consulta atingiu o limite de linhas {$a}. Algumas linhas podem ter sido omitidos a partir do final.';
$string['reportfor'] = 'Consulta executada em {$a}';
$string['requireint'] = 'Inteiro obrigatório';
$string['runable'] = 'Executar';
$string['runablex'] = 'Execute: {$a}';
$string['schedulednote'] = 'Essas consultas são executadas automaticamente no primeiro dia de cada semana ou mês, para informar sobre a semana ou mês anterior. Esses links permitem que você visualize os resultados que já foram acumulados.';
$string['scheduledqueries'] = 'Consultas agendadas';
$string['selectcategory'] = 'Selecione o curso para este relatório';
$string['typeofresult'] = 'Tipo de resultado';
$string['unknowndownloadfile'] = 'Arquivo de download desconhecido.';
$string['userhasnothiscapability'] = 'Usuário \'{$a->username} &quot;não tem capacidade&quot; {$a->capability}\'. Por favor, apague este usuário da lista ou mudar a escolha em \'{$a->whocanaccess}\'.';
$string['userinvalidinput'] = 'Entrada inválida, é necessária uma lista de nomes de usuários separados por vírgula';
$string['usernotfound'] = 'Do usuário com o nome de usuário \'{$a}\' não existe';
$string['userswhocanconfig'] = 'Apenas os administradores (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Os usuários que podem ver os relatórios do sistema (moodle / local: viewreports)';
$string['verifyqueryandupdate'] = 'Verifique o texto da consulta SQL e atualizar o formulário';
$string['whocanaccess'] = 'Quem pode acessar esta consulta';
