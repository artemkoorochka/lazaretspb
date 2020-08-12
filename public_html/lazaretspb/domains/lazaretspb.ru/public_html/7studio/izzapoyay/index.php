<?
/**
 * @var CMain $APPLICATION
 */

use Bitrix\Main\Application,
    Bitrix\Main\IO\File,
    Bitrix\Main\Web\Json;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (!function_exists("d") )
{
    function d($value, $type="pre")
    {
        if ( is_array( $value ) || is_object( $value ) )
        {
            echo "<" . $type . " class=\"prettyprint\">".htmlspecialcharsbx( print_r($value, true) )."</" . $type . ">";
        }
        else
        {
            echo "<" . $type . " class=\"prettyprint\">".htmlspecialcharsbx($value)."</" . $type . ">";
        }
    }
}

$arParams = [
    "FILE" => "prases.csv",
    "PHRASES" => []
];


$arResult = [
    "ARTICLE" => 2147483647
];

$arResult["ARTICLE"] = "select * FROM b_studio7spb_izzapoyay_phrases WHERE CODE=" . $arResult["ARTICLE"];
$arResult["ARTICLE"] = $DB->Query($arResult["ARTICLE"]);

if($arResult["ARTICLE"] = $arResult["ARTICLE"]->Fetch()){
    d($arResult);
}