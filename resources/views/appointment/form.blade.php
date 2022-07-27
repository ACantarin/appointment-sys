<div class="input-field">
  <input type="date" name="date" value="">
  <label>Data da Consulta</label>
</div>

<div class="input-field">
    <select name="patient_id">
        @foreach($patients as $patient)
            <option value="{{ $patient->id }}">{{ $patient->name }}</option>
        @endforeach
    </select>
    <label style="font-size: 15px;">Paciente</label>
</div>

<div class="input-field">
    <select name="doctor_id">
        @foreach($doctors as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialty()->name }}</option>
        @endforeach
    </select>
    <label style="font-size: 15px;">Médico</label>
</div>