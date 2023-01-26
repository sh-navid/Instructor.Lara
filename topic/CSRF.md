# CSRF
- [Cross Site Request Forgery](https://owasp.org/www-community/attacks/csrf)
- [How to handle this in laravel?](https://laravel.com/docs/5.6/routing)
# Laravel + CSRF
- Make a route in `web.php` like this:
    ~~~php
    Route::get('/csrf', function () {
        return view("csrf");
    });
    ~~~
- Make a view `csrf.blade.php` like this:
    ~~~html
    <!DOCTYPE html>
    <html lang="en">
    <body>
        <h1>Form with CSRF token</h1>
        <form method="POST" action="/api/csrf-form">
            @csrf
            <input type="text" name="myText"/>
            <input type="submit"/>
        </form>
    </body>
    </html>
    ~~~
- Open this address in browser:
    - `http://127.0.0.1:8000/csrf`
- If you load this route and inspect the rendered view you can see a hidden input like this:
    ~~~html
    <input type="hidden" name="_token" value="PFIGvtmC13ExEs513knyNPGRyzz8Q3ACVhOVkEIQ">
    ~~~