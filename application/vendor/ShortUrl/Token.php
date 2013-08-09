<?php

/**
 * New BSD License
 *
 * Copyright: Copyright (C) 2013, oztrov.me
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the <organization> nor the
 *       names of its contributors may be used to endorse or promote products
 *       derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace Oztrov\ShortUrl;

/**
 * Class Token
 *
 * The intended use is used to encode / decode URL tokens for branded URL
 * shortening service, using incrementing consecutive numbers, such as unique
 * auto-increment integer keys assigned by a database or persistent counters.
 *
 * A bit-shuffling algorithm is used to avoid generating predictable URLs, but
 * also it guarantees that no collisions will occur.
 *
 * URL alphabet (charset) is customizable. For the best results the alphabet length
 * should be a prime number of characters.
 *
 * The block size specifies number of transformations to be performed on the input
 * number.
 *
 * Specifying minimal length parameters produces token that is the same as
 * $min_length or longer. If token is shorter than $min_length it is padded with
 * the first symbol of the alphabet.
 *
 * @package Oztrov\Token
 * @author  Roman Kulish <roman.kulish@gmail.com>
 * @since   29/06/13
 */
class Token
{
    /**
     * Default charset
     *
     * The URL alphabet is fully customizable and may contain any number of
	 * characters. By default, digits and lower-case letters are used, with
	 * some of them removed to avoid confusion between characters like o, O and 0.
     *
     * For achieve better result the charset is shuffled and contains a prime
     * number of characters.
     */
    const CHARSET = 'xc7wavzf8e4jr6yg2n3um9hdk5bpt';

    /**
     * Default encoding block size
     *
     * The block size specifies how many times bits will be shuffled. The lower
	 * BLOCK_SIZE bits are reversed. Any bits higher than BLOCK_SIZE will remain
	 * intact. BLOCK_SIZE of 0 will leave all bits unaffected and the algorithm
	 * will simply be converting the integer to a different base.
     */
    const BLOCK_SIZE = 24;

    /**
     * Minimum encoded token length
     */
    const MIN_LENGTH = 5;

    /**
     * Maximum encoded token length. Based on 2 letters charset and encoded
     * PHP_INT_MAX. Used to check the token size limit while decoding.
     */
    const MAX_LENGTH = 32;

    /**
     * Charset used for encoding / decoding
     *
     * @var array
     */
    protected $charset = null;

    /**
     * Charset length
     *
     * @var integer
     */
    protected $charset_length = null;

    /**
     * Encoding / decoding block size
     *
     * @var integer
     */
    protected $block_size = null;

    /**
     * Mask
     *
     * @var integer
     */
    protected $mask = null;

    /**
     * Mapping bits
     *
     * @var array
     */
    protected $mapping = null;

    /**
     * Constructor
     *
     * @param string $charset
	 *   Charset for encoding / decoding
     * @param integer $block_size
	 *   Encoding / decoding block size
     * @throws Exception\InvalidArgumentException
     */
    public function __construct($charset = self::CHARSET, $block_size = self::BLOCK_SIZE)
    {
        if (( $charset = trim($charset) ) == '') {
            throw new Exception\InvalidArgumentException(__METHOD__ . ': $charset must be a non-empty string');
        } else if ( strlen($charset) < 2 ) {
            throw new Exception\InvalidArgumentException(__METHOD__ . ': $charset must contain at least two characters');
        }

        $this->charset = str_split($charset);
        $this->charset_length = sizeof($this->charset);

        settype($block_size, 'integer');

        if ($block_size < 0) {
            throw new Exception\InvalidArgumentException(__METHOD__ . ': $block_size must be a positive number');
        }

        $this->block_size = $block_size;

        $this->mask = (1 << $this->block_size) - 1;
        $this->mapping = array_reverse( range(0, ($this->block_size - 1)) );
    }

    /**
     * Encode $number into a string
     *
     * @param integer $number
     *   Number to encode
     * @param integer $min_length
     *   Minimum encoded string length
     * @return string
     * @throws Exception\InvalidArgumentException
     */
    public function encode($number, $min_length = self::MIN_LENGTH)
    {
        settype($number, 'integer');
        settype($min_length, 'integer');

        if ($number <= 0) {
            throw new Exception\InvalidArgumentException(__METHOD__ . ': $number must be a whole number greater than zero');
        } else if ($min_length < 0) {
            throw new Exception\InvalidArgumentException(__METHOD__ . ': $min_length must be a whole number greater than zero');
        }

        $number_encoded = 0;
        $number_mask = $number & $this->mask;

        for ($i = 0; $i < $this->block_size; $i++) {
            if ($number_mask & (1 << $i)) {
                $number_encoded |= (1 << $this->mapping[$i]);
            }
        }

        $number = ($number & ~$this->mask) | $number_encoded;
        unset($number_encoded, $number_mask);

        /**
         * Convert number into a string
         */

        $encoded_string = '';

        while ($number > 0) {
            $encoded_string = $this->charset[$number % $this->charset_length] . $encoded_string;
            $number = (integer)($number / $this->charset_length);
        }

        return str_pad($encoded_string, $min_length, $this->charset[0], STR_PAD_LEFT);
    }

    /**
     * Decode $encoded_string into a number
     *
     * @param string $encoded_string
     *   Encoded string
     * @return false|integer
     *   Return FALSE if token cannot be decoded
     */
    public function decode($encoded_string)
    {
        if (( $encoded_string = trim($encoded_string) ) == '') {
            return false; // empty string
        } else if ( strlen($encoded_string) > self::MAX_LENGTH ) {
            return false; // exceeds maximum possible token size
        }

        $encoded_string = strrev($encoded_string);
        $encoded_string = str_split($encoded_string);

        /**
         * Convert string into a number
         */

        $number = 0;
        $charset = array_flip($this->charset);

        for ($i = 0, $n = sizeof($encoded_string); $i < $n; $i++) {
            if ( !array_key_exists($encoded_string[$i], $charset) ) {
                return false; // character does not exist in the charset
            }

            $number += $charset[$encoded_string[$i]] * pow($this->charset_length, $i);
        }

        unset($charset);

        $number_decoded = 0;
        $number_mask = $number & $this->mask;

        for ($i = 0; $i < $this->block_size; $i++) {
            if ($number_mask & (1 << $this->mapping[$i])) {
                $number_decoded |= (1 << $i);
            }
        }

        return ($number & ~$this->mask) | $number_decoded;
    }
}