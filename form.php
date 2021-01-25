<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<p>Mit dem folgenden Formular beauftragen Sie über steuermachen.de die Steuererklärung für Privatpersonen. Die Formulare für Geschäftskundenprodukte wie EÜR oder Jahresabschlüsse finden Sie unter <a href="/geschaeftskunden/">Geschäftskunden</a>.</p>
		<p><a href="/order-preparation-of-tax-return/">Click here for english version <img loading="lazy" class="alignnone wp-image-27585" src="https://steuermachen.de/wp-content/uploads/2018/01/english-300x180.jpg" alt="england flag" sizes="(max-width: 33px) 100vw, 33px" width="33" height="20"></a></p>
		<p>* Preise inkl. gesetzlicher MwSt.</p>

		<form action="form.php" method="POST">
			<p>Bitte geben Sie Ihre Daten ein. Die Pflichtangaben sind mit einem * gekennzeichnet.</p>
			<p> Weitere Informationen zum Datenschutz können Sie <a href="/datenschutz/" target="_blank">(hier einsehen)</a>!</p>
			<p>Hiermit beauftrage ich über die Plattform steuermachen.de (GDF)</p>

			<fieldset>
				<legend>Antragssteller_in</legend>
				<div class="form-item">
					<label for="anrede">Anrede*</label>
					<select name="anrede" id="anrede" required>
						<option value="">Keine</option>
						<option value="Herr">Herr</option>
						<option value="Frau">Frau</option>
					</select>
				</div>
				<div class="form-item">
					<label for="vorname">Vorname*</label>
					<input type="text" name="vorname" id="vorname" required>
				</div>
				<div class="form-item">
					<label for="nachname">Nachname*</label>
					<input type="text" name="nachname" id="nachname" required>
				</div>
				<div class="form-item">
					<label for="str">Strasse*</label>
					<input type="text" name="str" id="str" required>
				</div>
				<div class="form-item">
					<label for="hausnr">Hausnummer*</label>
					<input type="text" name="hausnr" id="hausnr" required>
				</div>
				<div class="form-item">
					<label for="plz">PLZ*</label>
					<input type="number" name="plz" id="plz" required>
				</div>
				<div class="form-item">
					<label for="stadt">Ort*</label>
					<input type="text" name="stadt" id="stadt" required>
				</div>
				<div class="form-item">
					<label for="emailad">E-Mail-Adresse*</label>
					<input type="email" name="emailad" id="emailad" required>
				</div>
				<div class="form-item">
					<label for="tel">Telefon*</label>
					<input type="tel" name="tel" id="tel" required>
				</div>
			</fieldset>

			<fieldset>
				<legend>Produkt</legend>
				<div class="form-item">
					<label for="famstand">Familienstand*</label>
					<select name="famstand" id="famstand" required>
						<option value="ledig">ledig</option>
						<option value="verheiratet">verheiratet</option>
					</select>
				</div>
				<div class="form-item">
					<label for="steuerjahr">Steuerjahr*</label>
					<select name="steuerjahr" id="steuerjahr" required>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
					</select>
				</div>
			</fieldset>

			<fieldset>
				<legend>Beauftragung <span>(gestaffelt nach BJEk = Bruttojahreseinkommen)</span></legend>
				<p>Es handelt sich bei den Angaben um die voraussichtlichen Kosten bei durchschnittlichem Aufwand.</p>

				<div class="form-item">
					<label for="auswahl">Steuerjahr*</label>
					<select name="auswahl" id="auswahl" required>
						<option value="Steuerliche Erstberatung für 50 €">Steuerliche Erstberatung für 50 €</option>
						<option value="Steuererklärung für 89,00 € bei bis zu 8000 € BjEk">Steuererklärung für 89,00 € bei bis zu 8000 € BjEk</option>
						<option value="Steuererklärung für 98,00 € bei 8001-16.000 € BjEk">Steuererklärung für 98,00 € bei 8001-16.000 € BjEk</option>
						<option value="Steuererklärung für 122,00 € bei 16.001-25.000 € BjEk">Steuererklärung für 122,00 € bei 16.001-25.000 € BjEk</option>
						<option value="Steuererklärung für 164,00 € bei 25.001-37.000 € BjEk">Steuererklärung für 164,00 € bei 25.001-37.000 € BjEk</option>
						<option value="Steuererklärung für 188,00 € bei 37.001-50.000 € BjEk">Steuererklärung für 188,00 € bei 37.001-50.000 € BjEk</option>
						<option value="Steuererklärung für 244,00 € bei 50.001-80.000 € BjEk">Steuererklärung für 244,00 € bei 50.001-80.000 € BjEk</option>
						<option value="Steuererklärung für 293,00 € bei 80.001-110.000 € BjEk">Steuererklärung für 293,00 € bei 80.001-110.000 € BjEk</option>
						<option value="Steuererklärung für 317,00 € bei 110.001- 150.000 € BjEk">Steuererklärung für 317,00 € bei 110.001- 150.000 € BjEk</option>
						<option value="Steuererklärung für 364,00 € bei 150.001- 200.000 € BjEk">Steuererklärung für 364,00 € bei 150.001- 200.000 € BjEk</option>
						<option value="Steuererklärung für 620,00 € bei 200.001- 250.000 € BjEk">Steuererklärung für 620,00 € bei 200.001- 250.000 € BjEk</option>
					</select>
				</div>
				<a href="#copyright">Hinweis zum Bruttojahreseinkommen (BjEk)**</a>
				<div class="field-item erstberatungsfrage">
					<label for="erstberatungsfrage">Bei Steuerlicher Erstberatung formulieren Sie hier Ihre Frage</label>
					<input type="textarea" id="erstberatungsfrage">
				</div>

				<div class="field-item accept">
					<input type="checkbox" id="schweigepflicht" name="schweigepflicht" value="schweigepflicht" reqired>
					<label for="schweigepflicht">* Ich stimme der Entbindung von der Schweigepflicht zu <a href="/schweigepflichtsentbindung/" target="_blank">(hier einsehen)</a></label>
				</div>
				<div class="field-item accept">
					<input type="checkbox" id="schweigepflicht" name="schweigepflicht" value="schweigepflicht" reqired>
					<label for="agb-etc">* Ich akzeptiere die AGB und die Hinweise zur Datenverarbeitung und das Widerrufsrecht von Steuermachen.de (<a href="/agb/" target="_blank">AGB</a><a href="/hinweise-zur-datenverarbeitung/" target="_blank">Hinweise zur Datenverarbeitung</a><a href="/agb/" target="_blank">Widerrufsrecht</a>)</label>
				</div>

				<img src="https://steuermachen.de/wp-content/uploads/2016/11/TrustedShops_cachet_60x60px.png" alt="steuermachen.de ist registriert bei trustedshops">

				<input type="submit" value="Jetzt kostenpflichtig beauftragen">

				<p>Nach vollständigem Eingang und Prüfung Ihrer Unterlagen erhalten Sie eine Bestätigung, dass die Steuererklärung zu dem genannten Preis erstellt wird. Sollte die Steuererklärung aufgrund des Umfangs oder der Schwierigkeit nicht zu dem voraussichtlich angegebenen Preis erstellt werden können, erhalten Sie umgehend von der Steuerkanzlei ein Alternativangebot.</p>
			</fieldset>
		</form>
	</div>
</body>
</html>
