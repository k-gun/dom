<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Kerem Gunes
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace Dom\Node;

use Dom\Shablon\TrivialNodeInterface;

/**
 * @package Dom\Node
 * @object  Dom\Node\Text
 * @author  Kerem Gunes <k-gun@mail.com>
 */
class Text extends Node implements TrivialNodeInterface
{
    /**
     * Content of node.
     * @var string
     */
    protected $content = '';

    /**
     * Create a new Text object.
     *
     * @param string $content
     */
    public function __construct($content) {
        $this->setContent($content);

        parent::__construct('#text', $content, Node::TYPE_TEXT);
    }

    /**
     * Set node content.
     *
     * @param string $content
     */
    public function setContent($content) {
        $this->content = $content;
    }

    /**
     * Get node content.
     *
     * @return string
     */
    public function getContent() {
        return $this->content;
    }
}
