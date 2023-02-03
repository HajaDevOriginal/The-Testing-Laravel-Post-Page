<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Test By HajaDev</title>
</head>
<style>
    body{
        font-family: sans-serif;
    }
</style>
<body>
    @auth
    <p>Your Are Successfully Logged in.</p>
    <form action="/logout" method="post">
        @csrf
    <button>Logout</button>
    </form>

    <br><br>

    <div style="border: 3px solid #000">
    <h2>Create A New Post</h2>
    <form action="/create-post" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Enter Your Title"><br><br>
        <textarea name="body" placeholder="Enter Your Post Content"></textarea><br><br>
        <button>Post</button>
        <br><br>
    </form>
    </div>
    <br><br>

    <div>
    <h2>Posts</h2>
    @foreach ($posts as $post)
    <div style="padding: 10px; background:#afafaf; font-family:sans-serif; border-radius:10px; margin:10px;" >
    <h3>{{$post['title']}}</h3>
        {{$post['body']}}
        <br><br>
    </div>
    @endforeach
    </div>

    @else
    <div style="border: 3px solid #000">
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name">
        <input type="email" name="email" placeholder="Enter Your Email">
        <input type="password" name="password" placeholder="Enter Your Password">
        <button>Register</button>
        <br><br><br>
    </form>
    </div>
    <br><br>
    <div style="border: 3px solid #000">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="login-name" placeholder="Enter Your Name">
            <input type="password" name="login-password" placeholder="Enter Your Password">
            <button>Login</button>
            <br><br><br>
        </form>
        </div>
    @endauth
</body>
</html>