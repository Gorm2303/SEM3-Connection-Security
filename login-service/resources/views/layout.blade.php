<!doctype html>

    <title>Connection security</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/style.css">

<body>
    <?php if (auth()->check()): ?>
        <?php echo "You are logged in as ". auth()->user()->name; ?>
        <form method="POST" action="<?php echo route('logout')?>">
            <?php echo csrf_field(); ?>
            <input type="submit" value="Log Out">
        </form>
    <?php endif; ?>

    @yield('content')
</body>
