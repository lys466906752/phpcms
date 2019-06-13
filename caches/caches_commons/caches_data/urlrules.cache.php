<?php
return array (
  1 => '{$catdir}/index.html|{$catdir}/{$page}.html',
  6 => 'index.php?m=content&c=index&a=lists&catid={$catid}|index.php?m=content&c=index&a=lists&catid={$catid}&page={$page}',
  11 => '{$catdir}/{$year}{$month}{$day}{$id}.html|{$catdir}/{$year}{$month}{$day}/{$id}_{$page}.html',
  12 => '{$categorydir}{$catdir}/{$year}/{$month}{$day}/{$id}.html|{$categorydir}{$catdir}/{$year}/{$month}{$day}/{$id}_{$page}.html',
  16 => 'index.php?m=content&c=index&a=show&catid={$catid}&id={$id}|index.php?m=content&c=index&a=show&catid={$catid}&id={$id}&page={$page}',
  17 => 'show-{$catid}-{$id}-{$page}.html',
  18 => 'content-{$catid}-{$id}-{$page}.html',
  30 => 'list-{$catid}-{$page}.html',
  32 => 'content-{$year}-{$id}-{$page}.php ',
  35 => 'tags-{$tag}-{$page}.html',
  36 => 'jmzn/{$catdir}/index.html|jmzn/{$catdir}/{$page}.html',
);
?>