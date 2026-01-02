<?php
$menu_list = [
    ["TOP", "http://localhost/code/event202603/00remake/", "l_top()"],
    ["Nゲージ", "http://localhost/code/event202603/00remake/n", "l_aboutn()"],
    ["車両紹介", "http://localhost/code/event202603/00remake/vehicles", "l_vehicles()"],
    ["主催・協力", "http://localhost/code/event202603/00remake/member", "l_member()"]
];

if (count($menu_list) == 4) {
    $menu_show = '
  <div class="menub">
        <div class="menu1">
            <button class="t_menu" onclick="' . $menu_list[0][2] . '">' . $menu_list[0][0] . '</button>
            <button class="t_menu" onclick="' . $menu_list[1][2] . '">' . $menu_list[1][0] . '</button>
        </div>

        <div class="menu2">
            <button class="t_menu" onclick="' . $menu_list[2][2] . '">' . $menu_list[2][0] . '</button>
            <button class="t_menu" onclick="' . $menu_list[3][2] . '">' . $menu_list[3][0] . '</button>
        </div>
    </div>
    ';
    $menu_js = '
        function ' . $menu_list[0][2] . ' {
            alert("' . $menu_list[0][0] . '");
            window.location.href = "' . $menu_list[0][1] . '";
        }

        function ' . $menu_list[1][2] . ' {
            alert("Nゲージ");
            window.location.href = "' . $menu_list[1][1] . '";
        }

        function ' . $menu_list[2][2] . ' {
            alert("車両紹介");
            window.location.href = "' . $menu_list[2][2] . '";
        }

        function ' . $menu_list[3][2] . ' {
            alert("主催・協力");
            window.location.href = "' . $menu_list[3][2] . '";
        }
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
