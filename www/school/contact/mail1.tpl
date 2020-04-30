{$mail_conf.user.header}

--------------------------------------------------------
■ お問合わせ
--------------------------------------------------------
お問い合わせ先          ：{$displaySchool.short_name}
ご用件                  ：{$OptionContactType[$arr_post.type]}
保護者氏名              ：{$arr_post.name}
保護者氏名(フリガナ)    ：{$arr_post.ruby}
受講するお子様の学年    ：{$OptionContactSchoolYear[$arr_post.school_year]}
受講者氏名              ：{$arr_post.student_name}
受講者氏名(フリガナ)    ：{$arr_post.student_ruby}
住所                    ：〒{$arr_post.zip} {if $arr_post.prefecture > 0}{html_select_ken selected=$arr_post.prefecture pre="1"}{/if} {$arr_post.address1} {$arr_post.address2}
メールアドレス          ：{$arr_post.mail}
電話番号                ：{$arr_post.tel}
{if not empty($arr_post.type)}
ZOOMオンラインの利用経験：{$OptionContactZoom[$arr_post.zoom]}
{/if}
--------------------------------------------------------
[ {if not empty($arr_post.type)}その他お問い合わせ{else}お問い合わせ内容{/if} ]
{$arr_post.comment}

--------------------------------------------------------

********************************************************
日本学びクリエイション {$displaySchool.short_name}
〒{$displaySchool.zip}
{if $displaySchool.prefecture > 0}{html_select_ken pre="1" selected=$displaySchool.prefecture}{/if}{$displaySchool.address1}{$displaySchool.address2}
{if $displaySchool.tel != NULL}TEL   ： {$displaySchool.tel}{/if}
メール： {$displaySchool.mail}
URL   ： https://manabi-creation.or.jp/school/?sc={$displaySchool.id_school}
********************************************************
