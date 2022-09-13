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

  const btnHamburger = $('.btnHamburger')

  // ヘッダー固定開始位置の要素
  // ページごとに固定開始位置を変える
  const target = location.pathname === '/index.html' ? $('#news') : $('main')
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
        btnHamburger.addClass('header-fixed')
        target.css('padding-top', targetPaddingTopHeaderFixed)
      } else {
        header.removeClass('fixed')
        btnHamburger.removeClass('header-fixed')
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

  //
  // トップへ戻るボタンの表示位置タイミング・位置調整
  //
  const totop = $('.to_top')
  $(window).scroll(function () {
    // スクロールしたら出す
    if ($(this).scrollTop() > 100) {
      totop.fadeIn()
    } else {
      totop.fadeOut()
    }

    // フッターの上で止まる
    const documentHeight = $(document).height() //ドキュメントの高さ
    const scrollPosition = $(window).height() + $(window).scrollTop() //現在地
    const footHeight = $('footer').innerHeight() //footerの高さ（＝止めたい位置）

    //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
    if (documentHeight - scrollPosition <= footHeight) {
      totop.css({
        position: 'absolute', //positionをabsolute（親：wrapperからの絶対値）に変更
        bottom: footHeight + 20, //下からfooterの高さ + 20px上げた位置に配置
      })
    } else {
      totop.css({
        position: 'fixed', //固定表示
        bottom: '10px', //下から20px上げた位置に
      })
    }
  })

  //
  // サイドバーをフッターの手前で止める
  //
  if (window.matchMedia('(min-width: 1179px)').matches) {
    const aside = $('aside')
    $(window).scroll(function () {
      // スクロール位置の座標
      const scrollPosition = $(window).scrollTop()
      // asideの高さ
      const asideHeight = aside.innerHeight()
      const footer = $('footer')
      // footerの最上部の座標
      const footerPosition = footer.offset().top
      // footerの高さ
      const footerHeight = footer.innerHeight()
      // スクロール位置の座標+asideの高さがfooter最上部の座標より大きくなったら
      if (scrollPosition + asideHeight >= footerPosition) {
        // サイドバーの下位置をフッターの最上部の座標にする
        aside.css({
          position: 'absolute',
          bottom: footerHeight,
          top: 'auto',
        })
      } else {
        aside.css({
          position: 'fixed', //固定表示
          top: '0',
          bottom: 'auto',
        })
      }
    })
  }

  // アーティスト画像クリック時のモーダル設定
  // class名が「modal」から始まる要素を取得してループ
  $("[class^='modal']").each(function (i, element) {
    $(element).modaal({
      // 要素のclass名と同じid名持つボックスを表示
      content_source: '#' + $(element).attr('class'),
      overlay_opacity: 1,
      // モーダル内をクリックするとエラーになるので、モーダルを閉じたあと画面再読み込みしてエラー状態を回復する
      after_close: function () {
        location.reload()
      },
    })
  })
  // モーダル内のaタグクリックイベントが効かないのでJSで設定
  $('.link').on('click', function () {
    window.open($(this).attr('href'), '_blank')
    return false
  })

  //
  // 表示するタイムテーブルを切り替える
  //
  const date_select_day_1 = $('.date_select.day_1')
  const date_select_day_2 = $('.date_select.day_2')
  const time_table_day_1 = $('.time_table.day_1')
  const time_table_day_2 = $('.time_table.day_2')

  // day_1のボタンが押された場合の処理
  date_select_day_1.on('click', () => {
    // day_1ボタンをアクティブにする
    date_select_day_1.addClass('is_active')
    date_select_day_2.removeClass('is_active')
    // day_1のタイムテーブルを表示して、day2のタイムテーブルを非表示にする
    time_table_day_1.show()
    time_table_day_2.hide()
  })

  // day_2のボタンが押された場合の処理
  date_select_day_2.on('click', () => {
    // day_2ボタンをアクティブにする
    date_select_day_2.addClass('is_active')
    date_select_day_1.removeClass('is_active')
    // day_2の日付のタイムテーブルを表示して、day1のタイムテーブルを非表示にする
    time_table_day_2.show()
    time_table_day_1.hide()
  })

  //
  // lightbox用の設定
  //
  if (location.pathname === '/index.html') {
    lightbox.option({
      // 最後の画像の場合に1枚目に戻るナビゲーションを表示する
      wrapAround: true,
      // SPでナビゲーションを表示する
      alwaysShowNavOnTouchDevices: true,
    })
  }

  //
  // スクロールに連動して要素をフェード表示する
  //
  $(window).scroll(function () {
    $('.fd').each(function () {
      const imgPos = $(this).offset().top
      const scroll = $(window).scrollTop()
      const windowHeight = $(window).height()
      if (scroll > imgPos - windowHeight + windowHeight / 5) {
        $(this).addClass('fade_on')
      } else {
        $(this).removeClass('fade_on')
      }
    })
  })
})
