<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav>
        <div class="py-4 bg-black ">
        <div class="flex flex-row px-16 justify-between items-center">
            <div>
                <h2 class="text-2xl text-white font-sans font-semibold">Test View</h2>
                </div>
                <div class="text-white font-sans font-semibold flex flex-row gap-16">
                    <a class="transition duration-300 ease-in-out hover:text-slate-400" href="/">Home</a>
                    <a class="transition duration-300 ease-in-out hover:text-slate-400" href="/pages/about">About</a>
                    <a class="transition duration-300 ease-in-out hover:text-slate-400" href="/pages/contact">Contact</a>
                </div>
        </div>
        </div>
    </nav>

    