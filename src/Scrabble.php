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
                case "B":
                case "C":
                case "M":
                case "P":
                    return 3;
                    break;
                case "F":
                case "H":
                case "V":
                case "W":
                case "Y":
                    return 4;
                    break;
                case "K":
                    return 5;
                    break;
                case "J":
                case "X":
                    return 8;
                    break;
        }

        }
    }

?>
