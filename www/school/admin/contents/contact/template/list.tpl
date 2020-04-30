			{include file=$template_pagenavi}
			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
				<thead>
					<tr>
						<th>お問い合わせ日</th>
						<th>要件</th>
						<th>保護者氏名</th>
						<th>受講するお子様の学年</th>
						<th>電話番号</th>
						<th>メールアドレス</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$mst_contact item="contact" name="loopNews"}
					<tr>
						<td><a href="./detail.php?id={$contact.id_school_contact}">{$contact.entry_date|date_format:"%Y/%m/%d<br>%H:%M:%S"}</a></td>
						<td>{$OptionContactType[$contact.type]}</td>
						<td>({$contact.ruby})<br>{$contact.name}</td>
						<td>{$OptionContactSchoolYear[$contact.school_year]}</td>
						<td>{$contact.tel}</td>
						<td>{$contact.mail}</td>
					</tr>
					{foreachelse}
					<tr>
						<td colspan="5">{$_CONTENTS_NAME}は見つかりません。</td>
					</tr>
					{/foreach}
				</tbody>
			</table>
			{include file=$template_pagenavi}
