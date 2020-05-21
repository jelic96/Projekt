<?php 
	print '
	<h1>Kontakt</h1>
	<div id="contact">
		<div style="float:right; margin-right:10rem;">
		<p>Grad Dubrovnik<br/>
		Pred Dvorom 1<br/>
		20 000 Dubrovnik<br/>

		Tel: 020 351 800<br/>
		Fax: 020 321 528<br/>
		E-mail: grad@dubrovnik.hr<br/>

		OIB: 21712494719<br/>
		MB: 02583020<br/>
		IBAN: HR35 24070001 809800009</p>
		</div>
		<form action="http://work2.eburza.hr/pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">Ime *</label>
			<input type="text" id="fname" name="firstname" required>
			
			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" required>
				
			<label for="email">E-mail *</label>
			<input type="email" id="email" name="email" required>

			<label for="country">Država</label>
			<select id="country" name="country">
				<option value="">molimo odaberite</option>';
				#Select all countries from database webprog, table countries
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
				print'
				</select>

			<label for="subject">Naslov</label>
			<textarea id="subject" name="subject" style="height:200px"></textarea>

			<input type="submit" value="Pošalji">
		</form>
		<h2 style="margin-top:5rem;">Karta</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.970922897388!2d18.108178515331755!3d42.64077637916897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134c0b3300b5ec45%3A0x1a2134ca67924be1!2sUl.%20Pred%20Dvorom%201%2C%2020000%2C%20Dubrovnik!5e0!3m2!1shr!2shr!4v1590074568364!5m2!1shr!2shr" width="100%" height="450"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>';
?>