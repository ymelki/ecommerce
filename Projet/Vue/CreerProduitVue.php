<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Ajouter un produit</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="/produits?action=save">
                    <fieldset>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-tag"></i>
                                </span>
                                <input class="form-control" placeholder="Nom du produit"
                                       name="nomProduit" type="text" maxlength="45" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-usd"></i>
                                </span>
                                <input class="form-control" placeholder="Prix"
                                       name="prixProduit" type="number" step="0.01" required>
                            </div>

                            <label for="pet-select">Choose a pet:</label>

                    <select name="categorie" id="pet-select">
                        <option value="">--Please choose an option--</option>
                      <?php foreach ($categories as $categorie){ ?>
                          <option value="<?=$categorie['id']?>"><?=$categorie['nom']?></option>

                      <?php } ?>
                    </select>

                        </div>
                        <input class="btn btn-lg btn-success btn-block"
                               type="submit" value="Ajouter le produit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
