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
 * Strings for component 'media', language 'pt_br', branch 'MOODLE_30_STABLE'
 *
 * @package   media
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['flashanimation'] = 'Animação flash';
$string['flashanimation_desc'] = 'Arquivos com extensão *.swf. Por razões de segurança este filtro é utilizado apenas em contextos confiáveis.';
$string['flashvideo'] = 'Vídeo flash';
$string['flashvideo_desc'] = 'Arquivos com extensão *.flv e *.f4v. Reproduzem clips de vídeo utilizando Flowplayer, requer plugin Flash e javascript. Utiliza video HTML 5 "fallback" caso múltiplas fontes sejam especificadas';
$string['html5audio'] = 'Áudio HTML 5';
$string['html5audio_desc'] = 'Arquivos de áudio com extensão *.ogg, *.aac e outros. São compatíveis com os últimos navegadores web apenas, infelizmente não há formato que seja suportado por todos os navegadores.Uma maneira de solucionar é especificando as fontes separadas com # (exemplo: http://example.org/audio.aac#http://example.org/video.mp3#) O navegador Quicktime é utilizado como suporte a navegadores antigos.';
$string['html5video'] = 'Vídeo HTML 5';
$string['html5video_desc'] = 'Arquivos de vídeo com extensão *.webm, *.m4v, *.ogv, *.mp4 e outros. São compatíveis com os últimos navegadores web apenas, infelizmente não há formato que seja suportado por todos os navagadores. Uma maneira de solucionar é especificando as fontes separadas com # (exemplo: http://example.org/video.m4v#http://example.org/video.aac#http://example.org/video.ogv#d=640*480) O navegador Quicktime é utilizado como suporte a navegadores antigos.';
$string['legacyheading'] = 'Reprodutores de mídia legados';
$string['legacyheading_desc'] = 'Os seguintes formatos não são recomendados para uso geral, eles são usualmente utilizados em um ainstalação de intranet com clientes geerenciados centralizadamente.';
$string['legacyquicktime'] = 'Reprodutor QuickTime';
$string['legacyquicktime_desc'] = 'Arquivos com extensão *.mov, *.mp4, *.m4a e *.mpg. Requerem o reprodutor de QUicktime ou codecs';
$string['legacyreal'] = 'Real Media player';
$string['legacyreal_desc'] = 'Arquivos com extensão *.rm, *.ra, *.ram, *.rp, *.rv. Requerem Realplayer.';
$string['legacywmp'] = 'Widows media player';
$string['legacywmp_desc'] = 'Arquivos com extensão *.avi e *.wmv. Totalmente compatíveis com Internet Explorer no Windows, talvez sejam problemáticos em outros navegadores ou sistemas operacionais.';
$string['mediaformats'] = 'Players disponíveis';
$string['mediaformats_desc'] = 'Quando players estão habilitados nestas configurações, arquivos podem ser incorporados usando o filtro de mídia (se habilitado) ou usando os recursos do timpo Arquivo ou URL com a opção Incorporar. Se não habilitado, estes fornatos não são incorporados e os usuários pode baixar manualmente ou seguir o link para o recurso.';
$string['mediasettings'] = 'Incorporação de mídia';
$string['mp3audio'] = 'Áudio MP3';
$string['mp3audio_desc'] = 'Arquivos com extensão *.mp3. Reproduzem audio utilizando Flowplayer, requerem o plugin Flash.';
$string['sitevimeo'] = 'Vimeo';
$string['sitevimeo_desc'] = 'Site de compartilhamento de vídeos Vimeo.';
$string['siteyoutube'] = 'YouTube';
$string['siteyoutube_desc'] = 'Site de compartilhamento de vídeos YouTube, links para vídeos e listas de reprodução são suportados.';
