<?php

namespace tests;

use dominus77\iconpicker\IconPickerAsset;
use dominus77\iconpicker\FontAwesomeAsset;
use yii\web\AssetBundle;

/**
 * Class IconPickerTest
 * @package tests
 */
class IconPickerTest extends TestCase
{
    /**
     * @inheritdoc
     */
    public function testRegisterIconPickerAssets()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        IconPickerAsset::register($view);
        $this->assertEquals(1, count($view->assetBundles));
        $this->assertTrue($view->assetBundles['dominus77\\iconpicker\\IconPickerAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/views/layouts/rawlayout.php');
        $this->assertContains('fontawesome-iconpicker.css', $content);
        $this->assertContains('fontawesome-iconpicker.js', $content);
    }

    /**
     * @inheritdoc
     */
    public function testRegisterFontAwesomeAssets()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        FontAwesomeAsset::register($view);
        $this->assertEquals(1, count($view->assetBundles));
        $this->assertTrue($view->assetBundles['dominus77\\iconpicker\\FontAwesomeAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/views/layouts/rawlayout.php');
        $this->assertContains('font-awesome.css', $content);
    }
}
