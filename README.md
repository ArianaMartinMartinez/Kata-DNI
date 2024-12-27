# Kata - DNI

>[!CAUTION]
>Por favor lea todos los punto del README para un correcto uso del proyecto. Gracias.

## 💡 Descripción

Este proyecto consiste en una aplicación en la que el usuario puede introducir por API su número de DNI (Documento Nacional de Identidad) para obtener la letra correspondiente.

Toda la funcionalidad es a través de API por lo que no existe ninguna funcionalidad a través de web.

## 💼 Guía del proyecto

Como ya se ha indicado anteriormente, solamente se puede introducir por API el número del DNI del cual queremos obtener la letra.

Debe ser un número entero entre 0 y 99999999, por lo que si el usuario introduce un número de una longitud incorrecta u otro dato que no sea de tipo número aparecerá un error indicándolo.

A continuación se ven varios ejemplos:

![Request correcta](./public/docs/postmanCorrectRequest.png)
<p align="center"><em>Request correcta</em></p>

![Request de longitud incorrecta](./public/docs/postmanIncorrectLenghtRequest.png)
<p align="center"><em>Request de longitud incorrecta</em></p>

![Request de tipo incorrecto](./public/docs/postmanIncorrectTypeRequest.png)
<p align="center"><em>Request de tipo incorrecto</em></p>

## ❓ Requisitos de instalación

Para poder probar este proyecto en local necesitarás:

1. XAMPP (o cualquier otro servidor local que soporte PHP y MySQL)

2. Terminal del Sistema Operativo

3. Instalar Composer

4. Instalar NPM via Node.js

5. Xdebug (para poder ver el test coverage)

6. Postman (o cualquier otra plataforma para usar la API, como *Insomnia*)

## 💻 Instalación

1. Clonar el repositorio:
```
    git clone https://github.com/ArianaMartinMartinez/Kata-DNI.git
```

2. Instalar Composer:
```
    composer install
```

3. Instalar NPM:
```
    npm install
```

4. Crear un archivo '.env' tomando de ejemplo el archivo '.env.example' y modificar las líneas:
    - DB_CONNECTION=mysql
    - DB_DATABASE=kata_dni

5. Crear una base de datos en MySQL vacías (yo uso *phpMyAdmin*)
![Crear base de datos en phpMyAdmin](./public/docs/createDatabase.png)

6. Generar todas las tablas y rellenar las letras:
```
    php artisan migrate:fresh --seed
```

7. Correr NPM:
```
    npm run dev
```

8. Correr Laravel (en otra terminal):
```
    php artisan serve
```

Con todo esto será posible usar la API del proyecto con la URL que se genere este último comando.

## 📚 Diagrama de la base de datos

Este es el diagrama de la base de datos para este proyecto. Únicamente existe una tabla en la que se encuentran almacenadas las letras posibles para el DNI.

![Diagrama de la base de datos](./public/docs/databaseDiagram.png)

## 🔍 API Endpoints

En este proyecto existe un único endpoint para poder ver la letra del DNI devuelta según el número introducido:

```
    http://127.0.0.1:8000/api/
```

## 👾 Tests

Este proyecto tiene un **80%** de test coverage.

Puedes probar los tests y ver el coverage en la terminal usando:
```
   php artisan test --coverage
```

![Test coverage](./public/docs/testCoverage.png)

>[!TIP]
>También puedes ver el coverage en un navegador web usando:
>```
>   php artisan test --coverage-html=coverage-report
>```

## 🛠️ Tecnologías y herramientas

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=777BB4&color=777BB4'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=4479A1&color=4479A1'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=Laravel&logoColor=white&labelColor=FF2D20&color=FF2D20'/></a>

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='phpMyAdmin' src='https://img.shields.io/badge/phpMyAdmin-100000?style=for-the-badge&logo=phpMyAdmin&logoColor=white&labelColor=6C78AF&color=6C78AF'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=Postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Jira' src='https://img.shields.io/badge/Jira-100000?style=for-the-badge&logo=Jira&logoColor=white&labelColor=0052CC&color=0052CC'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='XAMPP' src='https://img.shields.io/badge/XAMPP-100000?style=for-the-badge&logo=XAMPP&logoColor=white&labelColor=FB7A24&color=FB7A24'/></a>

## 👨🏻‍💻 Autora

Este proyecto fue desarrollado completamente por:

[Ariana Martín Martínez](https://github.com/ArianaMartinMartinez)