<!-- ici Match_create_view -->
<div id="container_create_match">
    <div>
        <a id="retour" class="invisible" href="#top"></a>
    </div>
    <div class="row mw-100 align-items-center p-5">
        <div class="col-xl-3 col-lg-12 pl-5"><h5><i class="fas fa-plus-circle"></i> CREATION D'UN NOUVEAU MATCH</h5>
        </div>
        <div class="col-xl-9 col-lg-12">
            <form method="post" action="<?php echo base_url();?>matchs/create_match">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">DATE ET HEURE </label>
                        </div>
                        <input type="date" name="match_date">
                        <input type="time" name="match_time">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">TEAM HOME</label>
                        </div>
                        <select name="name_home" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choisir...</option>
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
                            <label class="input-group-text" for="inputGroupSelect01">TEAM VISITOR</label>
                        </div>
                        <select  name="name_visitor"class="custom-select" id="inputGroupSelect01">
                            <option selected>Choisir...</option>
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
                            <label class="input-group-text" for="inputGroupSelect01">LOGO HOME</label>
                        </div>
                        <select name="image_home" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choisir...</option>
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
                            <label class="input-group-text" for="inputGroupSelect01">LOGO VISITOR</label>
                        </div>
                        <select name="image_visitor" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choisir...</option>
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
                            <label class="input-group-text" for="inputGroupSelect01">SCORE HOME</label>
                        </div>
                        <input type="number" id="score_home" name="score_home" min="0" max="25">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">SCORE VISITOR</label>
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
