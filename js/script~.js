//@@@@@@@@@@@@@@@@@@@@@@@@@
//ハンバーガーメニューの表示
//@@@@@@@@@@@@@@@@@@@@@@@@@

// jQuery(function($){
// $(function() {
//   $('.hamburger').click(function() {
//       $(this).toggleClass('active');
//       if ($(this).hasClass('active')) {
//           $('.globalMenuSp').addClass('active');
//           $('.accordion').css('border-radius','0');
//           $('.header_top_left>a').css('color','#272727');
//         } else {
//           $('.globalMenuSp').removeClass('active');
//           $('.accordion').css('border-radius','0 0 30px 30px');
//           $('.accordion').css('transition','0.5s');
//           $('.header_top_left>a').css('color','#57B07B');
//       }
//   });
// });

// });

jQuery("#hamburger").on("click", function () {
  jQuery("#accordion-item").slideToggle();
});

//@@@@@@@@@@@@@@@@@@@@@@@@@
//スクロールトップ
//@@@@@@@@@@@@@@@@@@@@@@@@@
// デフォルトではボタンを非表示にする
// $(function(){

//   $(".scroll-top").hide();

//   // 100px以上スクロールしたらボタンを表示させ、
//   // それ以下の場合は非表示にする
//   $(window).scroll(function() {
//     if($(this).scrollTop() > 100) {
//       $(".scroll-top").fadeIn();
//     } else {
//       $(".scroll-top").fadeOut();
//     }
//   });

//   // ボタンをクリックしたらページトップへ0.5秒で移動する
//   $(".scroll-top").click(function() {
//     $("html, body").animate({
//       scrollTop: 0
//     }, 500);
//     return false;
//   });
// });

// jQuery(function($){
// const tabs = $(".news-item")
// const contents = $(".training-info-item")

// tabs.on("click", function () {
//   tabs.removeClass("Tab__isActive")
//   contents.removeClass("Content__isActive")

//   const clickedTab = $(this)
//   clickedTab.addClass("Tab__isActive")

//   const id = "#" + clickedTab.data("id")
//   $(id).addClass("Content__isActive")
// })
// });

// jQuery(function ($) {
//   $(function () {
//     var tab = $(".news-item"),
//       content = $(".training-info-list");
//     pagenation = $(".pagination-list");

//     tab.on("click", function () {
//       //何番目のメニューがクリックされたのか、番号を取得する
//       var idx = tab.index($(this));
//       //「active」クラスを削除して、取得した番号と一致する要素に「active」クラスを付与する
//       tab.removeClass("Tab__isActive").eq(idx).addClass("Tab__isActive");
//       //「active」クラスを削除して、取得した番号と一致する要素に「active」クラスを付与する
//       content
//         .removeClass("")
//         .eq(idx)
//         .addClass("Content__isActive");
//       //「active」クラスを削除して、取得した番号と一致する要素に「active」クラスを付与する
//       pagenation
//         .removeClass("Pager__isActive")
//         .eq(idx)
//         .addClass("Pager__isActive");
//     });
//   });
// });
