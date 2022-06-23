<form action = "/thanks.php" method="post">
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="last_name" name="user_last_name" autofocus>
    </div>
    <div>
        <label for="first_name">Prénom :</label>
        <input type="text" id="first_name" name="user_first_name" >
    </div>
    <div>
        <label for="email">@ :</label>
        <input type="email" id="email" name="user_email" >
    </div>
    <div>
        <label for="tel">Tel :</label>
        <input type="tel" id="tel" name="user_tel" >
    </div>
    <label for="subject">Sujet: </label>
    <select name="subject" id="subject" size="1">
        <option value="need drugs">Need drugs</option>
        <option value="want to win Euromillion">Win Euromillion</option>
        <option value="need to sleep">Need to sleep</option>
    </select>
    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" ></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
