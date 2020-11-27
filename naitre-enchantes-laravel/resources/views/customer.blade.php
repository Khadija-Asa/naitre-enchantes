 <div class="content">
  <table>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Adresse</th>
      <th>Bâtiment</th>
      <th>Code postal</th>
      <th>Ville</th>
      <th>Téléphone</th>
      <th>Email</th>
    </tr>
                
    @foreach($customers as $customer)
    <tr>
      <td>
        {{ $customer->surnmane}}
      </td>
      <td>
      {{ $customer->name}}
      </td>
      <td>
        {{ $customer->address}}
      </td>
      <td>
        {{ $customer->entrance}}
      </td>
      <td>
        {{ $customer->post_code}}
      </td>
      <td>
        {{ $customer->city}}
      </td>
      <td>
        {{ $customer->phone_number}}
      </td>
      <td>
        {{ $customer->email}}
      </td>
      

    </tr>
    @endforeach
    </table>    
 <div>