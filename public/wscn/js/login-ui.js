(function(root, factory) {
    if (typeof define === "function" && define.amd) {
        define("LoginUI", function (require, exports, module) {
            var $ = require("jquery");
            //Export to global anyway
            root.LoginUI = factory(root, exports, $);
            return root.LoginUI;
        });
    } else if (typeof exports !== "undefined") {
        var $ = require("jquery");
        factory(root, exports, $);
    } else {
        root.LoginUI = factory(root, {}, root.jQuery);
    }

}(this, function(root, LoginUI, $) {
    "use strict";
    var defaultOptions = {
        "rootSelector" : "#user-modal",
        "carouselSelector" : "#user-modal-carousel",
    };

    //Debug shortcut
    function p(){
        if(typeof console === "undefined") {
            return false;
        }
        console.info.apply(console, arguments);
    }

    /************************************
      Constructors
     ************************************/
    LoginUI = function(options){
        this.options = {};
        this.initialize(options);
        this.rootUI = $(this.options.rootSelector);
        this.carousel = $(this.options.carouselSelector);
    };

    /************************************
      Constants
     ************************************/

    /************************************
      Public Methods
     ************************************/
    LoginUI.prototype = {
        getOptions : function(){
            return this.options;
        }

        , getRootUI : function() {
            return this.rootUI;
        }

        , showModal : function(name) {
            this.rootUI.addClass("active");
            this.carousel.find(".item.active").removeClass("active");
            switch(name) {
                case "register" :
                    this.carousel.find(".item:eq(2)").addClass("active");
                    break;
                case "reset" :
                    this.carousel.find(".item:eq(0)").addClass("active");
                    break;
                case "login-connect" :
                    this.carousel.find(".item:eq(3)").addClass("active");
                    break;
                case "register-connect" :
                    this.carousel.find(".item:eq(4)").addClass("active");
                    break;
                case "login" :
                default:
                    this.carousel.find(".item:eq(1)").addClass("active");
                    break;
            }      
        }

        , hideModel : function() {
            this.rootUI.removeClass("active");
        }      

        , showMessage : function(message, messageCode, messageType) {
            var uiClass = messageType === "error" ? "alert-danger" : "alert-success";
            this.rootUI.find(".item.active form")
                .remove(".alert")
                .prepend("<div data-raw-message='" + messageCode + "' class='alert " + uiClass + "'>" + message + "<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button></div>");
        }

        , hideMessage : function() {
            this.rootUI.find(".item.active form").remove('.alert');
        }

        , showUser : function(username, avatar, site) {
            var sites = {
                "weibo" : "微博",
                "tencent" : "QQ"
            };
            this.rootUI.find("[data-auth-avatar]").attr("src", avatar);
            this.rootUI.find("[data-auth-user]").html(username);
            this.rootUI.find("[data-auth-site]").html(sites[site]);
        }

        , initialize: function(opts){
            this.options = $.extend({}, defaultOptions, opts);
        }
    };

    return LoginUI;
}));
