<div class="formulaire">
​
    <form action="{{route('store_company')}}" method="post">
 
      <fieldset>
        <legend>Utilisateur</legend>
    
        <label for="name">Nom :</label>
        <input type="text" id="surname" name="surname" value="">
    
        <div>
          <label for="name">Prenom :</label>
          <input type="text" id="name" name="name" value="">
        </div>
        
        <div>
          <label for="address">Adresse :</label>
          <input type="text" id="address" name="address" value="">
        </div>
    
        <div>
          <label for="entrance">Bâtiment :</label>
          <input type="text" id="entrance" name="entrance" value="">
        </div>
    
        <div>
          <label for="post-code">Code Postal :</label>
          <input type="text" id="post_code" name="post_code" value="">
        </div>
    
        <div>
          <label for="city">Ville :</label>
          <input type="text" id="city" name="city" value="">
        </div>
    
        <div>
          <label for="phone-number">Téléphone:</label>
          <input type="text" id="phone_number" name="phone_number" value="">
        </div>
    
        <label for="email">Votre email</label><input type="email" id="email" placeholder="exemple@email.com" required>
        <div>
          <input type="submit" value="Enregistrer">
        </div>
      </fieldset>
    </form>
</div>