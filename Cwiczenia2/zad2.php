<html>
<body>
<form enctype="multipart/form-data" action="" method="post">
    <label for="num_ppl">Ilość osób</label>
    <select name="num_ppl" required="required">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br>
    <input name="Imie" type="text" required="required" placeholder="Imię"/>
    <input name="Nazwisko" type="text" required="required" placeholder="Nazwisko"/>
    <br>
    <input name="Adres" type="text" required="required" placeholder="Adres"/>
    <input name="E-mail" type="email" required="required" placeholder="E-mail" checked="checked"/>
    <br>
    <label for="Data_s">Data rozpoczęcia</label>
    <input name="Data_s" type="date" required="required"/>
    <label for="Data_e">Data zakończenia</label>
    <input name="Data_e" type="date" required="required"/>
    <br>
    <label for="hour">Czas przyjazdu</label>
    <input name="hour" type="time" required="required" placeholder="Godzina przyjazdu">
    <br>
    <input name="bby_bed" type="checkbox" value="True">
    <label for="bby_bed">Łóżko dla dziecka</label>
    <input name="smoke" type="checkbox" value="True">
    <label for="smoke">Popielniczka</label>
    <input name="ac" type="checkbox" value="True">
    <label for="ac">Klimatyzacja</label>
    <br>
    <input type="submit" name="submit" value="Wyślij" class="btn"/><br/>
</form>
</body>
</html>
<?php

?>