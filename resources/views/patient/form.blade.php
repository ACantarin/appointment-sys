<div class="input-field">
  <input type="text" name="name" value="{{ isset($patient->name) ? $patient->name : '' }}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="document" id="js-patient-document" value="{{ isset($patient->document) ? $patient->document : '' }}">
  <label>CPF</label>
</div>

<div class="input-field">
  <input type="text" name="age" id="js-patient-age" value="{{ isset($patient->age) ? $patient->age : '' }}">
  <label>Idade</label>
</div>

<div class="input-field">
  <input type="text" name="email" id="js-patient-email" value="{{ isset($patient->email) ? $patient->email : '' }}">
  <label>E-mail</label>
</div>

<div class="input-field">
  <input type="text" name="zip_code" id="js-patient-zip-code" value="{{ isset($patient->zip_code) ? $patient->zip_code : '' }}">
  <label>CEP</label>
</div>

<div class="input-field">
  <input type="text" name="address" id="js-patient-address" value="{{ isset($patient->address) ? $patient->address : '' }}">
  <label>Endereço</label>
</div>

<div class="input-field">
  <input type="text" name="address_number" id="js-patient-address-number" value="{{ isset($patient->address_number) ? $patient->address_number : '' }}">
  <label>Nº</label>
</div>
