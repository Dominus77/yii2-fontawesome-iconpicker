<?php

namespace functional;

use dominus77\iconpicker\IconPickerAsset;
use dominus77\iconpicker\FontAwesomeAsset;
use yii\web\AssetBundle;

/**
 * Class AssetsTest
 * @package functional
 */
class AssetsTest extends TestCase
{
    public function testRegisterIconPickerAssets()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $view = $this->getView();
        self::assertEmpty($view->assetBundles);
        IconPickerAsset::register($view);
        self::assertCount(4, $view->assetBundles);
        self::assertInstanceOf(AssetBundle::class, $view->assetBundles[IconPickerAsset::class]);
        $content = $view->renderFile('@functional/views/layouts/rawlayout.php');
        self::assertContains('fontawesome-iconpicker' . $min . '.css', $content);
        self::assertContains('fontawesome-iconpicker' . $min . '.js', $content);
    }

    public function testRegisterFontAwesomeAssets()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $view = $this->getView();
        self::assertEmpty($view->assetBundles);
        FontAwesomeAsset::register($view);
        self::assertCount(1, $view->assetBundles);
        self::assertInstanceOf(AssetBundle::class, $view->assetBundles[FontAwesomeAsset::class]);
        $content = $view->renderFile('@functional/views/layouts/rawlayout.php');
        self::assertContains('all' . $min . '.css', $content);
    }
}
