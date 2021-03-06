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

use Dom\Error;

/**
 * @package Dom\Node
 * @object  Dom\Node\DocumentType
 * @author  Kerem Gunes <k-gun@mail.com>
 */
class DocumentType extends Node
{
    /**
     * Prepend doctype xml/html as string?
     * @var bool
     */
    protected $addDoctypeString = true;

    /**
     * Create a new DocumentType object.
     * @param string $name
     */
    public function __construct($name) {
        parent::__construct($name, null, Node::TYPE_DOCUMENT_TYPE);
    }

    /**
     * Set will return doctype as string or not (for xml/html autputs).
     *
     * @param  boolean $option
     * @return void
     */
    public function addDoctypeString($option) {
        $this->addDoctypeString = (bool) $option;
    }
}
