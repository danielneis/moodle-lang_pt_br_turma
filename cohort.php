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
 * Strings for component 'cohort', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Acrescentar um coorte';
$string['allcohorts'] = 'Todos os coortes';
$string['anycohort'] = 'Qualquer';
$string['assign'] = 'Atribuir';
$string['assigncohorts'] = 'Atribuir membros ao coorte';
$string['assignto'] = 'Membros do coorte {$a}';
$string['backtocohorts'] = 'Voltar aos coortes';
$string['bulkadd'] = 'Adicionar ao cohort';
$string['bulknocohort'] = 'Nenhum coorte disponível encontrado';
$string['categorynotfound'] = 'Categoria <b>{$a}</b> não encontrada ou você não tem permissão para criar um coorte lá. O contexto padrão será utilizado.';
$string['cohort'] = 'Coorte';
$string['cohorts'] = 'Coortes';
$string['cohortsin'] = '{$a}: coortes disponíveis';
$string['component'] = 'Fonte';
$string['contextnotfound'] = 'Contexto <b>{$a}</b> não encontrado ou você não tem permissão para criar um coorte lá. O contexto padrão será utilizado.';
$string['csvcontainserrors'] = 'Erros foram encontrados nos dados CSV. Veja os detalhes abaixo.';
$string['csvcontainswarnings'] = 'Avisos foram encontrados nos dados CSV. Veja os detalhes abaixo.';
$string['csvextracolumns'] = 'Coluna(s) <b>{$a}</b> será/serão ignorada(s).';
$string['currentusers'] = 'Usuários atuais';
$string['currentusersmatching'] = 'Usuários atuais que conferem';
$string['defaultcontext'] = 'Contexto padrão';
$string['delcohort'] = 'Apagar coorte';
$string['delconfirm'] = 'Deseja mesmo apagar o coorte \'{$a}?\'';
$string['description'] = 'Descrição';
$string['displayedrows'] = '{$a->displayed} linhas exibidas de {$a->total}.';
$string['duplicateidnumber'] = 'Já há um coorte com essa mesma ID';
$string['editcohort'] = 'Editar coorte';
$string['eventcohortcreated'] = 'Coorte criado';
$string['eventcohortdeleted'] = 'Coorte excluido';
$string['eventcohortmemberadded'] = 'Usuário adicionado ao coorte';
$string['eventcohortmemberremoved'] = 'Usuário removido do coorte';
$string['eventcohortupdated'] = 'Coorte atualizado';
$string['external'] = 'Coorte externo';
$string['idnumber'] = 'ID do coorte';
$string['memberscount'] = 'Tamanho do coorte';
$string['name'] = 'Nome';
$string['namecolumnmissing'] = 'Há algo errado com o formato do arquivo CSV. Por favor, certifique-se que ele contém os nomes das colunas.';
$string['namefieldempty'] = 'Nome do campo não pode ser vazio';
$string['nocomponent'] = 'Criado manualmente';
$string['potusers'] = 'Possíveis usuários';
$string['potusersmatching'] = 'Possíveis usuários que conferem';
$string['preview'] = 'Pré-visualizar';
$string['removeuserwarning'] = 'A remoção de usuários de um cohort pode resultar no cancelamento da inscrição de usuários em múltiplos cursos o que inclui a deleção de configurações de usuários, notas, participação em grupos e outras informações dos cursos afetados.';
$string['search'] = 'Buscar';
$string['searchcohort'] = 'Buscar coorte';
$string['selectfromcohort'] = 'Selecionar membros a partir do coorte';
$string['systemcohorts'] = 'Coortes do sistemas';
$string['unknowncohort'] = 'Cohort desconhecido ({$a})!';
$string['uploadcohorts'] = 'Fazer upload de coortes';
$string['uploadcohorts_help'] = 'Coortes podem ser enviados via arquivo de texto. O formato do arquivo deve ser o seguinte:

* Cada linha do arquivo contém um registro
* Cada registro é uma série de dados separados por vírgulas (ou outros delimitadores)
* O primeiro disco contém uma lista de nomes de campos que define o formato do resto do arquivo
* O campo "name" é obrigatório
* Campos opcionais são idnumber, description, descriptionformat, context,  category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = '{$a} coortes enviados';
$string['useradded'] = 'Usuário adicionado ao cohort ({$a})!';
$string['visible'] = 'Visível';
$string['visible_help'] = 'Qualquer grupo pode ser visto por usuários que têm a permissão \'moodle/cohort:view\' no contexto coorte. Coortes visíveis também podem ser vistos por usuários nos cursos subjacentes.';
