<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is PHP dead?</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🐘</text></svg>">
    <meta name="title" content="Is PHP dead?">
    <meta name="description" content="The definitive answer to an age-old question.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= env('APP_URL') ?>">
    <meta property="og:title" content="Is PHP dead?">
    <meta property="og:description" content="The definitive answer to an age-old question.">
    <meta property="og:image" content="<?= env('APP_URL') ?>/og.png">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= env('APP_URL') ?>">
    <meta property="twitter:title" content="Is PHP dead?">
    <meta property="twitter:description" content="The definitive answer to an age-old question.">
    <meta property="twitter:image" content="<?= env('APP_URL') ?>/og.png">

    <?php if (production()): ?>
        <script src="https://cdn.usefathom.com/script.js" data-site="RTJJMHSM" defer></script>
    <?php endif; ?>

    <style><?= file_get_contents("./css/app.css") ?></style>
</head>
<body>
    <h1>is-php-dead.lol</h1>
    <main>
        <p><?= 'No.' ?></p>
    </main>
    <footer>
        <a href="https://twitter.com/ryangjchandler" target="_blank" rel="noopener noreferrer">
            Ryan Chandler
        </a>
        <a href="https://github.com/ryangjchandler/is-php-dead.lol" target="_blank" rel="noopener noreferrer">
            GitHub
        </a>
    </footer>
</body>
</html>
