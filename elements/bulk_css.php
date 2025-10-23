<?php
$css = '
body{
    width: 95%;
    margin: 0 auto;
}

header {
  //display: flex;
  //justify-content: space-between;
  align-items: center;
  padding: 0 20px;
  background: #fac344;
}

';

//$windowcheck = "";
//$_SESSION["windowsize"];

//ウィンドウサイズに応じた反応
// if ($_SESSION["windowsize"] >= 1000) {
//   $css = '
// body{
//     width: 95%;
//     margin: 0 auto;
// }

// .header {
//   display: flex;
//   justify-content: space-between;
//   align-items: center;
//   padding: 0 20px;
//   background: #fac344;
// }

// ';
// } else if ($_SESSION["windowsize"] >= 700) {
//   $css = '
// body{
//     width: 95%;
//     margin: 0 auto;
// }

// .header {
//   display: flex;
//   justify-content: space-between;
//   align-items: center;
//   padding: 0 20px;
//   background:rgb(183, 68, 250);
// }

// ';
// } else {
//   $css = '
// body{
//     width: 95%;
//     margin: 0 auto;
// }

// .header {
//   display: flex;
//   justify-content: space-between;
//   align-items: center;
//   padding: 0 20px;
//   background:rgb(250, 68, 68);
// }

// ';
// }



// $css .= '

// .logo {
//   font-size: 30px;
// }
// /* https://blog.codecamp.jp/css-font-family */

// /* 縺薙％縺九ｉ荳九′繝上Φ繝舌�繧ｬ繝ｼ繝｡繝九Η繝ｼ縺ｫ髢｢縺吶ｋCSS */

// ul{
//   line-height:40px;
//   font-size: 20px;
// }

// /* 繝√ぉ繝�け繝懊ャ繧ｯ繧ｹ繧帝撼陦ｨ遉ｺ縺ｫ縺吶ｋ */
// .drawer_hidden {
//   display: none;
// }

// /* 繝上Φ繝舌�繧ｬ繝ｼ繧｢繧､繧ｳ繝ｳ縺ｮ險ｭ鄂ｮ繧ｹ繝壹�繧ｹ */
// .drawer_open {
//   display: flex;
//   height: 60px;
//   width: 60px;
//   justify-content: center;
//   align-items: center;
//   position: relative;
//   z-index: 100;/* 驥阪↑繧企��ｒ荳逡ｪ荳翫↓縺吶ｋ */
//   cursor: pointer;
// }

// /* 繝上Φ繝舌�繧ｬ繝ｼ繝｡繝九Η繝ｼ縺ｮ繧｢繧､繧ｳ繝ｳ */
// .drawer_open span,
// .drawer_open span:before,
// .drawer_open span:after {
//   content: "";
//   display: block;
//   height: 3px;
//   width: 25px;
//   border-radius: 3px;
//   background: #333;
//   transition: 0.5s;
//   position: absolute;
// }

// /* 荳画悽邱壹�荳逡ｪ荳翫�譽偵�菴咲ｽｮ隱ｿ謨ｴ */
// .drawer_open span:before {
//   bottom: 8px;
// }

// /* 荳画悽邱壹�荳逡ｪ荳九�譽偵�菴咲ｽｮ隱ｿ謨ｴ */
// .drawer_open span:after {
//   top: 8px;
// }

// /* 繧｢繧､繧ｳ繝ｳ縺後け繝ｪ繝�け縺輔ｌ縺溘ｉ逵溘ｓ荳ｭ縺ｮ邱壹ｒ騾乗�縺ｫ縺吶ｋ */
// #drawer_input:checked ~ .drawer_open span {
//   background: rgba(255, 255, 255, 0);
// }

// /* 繧｢繧､繧ｳ繝ｳ縺後け繝ｪ繝�け縺輔ｌ縺溘ｉ繧｢繧､繧ｳ繝ｳ縺古怜魂縺ｫ縺ｪ繧医≧縺ｫ荳贋ｸ九�邱壹ｒ蝗櫁ｻ｢ */
// #drawer_input:checked ~ .drawer_open span::before {
//   bottom: 0;
//   transform: rotate(45deg);
// }

// #drawer_input:checked ~ .drawer_open span::after {
//   top: 0;
//   transform: rotate(-45deg);
// }
  
// /* 繝｡繝九Η繝ｼ縺ｮ繝�じ繧､繝ｳ*/
// .nav_content {
//   width: 100%;
//   height: 100%;
//   text-align: center;
//   position: fixed;
//   bottom: 100%;
//   left: 0%; /* 繝｡繝九Η繝ｼ繧堤判髱｢縺ｮ螟悶↓鬟帙�縺� */
//   z-index: 99;
//   background: #fff;
//   transition: .5s;
// }

// /* 繝｡繝九Η繝ｼ鮟偵�繝√ｒ豸医☆ */
// .nav_list {
//   list-style: none;
// }

// /* 繧｢繧､繧ｳ繝ｳ縺後け繝ｪ繝�け縺輔ｌ縺溘ｉ繝｡繝九Η繝ｼ繧定｡ｨ遉ｺ */
// #drawer_input:checked ~ .nav_content {
//    bottom: 0px; /*繝｡繝九Η繝ｼ繧堤判髱｢縺ｫ蜈･繧後ｋ */
// }
// ';
