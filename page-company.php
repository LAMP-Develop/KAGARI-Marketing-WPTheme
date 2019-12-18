<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>
<section id="company-mv" class="sub-mv">
<div class="wrap txt-c">
<h2>company</h2>
<p class="m-0">会社紹介</p>
</div>
</section>
<?php get_template_part('breadcrumb'); ?>
<section id="company-profile" class="sec">
<div class="wrap">
<div class="table-wrap">
<table>
<tbody>
<tr>
<th>社名</th>
<td>株式会社ランプ</td>
</tr>
<tr>
<th>所在地</th>
<td>
〒604-8136<br>
京都府京都市中京区三条通烏丸東入梅忠町24-1 加藤ビル2F
<div class="mb10">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13071.708712649783!2d135.760749!3d35.008528!3m2!1i1024!2i768!4f50!3m3!1m2!1s0x0%3A0x36021c8bc8d70a76!2z5qCq5byP5Lya56S-44Op44Oz44OX!5e0!3m2!1sja!2sjp!4v1571374911359!5m2!1sja!2sjp" allowfullscreen=""></iframe>
</div>
<ul>
<li>・京都市営地下鉄 烏丸線烏丸御池駅 5番出口より徒歩2分</li>
<li>・京都市営地下鉄 四条駅 徒歩9分</li>
<li>・阪急 烏丸駅 徒歩8分</li>
</ul>
</td>
</tr>
<tr>
<th>電話番号</th>
<td>075-600-2721<br>
<a href="<?php echo $home; ?>/contact/">お問い合わせはこちら&nbsp;&gt;</a></td>
</tr>
<tr>
<th>事業内容</th>
<td>WEBマーケティング事業
<br>データプラットフォーム事業
<br>訪日インバウンド事業
<br><a href="<?php echo $home; ?>/service/">サービス一覧&nbsp;&gt;</a></td>
</tr>
<tr>
<th>代表者</th>
<td>代表取締役　河野 匠</td>
</tr>
<tr>
<th>設立</th>
<td>2017年2月（創業2011年5月）</td>
</tr>
<tr>
<th>資本金</th>
<td>4,000,000円</td>
</tr>
<tr>
<th>従業員数</th>
<td>22名（アルバイト含む）</td>
</tr>
<tr>
<th>主な取引先(敬称略)</th>
<td>京都府庁
<br>エムケイ株式会社
<br>株式会社関電アメニックス
<br>株式会社近鉄・都ホテルズ
<br>日本ルナ株式会社
<br>トビラシステムズ株式会社
<br>株式会社スマートバリュー
<br>株式会社小林洋行
<br>アイエーグループ株式会社
<br>エムケイ石油株式会社
<br>株式会社エス・ティーホテルズ
<br>GMOインターネット株式会社
<br>さくらインターネット株式会社
<br>株式会社読売エージェンシー
<br>株式会社テレビ愛知企画
<br>株式会社高栄ホーム
<br>株式会社リノア
<br>京都信用金庫
<br>その他 企業・一般社団法人など
</tr>
</tbody>
</table>
</div>
<div class="txt-c">
  <div class="btn gray mt-3">
  <a href="https://lamp.jp/recruit/" target="_blank">採用情報はこちらから</a>
  </div>
</div>
</div>
</section>
<?php get_footer();
