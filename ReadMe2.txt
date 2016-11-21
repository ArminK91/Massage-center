
Zadaci koji su implementirani:
	a) Validacija polja. 
	b) Dropdown meni na polju "Vise".
	d) Carousel a polju "vise".
	e) Galerija slika na polju Vise/Galerija
	

Zadaci koji nisu implementirani:
	c) Koristeci Ajax poziv za ucitavanje podstranica (iako sam bio napravio to, vec mi je problem bio sa css-om pa je to 
			ruzno izgledalo tako da nisam komitovao)


Objasnjenje:
	Na Login formi validacija nije uradjena cisto iz razloga zato sto trenutno ne znam po kojem pravilu validirati polja za username
	i password. Kada u konacnici budem znao u kojem formatu moraju biti passwordi eventualno username biti ce validirana i ta polja.


	U planu je da se doda jos nekoliko podstranica sa formama za dodavanje drugih informacija, kao i forma za rezervisanje termina, 
	koji bi bili prikazani u tabeli pod na podstranici "informacije".

	Kada odete na Vise/Galerija biti ce te u mogucnosti vidjeti slike iz galerije prelazkom misa preko malih slicica one ce se prikazivati
	ispod, a klikom na neku od malih slicica one ce se otvarati preko cijelog ekrana, te cete biti u mogucnosti zatvoriti ih na dva
 	nacina klikom na dugme X i pritiskom na taster Esc.

Bugovi:

	Prilikom Otvaranja stranice "slider.html" iako postoje slike (Carousel) potrebno je prvo kliknuti na neku od tri taèkice
		da bi se slika otvorila a zatim radi kako treba.
	Rjsenje: Promjena u css fajlu. Pstaviti da je ta jedna slika uvijek aktivna.