<div class="form-group {{ $errors->has('studentID') ? 'has-error' : ''}}">
    <label for="studentID" class="control-label">{{ 'Studentid' }}</label>
    <input type="hidden" name="studentID" id="studentID" value="{{ isset($mahasiswa2->studentID) ? $mahasiswa2->studentID : ''}}">
    <p>{{ isset($mahasiswa2->studentID) ? $mahasiswa2->studentID : ''}}</p>
    {!! $errors->first('studentID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input type="hidden" name="nama" id="nama" value="{{ isset($mahasiswa2->nama) ? $mahasiswa2->nama : ''}}">
    <p>{{ isset($mahasiswa2->nama) ? $mahasiswa2->nama : ''}}</p>
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jurusan') ? 'has-error' : ''}}">
    <label for="jurusan" class="control-label">Alamat</label>
    <input type="hidden" name="alamat" id="alamat" value="{{ isset($mahasiswa2->jurusan) ? $mahasiswa2->jurusan : ''}}">
    
    <p>{{ isset($mahasiswa2->jurusan) ? $mahasiswa2->jurusan : ''}}</p>
    {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahunMasuk') ? 'has-error' : ''}}">
    <label for="metodebayar" class="control-label">Metode Bayar</label>
    <input class="form-control" name="metodebayar" type="text" id="metodebayar" value="" >
    {!! $errors->first('tahunMasuk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahunMasuk') ? 'has-error' : ''}}">
    <label for="jumlahbayar" class="control-label">Jumlah Bayar</label>
    <input class="form-control" name="jumlahbayar" type="text" id="jumlahbayar" value="" >
    {!! $errors->first('tahunMasuk', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="Bayar">
</div>
