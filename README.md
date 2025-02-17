# Projeto CRUD de Gerenciamento de Produtos

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

Este projeto é um sistema de gerenciamento de produtos desenvolvido utilizando o framework Laravel. O objetivo é criar uma plataforma para gerenciar produtos, permitindo que os usuários visualizem, criem, editem e excluam produtos.

## Funcionalidades

- Listagem de produtos
- Criação de novos produtos
- Edição de produtos existentes
- Exclusão de produtos
- Visualização de detalhes de cada produto

## Tecnologias Utilizadas

- Laravel (Framework PHP)
- Blade (Template Engine)
- HTML, CSS e JavaScript (Front-end)
- MySQL (Banco de Dados)

## Instalação

1. Clone o repositório para o seu diretório local:
   ```sh
   git clone https://github.com/seu-usuario/seu-repositorio.git
   ```
2. Acesse o diretório do projeto:
   ```sh
   cd seu-repositorio
   ```
3. Instale as dependências do projeto:
   ```sh
   composer install
   ```
4. Configure o ambiente criando um arquivo `.env` com base no `.env.example` e configure as credenciais do banco de dados.
5. Gere a chave da aplicação:
   ```sh
   php artisan key:generate
   ```
6. Execute as migrações para criar as tabelas no banco de dados:
   ```sh
   php artisan migrate
   ```
7. Inicie o servidor de desenvolvimento:
   ```sh
   php artisan serve
   ```

## Uso

1. Acesse o endereço `http://localhost:8000` no seu navegador.
2. Clique no botão **"Novo"** para criar um novo produto.
3. Preencha os campos com as informações do produto e clique em **"Salvar"**.
4. Para editar um produto, clique no link **"Editar"** na lista de produtos.
5. Para excluir um produto, clique no link **"Excluir"** na lista de produtos.

## Contribuição

Se você deseja contribuir para o projeto, siga os passos abaixo:

1. Faça um **fork** do repositório.
2. Crie uma **branch** para sua feature:
   ```sh
   git checkout -b minha-feature
   ```
3. Faça commit das suas alterações:
   ```sh
   git commit -m "Adiciona nova funcionalidade"
   ```
4. Envie para o repositório remoto:
   ```sh
   git push origin minha-feature
   ```
5. Abra um **Pull Request**.

## Licença

Este projeto é licenciado sob a licença MIT.
