<?php

namespace common\modules\api\v1\controllers;

/**
 * Контроллер капчи.
 */
class CaptchaController extends BaseController
{
    /** @inheritdoc */
    protected function verbs()
    {
        return [
            'index' => ['get'],
        ];
    }

    /**
     * Отдает капчу.
     *
     * @return array
     */
    public function actionIndex()
    {
        return [
            'img' => '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',
        ];
    }
}