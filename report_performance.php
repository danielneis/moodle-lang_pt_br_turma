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
 * Strings for component 'report_performance', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   report_performance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Backup automático';
$string['check_backup_comment_disable'] = 'O desempenho pode ser afetado durante o processo de backup. Se ativado, os backups devem ser agendados para horários de pico.';
$string['check_backup_comment_enable'] = 'O desempenho pode ser afetado durante o processo de backup. Os backups devem ser agendados para horários de pico.';
$string['check_backup_details'] = 'Ativando backup automatizado irá criar automaticamente arquivos de todos os cursos no servidor no momento que você especificou.  Durante esse processo, ele irá consumir mais recursos do servidor e pode afetar o desempenho.';
$string['check_cachejs_comment_disable'] = 'Se habilitado, o desempenho do carregamento da página é melhorado.';
$string['check_cachejs_comment_enable'] = 'Se estiver desabilitado, a página pode carregar lentamente.';
$string['check_cachejs_details'] = 'Javascript caching e compressão melhoram muito o desempenho do carregamento da página. É fortemente recomendado para zonas de produção.';
$string['check_debugmsg_comment_developer'] = 'Se for definido outro desenvolvedor, o desempenho pode ser melhorado ligeiramente.';
$string['check_debugmsg_comment_nodeveloper'] = 'Se for definido diretamente para um desenvolvedor, o desempenho pode ser afetado ligeiramente.';
$string['check_debugmsg_details'] = 'Raramente há qualquer vantagem em ir para nível Developer, a menos que você seja um desenvolvedor, caso em que é altamente recomendável. Depois de ter conseguido a mensagem de erro, copie e cole em algum lugar. para transformar Debug é altamente recomendado voltar para NONE. Mensagens de depuração podem dar pistas para um hacker quanto à configuração do seu site e pode afetar o desempenho.';
$string['check_enablestats_comment_disable'] = 'O desempenho pode ser afetado pelo processamento das estatísticas. Se ativado, as configurações de estatísticas devem ser definidas com cautela.';
$string['check_enablestats_comment_enable'] = 'O desempenho pode ser afetado pelo processamento das estatísticas. As configurações de estatísticas devem ser definidas com cuidado.';
$string['check_enablestats_details'] = 'Habilitando essa opção serão processados os logs em cronjob e algumas estatísticas serão reunidas. Dependendo da quantidade de tráfego em seu site, isso pode levar algum tempo. Durante esse processo, ele vai consumir mais recursos do servidor e pode afetar o desempenho.';
$string['check_themedesignermode_comment_disable'] = 'Se habilitado, imagens e folhas de estilo não serão armazenadas em cache, resultando degradação significativa no desempenho.';
$string['check_themedesignermode_comment_enable'] = 'Se desativado, imagens e folhas de estilo serão armazenados em cache, resultando melhoria significativa no desempenho.';
$string['check_themedesignermode_details'] = 'Isso é muitas vezes a causa de sites Moodle lentos. Em média, isso pode levar pelo menos duas vezes a quantidade da CPU para executar um site Moodle com o tema modo designer habilitado.';
$string['comments'] = 'Comentários';
$string['disabled'] = 'Desativado';
$string['edit'] = 'Editar';
$string['enabled'] = 'Ativado';
$string['issue'] = 'Emissão';
$string['morehelp'] = 'Mais ajuda';
$string['performancereportdesc'] = 'Este relatório lista os problemas que podem afetar o desempenho do site {$a}';
$string['performance:view'] = 'Ver o relatório de desempenho';
$string['pluginname'] = 'Descrição geral do desempenho';
$string['value'] = 'Valor';
