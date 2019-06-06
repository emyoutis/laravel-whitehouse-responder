<?php
/**
 * Created by PhpStorm.
 * User: emitis
 * Date: 5/27/19
 * Time: 11:51 PM
 */

namespace Emyoutis\LaravelWhiteHouseResponder\Facades;


use Closure;
use Illuminate\Support\Facades\Facade;


/**
 * @method static array success(array $results, array $metadata = [])
 * @method static array clientError(string $errorCode, array $replaces = [])
 * @method static array serverError(string $errorCode, array $replaces = [])
 * @method static array error(string $errorCode, int $status, array $replaces = [])
 * @method static void registerFormatter(Closure $formatter)
 */
class Response extends Facade
{
    /**
     * @inheritdoc
     */
    protected static function getFacadeAccessor()
    {
        return 'whitehouse.response';
    }
}
