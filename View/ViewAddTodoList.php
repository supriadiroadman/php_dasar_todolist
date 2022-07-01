<?php
require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";
require_once __DIR__."/../Helper/Input.php";

function viewAddTodoList()
{
    echo "Menambah todo".PHP_EOL;
    $todo = input("Todo (x untuk batal) ");

    if ($todo == "x") {
        echo "Batal menambah todo".PHP_EOL;
    } else {
        addTodoList($todo);
    }
    
}