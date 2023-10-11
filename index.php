<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login-page.css">
    <script src="./js/send-data.js" defer></script>
    <title>E-commerce</title>
</head>
<body>
    <main class="main">
        <section class="section register">
            <hedaer class="header">
                <h1>REJESTRACJA</h1>
            </hedaer>
            <div class="form-section">
                <form action="#" method="#" class="register-form form">
                    <input type="text" name="imie" class="input" placeholder="Imie">
                    <input type="text" name="nazwisko" class="input" placeholder="Nazwisko">
                    <input type="email" name="email" class="input" placeholder="Email">
                    <input type="password" name="haslo" class="input" placeholder="Hasło">
                    <div class="show-passwd-section">
                        <div class="show-passwd-btn">
                            Pokaż hasło: <input type="checkbox" name="show-passwd" class="input check-haslo">
                        </div>
                    </div>  
                    <button type="submit" class="btn rejestruj">Zarejestruj</button>
                </form>
            </div>
        </section>
        <section class="section login">
            <header class="header">
                <h1>LOGOWANIE</h1>
            </header>
            <div class="form-section">
                <form action="#" method="#" class="login-form form">
                    <input type="email" name="email" class="input" placeholder="Email">
                    <input type="password" name="haslo" class="input" placeholder="Hasło">
                    <div class="show-passwd-section">
                        <div class="show-passwd-btn">
                            Pokaż hasło: <input type="checkbox" name="show-passwd" class="input check-haslo">
                        </div>
                    </div>
                    <button type="submit" class="btn logowanie">Zaloguj</button>
                </form>
            </div>
        </section>
    </main>  

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>