<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Login</title>
</head>

<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        color: white;
    }

    body {
        background-image: url(assets/Image/background.jpg);
        background-position: center;
        background-size: cover;
    }

    section {
        min-height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        height: 350px;
        width: 300px;
        display: flex;
        padding: 50px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 0px auto;
        border: 2px solid rgb(255, 255, 255);
        border-radius: 30px;
        backdrop-filter: blur(15px);
    }

    .container h1 {
        font-weight: 700;
        margin: 20px;
    }

    .input-box {
        position: relative;
        width: 100%;
        margin: 20px 0px;
        padding: 10px 35px 0px 5px;
        border-bottom: 2px solid;
    }

    .input-box label {
        position: absolute;
        top: 50%;
        left: 5px;
        font-size: 1em;
        transition: .5s;
        z-index: -2;
    }

    .input {
        width: 100%;
        height: 40px;
        border: none;
        outline: none;
        font-size: 1em;
        background-color: transparent
    }

    .input:focus~label,
    .input:valid~label,
    .input:hover~label {
        top: -5px;
        font-size: 1em;
        color: rgb(255, 255, 255);
    }

    .input-box span {
        position: absolute;
        top: 25px;
        right: 0px;
        font-size: 1.4em;
    }

    .login {
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 1em;
        background-color: transparent;
        margin-top: 40px;
    }

    .forget {
        width: 100%;
        display: flex;
        justify-content: end;
        font-size: .8em;
        margin: -10px -40px 0px 0px;
    }

    .forget a {
        text-decoration: none;
    }
</style>

<body>
    <section>
        <div class="form-value">
            <form action="">
                <div class="container">
                    <h1>Login</h1>
                    <div class="input-box">


                        <span class="material-symbols-outlined">
                            mail
                        </span>
                        <input class="input" type="text" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box">


                        <span class="material-symbols-outlined">
                            visibility
                        </span>
                        <input class="input" type="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="forget">
                        <p><a href="">Forgot Password?</a></p>
                    </div>
                    <button class="login"><a href="dashboard.html">Login</a></button>
                </div>
            </form>
        </div>

    </section>

</body>

</html>