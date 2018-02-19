<?php
/* @var $this yii\web\View */

$this->title = Yii::t('user', 'Інформація');
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Кабінет користувача'), 'url' => ['../room']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Статистика'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Переоблік</h1>
<?= $this->render('_menu') ?>
<h3>Довідка</h3>
<p>
    У кабінеті статистики можливо отримати візуальну та кількісну інформацію щодо обліку та реалізації товарів.
</p>
<dl>

    <dt>"<strong>Загальна</strong>"</dt>
    <dd>Загальна статистика: кількість товару у наявності та кількість проданих одиць товару з моменту початку веденння електронного обліку . </dd>
    <br>

    <dt>"<strong>Аукціон хутра</strong>"</dt>
    <dd>Представлені тренди на ціну різного хутра на Копенгагенському аукціоні.</i></dd>
    <br>
<!---->
<!--    <dt>"<strong>Групи</strong>"</dt>-->
<!--    <dd>У цьому розділі виконується призначення практики групам. Ця інформація надалі використовується для формування наказів за видами практики. <i>(У розробці)</i></dd>-->
<!--    <br>-->
<!---->
<!--    <dt>"<strong>Документи</strong>"</dt>-->
<!--    <dd>У розділі "Документи" можливо переглянути та додати нові документи, що стосуються практики та розподілу студентів.</dd>-->
<!--    <br>-->


<!--    <dt><strong>Керівники практики</strong>"</dt>-->
<!--    <dd>У розділі "Керівники практики", студентам призначаються керівники практики від факультету. Серед опцій можливо обрати гру3пування студентів як по групам так і по компаніям. У цьому разі легко виконати розподіл так, щоб на одну компанію був лише один керівник практики від факультету. </dd>-->
<!--    <br>-->

<!--    <dt>"<strong>Розсилка</strong>"</dt>-->
<!--    <dd>У розділі "Розсилка" можливо виконати розсилку електронних листів або смс студентам, керівникам практики з можливістю як групування за компаніями  чи групами, так і персонально. <i>(У розробці)</i></dd>-->
<!--    <br>-->

</dl>