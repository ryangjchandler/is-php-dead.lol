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
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="RTJJMHSM" defer></script>
        <!-- / Fathom -->
    <?php endif; ?>

    <link rel="stylesheet" href="<?= env('APP_URL') ?>/css/app.css">
</head>
<body class="antialiased bg-black font-sans w-screen h-screen flex flex-col">
    <h2 class="text-gray-500 my-4 text-center">
        is-php-dead.lol
    </h2>

    <div class="w-full md:w-2/3 lg:w-1/2 mx-auto mt-4">
        <a href="<?= base64_decode('aHR0cHM6Ly90d2l0dGVyLmNvbS90YXlsb3JvdHdlbGwvc3RhdHVzLzc4ODc5NDc4NDkzMjU2NDk5Mg==') ?>" target="_blank" rel="noopener">
            <img src="/images/php-is-not-dead.jpg" alt="Taylor Otwell and Adam Wathan with Taylor's McLaren">
        </a>
    </div>

    <main class="flex-1 flex items-center justify-center">
        <p class="text-white text-5xl font-bold">
            <?= 'No.' ?>
        </p>
    </main>

    <footer class="text-gray-500 text-sm px-6 py-4 flex items-center justify-between">
        <a href="https://twitter.com/ryangjchandler" class="hover:underline hover:text-gray-100" target="_blank">
            Ryan Chandler
        </a>

        <a href="https://github.com/ryangjchandler/is-php-dead.lol" target="_blank">
            GitHub
        </a>
    </footer>
</body>
</html>