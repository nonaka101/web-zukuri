# Web-Zukuri

## 概要

![テーマ：Web-Zukuriの、ロゴ](docs/images_readme/screenshot.png)

こちらは、[デジタル庁デザインシステム](https://www.digital.go.jp/policies/servicedesign/designsystem) を参考に試作した WordPressテーマです。  
どのようなものかについては、[GitHub Pagesを使ったサンプルページ](https://nonaka101.github.io/web-zukuri/) をご覧ください。

作成の際の考えにつきましては、後日 整理も兼ねて [Zenn](https://zenn.dev/nonaka101) にて書いていく予定です。

### ロードマップ

現在、**作業途中**となっております。  
大まかなロードマップですが、下記のように考え進めております。

1. テーマの基となるデータ作成
	+ 各種テンプレートファイルの作成
		- [x] : index.html（front-page）
		- [x] : 404.html
		- [x] : archive.html
		- [x] : search.html
		- [x] : page.html（各種パーツを確認用にまとめて配置）
		- [ ] : single.html（Readmeを兼ねる）
	+ CSS の作成
		- [x] : style.css
		- [x] : devUtilities.css（開発用）
	+ JavaScript の作成
		- [x] : common.js
		- [x] : devUtilities.js（開発用）
2. WordPressテーマを作成
	+ 各種テンプレートパーツの作成
		- [ ] : parts-menu.php（メイン、サブメニューを出力）
		- [ ] : parts-categories-and-archives.php（カテゴリ、年月アーカイブを出力）
		- [ ] : sidebar-left.php
		- [ ] : sidebar-right.php
		- [ ] : header.php
		- [ ] : footer.php
		- [ ] : searchform.php
	+ 各種テンプレートファイルの作成
		- [ ] : front-page.php（index.htmlを使用）
		- [ ] : 404.php
		- [ ] : archive.php
		- [ ] : singular.php（投稿・固定ページ）
		- [ ] : index.php
		- [ ] : search.php
		- [ ] : searchpage.php（固定ページテンプレートとして）
	+ その他
		- [ ] : functions.php の整理
		- [ ] : ブロックテーマ関係（theme.json やエディタ関連、自作ブロックなど）

## 目的

WordPressの学習用として作り始めましたが、Webアクセシビリティの考えを取り入れられればと考えてます。

## 特徴

### ダークモードを搭載し、OS側のフォントサイズに配慮

![404ページの初期状態](docs/images_readme/devUtils_01.jpg)

このテーマでは、ダークモードを搭載しています。また OS側によるフォントサイズに配慮できるよう、テキスト要素を中心に相対指定の `rem` を使うようにしています。  
[GitHub Pages](https://nonaka101.github.io/web-zukuri/) では、画面の右下に開発用のツールを配置しています。

![開発用ツール](docs/images_readme/devUtils_00.jpg)

ここでは、「カラーモードの切り替え」「フォントサイズの切り替え」の2つを行うことができます。

![root上のフォントサイズを16pxから32pxに上げた状態](docs/images_readme/devUtils_02.jpg)

ルート要素のフォントサイズをJavaScriptで変更し、様々なフォントサイズでのレイアウト変化を確認できます。

![ダークモードに切り替えた状態](docs/images_readme/devUtils_03.jpg)

CSSのカスタムプロパティを使い、このようにカラーモードの切り替えを行えるようにしています。

## 導入方法

### テーマフォルダにコピー

WordPressのテーマを管理しているフォルダに対し、`wp-content/themes` 内にある `web-zukuri` フォルダをコピーしてください。

### テーマの切り替え

WordPress側の管理画面にて、テーマを切り替えてください。

### 検索ページの設定（推奨）

検索ページは固定ページを使っており、リンク先として独自のスラッグ `zkr-searchpage` を使用しています。下記の手順で設定してください。

1. 新規に固定ページを作成（タイトルは "検索" としてください）
2. 固定ページには、エディタで何かを追加する必要はありません（空の状態でOKです）
3. 作成した固定ページのスラッグを、 `zkr-searchpage` に変更してください

## 注意

### 現段階でわかっている問題点

#### 古いブラウザでは動作が怪しいと思われます

これは CSS において、新しい機能を使っているためです（ネストしたセレクタ など）  
「ベンダープレフィックスを使う」、「セレクタをネストさせない」など回避できる手段もあると思われますが、まずはできるかできないかを知りたいため完成の方を優先させております。ご了承ください。

#### ブロックテーマに関する知見が不足しており、テーマを適合させる方法が未解決の状態です

ブロックエディタで作成したコンテンツを、どのようにテーマの中に受け入れるかについて上手い解決法が思いついていない状態です。  
最終的には WordPress のブロックエディタよる投稿に対応させることを目標にしておりますが、現在は暫定的な対応（あるいは未解決状態のまま）になっています。

+ カラーモード切り替えによるコントラスト比の問題が起きるのではないか？
+ カラムブロック等のレイアウトに関するブロックが上手く調整されるか？
+ 機能の関係上、フォントサイズは `rem` を使うのが望ましいが、それは `theme.json` で設定すべきなのか css で個別に設定しなければいけないのか？

#### カラーモードに関する部分は、最終的には別の方法に変える予定です

現在は JavaScript と css クラスを使って処理していますが、これは検証しやすくするためのものです。（画面上にコントロールできる要素を配置）  
本来は `@media (prefers-color-scheme: dark) {各セマンティックカラー（カスタムプロパティ）}` を使うのが望ましいと考え、最終的にはそちらに変更する予定です。

#### CSS設計が参考元とは少し変わっています

CSS設計に Precss の考え方を使っていますが、厳密なルールに則っていない状態です。（例：省コード化のためにネストしたセレクタを使い詳細度を高めている、など）  
モジュール等の各要素には簡易的なコメント文を入れておりますので、どのように使っているかについてはそちらをご参照ください。

## 参考資料について

作成に際し、参考にさせてもらった資料です。

### デザイン関係

#### [デザインシステム｜デジタル庁](https://www.digital.go.jp/policies/servicedesign/designsystem)

テーマのベースとなるものです。

#### [ウェブアクセシビリティ導入ガイドブック｜デジタル庁](https://www.digital.go.jp/resources/introduction-to-web-accessibility-guidebook/)

アクセシビリティについて考える基となりました。

#### [Webアプリケーションアクセシビリティ ――今日から始める現場からの改善：書籍案内｜技術評論社](https://gihyo.jp/book/2023/978-4-297-13366-5)

#### [書籍『Webアプリケーションアクセシビリティ』サポートサイト](https://webapp-a11y.com/)

### CSS設計

今回はCSS設計に、*PRECSS(Prefix css)* を参考にしています。  
（※一部ルールから逸脱している箇所があります）

#### [CSS設計完全ガイド ～詳細解説＋実践的モジュール集：書籍案内｜技術評論社](https://gihyo.jp/book/2020/978-4-297-11173-1)

#### [PRECSS - Manage your CSS with prefixes.](https://precss.io/ja/)

### WordPress関係

#### [WordPressオリジナルテーマ制作入門：書籍案内｜技術評論社](https://gihyo.jp/book/2022/978-4-297-12557-8)

## ライセンスについて

私が制作した部分につきましては、MITライセンスといたします。  
それ以外につきましては、所有者のライセンスに従ってください。

### WordPress

WordPress に関するPHPファイルに対しては、wordpress.org より GPL-2.0 が適用されます。

[License &#124; WordPress.org 日本語](https://ja.wordpress.org/about/license/)  
[GNU General Public License v2.0 - GNU Project - Free Software Foundation](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html)

### Google Font

Googleフォントの `Noto Sans JP` を使用しています。こちらは Open Font License となっています。

[Noto Sans Japanese - Google Fonts](https://fonts.google.com/noto/specimen/Noto+Sans+JP/about)  
[SIL Open Font License (OFL)](https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL)

### デジタル庁イラストレーション・アイコン

一部のSVGアイコンと画像については、デジタル庁が公開しているデータを使用しています。これらはデジタル庁に著作権があります。

[イラストレーション・アイコン素材｜デジタル庁](https://www.digital.go.jp/policies/servicedesign/designsystem/Illustration_Icons)  
[イラストレーション・アイコン素材利用規約｜デジタル庁](https://www.digital.go.jp/policies/servicedesign/designsystem/Illustration_Icons/terms_of_use)
