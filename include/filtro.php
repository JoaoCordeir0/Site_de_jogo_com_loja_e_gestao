<div class="modal fade" id="filtro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Filtro de busca</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../loja.php" method="POST">
          <label style="margin-bottom:10px;">Filtrar por pre&ccedil;o:</label>
          <div class="col-5">
            <label class="labelFiltro">De:</label>
            <input id="input1" class="inputFiltro" type="number" name="preco1" placeholder="Exemplo: R$: 10,00">
          </div>
          <div class="col-5">
            <label class="labelFiltro">At&eacute;:</label>
            <input class="inputFiltro" type="number" name="preco2" placeholder="Exemplo: R$: 90,00">
          </div>
          <div class="col">
            <select name="cor" id="cor" class="form-select" aria-label="Default select example">
              <option selected>Selecione uma cor</option>
              <option value="laranja">Laranja</option>
              <option value="verde">Verde</option>
              <option value="roxo">Roxo</option>
              <option value="outros">Outros</option>
            </select>
          </div>
          <button style="float:right; margin-top:10px;" class="btn btn-primary" type="submit">Filtrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
