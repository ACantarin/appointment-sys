<div class="input-field">
  <input type="text" name="name" required>
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="register_number" required>
  <label>CRM</label>
</div>

<div class="input-field">
    <select name="specialty_id">
        @foreach($specialties as $specialty)
            <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
        @endforeach
    </select>
    <label style="font-size: 15px;">Especialidade</label>
</div>
