<?php

/*
 * This file is part of the zibios/wrike-php-library package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpLibrary\Tests\Transformer\Response\Psr;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Zibios\WrikePhpLibrary\Transformer\Response\Psr\StringBodyTransformer;

/**
 * String Body Transformer Test.
 */
class StringBodyTransformerTest extends PsrResponseTransformerTestCase
{
    /**
     * @var StringBodyTransformer
     */
    protected $object;

    public function setUp()
    {
        $this->object = new StringBodyTransformer();
    }

    public function test_transform()
    {
        $responseString = '{"key": "value"}';
        $bodyMock = $this->getMockForAbstractClass(StreamInterface::class);
        $bodyMock->expects($this->any())
            ->method('getContents')
            ->willReturn($responseString);
        $responseMock = $this->getMockForAbstractClass(ResponseInterface::class);
        $responseMock->expects($this->any())
            ->method('getBody')
            ->willReturn($bodyMock);
        $returnedResponse = $this->object->transform($responseMock, 'unimportant');

        $this->assertSame($responseString, $returnedResponse);
    }
}
