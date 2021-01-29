# My Portugal Travel
Um projeto que utiliza do frameworks codeignitger 3.

Apenas uma página focada no layout, para testas certas funcionalidades do codeigniter, assim como tentar criar um layout bonito e agradável aos olhares.

## Acessando a página adiministrativa

1- Estando na página do projeto, acrescente em sua url: "/painel". 

2- Logue com a o email: admin@admin.com - senha: 12345678

## Como implementar?

1- Rode o script sql em um banco de dados local (Ex: MySQL Workbench).

2- Mova a pasta do projeto para o seu localhost.

3- Quando estiver tudo configurado, basta abrir seu terminal (Ex: git bash) na pasta do projeto e executar o comando `php -S localhost:8080` (seu projeto poderá ser acessado por essa URL). Caso você não tenha o PHP Chocolatey instalado, você pode usar um APACHE. Quando colar a pasta no servidor, certifique-se de trocar a variável base_url do arquivo: application/config/config.php. Ex: ($config['base_url'] = 'http://localhost/my-portugal-travel').

4- Não se esqueça de rodar o script MySQL encontrando na pasta: sql/portugal.sql


#### Autor: [Juan Victor Oliveira Silva](https://github.com/JuanvictorO "JuanvictorO")
