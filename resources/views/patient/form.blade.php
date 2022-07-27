<div class="input-field">
  <input type="text" name="name" value="{{ isset($patient->name) ? $patient->name : '' }}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="document" value="{{ isset($patient->document) ? $patient->document : '' }}">
  <label>CPF</label>
</div>

<div class="input-field">
  <input type="text" name="age" value="{{ isset($patient->age) ? $patient->age : '' }}">
  <label>Idade</label>
</div>

<div class="input-field">
  <input type="text" name="email" value="{{ isset($patient->email) ? $patient->email : '' }}">
  <label>E-mail</label>
</div>

<div class="input-field">
  <input type="text" name="zip_code" value="{{ isset($patient->zip_code) ? $patient->zip_code : '' }}">
  <label>CEP</label>
</div>

<div class="input-field">
  <input type="text" name="address" value="{{ isset($patient->address) ? $patient->address : '' }}">
  <label>Endereço</label>
</div>

<div class="input-field">
  <input type="text" name="address_number" value="{{ isset($patient->address_number) ? $patient->address_number : '' }}">
  <label>Nº</label>
</div>
