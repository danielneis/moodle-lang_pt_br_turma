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
 * Strings for component 'local_amos', language 'pt_br', branch 'MOODLE_27_STABLE'
 *
 * @package   local_amos
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p> AMOS significa Automated Manipulation Of Strings (Manipulação automática de Strings). AMOS é o repositório central de strings do Moodle e seu histórico. Ele controla a adição de strings em Inglês para o código do Moodle, reúne traduções, manipula tarefas de tradução mais comuns e gera pacotes de idiomas a serem instalados nos servidores do Moodle. </p> <p> Veja <a href="http://docs.moodle.org/en/AMOS"> documentação AMOS</a> para mais informações. </ p>';
$string['amos'] = 'AMOS - Ferramenta de tradução do Moodle';
$string['amos:commit'] = 'Fazer o "commit" das strings do "stage" no repositório principal.';
$string['amos:execute'] = 'Executa o AMOScript fornecido';
$string['amos:importfile'] = 'Importar "strings" de um arquivo enviado e colocá-las no "stage"';
$string['amos:manage'] = 'Gerenciar o portal do AMOS';
$string['amos:stage'] = 'Use a ferramenta de tradução do AMOS e coloque as strings na área de armazenamento temporário (Stage)';
$string['amos:stash'] = 'Transferir as strings da área de armazenamento temporário (Stage) para a área de validação (Stash)';
$string['amos:usegoogle'] = 'Use o serviço de tradução do Google';
$string['commitbutton'] = 'Fazer o "commit"';
$string['commitmessage'] = 'Mensagem do "commit"';
$string['commitstage'] = 'Fazer "commit" das "strings" que estão no "stage".';
$string['commitstage_help'] = 'Armazenar permanentemente no repositório AMOS todas as traduções enviadas para avaliação. A área de armazenamento temporário (Stage) é automaticamente limpa e reiniciada antes da transação ser confirmada. Apenas strings passíveis de efetivação são armazenados. Isso significa que apenas as traduções abaixo destacadas em verde serão armazenadas. A área de armazenamento temporária - Stage - é apagada após a efetivação.';
$string['committableall'] = 'Todos os idiomas';
$string['committablenone'] = 'nenhum idioma permitido - por favor, contate o administrador do AMOS';
$string['componentsall'] = 'Todos';
$string['componentsenlarge'] = 'Ampliar';
$string['componentsnone'] = 'Nenhum';
$string['componentsstandard'] = 'Padrão';
$string['confirmaction'] = 'Isto não pode ser desfeito. Você tem certeza que quer fazer isto?';
$string['contribaccept'] = 'Aceitar';
$string['contribactions'] = 'Ações sobre contribuições de tradução';
$string['contribactions_help'] = 'Dependendo dos seus direitos e do fluxo de trabalho de contribuição, você pode ter algumas das seguintes ações disponíveis:

* Aplicar - copiar a tradução que você contribuiu para o sua área de armazenamento temporário - Stage, sem modificar o registro de contribuição
* Atribuir a mim - definir-se como a pessoa a quem será atribuida a contribuição, sendo esta a pessoa responsável pela a revisão e integração
* Desvincular - definir que a contribuição não será atribuída a ninguém
* Começar a revisão - atribuir a nova contribuição para si mesmo, definir o seu estado como "Em revisão" e copiar a tradução em sua área de armazenamento temporário (Stage)
* Aceitar - marcar a contribuição como aceita
* Rejeitar - marcar a contribuição como rejeitada, por favor, descreva as razões da recusa em um comentário.

