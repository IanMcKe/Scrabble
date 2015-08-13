<?php
    class Scrabble
    {
        function checkScore($input)
        {
            $dictionary = explode("\n", file_get_contents('https://docs.oracle.com/javase/tutorial/collections/interfaces/examples/dictionary.txt'));
            $word = strtolower($input);
            if(in_array($word, $dictionary) || strlen($word) == 1){
                $split_word = str_split($word);
                $word_total = 0;
                foreach ($split_word as $letter) {

                    switch($letter){
                        case "a":
                        case "e":
                        case "i":
                        case "o":
                        case "u":
                        case "l":
                        case "n":
                        case "r":
                        case "s":
                        case "t":
                            $word_total = $word_total + 1;
                            break;
                        case "d":
                        case "g":
                            $word_total = $word_total + 2;
                            break;
                        case "b":
                        case "c":
                        case "m":
                        case "p":
                            $word_total = $word_total + 3;
                            break;
                        case "f":
                        case "h":
                        case "v":
                        case "w":
                        case "y":
                            $word_total = $word_total + 4;
                            break;
                        case "k":
                            $word_total = $word_total + 5;
                            break;
                        case "j":
                        case "x":
                            $word_total = $word_total + 8;
                            break;
                        case "q":
                        case "z":
                            $word_total = $word_total + 10;
                            break;
                    }
                }
                return $word_total;
            }else{
                return 0;
            }
        }

//        function breakScore($)

    }
?>
