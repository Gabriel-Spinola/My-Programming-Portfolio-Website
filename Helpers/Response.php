<?php

namespace Helpers;

use Closure;
use InvalidArgumentException;

/**
 * @Namespace Helpers
 * 
 * @Use InvalidArgumentsException
 * 
 * - Get a response to test safely features, and Also giving a log for the client
 * 
 * https://www.php.net/manual/en/language.exceptions.extending.php
 */
class Response
{
    /**
     * Client log 
     */
    public static function simpleResponse($response, $message): void
    { ?>

        <?php if ($response == 'success') : ?>

            <div class="alert alert-success m-2" role="alert">

                <h4 class="alert-heading">BOA!</h4>

                <p><?php print $message ?></p>

                <hr>

            </div>

        <?php elseif ($response == 'error') : ?>

            <div class="alert alert-danger" role="alert">

                <p><?php print $message ?></p>

            </div>

        <?php else :

            @throw new InvalidArgumentException('Incorrect Response');

        ?>

        <?php endif ?>

<?php }

    /**
     * Test and log 
     */
    public static function detailResponse(bool $response, Closure | string $ifSuccess, Closure $ifError)
    {
        if ($response) {
            if (is_string($ifSuccess)) {
                self::simpleResponse(
                    response: 'success',
                    message: $ifError
                );
            } else {
                $ifSuccess();
            }
        } else {
            $ifError();
        }
    }
}
