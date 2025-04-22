<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content={$page_description|default:"Domyślny Opis"}>
    <title>Kalkulator Kredytowy &ndash; Oblicz swoje raty kredytu</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #0066cc;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 1.8em;
        }

        nav {
            background-color: #005bb5;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .banner {
            background-color: #e3f2fd;
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .banner h1 {
            margin: 0;
            font-size: 2em;
            color: #004080;
        }

        .info-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-box {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .info-box h3 {
            margin-top: 0;
            color: #00509e;
        }

        footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        footer a {
            color: #ffcc00;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>{$page_title|default:"Domyślny Tytuł"}</h1>
    </header>

    <nav>
        <a href="#">Strona Główna</a>
        <a href="#" class="current">Kalkulator</a>
        <a href="#">Kontakt</a>
    </nav>

    <div class="banner">
        <h1>{$page_header|default:"Domyślny Nagłówek"}</h1>
    </div>

    <div class="container">
        <div class="info-section">
            <div class="info-box">
                <h3>Jak działa kalkulator?</h3>
                <p>
                    Nasz kalkulator kredytowy pozwala na wprowadzenie kwoty kredytu, oprocentowania i okresu spłaty, aby łatwo obliczyć miesięczne raty. Pomaga to zrozumieć całkowity koszt pożyczki i wybrać najlepszą opcję kredytową.
                </p>
            </div>
            <div class="info-box">
                <h3>Dlaczego warto korzystać z kalkulatora kredytowego?</h3>
                <p>
                    Kalkulator kredytowy upraszcza proces podejmowania decyzji o kredycie. Niezależnie od tego, czy szukasz kredytu osobistego, hipotecznego, czy firmowego, kalkulator pokaże Ci dokładnie, ile zapłacisz co miesiąc. Pomaga wybrać kredyt dostosowany do Twojego budżetu.
                </p>
            </div>
        </div>

        <div class="content-wrapper">
            <div id="app_content" class="content">
                {block name=content} Domyślna treść zawartości .... {/block}
            </div>
        </div>
    </div>

    <footer>
        <p>
            <a href="#">Wypróbuj nasz kalkulator kredytowy</a> i uzyskaj dokładny szacunkowy koszt rat kredytowych. Nie wymaga karty kredytowej.
        </p>
    </footer>

</body>
</html>
