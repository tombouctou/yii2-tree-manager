<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015
 *
 * @version   1.0.4
 */

namespace kartik\tree;

/**
 * Asset bundle for TreeViewInput widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 *
 * @since  1.0
 */
class TreeViewInputAsset extends \kartik\base\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $depends = [
        'kartik\tree\TreeViewAsset',
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->setSourcePath(__DIR__.'/assets');
        $this->setupAssets('css', ['css/kv-tree-input']);
        $this->setupAssets('js', ['js/kv-tree-input']);
        parent::init();
    }
}
