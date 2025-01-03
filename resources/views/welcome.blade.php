<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me - Programmer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Reset basic styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f8f9fa;
        color: #212529;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        max-width: 1200px;
    }

    .intro .container {
        display: flex;
    }

    header {
        background: #007bff;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 2.5rem;
    }

    section {
        padding: 40px 0;
    }

    .intro {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .photo img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 4px solid #007bff;
    }

    .bio {
        max-width: 800px;
        padding-left: 20px;
    }

    .bio h2 {
        font-size: 2rem;
        color: #007bff;
    }

    .bio p {
        margin: 15px 0;
        font-size: 1.1rem;
    }

    .skills {
        height: 765px;
    }

    .skills ul {
        list-style-type: none;
        padding-left: 0;
    }

    .skills ul li {
        background-color: #4d586e;
        color: white;
        padding: 10px;
        margin: 5px 0;
        border-radius: 5px;
        font-size: 1.1rem;
    }

    footer {
        background: #007bff;
        color: white;
        padding: 20px;
        text-align: center;
    }

    footer a {
        color: #fff;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }
</style>

<body>

    <header>
        <div class="container">
            <h1>About Me</h1>
        </div>
    </header>

    <section class="intro">
        <div class="container">
            <div class="photo">
                <img src="{{ asset('/img/avatar.png') }}" alt="description of Huynd">
            </div>
            <div class="bio">
                <h2>Hi, I'm Huy</h2>
                <p>A focused and diligent PHP full stack developer of over a year with working experience with many
                    customers in England and Australia.</p>
                <p>I have experience in website development, database design, MySQL and PHP framework (Codeigniter,
                    Slim, Laravel).</p>
                <p>Experience in common third-party APIs, RESTful API and have knowledge with OOP, Linux. Passionate
                    about giving best design, following coding practices and good at communication.</p>
            </div>
        </div>
    </section>

    <section class="skills">
        <div class="container">
            <h3>Skills & Technologies</h3>
            <ul>
                <li>PHP</li>
                <li>Laravel</li>
                <li>JavaScript</li>
                <li>HTML & CSS</li>
                <li>MySQL</li>
                <li>Git</li>
                <li>REST APIs</li>
                <li>Docker</li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>Feel free to connect with me on <a href="https://www.linkedin.com/in/huy-nguyen-78b2911b9/"
                    target="_blank">LinkedIn</a>.</p>
        </div>
    </footer>

</body>

</html>
