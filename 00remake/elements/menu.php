<?php
$menu = [
    ["TOP", "http://localhost/code/event202603/00remake/"],
    ["Nゲージ", "http://localhost/code/event202603/00remake/n"],
    ["車両紹介", "http://localhost/code/event202603/00remake/vehicles"],
    ["主催・協力", "http://localhost/code/event202603/00remake/member"]
];

$v_menu = '<div class="menu1">';
$v_menu .= '<div class="t_menu">' . $menu[0][0] . '</div>';
$v_menu .= '<div class="t_menu">' . $menu[1][0] . '</div>';
$v_menu .= '</div>';
$v_menu .= '<div class="menu2"';
$v_menu .= '<div class="t_menu">' . $menu[2][0] . '</div>';
$v_menu .= '<div class="t_menu">' . $menu[3][0] . '</div>';
$v_menu .= '</div>';
