<?php
$data = file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
$info = json_decode($data, true);
$url = 'https://s.cn.bing.com' . $info['images'][0]['urlbase'] . '_1920x1080.jpg';
$title = preg_replace('/\s*\(.+?\)$/', '', $info['images'][0]['copyright']);
?>

<title>今日壁纸 - <?php echo $title;?></title>
<style>img[title]:hover:after { content: attr(title); padding: 10px; background-color: white; position: absolute; }</style>
<img height='98%' width='100%' src='<?php echo $url;?>' title='<?php echo $title;?>'>

