Inloggen:
username: user
password: user

voor in mysql tegraken: mysql -u root -p
password voor mysql: user
voor in de database te komen: use monkeybussines

uitloggen: exit


Tabellen:

adressen
klanten
personeel
evenementen

voor info over tabel: describe 'tabelnaam'
alle records: select * from 'tabelnaam'

Extra commands:
tabel uitbreiden met nieuw veld: ALTER TABLE 'tabelnaam' ADD 'veldnaam' 'datatype';
toegevoegd veld aanpassen op bestaand record: UPDATE 'tabelnaam' SET 'veldnaam' = 'value1', 'veldnaam' = 'value2', ... WHERE 'condition';
