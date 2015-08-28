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
 * Strings for component 'filter_mathjaxloader', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   filter_mathjaxloader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Delimitadores adicionais de equações';
$string['additionaldelimiters_help'] = 'Filtro MathJax analisa texto para equações que contém caracteres delimitadores.

A lista de caracteres delimitadores reconhecidos pode ser adicionado aqui (por exemplo, o AsciiMath usa `). Delimitadores podem conter vários caracteres e vários delimitadores podem ser separados por vírgulas.';
$string['filtername'] = 'MatjhJax';
$string['httpsurl'] = 'URL HTTPS do MathJax';
$string['httpsurl_help'] = 'URL completa para a biblioteca MathJax. Usado quando a página é carregada via https (segura).';
$string['httpurl'] = 'URL HTTP do MathJax';
$string['httpurl_help'] = 'URL completa para a biblioteca MathJax. Usado quando a página é carregada via http.';
$string['localinstall'] = 'Instalação local do MathJax';
$string['localinstall_help'] = 'A configuração padrão do MathJax usa a versão CDN do MathJax, mas o MathJax poderá ser instalado localmente se necessário.

Isso pode ser útil para se poupar banda e devido a restrições do proxy.

Para usar uma instalação local do MathJax, primeiro, baixe a biblioteca completa do MathJax do site http://www.mathjax.org/. Depois instale-o em um servidor web. Finalmente, atualize as configurações de filtro httpurl e/ou httpsurl para que apontem para a URL local do MathJax.js';
$string['mathjaxsettings'] = 'Configuração do MathJax';
$string['mathjaxsettings_desc'] = 'A configuração padrão do MathJax deve ser apropriada para a maioria dos usuários, porém, o MathJax é extremamente configurável e qualquer uma das opções de configurações básicas do MathJax podem ser adicionadas aqui.';
$string['texfiltercompatibility'] = 'Compatibilidade com o filtro TeX';
$string['texfiltercompatibility_help'] = 'O filtro MathJax pode ser usado como um substituto para o filtro TeX.

De modo a suportar todos os delimitadores aceitos pelo filtro TeX, o MathJax será configurado para apresentar todas as equações alinhadas com o texto.';
