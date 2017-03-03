<?php

/*
 * This file is part of Alt Three Twitter.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Twitter;

use League\CommonMark\Extension\Extension;

/**
 * This is the twitter extension class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TwitterExtension extends Extension
{
    /**
     * The twitter parser.
     *
     * @var \AltThree\Twitter\TwitterParser
     */
    protected $parser;

    /**
     * Create a new twitter parser instance.
     *
     * @param \AltThree\Twitter\TwitterParser $parser
     *
     * @return void
     */
    public function __construct(TwitterParser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * Returns a list of inline parsers to add to the existing list.
     *
     * @return \League\CommonMark\Inline\Parser\InlineParserInterface[]
     */
    public function getInlineParsers()
    {
        return [$this->parser];
    }
}
