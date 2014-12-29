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

use \Dom\Error;

/**
 * @package Dom\Node
 * @object  Dom\Node\StyleCollection
 * @extends Dom\Collection
 * @uses    Dom\Error
 * @version 1.0
 * @author  Kerem Gunes <qeremy@gmail>
 */
class StyleCollection
    extends \Dom\Collection
{
    /**
     * Check for item type
     *
     * @param  str  $item
     * @return self.parent
     * @throws  Error\Instance (if item type is not Style)
     */
    public function add($item) {
        // Overwrite for "DI" option
        if (!$item instanceof Style) {
            throw new Error\Instance('Item must be instance of Dom\\Node\\Style!');
        }
        return parent::add($item);
    }
}

/**
 * End of file.
 *
 * @file /dom/Dom/Node/StyleCollection.php
 * @tabs Space=4 (Sublime Text 3)
 */