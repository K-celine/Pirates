<!-- ici Match_edit_view -->
<div id="container_edit_match">
    <div>
    <a id="retour" class="invisible" href="#top"></a>
    </div>
    <div class="row align-items-center m-0 mw-100 p-3">
        <div class="col-xl-3 col-lg-12">
            <h5><i class="fas fa-pen"></i> EDITION D'UN MATCH</h5>
        </div>
        <div class="col-xl-9 col-lg-12">
            <form method="post" action="<?php echo base_url();?>matchs/edit_match/<?php echo $one_match->id;?>">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="match_datetime">DATE ET HEURE </label>
                        </div>
                        <input type="datetime-local" id="match_datetime" name="match_datetime" value="<?php echo $one_match->match_datetime;?>" min="2020-01-01T11:00" max="2021-12-31T14:00">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="name_home">TEAM HOME</label>
                        </div>
                        <select name="name_home" class="custom-select" id="name_home">
                            <option value="<?php echo $one_match->name_home;?>" selected><?php echo $one_match->name_home;?></option>
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
                        <select  name="name_visitor" class="custom-select" id="name_visitor">
                            <option value="<?php echo $one_match->name_visitor;?>" selected><?php echo $one_match->name_visitor;?></option>
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
                        <select name="image_home" class="custom-select" id="image_home">
                            <option value="<?php echo $one_match->image_home;?>" selected><?php echo $one_match->name_home;?></option>
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
                        <select name="image_visitor" class="custom-select" id="image_visitor">
                            <option value="<?php echo $one_match->image_visitor;?>" selected><?php echo $one_match->name_visitor;?></option>
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
                        <input value="<?php echo $one_match->score_home;?>" type="number" id="score_home" name="score_home" min="0" max="25">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="score_visitor">SCORE VISITOR</label>
                        </div>
                        <input value="<?php echo $one_match->score_visitor;?>" type="number" id="score_visitor" name="score_visitor" min="0" max="25">
                    </div>
                    <div class="form-group pr-5">
                        <?php $data = array('class' => 'btn btn-warning btn-lg','name' => 'submit','value' => 'EDITER');
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
