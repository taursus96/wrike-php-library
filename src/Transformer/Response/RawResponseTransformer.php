<?php

/*
 * This file is part of the zibios/wrike-php-library package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpLibrary\Transformer\Response;

use Psr\Http\Message\StreamInterface;
use Zibios\WrikePhpLibrary\Transformer\ResponseTransformerInterface;

/**
 * Raw Response Transformer.
 */
class RawResponseTransformer implements ResponseTransformerInterface
{
    /**
     * @param string $responseFormat
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     *
     * @return bool
     */
    public function isSupportedResponseFormat($responseFormat)
    {
        return true;
    }

    /**
     * @param mixed  $response
     * @param string $resourceClass
     *
     * @throws \InvalidArgumentException
     *
     * @return StreamInterface
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function transform($response, $resourceClass)
    {
        return $response;
    }
}
