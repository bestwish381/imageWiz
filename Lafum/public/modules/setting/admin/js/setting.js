!function(){"use strict";$(".changeLogoHeaderColor").on("click",(function(){$(".logo-header").attr("data-background-color",$(this).val())})),$(".changeTopBarColor").on("click",(function(){$(".main-header .navbar-header").attr("data-background-color",$(this).val())})),$(".changeSideBarColor").on("click",(function(){$(".sidebar").attr("data-background-color",$(this).val()),"white"==$(this).val()?$(".sidebar .nav").addClass("nav-primary"):$(".sidebar .nav").removeClass("nav-primary")})),$(".changeBackgroundColor").on("click",(function(){$("body").attr("data-background-color",$(this).val())}))}();
//# sourceMappingURL=setting.js.map