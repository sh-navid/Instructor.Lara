<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Form with CSRF token</h1>
    <form method="POST" action="/profile">
        @csrf
        <input type="text" name="myText"/>
        <input type="submit"/>
    </form>
</body>
</html>