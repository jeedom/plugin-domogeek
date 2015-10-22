<?php
if (!isConnect('admin')) {
     throw new Exception('{{401 - Accès non autorisé}}');
}
$eqLogics=eqLogic::byType('domogeek');
sendVarToJS('eqType', 'domogeek');
?>
<div class="row row-overflow">
    <div class="col-lg-2">
        <div class="bs-sidebar">
            <ul id="ul_eqLogic" class="nav nav-list bs-sidenav">
                <a class="btn btn-default eqLogicAction" style="width : 100%;margin-top : 5px;margin-bottom: 5px;" data-action="add"><i class="fa fa-plus-circle"></i> {{Ajouter un bloc d'info}}</a>
                <li class="filter" style="margin-bottom: 5px;"><input class="filter form-control input-sm" placeholder="{{Rechercher}}" style="width: 100%"/></li>
                <?php
                foreach ($eqLogics as $eqLogic) {
                    echo '<li class="cursor li_eqLogic" data-eqLogic_id="' . $eqLogic->getId() . '"><a>' . $eqLogic->getHumanName(true,true) . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
     <div class="col-lg-10 col-md-9 col-sm-8 eqLogicThumbnailDisplay" style="border-left: solid 1px #EEE; padding-left: 25px;">
	    <legend>{{Mes blocs d'infos}}
	    </legend>
	    <div class="eqLogicThumbnailContainer">
	      <div class="cursor eqLogicAction" data-action="add" style="background-color : #ffffff; height : 200px;margin-bottom : 10px;padding : 5px;border-radius: 2px;width : 160px;margin-left : 10px;" >
	         <center>
	            <i class="fa fa-plus-circle" style="font-size : 7em;color:#94ca02;"></i>
	        </center>
	        <span style="font-size : 1.1em;position:relative; top : 23px;word-break: break-all;white-space: pre-wrap;word-wrap: break-word;color:#94ca02"><center>Ajouter</center></span>
	    </div>
	    <?php
	foreach ($eqLogics as $eqLogic) {
		echo '<div class="eqLogicDisplayCard cursor" data-eqLogic_id="' . $eqLogic->getId() . '" style="background-color : #ffffff; height : 200px;margin-bottom : 10px;padding : 5px;border-radius: 2px;width : 160px;margin-left : 10px;" >';
		echo "<center>";
		echo '<img src="plugins/domogeek/doc/images/domogeek_icon.png" height="105" width="95" />';
		echo "</center>";
		echo '<span style="font-size : 1.1em;position:relative; top : 15px;word-break: break-all;white-space: pre-wrap;word-wrap: break-word;"><center>' . $eqLogic->getHumanName(true, true) . '</center></span>';
		echo '</div>';
	}
	?>
	</div>
	</div>
    <div class="col-mg-10 eqLogic" style="border-left: solid 1px #EEE; padding-left: 25px;display: none;">
                <form class="form-horizontal">
                    <fieldset>
                         <legend><i class="fa fa-arrow-circle-left eqLogicAction cursor" data-action="returnToThumbnailDisplay"></i> {{Général}}<i class='fa fa-cogs eqLogicAction pull-right cursor expertModeVisible' data-action='configure'></i></legend>
                			<div class="form-group">
                            <label class="col-md-2 control-label">{{Nom du bloc}}</label>
                            <div class="col-md-3">
                                <input type="text" class="eqLogicAttr form-control" data-l1key="id" style="display : none;" />
                                <input type="text" class="eqLogicAttr form-control" data-l1key="name" placeholder="{{Nom de l'équipement}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">{{Objet parent}}</label>
                            <div class="col-md-3">
                                <select id="sel_object" class="eqLogicAttr form-control" data-l1key="object_id">
                                    <option value="">{{Aucun}}</option>
                                    <?php
                                    foreach (object::all() as $object) {
                                        echo '<option value="' . $object->getId() . '">' . $object->getName() . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">{{Activer}}</label>
                            <div class="col-lg-1">
                                <input type="checkbox" class="eqLogicAttr" data-l1key="isEnable" checked/>
                            </div>
                            <label class="col-lg-2 control-label">{{Visible}}</label>
                            <div class="col-lg-1">
                                <input type="checkbox" class="eqLogicAttr" data-l1key="isVisible" checked/>
                            </div>
                        </div>
                        <div class="form-group">
                    	<label class="col-md-2 control-label">{{Département}}</label>
                    	<div class="col-md-3">
                        	<input type="text" id="departement" class="eqLogicAttr configuration form-control" data-l1key="configuration" data-l2key="departement" placeholder="Département"/>
                   		</div>
                		</div>
                		<div class="form-group">
                    	<label class="col-md-2 control-label">{{Ville}}</label>
                    	<div class="col-md-3">
                        	<input type="text" id="ville" class="eqLogicAttr configuration form-control" data-l1key="configuration" data-l2key="ville" placeholder="Ville (sans accent)"/>
                    	</div>
                		</div>
                		<div class="form-group">
                    	<label class="col-md-2 control-label">{{Zone scolaire}}</label>
                    	<div class="col-md-3">
                    		<input type="text" id="zone_scolaire" class="eqLogicAttr configuration form-control" data-l1key="configuration" data-l2key="zone_scolaire" placeholder="Zone scolaire (A,B,C)"/>
                    	</div>
                    	</div>
                    	<div class="form-group">
                    	<label class="col-md-2 control-label">{{Zone EJP EDF (nord|sud|ouest|paca)}}</label>
                    	<div class="col-md-3">
                    		<input type="text" id="zone_ejp" class="eqLogicAttr configuration form-control" data-l1key="configuration" data-l2key="zone_ejp" placeholder="Zone EJP (nord|sud|ouest|paca)"/>
                    	</div>
                    	</div>
                		<div class="form-group">
                    	<label class="col-md-2 control-label">{{Adresse serveur DomoGeek <br>(optionel: uniquement pour une installation locale)}}</label>
                    	<div class="col-md-6">
                    		<input type="text" id="url" class="eqLogicAttr configuration form-control" data-l1key="configuration" data-l2key="url" placeholder=""/>
                    	</div>
                    	
                		</div>
                    </fieldset> 
                </form>


        <legend>Informations</legend>
        <table id="table_cmd" class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th style="width: 50px;">{{ID}}</th>
                    <th style="width: 400px;">{{Nom}}</th>
                    <th style="width: 100px;">{{Paramètres}}</th>
                    <th style="width: 100px;"></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <form class="form-horizontal">
            <fieldset>
                <div class="form-actions">
                    <a class="btn btn-danger eqLogicAction" data-action="remove"><i class="fa fa-minus-circle"></i> {{Supprimer}}</a>
                    <a class="btn btn-success eqLogicAction" data-action="save"><i class="fa fa-check-circle"></i> {{Sauvegarder}}</a>
                </div>
            </fieldset>
        </form>


</div>

<?php include_file('desktop', 'domogeek', 'js', 'domogeek'); ?>
<?php include_file('core', 'plugin.template', 'js'); ?>