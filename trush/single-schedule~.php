<?php
/*
Template Name: page-scheduleページ
*/
get_header();
?>


<!-- ページタイトル -->
<div class="page-title">
  <figure class="section_title_blob-r">
    <img src="<?php echo get_template_directory_uri(); ?>/img/blobs.svg" alt="" />
  </figure>
  <h1 class="page-ttl">研修会・イベント一覧</h1>
  <figure class="section_title_blob-l">
    <img src="<?php echo get_template_directory_uri(); ?>/img/blobs_2.svg" alt="" />
  </figure>
</div>

<main>
  <!-- パンくずリスト -->
  <div class="breadcrumb inner">
    <ol class="breadcrumbs">
    <?php
    if ( function_exists( 'bcn_display' ) ) {
    bcn_display();
    }
    ?>
    </ol>
  </div>

  <!-- スケジュール -->
  <section class="schedule_container">
    <div class="inner">
      <h2 class="schedule-ttl section_title">
        <div class="section-ttl-en">SCHEDULE</div>
        <div class="section-ttl-ja">スケジュール</div>
      </h2>
      <p class="sp-words">横スクロールでご覧いただけます →</p>
      <div class="table-scroll">
        <!-- <table class="bl_schedule_table schedule-table">
              <thead>
                <tr>
                  <th class="bl_schedule_th schedule-thead">日程</th>
                  <th class="bl_schedule_th schedule-thead">内容</th>
                  <th class="bl_schedule_th schedule-thead">開催場所</th>
                  <th class="bl_schedule_th schedule-thead">備考</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="bl_schedule_td">2023年2月26日</td>
                  <td class="bl_schedule_td">
                    <a href="#">第16回NNPセミナー</a>
                  </td>
                  <td class="bl_schedule_td">神奈川県栄養士会/web</td>
                  <td class="bl_schedule_td">受付締切：2023年1月31日</td>
                </tr>
                <tr>
                  <td class="bl_schedule_td">2023年2月</td>
                  <td class="bl_schedule_td">
                    第61回全国精神科栄養士Web研修会
                  </td>
                  <td class="bl_schedule_td">web開催</td>
                  <td class="bl_schedule_td">3日15日録画配信ともに終了</td>
                </tr>
                <tr>
                  <td class="bl_schedule_td">2023年2月26日</td>
                  <td class="bl_schedule_td">
                    <a href="#">第16回NNPセミナー</a>
                  </td>
                  <td class="bl_schedule_td">神奈川県栄養士会/web</td>
                  <td class="bl_schedule_td">受付締切：2023年1月31日</td>
                </tr>
                <tr>
                  <td class="bl_schedule_td">2023年2月26日</td>
                  <td class="bl_schedule_td">
                    <a href="#">第16回NNPセミナー</a>
                  </td>
                  <td class="bl_schedule_td">神奈川県栄養士会/web</td>
                  <td class="bl_schedule_td">受付締切：2023年1月31日</td>
                </tr>
                <tr>
                  <td class="bl_schedule_td">2023年2月26日</td>
                  <td class="bl_schedule_td">
                    <a href="#">第16回NNPセミナー</a>
                  </td>
                  <td class="bl_schedule_td">神奈川県栄養士会/web</td>
                  <td class="bl_schedule_td"></td>
                </tr>

              </tbody>
            </table> -->
        <!-- //テーブルのデータを取得 -->
        <?php
        $table = get_field('schedule');
        if (!empty($table)) {
          echo '<table class="bl_schedule_table schedule-table">';
          if (!empty($table['caption'])) {
            echo '<caption>' . $table['caption'] . '</caption>';
          }
          if (!empty($table['header'])) {
            echo '<thead>';
            echo '<tr>';
            foreach ($table['header'] as $th) {
              echo '<th class="bl_schedule_th schedule-thead">';
              echo $th['c'];
              echo '</th>';
            }
            echo '</tr>';
            echo '</thead>';
          }
          echo '<tbody>';
          foreach ($table['body'] as $tr) {
            echo '<tr>';
            foreach ($tr as $td) {
              echo '<td class="bl_schedule_td">';
              echo $td['c'];
              echo '</td>';
            }
            echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
        }
        ?>
      </div>

    </div>
  </section>

  <!-- 関連研修会 -->
  <section class="traning_container">
    <div class="inner">
      <h2 class="schedule-ttl section_title">
        <div class="section-ttl-en">TRAINING</div>
        <div class="section-ttl-ja">関連研修会</div>
      </h2>
      <p class="traning-description_top pc-words">
        <a href="#">日本精神科医学会認定栄養士</a>
        資格更新のため必須研修（更新）含む
      </p>
      <p class="sp-words">横スクロールでご覧いただけます →</p>
      <div class="table-scroll">
        <!-- <table class="bl_traning_table traning-table">
          <thead>
            <tr>
              <th class="bl_traning_th traning-thead">日程</th>
              <th class="bl_traning_th traning-thead">内容</th>
              <th class="bl_traning_th traning-thead">主催</th>
              <th class="bl_traning_th traning-thead">開催場所</th>
              <th class="bl_traning_th traning-thead">備考</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="bl_traning_td">2023年2月27日</td>
              <td class="bl_traning_td">
                <a href="#">
                  日本精神神経学会 第11回精神科臨床における
                  他職種チームの活かし方フォーラム</a>
              </td>
              <td class="bl_traning_td">日本精神神経学会</td>
              <td class="bl_traning_td">
                愛知県 株）名給本社　多目的ホール
              </td>
              <td class="bl_traning_td">
                その他記載したい事項があればこちらに
              </td>
            </tr>
            <tr>
              <td class="bl_traning_td">2023年2月27日</td>
              <td class="bl_traning_td">
                <a href="#">
                  日本精神神経学会 第11回精神科臨床における
                  他職種チームの活かし方フォーラム</a>
              </td>
              <td class="bl_traning_td">日本精神神経学会</td>
              <td class="bl_traning_td">
                愛知県 株）名給本社　多目的ホール
              </td>
              <td class="bl_traning_td">
                その他記載したい事項があればこちらに
              </td>
            </tr>
            <tr>
              <td class="bl_traning_td">2023年2月27日</td>
              <td class="bl_traning_td">
                <a href="#">
                  日本精神神経学会 第11回精神科臨床における
                  他職種チームの活かし方フォーラム</a>
              </td>
              <td class="bl_traning_td">日本精神神経学会</td>
              <td class="bl_traning_td">
                愛知県 株）名給本社　多目的ホール
              </td>
              <td class="bl_traning_td">
                その他記載したい事項があればこちらに
              </td>
            </tr>
            <tr>
              <td class="bl_traning_td">2023年2月27日</td>
              <td class="bl_traning_td">
                <a href="#">
                  日本精神神経学会 第11回精神科臨床における
                  他職種チームの活かし方フォーラム</a>
              </td>
              <td class="bl_traning_td">日本精神神経学会</td>
              <td class="bl_traning_td">
                愛知県 株）名給本社　多目的ホール
              </td>
              <td class="bl_traning_td">
                その他記載したい事項があればこちらに
              </td>
            </tr>
          </tbody>
        </table> -->
        <!-- //テーブルのデータを取得 -->
        <?php
        $table = get_field('training');
        if (!empty($table)) {
          echo '<table class="bl_traning_table traning-table">';
          if (!empty($table['caption'])) {
            echo '<caption>' . $table['caption'] . '</caption>';
          }
          if (!empty($table['header'])) {
            echo '<thead>';
            echo '<tr>';
            foreach ($table['header'] as $th) {
              echo '<th class="bl_schedule_th schedule-thead">';
              echo $th['c'];
              echo '</th>';
            }
            echo '</tr>';
            echo '</thead>';
          }
          echo '<tbody>';
          foreach ($table['body'] as $tr) {
            echo '<tr>';
            foreach ($tr as $td) {
              echo '<td class="bl_traning_td">';
              echo $td['c'];
              echo '</td>';
            }
            echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
        }
        ?>
      </div>
      <p class="traning-description_bottom">
        （更新１）は必須研修となります。更新までに受講ください。<br />
        （更新２）は更新までに１つ以上の受講が必要になります。
      </p>
    </div>
  </section>

  <?php get_footer(); ?>