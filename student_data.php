
<?php 
 # books
$student_inventory = [
	'INSERT INTO inventory VALUES (
	"AA01-005",
	"RICH DAD POOR DAD",
	"This marvellous novel explains the difference in finational wealth",
	"Robert T.KIYOSAKI",
	"aa01-005.jpg",
	1001,
	9.84,
	"Colchester",
	5,
	2 );',
	'INSERT INTO inventory VALUES (
	"AA01-006",
	"THE 7 HABITS OF HIGHLY EFFECTIVE PEOPLE",
	"Powerful Lessons In Personal Change",
	"Stephen R. Covey",
	"aa01-006.jpg",
	1001,
	5.53,
	"Southend",
	0,
	10 );',
	
    #music 
	
	'INSERT INTO inventory VALUES (
	"AA01-011",
	"Soul Seduction",
	"The remedy of the collection of souls",
	"Barry White",
	"aa01-011.jpg",
	1002,
	10.81,
	"Colchester",
	2,
	0 );',
	
	'INSERT INTO inventory VALUES (
	"AA01-012",
	"THE MISEDUCATION OF LAURYN HILL",
	"The brillance of sister-hood reflecting on the cold world",
	"Lauryn Hill",
	"aa01-012.jpg",
	1002,
	6.99,
	"Southend",
	10,
	8 );',
	
	
	#games
	
	'INSERT INTO inventory VALUES (
	"AA01-017",
	"NBA 2K17",
	"The excitement from the roar of the crowd wouldnt stop the players on the court",
	"Lauryn Hill",
	"aa01-017.jpg",
	1003,
	50.45,
	"Colchester",
	7,
	5 );',
	
	'INSERT INTO inventory VALUES (
	"AA01-018",
	"MADDEN 18",
	"Move like gods on the field",
	"ESRG LIMITED",
	"aa01-018.jpg",
	1003,
	59.85,
	"Southend",
	5,
	9 );',
	
	#cds
	
	'INSERT INTO inventory VALUES (
	"AA01-023",
	"Vikings",
	"THE WORLD WILL BE OURS",
	"History Limted",
	"aa01-023.jpg",
	1004,
	30.97,
	"Southend",
	3,
	10 );',
	
	'INSERT INTO inventory VALUES (
	"AA01-024",
	"The Wire",
	"The Game Remains the same",
	"HBO Limited",
	"aa01-024.jpg",
	1004,
	30.97,
	"Southend",
	3,
	10 );',
	

];

# The above adds two hypothetical books to your database. You need to change
# this so that it adds your two books, two CDs two DCDs and two games.
#
# Not that each INSERT is a single-quote delimited string, ends in a semi-colon
# and has commas between the arguments.

?>