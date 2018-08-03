<h1>Qiita Ranking</h1>

<ul>
  <?php foreach ($posts as $post) : ?>
    <li><?= h($post->title); ?></li>
  <?php endforeach; ?>
</ul>

<?php for($i=1;$i<10;$i++) : ?>
  <div>
    <div>タイトルですよ</div>
    <div>ランキングは<?=$i?></div>
  </div>
<?php endfor; ?>


