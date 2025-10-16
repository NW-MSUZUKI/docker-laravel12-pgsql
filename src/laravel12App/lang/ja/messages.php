<?php

declare(strict_types=1);

return [
    'login' => 'ログイン',
    'logout' => 'ログアウト',

    'profile' => 'プロフィール',
    'profile_edit' => 'プロフィール変更',

    'auth' => [
        'system' => 'システム管理者',
        'service' => 'サービス管理者',
        'tenant' => 'テナント管理者',
        'general' => '一般管理者'
    ],

    'csv' => [
        'service_id' => 'サービスID',
        'tenant_id' => 'テナントID',
        'master_url_id' => 'マスタURLID'
    ],

    'google_authenticator' => [
        'title' => '2要素認証',
        'application_caution' => '2要素認証には、スマホのGoogle Authenticatorアプリが必要です。',
        'application_install_caution' => '以下からあなたのデバイスに合わせてインストールしてください。',
        'one_time_password' => '認証コード',
        'caution' => 'アプリに表示されている文字列を入力してください。<br>30秒ごとに変わります。',
    ],

    'dashboard' => 'ダッシュボード',

    'latest_alerts' => '最新アラート',
    'alerts_list' => 'アラート一覧',
    'alert_failed_list' => 'アラート',

    'master_url_list' => 'マスタURL一覧',
    'master_url_select' => 'マスタURL選択',
    'master_url_create' => 'マスタURL新規登録',
    'master_url_import' => 'マスタURL一括登録',
    'master_url_edit' => 'マスタURL情報変更',
    'master_url_detail' => 'マスタURL情報',
    'master_url_common_settings' => 'マスタURL詳細設定',

    'build_history_detail_list' => '監視URL一覧',
    'build_history_detail_detail' => '監視URL詳細',

    'manual_url_list' => '手動登録監視URL一覧',
    'manual_url_create' => '手動登録監視URL - 新規登録',
    'manual_url_detail' => '手動登録監視URL詳細',
    'manual_url_import' => '手動登録監視URL - CSV一括登録',
    'manual_url_import_step1' => 'インポートファイル指定',
    'manual_url_import_step2' => 'インポートファイル詳細',

    'disused_url_list' => '非監視URL一覧',
    'disused_url_detail' => '非監視URL詳細',
    'check_interval_edit' => '監視間隔変更',

    'execution_stop_schedules' => '実行停止スケジュール',
    'execution_stop_schedule_create' => '実行停止スケジュール新規登録',
    'execution_stop_schedule_edit' => '実行停止スケジュール変更',
    'execution_stop_schedule_detail' => '実行停止スケジュール',

    'exclusion_directory_list' => '除外ディレクトリ',
    'exclusion_directory_detail' => '除外ディレクトリ詳細',
    'exclusion_directory_create' => '除外ディレクトリ新規登録',

    'specified_directory_settings' => '指定ディレクトリ',
    'specified_directory_create' => '指定ディレクトリ新規登録',

    'monthly_report_histories' => '月次レポート',

    'detection_settings' => '検知動作設定',
    'mail_templates' => 'メールテンプレート',
    'mail_template_detail' => 'メールテンプレート情報',
    'mail_template_edit' => 'メールテンプレート変更',

    'mail_destinations' => 'メール送信先',
    'mail_destination_detail' => 'メール送信先情報',
    'mail_destination_create' => 'メール送信先新規登録',
    'mail_destination_edit' => 'メール送信先変更',

    'falsification_keywords' => '改ざんキーワード',
    'falsification_keyword_create' => '改ざんキーワード新規登録',
    'falsification_keyword_detail' => '改ざんキーワード情報詳細',
    'black_urls' => 'ブラックリストURL',
    'black_url_create' => 'ブラックリストURL新規登録',
    'black_url_detail' => 'ブラックリストURL情報詳細',
    'white_urls' => 'ホワイトリストURL',
    'white_url_create' => 'ホワイトリストURL新規登録',
    'white_url_detail' => 'ホワイトリストURL情報詳細',
    'symbols' => '特殊文字',
    'symbol_create' => '特殊文字新規登録',
    'symbol_detail' => '特殊文字情報詳細',
    'exclusion_keywords' => '除外キーワード',
    'exclusion_keyword_create' => '除外キーワード新規登録',
    'exclusion_keyword_detail' => '除外キーワード情報詳細',

    'threats' => '脅威マスタ',
    'threat_detail' => '脅威マスタ詳細',
    'threat_edit' => '脅威マスタ変更',

    'threat_params' => '脅威解析設定',
    'threat_param_detail' => '脅威解析設定詳細',
    'threat_param_edit' => '脅威解析設定変更',

    'replace_strings' => 'URL文字列置換設定',
    'replace_strings_list' => 'URL文字列置換一覧',
    'replace_string_edit' => 'URL文字列置換設定',

    'build_histories' => '構造解析履歴',
    'build_histories_detail' => '構造解析履歴情報',
    'build_history_failed_list' => '構造解析取得不可一覧',
    'link_differences_list' => '追加/削除URL一覧',

    'check_histories' => '監視実行履歴',
    'check_histories_detail' => '監視実行履歴情報',
    'check_history_detail_list' => '監視実行履歴詳細一覧',

    'system_edit' => 'システム情報変更',
    'system_detail' => 'システム情報',
    'system_common_settings' => 'システム共通設定',
    'system_user_list' => 'システム管理者一覧',
    'system_user_create' => 'システム管理者新規作成',
    'system_user_edit' => 'システム管理者情報変更',
    'system_user_detail' => 'システム管理者情報',

    'system_service_group_list' => 'サービスグループ一覧',
    'system_service_group_show' => 'サービスグループ詳細',
    'system_service_group_edit' => 'サービスグループ情報変更',
    'system_service_group_create' => 'サービスグループ情報新規作成',
    'system_service_group_detail_list' => '２次サービス一覧',
    'system_service_group_detail_show' => '２次サービス詳細',
    'system_service_group_detail_edit' => '２次サービス情報変更',
    'system_service_group_detail_create' => '２次サービス情報新規作成',

    'service_list' => 'サービス一覧',
    'service_select' => 'サービス選択',
    'service_create' => 'サービス新規作成',
    'service_edit' => 'サービス情報変更',
    'service_detail' => 'サービス情報',
    'service_common_settings' => 'サービス共通設定',
    'service_user_list' => 'サービス管理者一覧',
    'service_user_create' => 'サービス管理者新規作成',
    'service_user_edit' => 'サービス管理者情報変更',
    'service_user_detail' => 'サービス管理者情報',

    'service_group_detail_list' => '２次サービス一覧',
    'service_detail_service_group_member' => '２次サービス情報',

    'tenant_list' => 'テナント一覧',
    'tenant_select' => 'テナント選択',
    'tenant_create' => 'テナント新規作成',
    'tenant_edit' => 'テナント情報変更',
    'tenant_detail' => 'テナント情報',
    'tenant_common_settings' => 'テナント共通設定',
    'tenant_user_list' => 'テナント管理者一覧',
    'tenant_user_create' => 'テナント管理者新規作成',
    'tenant_user_edit' => 'テナント管理者情報変更',
    'tenant_user_detail' => 'テナント管理者情報',

    'user_list' => 'ユーザー一覧',
    'user_create' => 'ユーザー新規作成',
    'user_edit' => 'ユーザー情報変更',
    'user_detail' => 'ユーザー情報',

    'view_history' => '最近閲覧したもの',
    'edit_history' => '最近変更したもの',

    'shortcut' => 'ショートカット',
    'alert_menu' => 'アラートメニュー',
    'system_menu' => 'システムメニュー',
    'service_menu' => 'サービスメニュー',
    'tenant_menu' => 'テナントメニュー',
    'master_url_menu' => 'マスタURLメニュー',

    'report_title' => '改ざんに見られる特徴に注目した解析結果',

    'queue' => [
        'title' => 'マスターキュー一覧',
        'queue_on_list_detail' => 'マスタURL一覧(:display_name)',
    ],

    'search' => [
        'title' => '一覧表示条件',
        'target' => '検索対象',
        'keyword' => '検索キーワード',
        'keyword_placeholder' => 'キーワードを入力してください',
        'partial' => 'あいまい',
        'whole' => '完全一致',
        'start' => '期間(開始)',
        'end' => '期間(終了)',
        'with_trashed' => '削除済みマスタURLを含む',
        'search' => '表示',
        'all' => 'すべて',
        'new_target' => '新規絞り込み',
        'new_acquisition' => '新規のみ',
        'old_acquisition' => '新規を除く',
    ],

    'detail' => '詳細',
    'delete' => '削除',
    'update' => '変更',
    'regist' => '登録',
    'regist_and_build' => '登録後、構造解析実行',
    'next' => '次へ',
    'back' => '戻る',
    'shortcut_alerts_list' => 'このマスタURLのアラート一覧',
    'back_service_list' => 'サービス一覧へ戻る',
    'back_tenant_list' => 'テナント一覧へ戻る',
    'back_master_url_list' => 'マスタURL一覧へ戻る',
    'csv_download' => 'CSVダウンロード',
    'close' => '閉じる',
    'save' => '保存',
    'cancel' => 'キャンセル',
    'select' => '選択',
    'unselect' => '未選択',
    'build' => '構造解析即時実行',
    'build_cancel' => '構造解析実行中止',
    'check' => '監視即時実行',
    'check_cancel' => '監視実行中止',
    'new_create' => '新規作成',
    'new_register' => '新規登録',
    'import' => '一括登録',
    'select_file' => 'ファイル選択',
    'import_csv' => 'CSV一括登録',

    'required' => '必須',

    'setting' => '設定',

    'minutes' => ':minutes 分|:minutes 分',
    'hours' => ':hours 時間|:hours 時間',
    'days' => ':days 日|:days 日',
    'time' => '時',
    'time_minutes' => '分',

    'has_error' => 'エラーあり',

    'unlimited' => '無制限',

    'status' => [
        'title' => '利用状態',
        'valid' => '利用可能',
        'invalid' => '利用停止',
    ],

    'limit_code' => [
        'none' => '通常',
        'readonly' => '閲覧のみ',
    ],

    'system' => [
        'title' => 'システム',
        'name' => 'システム名',
        'version' => 'バージョン',
        'warning_email' => '警告メールアドレス',
        'build_base_offset' => '構造解析 基準時間',
        'build_interval' => '構造解析 間隔',
        'build_wait_time' => '構造解析 待機時間',
        'check_base_offset' => '監視 基準時間',
        'check_wait_time' => '監視 待機時間',

        'name_placeholder' => '',
        'version_placeholder' => '',
        'warning_email_placeholder' => '',
        'build_interval_placeholder' => '',
        'build_wait_time_placeholder' => '',
        'check_wait_time_placeholder' => '',

        'build_wait_time_unit' => 'ミリ秒',
        'check_wait_time_unit' => 'ミリ秒',
    ],

    'master_url' => [
        'title' => 'マスタURL',
        'name' => 'マスタURL名',
        'url' => 'マスタURL',
        'build_base_offset' => '基準時間',
        'build_interval' => '間隔',
        'check_base_offset' => '基準時間',
        'check_interval_pattern' => '監視間隔',
        'build_status' => '構造解析 状態',
        'check_status' => '監視 状態',
        'run_type' => '実行タイプ',
        'created_at' => '登録日時',
        'updated_at' => '更新日時',

        'check_urls_count' => '監視URL数',
        'import_file' => '対象CSVファイル',
        'import_records_count' => 'レコード数',
        'import_records_list' => 'レコード一覧',

        'basic_settings' => '基本情報',
        'build_settings' => '構造解析設定情報',
        'build' => '構造解析即時実行',
        'limit_hops' => 'ホップ上限',
        'limit_check_urls' => '最大監視URL数',
        'limit_file_size' => 'ダウンロードファイル最大サイズ',
        'allow_filter' => 'マスタURL上位の構造解析',
        'accept_mime' => 'ファイル種別',
        'accept_scheme' => 'プロトコル指定',
        'referer' => 'リファラ',
        'use_browser_agent' => 'UserAgent',
        'auth_id' => 'Basic認証 ID',
        'auth_pwd' => 'Basic認証 パスワード',
        'auth_pwd_confirmation' => 'Basic認証 パスワード(確認)',
        'build_wait_time' => '待機時間',
        'check_settings' => '監視設定情報',
        'check' => '監視即時実行',
        'check_wait_time' => '待機時間',
        'history' => '実行履歴',

        'email_settings' => 'メール送信先',

        'name_placeholder' => '',
        'url_placeholder' => 'http(s)://から入力してください',
        'limit_file_size_placeholder' => '',
        'referer_placeholder' => '',
        'use_browser_agent_placeholder' => '',
        'auth_id_placeholder' => '',
        'auth_pwd_placeholder' => '',
        'auth_pwd_confirmation_placeholder' => '',
        'build_base_offset_placeholder' => '',
        'build_wait_time_placeholder' => '',
        'check_base_offset_placeholder' => '',
        'check_wait_time_placeholder' => '',

        'limit_file_size_unit' => 'MB',
        'build_wait_time_unit' => 'ミリ秒',
        'check_wait_time_unit' => 'ミリ秒',

        'url_caution' => '例1) 末尾がファイル名ではない場合 http://sample.jp/sample/<br>例2) 末尾がファイル名の場合 http://sample.jp/sample.html',
        'url_regex' => '指定したプロトコルとURLが一致しません',
        'import_limit_excess' => 'マスタURL数の上限を超るため登録することができません (登録可能マスタURL数 :limit) ',
        'import_limit_master_urls_caution' => '※テナント監視URL数上限（:limit）<br>最大監視URL数*登録マスタURL(:reccount)が上限を超えない値にしてください。',

        'queues_settings' => 'キュー情報',
        'queues' => 'ダウンロードキュー',
        'queues_caution' => '※ダウンロードキューを1つ以上選択してください。<br>※複数選択数上限（上限 :limit）',
        'queues_placeholder' => 'ダウンロードキューを選択してください。',

        'proxy_url' => 'JS PROXY',
        'proxy_url_use' => '使用する',
        'proxy_url_not_use' => '使用しない',
        'proxy_url_caution' => '※[使用しない]を選択した場合は、通常取得',

        'stop_schedule_caution' => '※実行停止スケジュールが有効のため、実行できません。',

        'increment_3xx_hopcount' => 'リダイレクト時のホップ消費',
        'check_redirect_from_flg' => 'リダイレクト元の監視',
        'check_existing_4xx_flg' => '4xxの監視',

        'url_replace_string_has_flg' => 'URL置換',

        'build_method_flg' => '構造解析実行メソッド',
    ],

    'url_replace_string_has_flg' => [
        'off' => ' ',
        'on' => '設定',
    ],

    'increment_3xx_hopcount' => [
        'off' => 'しない',
        'on' => 'する',

    ],

    'check_redirect_from_flg' => [
        'off' => 'しない',
        'on' => 'する',

    ],

    'check_existing_4xx_flg' => [
        'off' => 'しない',
        'on' => 'する',

    ],

    'build_method_flg' => [
        'default' => 'デフォルト(HEAD, GET)',
        'getonly' => 'GETのみ',

    ],

    'build_status' => [
        'wait' => '待機',
        'waiting_for_start' => '開始待ち',
        'running' => '構造解析中',
        'done' => '完了'
    ],

    'check_status' => [
        'wait' => '待機',
        'waiting_for_start' => '開始待ち',
        'running' => '監視中',
        'done' => '完了'
    ],

    'run_type' => [
        'both' => '構造解析/監視有効',
        'check' => '監視有効',
    ],

    'allow_filter_flag' => [
        'true' => '解析する',
        'false' => '解析しない',
        'caution' => '※マスタURLがドメインのみの場合、「解析しない」が設定されます',
        'caution_specified' => '※指定ディレクトが設定されます。変更できません。',
    ],

    'allow_filter_specified_flag' => [
        'true' => 'あり',
        'false' => 'なし',
        'caution' => '※指定ディレクトリ配下みのが解析対象に設定されます',
    ],

    'referer_type' => [
        'none' => '指定しない',
        'to_set' => '指定する',
        'google' => 'Google検索',
        'yahoo' => 'Yahoo検索',
        'clear' => '入力クリア'
    ],

    'accept_mime' => [
        'text' => 'HTML(テキストを含む)',
        'image' => '画像',
        'application' => 'アプリケーション',

        'caution' => '※「HTML(テキストを含む)」は必須です。',
    ],

    'accept_scheme' => [
        'http' => 'http',
        'https' => 'https'
    ],

    'check_interval_class' => [
        'default' => '標準',
        'modify' => '指定',
    ],

    'process_type' => [
        'process' => '構造解析/監視連携',
        'cooperation' => '連携あり',
        'non_cooperation' => '連携なし',
        'after_build_check' => '構造解析後監視実行',
        'oncheck' => '同時',
        'information' => '※ 連携なし : 基準時間から監視が実行されます。<br>※ 連携あり : 構造解析完了後、全ファイルの監視が即時実行されます。',
        'no_cooperation_info' => '※ 基準時間から監視が実行されます。',
        'cooperation_info' => '※ 構造解析完了後、全ファイルの監視が即時実行されます。',
        'oncheck_info' => '※ 構造解析中にファイル取得の都度、監視が実行されます。',
        'sys_information' => '※ 連携なし : 基準時間から監視が実行されます。<br>※ 連携あり : 構造解析完了後、全ファイルの監視が即時実行されます。<br>※ 同時  : 構造解析中にファイル取得の都度、監視が実行されます。',
        'other_information' => '※ 連携なし : 基準時間から監視が実行されます。<br>※ 連携あり : 構造解析完了後、全ファイルの監視が即時実行されます。',
    ],

    'registration_url_code' => [
        'auto' => '自動',
        'manual' => '手動',
        'csv' => 'ＪＳ',
    ],

    'registration_code' => [
        'provisional_create' => '仮登録(新規)',
        'provisional_update' => '仮登録(更新)',
        'provisional_manual' => '仮登録(手動)',
        'auto' => '自動登録',
        'manual' => '手動登録',
        'js_provisional_create' => 'JS仮登録(新規)',
        'js_provisional_update' => 'JS仮登録(更新)',
        'js_provisional_manual' => 'JS仮登録(手動)',
        'js_provisional' => 'JS仮登録',
        'js' => 'ＪＳ',
    ],

    'running_registration_code' => [
        'auto' => '定期',
        'manual' => '即時',
        'js' => 'ＪＳ',
    ],

    'result_code' => [
        'unfinished' => '未終了',
        'succeeded' => '正常',
        'aborted' => '中断',
        'failed' => '異常',
    ],

    'check_method' => [
        'auto' => '定期',
        'manual' => '即時',
        'build_after_check' => '連携',
        'build_on_check' => '同時',
    ],

    'url_div' => [
        'forward' => '前方一致',
        'regexp' => '正規表現一致',
        'whole' => '完全一致',
    ],

    'division' => [
        'header' => 'HTTPレスポンスヘッダ',
        'content' => 'コンテンツ',
    ],

    'keyword_div' => [
        'partial' => '部分一致',
        'regexp' => '正規表現一致',
    ],

    'schedule_type' => [
        'week' => '曜日指定',
        'day' => '日付指定',
    ],

    'stop_weeks' => [
        'sun' => '毎週日曜日',
        'mon' => '毎週月曜日',
        'tue' => '毎週火曜日',
        'wed' => '毎週水曜日',
        'thu' => '毎週木曜日',
        'fri' => '毎週金曜日',
        'sat' => '毎週土曜日',
    ],

    'mail_div' => [
        'send' => '個別に送信する',
        'send_short' => '個別',
        'group' => 'まとめて送信する',
        'group_short' => 'まとめて',
        'non' => '送信しない',
        'non_short' => '-',
    ],

    'threat_code' => [
        'keyword_in_contents' => '改ざんキーワード判定',
        'changed_title' => 'タイトル変化',
        'changed_encoding' => '言語エンコード変化',
        'background' => '背景色：黒',
        'html_invalid_structure' => 'HTML不完全構造',
        'injected_endline' => '末尾挿入',
        'injected_binary' => '外部バイナリ挿入',
        'link_decreased' => 'リンク数の減少',
        'line_decreased' => '行数の縮小',
        'size_decreased' => 'バイト数の減少',
        'blacklist' => 'ブラックリストURLマッチ',
        'injected_iframe' => 'iframeタグ挿入',
        'injected_outer_url' => '外部URL挿入',
        'too_large_script' => 'scriptの長い行を検出',
        'find_eval_in_script' => 'script内のeval',
        'invalid_symbol' => 'iframe不正な記号',
        'too_small_iframe' => 'iframe小さな挿入',
        'too_many_symbols' => 'script多数の特殊文字',
        'find_replace_in_script' => 'script文字変換',
        'script_invalid_location' => 'script異常な位置',
        'find_outerport' => '外部リンクのポート番号',
        'injected_tag_in_title' => 'titleタグ内のタグ挿入',
        'script_invalid_structure' => 'scriptタグ崩れ',
        'detected_virus' => 'ウイルス検知',
        'find_outer_location' => '外部Location',
        'keyword_in_header' => 'Httpヘッダ内キーワードチェック',
        'exclusion_keyword' => '除外キーワード',
        'whitelist' => 'ホワイトリスト',
    ],

    'service' => [
        'title' => 'サービス',
        'name' => 'サービス名',
        'company' => '会社名',
        'unit' => '部門名',
        'zip_code' => '郵便番号',
        'address' => '住所',
        'contact_person' => '担当者名',
        'phone_number' => '電話番号',
        'fax_number' => 'FAX番号',
        'remarks' => '備考',
        'limit_master_urls' => '最大マスタURL数',
        'limit_check_urls' => '最大監視URL数',
        'warning_email' => '警告メールアドレス',
        'email_from' => '送信元メールアドレス',

        'tenants_count' => 'テナント数',
        'master_urls_count' => 'マスタURL数',
        'used_limit_master_urls' => '割当済',
        'check_urls_count' => '監視URL数',
        'used_limit_check_urls' => '割当済',
        //'used' => '使用中',

        'service_group_member_name' => '２次サービス名',

        'name_placeholder' => '',
        'company_placeholder' => '',
        'unit_placeholder' => '',
        'zip_code_placeholder' => '',
        'address_placeholder' => '',
        'contact_person_placeholder' => '',
        'phone_number_placeholder' => '',
        'fax_number_placeholder' => '',
        'remarks_placeholder' => '',
        'limit_master_urls_placeholder' => '',
        'limit_check_urls_placeholder' => '',
        'warning_email_placeholder' => '',
        'email_from_placeholder' => '',

        'limit_status' => [
            'limit_master_url_title' => 'マスタURL割当状況',
            'limit_check_url_title' => '監視URL割当状況',

            'limit_master_urls' => '最大マスタURL数',
            'limit_check_urls' => '最大監視URL数',
            'tenant_used' => 'テナント割当数',
            'registered' => '実登録数',

            'row_total' => '総合計',
            'row_detail' => '詳細',
            'owner' => '１次サービス',
            'member' => '２次サービス',
        ],

    ],

    'tenant' => [
        'title' => 'テナント',
        'name' => 'テナント名',
        'company' => '会社名',
        'unit' => '部門名',
        'zip_code' => '郵便番号',
        'address' => '住所',
        'contact_person' => '担当者名',
        'phone_number' => '電話番号',
        'fax_number' => 'FAX番号',
        'remarks' => '備考',
        'limit_master_urls' => '最大マスタURL数',
        'limit_master_urls_unlimited_caution' => '設定可能な最大マスタURL数は 無制限 です。',
        'limit_master_urls_caution' => '設定可能な最大マスタURL数は :limit 以下です。',
        'limit_check_urls' => '最大監視URL数',
        'limit_check_urls_unlimited_caution' => '設定可能な最大監視URL数は 無制限 です。',
        'warning_email' => '警告メールアドレス',
        'check_interval_pattern' => '監視間隔',
        'limit_check_url_count_list' => '最大監視URL数リスト',

        'master_urls_count' => 'マスタURL数',
        'check_urls_count' => '監視URL数',
        'used_limit_master_urls' => '割当済',
        'used_limit_check_urls' => '割当済',
        //'used' => '使用中',

        'name_placeholder' => '',
        'company_placeholder' => '',
        'unit_placeholder' => '',
        'zip_code_placeholder' => '',
        'address_placeholder' => '',
        'contact_person_placeholder' => '',
        'phone_number_placeholder' => '',
        'fax_number_placeholder' => '',
        'remarks_placeholder' => '',
        'limit_master_urls_placeholder' => '',
        'limit_check_urls_placeholder' => '',
        'warning_email_placeholder' => '',
        'limit_check_url_count_list_placeholder' => '',

        'limit_check_url_count_list_regex' => '数値をカンマ区切りで入力してください。',
    ],

    'user' => [
        'name' => 'ユーザー名',
        'phone_number' => '電話番号',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード(確認)',
        'authority' => '権限',
        'remarks' => '備考',
        'limit_code' => '実行制約',

        'name_placeholder' => '',
        'email_placeholder' => '',
        'password_placeholder' => '半角英数字、半角記号(アンダースコア「_」、ハイフン「-」)で8文字以上32文字以内',
        'password_caution' => '',
        'password_confirmation_placeholder' => '',
        'phone_number_placeholder' => '',
        'remarks_placeholder' => '',
        'limit_code_placeholder' => '',

        'is_enable_google2fa' => 'Google 2段階認証',

        'password_regex' => 'パスワードは[英小文字][英大文字][数字]をそれぞれ1文字以上含めて入力してください。',
    ],

    'is_google2fa' => [
        'enable' => '有効',
        'disable' => '無効',

        'caution' => '※有効の場合：要素認証にスマホのGoogle Authenticatorアプリが必要です。',
    ],


    'master_queues' => [
        'display_name' => '表示名',
        'queue_name' => 'キュー名',
        'queues_count' => 'マスタURL数',
    ],

    'system_service_group' => [
        'title' => 'サービスグループ情報',

        'service' => '１次サービス',
        'name' => '１次サービス名',
        'details_count' => '２次サービス数',

        'service_placeholder' => 'サービスを選択してください',
        'name_placeholder' => '１次サービス名を入力してください',

        'detail_title' => '１次サービス情報',
        'service_name' => 'サービス名',
        'limit_code' => '実行制限',
        'remarks' => '備考',
        'status' => '状態',
        'created_at' => '登録日時',
        'updated_at' => '最終更新日時',

    ],

    'back_system_service_group_list' => 'サービスグループ一覧へ戻る',

    'system_service_group_detail' => [

        'service' => '２次サービス',
        'name' => '２次サービス名',

        'service_placeholder' => 'サービスを選択してください',
        'name_placeholder' => '２次サービス名を入力してください',

        'detail_title' => '２次サービス情報',

        'service_name' => 'サービス名',
        'limit_code' => '実行制限',
        'remarks' => '備考',
        'status' => '状態',
        'created_at' => '登録日時',
        'updated_at' => '最終更新日時',
    ],

    'back_system_service_group_show' => 'サービスグループ詳細へ戻る',

    'confirm' => [
        'yes' => 'はい',
        'no' => 'いいえ',
        'create_title' => '確認',
        'create_content' => '登録してもよろしいですか？',
        'edit_title' => '確認',
        'edit_content' => '変更してもよろしいですか？',
        'delete_title' => '確認',
        'delete_content' => '削除してもよろしいですか？',
        'delete_reconfirmation' => '元には戻せません',
        'build_title' => '確認',
        'build_content' => '構造解析を即時実行してもよろしいですか？',
        'build_cancel_title' => '確認',
        'build_cancel_content' => '構造解析の実行を中止してもよろしいですか？',
        'check_title' => '確認',
        'check_content' => '監視を即時実行してもよろしいですか？',
        'check_cancel_title' => '確認',
        'check_cancel_content' => '監視の実行を中止してもよろしいですか？',
        'limit_excess_title' => '警告',
        'service_limit_excess_content' => 'このサービスの最大マスタURL数 または、最大監視URL数が上限に達しているため、テナントを作成することができません。',
        'tenant_limit_excess_content' => 'このテナントの最大マスタURL数 または、最大監視URL数が上限に達しているため、マスタURLを登録することができません。',
        'download_title' => '確認',
        'download_csv' => '最大:limit件までのデータをCSV形式でダウンロードします。よろしいですか？',
        'release_content' => '解除してもよろしいですか？',

    ],

    'dataTables' => [
        'info' => '全 _TOTAL_ 件中の _START_ から _END_ までを表示中',
        'infoEmpty' => '',
        'infoFiltered' => '',
        'lengthMenu' => '1ページ当りの表示件数 _MENU_ 件',
        'paginate' => [
            'first' => '<<',
            'last' => '>>',
            'next' => '>',
            'previous' => '<',
        ],
        'zeroRecords' => '該当データなし',
    ],

    'mail_template' => [
        'list' => 'テンプレート一覧',
        'type' => 'テンプレート名',
        'subject' => '件名',
        'subject_placeholder' => '',
        'body' => '本文',
        'body_placeholder' => '',
        'build' => '構造解析完了通知メール',
        'falsification' => '改ざん即時アラートメール',
        'failure' => '障害即時アラートメール',
        'update' => '更新即時アラートメール',
        'recovery' => '復旧即時通知メール',
        'group_falsification' => '改ざんまとめアラートメール',
        'group_failure' => '障害まとめアラートメール',
        'group_update' => '更新まとめアラートメール',
        'group_recovery' => '復旧まとめ通知メール',
    ],

    'mail_destination' => [
        'list' => 'メール送信先一覧',
        'email' => 'メールアドレス',
        'email_placeholder' => '',
        'build' => '構造解析',
        'falsification' => '改ざん',
        'failure' => '障害',
        'update' => '更新',
        'recovery' => '復旧',
    ],

    'falsification_keyword' => [
        'list' => '改ざんキーワード一覧',
        'name' => '改ざんキーワード名',
        'name_placeholder' => '',
        'division' => '種別',
        'score' => '点数',
        'score_placeholder' => '',
        'keyword_div' => '比較区分',
        'keyword' => '改ざんキーワード',
        'keyword_placeholder' => '',
        'add_keyword' => '追加改ざんキーワード',
        'add_keyword_placeholder' => '',
        'remarks' => '備考',
        'remarks_placeholder' => '',
        'created_at' => '登録日時',
    ],

    'black_url' => [
        'list' => 'ブラックリストURL一覧',
        'name' => 'ブラックリスト名',
        'name_placeholder' => '',
        'url_div' => '比較区分',
        'url' => 'ブラックリストURL',
        'url_placeholder' => 'http(s)://から入力してください',
        'remarks' => '備考',
        'remarks_placeholder' => '',
        'created_at' => '登録日時',
    ],

    'white_url' => [
        'list' => 'ホワイトリストURL一覧',
        'name' => 'ホワイトリスト名',
        'name_placeholder' => '',
        'url' => 'ホワイトリストURL',
        'url_placeholder' => 'http(s)://から入力してください',
        'remarks' => '備考',
        'remarks_placeholder' => '',
        'created_at' => '登録日時',
    ],

    'symbol' => [
        'list' => '特殊文字一覧',
        'name' => '特殊文字名',
        'name_placeholder' => '',
        'symbol' => '特殊文字',
        'symbol_placeholder' => '',
        'amount' => '出現数',
        'amount_placeholder' => '',
        'remarks' => '備考',
        'remarks_placeholder' => '',

        'symbol_regex' => '特殊文字は半角英数字記号(a-z, A-Z, 0-9, !"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~)で入力してください。',
        'created_at' => '登録日時',
    ],

    'exclusion_keyword' => [
        'list' => '除外キーワード一覧',
        'url_hash' => '監視URL',
        'url_hash_placeholder' => '',
        'name' => '除外キーワード名',
        'name_placeholder' => '',
        'word' => '除外キーワード',
        'word_placeholder' => '',
        'remarks' => '備考',
        'remarks_placeholder' => '',
        'select_source' => 'ソースコードから選択',
        'select_source_title' => 'ソースコードから選択',
        'source_error' => 'ソースコードが読み込めません',
        'source_error_title' => 'エラー',
        'scope' => '適用範囲',
        'url_all' => 'マスタURL',
        'one_url' => '監視URL',
        'all' => '*',

        'newline_code_caution' => '保存時に強制的に改行コードを置き換えます。<br>※ブラウザにより改行コードが異なります。<br>※除外キーワードに複数行を指定する場合、対象のソースコードの改行コードと一致させる必要があります。',
        'created_at' => '登録日時',

    ],

    'build_history' => [
        'id' => '構造解析ID',
        'master_url_id' => 'マスタURLID',
        'build_finished_at' => '終了日時',
        'registration_code' => '登録状態',
        'result_code' => '結果',
        'check_urls_count' => '監視URL数',
        'add_urls_count' => '追加数',
        'delete_urls_count' => '削除数',
        'created_at' => '登録日時',
        'build_started_at' => '開始日時',
        'reason' => '終了理由',

        'prev' => '前へ',
        'next' => '次へ',

        'search' => [
            'start' => '解析日時(開始)',
            'end' => '解析日時(終了)',
        ],

        'reason_301' => '(ステータスコード：301)「URLドメインが変更されたため取得に失敗しました」',
        'reason_302' => '(ステータスコード：302)「URLドメインが変更されたため取得に失敗しました」',
        'reason_401' => '(ステータスコード：401)「認証に失敗しました」',
        'reason_403' => '(ステータスコード：403)「アクセス権がありません」',
        'reason_404' => '(ステータスコード：404)「該当アドレスのページはありません」',
        'reason_500' => '(ステータスコード：500)「サーバーエラー」',
        'reason_other' => '(ステータスコード：:status) 「原因不明なエラー」',
    ],

    'link_difference' => [
        'difference_type' => '区分',
        'difference_hop' => 'ホップ',
        'difference_url' => '監視URL',
    ],

    'difference_type' => [
        'add' => '追加',
        'del' => '削除',
    ],

    'result_access' => [
        'success' => '正常',
        'timeout' => '障害(タイムアウト)',
        'noresponse' => '障害(サーバー応答なし)',
        'restoration' => '復旧',
        'err_dns' => '障害(その他)',
        'err_system' => '障害(その他)',
    ],

    'result_contents' => [
        'without_change' => '変更なし',
        'change' => '更新',
        'threat' => '改ざん',
        'obstacle' => '障害(その他)',
    ],

    'build_history_detail' => [
        'hop' => 'ホップ',
        'url' => '監視URL',
        'registration_url_code' => '登録区分',
        'created_at' => '登録日時',
        'check_interval_class' => '監視間隔区分',
        'check_interval' => '監視間隔',
        'url1' => 'URL1',
        'url2' => 'URL2',
        'url3' => 'URL3',
        'url4' => 'URL4',
        'url5' => 'URL5',
        'regist_caution' => '※マスタURL ( http[s]://:url ) と前方一致するURLのみ登録可能です。<br>※URLパラメータの順序違いは同一URLとみなします。',

        'import_file' => '対象CSVファイル',
        'import_records_count' => 'レコード数',
        'import_records_list' => 'レコード一覧',

        'url_placeholder' => '',

        'modify_check_interval' => '監視間隔変更',
        'regist_disused_url' => '非監視URL登録',

        'regist_confirm_title' => '非監視URL登録',
        'regist_confirm_content' => '非監視URLとして登録してもよろしいですか?',

        'check_interval_placeholder' => '　',

        'check_interval_required_if' => '監視間隔区分が指定の時、監視間隔は必須です。',
        'url_regex' => 'マスタURLと一致しません。',
        'urls_at_least_one' => '登録するURLを一つ以上入力してください。',
        'create_build_status_error' => '構造解析中のため登録ができません。',
        'destroy_build_status_error' => '構造解析中のため削除ができません。',
    ],

    'check_history' => [
        'check_finished_at' => '実行日時',
        'check_method' => '監視手法',
        'result_code' => '結果',
        'timeout_results_count' => '障害(タイムアウト)',
        'noresponse_results_count' => '障害(サーバー応答なし)',
        'without_changes_count' => '変更なし',
        'change_results_count' => '更新',
        'threat_results_count' => '改ざん',
        'obstacle_results_count' => '障害(その他)',
        'restoration_results_count' => '復旧',
    ],

    'check_history_detail' => [
        'id' => '監視実行詳細ID',
        'result' => '判定',
        'check_file_finished_at' => '検知日時',
        'url' => '監視URL',
        'download_file_finished_at' => '取得日時',
        'build_finished_at' => '構造解析日時',
        'check_urls_count' => '監視URL数',
        'features' => '検知特徴',
        'notable_features' => '注目すべき特徴',
        'check_results' => '解析結果',
        'response_header' => '通信ヘッダ',
        'contents' => 'コンテンツ解説',
        'detail' => '詳細表示',
        'diff' => '差分表示',
        'pdf' => 'PDF出力',
        'no_diff' => '差分なし',
        'raw' => '元データ',
        'source_download_file_finished_at' => '比較対象取得日時',
        'new_file_url' => '新規区分',
        'new' => 'NEW',
        'master_url_id' => 'マスタURLID',
        'check_history_id' => '監視実行ID',
        'check_source_id' => '比較対象URL詳細ID',

        'check_file_notfound' => '解析結果が見つかりません。',

        'diff_memory_limit_over' => '差分結果の取得に失敗しました。',

    ],

    'system_remarks' => [
        'master_url_id' => 'マスタURLID',
        'build_history_id' => '構造解析ID',
        'check_history_id' => '監視実行ID',
        'source_check_history_id' => '比較監視実行ID',
        'detail_id' => '詳細ID',
        'status_code' => 'STATUS',
        'result_access' => 'アクセス判定',
        'reference_judgment' => '差分判定',
    ],

    'manual_url' => [
        'hop' => 'ホップ',
        'url' => '監視URL',
        'registration_url_code' => '登録区分',
        'created_at' => '登録日時',

        'regist_max_caution' => '※登録可能上限：[:max_count]件',
        'url_placeholder' => 'http(s)://から入力してください',
        'regist_caution' => '※マスタURL ( http[s]://:url ) と前方一致するURLのみ登録可能です。(指定プロトコルと一致)<br>※URLパラメータの順序違いは同一URLとみなします。',
        'url_regex' => 'マスタURLと前方一致していないか、指定プロトコルと一致していません。',
        'same_master_url' => 'マスタURLと同一です。',
        'registration_max' => '登録数が上限に達しました。登録できません。',

        'confirm' => [
            'unregist_title' => '手動登録監視URL削除',
            'unregist_content' => '監視URLを削除してもよろしいですか？'
        ],

        'import_file' => '対象CSVファイル',
        'import_records_count' => 'レコード数',
        'import_records_list' => 'レコード一覧',

    ],

    'disused_url' => [
        'url' => '非監視URL',
        'created_at' => '登録日時',

        'unregist' => '非監視解除',
        'confirm' => [
            'unregist_title' => '非監視解除',
            'unregist_content' => '非監視を解除してもよろしいですか？'
        ]
    ],

    'execution_stop_schedule' => [
        'name' => 'スケジュール名',
        'name_placeholder' => '',
        'schedule_type' => 'スケジュールタイプ',
        'stop_weeks' => '曜日',
        'stop_weeks_placeholder' => '',
        'stop_days' => '日付',
        'stop_days_placeholder' => '',
        'stop_weeks_days' => '曜日 / 日付',
        'start_times' => '開始時間',
        'start_times_placeholder' => '',
        'end_times' => '終了時間',
        'end_times_placeholder' => '',
        'remarks' => '備考',
        'remarks_placeholder' => '',

        'stop_days_required_if' => 'スケジュールタイプが日付指定の時、日付は必須です。',
        'end_times_min' => '終了時間は開始時間より後にしてください。',
    ],

    'monthly_report_history' => [
        'monthly_month' => '対象年月',
        'pdf_file_name' => 'PDF',
        'csv_file_name' => 'CSV',
    ],

    'exclusion_directory' => [
        'exclusion_directory' => '除外ディレクトリ',
        'is_followup' => '除外リンク追従',
        'created_at' => '登録日時',

        'exclusion_directory_condition_placeholder' => '除外ディレクトリを入力してください',

        'exclusion_directory_placeholder' => 'http(s)://から入力してください',
        'is_followup_placeholder' => '',
        'disable_root' => '※[/]rootは選択できません。',
        'disable_registered' => '※既に除外ディレクトリに登録されています。',

        'url_regex' => 'マスタURLと一致しません。',

        'followup' => [
            'off' => 'リンク追従しない',
            'on' => 'リンク追従する',
        ],

        'select_tree' => 'ディレクトリ構造から選択',
        'select_tree_title' => 'ディレクトリ構造から選択',

        'tree_error' => 'ディレクトリ構造が読み込めません',
        'tree_error_title' => 'エラー',

        'unregist' => '除外解除',
        'confirm' => [
            'unregist_title' => '除外ディレクトリ解除',
            'unregist_content' => '除外ディレクトリを解除してもよろしいですか？'
        ],

    ],

    'is_followup' => [
        'off' => 'しない',
        'on' => '追従',
    ],

    'specified_directory' => [
        'specified_directory' => '指定ディレクトリ',
        'specified_directory_nothing' => '未登録',

        'specified_directory_placeholder' => 'http(s)://から入力してください',
        'registered' => '除外ディレクトリに登録済のため、登録できません。',

        'url_regex' => 'マスタURLと一致しません。',

        'select_tree' => 'ディレクトリ構造から選択',
        'select_tree_title' => 'ディレクトリ構造から選択',

        'tree_error' => 'ディレクトリ構造が読み込めません',
        'tree_error_title' => 'エラー',

        'regist' => '新規登録',
        'unregist' => '指定解除',
        'confirm' => [
            'unregist_title' => '指定ディレクトリ解除',
            'unregist_content' => '指定ディレクトリを解除してもよろしいですか？'
        ],

    ],


    'build_history_runnings_list' => '構造解析実行中一覧',
    'check_history_runnings_list' => '監視実行中一覧',
    'build_history_runnings_detail' => '構造解析実行中詳細',
    'check_history_runnings_detail' => '監視実行中詳細',

    'build_history_runnings' => [
        'service_name' => 'サービス名',
        'tenant_name' => 'テナント名',
        'master_url_name' => 'マスタURL名',
        'process_type' => '構造解析/監視連携',
        'registration_code' => '構造解析手法',
        'build_started_at' => '構造解析開始日時',
        'limit_check_urls' => '最大監視URL数',
        'total' => '処理対象総数',
        'targeted_count' => '監視対象数',
        'untargeted_count' => '対象外数',
        'remain' => '処理残数',
        'processed' => '進捗率(%)',

        'service_id' => 'サービスID',
        'tenant_id' => 'テナントID',
        'master_url_id' => 'マスタURLID',
        'build_history_id' => '構造解析ID',
        'master_url' => 'マスタURL',

        'reason' => '障害による復帰で処理未達成。再度手動での実行を試みます。',
        'result_prev' => '前回構造解析結果',
        'release' => '停滞解除',
        'last_update' => '最終構造解析詳細更新日時'
    ],

    'check_history_runnings' => [
        'service_name' => 'サービス名',
        'tenant_name' => 'テナント名',
        'master_url_name' => 'マスタURL名',
        'process_type' => '構造解析/監視連携',
        'check_method' => '監視手法',
        'check_started_at' => '監視開始日時',
        'check_urls_count' => '監視URL数',
        'finished_count' => '処理数',
        'remain' => '処理残数',
        'processed' => '進捗率(%)',

        'service_id' => 'サービスID',
        'tenant_id' => 'テナントID',
        'master_url_id' => 'マスタURLID',
        'build_history_id' => '構造解析ID',
        'check_history_id' => '監視実行ID',
        'master_url' => 'マスタURL',

        'reason' => '障害による復帰で処理未達成。再度手動での実行を試みます。',
        'result_prev' => '前回構造解析結果',
        'release' => '停滞解除',
        'last_update' => '最終監視詳細更新日時'
    ],

    'newline_code' => [
        'change_title' => '改行コード',
        'no_change' => '置き換えしない',
        'crlf' => 'CR+LF',
        'lf' => 'LF',
        'cr' => 'CR',
    ],

    'threat' => [
        'threat_code' => '脅威分類',
        'score' => 'スコア',
        'is_operate' => '検知実施',
        'status' => '状態',
        'remarks' => '備考',
        'created_at' => '登録日時',
        'updated_at' => '更新日時',

        'master_url_threat_class' => '区分',
        'score_placeholder' => '',
        'remarks_placeholder' => '',
    ],

    'threat_is_operate' => [
        'on' => 'する',
        'off' => 'しない',
    ],

    'master_url_threat_class' => [
        'default' => '標準',
        'modify' => '指定',
    ],

    'threat_param' => [
        'key' => '設定項目名',
        'value' => '設定値',
        'status' => '状態',
        'remarks' => '備考',
        'created_at' => '登録日時',
        'updated_at' => '更新日時',

        'master_url_threat_param_class' => '区分',
        'value_placeholder' => '',
        'remarks_placeholder' => '',
    ],

    'master_url_threat_param_class' => [
        'default' => '標準',
        'modify' => '指定',
    ],

    'threat_param_key' => [
        'script_length' => 'scriptの長い行 閾値',
        'notfound' => '未定義(編集不可)',
    ],

    'service_group' => [
        'title' => '２次サービス',
        'name' => '２次サービス名',

        'tenants_count' => 'テナント数',
        'master_urls_count' => 'マスタURL数',
        'limit_master_urls' => '最大マスタURL数',
        'used_limit_master_urls' => '割当済',
        'check_urls_count' => '監視URL数',
        'limit_check_urls' => '最大監視URL数',
        'used_limit_check_urls' => '割当済',

    ],

    'management_group' => [
        'layer_id_service' => '１次サービス',
        'layer_id_tenant' => '１次テナント',
        'layer_id_master_url' => '主マスタURL',

        'name_service' => '１次サービス名',
        'name_tenant' => '１次テナント名',
        'name_master_url' => '主マスタURL名',

        'limit_code' => '実行制限',
        'remarks' => '備考',
        'status' => '状態',

        'remarks_placeholder' => '',

        'service_notregistered' => 'サービスが登録されていません。',
        'registered' => '既に１次サービスに登録されています。',
        'detail_registered' => '既に２次サービスに登録されています。',

    ],

    'management_group_detail' => [
        'layer_id_service' => '２次サービス',
        'layer_id_tenant' => '２次テナント',
        'layer_id_master_url' => '従マスタURL',

        'name_service' => '２次サービス名',
        'name_tenant' => '２次テナント名',
        'name_master_url' => '従マスタURL名',

        'limit_code' => '実行制限',
        'remarks' => '備考',
        'status' => '状態',

        'remarks_placeholder' => '',

        'service_notregistered' => 'サービスが登録されていません。',
        'registered' => '既に１次サービスに登録されています。',
        'detail_registered' => '既に他の２次サービスに登録されています。',

    ],

    'replace_string' => [
        'is_operate' => '置換設定',
        'is_operate_flag_off' => '　',
        'is_operate_flag_on' => '設定あり',
        'search' => '検索文字列',
        'replace' => '置換文字列',
    ],

    'replace_string_is_operate' => [
        'on' => '設定する',
        'off' => '設定しない',
    ],

];
