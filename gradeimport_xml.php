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
 * Strings for component 'gradeimport_xml', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   gradeimport_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errbadxmlformat'] = 'Erro - XML mal formado';
$string['errduplicategradeidnumber'] = 'Erro - existem dois itens de nota com idnumber \'{$a}\' neste curso. Isto deveria ser impossível.';
$string['errduplicateidnumber'] = 'Erro - idnumber duplicado.';
$string['errincorrectgradeidnumber'] = 'Erro - idnumber \'{$a}\' do arquivo importado não é igual a nenhum item de nota.';
$string['errincorrectidnumber'] = 'Erro - idnumber incorreto.';
$string['errincorrectuseridnumber'] = 'Erro - idnumber \'{$a}\' do arquivo importado não confere com nenhum usuário.';
$string['error'] = 'Ocorreram erros';
$string['errorduringimport'] = 'Ocorreu um erro ao tentar importar: {$a}';
$string['fileurl'] = 'URL do arquivo remoto';
$string['fileurl_help'] = 'O campo URL do arquivo remoto é para a recuperação de dados de um servidor remoto, como um sistema de informação do estudante.';
$string['importxml'] = 'Importar XML';
$string['importxml_help'] = 'As notas podem ser importadas através de um arquivo XML contendo os números de ID de usuário e números de ID da Atividade. Para obter o formato correto, primeiro exporte alguns tipos de arquivo XML, em seguida, exiba o arquivo.';
$string['pluginname'] = 'Arquivo XML';
$string['xml:publish'] = 'Publicar notas importadas de XML';
$string['xml:view'] = 'Importar notas de XML';
