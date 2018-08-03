<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('style.css') ?>
    
</head>
<body>
    <section class="container">
        <?= $this->fetch('content') ?>
        <div id="root"></div>
        <script type="text/javascript" src="/js/bundle.js?_=<?= time() ?>"></script>
    </section>
</body>
</html>