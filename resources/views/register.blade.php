<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration at Automenziken</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('website/registeration/css/opensans-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('website/registeration/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('website/registeration/css/style.css')}}"/>
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" >
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Pers??nliche Angaben</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Mieter </h3>
									<p> </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Vorname</legend>
											<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Vorname" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Familienname</legend>
											<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Familienname" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Strasse / Nr </legend>
											<input type="text" class="form-control" id="street_no" name="street_no" placeholder="Vorname" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>PLZ / Ort </legend>
											<input type="text" class="form-control" id="address" name="address" placeholder="Familienname" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Natel</legend>
											<input type="text" name="natel" id="natel" class="form-control"   required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Telefon P</legend>
											<input type="text" name="phone" id="phone" class="form-control"   required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>deine E-Mail</legend>
											<input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Beispiel@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Fahrerausweis Nr </legend>
											<input type="text" class="form-control" id="license_num" name="license_num" placeholder="+1 888-999-7777" required>
										</fieldset>
									</div>
								</div>

							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Mietfahrzeug</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Mietfahrzeug </h3>
									<p>Bitte geben Sie Ihre Informationen ein und fahren Sie mit dem n??chsten Schritt fort, damit wir Ihre Konten erstellen k??nnen.</p>
								</div>
								<div class="form-row">
									<div class="form-holder ">
										<legend>Fahrerausweis Nr </legend>
										<div class="col-xl-2 col-lg-4 col-md-6 px-2">
											<select class="custom-select px-4 mb-3" style="height: 50px;">
												<option selected>Pickup Location</option>
												<option value="1">Location 1</option>
												<option value="2">Location 2</option>
												<option value="3">Location 3</option>
											</select>
										</div>
									</div>
									<div class="form-holder ">
										<fieldset>
											<legend>Fahrerausweis Nr </legend>
											<input type="text" class="form-control" id="license_plate" name="license_plate" placeholder="+1 888-999-7777" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Reiseland / Ort: Schweiz </legend>
											<input type="text" class="form-control" id="target" name="target" placeholder="target" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Km ??? Stand bei Abholung  </legend>
											<input type="text" class="form-control" id="status" name="status" placeholder="" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Km ??? Stand bei R??ckgabe  </legend>
											<input type="text" class="form-control" id="status_res" name="status_res" placeholder="" required>
										</fieldset>
									</div>
								</div>
								<h4>Mietdauer:</h4>
								<div class="form-row">

									<div class="form-holder">
										<fieldset>
											<legend> vom   </legend>
											<input type="text" class="form-control" id="from" name="from" placeholder="" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>bis   </legend>
											<input type="text" class="form-control" id="to" name="to" placeholder="" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Tage   </legend>
											<input type="date" class="form-control" id="date" name="date" placeholder="" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend> Auslieferung des Fahrzeugs in   </legend>
											<input type="text" class="form-control" id="city_deliver" name="city_deliver" placeholder="city_deliver" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Menziken AG   </legend>
											<input type="text" class="form-control" id="to" name="to" placeholder="Menziken AG" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset style="">
											<legend>Um     </legend>
											<input type="date" class="form-control" id="date_deliver" name="date_deliver" placeholder="date deliver" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>  Uhr   </legend>
											<input type="time" class="form-control" id="time_deliver" name="time_deliver" placeholder="time deliver" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend> R??ckgabe des Fahrzeugs in  </legend>
											<input type="text" class="form-control" id="city_rec" name="city_rec" placeholder="city receive" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Menziken AG   </legend>
											<input type="text" class="form-control" id="to" name="to" placeholder="Menziken AG" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset style="">
											<legend>Um     </legend>
											<input type="date" class="form-control" id="date_rec" name="date_rec" placeholder="date deliver" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>  Uhr   </legend>
											<input type="time" class="form-control" id="time_rec" name="time_rec" placeholder="time deliver" required>
										</fieldset>
									</div>
								</div>

							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Total Mietkosten</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Total Mietkosten</h3>
									<p>Bitte geben Sie Ihre Informationen ein und fahren Sie mit dem n??chsten Schritt fort, damit wir Ihre Konten erstellen k??nnen.</p>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset style="">
											<legend>Total Mietkosten     </legend>
											<input type="number" class="form-control" id="total_cost" name="total_cost" placeholder="total cost" >
										</fieldset>
									</div>
								</div>

                                    <div class="form-holder form-holder-2">

                                        <input type="checkbox" class="form-control" id="policy" name="policy" placeholder="" >
{{--                                        <button type="button" id="myBtn">Open Modal</button>--}}
                                        <a onclick="dot();return false;" href="#total_cost" id="myBtn" class="btn">Accept the policy</a>

                                    </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">


                                            <input type="submit" class="form-control" id="total_cost" name="total_cost" placeholder="total cost" value="Go">

                                    </div>
                                </div>
							</div>
			            </section>

		        	</div>

		        </form>


			</div>
		</div>
	</div>


    <script src="{{asset('website/registeration/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('website/registeration/js/jquery.steps.js')}}"></script>
	<script src="{{asset('website/registeration/js/main.js')}}"></script>

    <!-- Trigger/Open The Modal -->
{{--    <button id="myBtn">Open Modal</button>--}}

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>
                1. Fahrzeug??bernahme
                Der Mieter ??bernimmt das Fahrzeug in betriebssicherem, sauberem Zustand.
            </p>
            <p>
                2. Fahrzeugr??ckgabe
                F??r Verunreinigungen oder unsauberen R??ckgabe wird eine pauschale Entsch??digung von 30.-Fr verrechnet. Der Mietvertrag ist immer im Fahrzeug mitzuf??hren und bei R??ckgabe abzugeben.
            </p>
            <p>
                3. Verl??ngerung der Mietdauer
                Eine Verl??ngerung des Mietverh??ltnisses ist nur mit der schriftlichen Zustimmung (Whatsapp/ Email) dem Vermieter vor Beendigung des laufenden Mietverh??ltnisses m??glich. Der Vermiete4 kann ohne Angaben von Gr??nden die Verl??ngerung verweigern.
            </p>
            <p>
                4. Zahlungsweise
                Barzahlung f??r die gesamte Mietdauer. Kartenzahlung m??glich, eine pauschale von 5.-Fr wird dazugerechnet f??r administrativen Aufwand. Bei Twintzahlung wird ebenfalls ein pauschale von 5.-Fr verrechnet.
            </p>
            <p>
                5. Unterhalt / Reparaturen
                Der Mieter muss das Mietobjekt sorgf??ltig gebrauchen und die Niveaust??nde f??r ??l und Wasser sowie den Reifendruck regelm??ssig ??berpr??fen. M??ngel, die er nicht selber beseitigen muss, hat der Mieter umgehend dem Vermieter zu melden und sein Weisungen bez??glich Mangelbehebung zu befolgen. F??r Auslagen im Zusammenhang mit M??ngeln (wie Motoren??l, Ersatzteile, Reparaturkosten) ist vorg??ngig eine Kostengutsprache der Vermieter notwendig. Im Rahmen einer Kostengutsprache get??tigte Auslagen werden dem Mieter bei R??ckgabe der Mietsache auf Vorlage der entsprechenden Quittungen erstattet. Reparaturen in Eigenregie des Mieters sind untersagt.
            </p>
            <p>
                6. Verhalten bei Unfall und besonderen Ereignissen
                Bei Ereignissen wie Unfall, Diebstahl (Einbruch-Diebstahl/Veruntreuung usw.), Verlust, Brand, Wild- oder sonstigem Schaden muss der Mieter sofort die Polizei verst??ndigen und einen Polizeibericht erstellen lassen. Dies gilt auch bei selbstverschuldeten Unf??llen ohne Mitwirkung Dritter. Gegnerische Anspr??che d??rfen nicht anerkannt werden. Bei Diebstahl, Verlust oder Veruntreuung des Fahrzeuges ist nebst der Polizei auch der Vermieter sofort zu kontaktieren. Der Mieter hat bei allen erw??hnten Ereignissen, selbst bei geringf??gigen Sch??den, unverz??glich einen ausf??hrlichen schriftlichen Bericht unter Vorlage einer Skizze zu erstellen. Bei Unfall muss der Bericht insbesondere Namen und Anschrift der beteiligten Personen und etwaiger Zeugen sowie die amtlichen Kennzeichen der beteiligten Fahrzeuge enthalten. Bei Diebstahl sind die Fahrzeugschl??ssel, ein Bericht ??ber den Hergang des Diebstahls
            </p>
            <p>
                7. Verbotene Nutzungen / Einreisebeschr??nkungen / Ausreisebeschr??nkungen
                I.        Dem Mieter ist untersagt, das Fahrzeug zu verwenden:
                a.       zur Teilnahme an motorsportlichen Veranstaltungen, Fahrzeugtests und zur Fahrschulung.
                b.       f??r den Transport von Waren oder Personen gegen Entgelt.
                c.       um ein anderes Fahrzeug zu ziehen, zu schleppen oder anderweitig zu bewegen
                d.       in ??berladenem Zustand, d.h. mit einer Personenzahl bzw. einer Nutzlast, welche die im Fahrzeugausweis angegebenen Werte ??bersteigt.
                e.       zur Bef??rderung entz??ndlicher, explosiver, giftiger oder gef??hrlicher Stoffe.
                Seite 2
                f.        zur Begehung von Zollvergehen und sonstigen Straftaten, auch wenn diese nur nach dem Recht des Tatortes mit Strafe bedroht sind.
                g.       zur Weitervermietung.
            </p>
            <p>
                08. Haftung des Mieters
                a.       Der Mieter haftet f??r alle Sch??den (insbesondere Reifen- und Glassch??den), welcher der Vermieterin durch gesetz- oder vertragswidriges oder unsorgf??ltiges Handeln des Mieters oder seiner Hilfspersonen entsteht.
                b.       Im ??brigen haftet der Mieter insbesondere f??r alle M??ngel bzw. Besch??digungen des Mietobjekts, welche er zu verantworten hat. Dies umfasst namentlich, aber nicht ausschliesslich Sch??den, die entstehen: durch Betankung mit dem falschen Kraftstoff, Nichtbeachtung der Maximalh??hen bei Garageneinfahrten, Unterf??hrungen u.??, unsorgf??ltiger Handhabung des Fahrzeuginnern (insbesondere Zigarettenl??cher, Risse und Flecken auf Polster und Teppichen)
                c.       Der Umfang der Haftung beinhaltet die Reparaturkosten bzw. den Fahrzeugwert bei Totalschaden sowie den weiteren Schaden, wie beispielsweise Abschleppkosten, Kosten einer Expertise, Wertminderung des Mietobjekts, entgangene Mieteinnahmen, Anwaltskosten, Administrationsgeb??hren.
                d.      Soweit im Zusammenhang mit der Nutzung des Fahrzeugs Bussgelder, Strafen oder vom Mieter nichtbezahlte Geb??hren (z.B. Autobahngeb??hren/Autobahnvignetten) anfallen, f??r welche die Vermieterin in Anspruch genommen wird, hat der Mieter den entsprechenden Betrag zuz??glich Administrationsgeb??hren der Vermieterin zu ersetzen. Ausgenommen sind Bussgelder, Strafen und Geb??hren, welche wegen Verschuldens der Vermieterin anfallen. Bei Vergehen gegen das Strassenverkehrsgesetz oder bei Nichtentrichtung von offiziellen Geb??hren im In- und Ausland erm??chtigt der Mieter die Vermieterin zur Herausgabe der Vertragsdaten an alle beh??rdlichen Amtsstellen (Polizei, Anwaltschaften, Strassenverkehrs??mter usw.) und an die von beh??rdlichen Amtsstellen beauftragten privaten Firmen (z.B. Autobahnkonzession??re oder Inkassob??ros) in der Schweiz und im Ausland. Ebenfalls werden zus??tzliche Geb??hren von 20.-Fr in Rechnung gestellt f??r Administrativen Aufwand bei Bussen.
            </p>
            <p>
                09. Geb??hren Selbstbehalt
                a.       als Sch??den, deren Reparaturkosten weniger als CHF 1000 (tausend schweizer franken) betragen und
            </p>
            <p>
                10. Haftung der Vemieterin
                Die Vermieterin haftet f??r Sch??den des Mieters, welche durch einen Mangel des Fahrzeuges entstanden sind, nach den Voraussetzungen von Art. 259a und 259e OR, soweit die Haftung nicht durch eine Individualabrede anders geregelt wird. Im ??brigen wird jede vertragliche und ausservertragliche Haftung der Vermieterin gegen??ber dem Mieter und allf??lligen weiteren aus dem Vertrag berechtigten Personen ausgeschlossen, soweit die Vermieterin den Schaden nicht absichtlich oder grobfahrl??ssig verursacht hat. Die Vermieterin haftet nicht f??r Schaden, die durch ihre Hilfspersonen verursacht wurde.
            </p>
            <p>
                11. Anwendbares Recht / Gerichtsstand
                Dieser Vertrag untersteht schweizerischem Recht. Der Gerichtsstand ist Unterklum.

            </p>
        </div>

    </div>
<script>
    function dot()
        {
            modal.style.display = "block";
        }
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    // btn.onclick = function() {
    //     modal.style.display = "block";
    // }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>




</body>
</html>
