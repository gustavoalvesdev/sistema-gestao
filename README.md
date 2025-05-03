# Sistema de Gestão

Bem-vindo(a) ao projeto **Sistema de Gestão** um projeto em desenvolvimento que visa criar um sistema de gerenciamento utilizando PHP e MySQL, baseado em uma estrutura MVC (Model-View-Controller) própria.

## Descrição

Este projeto está sendo desenvolvido como uma solução para gestão de dados, com foco em funcionalidades básicas de CRUD (Create, Read, Updte, Delete)  e organização modular. Ele utiliza tecnologias web amplamente conhecidas, como PHP para a lógica backend e MySQL para o gerenciamento de banc ode dados.

**Nota:** Este é um projeto em andamento, e novas funcionalidades estão sendo implementadas continuamente.

## Estrutura do Projeto

O sistema segue uma arquitetura MVC personalizada, organizada da seguinte forma:

- **assets/**: Arquivos estáticos como CSS, JavaScript e imagens.
- **controllers/**: Contém os controladores responsáveis pela lógica de negócios.
- **core/**: Arquivos principais da estrutura MVC.
- **models/**: Modelos que interagem com o banco de dados.
- **views/**: Arquivos de visualização para a interface do usuário.
- **.htaccess**: Configuração para reescrita de URLs.
- **config.php**: Configurações do sistema, como conexão com o banco de dados.
- **environment.php**: Definições de ambiente (desenvolvimento, produção, etc).
- **estoque.sql**: Script SQL para criação do banco de dados inicial.
- **index.php**: Ponto de entrada da aplicação.

## Pré-requisitos

Para executar este projeto localmente, você precisará de:

- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Servidor Web (ex: Apache)
- Composer (opcional, caso sejam adicionadas dependências externas no futuro)

## Instalação

1. **Clone o repositório:**
```bash
git clone https://github.com/gustavoalvesdev/sistema-gestao.git
```

2. **Configure o banco de dados:**
- Crie um banco de dados MySQL.
- Importe o arquivo `estoque.sql` para criar as tabelas iniciais:
```bash
mysql -u seu_usuario -p seu_banco < estoque.sql
```

3. **Configure o arquivo de conexão:**
- Edite o arquivo `config.php` com as credenciais do seu banco de dados:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'seu_usuario');
define('DB_PASS', 'sua_senha');
define('DB_NAME', 'seu_banco');
```

4. **Inicie o servidor:**
- Se estiver usando o PHP embutido:
```bash
php -s localhost:8000
```

- Ou configure um servidor Apache apontando para a pasta do projeto.

5. **Acesse a aplicação:**
- Abra seu navegador e vá para `https://localhost:8000`

## Contribuição

Este é um projeto em desenvolvimento, e contribuições são bem-vindas! Para contribuir:

1. Faça um fork deste repositório.
2. Crie uma branch para sua feature ou correção:
   ```bash
   git checkout -b minha-feature
   ```
3. Commit suas alterações:
   ```bash
   git commit -m "Descrição das alterações"
   ```
4. Envie para o repositório remoto:
   ```bash
   git push origin minha-feature
   ```
5. Abra um Pull Request.

## Status do Projeto

O projeto ainda está em desenvolvimento. Novas funcionalidades, melhorias na estrutura MVC e otimizações estão planejadas para as próximas atualizações.

## Licença

Este projeto é distribuído sob a licença MIT. Veja o arquivo `LICENSE` (a ser adicionado) para mais detalhes.

## Contato

Para dúvidas ou sugestões, entre em contato com o desenvolvedor:
- GitHub: [gustavoalvesdev](https://github.com/gustavoalvesdev)
- Limkedin: [Gustavo Alves da Silva](https://www.linkedin.com/in/gustavo-alves-programador/)

Obrigado por visitar este repositório!