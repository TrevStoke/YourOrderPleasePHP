<?php


namespace YourOrderPlease;


class Order
{
    /**
     * @param string $words
     * @return string
     */
    public static function order($words = "")
    {
        // return early if blank string input
        if($words === "") return "";

        $wordArray = self::getArrayFromString($words);
        $sorted = self::getValueAsArrayKeyFromWords($wordArray);

        ksort($sorted);

        return implode(" ", $sorted);
    }

    /**
     * @param $words
     * @return array
     */
    public static function getArrayFromString($words)
    {
        return explode(" ", $words);
    }

    /**
     * @param $word
     * @return int
     */
    public static function getValueFromToken($word)
    {
        $value = (int) preg_replace('/\D/', '', $word);
        return $value;
    }

    public static function getValueAsArrayKeyFromWords(array $wordArray)
    {
        $result = [];
        foreach($wordArray as $word)
        {
            $result[self::getValueFromToken($word)] = $word;
        }

        return $result;
    }
}