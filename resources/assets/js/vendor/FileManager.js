;(function ($, doc, win) {
    "use strict";

    if (typeof BASE_PATH == "undefined" || RESOURCES_PATH == "undefined" || BASE_URL == "undefined") {

        throw ("BASE_PATH or RESOURCES_PATH or BASE_URL not defined, please define those global variables in your template first.");
    }

    var ASSETS_PATH = RESOURCES_PATH + '/assets/';

    function FileManager(el, opts) {


        this.selector = $(el);

        this.defaults = {};

        this.options = $.extend(this.defaults, opts);


        this.init();
    }

    FileManager.prototype.init = function () {

        this.initFonts();
        this.initHtml();


    };

    FileManager.prototype.initFonts = function () {


        $('<link>')
            .attr('rel', 'stylesheet')
            .attr('href', 'https://fonts.googleapis.com/css?family=Ubuntu')
            .appendTo('head');

        this.selector.css({

            "font-family": "'Ubuntu', sans-serif"
        });


    };

    FileManager.prototype.destroy = function () {


    };
    FileManager.prototype.initHtml = function () {


        var wrapper = $("<div class='file-manager-wrapper'>");

        var header = this.getHeader();

        var body = this.getBody();

        var sidebar = this.getSidebar();

        body.append(sidebar);

        var footer = this.getFooter();

        wrapper.append(header).append(body).append(footer);


        this.bindEvents(wrapper);

        this.initStyle(wrapper);

        this.selector.append(wrapper);

    };
    FileManager.prototype.getSidebar = function () {

        var sidebar = $('<div class="file-manager-sidebar"/>');

        return sidebar;

    };
    FileManager.prototype.bindEvents = function (object) {


        object.find('.fm_search').on('click', function () {

            FileManager.prototype.searchEventBind($(this));
        });


    };

    FileManager.prototype.searchEventBind = function (search) {

        if (search.hasClass('active')) {

            search.removeClass('active');

            search.closest('.file-manager-wrapper').find('.file-manager-body-content').find('.fm_search_block').slideUp(500, function () {

                search.closest('.file-manager-wrapper').find('.file-manager-body-content').find('.fm_search_block').remove();

            });


        } else {

            search.addClass('active');

            var searchBlock = $('<div class="fm_search_block" style="display:none"/>');

            searchBlock.append('<span  class="fm_search_icon"></span>');
            searchBlock.append('<input type="text" class="fm_search_box"/>');
            searchBlock.append('<span  class="fm_search_directory">Downloads</span>');
            searchBlock.append('<span  class="fm_all_files">Downloads</span>');
            searchBlock.append('<span  class="fm_plus">Downloads</span>');
            searchBlock.css({
                "max-width": "100%",
                "width": "100%",
                "postion": "absolute",
                "height": "40px",
                "background": "red"

            });


            searchBlock.find('.fm_search_icon').css({

                "height": "32px",
                "width": "34px",
                "padding-left": "8px",
                "padding-right": "8px",
                "line-height": "29px",
                "border": "1px solid #C7BBB0",
                "display": "inline-block",
                "float": "left",
                "margin-top": "7px",
                "cursor": "pointer",
                "color": "rgb(93, 86, 85)",
                "margin-right": "20px",
                "border-radius": "5px",
                "background-image": "url(" + ASSETS_PATH + "images/search_list_type.png)",
                "background-position": "110px 35px",



            });
            search.closest('.file-manager-wrapper').find('.file-manager-body-content').append(searchBlock);

            search.closest('.file-manager-wrapper').find('.file-manager-body-content').find('.fm_search_block').slideDown();


        }

    };
    FileManager.prototype.getHeader = function () {

        var header = $('<div class="file-manager-header"/>');

        header.append('<h1>Downloads</h1>');

        header.append('<span id="fm_prev"></span>');

        header.append('<span  id="fm_next"></span>');

        header.append('<span  class="fm_directory_path">Home</span>');

        header.append('<span  class="fm_directory_path">Downloads</span>');

        header.append('<span  class="fm_directory_path">Magento</span>');

        header.append('<span  class="fm_grid"></span>');

        header.append('<span  class="fm_list"></span>');

        header.append('<span  class="fm_search"></span>');


        return header;

    };
    FileManager.prototype.getFooter = function () {

        var footer = $('<div class="file-manager-footer"/>');

        return footer;

    };

    FileManager.prototype.initStyle = function (object) {

        object.css({
            "min-height": "400px",
            "width": "100%",
            "max-width": "100%",
            "background": "#e1e1e1",
            "padding": "10px",
            "border": "1px solid #919191",

        });
        object.css({
            "min-height": "400px",
            "width": "100%",
            "max-width": "100%",
            "background": "#e1e1e1",
            "padding": "10px",
            "border": "1px solid #919191",

        });

        object.find('.file-manager-sidebar').css({
            "min-height": "300px",
            "width": "15%",
            "max-width": "15%",
            "background": "#F2F1F0",
            "border-right": "1px solid #D3D0CD",
            "float": "left",


        });
        object.find('.file-manager-body-content').css({

            "min-height": "300px",
            "width": "85%",
            "max-width": "85%",
            "background": "#ffffff",
            "float": "right",
            "position": "relative"


        });
        object.find('.file-manager-header').css({

            "min-height": "67px",
            "width": "100%",
            "max-width": "100%",
            "background": "url(" + ASSETS_PATH + "images/line.png)",
            "float": "none",


        });
        object.find('.file-manager-header').find('h1').css({

            "font-size": "13px",
            "line-height": "13px",
            "margin": "0",
            "padding": "0",
            "display": "inline-block",
            "padding-left": "12px",
            "font-weight": "bolder",
            "color": "#5D5655",
            'width': '100%'


        });
        object.find('.file-manager-header').find('#fm_prev').css({


            "background-position": "72px 100%",
            "margin": "6px 0 5px 12px",
            "cursor": "pointer",
            "padding": "0",
            "display": "inline-block",
            "padding-left": "12px",
            "background-image": "url(" + ASSETS_PATH + "images/next_prev.png)",
            "height": "36px",
            "float": "left",
            "width": "35px",


        });
        object.find('.file-manager-header').find('#fm_next').css({


            "background-position": "93% 74px",
            "margin": "6px 0 5px 0",
            "cursor": "pointer",
            "padding": "0",
            "display": "inline-block",
            "padding-left": "0",
            "background-image": "url(" + ASSETS_PATH + "images/next_prev.png)",
            "height": "36px",
            "float": "left",
            "width": "35px",


        });
        object.find('.file-manager-header').find('.fm_directory_path').css({

            "height": "32px",
            "width": "auto",
            "padding-left": "8px",
            "padding-right": "8px",
            "line-height": "29px",
            "border": "1px solid #C7BBB0",
            "display": "inline-block",
            "float": "left",
            "margin-top": "7px",
            "cursor": "pointer",
            "color": "rgb(93, 86, 85)",
            "border-right": "0",


        });

        object.find('.file-manager-header').find('.fm_directory_path:eq(0)').css({

            "margin-left": "20px",
            "border-top-left-radius": "5px",
            "border-bottom-left-radius": "5px",


        });
        object.find('.file-manager-header').find('.fm_directory_path').eq(object.find('.file-manager-header').find('.fm_directory_path').length - 1).css({

            "border-right": "1px solid #C7BBB0",
            "border-top-right-radius": "5px",
            "border-bottom-right-radius": "5px",
            "font-weight": "bold",
            "background-color": "#f8f8f8",


        });
        object.find('.file-manager-header').find('.fm_search,.fm_grid,.fm_list').css({

            "height": "32px",
            "width": "34px",
            "padding-left": "8px",
            "padding-right": "8px",
            "line-height": "29px",
            "border": "1px solid #C7BBB0",
            "display": "inline-block",
            "float": "right",
            "margin-top": "7px",
            "cursor": "pointer",
            "color": "rgb(93, 86, 85)",


        });

        object.find('.file-manager-header').find('.fm_search').css({

            "margin-right": "20px",
            "border-radius": "5px",
            "background-image": "url(" + ASSETS_PATH + "images/search_list_type.png)",
            "background-position": "110px 35px",


        });
        object.find('.file-manager-header').find('.fm_grid').css({

            "margin-right": "20px",
            "border-left": 0,
            "border-top-right-radius": "5px",
            "border-bottom-right-radius": "5px",
            "background-image": "url(" + ASSETS_PATH + "images/search_list_type.png)",
            "background-position": "152px 35px",

        });
        object.find('.file-manager-header').find('.fm_list').css({


            "border-top-left-radius": "5px",
            "border-bottom-left-radius": "5px",
            "background-image": "url(" + ASSETS_PATH + "images/search_list_type.png)",
            "background-position": "70px 35px",
            "border-left": "0",

        });
    };

    FileManager.prototype.getBody = function () {

        var body = $('<div class="file-manager-body"/>');

        body.append($("<div class='file-manager-body-content'/>"));

        return body;

    };

    $.fn.FileManager = function (opts) {
        return this.each(function () {
            new FileManager(this, opts);
        });
    };

})(jQuery, document, window);

$(function () {

    $('#FileManager').FileManager();


});