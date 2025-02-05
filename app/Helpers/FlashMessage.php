<?php

namespace App\Helpers;

class FlashMessage
{
    public static function success($model, $action)
    {
        return ucfirst($model) . " " . self::actionMessage($action) . " successfully.";
    }

    public static function danger($model, $action)
    {
        return ucfirst($model) . " " . self::actionMessage($action) . " successfully.";
    }

    private static function actionMessage($action)
    {
        return match ($action) {
            'add' => 'added',
            'update' => 'updated',
            'delete' => 'deleted',
            default => 'processed',
        };
    }
}
