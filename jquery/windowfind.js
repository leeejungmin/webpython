$(document).ready(function(){

    var page_url = window.location.href;
    var page_id = page_url.substring(page_url.lastIndexOf("#")+1);
    if(page_id == "secton3"){
      $("html, body").animate({
        scrollTop: $("#scroll-" + page_id).offset().top + 100
        /// top에서부터의 위치를 정함

      },1000);}
        else if(page_id == "post"){
          scrollTop: $("#scroll-" + page_id).offset().top + 100
          /// top에서부터의 위치를 정함

        },1000);
        }

        // section안의 id가 scroll-~~
      })
    }
})
