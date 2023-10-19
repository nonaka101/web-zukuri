<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
  <meta name="description" content="アクセシビリティに配慮したサイト設計を目指して">
  <link rel="stylesheet" href="./assets/css/normalize.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Noto+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/devUtilities.css">
</head>

<body>
  <div class="ly_mainArea">
    <header class="ly_mainArea_header">
      <div class="bl_header">
        <a class="bl_header_siteTitle" href="./index.html" id="anchor_header">
          <img src="./assets/images/Dummy_logo.PNG" alt="Logo">
          <!-- トップページのみ h1、それ以外は span -->
          <h1>Web-Zukuri</h1>
        </a>
        <!-- /.bl_header_siteTitle -->
        <nav class="bl_header_mobileMenu" id="anchor_mobileMenu" aria-label="メニュー">
          <a href="./search.html" class="bl_header_btnIcon">
            <svg role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
              height="24">
              <path d="M21 20.5L15 14.5C16.2 13.2 16.9 11.4 16.9 9.5C17 5.4 13.6 2 9.5 2C5.4 2 2 5.4
                  2 9.5C2 13.6 5.3 17 9.5 17C11.2 17 12.7 16.4 14 15.5L20 21.5L21 20.5ZM3.5
                  9.5C3.5 6.2 6.2 3.5 9.5 3.5C12.8 3.5 15.5 6.2 15.5 9.5C15.5 12.8 12.8 15.5
                  9.5 15.5C6.2 15.5 3.5 12.8 3.5 9.5Z">
              </path>
            </svg>
            検索
          </a>
          <!-- /.bl_header_btnIcon -->
          <button type="button" aria-controls="menu" id="menu-button" class="bl_header_btnIcon">
            <svg role="img" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
              height="24">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M21 5.5H3V7H21V5.5ZM21 11.2998H3V12.7998H21V11.2998ZM3 17H21V18.5H3V17Z"></path>
            </svg>
            メニュー
          </button>
          <!-- /.bl_header_btnIcon -->
        </nav>
        <!-- /.bl_header_mobileMenu -->
      </div>
      <!-- /.bl_header -->
    </header>
    <!-- /.ly_mainArea_header -->

    <nav class="bl_blockSkip_wrapper" aria-label="ページ内リンク集">
      <div class="bl_blockSkip">
        <p class="bl_blockSkip_title">ブロックスキップ</p>
        <p class="bl_blockSkip_description">各種ページ位置に移動できます</p>
        <ul class="bl_blockSkip_linkList">
          <li class="bl_blockSkip_linkItem">
            <a href="#anchor_mainContent" class="el_link">このページの本文</a>
          </li>
          <!-- /.bl_blockSkip_linkItem -->
          <li class="bl_blockSkip_linkItem">
            <a href="#anchor_footer" class="el_link">フッター</a>
          </li>
          <!-- /.bl_blockSkip_linkItem -->
          <li class="bl_blockSkip_linkItem bl_blockSkip_linkItem__isMobile">
            <a href="#anchor_mobileMenu" class="el_link">メインメニュー</a>
          </li>
          <!-- /.bl_blockSkip_linkItem -->
          <li class="bl_blockSkip_linkItem bl_blockSkip_linkItem__isDesktop">
            <a href="#anchor_desktopMainMenu" class="el_link">メインメニュー</a>
          </li>
          <!-- /.bl_blockSkip_linkItem -->
          <li class="bl_blockSkip_linkItem bl_blockSkip_linkItem__isDesktop">
            <a href="#anchor_desktopSubMenu" class="el_link">サイドメニュー</a>
          </li>
          <!-- /.bl_blockSkip_linkItem -->
        </ul>
        <!-- /.bl_blockSkip_linkList -->
      </div>
      <!-- /.bl_blockSkip -->
    </nav>
    <!-- /.bl_blockSkip_wrapper -->

    <dialog class="ly_dialog_wrapper" id="menu">
      <div class="ly_dialog">
        <button class="bl_btn bl_btn__primary" type="button" onclick="closeDialog()">メニューを閉じる</button>
        <h2>メニュー</h2>

        <!--≡≡≡ ▼ template-parts/parts-menu.php[main] ▼ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡-->
        <div class="bl_tagMenu">
          <ul class="bl_tagMenu_list">
            <li class="bl_tagMenu_item">
              <a href="./index.html" class="bl_tagMenu_link">Home</a>
            </li>
            <!-- /.bl_tagMenu_item -->
          </ul>
          <!-- /.bl_tagMenu_list -->
        </div>
        <!-- /.bl_tagMenu -->
        <div class="bl_tagMenu">
          <span class="bl_tagMenu_title">プロジェクトについて</span>
          <ul class="bl_tagMenu_list">
            <li class="bl_tagMenu_item">
              <a href="./single.html" class="bl_tagMenu_link">Read me</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="https://github.com/nonaka101/web-zukuri" class="bl_tagMenu_link">GitHub</a>
            </li>
            <!-- /.bl_tagMenu_item -->
          </ul>
          <!-- /.bl_tagMenu_list -->
        </div>
        <!-- /.bl_tagMenu -->
        <div class="bl_tagMenu">
          <span class="bl_tagMenu_title">サンプルページ一覧</span>
          <ul class="bl_tagMenu_list">
            <li class="bl_tagMenu_item">
              <a href="./single.html" class="bl_tagMenu_link">投稿ページ(Read me)</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./page.html" class="bl_tagMenu_link">固定ページ</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./archive.html" class="bl_tagMenu_link">アーカイブ</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./search.html" class="bl_tagMenu_link">検索</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./404.html" class="bl_tagMenu_link">404</a>
            </li>
            <!-- /.bl_tagMenu_item -->
          </ul>
          <!-- /.bl_tagMenu_list -->
        </div>
        <!-- /.bl_tagMenu -->
        <!--≡≡≡ ▲ template-parts/parts-menu.php[main] ▲ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡-->

        <hr>
        <div class="bl_tagMenu">
          <ul class="bl_tagMenu_list">
            <li class="bl_tagMenu_item">
              <a href="./search.html" class="bl_tagMenu_link">サイト内検索</a>
            </li>
            <!-- /.bl_tagMenu_item -->
          </ul>
          <!-- /.bl_tagMenu_list -->
        </div>
        <!-- /.bl_tagMenu -->

        <!--≡≡≡ ▼ template-parts/parts-menu.php[sub] ▼ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡-->
        <div class="bl_tagMenu">
          <ul class="bl_tagMenu_list">
            <li class="bl_tagMenu_item">
              <a href="./index.html" class="bl_tagMenu_link">トップページ</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./single.html" class="bl_tagMenu_link">Read me</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="https://github.com/nonaka101/web-zukuri" class="bl_tagMenu_link">GitHub</a>
            </li>
            <!-- /.bl_tagMenu_item -->
          </ul>
          <!-- /.bl_tagMenu_list -->
        </div>
        <!-- /.bl_tagMenu -->
        <div class="bl_tagMenu">
          <ul class="bl_tagMenu_list">
            <li class="bl_tagMenu_item">
              <a href="./single.html" class="bl_tagMenu_link">投稿ページ(Read me)</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./page.html" class="bl_tagMenu_link">固定ページ</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./archive.html" class="bl_tagMenu_link">アーカイブ</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./search.html" class="bl_tagMenu_link">検索</a>
            </li>
            <!-- /.bl_tagMenu_item -->
            <li class="bl_tagMenu_item">
              <a href="./404.html" class="bl_tagMenu_link">404</a>
            </li>
            <!-- /.bl_tagMenu_item -->
          </ul>
          <!-- /.bl_tagMenu_list -->
        </div>
        <!-- /.bl_tagMenu -->
        <!--≡≡≡ ▲ template-parts/parts-menu.php[sub] ▲ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡-->

        <!--≡≡≡ ▼ template-parts/parts-categories-and-archives.php ▼ ≡≡≡≡≡≡≡≡≡≡≡≡≡-->
        <div class="bl_tagMenu">
          <span class="bl_tagMenu_title">アーカイブ</span>
          <details class="bl_accordion">
            <summary class="bl_accordion_summary">カテゴリ一覧</summary>
            <div class="bl_accordion_description">
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">Uncategorized</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">えいご</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">お知らせ</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">カテゴリー 1</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <div class="bl_accordion bl_accordion__dummy">
                    <a href="./archive.html">カテゴリー 2</a>
                  </div>
                  <!-- /.bl_accordion bl_accordion__dummy -->
                  <div class="bl_accordion bl_accordion__dummy">
                    <a href="./archive.html">カテゴリー 3</a>
                  </div>
                  <!-- /.bl_accordion bl_accordion__dummy -->
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">カテゴリー A</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">カテゴリー B</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">カテゴリー C</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">テンプレート</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">ブログ</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">未公開</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <div class="bl_accordion bl_accordion__dummy">
                <a href="./archive.html">未分類</a>
              </div>
              <!-- /.bl_accordion bl_accordion__dummy -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">親カテゴリー</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <div class="bl_accordion bl_accordion__dummy">
                    <a href="./archive.html">子カテゴリー 01</a>
                  </div>
                  <!-- /.bl_accordion bl_accordion__dummy -->
                  <div class="bl_accordion bl_accordion__dummy">
                    <a href="./archive.html">子カテゴリー 02</a>
                  </div>
                  <!-- /.bl_accordion bl_accordion__dummy -->
                  <details class="bl_accordion">
                    <summary class="bl_accordion_summary">
                      <a href="./archive.html">子カテゴリー 03</a>
                    </summary>
                    <!-- /.bl_accordion_summary -->
                    <div class="bl_accordion_description">
                      <div class="bl_accordion bl_accordion__dummy">
                        <a href="./archive.html">孫カテゴリー</a>
                      </div>
                      <!-- /.bl_accordion bl_accordion__dummy -->
                    </div>
                    <!-- /.bl_accordion_description -->
                  </details>
                  <!-- /.bl_accordion -->
                  <div class="bl_accordion bl_accordion__dummy">
                    <a href="./archive.html">子カテゴリー 04</a>
                  </div>
                  <!-- /.bl_accordion bl_accordion__dummy -->
                  <div class="bl_accordion bl_accordion__dummy">
                    <a href="./archive.html">子カテゴリー 05</a>
                  </div>
                  <!-- /.bl_accordion bl_accordion__dummy -->
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
            </div>
            <!-- /.bl_accordion_description -->
          </details>
          <!-- /.bl_accordion -->
          <details class="bl_accordion">
            <summary class="bl_accordion_summary">年月一覧</summary>
            <div class="bl_accordion_description">
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2023 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">9月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">7月</a>&nbsp;(1)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2022 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">11月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">10月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">9月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">8月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">7月</a>&nbsp;(2)
                  </li>
                  <li>
                    <a href="./archive.html">4月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">3月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">1月</a>&nbsp;(1)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2021 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">12月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">11月</a>&nbsp;(1)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2020 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">1月</a>&nbsp;(1)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2019 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">1月</a>&nbsp;(5)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2018 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">3月</a>&nbsp;(5)
                  </li>
                  <li>
                    <a href="./archive.html">1月</a>&nbsp;(6)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2017 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">3月</a>&nbsp;(1)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2015 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">10月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">9月</a>&nbsp;(2)
                  </li>
                  <li>
                    <a href="./archive.html">8月</a>&nbsp;(3)
                  </li>
                  <li>
                    <a href="./archive.html">7月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">6月</a>&nbsp;(3)
                  </li>
                  <li>
                    <a href="./archive.html">5月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">4月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">3月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">2月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">1月</a>&nbsp;(1)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
              <details class="bl_accordion">
                <summary class="bl_accordion_summary">
                  <a href="./archive.html">2010 年</a>
                </summary>
                <!-- /.bl_accordion_summary -->
                <div class="bl_accordion_description">
                  <li>
                    <a href="./archive.html">10月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">9月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">8月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">7月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">6月</a>&nbsp;(1)
                  </li>
                  <li>
                    <a href="./archive.html">5月</a>&nbsp;(1)
                  </li>
                </div>
                <!-- /.bl_accordion_description -->
              </details>
              <!-- /.bl_accordion -->
            </div>
            <!-- /.bl_accordion_description -->
          </details>
          <!-- /.bl_accordion -->
        </div>
        <!-- /.bl_tagMenu -->
        <!--≡≡≡ ▲ template-parts/parts-categories-and-archives.php ▲ ≡≡≡≡≡≡≡≡≡≡≡≡≡-->

        <section>
          <h2 class="el_header__xs">アドレス</h2>
          <address>〒000-0000 A県B市C区D町123-4</address>
        </section>
        <nav aria-label="SNS" class="bl_snsIcon">
          <a href="#" class="bl_snsIcon_item">
            <svg role="img" aria-label="Twitter" height="32px" width="32px" version="1.1" id="Layer_1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve">
              <style type="text/css">
                .st0 {
                  fill: #1B9DF0;
                }

                .st1 {
                  fill: #FFFFFF;
                }
              </style>
              <g id="Dark_Blue">
                <circle class="st0" cx="200" cy="200" r="200" />
              </g>
              <g id="Logo__x2014__FIXED">
                <path class="st1" d="M163.4,305.5c88.7,0,137.2-73.5,137.2-137.2c0-2.1,0-4.2-0.1-6.2c9.4-6.8,17.6-15.3,24.1-25
                  c-8.6,3.8-17.9,6.4-27.7,7.6c10-6,17.6-15.4,21.2-26.7c-9.3,5.5-19.6,9.5-30.6,11.7c-8.8-9.4-21.3-15.2-35.2-15.2
                  c-26.6,0-48.2,21.6-48.2,48.2c0,3.8,0.4,7.5,1.3,11c-40.1-2-75.6-21.2-99.4-50.4c-4.1,7.1-6.5,15.4-6.5,24.2
                  c0,16.7,8.5,31.5,21.5,40.1c-7.9-0.2-15.3-2.4-21.8-6c0,0.2,0,0.4,0,0.6c0,23.4,16.6,42.8,38.7,47.3c-4,1.1-8.3,1.7-12.7,1.7
                  c-3.1,0-6.1-0.3-9.1-0.9c6.1,19.2,23.9,33.1,45,33.5c-16.5,12.9-37.3,20.6-59.9,20.6c-3.9,0-7.7-0.2-11.5-0.7
                  C110.8,297.5,136.2,305.5,163.4,305.5" />
              </g>
            </svg>
          </a>
          <a href="#" class="bl_snsIcon_item">
            <svg role="img" aria-label="YouTube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" height="32px"
              width="32px">
              <rect width="300" height="300" fill="red" ry="150" />
              <path fill="#fff"
                d="M149.93750587 79.22267364s-63.21885.000059-79.08593926 4.12304707c-8.49578714 2.37380204-15.49140825 9.36950015-17.86523429 17.99023729-4.12295306 15.86710025-4.12304706 48.72656078-4.12304706 48.72656078s.000094 32.98420052 4.12304706 48.60156077c2.37382604 8.62062014 9.24450615 15.49138025 17.86523429 17.86524029 15.99203025 4.24788007 79.08593926 4.24804007 79.08593926 4.24804007s63.34418101-.00005 79.21094127-4.12304007c8.62079014-2.37381004 15.49133025-9.11966015 17.74023028-17.86524029 4.24793007-15.74232025 4.24805007-48.60156077 4.24805007-48.60156077s.12484-32.98446053-4.24805007-48.85156078c-2.24890003-8.62073714-9.11944014-15.49133425-17.74023028-17.74023729-15.86676026-4.37284707-79.21094127-4.37304707-79.21094127-4.37304707zm-20.11523032 40.48046465 52.59961084 30.35938049-52.59961084 30.23438048v-60.59376097z" />
            </svg>
          </a>
        </nav>
        <button class="bl_btn bl_btn__primary" type="button" onclick="closeDialog()">メニューを閉じる</button>
      </div>
      <!-- /.ly_dialog -->
    </dialog>
    <!-- /.ly_dialog_wrapper -->
    <!--≡≡≡ ▲ header.php ▲ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡-->
