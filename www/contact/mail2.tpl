{include file="array.tpl"}
--------------------------------------------------------
■ お問合わせ
--------------------------------------------------------
ご用件：{$c1[$arr_post.content]}
保護者氏名：{$arr_post.name}
保護者氏名(フリガナ)：{$arr_post.ruby}
受講するお子様の学年：{$g[$arr_post.g]}
受講者氏名：{$arr_post.ruby2}
住所：〒{$arr_post.zip} {$p[$arr_post.prefecture]} {$arr_post.address1} {$arr_post.address2}
メールアドレス：{$arr_post.mail}
電話番号：{$arr_post.tel}
{if not empty($arr_post.content)}
ZOOMオンラインの利用経験：{$c2[$arr_post.content2]}
お問い合わせ内容：{$arr_post.comment}
{/if}

--------------------------------------------------------
■ お客様の環境情報
--------------------------------------------------------
■ IPアドレス
{$smarty.server.REMOTE_ADDR}
■ ユーザーエージェント
{$smarty.server.HTTP_USER_AGENT}

--------------------------------------------------------
