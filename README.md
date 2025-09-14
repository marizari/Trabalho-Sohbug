# Projeto Laravel - Gestão de Produtos - Noameado de SohBug



1. **Configuração do Ambiente**
   - [ ] Instalar o PHP (>=8.1), Composer e MySQL.
   - [ ] Criar um novo projeto Laravel (`laravel new` ou `composer create-project laravel/laravel`).
   - [ ] Configurar o banco de dados no arquivo `.env`.

2. **Model, Migration e Seeder**
   - [ ] Criar a **Migration** para a tabela `products` com colunas:  
     `id`, `name`, `description`, `price`, `stock`, `created_at`, `updated_at`.
   - [ ] Criar a **Model** `Product`.
   - [ ] Criar um **Seeder** para popular a tabela com dados de exemplo.

3. **Controller e Rotas**
   - [ ] Criar a **Controller** `ProductController`.
   - [ ] Definir as rotas em `routes/web.php`:  
     - `/products` → listar produtos  
     - `/products/{id}` → visualizar detalhes do produto

4. **Views**
   - [ ] Criar a view `products/index.blade.php` para listar todos os produtos.
   - [ ] Criar a view `products/show.blade.php` para exibir detalhes de um produto.
   - [ ] Utilizar um layout simples com Bootstrap para estilização.

5. **Testes e Ajustes**
   - [ ] Rodar as migrations e seeders.
   - [ ] Testar listagem de produtos.
   - [ ] Testar exibição de detalhes de produto.
   - [ ] Revisar se as convenções do Laravel estão sendo seguidas.

   - Todos passos concluídos c/ sucesso

---

## Como Rodar o Projeto

1. Clone o repositório ou copie os arquivos para sua máquina:
   ```bash
   git clone <url-do-repositorio>
   cd SohBug\laravel\listProducts

   2. Instale as dependências do Laravel:

    composer install

    Copie o arquivo .env.example para .env e configure o banco de dados:

    cp .env.example .env
    php artisan key:generate
    Crie o banco de dados no MySQL (exemplo: laravel_products).

    Execute as migrations e seeders:


    php artisan migrate --seed
    Inicie o servidor de desenvolvimento:

    php artisan serve
    Acesse no navegador:

  
    http://localhost:8000/products

     Informações
    Disciplina: Frameworks de Desenvolvimento PHP

    Professor: Alex Morgado Pereira

    Curso: Tecnologia em Sistemas para Internet – Faculdade Alfa Umuarama

    Aluno(a): Maria Eduarda Pacheco Delazari



