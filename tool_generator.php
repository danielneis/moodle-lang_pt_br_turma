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
 * Strings for component 'tool_generator', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_generator
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Arquivo grande {$a}';
$string['courseexplanation'] = 'Esta ferramenta cria cursos de teste padrão que incluem muitas seções, atividades e arquivos. Este destina-se a fornecer uma medida padronizada para verificar a confiabilidade e o desempenho dos vários componentes do sistema (como backup e restauração). Este teste é importante porque houve muitos casos anteriores, onde, diante de casos de uso da vida real (por exemplo, um curso com 1.000 atividades), o sistema não funciona. Cursos criados usando esse recurso podem ocupar uma grande quantidade de banco de dados e espaço em sistema de arquivos (dezenas de gigabytes). Você terá de apagar os cursos (e esperar por várias corridas de limpeza) para liberar esse espaço novamente. ** Não utilize esse recurso em um sistema vivo **. Use somente em um servidor desenvolvedor. (Para evitar o uso acidental, este recurso está desativado, a menos que você também tenha selecionado nível de depuração desenvolvedor.)';
$string['coursesize_0'] = 'XS (~ 10KB, criar em ~ 1 segundo)';
$string['coursesize_1'] = 'S (~ 10MB; criar em ~ 30 segundos)';
$string['coursesize_2'] = 'M (~ 100MB, criar em aproximadamente 5 minutos)';
$string['coursesize_3'] = 'L (~ 1GB, criar em ~ 1 hora)';
$string['coursesize_4'] = 'XL (~ 10GB; criar em ~ 4 horas)';
$string['coursesize_5'] = 'XXL (~ 20GB; criar em ~ 8 horas)';
$string['coursewithoutusers'] = 'O curso selecionado não tem usuários';
$string['createcourse'] = 'Criar curso';
$string['createtestplan'] = 'Criar plano de teste';
$string['creating'] = 'Criando curso';
$string['done'] = 'feito ({$a}s)';
$string['downloadtestplan'] = 'Baixar o plano de teste';
$string['downloadusersfile'] = 'Baixar arquivos de usuários';
$string['error_nocourses'] = 'Não há cursos para gerar o plano de teste';
$string['error_noforumdiscussions'] = 'O curso selecionado não contém discussões em fórums';
$string['error_noforuminstances'] = 'O curso selecionado não contém instâncias do módulo forum';
$string['error_noforumreplies'] = 'O curso selecionado não contém respostas nos fóruns';
$string['error_nonexistingcourse'] = 'O curso especificado não existe';
$string['error_nopageinstances'] = 'O curso selecionado não contém instâncias do módulo página';
$string['error_notdebugging'] = 'Não disponível no servidor porque a depuração não está definido para o DESENVOLVEDOR';
$string['error_nouserspassword'] = 'Você precisa definir $CFG->tool_generator_users_password em config.php para gerar o plano de teste';
$string['fullname'] = 'Curso teste: {$a->size}';
$string['maketestcourse'] = 'Fazer curso de teste';
$string['maketestplan'] = 'Criar plano de teste JMeter';
$string['notenoughusers'] = 'O curso selecionado não tem usuários suficientes';
$string['pluginname'] = 'Gerador de dados para desenvolvimento';
$string['progress_checkaccounts'] = 'Verificação de contas de usuário ({$a})';
$string['progress_coursecompleted'] = 'Curso concluído ({$a}s)';
$string['progress_createaccounts'] = 'Criando contas de usuário ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Criando atribuições ({$a})';
$string['progress_createbigfiles'] = 'Criando arquivos grandes ({$a})';
$string['progress_createcourse'] = 'Criando curso {$a}';
$string['progress_createforum'] = 'Criando fórum ({$a} posts)';
$string['progress_createpages'] = 'Criando páginas ({$a})';
$string['progress_createsmallfiles'] = 'Criando pequenos arquivos({$a})';
$string['progress_enrol'] = 'Inscrevendo usuários no curso ({$a})';
$string['progress_sitecompleted'] = 'Site concluído ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~ 10MB; três cursos, criado em ~ 30 segundos)';
$string['sitesize_1'] = 'S (~ 50MB; oito cursos, criados em aproximadamente 2 minutos)';
$string['sitesize_2'] = 'M (~ 200MB; 73 cursos, criado em ~ 10 minutos)';
$string['sitesize_3'] = 'L (~ 1\'5GB; 277 cursos, criado em ~ 1\'5 horas)';
$string['sitesize_4'] = 'XL (~ 10GB; 1065 cursos, criados em ~ 5 horas)';
$string['sitesize_5'] = 'XXL (~ 20GB; 4177 cursos, criados em ~ 10 horas)';
$string['size'] = 'Tamanho do curso';
$string['smallfiles'] = 'Arquivos pequenos';
$string['targetcourse'] = 'Testar objetivo do curso';
$string['testplanexplanation'] = 'Esta ferramenta cria um arquivo de plano de teste JMeter junto com o arquivo de credenciais do usuário.

