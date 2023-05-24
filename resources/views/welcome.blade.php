<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <section id="hero">
        <div class="hero container">
            <div>
                <h1>Selamat Datang Di<span></span></h1>
                <h1>Agenda Of <span></span></h1>
                <h1>SKIELL <span></span></h1>
                <a href="{{ url('/loginadmin') }}" type="button" class="cta" >Admin</a>
                <a href="{{ url('/loginguru') }}" type="button" class="cta" >Guru</a>
            </div>
        </div>

    </section>

</body>
</html>