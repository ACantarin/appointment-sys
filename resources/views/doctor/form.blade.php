<div class="input-field">
  <input type="text" name="name" value="{{ isset($doctor->name) ? $doctor->name : '' }}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="register_number" value="{{ isset($doctor->register_number) ? $doctor->register_number : '' }}">
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
