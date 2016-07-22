<?php

require 'classes/Table.php';
require 'classes/TableRow.php';
require 'classes/TableItem.php';
require 'classes/TableHeadItem.php';
require 'classes/TableHead.php';
require 'classes/ListItem.php';
require 'classes/Pagination.php';
require 'classes/Navbar.php';
require 'classes/NavbarList.php';
require 'classes/NavbarListItem.php';
require 'classes/NavbarPart.php';

include 'page_parts/header.html';

$head = [
    'h1',
    'h2',
    'h3',
    'h4',
    'h5',
    'h6',
    'h7'
];

$list1 = [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g'
];


$list2 = [
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n'
];

$paginationItems = [
   'p1',
   'p2',
   'p3',
   'p4',
   'p5',
   'p6',
   'p7'
];

$navbarLeftItems = [
    'Life',
    'Sports',
    'Hobbies',
    'Culture'
];

$navbarRightItems = [
    'Politics',
    'Education',
    'Society',
    'Breaking News'
];

$tableHead = new TableHead();
$tableRow1 = new TableRow();
$tableRow2 = new TableRow();
$table = new Table();
$pagination = new Pagination();

foreach ($head as $item){
    $tableHeadItem = new TableHeadItem();
    $tableHeadItem->setContent($item);
    
    $tableHead->addHeadItem($tableHeadItem);
}

foreach ($list1 as $item){
    $tableItem = new TableItem();
    $tableItem->setContent($item);

    $tableRow1->addItem($tableItem);
}

foreach ($list2 as $item){
    $tableItem = new TableItem();
    $tableItem->setContent($item);

    $tableRow2->addItem($tableItem);
}

$table->setHead($tableHead);
$table->addRow($tableRow1);
$table->addRow($tableRow2);

$table->draw();

echo '<br>';

foreach ($paginationItems as $item){
    $paginationItem = new ListItem();
    $paginationItem->setContent($item);
    $paginationItem->setHref("#");

    $pagination->addListItem($paginationItem);
}

$pagination->draw();

echo '<br>';

$navbarLeft = new NavbarPart("left");
$navbarRight = new NavbarPart("right");
$navbarLeftList = new NavbarList();
$navbarRightList = new NavbarList();
$navbar = new Navbar();

foreach ($navbarLeftItems as $navbarLeftItem){
    $navbarListItem = new NavbarListItem();
    $navbarListItem->setContent($navbarLeftItem);

    $navbarLeftList->addListItem($navbarListItem);
}

foreach ($navbarRightItems as $navbarRightItem){
    $navbarListItem = new NavbarListItem();
    $navbarListItem->setContent($navbarRightItem);

    $navbarRightList->addListItem($navbarListItem);
}

$navbarLeft->setNavbarList($navbarLeftList);
$navbarRight->setNavbarList($navbarRightList);

$navbar->setNavbarLeftPart($navbarLeft);
$navbar->setNavbarRightPart($navbarRight);

$navbar->draw();

include 'page_parts/footer.html';