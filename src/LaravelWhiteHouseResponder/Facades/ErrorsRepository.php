<?php
/**
 * Created by PhpStorm.
 * User: emitis
 * Date: 5/27/19
 * Time: 11:49 PM
 */

namespace Emyoutis\LaravelWhiteHouseResponder\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static void register(string $errorCode, string $developerMessage, string $userMessage, string $moreInfo)
 * @method static void unregister(string $errorCode)
 * @method static void getErrorInfo(string $errorCode)
 * @method static void errorHasBeenRegistered(string $errorCode)
 * @method static void errorHasNotBeenRegistered(string $errorCode)
 * @method static void disableExceptions()
 * @method static void enableExceptions()
 * @method static void setExceptions(bool $value)
 */
class ErrorsRepository extends Facade
{
    /**
     * @inheritdoc
     */
    protected static function getFacadeAccessor()
    {
        return 'whitehouse.errors';
    }
}
