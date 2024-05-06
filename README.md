REST API для генерации рандомного числа используя фреймворк Yii 2
Каждой генерации присваивать уникальный id по которому можно получить результат генерации. 
Доступны 2 публичных API метода generate() и retrieve(id)


test.loc/random/generate - генерация числа

test.loc/random/retrieve?id={id} - вывод числа по id

БД (rndm) - поля id, number
