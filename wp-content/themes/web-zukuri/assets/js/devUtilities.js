/*≡≡≡ ▀▄ 開発用ツール ▀▄ ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡
  ■ 概要
    開発する際、容易に検証するためのツール集
  ■ 機能
    + ShowToolBox : ツールボックスを表示
    + DarkMode : ダークモードの切り替え
    + Font-size Changer : ルート要素のフォントサイズを変更
-----------------------------------------------------------------------------*/
// DarkMode
// OSの設定がダークモード
const darkModeOS = window.matchMedia("(prefers-color-scheme: dark)");

// スイッチのinput要素（checkbox）
const darkModeChkbox = document.getElementById("js_darkMode");

// ダークモードがオンの時に実行する処理
function darkModeOn() {
  document.documentElement.classList.add("is_darkMode"); // ルート要素<html>にクラスを追加
  darkModeChkbox.checked = true;
}
// ダークモードがオフの時に実行する処理
function darkModeOff() {
  document.documentElement.classList.remove("is_darkMode"); // クラスの削除
  darkModeChkbox.checked = false;
}

// イベントリスナー
const listener = (event) => {
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

// モーダルダイアログ
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





// Show ToolBox
var toolBoxChkbox = document.getElementById('js_toolBoxChkbox');
var toolBox = document.getElementById('js_toolBox');
toolBoxChkbox.addEventListener('change', (e) => {
  if(e.target.checked == true){
    toolBox.style.right = '-10px';
  } else {
    toolBox.style.right = '-200px';
  }
})


// FontSize Changer
var rng = document.getElementById('js_fontSizeRange');
var res = document.getElementById('js_fontSizeResult');
res.textContent = rng.value;

rng.addEventListener('input', (e) => {
  let val = e.target.value;
  res.textContent = val;
  document.documentElement.style.fontSize = val + 'px'; 
})
