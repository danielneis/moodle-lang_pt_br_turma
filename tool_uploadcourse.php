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
 * Strings for component 'tool_uploadcourse', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_uploadcourse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir deleção';
$string['allowdeletes_help'] = 'Se o campo "delete" é aceito ou não.';
$string['allowrenames'] = 'Permitir renomeação';
$string['allowrenames_help'] = 'Se o campo "rename" é aceito ou não.';
$string['allowresets'] = 'Permitir reconfiguração';
$string['allowresets_help'] = 'Se o campo "reset" é aceito ou não.';
$string['cachedef_helper'] = 'Cache de ajuda';
$string['cannotdeletecoursenotexist'] = 'Não é possível apagar um curso que não existe';
$string['cannotgenerateshortnameupdatemode'] = 'Não é possível gerar um nome breve quando atualizações estão permitidas';
$string['cannotreadbackupfile'] = 'Não é possível ler o arquivo de backup';
$string['cannotrenamecoursenotexist'] = 'Não é possível renomear um curso que não existe';
$string['cannotrenameidnumberconflict'] = 'Não é possível renomear o curso, o número ID conflita com um curso existente';
$string['cannotrenameshortnamealreadyinuse'] = 'Não é possível renomear o curso, o nome breve já está em uso';
$string['cannotupdatefrontpage'] = 'É proibido modificar a página inicial';
$string['canonlyrenameinupdatemode'] = 'Só é possível renomear um curso quando a atualização está habilitada';
$string['canonlyresetcourseinupdatemode'] = 'Só é possível reconfigurar um curso quando no modo de atualização';
$string['couldnotresolvecatgorybyid'] = 'Não foi possível resolver a categoria pelo ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Não foi possível resolver a categoria pelo número ID';
$string['couldnotresolvecatgorybypath'] = 'Não foi possível resolver categoria pelo caminho';
$string['coursecreated'] = 'Curso criado';
$string['coursedeleted'] = 'Curso apagado';
$string['coursedeletionnotallowed'] = 'Deleção de cursos está permitida';
$string['coursedoesnotexistandcreatenotallowed'] = 'O curso não existe e a criação de cursos está proibida';
$string['courseexistsanduploadnotallowed'] = 'O curso existe e a atualização de curso está proibida';
$string['coursefile'] = 'Arquivo';
$string['coursefile_help'] = 'Este arquivo deve ser um arquivo CSV.';
$string['courseidnumberincremented'] = 'Número ID do curso incrementado {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Processo do curso';
$string['courserenamed'] = 'Curso renomeado';
$string['courserenamingnotallowed'] = 'Renomeação de cursos proibida';
$string['coursereset'] = 'Reconfiguração do curso';
$string['courseresetnotallowed'] = 'Reconfiguração de curso não permitida';
$string['courserestored'] = 'Curso restaurado';
$string['coursescreated'] = 'Cursos criados: {$a}';
$string['coursesdeleted'] = 'Cursos apagados: {$a}';
$string['courseserrors'] = 'Erros de curso: {$a}';
$string['courseshortnamegenerated'] = 'Nome breve de curso gerado: {$a}';
$string['courseshortnameincremented'] = 'No breve do curso incrementado {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Total de cursos: {$a}';
$string['coursesupdated'] = 'Cursos atualizados: {$a}';
$string['coursetemplatename'] = 'Restaurar a partir desse curso depois de fazer o';
$string['coursetemplatename_help'] = 'Insira o nome breve de um curso existente para usá-lo como modelo para todos os cursos.';
$string['coursetorestorefromdoesnotexist'] = 'O curso escolhido como modelo não existe';
$string['courseupdated'] = 'Curso atualizado';
$string['createall'] = 'Criar todos, incrementar nome breve se necessário';
$string['createnew'] = 'Criar novos cursos apenas, saltar cursos existentes';
$string['createorupdate'] = 'Criar novos cursos ou atualizar cursos existentes';
$string['csvdelimiter'] = 'Delimitador do CSV';
$string['csvdelimiter_help'] = 'Delimitador CSV do arquivo CSV.';
$string['csvfileerror'] = 'Há algo de errado com o formato do arquivo CSV. Por favor, verifique o número de títulos e colunas correspondentes, e se o delimitador e codificação do arquivo estão corretos: {$a}';
$string['csvline'] = 'Linha';
$string['defaultvalues'] = 'Valores padrão para cursos';
$string['encoding'] = 'Codificação';
$string['encoding_help'] = 'Codificação do arquivo CSV.';
$string['errorwhiledeletingcourse'] = 'Erro ao apagar o curso';
$string['errorwhilerestoringcourse'] = 'Erro ao restaurar o curso';
$string['generatedshortnamealreadyinuse'] = 'O nome breve gerado já está em uso';
$string['generatedshortnameinvalid'] = 'O nome breve gerado é inválido';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'Número ID já utilizado por um curso';
$string['importoptions'] = 'Opções de importação';
$string['invalidbackupfile'] = 'Arquivo de backup inválido';
$string['invalidcourseformat'] = 'Formato de curso inválido';
$string['invalidcsvfile'] = 'Arquivo CSV inválido';
$string['invalidencoding'] = 'Codificação inválida';
$string['invalideupdatemode'] = 'Modo de atualização selecionado inválido';
$string['invalidmode'] = 'Modo inválido selecionado';
$string['invalidroles'] = 'Nome de papel inválido';
$string['invalidshortname'] = 'Nome breve inválido';
$string['missingmandatoryfields'] = 'Valores ausentes em campos obrigatórios: {$a}';
$string['missingshortnamenotemplate'] = 'Nome breve não definido e modelo de nome breve não definido';
$string['mode'] = 'Modo de carregamento';
$string['mode_help'] = 'Isso permite que você especifique se os cursos podem ser criados e/ou atualizados.';
$string['nochanges'] = 'Sem alterações';
$string['pluginname'] = 'Carregamento de cursos';
$string['preview'] = 'Pré-visualizar';
$string['reset'] = 'Reconfigurar curso depois de carregar';
$string['reset_help'] = 'Se depois de criar/atualizar um curso será feito o "reset".';
$string['restoreafterimport'] = 'Restaurar depois de imiportar';
$string['result'] = 'Resultado';
$string['rowpreviewnum'] = 'Linhas de pré-visualização';
$string['rowpreviewnum_help'] = 'Número de linhas do arquivo CSV que serão visualizadas na próxima página. Esta opção existe para limitar o tamanho da próxima página.';
$string['shortnametemplate'] = 'Modelo para gerar um nome breve';
$string['shortnametemplate_help'] = 'O nome breve do curso é exibido na navegação. Você pode usar a sintaxe de modelos aqui (%f = fullname, %i = idnumber), ou inserir um valor individual que é incrementado.';
$string['templatefile'] = 'Restaurar a partir do arquivo depois de carregado';
$string['templatefile_help'] = 'Selecionar um arquivo para usar com modelo para a criação de todos os cursos.';
$string['unknownimportmode'] = 'Modo de importação desconhecido';
$string['updatemissing'] = 'Completar dados faltantes do CSV e padrões';
$string['updatemode'] = 'Modo de atualização';
$string['updatemodedoessettonothing'] = 'Modo de atualização impede qualquer atuazação';
$string['updatemode_help'] = 'Se você permitir que cursos sejam atualizados, você também tem que dizer qual ferramenta será utilizada para atualizar os cursos.';
$string['updateonly'] = 'Somente atualizar curso existentes';
$string['updatewithdataonly'] = 'Atualizar com dados do CSV apenas';
$string['updatewithdataordefaults'] = 'Atualizar com dados do CSV e padrões';
$string['uploadcourses'] = 'Carregar cursos';
$string['uploadcourses_help'] = 'Os cursos podem ser criados a partir de um arquivo texto. O formato do arquivo deve ser o seguinte:

* Cada linha do arquivo contém um registro
* Cada registro é uma sequência de dados separados por vírgulas (ou outros delimitadores)
* A primeira linha contém uma lista de campos que define o formato do resto do arquivo
* Campos Obrigatórios são shortname, fullname, summary e category';
$string['uploadcoursespreview'] = 'Pré-visualização de cursos carregados';
$string['uploadcoursesresult'] = 'Resultado dos cursos carregados';
