<div class="card">
  <div class="card-header">
    <b>{{ $title }} reserva</b>
  </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm form-group">     
          <label for="" class="required"><b>Título</b></label>
          <br>
          <input type="text" class="form-control"  name="nome" value="{{  old('nome', $reserva->nome) }}"> 
        </div>
    </div>
    <div class="row">
        <div class="col-sm form-group">
          <label for="" class="required" ><b>Data</b></label>
          <br>
          <input type="text" name="data" class="datepicker" value="{{  old('data', $reserva->data) }}">
        </div>
        <div class="col-sm form-group">
          <label for="" class="required"><b>Horário de início </b></label>
          <br>
          <input class="form-control" type="text" name="horario_inicio" value="{{ old('horario_inicio', $reserva->horario_inicio) }}">
          <small class="form-text text-muted">Formato: 9:00 </small>
        </div>        
        <div class="col-sm form-group">
          <label for="" class="required"><b>Horário de fim </b></label>
          <br>
          <input class="form-control" type="text" name="horario_fim" value="{{ old('horario_fim', $reserva->horario_fim) }}">
          <small class="form-text text-muted">Formato: 9:00 </small>
        </div>
        <div class="col-sm form-group">     
          <label for="" class="required"><b>Sala </b></label>
          <br>
          <select class="salas_select" name="sala_id">
              <option value="" selected=""> -- Selecione  --</option>
              @foreach ($salas as $sala)
                  {{-- 1. Situação em que não houve tentativa de submissão --}}
                  @if (old('sala_id') == '')
                    <option value="{{ $sala->id }}" {{ ($reserva->sala_id == $sala->id) ? 'selected' : ''}}>
                      {{ $sala->nome }} - Capacidade: {{ $sala->capacidade }}
                    </option>
                  {{-- 2. Situação em que houve tentativa de submissão, o valor de old prevalece --}}
                  @else
                    <option value="{{ $sala->id }}" {{ (old('sala_id') == $sala->id) ? 'selected' : ''}}>
                      {{ $sala->nome }} - Capacidade: {{ $sala->capacidade }}
                    </option>
                  @endif
              @endforeach
          </select>
        </div>
        <div class="col-sm form-group">
          <label for="" class="required"><b>Cor</b></label>
          <br>
          <input type="color" class="form-control form-control-color" name="cor" value= "{{ empty($reserva->cor) ? $settings->cor : old('cor', $reserva->cor) }}">


        </div>
      </div>
      @if($reserva->id == null)
        <div class="row">
            <div class="col-sm form-group"> 
                <b>Repetição</b>
                <div class="checkFlex">
                  <div class="card">
                      <div class="card-body">
                          <input class="form-check-input me-1" type="radio" value="Não" id="rep_bool_Nao" name="rep_bool" @if (old('rep_bool') == 'Não') checked @endif><label for="rep_bool_Nao">Não</label>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <input class="form-check-input me-1" type="radio" value="Sim" id="rep_bool_Sim" name="rep_bool" @if (old('rep_bool') == 'Sim') checked @endif><label for="rep_bool_Sim">Sim</label>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        @include('reserva.partials.repeat')
      @endif
      <div class="row">
        <div class="col-sm form-group">
          <label for="" class="required"><b>Descrição</b></label>
          <br>
          <textarea name="descricao" class="form-control" rows="3">{{  old('descricao', $reserva->descricao) }}</textarea>
          <br>
        </div>
      </div><br>
    <button type="submit" class="btn btn-success"> Enviar </button>
    </div>
</div>
