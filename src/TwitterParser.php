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

namespace AltThree\Twitter;

use League\CommonMark\Inline\Element\Link;
use League\CommonMark\Inline\Parser\AbstractInlineParser;
use League\CommonMark\InlineParserContext;

/**
 * This is the twitter parser class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TwitterParser extends AbstractInlineParser
{
    /**
     * Get the characters that must be matched.
     *
     * @return string[]
     */
    public function getCharacters()
    {
        return ['@'];
    }

    /**
     * Parse a line and determine if it contains a handle.
     *
     * If it does, then we do the necessary.
     *
     * @param \League\CommonMark\InlineParserContext $inlineContext
     *
     * @return bool
     */
    public function parse(InlineParserContext $inlineContext)
    {
        $cursor = $inlineContext->getCursor();

        $previousChar = $cursor->peek(-1);
        if ($previousChar !== null && $previousChar !== ' ') {
            return false;
        }

        $previousState = $cursor->saveState();
        $cursor->advance();

        $handle = $cursor->match('/^[A-Za-z0-9_]{1,15}(?!\w)/');
        if (empty($handle)) {
            $cursor->restoreState($previousState);

            return false;
        }

        $profileUrl = "https://twitter.com/{$handle}";
        $inlineContext->getContainer()->appendChild(new Link($profileUrl, '@'.$handle));

        return true;
    }
}
