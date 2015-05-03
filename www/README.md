#Instalação e configuração

1) Configuração do Apache para CakePHP: habilitar o mod_rewrite

2) ermissão de reescrita, como no exemplo abaixo:
```html
<Directory />
    Options FollowSymLinks
    AllowOverride All
</Directory>
```

3) Importação do SQL para um banco MySQL: www/div64.sql

4) Depois da importação, fazer a configuração de acesso ao banco no arquivo: www/Config/database.php

5) Permissão total a pasta temporária:
chmod -R 777 www/tmp

Observação: no teste, foi utilizado o framework CakePHP 2.6.4

#Utilização

- Tela de início:

![Início](http://seasites.com.br/git/inicio.jpg)

- Lista de Categorias:

![Lista de Categoria](http://seasites.com.br/git/lista-categoria.jpg)

- Lista de Categorias em JSON (observar extensão da URL):

![Lista de Categoria com JSON](http://seasites.com.br/git/lista-categoria-json.jpg)

- Categoria específica em JSON (observar extensão da URL):

![Lista de Categoria Específica com JSON](http://seasites.com.br/git/lista-categoria-especifica-json.jpg)

O mesmo padrão de utilização funciona para os produtos.

Observação: a extensão .json não funcionará para ações add, edit, delete, etc.
