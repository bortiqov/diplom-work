<?php

namespace common\modules\transaction\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `transaction` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
