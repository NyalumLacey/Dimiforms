<!-- Modal -->
<div class="modal fade" id="modal-editar" tabindex="-1" role="dialog" aria-labelledby="modal-crear" aria-hidden="true">
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
          <input type="hidden" name="_token"content="{{ csrf_token() }}">
            <div class="form-group" {{ $errors->has('programa') ? 'has-error' : ''}}>
              <label for="programa">Selecciona Formulario</label>
                <select class="form-control" id="programa" name="programa" placeholder="Elige un programa">
                @foreach(App\models\Formulario::get() as $formulario)
                    <option value='{{ $city->id }}'>{{ $formulario->Titulo }}</option>
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn-block submit-button">Editar Formulario</button>
          </form>
    </div>
  </div>
</div>