//ページの内容（HTMLやCSSなど）を全て読み込み準備が整ったら実行
$(function () {
  //
  // ハンバーガーメニュークリックでのドロワー表示
  //
  //.btnHamburgerがクリックされた時の処理
  $('.btnHamburger').on('click', function () {
    $('.btnHamburger,#coverlayer,.drawer_menu').toggleClass('is-active')
  })
  // ドロワーメニュー内のnavがクリックされた場合の処理
  $('nav ul li a').on('click', function () {
    $('.btnHamburger,#coverlayer,.drawer_menu').removeClass('is-active')
  })

  //
  // 途中からヘッダー固定する処理
  //
  const header = $('header')
  const headerHeight = header.height()

  // ヘッダー固定開始位置の要素
  const target = $('#news')
  const targetPosition = target.offset().top
  // ターゲットに元々設定されているpadding-top
  const targetPaddingTop = Number(target.css('padding-top').replace('px', ''))
  // ヘッダー固定された際に設定するpadding-top
  const targetPaddingTopHeaderFixed = targetPaddingTop + headerHeight

  $(window).scroll(function () {
    // ヘッダーがサイドバーに表示されている場合はヘッダ―固定しない
    if (window.matchMedia('(max-width: 1178px)').matches) {
      // スクロール位置
      const scrollPosition = $(window).scrollTop()

      if (scrollPosition >= targetPosition) {
        header.addClass('fixed')
        target.css('padding-top', targetPaddingTopHeaderFixed)
      } else {
        header.removeClass('fixed')
        target.css('padding-top', targetPaddingTop)
      }
    }
  })

  //
  // スムーススクロール
  //
  // #で始まる出発地点をクリックした場合に処理を実行
  $('a[href^="#"]').click(function () {
    // 出発地点のhref属性を取得
    const href = $(this).attr('href')
    // 到着地点を取得
    const target = $(href == '#' || href == '' ? 'html' : href)

    // ヘッダー固定しているとページ内リンクで移動した際に見出しが隠れるので、ヘッダーの高さ分上にずらして到着させる
    // ヘッダーの高さを取得
    const headerHeight = $('header').height()

    // 到着地点を数値で取得、固定ヘッダーの高さを考慮
    const position = target.offset().top - headerHeight
    // スムーススクロールの実行
    $('body,html').animate({ scrollTop: position }, 500, 'swing')

    // トップへ戻るボタンを押した時のボタンちらつき防止
    return false
  })
})
