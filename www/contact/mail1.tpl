{$mail_conf.user.header}
{include file="array.tpl"}

--------------------------------------------------------
■ お問合わせ
--------------------------------------------------------
ご用件                  ：{$c1[$arr_post.content]}
保護者氏名              ：{$arr_post.name}
保護者氏名(フリガナ)    ：{$arr_post.ruby}
受講するお子様の学年    ：{$g[$arr_post.g]}
受講者氏名              ：{$arr_post.ruby2}
住所                    ：〒{$arr_post.zip} {if $arr_post.prefecture > 0}{html_select_ken selected=$arr_post.prefecture pre="1"}{/if} {$arr_post.address1} {$arr_post.address2}
メールアドレス          ：{$arr_post.mail}
電話番号                ：{$arr_post.tel}
{if not empty($arr_post.content)}
ZOOMオンラインの利用経験：{$c2[$arr_post.content2]}
{/if}
--------------------------------------------------------
[ {if not empty($arr_post.content)}その他お問い合わせ{else}お問い合わせ内容{/if} ]
{$arr_post.comment}

--------------------------------------------------------

{$mail_conf.user.footer}
