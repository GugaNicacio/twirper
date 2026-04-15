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










----professor , não sei fazer documentação então mandei minhas anotações e erros que tive ajuda de ia e dos manos enzogiuliano e arthuroliveira, mandei pro gpt e pedi pra ele fzer não sei se ta certo----- perdão qualquer coisa 






# Twirper - Laravel Project

Projeto de microblog desenvolvido com Laravel durante o estudo do Laravel Bootcamp (Chirper).

---

## Tecnologias

- PHP
- Laravel 13
- Blade
- Tailwind CSS
- DaisyUI
- SQLite

---

## Arquitetura

O projeto segue o padrão MVC:

- Model: responsável pela comunicação com o banco de dados  
- View: responsável pela interface do usuário  
- Controller: controla o fluxo entre Model e View  

---

## Banco de Dados

Uso do Eloquent ORM para manipulação dos dados.

Principais conceitos utilizados:

- Models associadas automaticamente às tabelas  
- Relacionamentos (User → Twirps)  
- Criação e manipulação de dados via código  
- Uso do Tinker para testes  

Exemplo:

```php
$user = User::create([
    'name' => 'teste',
    'email' => 'teste@email.com',
    'password' => bcrypt('123')
]);

$user->twirps()->create([
    'message' => 'Teste'
]);
Funcionalidades
Listagem de posts (twirps)
Criação de posts
Edição de posts
Exclusão de posts
Registro de usuário
Login
Logout
Autenticação

Uso de:

Middleware auth → rotas protegidas
Middleware guest → acesso apenas para não logados
Authorization

Uso de Policies para controle de acesso.

Exemplo:

public function update(User $user, Twirp $twirp)
{
    return $user->id === $twirp->user_id;
}

Uso no Blade:

@can('update', $twirp)
Controllers

Uso de controllers padrão e invokable controllers.

Rotas
/ → pública (feed)
/login → login
/register → cadastro
/logout → logout

Rotas protegidas com middleware auth.

Frontend
Tailwind CSS para estilização
DaisyUI para componentes
Layout com flexbox
Uso de gradiente e background customizado
Ferramentas
php artisan tinker
seeders para teste
debug de erros do Laravel
Problemas resolvidos
erro de collection vs model
policy não registrada
erro de rota não definida
erro de autenticação
problemas de layout com Tailwind
Aprendizados
Estrutura do Laravel
Uso do Eloquent ORM
Autenticação e autorização
Organização com MVC
Debug de erros reais
Integração frontend com Blade
Autor

Gustavo Nicácio
Projeto de estudo com Laravel
2026


---

Agora sim: **README limpo, completo e pronto pra GitHub** 👍  
Se quiser, depois a gente deixa ele nível portfólio (com prints e deploy) 🚀