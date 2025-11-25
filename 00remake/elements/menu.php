<?php
$menu_list = [
    ["TOP", "http://localhost/code/event202603/00remake/"],
    ["Nゲージ", "http://localhost/code/event202603/00remake/n"],
    ["車両紹介", "http://localhost/code/event202603/00remake/vehicles"],
    ["主催・協力", "http://localhost/code/event202603/00remake/member"]
];

if (count($menu_list) == 4) {
    $menu_show = '
  <div class="menub">
        <div class="menu1">
            <button class="t_menu"  onclick="loction.href=' . $menu_list[0][1] . '">' . $menu_list[0][0] . '</button>
            <button class="t_menu">' . $menu_list[1][0] . '</button>
        </div>

        <div class="menu2">
            <button class="t_menu">' . $menu_list[2][0] . '</button>
            <button class="t_menu">' . $menu_list[3][0] . '</button>
        </div>
    </div>
    ';
} else if (count($menu_list) == 6) {
    $menu_show = '
  <div class="menub">
        <div class="menu1">
            <button class="t_menu">' . $menu_list[0][0] . '</button>
            <button class="t_menu">' . $menu_list[1][0] . '</button>
            <button class="t_menu">' . $menu_list[2][0] . '</button>
        </div>

        <div class="menu2">
            <button class="t_menu">' . $menu_list[3][0] . '</button>
            <button class="t_menu">' . $menu_list[4][0] . '</button>
            <button class="t_menu">' . $menu_list[5][0] . '</button>
        </div>
    </div>
    ';
}
