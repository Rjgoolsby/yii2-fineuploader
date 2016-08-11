<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\fineuploader;


use yii\web\AssetBundle;

/**
 * Class FineuploaderAsset
 * @package harrytang\fineuploader
 */
class FineuploaderAsset extends AssetBundle
{

    public $sourcePath = '@npm/fine-uploader/s3.jquery.fine-uploader';
    public $js = [
        's3.jquery.fine-uploader.js'
    ];
    public $css = [
        'fine-uploader-gallery.min.css',
        'fine-uploader-new.min.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

} 