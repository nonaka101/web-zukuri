/*≡≡≡ [JS]「ページトップに戻る」ボタン ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
  ■ 概要
    画面右下に固定表示される、ページ上部に戻るためのボタン機能
  ■ 機能
    + ボタンを押下したら、ページトップに移動し、フォーカスをヘッダー部に移す
    + 下に一定値スクロールした場合に表示状態にする
-----------------------------------------------------------------------------*/
// ボタン押下後、トップにスクロールし、フォーカスをヘッダー部に移す
const focusHeader = () => document.getElementById("anchor_header").focus();
var btnPageTop = document.getElementById("pagetop");
btnPageTop.addEventListener("click", () =>{
  window.scroll({ top: 0, behavior: "smooth"});
  setTimeout(focusHeader, 1000);
})

// 下に一定値スクロールした場合に表示、トップに来たら非表示に
var isShowPageTop = false;
window.addEventListener("scroll",() => {
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
});
