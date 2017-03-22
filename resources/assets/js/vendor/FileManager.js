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

        this.initResources();
        this.initHtml();


    };

    FileManager.prototype.initResources = function () {


        $('<link>')
            .attr('rel', 'stylesheet')
            .attr('href', 'https://fonts.googleapis.com/css?family=Ubuntu')
            .appendTo('head');


        $('<link>')
            .attr('rel', 'stylesheet')
            .attr('href', ASSETS_PATH + 'scss/vendor/FileManager.css')
            .appendTo('head');

        this.selector.css({

            "font-family": "'Ubuntu', sans-serif"
        });


    };

    FileManager.prototype.destroy = function () {


    };
    FileManager.prototype.initHtml = function () {


        var wrapper = $("<div class='file-manager-wrapper' style='display:none'/>");

        var header = this.getHeader();

        var body = this.getBody();

        var sidebar = this.getSidebar();

        body.append(sidebar);

        var footer = this.getFooter();

        wrapper.append(header).append(body).append(footer);


        this.bindEvents(wrapper);

        this.initStyle(wrapper);

        this.selector.append(wrapper);

        var $this = this;

        setTimeout(function () {

            $this.selector.find('.file-manager-wrapper').show();

        }, 500);


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

            search.closest('.file-manager-wrapper').find('.file-manager-body-content').find('.fm_search_block').removeClass('fm-search-show');

        } else {

            search.addClass('active');

            search.closest('.file-manager-wrapper').find('.file-manager-body-content').find('.fm_search_block').addClass('fm-search-show');

            search.closest('.file-manager-wrapper').find('.file-manager-body-content').find('.fm_search_block').find('.fm_search_box').focus();


        }

    };
    FileManager.prototype.getHeader = function () {

        var header = $('<div class="file-manager-header"/>');

        header.append('<h1>Downloads</h1>');

        header.append('<span id="fm_prev"></span>');

        header.append('<span  id="fm_next"></span>');

        header.append('<span  class="fm_directory_path first">Home</span>');

        header.append('<span  class="fm_directory_path">Downloads</span>');

        header.append('<span  class="fm_directory_path last">Magento</span>');

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

        object.find('.file-manager-header').css({


            "background": "url(" + ASSETS_PATH + "images/line.png)",


        });

        object.find('.file-manager-header').find('#fm_prev').css({


            "background-position": "72px 100%",
            "background-image": "url(" + ASSETS_PATH + "images/next_prev.png)",


        });
        object.find('.file-manager-header').find('#fm_next').css({

            "background-position": "93% 74px",
            "background-image": "url(" + ASSETS_PATH + "images/next_prev.png)",


        });


        object.find('.file-manager-header').find('.fm_search').css({

            "background-image": "url(" + ASSETS_PATH + "images/search.png)",
            "background-size": "19px 19px",
            "background-position": "6px 6px",
            "background-repeat": "no-repeat",


        });
        object.find('.file-manager-header').find('.fm_grid').css({

            "background-image": "url(" + ASSETS_PATH + "images/search_list_type.png)",
            "background-position": "152px 35px",

        });
        object.find('.file-manager-header').find('.fm_list').css({

            "background-image": "url(" + ASSETS_PATH + "images/search_list_type.png)",
            "background-position": "70px 35px",


        });
    };

    FileManager.prototype.getBody = function () {

        var body = $('<div class="file-manager-body"/>');

        body.append($("<div class='file-manager-body-content'/>"));


        var searchBlock = $('<div class="fm_search_block"/>');
        searchBlock.append('<span  class="fm_search_icon"></span>');
        searchBlock.append('<input type="text" class="fm_search_box"/>');

        searchBlock.append('<span  class="fm_plus">+</span>');
        searchBlock.append('<span  class="fm_all_files">All files</span>');
        searchBlock.append('<span  class="fm_search_directory">Home</span>');




        searchBlock.find('.fm_search_icon').css({

            "background-image": "url(" + ASSETS_PATH + "images/search.png)",
            "background-size": "19px 19px",
            "background-position": "6px 6px",
            "background-repeat": "no-repeat",


        });

        body.find('.file-manager-body-content').append(searchBlock);

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