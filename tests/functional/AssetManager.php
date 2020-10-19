<?php

namespace functional;

use yii\web\AssetManager as BaseAssetManager;

/**
 * Class AssetManager
 * @package functional
 */
class AssetManager extends BaseAssetManager
{
    private $hashes = [];
    private $counter = 0;

    /**
     * @inheritdoc
     */
    public function hash($path)
    {
        if (!isset($this->_hashes[$path])) {
            $this->hashes[$path] = $this->counter++;
        }
        return $this->hashes[$path];
    }
}
