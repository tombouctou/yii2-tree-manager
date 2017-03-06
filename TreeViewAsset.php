<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015
 *
 * @version   1.0.4
 */

namespace kartik\tree;

use Yii;

/**
 * Asset bundle for TreeView widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 *
 * @since  1.0
 */
class TreeViewAsset extends \kartik\base\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\widgets\ActiveFormAsset',
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->setSourcePath(__DIR__.'/assets');
        $this->setupAssets('js', ['js/kv-tree']);
        $this->setupAssets('css', ['css/kv-tree']);
        parent::init();
    }
}
