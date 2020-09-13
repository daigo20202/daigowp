<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ bloginfo('name') }}</title>
    <link rel="stylesheet" href="{{ get_template_directory_uri() }}/style.css">
    {{--<!--
    <!-- OGP設定 -->
    <meta property="fb:app_id" content="672976592720249" />
    <meta property="fb:admins" content="100001538665676" />
    <meta name="twitter:card" value="summary_large_image"/>
    <meta name="twitter:site" value="@manabubannai" />
    <meta name="twitter:creator" value="@manabubannai" />
    <meta name="twitter:title" value="【無料公開あり】影響力の高め方【５つの手順／体験談で解説する】"/>
    <meta name="twitter:description" value="影響力の高め方。①まずは圧倒的な継続／②コミュニティに入る／③爆速で企画に乗っかる／④常に新しい挑戦をする／⑤炎上をコントロールする。僕が思うに、ここが大切です。記事を読み、影響力の高め方を考えてみてください。"/>

    <meta property="og:site_name" content="manablog" />
    <meta property="og:description" content="影響力の高め方。①まずは圧倒的な継続／②コミュニティに入る／③爆速で企画に乗っかる／④常に新しい挑戦をする／⑤炎上をコントロールする。僕が思うに、ここが大切です。記事を読み、影響力の高め方を考えてみてください。" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://manablog.org/wp-content/themes/manabu/images/ogp.png" />
    <meta name="twitter:image" value="https://manablog.org/wp-content/themes/manabu/images/logo_tw.jpg" />
    <!-- /OGP設定 -->

    <link rel="shortcut icon" href="https://manablog.org/wp-content/themes/manabu/images/favicon.ico">
    <meta itemprop="name" content="【無料公開あり】影響力の高め方【５つの手順／体験談で解説する】">
    <meta itemprop="description" content="https://manablog.org/how-to-influence/">
    <meta name="description"  content="ITの技術情報を中心に、Web Marketing（特にSEO）情報や旅行情報など幅広く発信中。人生で得たスキルや知識のアウトプットブログです。" />

    <meta name="keywords"  content="影響力 高める,お金持ちになる方法,頑張っても給料が上がらない,金儲けが上手い人 特徴,音声コンテンツ 将来,後悔しない生き方,wordpress ブログ 投稿方法,尊敬できる人 特徴,発信することの大切さ" />
    <link rel="next" href="https://manablog.org/page/2/" />
    all in one seo pack wordpress plugin
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet' id='wp-block-library-css'  href='https://manablog.org/wp-includes/css/dist/block-library/style.min.css?ver=5.2.7' type='text/css' media='all' />
    <link rel='https://api.w.org/' href='https://manablog.org/wp-json/' />
    -->--}}
  </head>
  <body>
    @include('header')
    <main>
      @yield('content')
    </main>
    @include('footer')
  </body>
</html>
