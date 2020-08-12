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
    "ARTICLE" => []
];

$file = File::getFileContents($arParams["FILE"]);


$fileItems = [];
$lines = explode(PHP_EOL, $file);
foreach ($lines as $line) {
    $fileItems[] = str_getcsv($line);
}
unset($fileItems[0]);
unset($fileItems[1]);


if (empty($fileItems)) {

} else {
    foreach ($fileItems as $article) {
        $ID = $DB->Insert("b_studio7spb_izzapoyay_phrases", [
            "CODE"                  => "'".intval($article[0])."'",
            "NAME"                    => "'".trim($article[1])."'",
        ], $err_mess.__LINE__);
    }
}
