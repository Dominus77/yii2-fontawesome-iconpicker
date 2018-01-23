<?php

namespace tests;

use dominus77\iconpicker\IconPickerAsset;
use dominus77\iconpicker\FontAwesomeAsset;
use yii\web\AssetBundle;

/**
 * Class AssetsTest
 * @package tests
 */
class AssetsTest extends TestCase
{
    /**
     * @inheritdoc
     */
    public function testRegisterIconPickerAssets()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        IconPickerAsset::register($view);
        $this->assertEquals(4, count($view->assetBundles));
        $this->assertTrue($view->assetBundles['dominus77\\iconpicker\\IconPickerAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/views/layouts/rawlayout.php');
        $this->assertContains('fontawesome-iconpicker' . $min . '.css', $content);
        $this->assertContains('fontawesome-iconpicker' . $min . '.js', $content);
    }

    /**
     * @inheritdoc
     */
    public function testRegisterFontAwesomeAssets()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        FontAwesomeAsset::register($view);
        $this->assertEquals(1, count($view->assetBundles));
        $this->assertTrue($view->assetBundles['dominus77\\iconpicker\\FontAwesomeAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/views/layouts/rawlayout.php');
        $this->assertContains('font-awesome' . $min . '.css', $content);
    }
}
