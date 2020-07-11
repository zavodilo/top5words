<?php

/**
 * @param string $string
 * @return array
 */
function top5Words($string)
{
    // Определяем массив символов, которые не относятся к словам
    $deleteChars = [")", "(", ";", ":", ".", ",", "!", "?", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "—", "«", "»", ""];
    // Удаляем лишние символы
    $replacedString = str_replace($deleteChars, " ", $string);

    // Разбиваем строку по пробелам и удаляем пустые значения
    $explodeArray = array_filter(explode(" ", $replacedString));

    $countWordsArray = [];
    foreach ($explodeArray as $word) {
        $word = trim($word);
        $countWordsArray[$word] = isset($countWordsArray[$word]) ? ($countWordsArray[$word] + 1) : 1;
    }
    arsort($countWordsArray);

    $countWordsArray = array_slice($countWordsArray, 0, 5);
    return $countWordsArray;
}

$string = "
В 0123456789 году Саша запустил HTML. Мы решили учить работат, решая задачи, приближенные к реальным. Мы даём возможность получить знания, умения. В процессе обучения мы сталкиваем ученика испытаниями, принцип которых — «сверстай, как показано в образце». Именно по такому принципу работают большинство верстальщиков.

Мы считаем вёрстку очень полезным навыком для любой IT-специальности. Поэтому стараемся делать наши курсы максимально интересными, затягивающими, интерактивными, необычными, где-то похожими на игру.

Мы подготовили 71 онлайн‑курс, затрагивающих разные аспекты работы верстальщика. Этого достаточно, чтобы вплотную познакомиться с вёрсткой. А для тех, кто хочет вырасти в профессионала, мы подготовили шесть онлайн-интенсивов. Эти уникальные образовательные программы позволяют подготовить специалистов с необходимыми для веб-индустрии навыками. Нам помогают наставники. Сейчас работают более трёхсот наставников.

Если курсов и интенсивов вам будет мало, то можно посмотреть на книжную полку, где мы постепенно собираем книги по веб-разработке. Или зайти к нам на форум и обсудить волнующий вас вопрос.

Мы любим верстку. Каждый человек должен попробовать освоить верстку.

Мы надеемся, что верстка поможет решать ваши задачи. Не ты выбираешь верстку, а верстка выбирает тебя! Если верстка выбрала тебя, то верстка поможет тебе в трудную минуту.

Любите верстку, как мы! Готов изучать верстку, верстальщик?
";

var_dump(top5Words($string));


$string = "
Here you can find activities to practise your reading skills. Reading will help you to improve your understanding of the language and build your vocabulary.

The self-study lessons in this section are written and organised according to the levels of the Common European Framework of Reference for languages (CEFR). There are different types of texts and interactive exercises that practise the reading skills you need to do well in your studies, to get ahead at work and to communicate in English in your free time.

Take our free online English test to find out which level to choose. Select your level, from beginner (CEFR level A1) to advanced (CEFR level C1), and improve your reading skills at your own speed, whenever it's convenient for you.
";

var_dump(top5Words($string));

$string = "
El parque
Me llamo Pedro y hoy quiero hablar del parque que hay junto a mi casa. Yo me divierto todos los días en el parque. Allí veo las palomas comiendo y bebiendo agua. También veo pájaros de colores en los árboles. Yo voy al parque a las cinco de la tarde, cuando termino los deberes de la escuela. Allí veo a mi amigo Juan y a mi amigo Luis. Con ellos juego al escondite y a otros juegos muy entretenidos. Luis se va más temprano del parque porque tiene que ir a la escuela de música a aprender a tocar el piano.
";

var_dump(top5Words($string));

$string = "
Wat leuk om jou eindelijk weer eens te schrijven. Ik heb je lang niet gezien.

Ik woon nu in Amsterdam. Ik woon in een klein huis samen met mijn vriendin. Naast mijn huis is een voetbalveld. Daar voetbal ik iedere zaterdag samen met nog een paar vrienden.
";

var_dump(top5Words($string));

$string = "
有子曰: 其為人也孝弟, 而好犯上者, 鮮矣;不好犯上, 而好作亂者, 未之有也!其為人也孝弟, 而好犯上者 其為人也孝弟, 而好犯上者 其為人也孝弟, 而好犯上者 也孝弟, 而好犯 也孝弟, 而好犯 也孝弟, 而好犯 也孝弟, 而好犯 也孝弟, 而好犯
";

var_dump(top5Words($string));

$string = "
११ स्वर: अ, आ इ, ई, उ, ऊ, ऋ, ए, ऐ, ओ, औअ, आ इ, ई, उ, ऊ, ऋ, ए, ऐ, ओ, औअ, आ इ, ई, उ, ऊ, ऋ, ए, ऐ, ओ, औअ, आ इ, ई, उ, ऊ, ऋ, ए, ऐ, ओ, औ
";

var_dump(top5Words($string));
