<?
/**
 * @var CMain $APPLICATION
 */
use Bitrix\Main\Page\Asset;
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Постоянные скидки");

Asset::getInstance()->addCss("/local/7studio/css/style.css");
?> 

<div id="lazaretspb-sale">
	<h1>Постоянные скидки</h1>

	<div class="alert alert-danger m-0 px-3 py-2 d-inline-block">Внимание! Скидки и акции не суммируются!</div>

    <div class="row mt-4">
        <?for($i=0; $i < 9; $i++):?>
            <div class="col col-sm-6 col-md-4 text-center">
                <div class="sale-item">
                    <div class="bg-success px-3">
                        <div>При оформлении заявки с сайта</div>
                        <i>(при условии обращения до даты контрольной явки)</i>
                    </div>
                    <div class="alert alert-success">
                        Скидка 5%
                    </div>
                </div>
            </div>
        <?endfor;?>
    </div>

    <div class="top-sale mt-3">
        <div class="top-sale-content">
            При соблюдении сроков инъекций каждая последующая инъекция препарата «Вивитрол®» в стандартном курсе дешевле на 1000 рублей:

            <div class="mt-4">27000 — 26000 — 25000 — 24000 — 23000 — 22000 р.</div>
        </div>
        <div class="alert alert-success text-center">
            Скидка 1000 руб.
        </div>
    </div>

    <div class="top-sale mt-5">
        <div class="top-sale-content">
            <div class="row">
                <div class="col-md-4">
                    Акция действует при единовременной оплате амбулаторного курса!
                </div>
                <div class="col-md-8">
                    Курс из 3-х сеансов плазмафереза 					7 800 руб.<br>
                    Курс из 6-ти сеансов озонотерапии 					11 200 руб.<br>
                    Курс из 5-ти гепатопротективных капельниц		8 900 руб.<br>
                    Курс из 6-ти церебропротективных капельниц 		10 000 руб.<br>
                    Курс из 3-х сеансов плазмафереза 					7 800 руб.<br>
                    Курс из 6-ти сеансов озонотерапии 					11 200 руб.<br>
                    Курс из 5-ти гепатопротективных капельниц		8 900 руб.<br>
                    Курс из 6-ти церебропротективных капельниц 		10 000 руб.<br>


                </div>
            </div>
        </div>
        <div class="alert alert-success text-center">
            «Курсом  — еще дешевле!»
        </div>
    </div>

</div>

<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>