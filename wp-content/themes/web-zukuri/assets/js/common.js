/*≡≡≡ [JS]「ページトップに戻る」ボタン ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
  ■ 概要
    画面右下に固定表示される、ページ上部に戻るためのボタン機能
  ■ 機能
    + ボタンを押下したら、ページトップに移動し、フォーカスをヘッダー部に移す
    + 下に一定値スクロールした場合に表示状態にする
-----------------------------------------------------------------------------*/
// ボタン押下後、トップにスクロールし、フォーカスをヘッダー部に移す
const focusHeader = () => document.getElementById("anchor_header").focus();
const btnPageTop = document.getElementById("pagetop");
btnPageTop.addEventListener("click", () =>{
  window.scroll({ top: 0, behavior: "smooth"});
  setTimeout(focusHeader, 1000);
})

// 下に一定値スクロールした場合に表示、トップに来たら非表示に
let isShowPageTop = true;
function changeOpacity() {
  if (window.scrollY > 100) {
    if (isShowPageTop == false) {
      btnPageTop.animate([{opacity: '0'}, {opacity: '1'}], 500);
      btnPageTop.style.opacity = "1";
      isShowPageTop = true;
    }
  } else {
    if (isShowPageTop == true) {
      btnPageTop.animate([{opacity: '1'}, {opacity: '0'}], 500);
      btnPageTop.style.opacity = "0";
      isShowPageTop = false;
    }
  }
}
changeOpacity();
window.addEventListener("scroll",() => changeOpacity());






/*≡≡≡ [JS]「メニュー」ボタン ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
  ■ 概要
    モバイル画面時、ヘッダーにある「検索」ボタンを押すと、モーダルダイアログを表示
	■ 備考
		`showModal()` を使っているため、HTML側で autofocus 属性は不要
		（フォーカスは、自動で近くのフォーカス可能な要素に移るため「閉じる」ボタンが選択される）
-----------------------------------------------------------------------------*/
const menuBtn = document.getElementById('menu-button');
const menuDialog = document.getElementById('menu');
menuBtn.addEventListener('click', () => {
  menuDialog.showModal();
});
function closeDialog(){
  menuDialog.close();
};
// モーダルダイアログ外をクリック時、ダイアログを閉じる
menuDialog.addEventListener('click', (e) => {
  if(e.target === menuDialog){
    menuDialog.close();
  }
});
