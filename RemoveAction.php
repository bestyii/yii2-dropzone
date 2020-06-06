<?php

namespace bestyii\dropzone;

use Yii;
use yii\base\Action;

class RemoveAction extends Action
{
    public $uploadDir = '@uploadPath';

    public function run($fileName)
    {
        return (int)unlink(Yii::getAlias($this->uploadDir) . '/' . $fileName);
    }
}
