<!-- ici Match_create_view -->
<div id="container_create_match">
    <div>
        <a id="retour" class="invisible" href="#top"></a>
    </div>
    <div class="row align-items-center m-0 mw-100 p-3">
        <div class="col-xl-3 col-lg-12"><h5><i class="fas fa-plus-circle"></i> CREATION D'UN NOUVEAU MATCH</h5>
        </div>
        <div class="col-xl-9 col-lg-12">
            <form method="post" action="<?php echo base_url();?>matchs/create_match">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="match_date">DATE ET HEURE </label>
                        </div>
                        <!--j'ai mis un required pattern et un placeholder sur cet input car Safari ne reconnait pas le type date (pour la compréhension du user lors du remplissage du formulaire)-->
                        <input id="match_date" type="date" name="match_date" required pattern='[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])' placeholder='AAAA-MM-JJ'>
                        <!--j'ai mis un required pattern et un placeholder sur cet input car Safari ne reconnait pas le type date (pour la compréhension du user lors du remplissage du formulaire)-->
                        <input type="time" name="match_time" required pattern='([01]?[0-9]|2[0-3]):[0-5][0-9]' placeholder='HH:MM'>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="name_home">TEAM HOME</label>
                        </div>
                        <select name="name_home" id="name_home" class="custom-select" required>
                            <option value="" disabled selected>Choisir...</option>
                            <option value="Pirates">Pirates</option>
                            <option value="Barracudas">Barracudas</option>
                            <option value="BlueJays">BlueJays</option>
                            <option value="Cards">Cards</option>
                            <option value="Renards">Renards</option>
                            <option value="Tigers">Tigers</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="name_visitor">TEAM VISITOR</label>
                        </div>
                        <select name="name_visitor" id="name_visitor" class="custom-select" required>
                            <option value="" disabled selected>Choisir...</option>
                            <option value="Pirates">Pirates</option>
                            <option value="Barracudas">Barracudas</option>
                            <option value="BlueJays">BlueJays</option>
                            <option value="Cards">Cards</option>
                            <option value="Renards">Renards</option>
                            <option value="Tigers">Tigers</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="image_home">LOGO HOME</label>
                        </div>
                        <select name="image_home" id="image_home" class="custom-select" required>
                            <option value="" disabled selected>Choisir...</option>
                            <option value="assets/images/home/logos/Pirates.png">Pirates</option>
                            <option value="assets/images/home/logos/Barracudas.png">Barracudas</option>
                            <option value="assets/images/home/logos/BlueJays.png">BlueJays</option>
                            <option value="assets/images/home/logos/Cards.png">Cards</option>
                            <option value="assets/images/home/logos/Renards.png">Renards</option>
                            <option value="assets/images/home/logos/Tigers.png">Tigers</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="image_visitor">LOGO VISITOR</label>
                        </div>
                        <select name="image_visitor" id="image_visitor" class="custom-select" required>
                            <option value="" disabled selected>Choisir...</option>
                            <option value="assets/images/home/logos/Pirates.png">Pirates</option>
                            <option value="assets/images/home/logos/Barracudas.png">Barracudas</option>
                            <option value="assets/images/home/logos/BlueJays.png">BlueJays</option>
                            <option value="assets/images/home/logos/Cards.png">Cards</option>
                            <option value="assets/images/home/logos/Renards.png">Renards</option>
                            <option value="assets/images/home/logos/Tigers.png">Tigers</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="score_home">SCORE HOME</label>
                        </div>
                        <input type="number" id="score_home" name="score_home" min="0" max="25">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="score_visitor">SCORE VISITOR</label>
                        </div>
                        <input type="number" id="score_visitor" name="score_visitor" min="0" max="25">
                    </div>
                    <div class="form-group pr-5">
                        <?php $data = array('class' => 'btn btn-warning btn-lg','name' => 'submit','value' => 'VALIDER');
                        echo form_submit($data); ?>
                    </div>
                </div>
            </form>
            <div>
                <a class="btn btn-danger btn-lg" href="<?php echo base_url()?>users/admin">ANNULER</a>
            </div>  
        </div>
    </div>
</div>