Este plano de teste é projetado para trabalhar junto com {$a}, o que torna mais fácil para executar o plano de teste em um ambiente específico Moodle, reúne informações sobre as corridas e compara os resultados, assim você terá que baixá-lo e usá-lo no test_runner.sh script ou siga as instruções de instalação e uso.

Você precisa definir uma senha para os usuários do curso em config.php (por exemplo $CFG->tool_generator_users_password \'moodle\';). Não há valor padrão para esta senha para evitar usos não-intencionais da ferramenta. Você precisa usar a opção de atualização de senhas no caso dos usuários de seus cursos terem outras senhas ou elas forem geradas por tool_generator mas sem definir uma $CFG->tool_generator_users_password valor.

É parte do tool_generator por isso funciona bem com os cursos gerados pelos cursos e os geradores de site, ele também pode ser usado com qualquer curso que contenha, pelo menos:

* usuários inscritos suficientes (depende do tamanho do plano de teste que você selecionar) com a redefinição de senha para \'moodle\'
* Uma instância módulo página
* Uma instância módulo fórum com pelo menos um debate e uma resposta

Você pode querer considerar a sua capacidade de servidores durante a execução de planos de teste grandes como a quantidade de carga gerada pelo JMeter pode ser especialmente grande . O período de construção foi ajustado de acordo com o número de segmentos (usuários) para reduzir este tipo de questões, mas a carga ainda é enorme.

** Não execute o plano de teste em um sistema vivo **. Este recurso só cria os arquivos para alimentar JMeter, portanto, não é perigoso por si só, mas você**NUNCA**  deve executar este plano de teste em um local de produção.';
$string['testplansize_0'] = 'XS ({$a->users} usuários, {$a->loops} loops e {$a->rampup} período de construção)';
$string['testplansize_1'] = 'S ({$a->users} usuários, {$a->loops} loops e {$a->rampup} período de construção)';
$string['testplansize_2'] = 'M ({$a->users} usuários, {$a->loops} loops e {$a->rampup} período de construção)';
$string['testplansize_3'] = 'L ({$a->users} usuários, {$a->loops} loops e {$a->rampup} período de construção)';
$string['testplansize_4'] = 'XL ({$a->users} usuários, {$a->loops} loops e {$a->rampup} período de construção)';
$string['testplansize_5'] = 'XXL ({$a->users} usuários, {$a->loops} loops e {$a->rampup} período de construção)';
$string['updateuserspassword'] = 'Atualizar senha dos usuários do curso';
$string['updateuserspassword_help'] = 'JMeter precisa fazer login como os usuários do curso, você pode definir a senha de usuários usando $CFG->tool_generator_users_password em config.php; essa configuração atualiza a senha do usuário de acordo com o curso $CFG->tool_generator_users_password. Ele pode ser útil no caso de você estiver usando um curso não gerada por tool_generator ou $CFG->tool_generator_users_password não foi definido quando criou os cursos de teste.';
