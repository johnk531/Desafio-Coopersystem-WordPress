# Desafio Coopersystem em WordPress

Um desafio que consiste em criar uma sistema no WordPress que gerenciam anúncios.

## Começando

Essas instruções fornecerão uma cópia do projeto instalado e funcionando em sua máquina local para fins de desenvolvimento e teste. Consulte implantação para obter notas sobre como implantar o projeto em um sistema ativo.

### Pré-requisitos

O que você precisa para instalar o software e como instalá-los:

```
Servidor(Apache)
```

```
Banco de dados(MySql)
```

Você pode instalar o Xampp, após intalado, necessita abrir o programa e iniciar o MySQL Database e Apache Web Server:
[XAMPP](https://www.apachefriends.org/download.html) - Para realizar o download do Xampp

Após iniciado o Xampp precisamos importar o banco de dados, com o Xampp e o MySQL Database ja iniciado, no navegador digite http://localhost/phpmyadmin/, crie um banco com o nome coopersystem e importe o dump do banco disponibilizado abaixo:
[DUMP](https://drive.google.com/file/d/1Iz3oMcejNQu1cdJilbbxrjBJ7Lu5Rpxe/view?usp=sharing) - Para realizar o download do dump do banco

### Instalando

Abra o terminal e entre no diretorio do Xampp(dentro da pasta do xampp/htdocs), clone o repositório com o comando:

```
git clone https://github.com/johnk531/Desafio-Coopersystem-WordPress.git
```

Renomeie a pasta para coopersystem, irá facilitar.

Precisamos mapear os hosts para a aplicação funcionar.

Navegue até o arquivo de hosts(C:/Windows/System32/drivers/etc/hosts), adicione a seguinte linha:

```
127.0.0.1 coopersystem.mob
```

E vamos modificar também o virtualhost dentro do Xampp acessando o arquivo httpd-vhosts.conf(C:/xampp/apache/conf/extra/httpd-vhosts.conf), adicione no final do arquivo:

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdoocs/coopersystem"
    ServerName coopersystem.mob
</VirtualHost>
```

Feito isso, podemos iniciar o sistema na url http://coopersystem.mob

## Utilizando o sistema

Para entrar no admin(http://coopersystem.mob/wp-admin/) utilize as credenciais abaixo:

Usuário: admin
Senha: senhasecreta

Quando logar com as credenciais acima, no menu lateral, clique no menu: Anúncios.
![Tutorial1](https://github.com/johnk531/Desafio-Coopersystem-WordPress/blob/main/wp-content/uploads/2021/02/tutorial1.png)

Podemos perceber que possuí 3 sub-menus, Anúncios, que lista todos os anúncios, Adicionar Novo Anúncio, para adicionar um novo anúncio e Cliente, que foi a escolha de Tag, para organizar melhor os anúncios(trabalha como um dono do anúncio).

Dentro de Anúncios podemos realizar as 4 funções do CRUD.

![Tutorial2](https://github.com/johnk531/Desafio-Coopersystem-WordPress/blob/main/wp-content/uploads/2021/02/tutorial2.png)
![Tutorial3](https://github.com/johnk531/Desafio-Coopersystem-WordPress/blob/main/wp-content/uploads/2021/02/tutorial3.png)
![Tutorial4](https://github.com/johnk531/Desafio-Coopersystem-WordPress/blob/main/wp-content/uploads/2021/02/tutorial4.png)

Na aba clientes, podemos realizar, também as 4 operações do CRUD.

![Tutorial5](https://github.com/johnk531/Desafio-Coopersystem-WordPress/blob/main/wp-content/uploads/2021/02/tutorial5.png)
![Tutorial6](https://github.com/johnk531/Desafio-Coopersystem-WordPress/blob/main/wp-content/uploads/2021/02/tutorial6.png)