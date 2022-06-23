<form action = "/thanks.php" method="post">
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="last_name" name="user_last_name" required autofocus>
    </div>
    <div>
        <label for="first_name">Prénom :</label>
        <input type="text" id="first_name" name="user_first_name" required>
    </div>
    <div>
        <label for="email">@ :</label>
        <input type="email" id="email" name="user_email" required>
    </div>
    <div>
        <label for="tel">Tel :</label>
        <input type="tel" id="tel" name="user_tel" required>
    </div>
    <label for="subject">Sujet: </label>
    <SELECT name="subject" id="subject" size="1">
        <OPTION value="need drugs">Need drugs</OPTION>
        <OPTION value="want to win Euromillion">Win Euromillion</OPTION>
        <OPTION value="need to sleep">Need to sleep</OPTION>
    </SELECT>
    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
