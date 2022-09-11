//ページの内容（HTMLやCSSなど）を全て読み込み準備が整ったら実行
$(function () {
  //.btnHamburgerがクリックされた時の処理
  $('.btnHamburger').on('click', function () {
    $('.btnHamburger,#coverlayer,.drawer_menu').toggleClass('is-active')
  })

  // ドロワーメニュー内のnavがクリックされた場合の処理
  $('nav ul li a').on('click', function () {
    $('.btnHamburger,#coverlayer,.drawer_menu').removeClass('is-active')
  })
})
