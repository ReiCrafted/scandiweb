eh, tatad varbut es kautko nepareizi saprotu bet man likās šādi:

1. Man ir jātaisa 3 dažādi database katram produktu veidam (sakuma es biju domajis vienu database bet tad sapratu ka generet html bus nesmukaks kods ar vairak IF
(beigās gan izskatās ka tāpat būs daudz IF))

2. Man katru reizi kad ielade product page, man ir jāģenerē html no database datiem, tāpēc es uztaisīju veidu kā katram no tiem
checkboxes kuri tiek genereti product list, ir savs "name" kurs sakas ar pirmo datu tipa burtu (D vds, B ooks, F urniture),
kā 'D-1', es biju domajis visus sitos 'B-3, D-2, D-1' izlikt caur forEach kas izdzestu katru pa vienam no katra datubazes, un pectam refreshotu lapu.

3. Es vēl nesāku taisīt to form priekš produkta pievienošanas, es domaju ka tas nebūs tik grūti izņemot varbūt kā uztaisīt pārbaudi
ievadītajam, es zinu ka ar javascript var salīdzinoši viegli to izdarīt, bet man liekas tas skaitīsies kā šmaukšanās, man bail arī ka
tas check_box.js ir parak complicated un specific un varbūt arī skaitīsies kā šmaukšanās, bet es nesapratu kā uztaisīt 'listener' iekš php.

4. database notes.txt ir mySQL kods datubāzei kā uztaisīt
