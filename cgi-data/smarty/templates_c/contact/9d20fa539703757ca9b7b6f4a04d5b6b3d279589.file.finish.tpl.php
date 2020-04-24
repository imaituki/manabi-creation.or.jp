<?php /* Smarty version Smarty-3.1.18, created on 2020-04-23 10:40:06
         compiled from "./finish.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15645432925ea0f1f6b02dc9-83894621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d20fa539703757ca9b7b6f4a04d5b6b3d279589' => 
    array (
      0 => './finish.tpl',
      1 => 1587526168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15645432925ea0f1f6b02dc9-83894621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea0f1f6b1eb72_72264152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea0f1f6b1eb72_72264152')) {function content_5ea0f1f6b1eb72_72264152($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- js -->
</head>
<body id="contact">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="お問い合わせ">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="お問い合わせ">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span>
					</span>
					<span class="sub">お問い合わせ</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>お問い合わせ</li>
			</ul>
		</div>
	</div>
	<section>
        <div class="wrapper">
            <div class="center finish">
                <div class="box">
                    <p class="pos_ac mb50">
                        <img src="/common/image/contents/contact/finish.png" alt="お問い合わせ・ご予約"  class="hidden-only">
                        <img src="/common/image/contents/contact/sp_finish.png" alt="お問い合わせ・ご予約"  class="visible-only">
                    </p>
                    <h2>お問い合わせが完了しました</h2>
                    <p class="mb20">ご入力いただいたメールアドレス<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['mail'])) {?>(<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
)<?php }?>宛に、確認メールをお送りしておりますのでご確認ください。</p>
                    <p class="mb20">
                        しばらくたっても自動送信メールが届かない場合には、主に次の原因が考えられます。<br>
                        「ご入力いただいたメールアドレスが間違っている」<br>
                        「迷惑メール対策による受信メールの自動削除設定」<br>
                        「メールボックスの容量オーバー（特にフリーメール）」<br>
                        「メールの受信制限や拒否設定（特に携帯メール）」</p>
                    <p class="mb20">メールアドレスの間違いや、ドメイン指定などの受信設定を今一度ご確認いただき、<br>
                        送受信できる正しいメールアドレスを、メールまたはお電話にてご連絡くださいますようお願い申し上げます。</p>
                    <p class="mb50">その他、何かご不明な点等ございましたら、お気軽にお問い合わせください。</p>
                    <div class="button m0auto"><a href="/" class="_type1 ov">トップページに戻る<i class="fas fa-caret-right"></i></a></div>
    			</div>
            </div>
        </div>
    </section>
</div>
</main>
<!-- footer -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- footer -->
<script>
</script>
</div>
</body>
</html>
<?php }} ?>
