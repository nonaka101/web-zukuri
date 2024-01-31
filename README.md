# Web-Zukuri

## 概要

![テーマ：Web-Zukuriの ロゴ](docs/images_readme/screenshot.png)

こちらは、[デジタル庁デザインシステム](https://www.digital.go.jp/policies/servicedesign/designsystem) を参考に試作した WordPressテーマです。`Version 1.3.2`（2023年6月29日に公開されたもの）を主軸として作成しています。  
どのようなものかについては、[GitHub Pagesを使ったサンプルページ](https://nonaka101.github.io/web-zukuri/) をご覧ください。

作成の際の考えにつきましては、後日 整理も兼ねて [Zenn](https://zenn.dev/nonaka101) にて書いていく予定です。

### 現状について

現在、**作業途中**となっております。大まかな指針は、下記のようになります。

#### 検証（現在はここです）

ここでは、作成できたものに対し実際に使用してみることで検証していきます。

- [ ] : 各スクリーンリーダーを使用し、問題点を吸い上げる
- [ ] : 問題点を解決（HTMLで解決できない場合にはARIAを使用）

#### 記事の作成

ここでは、Zenn用の記事を書いていき、公開を目指します。  
その中で一貫していない部分などの箇所があれば改修し、ブラッシュアップをしていきます。

- [ ] : Zenn記事の作成
- [ ] : （上記が完成した後）本テーマでも再現する

#### 機能の改善

もう少し何とかできそうな箇所の改善を目指します。

- [ ] : index.php の作成（多様な状況に対応できるように）
- [ ] : functions.php の整理
- [ ] : ブロックテーマ関係（theme.json やエディタ関係、自作ブロックなど）

コメント機能など、下記の機能についてはまだ導入できるか不明な状態です。  
一度完成してから考えようと思っております。

- [ ] : コメント機能
- [ ] : カスタムタクソノミー
- [ ] : パンくずリスト

## 目的

WordPressの学習用として作り始めましたが、Webアクセシビリティの考えを取り入れられればと考えてます。

## 特徴

### レスポンシブデザイン

主に 960px を境界に、モバイル画面とデスクトップ画面の切り替えが行われます。

デスクトップ画面
![デスクトップ画面時、左右にサイドバーが出た状態になる](docs/images_readme/responsive_design01.jpg)

モバイル画面（縦）  
<img src="docs/images_readme/responsive_design02.PNG" width="350px" alt="モバイル画面時だと、固定ヘッターが現れ1列に収まる状態になる" />

モバイル画面（横）  
<img src="docs/images_readme/responsive_design03.PNG" width="650px" alt="レスポンシブデザインのため、横画面でもサイズを自動的に調整される" />

### ダークモードを搭載し、OS側のフォントサイズに配慮

このテーマでは、ダークモードを搭載しています。また OS側によるフォントサイズに配慮できるよう、テキスト要素を中心に相対指定の `rem` を使うようにしています。  
[GitHub Pages](https://nonaka101.github.io/web-zukuri/) では、画面の右下に開発用のツールを配置しています。
![404ページの初期状態](docs/images_readme/devUtils_01.jpg)

ここでは、「カラーモードの切り替え」「フォントサイズの切り替え」の2つを行うことができます。
![開発用ツール](docs/images_readme/devUtils_00.jpg)

ルート要素のフォントサイズをJavaScriptで変更し、様々なフォントサイズでのレイアウト変化を確認できます。下図は一般的なサイズ 16px から 32px に上げた状態です。
![root上のフォントサイズを16pxから32pxに上げた状態](docs/images_readme/devUtils_02.jpg)

CSSのカスタムプロパティを使い、カラーモードの切り替えることができます。下図はダークモード時のものです。
![ダークモードに切り替えた状態](docs/images_readme/devUtils_03.jpg)

## 導入方法

### テーマフォルダにコピー

WordPressのテーマを管理しているフォルダに対し、`wp-content/themes` 内にある `web-zukuri` フォルダをコピーしてください。

### テーマの切り替え

WordPress側の管理画面にて、テーマを切り替えてください。

## 注意

### 使用していただける場合の注意事項

#### 「導入すればアクセシビリティを達成できる*ものではない*」ことをご了承ください

投稿するコンテンツにも、アクセシビリティへの配慮は必要となってきます。例えば下記のような取り組みです。

- 画像に `alt` を設定する
- 多色のグラフは、パターンを使う
- 適切な見出し要素を使う

### 現段階でわかっている問題点

#### 古いブラウザでは動作が怪しいと思われます

古いブラウザにおいて、CSS新機能の関係でレイアウトが崩れているかもしれません。  
セレクタをネストさせない、ベンダープレフィックスを使う などの回避手段を少しずつ反映させていっていますが、完成の方を優先しているため対応が遅れております。ご了承ください。

#### ブロックテーマに関する知見が不足しており、テーマを適合させる方法が未解決の状態です

ブロックエディタで作成したコンテンツを、どのようにテーマの中に受け入れるかについて上手い解決法が思いついていない状態です。  
最終的には WordPress のブロックエディタよる投稿に対応させることを目標にしておりますが、現在は暫定的な対応（あるいは未解決状態のまま）になっています。

- カラーモード切り替えによるコントラスト比の問題が起きるのではないか？
- カラムブロック等のレイアウトに関するブロックが上手く調整されるか？
- 機能の関係上、フォントサイズは `rem` を使うのが望ましいが、それは `theme.json` で設定すべきなのか css で個別に設定しなければいけないのか？

#### CSS設計が参考元とは少し変わっています

CSS設計に Precss の考え方を使っていますが、厳密なルールに則っていない状態です。（例：省コード化のためにネストしたセレクタを使い詳細度を高めている、など）  
モジュール等の各要素には簡易的なコメント文を入れておりますので、どのように使っているかについてはそちらをご参照ください。

## 参考資料について

作成に際し、参考にさせてもらった資料です。

### デザイン関係

テーマのベースとなるものです。

- [デザインシステム｜デジタル庁](https://www.digital.go.jp/policies/servicedesign/designsystem)

アクセシビリティについて考える基となりました。

- [ウェブアクセシビリティ導入ガイドブック｜デジタル庁](https://www.digital.go.jp/resources/introduction-to-web-accessibility-guidebook/)

下記の書籍は、説明の中に「ダメな例」と「何故ダメなのか」まで詳細に書かれてあり、コーディングする際に役立ちました。

- [Webアプリケーションアクセシビリティ ――今日から始める現場からの改善：書籍案内｜技術評論社](https://gihyo.jp/book/2023/978-4-297-13366-5)
- [書籍『Webアプリケーションアクセシビリティ』サポートサイト](https://webapp-a11y.com/)

下記の書籍は、HTMLの仕様について解説した書籍です。ARIAの利用を最小限に抑え、既存のHTMLでセマンティックにする方法について参考になりました。

- [HTML解体新書 | 株式会社ボーンデジタル](https://www.borndigital.co.jp/book/25999/)

### CSS設計

今回はCSS設計に、*PRECSS(Prefix css)* を参考にしています（ただし、本家のルールからは逸脱している箇所が結構あります）

- [CSS設計完全ガイド ～詳細解説＋実践的モジュール集：書籍案内｜技術評論社](https://gihyo.jp/book/2020/978-4-297-11173-1)
- [PRECSS - Manage your CSS with prefixes.](https://precss.io/ja/)

### WordPress関係

- [WordPressオリジナルテーマ制作入門：書籍案内｜技術評論社](https://gihyo.jp/book/2022/978-4-297-12557-8)

## ライセンスについて

私が制作した部分につきましては、MITライセンスといたします。  
それ以外につきましては、所有者のライセンスに従ってください。

### WordPress

WordPress に関するPHPファイルに対しては、wordpress.org より GPL-2.0 が適用されます。

- [License &#124; WordPress.org 日本語](https://ja.wordpress.org/about/license/)  
- [GNU General Public License v2.0 - GNU Project - Free Software Foundation](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html)

### Google Font

Googleフォントの `Noto Sans JP` を使用しています。こちらは Open Font License となっています。

- [Noto Sans Japanese - Google Fonts](https://fonts.google.com/noto/specimen/Noto+Sans+JP/about)  
- [SIL Open Font License (OFL)](https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL)

### Material Symbols and Icons

テーマの画像として、マテリアルシンボルを使用しています。こちらは Apache License バージョン 2.0 となっています。

- [Material Symbols and Icons - Google Fonts](https://fonts.google.com/icons)
- [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)

### デジタル庁イラストレーション・アイコン

一部のSVGアイコンと画像については、デジタル庁が公開しているデータを使用しています。これらはデジタル庁に著作権があります。

- [イラストレーション・アイコン素材｜デジタル庁](https://www.digital.go.jp/policies/servicedesign/designsystem/Illustration_Icons)  
- [イラストレーション・アイコン素材利用規約｜デジタル庁](https://www.digital.go.jp/policies/servicedesign/designsystem/Illustration_Icons/terms_of_use)

### `normalize.css`

CSS設計上、各ブラウザ間のスタイル差をなくすため、ノーマライズCSSを使用しています。こちらは MIT ライセンスとなっています。

- [Normalize.css: Make browsers render all elements more consistently.](https://necolas.github.io/normalize.css/)
- [normalize.css/LICENSE.md at master · necolas/normalize.css · GitHub](https://github.com/necolas/normalize.css/blob/master/LICENSE.md)
