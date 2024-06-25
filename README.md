
Client Register Blade 💼
Este é um projeto de registro de clientes desenvolvido com o poderoso framework PHP Laravel, utilizando o Laravel Sail para um ambiente de desenvolvimento simplificado com Docker e Sistema de login do Breeze.

🚀 Pré-requisitos
Docker: 🐳 Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.
Composer: 🎼 Tenha o Composer instalado globalmente.
🛠️ Instalação
Clone o repositório:


git clone https://github.com/Tiagokochem/Client-Register-Blade.git


Acesse o diretório do projeto:


cd Client-Register-Blade/exemple-app


Inicie o Laravel Sail:


./vendor/bin/sail up


Instale as dependências do projeto:


./vendor/bin/sail composer install



Execute as migrações do banco de dados:


./vendor/bin/sail artisan migrate


Compile os assets do Tailwind CSS:


./vendor/bin/sail npm install
./vendor/bin/sail npm run dev


🧑‍💻 Utilização

Acesse a aplicação: Abra o seu navegador e acesse http://localhost.

Gerencie seus clientes: 👤 Crie, edite e exclua clientes de forma fácil e intuitiva.

📂 Estrutura do Projeto

app: 🧠 Contém a lógica principal da aplicação (modelos, controladores, etc.).

database: 🗃️ Armazena as migrações e seeds do banco de dados.

resources: 🎨 Contém as views, assets e arquivos de linguagem.

routes: 🗺️ Define as rotas da aplicação.

docker-compose.yml: ⚙️ Arquivo de configuração do Laravel Sail.

💻 Tecnologias Utilizadas
Laravel: ✨ Framework PHP para desenvolvimento web.
Laravel Sail: ⛵ Ferramenta para desenvolvimento local com Docker.
Tailwind CSS: 🎨 Framework CSS para estilização rápida e responsiva.
MySQL: 🗃️ Sistema de gerenciamento de banco de dados.
Laravel Breeze: Sistema de login

🙌 Contribuição
Sinta-se à vontade para contribuir com o projeto! 🤝 Abra uma issue ou envie um pull request com suas sugestões ou correções.

