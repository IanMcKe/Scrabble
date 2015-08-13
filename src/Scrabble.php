<?php
    class Scrabble
    {
        function checkScore($input)
        {
            switch($input){
                case "A":
                case "E":
                case "I":
                case "O":
                case "U":
                case "L":
                case "N":
                case "R":
                case "S":
                case "T":
                    return 1;
                    break;
                case "D":
                case "G":
                    return 2;
                    break;
            }

        }
    }

?>
