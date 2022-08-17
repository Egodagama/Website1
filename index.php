<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/home.html';
        break;
    case '/home' :
        require __DIR__ . '/home.html';
        break;
    case '/geoweek' :
        require __DIR__ . '/geoweek.html';
        break;
    case '/conference' :
        require __DIR__ . '/conference.html';
        break;
    case '/exhibition' :
        require __DIR__ . '/exhibition.html';
        break;
    case '/exhibitors' :
        require __DIR__ . '/exhibitors.html';
        break;
    case '/news' :
        require __DIR__ . '/news.html';
        break;
    case '/contact' :
        require __DIR__ . '/contacts.html';
        break;
    case '/about' :
        require __DIR__ . '/about.php';
        break;
    case '/feedback' :
        require __DIR__ . '/feedback.html';
        break;
     case '/repository' :
        require __DIR__ . '/repository.html';
        break;
    case '/beautiful-belihuloya' :
        require __DIR__ . '/nature.html';
        break;
    case '/workshops' :
        require __DIR__ . '/workshops.html';
        break;
    case '/tickets' :
        require __DIR__ . '/tickets.html';
        break;
    case '/panel-discussions' :
        require __DIR__ . '/panel-discussion.html';
        break;
    case '/lbs2its' :
        require __DIR__ . '/lbs2its.html';
        break;
    case '/geotalk' :
        require __DIR__ . '/geotalk.html';
        break;
    case '/wgp' :
        require __DIR__ . '/wgp.html';
        break;
    case '/bhoomitech' :
        require __DIR__ . '/bhoomitech.html';
        break;
    case '/amerasian' :
        require __DIR__ . '/amerasian.html';
        break;
    case '/globalgis' :
        require __DIR__ . '/globalgis.html';
        break;
    case '/suleco' :
        require __DIR__ . '/suleco.html';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.html';
        break;
}
?>