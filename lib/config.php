<?
$sqlite_path = __DIR__."/../data/cash.sqlite";
$site_name = 'Домашняя бухгалтерия';
$life_time = 1800; //после 1800 секунд бездействия соединение рвется
$add = '';

if(strpos($_SERVER['HTTP_HOST'], 'cash.skahin.ru') !== false) {
  $add = '<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter15673252 = new Ya.Metrika({id:15673252, accurateTrackBounce:true, trackHash:true, ut:"noindex"}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/15673252?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->';
}
?>