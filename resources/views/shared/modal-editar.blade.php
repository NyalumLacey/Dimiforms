<!-- Modal editar -->
<div class="modal fade" id="modal-editar" tabindex="-1" role="dialog" aria-labelledby="modal-editar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Editar formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <input type="hidden" name="_token" content="{{ csrf_token() }}">
            <div class="form-group" {{ $errors->has('programa') ? 'has-error' : ''}}>
            {!! $errors->first('programa', '<span class="help-block">:message</span>') !!}
              <label for="programa">Selecciona Formulario</label>
                <select class="form-control" id="programa" name="programa" placeholder="Elige un programa">
                  <option value="1">No hay nada, poner aqui</option>
                  <option value="2">ya ves, no hay nada</option>
                </select>
            </div>
          <button type="submit" class="btn-block submit-button">Editar Formulario</button>
        </form>
    </div>
  </div>
</div>