<?php
echo "Задание 1\nЗадание 2\nЗадание 3\n";
$choise = readline("Выберите задание: ") . PHP_EOL;


switch ($choise) {
    case 1:
        function mostRecent(string $text): void
        {
            $arr = explode(" ", $text);
            $resultat = array_count_values($arr);
            arsort($resultat);
            echo "Самое часто повторяющиеся слово: " . key($resultat);
        }
        $text = readline("Введите текст: ");
        mostRecent($text);
        break;

    case 2:
        function arrayUnique(array $arr): array
        {

            $uniqueArr = [];
            foreach ($arr as $value) {
                if (!in_array($value, $uniqueArr)) {
                    $uniqueArr[] = $value;
                }
            }
            return $uniqueArr;
        }

        $arr = [22, 58, 58, 22, 76, 76, 22, 58];
        print_r(arrayUnique($arr));
        break;
    case 3:
        function caesarFont(string $text, int $key): string
        {
            $output = '';
            $EnglishLetters = [
                'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N',
                'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
            ];
            $letterСounter = count($EnglishLetters);
            for ($i = 0; $i < strlen($text); $i++) {
                for ($j = 0; $j < $letterСounter; $j++) {
                    if (ctype_alpha($text[$i])) {
                        $offset = ord($text[$i]);
                        $ascii = $offset + $key - $offset;
                        $output .= chr($offset + ($ascii % $letterСounter));
                        break;
                    } else {
                        $output .= $text[$i];
                        break;
                    }
                }
            }
            return $output;
        }
        $text = readline('Введите текст: ');
        $key = 5;
        $result = caesarFont($text, $key);
        echo $result;
        break;


    default:
        echo "Вы введи что то неверно";
        break;
}
