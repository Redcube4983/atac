<?php
// 

/* mwwpform エラーメッセージ変更 */
function my_error_message($error, $key, $rule){
  if($key === 'your-company' && $rule === 'noempty'){
      return '会社名が入力されていません';
  }
  if($key === 'your-second-name' && $rule === 'noempty'){
      return '担当者名が入力されていません';
  }
  if($key === 'your-first-name' && $rule === 'noempty'){
      return '担当者名が入力されていません';
  }
  if($key === 'your-second-name-kana' && $rule === 'noempty'){
      return 'フリガナが入力されていません';
  }
  if($key === 'your-first-name-kana' && $rule === 'noempty'){
      return 'フリガナが入力されていません';
  }
  if($key === 'year' && $rule === 'noempty'){
    return '項目が選択されていません';
  }  
  if($key === 'month' && $rule === 'noempty'){
    return '項目が選択されていません';
  }  
  if($key === 'day' && $rule === 'noempty'){
    return '項目が選択されていません';
  }  
  if($key === 'uni' && $rule === 'noempty'){
    return '最終学歴が入力されていません';
  }
  if($key === 'school' && $rule === 'noempty'){
    return '項目が選択されていません';
  }  
  if($key === 'zip-code' && $rule === 'noempty'){
      return '郵便番号が入力されていません';
  }
  if($key === 'prefectures' && $rule === 'noempty'){
      return '都道府県が選択されていません';
  }
  if($key === 'city' && $rule === 'noempty'){
      return '市区町村が入力されていません';
  }
  if($key === 'banchi' && $rule === 'noempty'){
    return '番地が入力されていません';
}
if($key === 'tel' && $rule === 'noempty'){
  return 'お電話番号が入力されていません';
}
if($key === 'email' && $rule === 'noempty'){
  return 'メールアドレスが入力されていません';
}
if($key === 'industry' && $rule === 'noempty'){
  return '業種が選択されていません';
}
if($key === 'job' && $rule === 'noempty'){
  return '職種が選択されていません';
}
if($key === 'question' && $rule === 'noempty'){
  return '項目が選択されていません';
}
if($key === 'kind' && $rule === 'noempty'){
  return '項目が選択されていません';
}
if($key === 'your-content' && $rule === 'noempty'){
  return 'お問い合わせ内容が入力されていません';
}
if($key === 'ryosho' && $rule === 'required'){
    return '個人情報に関する取扱いについて同意するがチェックされていません';
}
return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-38', 'my_error_message', 10, 3 );

// アイキャッチ画像を有効化
function setup_theme() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');

function catch_that_image(){
  global $post, $posts;
  $first_img = ”;
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'”]([^\'”]+)[\'”].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  if(empty($first_img)){
  // 記事内で画像がなかったときのためのデフォルト画像を指定
  $first_img = esc_url(get_template_directory_uri()) . "/common/images/icon_ATAC.png";
  }
  return $first_img;
  }
?>