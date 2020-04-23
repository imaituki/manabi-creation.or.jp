<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{if $_HTML_HEADER.title_original != NULL}{$_HTML_HEADER.title_original}{else}{if $_HTML_HEADER.title != NULL}{$_HTML_HEADER.title} | {/if}{$_HTML_HEADER_DEFAULT.title}{/if}</title>
<meta name="description" content="{if $_HTML_HEADER.description_original != NULL}{$_HTML_HEADER.description_original|escape|strip:""}{else}{if $_HTML_HEADER.description != NULL}{$_HTML_HEADER.description|escape|strip:""}{/if}{$_HTML_HEADER_DEFAULT.description|escape|strip:""}{/if}">
<meta name="keywords" content="{if $_HTML_HEADER.keyword_original != NULL}{$_HTML_HEADER.keyword_original}{else}{if $_HTML_HEADER.keyword != NULL}{$_HTML_HEADER.keyword},{/if}{$_HTML_HEADER_DEFAULT.keyword}{/if}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap">
