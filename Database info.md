**Inloggen:**

username: user

password: user

voor in mysql tegraken: mysql -u root -p

password voor mysql: user

voor in de database te komen: use monkeybussines

**uitloggen:** 

exit

**Tabellen:**

adressen
klanten
prsoneel
evenementen

voor info over tabel: *describe 'tabelnaam'*

alle records: *select * from 'tabelnaam'*

**Extra commands:**
tabel uitbreiden met nieuw veld: *ALTER TABLE 'tabelnaam' ADD 'veldnaam' 'datatype';*

toegevoegd veld aanpassen op bestaand record: *UPDATE 'tabelnaam' SET 'veldnaam' = 'value1', 'veldnaam' = 'value2', ... WHERE 'condition';*

toegevoegd veld aanpassen op bestaand record: *UPDATE 'tabelnaam' SET 'veldnaam' = 'value1', 'veldnaam' = 'value2', ... WHERE 'condition';*

Database inmporten: 
Maak in linux een nieuwe file aan (.sql), kopieer hier de file "database" in. save de file.

mysql -u root -p lbry < dump-lbry.sql

~ mysql -u root -p

mysql> create database monkeybussines

mysql> exit

~ mysql -u root -p monkeybussines < database.sql(dit is de file die je net hebt aangemaakt)

password: user

~ mysql -u root -p

mysql> use monkeybussines

mysql> select * from klanten
