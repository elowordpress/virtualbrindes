<?php

$string[ 'benchmark' ]        = 'Benchmark';
$string[ 'adminreport' ]      = 'Índice de referência do sistema';
$string[ 'info' ]             = 'Este benchmark não deve durar mais de 1 minuto; Pare após 2 minutos. Aguarde até que os resultados apareçam.';
$string[ 'infoaverage' ]      = 'Convidamos fazer este teste várias vezes para ter a média.';
$string[ 'infodisclamer' ]    = 'Não é aconselhável executar este benchmark em uma plataforma em produção.';
$string[ 'start' ]            = 'Iniciar o teste';
$string[ 'redo' ]             = 'Fazer um novo teste';
$string[ 'scoremsg' ]         = 'Tempo para executar este teste: ';
$string[ 'description' ]      = 'Descrição';
$string[ 'during' ]           = 'Tempo, em segundos';
$string[ 'limit' ]            = 'Limite aceitável';
$string[ 'over' ]             = 'Limite crítico';
$string[ 'total' ]            = 'Tempo total';

/*
 * Add your test below
 */


$string[ 'processorname' ]       = 'Uma função chamada muitas vezes';
$string[ 'processormoreinfo' ]   = 'Uma função é chamada em um loop para testar a velocidade do processador';
$string[ 'filereadname' ]        = 'Leitura de arquivos';
$string[ 'filereadmoreinfo' ]    = 'Testar a velocidade de leitura no servidor';
$string[ 'filewritename' ]       = 'Criação de arquivos';
$string[ 'filewritemoreinfo' ]   = 'Testar a velocidade de gravação no servidor';

/*
 * Add your solution here
 */

$string[ 'slowserverlabel' ]    = 'Seu servidor web é muito lento.';
$string[ 'slowserversolution' ] = '<ul><li>Defina seu Apache em <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">multiprocessamento</a> mode or switch on <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>Se o seu Moodle estiver instalado no seu computador, você pode tentar desativar o antivírus onde o Moodle está localizado. Faça com precaução.</li></ul>';

$string[ 'slowprocessorlabel' ]    = 'Seu processador é muito lento.';
$string[ 'slowprocessorsolution' ] = '<ul><li>Verifique se o equipamento é suficiente para executar o Moodle.</li></ul>';

$string[ 'slowharddrivelabel' ]    = 'O disco rígido é muito lento.';
$string[ 'slowharddrivesolution' ] = '<ul><li>Verifique a pasta de estado / temp de disco rígido</li><li>Altere o disco rígido ou a pasta temporária</li></ul>';