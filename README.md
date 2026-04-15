<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




🐦 Twirper

Microblog desenvolvido com Laravel durante o estudo do Laravel Bootcamp (Chirper).

A ideia do projeto é simples: permitir que usuários publiquem pequenos textos (twirps), com autenticação e controle de acesso.

🚀 Tecnologias utilizadas
PHP
Laravel 13
Blade
Tailwind CSS
DaisyUI
SQLite
🧠 Como o projeto funciona

O projeto segue o padrão MVC (Model - View - Controller), que organiza bem a aplicação e evita bagunça no código.

Model → faz a comunicação com o banco de dados

É tipo a “cozinha”, onde os dados são preparados e manipulados

View → responsável pelo que o usuário vê

Interface, layout e exibição das informações

Controller → controla o fluxo da aplicação

Recebe as requisições, processa e envia os dados certos para a View

🗄️ Banco de dados

O Laravel usa o Eloquent ORM, que facilita muito trabalhar com banco sem precisar escrever SQL direto.

Algumas ideias importantes usadas no projeto:

Models conectam automaticamente com suas tabelas
Relacionamentos entre entidades (User → Twirps)
Criação e manipulação de dados via código
Testes e manipulação manual usando o terminal

Ferramentas úteis:

php artisan tinker → testar código e mexer no banco direto
Seeders → popular o banco para testes
Ferramentas externas de banco (qualquer GUI de SQLite, por exemplo)
🔐 Autenticação e autorização

O sistema tem autenticação completa:

Registro de usuário
Login
Logout

E também controle de acesso:

Usuários só podem editar/deletar seus próprios posts
Uso de Policies para definir permissões
Proteção de rotas com middleware
⚙️ Funcionalidades
Criar twirps
Listar twirps (feed público)
Editar twirps
Deletar twirps
Cadastro de usuário
Login e logout
🧭 Rotas principais
/ → feed público
/login → login
/register → cadastro
/logout → logout

Rotas protegidas garantem que apenas usuários autenticados acessem certas ações.

🎨 Frontend
Tailwind CSS para estilização
DaisyUI para componentes prontos
Layout usando flexbox
Customização com gradientes e estilos próprios
🧩 Estrutura e organização
Uso de controllers tradicionais e também invokable controllers
Separação clara de responsabilidades
Código organizado seguindo o padrão do Laravel
📚 O que foi aprendido

Durante o desenvolvimento do projeto:

Estrutura geral do Laravel
Uso do Eloquent ORM na prática
Relacionamento entre models
Sistema de autenticação
Autorização com policies
Organização com MVC
Integração entre backend (Laravel) e frontend (Blade + Tailwind)
Uso de ferramentas do próprio Laravel para debug e testes
👨‍💻 Autor

Gustavo Nicácio - Com utilização de ia para embelezamento textual
Projeto de estudo com Laravel — 2026 
