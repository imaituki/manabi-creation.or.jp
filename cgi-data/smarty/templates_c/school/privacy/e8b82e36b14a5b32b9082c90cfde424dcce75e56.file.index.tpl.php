<?php /* Smarty version Smarty-3.1.18, created on 2020-05-07 00:33:20
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4665161895eb35750ba3538-38259480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1588223033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4665161895eb35750ba3538-38259480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'displaySchool' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eb35750bf8395_84915971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb35750bf8395_84915971')) {function content_5eb35750bf8395_84915971($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/home/manabi-creation/cgi-data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
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
<body id="school">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="プライバシーポリシー">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="プライバシーポリシー">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>

					</span>
					<span class="sub">プライバシーポリシー</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li><a href="/school/?sc=<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['id_school'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['short_name'];?>
</a></li>
				<li>プライバシーポリシー</li>
			</ul>
		</div>
	</div>
	<section>
        <div class="wrapper-t privacy" id="privacy">
            <div class="center">
                <h2 class="hl_3 mb20">個人情報保護方針</h2>
                <p class="mb20">一般社団法人 日本学びクリエイション（以下「当法人」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
                <div class="box">
    				<h3>1. 個人情報の管理</h3>
        				<p class="mb50">当法人は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>
    				<h3>2.個人情報の利用目的</h3>
        				<p class="mb50">お客様からお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
    				<h3>3.個人情報の第三者への開示・提供の禁止</h3>
        				<p class="mb50">当法人は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br>
        				・お客さまの同意がある場合<br>
        				・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合<br>
        				・法令に基づき開示することが必要である場合</p>
    				<h3>4.個人情報の安全対策</h3>
        				<p class="mb50">当法人は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
    				<h3>5.ご本人の照会</h3>
        				<p class="mb50">お客さまからお預かりした個人情報は、当法人からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
    				<h3>6.法令、規範の遵守と見直し</h3>
        				<p class="mb50">当法人は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
    				<h3>7.お問い合わせ</h3>
        				<p class="mb20">当法人の個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>
        				<p><strong>一般社団法人 日本学びクリエイション</strong><br>
                            住所：<?php echo smarty_function_html_select_ken(array('pre'=>"1",'selected'=>$_smarty_tpl->tpl_vars['displaySchool']->value['prefecture']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['address1'];?>
<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['address2'];?>
<br>
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['displaySchool']->value['tel'])===null||$tmp==='' ? '' : $tmp)!=null) {?>電話番号：<span class="tel" data-tel="<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><a href="tel:<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['tel'];?>
</a></span><br><?php }?>
							<?php if ((($tmp = @$_smarty_tpl->tpl_vars['displaySchool']->value['mail'])===null||$tmp==='' ? '' : $tmp)!=null) {?>メール：<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['mail'];?>
"><?php echo $_smarty_tpl->tpl_vars['displaySchool']->value['mail'];?>
</a><?php }?>
        				</p>
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
