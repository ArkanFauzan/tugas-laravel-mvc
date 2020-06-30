<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Challenge</title>
</head>
    <form action="/welcome" method="post">
        @csrf
        <h1>Buat Account Baru</h1>
        <h3>Sign Up Form</h3>

        <p>First Name:</p>
        <input type="text" name="first_name" value=""/>

        <p>Last Name:</p>
        <input type="text" name="last_name" value=""/>

        <p>Gender:</p>
        <input type="radio" name="gender" id="gender_male" value="male"><label for="gender_male">&nbsp;Male</label><br>
        <input type="radio" name="gender" id="gender_female" value="female"><label for="gender_female">&nbsp;Female</label><br>
        <input type="radio" name="gender" id="gender_other" value="other"><label for="gender_other">&nbsp;Other</label><br>

        <p>Nationality:</p>
        <select name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="japanese">Japanese</option>
            <option value="korean">Korean</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" name="language" id="lang_indo" value="bahasa_indonesia"><label for="lang_indo">&nbsp;Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" id="lang_en" value="english"><label for="lang_en">&nbsp;English</label><br>
        <input type="checkbox" name="language" id="lang_other" value="bahasa_indonesia"><label for="lang_other">&nbsp;Other</label><br>

        <p>Bio:</p>
        <textarea name="bio" cols="30" rows="10"></textarea>
        <br>

        <input type="submit" name="submit" value="Sign Up">
    </form>
</html>