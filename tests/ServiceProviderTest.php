<?php

declare(strict_types=1);

/*
 * This file is part of Alt Three Twitter.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Tests\Twitter;

use AltThree\Twitter\TwitterExtension;
use AltThree\Twitter\TwitterParser;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testTwitterParserIsInjectable()
    {
        $this->assertIsInjectable(TwitterParser::class);
    }

    public function testTwitterExtensionIsInjectable()
    {
        $this->assertIsInjectable(TwitterExtension::class);
    }

    public function testEnvironmentIsSetup()
    {
        $this->assertTrue(in_array($this->app->make(TwitterParser::class), $this->app->make('markdown.environment')->getInlineParsers(), true));
    }
}
