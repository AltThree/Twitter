<?php

/*
 * This file is part of Alt Three Twitter.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Tests\Twitter;

/**
 * This is the twitter parser test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TwitterParserTest extends AbstractTestCase
{
    public function provideRenderCases()
    {
        return [
            ['@AltThreeLtd', '<p><a href="https://twitter.com/AltThreeLtd">@AltThreeLtd</a></p>'],
            ['@ AltThreeLtd', '<p>@ AltThreeLtd</p>'],
        ];
    }

    /**
     * @dataProvider provideRenderCases
     */
    public function testRender($input, $output)
    {
        $this->assertSame("$output\n", $this->app->markdown->convertToHtml($input));
    }
}
