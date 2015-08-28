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
 * Strings for component 'tool_installaddon', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Reconhecimento';
$string['acknowledgementtext'] = 'Eu entendo que é minha responsabilidade ter backups completos deste site antes de instalar plugins adicionais. Eu aceito e compreendo que plugins (especialmente, mas não apenas os originários de fontes não oficiais) podem conter falhas de segurança, podem tornar o site indisponível ou causar vazamentos perdas de dados privados.';
$string['featuredisabled'] = 'O instalador plugins está desativado neste site.';
$string['installaddon'] = 'Instalar plugin!';
$string['installaddons'] = 'Instalar plugins';
$string['installexception'] = 'Oops ... Ocorreu um erro ao tentar instalar o plugin. Ative o modo de depuração para ver os detalhes do erro.';
$string['installfromrepo'] = 'Instalar plugins do diretório de plugins do Moodle';
$string['installfromrepo_help'] = 'Você será redirecionado para o diretório de plugins do Moodle para procurar e instar um plugin. Note que o nome completo do seu site, sua URL e a versão do seu Moodle serão enviados para facilitar o processo de instalação para você.';
$string['installfromzip'] = 'Instalar plugin de arquivo ZIP';
$string['installfromzipfile'] = 'Pacote ZIP';
$string['installfromzipfile_help'] = 'O pacote ZIP do plugin deve conter apenas um diretório, nomeado com o mesmo nome do plugin. O ZIP será extraído em um local apropriado para o tipo de plugin. Se o pacote foi baixado do diretório de plugins do Moodle, então ele terá essa estrutura.';
$string['installfromzip_help'] = 'Uma alternativa para a instalação de plugins diretamente do diretório de plugins do Moodle é fazer o upload de um pacote ZIP do plugin. O pacote ZIP deve ter a mesma estrutura de um pacote baixado do diretório de plugins do Moodle.';
$string['installfromziprootdir'] = 'Renomeie o diretório raiz';
$string['installfromziprootdir_help'] = 'Alguns pacotes ZIP, tais como os gerados por Github, podem conter um nome de diretório raiz incorreto. Se assim for, o nome correto pode ser inserido aqui.';
$string['installfromzipsubmit'] = 'Instalar plugin do arquivo ZIP';
$string['installfromziptype'] = 'Tipo de plugin';
$string['installfromziptype_help'] = 'Escolha o tipo correto de plugin que você está prestes a instalar. Aviso: O procedimento de instalação pode falhar se um tipo de plugin incorreto é especificado.';
$string['permcheck'] = 'Certifique-se se o tipo de plugin no local raiz é gravável pelo processo do servidor web.';
$string['permcheckerror'] = 'Erro durante a verificação de permissão de escrita';
$string['permcheckprogress'] = 'Verificando permissão de escrita...';
$string['permcheckrepeat'] = 'Verifique novamente';
$string['permcheckresultno'] = 'Não é possível escrever na localização do tipo de plugin <em>{$a->path}</em>';
$string['permcheckresultyes'] = 'É possível escrever na localização do tipo plugin <em>{$a->path}</em>';
$string['pluginname'] = 'Instalador de plugin';
$string['remoterequestalreadyinstalled'] = 'Há um pedido para instalar neste site o plugin {$a->name} ({$a->component}) versão {$a->version} do diretório de plugins do Moodle. No entanto, este plugin <strong>já está instalado</strong> neste site.';
$string['remoterequestconfirm'] = 'Há um pedido para instalar neste site o plugin <strong>{$a->name}</strong> ({$a->component}) versão {$a->version} do diretório de plugins do Moodle. Se você continuar, será feito o download do pacote ZIP do plugin para validação. Nada será instalado ainda.';
$string['remoterequestinvalid'] = 'Existe um pedido para instalar neste site um plugin do diretório de plugins do Moodle. Infelizmente, este pedido não é válido, então o plugin não pode ser instalado.';
$string['remoterequestpermcheck'] = 'Há um pedido para instalar neste site o plugin {$a->name} ({$a->component}) versão {$a->version} do diretório de plugins do Moodle. No entanto, <strong>não é possível escrever</strong> na localização <strong>{$a->typepath}</strong>. Você deve dar acesso de escrita para o usuário do servidor web para esta localização e então pressionar o botão "continuar" para repetir a verificação.';
$string['remoterequestpluginfoexception'] = 'Oops ... Ocorreu um erro ao tentar obter informações sobre o plugin {$a->name} ({$a->component}) versão {$a->version}. O plugin não pode ser instalado. Ativar o modo de depuração para ver detalhes do erro.';
$string['typedetectionfailed'] = 'Não foi possível detectar o tipo de plugin. Por favor, escolha o tipo plugin manualmente.';
$string['validation'] = 'Validação de pacote de plugin';
$string['validationmsg_componentmatch'] = 'Nome completo do plugin';
$string['validationmsg_componentmismatchname'] = 'Incompatibilidade no nome do plugin';
$string['validationmsg_componentmismatchname_help'] = 'Alguns pacotes ZIP, como aqueles gerados pelo Github, podem conter um nome incorreto para o diretório raiz. Você precisa corrigir o nome do diretório raiz para casar com o nome declarado do plugin.';
$string['validationmsg_componentmismatchname_info'] = 'O plugin declara seu nome como \'{$a}\' mas não casa com o nome do diretório raiz.';
$string['validationmsg_componentmismatchtype'] = 'Incompatibilidade de tipo de plugin';
$string['validationmsg_componentmismatchtype_info'] = 'Você selecionou o tipo \'{$a->expected}\' mas o plugin declara seu tipo como \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Arquivo extraído não encontrado';
$string['validationmsg_filesnumber'] = 'Não foram encontrados arquivos suficientes no pacote';
$string['validationmsg_filestatus'] = 'Não foi possível extrair todos os arquivos';
$string['validationmsg_filestatus_info'] = 'A tentativa de extrair o arquivo {$a->file} resultou em erro \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Arquivo de idioma encontrado';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Erro';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Aviso';
$string['validationmsg_maturity'] = 'Nível de maturidade declarada';
$string['validationmsg_maturity_help'] = 'O plugin pode declarar seu nível de maturidade. Se o mantenedor considera o plugin estável, o nível de maturidade que ele declarou lerá MATURITY_STABLE. Todos os outros níveis de maturidade (tais como alfa ou beta) deve ser considerado instável e um alerta é gerado.';
$string['validationmsg_missingexpectedlangenfile'] = 'Incompatibilidade no nome do arquivo do idioma inglês';
$string['validationmsg_missingexpectedlangenfile_info'] = 'O tipo de plugin fornecido não contém o arquivo esperado para o idioma inglês {$a}.';
$string['validationmsg_missinglangenfile'] = 'Nenhum arquivo de idioma inglês encontrado';
$string['validationmsg_missinglangenfolder'] = 'Faltando pasta do idioma inglês';
$string['validationmsg_missingversion'] = 'O plugin não declara sua versão';
$string['validationmsg_missingversionphp'] = 'Arquivo version.php não encontrado';
$string['validationmsg_multiplelangenfiles'] = 'Vários arquivos do idioma inglês encontrados';
$string['validationmsg_onedir'] = 'Estrutura inválida do pacote ZIP.';
$string['validationmsg_onedir_help'] = 'O pacote ZIP deve conter apenas um diretório raiz que contém o código do plugin. O nome desse diretório raiz deve coincidir com o nome do plugin.';
$string['validationmsg_pathwritable'] = 'Verificação de acesso de escrita';
$string['validationmsg_pluginversion'] = 'Versão do plugin';
$string['validationmsg_release'] = 'Plugin release';
$string['validationmsg_requiresmoodle'] = 'Versão do Moodle requerida';
$string['validationmsg_rootdir'] = 'Nome do plugin a ser instalado';
$string['validationmsg_rootdir_help'] = 'O nome do diretório raiz no pacote ZIP forma o nome do plugin para ser instalado. Se o nome não estiver correto, você pode querer renomear o diretório raiz do ZIP antes de instalar o plugin.';
$string['validationmsg_rootdirinvalid'] = 'Nome do plugin Inválido';
$string['validationmsg_rootdirinvalid_help'] = 'O nome do diretório raiz no pacote ZIP viola requisitos formais de sintaxe. Alguns pacotes ZIP, tais como os gerados por Github, podem conter um nome de diretório raiz incorreto. É preciso corrigir o nome do diretório raiz para coincidir com o nome do plugin.';
$string['validationmsg_targetexists'] = 'Local de destino já existe';
$string['validationmsg_targetexists_help'] = 'O diretório onde o plugin será instalado ainda não deve existir.';
$string['validationmsg_unknowntype'] = 'Tipo de plugin desconhecido';
$string['validationresult0'] = 'Validação falhou!';
$string['validationresult0_help'] = 'Um problema grave foi detectado e por isso não é seguro instalar o plugin. Veja detalhes nas mensagens de validação no log.';
$string['validationresult1'] = 'Validação passou!';
$string['validationresult1_help'] = 'O pacote do plugin foi validado e nenhum problema sério foi detectado.';
$string['validationresult2_help'] = 'Nenhum problema sério foi detectado. Você pode continuar com a instalação do plugin. Veja as mensagens de validação no log para mais detalhes e eventuais avisos.';
$string['validationresultinfo'] = 'Informações';
$string['validationresultmsg'] = 'Mensagem';
$string['validationresultstatus'] = 'Status';
