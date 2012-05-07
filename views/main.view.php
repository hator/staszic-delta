<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	include_once('header.view.php');
	include_once('sidebar_logged.view.php');
?>		<section id="main">
			<h2>Staszic Delta</h2>
			<h3><- Przeglądaj materiały</h3>
			<p><a href="https://github.com/hator/staszic-delta">Źródła projektu</a></p>
			<p><strong>Staszic delta</strong> to projekt platformy edukacyjnej, która zastępowałaby Dropboxa i Google Docs w przechowywaniu przez klasę ważnych materiałów lekcyjnych, opracowań, analiz i interpretacji, a także powtórzeń przed klasówką.</p>
			<p>Lista obenych możliwości platfomy:</p>
			<ul>
				<li>dodawanie artykułów przez administratora, a wkrótce, przez wszystkich użytkowników</li>
				<li>dostęp do platformy tylko dla zalgowanych - dokumenty pozostają w obiegu klasowym</li>
			</ul>
			<p>Lista osiągnięć technicznych:</p>
			<ul>
				<li>zmiana wyglądu strony (za pomocą żarówki nad menu) - biała skórka pozwala na łatwiejsze czytanie tekstu</li>
				<li>menu w AJAX, dynamicznie rozwiające się</li>
				<li>wykorzystanie wzorca MVC</li>
				<li>bezpieczne formularze</li> 
			</ul>
		</section>
<?php include_once('footer.view.php'); ?>