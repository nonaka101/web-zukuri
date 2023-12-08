/* ≡≡≡ ▀▄「ページトップに戻る」ボタン ▀▄ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
	■ 概要
		画面右下に固定表示される、ページ上部に戻るためのボタン機能
	■ 機能
		+ ボタンを押下したら、ページトップに移動し、フォーカスをヘッダー部に移す
		+ 下に一定値スクロールした場合に表示状態にする
---------------------------------------------------------------------------- */

// 各種要素の読み込み
const pageTopFocusHeader = () => document.getElementById("js_anchor_header").focus();
const pageTopBtn = document.getElementById("js_pageTop");

// ボタン押下後、トップにスクロールし、フォーカスをヘッダー部に移す
pageTopBtn.addEventListener("click", () =>{
	window.scroll({ top: 0, behavior: "smooth"});
	setTimeout(pageTopFocusHeader, 1000);
})

/**
 * ページトップボタンを表すべきかの状態を示す
 * @type {boolean}
 */
let pageTopIsShow = true;

/** 下に一定値スクロールした場合に「ページトップ」ボタンを表示、そうでなければ非表示に */
function changeOpacity() {
	if (window.scrollY > 100) {
		if (pageTopIsShow == false) {
			pageTopBtn.hidden = false;
			pageTopIsShow = true;
		}
	} else {
		if (pageTopIsShow == true) {
			pageTopBtn.hidden = true;
			pageTopIsShow = false;
		}
	}
}

// 初期状態を、現在のスクロール位置と合わせる（＝非表示）
changeOpacity();
window.addEventListener("scroll",() => changeOpacity());






/* ≡≡≡ ▀▄ 「メニュー」ボタン ▀▄ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
	■ 概要
		モバイル画面時、ヘッダーにある「メニュー」ボタンを押すと、モーダルダイアログを表示
	■ 備考
		`showModal()` を使っているため、HTML側で autofocus 属性は不要
		（フォーカスは、自動で近くのフォーカス可能な要素に移るため「閉じる」ボタンが選択される）
---------------------------------------------------------------------------- */

// 各種要素の取得
const menuBtn = document.getElementById('menu-button');
const menuDialog = document.getElementById('menu');

// ボタン押下時、ダイアログをモーダル状態で表示
menuBtn.addEventListener('click', () => {
	menuDialog.showModal();
});

// ダイアログを閉じる（ダイアログ内 buttonタグの `onClick` イベントに使用）
function closeDialog(){
	menuDialog.close();
};

// モーダルダイアログ外をクリック時、ダイアログを閉じる
menuDialog.addEventListener('click', (e) => {
	if(e.target === menuDialog){
		menuDialog.close();
	}
});
