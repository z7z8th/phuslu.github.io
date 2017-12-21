<?php
$data = file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=zh-cn');
$info = json_decode($data, true);
$url = 'https://s.cn.bing.com' . $info['images'][0]['urlbase'] . '_1920x1080.jpg';
$title = preg_replace('/\s*\(.+?\)$/', '', $info['images'][0]['copyright']);
if (!strstr($title, '今日'))
    $title = '【今日壁纸】' . $title;
?>
<!DOCTYPE html>
<title>首页 - 今日壁纸</title>
<style>
body {
    margin: 0;
    font-family: "Helvetica Neue", "Luxi Sans", "DejaVu Sans", Tahoma, "Hiragino Sans GB", "Microsoft Yahei", sans-serif;
}

.container {
    position: relative;
    margin: 0 auto;
}

.container img {
    vertical-align: middle;
    width: 100%;
    height: 100%;
}

.container .content {
    position: absolute;
    top: 0;
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: #f1f1f1;
    width: 100%;
    padding: 0px;
}
</style>

<div class="container">
  <div class="content"><p><?php echo $title;?></p></div>
  <img src="<?php echo $url;?>" />
</div>

