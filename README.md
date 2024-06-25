# Meu Projeto Laravel 💼

Este é um projeto desenvolvido com o framework PHP Laravel, utilizando o Laravel Sail para um ambiente de desenvolvimento simplificado com Docker. Este guia assume que você já possui o Docker e o Docker Compose instalados em sua máquina.

## 🚀 Pré-requisitos

Antes de começar, você precisa ter o seguinte software instalado na sua máquina:

- Docker: 🐳 Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.
- Composer: 🎼 Tenha o Composer instalado globalmente.

## 🛠️ Instalação

### Clone Repositório

Primeiro, clone o repositório para o seu ambiente local:

bash git clone -b main https://github.com/Tiagokochem/Client-Register-Blade 


### Crie o Arquivo `.env`

Copie o arquivo `.env.example` para criar seu próprio arquivo `.env`:

bash cp.env.example.env


### Suba os Containers do Projeto

Inicie os containers Docker necessários para o projeto:

bash docker compose up -d


### Acesse o Container App

Para trabalhar dentro do container do aplicativo, execute:

bash docker compose exec app bash


### Instale as Dependências do Projeto

Dentro do container, instale as dependências do projeto:

bash composer install composer update


### Gere a Key do Projeto Laravel

Gere uma nova chave para o projeto Laravel:

bash php artisan key:generate


### Rodar as Migrations

Execute as migrations para criar as tabelas necessárias no banco de dados:

bash php artisan migrate


### Seed o Banco de Dados

Execute os seeders para popular o banco de dados com dados de exemplo:

bash php artisan db:seed


### Acesse o Projeto

Acesse o projeto em `http://localhost`. 

### Compilar Assets

Se o projeto utilizar Tailwind CSS ou outras bibliotecas de frontend, compile os assets:

bash npm run dev


## 🧑‍💻 Utilização

Após seguir esses passos, você terá o projeto pronto para uso. Explore as funcionalidades disponíveis para aproveitar ao máximo o seu aplicativo.

## 🙌 Contribuição

Contribuições são bem-vindas Sinta-se à vontade para abrir uma issue ou enviar um pull request com suas sugestões ou correções.

## 📄 Licença

Este projeto está licenciado sob a licença MIT. Consulte o arquivo `LICENSE` para mais detalhes.

![Screenshot_1](https://github.com/Tiagokochem/Client-Register-Blade/assets/57450432/a371a7e5-aa67-4b05-b307-c7b83a3c883d)

![Screenshot_2](https://github.com/Tiagokochem/Client-Register-Blade/assets/57450432/0a04fa2e-3999-48d3-9695-61d00686b92f)

