<?php

// Создаем вложенный массив
$college = array(
    "Студенты" => array("Никита", "Гена", "Стас", "Турбо", "Вардан"),
    "Преподаватели" => array("Крутой перец Андреевич", "Крылова", "Саня", "БЖшник", "Рожков"));

// Перебираем массив для группы лиц
foreach($college as $people => $items) {
    echo "<h1>$people</h1>";
    echo "<ul>";
    // перебираем массив конкретных людей
    foreach($items as $item => $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
