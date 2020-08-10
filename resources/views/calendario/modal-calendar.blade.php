<!-- Modal -->
<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="message"></div>
        
        <form id="formEvent">
          <div class="form-group">
            <label for="type">Tipo de Agendamento</label>
            <select class="form-control form-control-lg form" id="type">
              <option>Consulta</option>
              <option>Exame</option>
            </select>
          </div>
          <div class="form-group">
            <label for="title">Nome completo</label>
            <input type="text" name="title" value="{{ Auth::user()->name}}" class="form-control form" id="title">
            <input type="hidden" name="id">
          </div>
          <div class="form-group">
            <label for="phone">Telefone para Contato</label>
            <input type="text" name="phone" class="form-control form phone" id="phone"> 
          </div>
          <div class="form-group">
            <label for="insurance">Convênio Médico</label>
            <select class="form-control form-control-lg form" id="insurance">
              <option>Particular</option>
              <option>Público</option>
            </select> 
          </div>
          <div class="form-group">
            <label for="start">Horário Inícial</label>
            <input type="text" name="start" class="form-control form" id="start">
          </div>
          <div class="form-group">
            <label for="end">Horário Final</label>
            <input type="text" name="end" class="form-control form" id="end">
          </div>
          <div class="form-group">
            <label for="color">Cor</label>
            <input type="color" name="color" class="form-control form" id="color"> 
          </div>
          <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control form" id="description" cols="40" rows="4"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger deleteEvent">Excuir</button>
        <button type="button" class="btn btn-primary saveEvent">Salvar</button>
      </div>
    </div>
  </div>
</div>