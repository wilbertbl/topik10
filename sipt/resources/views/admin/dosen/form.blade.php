<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($dosen->nama) ? $dosen->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <textarea class="form-control" rows="5" name="alamat" type="textarea" id="alamat" >{{ isset($dosen->alamat) ? $dosen->alamat : ''}}</textarea>
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matakuliah') ? 'has-error' : ''}}">
    <label for="matakuliah" class="control-label">{{ 'Matakuliah' }}</label>
    <input class="form-control" name="matakuliah" type="text" id="matakuliah" value="{{ isset($dosen->matakuliah) ? $dosen->matakuliah : ''}}" >
    {!! $errors->first('matakuliah', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
