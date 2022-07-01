<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Supriadi");
addTodoList("Roadman");
addTodoList("siagian");

viewAddTodoList();
showTodoList();

viewAddTodoList();
showTodoList();