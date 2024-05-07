# команда выполняется из папки ./protected проекта:
php composer install



REST API для генерации рандомного числа используя фреймворк Yii 2
Каждой генерации присваивать уникальный id по которому можно получить результат генерации. 
Доступны 2 публичных API метода generate() и retrieve(id)


test.loc/random/generate - генерация числа

test.loc/random/retrieve?id={id} - вывод числа по id

БД (rndm) - поля id, number

-------------------------------------------------------------------
**/services/regular.php**

скрипт, который в папке /hawking найдет все файлы, имена которых состоят из цифр и букв латинского алфавита, имеют расширение bros и выведет на экран имена этих файлов, упорядоченных по имени.

Задание должно быть выполнено с использованием регулярных выражений.
Весь код должен быть прокомментирован в стиле PHPDoc.


**models/Hawking.php** - Класс hawking, от которого нельзя сделать наследника, состоящий из 3 методов

**controllers/HawkingController** - контроллен который вызывает класс Hawking

**view/hawking/index** - вьюха выводит получившие данные


- bros()
    • доступен только для методов класса
    • создает таблицу test, содержащую 5 полей:
id - целое, автоинкрементарное
script_name - строковое, длиной 25 символов
start_time - целое
end_time - целое
result - один вариант из 'normal', 'illegal', 'failed', 'success'

- brothers()
    • доступен только для методов класса
    • заполняет таблицу случайными данными
  
- production()
    • доступен извне класса
    • выбирает из таблицы test, данные по критерию: result среди значений 'normal' и 'success'
В конструкторе выполняются методы bros и brothers
