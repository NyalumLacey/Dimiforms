<!-- Modal crear -->
<div class="modal fade" id="modal-crear" tabindex="-1" role="dialog" aria-labelledby="modal-crear" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Crear nuevo formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('display_main')}}" method="POST">
          <input type="hidden" name="_token"content="{{ csrf_token() }}">
          <div class="form-group" {{ $errors->has('titulo') ? 'has-error' : ''}}>
            <label for="titulo">Título del formulario</label>
            <input type="titulo" class="form-control" id="titulo" name="titulo" aria-describedby="emailHelp" placeholder="Nombra a tu formulario" value="{{ old('titulo')}}">
            {!! $errors->first('titulo', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group" {{ $errors->has('programa') ? 'has-error' : ''}}>
              <label for="programa">Programa</label>
                <select class="form-control" id="programa" name="programa" placeholder="Elige un programa">
                  <option value="1">Australia - Estudia y Trabaja</option>
                  <option value="2">Canadá - Viaja y Estudia</option>
                  <option value="3">Canadá - Viaja y Estudia</option>
                  <option value="4">Cork - Estudia y Trabaja</option>
                  <option value="5">Dublin - Estudia y Trabaja</option>
                  <option value="6">España - Estadías Profesionales</option>
                  <option value="7">Estados Unidos - Viaja y Trabaja</option>
                  <option value="8">Grecia - Estadías Profesionales</option>
                  <option value="9">México - Estudia Español</option>
                  <option value="10">Otro</option>
                </select>
            </div>
            <button type="submit" class="btn-block submit-button">Crear Formulario</button>
          </form>
    </div>
  </div>
</div>