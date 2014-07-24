/*
 * SimpleModal Basic Modal Dialog
 * http://simplemodal.com
 *
 * Copyright (c) 2013 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */


jQuery(function ($) {
       $('#basic-modal .basic').click(function (e) {
            var str = $(this).text();
            var descricao = str.split(":");
            $.modal('<h1 style="text-align:center">'+descricao[0]+'</h1><br> <p align=justify>'+descricao[2]+'</p><br><a href=loadMidia.php?src=php&id='+descricao[1]+'>Saiba Mais</a>');


            return false;
       });

    $('#basic-modal-midia .basic').click(function (e) {
        var str = $(this).text();
        var descricao = str.split(":");
        $.modal('<h1 style="text-align:center">'+descricao[0]+'</h1><br> <p align=justify>'+descricao[2]+'</p><br><a href=player.php?src=php&id='+descricao[1]+'>Ver Mídia</a>');
        return false;
    });
});