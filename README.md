# Client Register Blade 💼

Este é um projeto de registro de clientes desenvolvido com o poderoso framework PHP Laravel, utilizando o Laravel Sail para um ambiente de desenvolvimento simplificado com Docker e estilizado com o elegante Tailwind CSS.

## 🚀 Pré-requisitos

Antes de começar, você precisa ter o seguinte software instalado na sua máquina:

- Docker: 🐳 Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.
- Composer: 🎼 Tenha o Composer instalado globalmente.
- WSL ou Linux

## 🛠️ Instalação

Siga estas etapas para configurar o projeto localmente:

1. Clone o repositório:

bash git clone https://github.com/Tiagokochem/Client-Register-Blade.git


2. Acesse o diretório do projeto:

bash cd Client-Register-Blade/exemple-app


3. Inicie os containers Docker:

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs


4. Gere a chave da aplicação:

bash ./vendor/bin/sail artisan key:generate


5. Execute as migrações do banco de dados:

bash ./vendor/bin/sail artisan migrate


6. Execute o Seeder para popular o banco de dados com dados de exemplo:

bash ./vendor/bin/sail artisan db:seed


7. Compile os assets do Tailwind CSS (se estiver usando):

bash ./vendor/bin/sail npm install ./vendor/bin/sail npm run dev


## 🧑‍💻 Utilização

Após a instalação, você pode acessar a aplicação abrindo o seu navegador e acessando `http://localhost`.

Com esta aplicação, você pode gerenciar seus clientes facilmente e intuitivamente, criando, editando e excluindo registros de clientes conforme necessário.

## 📂 Estrutura do Projeto

O projeto segue uma estrutura padrão do Laravel, incluindo:

- `app`: Contém a lógica principal da aplicação (modelos, controladores, etc.).
- `database`: Armazena as migrações e seeds do banco de dados.
- `resources`: Contém as views, assets e arquivos de linguagem.
- `routes`: Define as rotas da aplicação.
- `docker-compose.yml`: Arquivo de configuração do Laravel Sail.

## 💻 Tecnologias Utilizadas

- Laravel: Framework PHP para desenvolvimento web.
- Laravel Sail: Ferramenta para desenvolvimento local com Docker.
- Tailwind CSS: Framework CSS para estilização rápida e responsiva.
- MySQL: Sistema de gerenciamento de banco de dados.

## 🙌 Contribuição

Contribuições são bem-vindas Se você encontrar algum problema ou tiver alguma sugestão, sinta-se à vontade para abrir uma issue ou enviar um pull request.

## 📄 Licença

Este projeto está licenciado sob a licença MIT. Para mais detalhes, consulte o arquivo `LICENSE`.