O contribuidor é informado por e-mail sempre que há mudança de estado em sua contribuição.';
$string['contribapply'] = 'Aplicar';
$string['contribassignee'] = 'Responsável';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Atribuir a mim';
$string['contribauthor'] = 'Autor';
$string['contribclosedno'] = 'Ocultar contribuições resolvidas';
$string['contribclosedyes'] = 'Mostrar contribuições resolvidas';
$string['contribcomponents'] = 'Componentes';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'Não existem contribuições recebidas';
$string['contribincomingsome'] = 'Contribuições recebidas ({$a})';
$string['contriblanguage'] = 'Idioma';
$string['contribreject'] = 'Rejeitar';
$string['contribresign'] = 'Desvincular';
$string['contribstagedinfo_help'] = 'A área de armazenamento temporário (Stage) contem "strings" sugeridas por um membro da comunidade. Os mantenedores dos pacotes de idioma devem revisá-las e atribuir-lhes o status de Aceito (se elas forem incorporadas) ou Rejeitada (se elas não puderem ser incluídas no pacote oficial do idioma por qualquer razão).';
$string['contribstartreview'] = 'Começar revisão';
$string['contribstatus'] = 'Status';
$string['contribstatus0'] = 'Novo';
$string['contribstatus10'] = 'Em revisão';
$string['contribstatus20'] = 'Rejeitado';
$string['contribstatus30'] = 'Aceito';
$string['contribstatus_help'] = 'O fluxo de uma tradução sugerida consiste nos seguintes estágios:

* Nova - A contribuição foi submetida mas ainda não foi revista
* Em revisão - a contribuição foi distribuida para um mantenedor de pacote de linguagem e foi disponibilizada para revisão.
* Rejeitada - o mantenedor do pacote de linguagem rejeitou a contribuição e provavelmente deixou um comentário explicativo
* Aceita - a contribuição foi aceita pelo mantenedor do pacote de linguagem';
$string['contribstrings'] = 'Strings';
$string['contribstringseq'] = '{$a->orig} novo';
$string['contribsubject'] = 'Assunto';
$string['contribsubmittednone'] = 'Não há contribuições enviadas';
$string['contribsubmittedsome'] = 'Suas contribuições ({$a})';
$string['contribtimemodified'] = 'Modificado';
$string['contributions'] = 'Contribuições';
$string['creditscontact'] = 'Enviar mensagem';
$string['creditscontributors'] = 'Outros contribuidores';
$string['creditsmaintainedby'] = 'Mantido por';
$string['creditstitleshort'] = 'Créditos';
$string['diff'] = 'Comparar';
$string['diffaction'] = 'Se uma diferença é detectada';
$string['diffstrings_help'] = 'Isto irá comparar todas as "strings" nos dois "branches" selecionados. Se houver diferença entre as "strings" dos "branches", ambas versões serão disponibilizadas. Você poderá então usar "Editar strings disponibilizadas" para rever e corrigir as alterações conforme necessário.';
$string['diffversions'] = 'Versões';
$string['err_exception'] = 'Erro: {$a}';
$string['err_invalidlangcode'] = 'Código de idioma inválido';
$string['err_parser'] = 'Erro de análise: {$a}';
$string['filtercmp'] = 'Componentes';
$string['filterlng'] = 'Idiomas';
$string['filterlngnothingselected'] = 'Por favor selecione algum idioma';
$string['filtermis'] = 'Diversos';
$string['filtertxt'] = 'Substring';
$string['filterver'] = 'Versões';
$string['foundinfo'] = 'Número de strings encontradas';
$string['foundinfo_help'] = 'Mostra o número total de linhas na tabela de tradução, número de traduções que faltam e número de traduções que faltam na página atual.';
$string['gotofirst'] = 'ir para a primeira página';
$string['gotoprevious'] = 'ir para a página anterior';
$string['language'] = 'Idioma';
$string['languages'] = 'Idiomas';
$string['languagesall'] = 'Todos';
$string['languagesnone'] = 'Nenhum';
$string['log'] = 'Log';
$string['logfilterbranch'] = 'Versões';
$string['logfiltercomponent'] = 'Componentes';
$string['logfilterlang'] = 'Idiomas';
$string['markuptodate_help'] = 'AMOS detectou que uma string pode estar obsoleta uma vez que a versão em inglês foi modificada depois da tradução feita. Reveja a tradução. Caso você a julgue atualizada, clique na caixa de seleção. Caso contrário edite a string.';
