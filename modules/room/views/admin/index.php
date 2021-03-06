<?php
/* @var $this yii\web\View */

$this->title = Yii::t('user', 'Адмін');
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Кабінет користувача'), 'url' => ['../room']];
//$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Менеджер'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<h1>Призначити практику групам</h1>
<?= $this->render('_menu') ?>
<h3>Довідка</h3>
<p>
    У кабінеті адміністратора сайту можливо визначити базові налаштування, зокрема викзначити які групи у поточному році мають практику, проконтролювати користувачів, виконати розсилку електронних листів та смс, переглянути статистичні дані та інформацію про  договори та інші документи, що супроводжують практику та розподіл студентів.
</p>
<dl>
    <dt>"<strong>Розсилка</strong>"</dt>
    <dd>У розділі "Розсилка" можливо виконати розсилку електронних листів або смс студентам, керівникам практики з можливістю як групування за компаніями  чи групами, так і персонально. <i>(У розробці)</i></dd>
    <br>
</dl>
