/* ≡≡≡ ▀▄ 開発用ツール ▀▄ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
	■ 概要
		開発する際、容易に検証するためのツール集
	■ 機能
		+ ShowToolBox : ツールボックスを表示
		+ DarkMode : ダークモードの切り替え
		+ FontSizeChanger : ルート要素のフォントサイズを変更
---------------------------------------------------------------------------- */





/* ≡≡≡ ▀▄ ShowToolBox ▀▄ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
	■ 概要
		開発用機能をまとめたツールボックス要素を、画面右下に固定する
		必要になったときには画面内に出てくるようにし、それ以外は邪魔にならないよう隠しておく
---------------------------------------------------------------------------- */

// 各種要素の取得
const toolBoxChkbox = document.getElementById('js_toolBox_chkbox');
const toolBox = document.getElementById('js_toolBox');

// チェック時には要素を表示範囲内に移動、そうでなければ外側に隠す
toolBoxChkbox.addEventListener('change', (e) => {
	if(e.target.checked == true){
		toolBox.style.right = '-10px';
	} else {
		toolBox.style.right = '-200px';
	}
})





/* ≡≡≡ ▀▄ DarkMode ▀▄ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
	■ 概要
		htmlタグに `is_darkMode` クラスをつけ外しすることで、カラーモードを制御する
		カラーモードの制御には、CSSのカスタムプロパティを使用しているので詳細はそちらを参照
	■ 備考
		カラーモードの状態は、ブラウザ（OS）の設定を引き継ぐ
		変更した情報は `sessionStorage` を使って保存され引き継ぐことができる
---------------------------------------------------------------------------- */

// OSの設定がダークモード
let darkModeOS = window.matchMedia("(prefers-color-scheme: dark)");

// スイッチのinput要素（checkbox）
const darkModeChkbox = document.getElementById("js_darkMode");

/** ダークモードをオンにする（クラス付与、チェックボックスにチェック付与） */
function darkModeOn() {
	document.documentElement.classList.add("is_darkMode"); // ルート要素<html>にクラスを追加
	darkModeChkbox.checked = true;
}

/** ダークモードをオフにする（クラス除去、チェックボックスの解除） */
function darkModeOff() {
	document.documentElement.classList.remove("is_darkMode"); // クラスの削除
	darkModeChkbox.checked = false;
}

// イベントリスナー
let listener = (event) => {
	if (event.matches) {
		darkModeOn();
	} else {
		darkModeOff();
	}
};

// リスナー登録
darkModeOS.addEventListener("change", listener);

// 初期化処理
listener(darkModeOS);

// スイッチの操作に応じて切り替え処理
darkModeChkbox.addEventListener("change", () => {
	if (darkModeChkbox.checked) {
		darkModeOn();
		sessionStorage.setItem("is_darkMode", "on");
	} else {
		darkModeOff();
		sessionStorage.setItem("is_darkMode", "off");
	}
});

// ロード時の状況に応じて切り替え
if (sessionStorage.getItem("is_darkMode") === "on") {
	darkModeOn();
} else if (sessionStorage.getItem("is_darkMode") === "off") {
	darkModeOff();
}





/* ≡≡≡ ▀▄ FontSizeChanger ▀▄ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
	■ 概要
		スタイリングに `rem` と `px` を併用しているので、ルートのフォントサイズの変化による影響を見るためのもの
		内部的にはスライダーの値（10px〜32px）を、htmlタグのスタイル `font-size` に適用することで処理している
	■ 備考
		OS（ブラウザ）の設定に反応しているかを確認できるように、チェックボックスで機能の有効無効を管理している
		未チェック状態では、OS（ブラウザ）側のフォントサイズが適用される
---------------------------------------------------------------------------- */

// 各種要素の取得
const fontSizeChkbox = document.getElementById('js_fontSize_chkbox');
const fontSizeCtrl = document.getElementById('js_fontSize_controller');
const fontSizeRange = document.getElementById('js_fontSize_range');
const fontSizeResult = document.getElementById('js_fontSize_result');

/**
 * セッション中に維持保存される、フォント設定情報
 *
 * @param {boolean} isShow - 機能が有効化されているか
 * @param {int} size - フォントサイズ
 */
let currentFontState
if (sessionStorage.getItem('currentFontState')){
	currentFontState = sessionStorage.getItem('currentFontState');
	currentFontState = JSON.parse(currentFontState);
} else {
	currentFontState = {
		isShow: false,
		size: 16,
	};
}

// フォント設定情報からスライダー部のコントロール値を設定
fontSizeRange.value = currentFontState.size;
fontSizeResult.textContent = currentFontState.size;

/**
 * フォントサイズ変更機能の有効無効を管理
 *
 * 機能：スライドレンジの表示、ルートフォントサイズの制御（レンジの値、OS側の設定）、フォント設定情報の更新
 *
 * @param {boolean} isShow - 機能が有効化されているか
 */
function changeFontSize(isShow){
	let val = fontSizeRange.value;
	if(isShow===true){
		fontSizeCtrl.hidden = false;
		document.documentElement.style.fontSize = val + 'px';
	} else {
		fontSizeCtrl.hidden = true;
		document.documentElement.style.fontSize = null;
	}
	// 設定情報の更新
	currentFontState.isShow = isShow;
	currentFontState.size = val;
	sessionStorage.setItem('currentFontState', JSON.stringify(currentFontState));
}

// range を変更すると、result 値のサイズでルートフォントサイズが変更
fontSizeRange.addEventListener('input', (e) => {
	fontSizeResult.textContent = e.target.value;
	changeFontSize(true);
})

// chkbox を変更すると、機能の有効無効を切り替え
fontSizeChkbox.addEventListener('change', (e) => {
	if(e.target.checked == true){
		changeFontSize(true);
	} else {
		changeFontSize(false);
	}
})

// chkbox を設定情報の内容に更新し、`changeFontSize()` を通す
fontSizeChkbox.checked = currentFontState.isShow;
changeFontSize(fontSizeChkbox.checked);
