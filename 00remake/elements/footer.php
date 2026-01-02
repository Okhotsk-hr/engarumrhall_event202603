<?php
if ($_SESSION["windowsize"] >= 500) {

  $footer = '
                <div class="logo">鉄道模型で遊ぼう</div>

    ';

  $css .= '

        ';
} else {
  $footer = '
 <!-- ヘッダーロゴ -->
        <div class="logo">鉄道模型で遊ぼう</div>
    ';

  $css .= '
    ';
}
