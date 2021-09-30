<?php

function umbrella_filter_ab_tests($content)
{
    $ab_tags = umbrella_get_ab_test_tags();
    foreach ($ab_tags as $counter => $ab_tag) {
        $counter = $counter + 1;
        for ($i = 1; $i < 10; $i++) {
            $tag_to_remove = "umbrella_ab_test" . $counter . "_variant" . $i . "";
            if ($tag_to_remove != $ab_tag) {
                $content = umbrella_content_fix($content, $tag_to_remove);
//                if ($tag_to_remove=='umbrella_ab_test3_variant1'){print_r($content);}
                $pattern_to_remove = "/<" . $tag_to_remove . ">[\s\S]+?<\/" . $tag_to_remove . ">/";
                $content = preg_replace($pattern_to_remove, "", $content);
            } else {
                $content = umbrella_content_fix($content, $ab_tag);
//                if ($tag_to_remove=='umbrella_ab_test3_variant2'){print_r($content);}
                $content = umbrella_clear_ab_tags($content, $ab_tag);
            }
        }
    }
    return $content;
}

function umbrella_clear_ab_tags($content, $ab_tag): string
{
    $fix = [
        sprintf("<%s>", $ab_tag) => "",
        sprintf("</%s>", $ab_tag) => "",
    ];
    return strtr($content, $fix);
}

function umbrella_content_fix($content, $ab_tag): string
{
    $fix = [
        sprintf("<p></%s><br />", $ab_tag) => sprintf("</%s>", $ab_tag),
        sprintf("<p><%s><br />", $ab_tag) => sprintf("<%s>", $ab_tag),
        sprintf("<p></%s></p>", $ab_tag) => sprintf("</%s>", $ab_tag),
        sprintf("<%s></p>", $ab_tag) => sprintf("<%s>", $ab_tag),
        sprintf("</%s><br />", $ab_tag) => sprintf("</%s>", $ab_tag),
        sprintf("<%s><br />", $ab_tag) => sprintf("<%s>", $ab_tag),
    ];
    return strtr($content, $fix);
}

// umbrella_ab_test1_variant2 - ТЗ-2, 12 - новые экраны страниц услуг
// umbrella_ab_test1_variant1 - ТЗ-2, 12 - старые экраны страниц услуг
// umbrella_ab_test2_variant1 - ТЗ-2, 8.3, 8.4 - блоки акций
// umbrella_ab_test3_variant2 - ТЗ-2, 8.7, 10 - Изменен первый, добавлены 2ой и 3ий слайды на баннере на главной.
// umbrella_ab_test3_variant1 - ТЗ-2, 10 - старый вариант первого слайда
// umbrella_ab_test4_variant2 - ТЗ-2, 2.1, 2.2 - новый вариант меню
// umbrella_ab_test5_variant1 - ТЗ-2, 7 - Подписи гарантий на главной
//
// umbrella_ab_test6_variant1 - ТЗ-3, 3 - без доработки дизайна страницы цен
// umbrella_ab_test6_variant2 - ТЗ-3, 3 - с доработкой дизайна страницы цен
// umbrella_ab_test7_variant1 - ТЗ-3, 4 - без блока частые вопросы
function umbrella_get_ab_test_tags(): array
{
    $ab_tests_array = [];

    if($_SERVER['REMOTE_ADDR'] == '91.201.73.175')
    {
        $expVar = "0";
        $GLOBALS['expVar'] = "0";
    }
    elseif (isset($_COOKIE['exp_xSthYnX-SKuIkAVV_GvSuw'])) {
        $expVar = $_COOKIE['exp_xSthYnX-SKuIkAVV_GvSuw'];
    } elseif(isset($GLOBALS['expVar'])) {
        $expVar = $GLOBALS['expVar'];
        setAbTestCookie("exp_xSthYnX-SKuIkAVV_GvSuw",$expVar);
    }
    else {
        $expVar = rand(0,1);
        $GLOBALS['expVar'] = $expVar;
        setAbTestCookie("exp_xSthYnX-SKuIkAVV_GvSuw",$expVar);
    }

    if (isset($_GET['expvar'])) {
        $expVar1 = $_GET['expvar'];
        $expVar = $expVar1;
        setAbTestCookie("exp_test",$expVar1);
        setAbTestCookie("exp_xSthYnX-SKuIkAVV_GvSuw",$expVar);
    } elseif (isset($_COOKIE['exp_test'])) {
        $expVar1 = $_COOKIE['exp_test'];
    } else {
        $expVar1 = "0";
        setAbTestCookie("exp_test",$expVar1);
    }

    if ($expVar == '1') {
        array_push($ab_tests_array, 'umbrella_ab_test1_variant2', 'umbrella_ab_test2_variant1', 'umbrella_ab_test3_variant2', 'umbrella_ab_test4_variant2', 'umbrella_ab_test5_variant2');
    } else {
        array_push($ab_tests_array, 'umbrella_ab_test1_variant1', 'umbrella_ab_test2_nothing', 'umbrella_ab_test3_variant1', 'umbrella_ab_test4_variant1', 'umbrella_ab_test5_variant1');
    }
    if ($expVar1 == "1") {
        array_push($ab_tests_array, 'umbrella_ab_test6_variant2','umbrella_ab_test7_variant1');
    } else {
        array_push($ab_tests_array, 'umbrella_ab_test6_variant1','umbrella_ab_test7_nothing');
    }
    return $ab_tests_array;
}

function setAbTestCookie(string $cookieName, string $value): bool
{
    return setcookie($cookieName, $value, time() + 3600 * 24 * 30, "/", ".taxlab.ru");
}