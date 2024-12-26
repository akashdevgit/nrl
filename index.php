<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAX LOGIN</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <div class="hero"></div>
    <div style="text-align: center; padding: 15px;">
        <h1>KAX NUCLEAR</h1>
    </div>
    <div class="logincontainer" style="text-align: center;">
        <form action="php/auth.php" method="post">
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var form = document.querySelector('form');
                form.addEventListener('keypress', function(event) {
                    if (event.key === 'Enter') {
                        form.submit();
                    }
                });
            });
            </script>
            <div class="userinput">
                <label for="username">Username: </label>
                <input name="username" type="text" id="username" style="background-color: black; border: 1px solid rgb(26, 210, 26); font-family: ldm; color: rgb(26, 210, 26); width: 120px; padding: 3px;">
            </div>
            <div class="userpass">
                <label for="password">Password: </label>
                <input name="password" type="password" id="password" style="background-color: black; border: 1px solid rgb(26, 210, 26); font-family: ldm; color: rgb(26, 210, 26); width: 120px; padding: 3px;">
            </div>
        </form>
    </div>
    <div class="nuclearfacts" style="text-align: center;">
        <div class="header" style="padding-bottom: 10px;">
            <h4>Nuclear Nexus</h4>
        </div>
        <div class="nexus">
            <ul>
                
                
            <li><a href="https://disarmament.unoda.org/wmd/nuclear/npt/">NPT</a></li><li><a href="https://disarmament.unoda.org/wmd/nuclear/tpnw/">TPNW</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Chernobyl_disaster">Chernobyl Disaster</a></li></ul>
    </div>
</body>
</html>