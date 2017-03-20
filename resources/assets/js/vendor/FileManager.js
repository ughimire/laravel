;(function ($, doc, win) {
    "use strict";


    function FileManager(el, opts) {


        this.selector = $(el);

        this.defaults = {};

        this.options = $.extend(this.defaults, opts);


        this.init();
    }

    FileManager.prototype.init = function () {

        this.initHtml();

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

        this.initStyle(wrapper);

        this.selector.append(wrapper);
    };
    FileManager.prototype.getSidebar = function () {

        var sidebar = $('<div class="file-manager-sidebar"/>');

        return sidebar;

    };
    FileManager.prototype.getHeader = function () {

        var header = $('<div class="file-manager-header"/>');

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
            "border": "1px solid #919191

        });

        object.find('.file-manager-sidebar').css({
            "min-height": "300px",

            "width": "10%",
            "max-width": "10%",
            "background": "#F2F1F0",
            "border-right": "1px solid #D3D0CD",
            "float": "left",


        });
        object.find('.file-manager-body-content').css({

            "min-height": "300px",
            "width": "90%",
            "max-width": "90%",
            "background": "#ffffff",
            "float": "right"


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