# Happy Aulas® app
Aplicativo Happy Aulas® desenvolvido por naccaratocarolina & Tefmath no front-end e IgorDelfino no back-end.

Para servir o front-end, rode os seguintes comandos na pasta \aulas-particulares-app:

> npm install

> ionic serve

Para servir o back-end, voce primeiro deve criar uma database local atraves do phpmyadmin ou da shell do mysql (ou como preferir) e configurar as suas credenciais no arquivo .env, preenchendo os campos:

  DB_DATABASE = nome_da_sua_database
  
  DB_USERNAME = root
  
  DB_PASSWORD = *senha do root*
  
Em seguida, rode o seguinte comando na pasta \Laravel:

> composer install

Não esqueca de migrar as migrations com o comando

> php artisan migrate

E, por fim, para servir o back-end:

> php artisan key:generate
> php artisan serve
  
