!function(e){var n={};function t(a){if(n[a])return n[a].exports;var i=n[a]={i:a,l:!1,exports:{}};return e[a].call(i.exports,i,i.exports,t),i.l=!0,i.exports}t.m=e,t.c=n,t.d=function(e,n,a){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:a})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=8)}([function(e,n,t){"use strict";t.d(n,"a",function(){return o});var a=t(1),i=function(){function e(e,n){for(var t=0;t<n.length;t++){var a=n[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(n,t,a){return t&&e(n.prototype,t),a&&e(n,a),n}}();var o=function(){function e(){!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,e)}return i(e,null,[{key:"getUrlParam",value:function(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;n||(n=window.location.search);var t=new RegExp("(?:[?&]|&)"+e+"=([^&]+)","i"),a=n.match(t);return a&&a.length>1?a[1]:null}},{key:"asset",value:function(e){if("//"===e.substring(0,2)||"http://"===e.substring(0,7)||"https://"===e.substring(0,8))return e;var n="/"!==RV_MEDIA_URL.base_url.substr(-1,1)?RV_MEDIA_URL.base_url+"/":RV_MEDIA_URL.base_url;return"/"===e.substring(0,1)?n+e.substring(1):n+e}},{key:"showAjaxLoading",value:function(){(arguments.length>0&&void 0!==arguments[0]?arguments[0]:$(".rv-media-main")).addClass("on-loading").append($("#rv_media_loading").html())}},{key:"hideAjaxLoading",value:function(){(arguments.length>0&&void 0!==arguments[0]?arguments[0]:$(".rv-media-main")).removeClass("on-loading").find(".loading-wrapper").remove()}},{key:"isOnAjaxLoading",value:function(){return(arguments.length>0&&void 0!==arguments[0]?arguments[0]:$(".rv-media-items")).hasClass("on-loading")}},{key:"jsonEncode",value:function(e){return void 0===e&&(e=null),JSON.stringify(e)}},{key:"jsonDecode",value:function(e,n){if(!e)return n;if("string"==typeof e){var t=void 0;try{t=$.parseJSON(e)}catch(e){t=n}return t}return e}},{key:"getRequestParams",value:function(){return window.rvMedia.options&&"modal"===window.rvMedia.options.open_in?$.extend(!0,a.a.request_params,window.rvMedia.options||{}):a.a.request_params}},{key:"setSelectedFile",value:function(e){void 0!==window.rvMedia.options?window.rvMedia.options.selected_file_id=e:a.a.request_params.selected_file_id=e}},{key:"getConfigs",value:function(){return a.a}},{key:"storeConfig",value:function(){localStorage.setItem("MediaConfig",e.jsonEncode(a.a))}},{key:"storeRecentItems",value:function(){localStorage.setItem("RecentItems",e.jsonEncode(a.b))}},{key:"addToRecent",value:function(e){e instanceof Array?_.each(e,function(e){a.b.push(e)}):a.b.push(e)}},{key:"getItems",value:function(){var e=[];return $(".js-media-list-title").each(function(){var n=$(this),t=n.data()||{};t.index_key=n.index(),e.push(t)}),e}},{key:"getSelectedItems",value:function(){var e=[];return $(".js-media-list-title input[type=checkbox]:checked").each(function(){var n=$(this).closest(".js-media-list-title"),t=n.data()||{};t.index_key=n.index(),e.push(t)}),e}},{key:"getSelectedFiles",value:function(){var e=[];return $(".js-media-list-title[data-context=file] input[type=checkbox]:checked").each(function(){var n=$(this).closest(".js-media-list-title"),t=n.data()||{};t.index_key=n.index(),e.push(t)}),e}},{key:"getSelectedFolder",value:function(){var e=[];return $(".js-media-list-title[data-context=folder] input[type=checkbox]:checked").each(function(){var n=$(this).closest(".js-media-list-title"),t=n.data()||{};t.index_key=n.index(),e.push(t)}),e}},{key:"isUseInModal",value:function(){return"select-files"===e.getUrlParam("media-action")||window.rvMedia&&window.rvMedia.options&&"modal"===window.rvMedia.options.open_in}},{key:"resetPagination",value:function(){RV_MEDIA_CONFIG.pagination={paged:1,posts_per_page:40,in_process_get_media:!1,has_more:!0}}}]),e}()},function(e,n,t){"use strict";t.d(n,"a",function(){return a}),t.d(n,"b",function(){return o});var a=$.parseJSON(localStorage.getItem("MediaConfig"))||{},i={app_key:"483a0xyzytz1242c0d520426e8ba366c530c3d9dabc",request_params:{view_type:"tiles",filter:"everything",view_in:"all_media",search:"",sort_by:"created_at-desc",folder_id:0},hide_details_pane:!1,icons:{folder:"fa fa-folder-o"},actions_list:{basic:[{icon:"fa fa-eye",name:"Preview",action:"preview",order:0,class:"rv-action-preview"}],file:[{icon:"fa fa-link",name:"Copy link",action:"copy_link",order:0,class:"rv-action-copy-link"},{icon:"fa fa-pencil",name:"Rename",action:"rename",order:1,class:"rv-action-rename"},{icon:"fa fa-copy",name:"Make a copy",action:"make_copy",order:2,class:"rv-action-make-copy"}],user:[{icon:"fa fa-star",name:"Favorite",action:"favorite",order:2,class:"rv-action-favorite"},{icon:"fa fa-star-o",name:"Remove favorite",action:"remove_favorite",order:3,class:"rv-action-favorite"}],other:[{icon:"fa fa-download",name:"Download",action:"download",order:0,class:"rv-action-download"},{icon:"fa fa-trash",name:"Move to trash",action:"trash",order:1,class:"rv-action-trash"},{icon:"fa fa-eraser",name:"Delete permanently",action:"delete",order:2,class:"rv-action-delete"},{icon:"fa fa-undo",name:"Restore",action:"restore",order:3,class:"rv-action-restore"}]},denied_download:["youtube"]};a.app_key&&a.app_key===i.app_key||(a=i);var o=$.parseJSON(localStorage.getItem("RecentItems"))||[]},function(e,n,t){"use strict";Object.defineProperty(n,"__esModule",{value:!0}),t.d(n,"EditorService",function(){return s});var a=t(0),i=t(1),o=function(){function e(e,n){for(var t=0;t<n.length;t++){var a=n[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(n,t,a){return t&&e(n.prototype,t),a&&e(n,a),n}}();function r(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}var s=function(){function e(){r(this,e)}return o(e,null,[{key:"editorSelectFile",value:function(e){var n=a.a.getUrlParam("CKEditor")||a.a.getUrlParam("CKEditorFuncNum");if(window.opener&&n){var t=_.first(e);window.opener.CKEDITOR.tools.callFunction(a.a.getUrlParam("CKEditorFuncNum"),t.url),window.opener&&window.close()}}}]),e}(),d=function e(n,t){r(this,e),window.rvMedia=window.rvMedia||{};var o=$("body");t=$.extend(!0,{multiple:!0,type:"*",onSelectFiles:function(e,n){}},t);var s=function(e){e.preventDefault();var n=$(this);$("#rv_media_modal").modal(),window.rvMedia.options=t,window.rvMedia.options.open_in="modal",window.rvMedia.$el=n,i.a.request_params.filter="everything",a.a.storeConfig();var o=window.rvMedia.$el.data("rv-media");void 0!==o&&o.length>0&&(o=o[0],window.rvMedia.options=$.extend(!0,window.rvMedia.options,o||{}),void 0!==o.selected_file_id?window.rvMedia.options.is_popup=!0:void 0!==window.rvMedia.options.is_popup&&(window.rvMedia.options.is_popup=void 0)),0===$("#rv_media_body .rv-media-container").length?$("#rv_media_body").load(RV_MEDIA_URL.popup,function(e){e.error&&alert(e.message),$("#rv_media_body").removeClass("media-modal-loading").closest(".modal-content").removeClass("bb-loading")}):$(document).find(".rv-media-container .js-change-action[data-type=refresh]").trigger("click")};"string"==typeof n?o.on("click",n,s):n.on("click",s)};window.RvMediaStandAlone=d,$(".js-insert-to-editor").off("click").on("click",function(e){e.preventDefault();var n=a.a.getSelectedFiles();_.size(n)>0&&s.editorSelectFile(n)}),$.fn.rvMedia=function(e){var n=$(this);i.a.request_params.filter="everything","trash"===i.a.request_params.view_in?$(document).find(".js-insert-to-editor").prop("disabled",!0):$(document).find(".js-insert-to-editor").prop("disabled",!1),a.a.storeConfig(),new d(n,e)}},,,,,,function(e,n,t){e.exports=t(2)}]);
//# sourceMappingURL=integrate.js.map