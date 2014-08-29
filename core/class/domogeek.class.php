<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

/* * ***************************Includes********************************* */
require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';

class domogeek extends eqLogic {
    /*     * *************************Attributs****************************** */


    /*     * ***********************Methode static*************************** */
    

    public static function pull($_options) {
        foreach (eqLogic::byType('domogeek') as $domogeek) {
				
			$domogeek->getInformations();
			
		}
         
    }


    /*     * *********************Methode d'instance************************* */
    
     public function postInsert() {
    	
        $domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Férié', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'ferie');
        $domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();

        $domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Week-End', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'weekend');
        $domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
        
        $domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Vacances scolaires', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'vacances_scolaires');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();

        $domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Durée jour', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'duree_jour');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(1);
        $domogeekCmd->save();        

        $domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Levée du soleil', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'sunrise');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Zenith', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'zenith');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Couché du soleil', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'sunset');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Jour Tempo EDF', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'tempo_today');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Demain Tempo EDF', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'tempo_tomorrow');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Vigilance inondation', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'vigilance_inondation');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Vigilance météo', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'vigilance_meteo');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
        
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Type de vigilance', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'vigilance_type');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();

    }

    /*     * **********************Getteur Setteur*************************** */
		public function postUpdate() {
        foreach (eqLogic::byType('domogeek') as $domogeek) {

            	$domogeek->getInformations();
			
		}
    }
    
    public function getInformations() {
    	log::add('domogeek', 'info', 'Récupération des données', 'config');
        
        
        $holidayall=json_decode(file_get_contents("http://api.domogeek.fr/holidayall/".$this->getConfiguration('zone_scolaire')."/now"),true);
		$sun=json_decode(file_get_contents("http://api.domogeek.fr/sun/".$this->getConfiguration('ville')."/all/now"),true);
		$tempo=json_decode(file_get_contents("http://api.domogeek.fr/tempoedf/now/json"),true);
		$tempo_tomorrow=json_decode(file_get_contents("http://api.domogeek.fr/tempoedf/tomorrow/json"),true);
		$vigilance=json_decode(file_get_contents("http://api.domogeek.fr/vigilance/".$this->getConfiguration('departement')."/all"),true);
		
       
		foreach ($this->getCmd() as $cmd) {
				if($cmd->getConfiguration('data')=="ferie"){
					if($holidayall['holiday']=="False"){
						$cmd->event("Non");
					}else{
						$cmd->event($holidayall['holiday']);
					}
				}elseif($cmd->getConfiguration('data')=="weekend"){
					if($holidayall['weekend']=="False"){
						$cmd->event("Non");
					}else{
						$cmd->event($holidayall['weekend']);
					}
				}elseif($cmd->getConfiguration('data')=="vacances_scolaires"){
					if($holidayall['schoolholiday']=="False"){
						$cmd->event("Non");
					}else{
						$cmd->event($holidayall['schoolholiday']);
					}
				}elseif($cmd->getConfiguration('data')=="duree_jour"){
					$cmd->event($sun['dayduration']);
				}elseif($cmd->getConfiguration('data')=="sunset"){
					$cmd->event($sun['sunset']);
				}elseif($cmd->getConfiguration('data')=="zenith"){
					$cmd->event($sun['zenith']);
				}elseif($cmd->getConfiguration('data')=="sunrise"){
					$cmd->event($sun['sunrise']);
				}elseif($cmd->getConfiguration('data')=="tempo_today"){
					$cmd->event($tempo['tempocolor']);
				}elseif($cmd->getConfiguration('data')=="tempo_tomorrow"){
					$cmd->event($tempo_tomorrow['tempocolor']);
				}elseif($cmd->getConfiguration('data')=="vigilance_inondation"){
					$cmd->event($vigilance['vigilanceflood']);
				}elseif($cmd->getConfiguration('data')=="vigilance_meteo"){
					$cmd->event($vigilance['vigilancecolor']);
				}elseif($cmd->getConfiguration('data')=="vigilance_type"){
					$cmd->event($vigilance['vigilancerisk']);
				}
				
			
		}
        return ;
    }
}

class domogeekCmd extends cmd {
    /*     * *************************Attributs****************************** */
	


    /*     * ***********************Methode static*************************** */

    /*     * *********************Methode d'instance************************* */
	public function execute($_options = array()) {
		if($cmd->getConfiguration('data')=="ferie"){
			$holidayall=json_decode(file_get_contents("http://api.domogeek.fr/holidayall/".$this->getConfiguration('zone_scolaire')."/now"),true);
			if($holidayall['holiday']=="False"){
				return "Non";
			}else{
				return $holidayall['holiday'];
			}
		}elseif($cmd->getConfiguration('data')=="weekend"){
			$holidayall=json_decode(file_get_contents("http://api.domogeek.fr/holidayall/".$this->getConfiguration('zone_scolaire')."/now"),true);
			if($holidayall['weekend']=="False"){
				return "Non";
			}else{
				return $holidayall['weekend'];
			}
		}elseif($cmd->getConfiguration('data')=="vacances_scolaires"){
			$holidayall=json_decode(file_get_contents("http://api.domogeek.fr/holidayall/".$this->getConfiguration('zone_scolaire')."/now"),true);	
			if($holidayall['schoolholiday']=="False"){
				return "Non";
			}else{
				return $holidayall['schoolholiday'];
			}
		}elseif($cmd->getConfiguration('data')=="duree_jour"){
			$sun=json_decode(file_get_contents("http://api.domogeek.fr/sun/".$this->getConfiguration('ville')."/all/now"),true);
			return $sun['dayduration'];
		}elseif($cmd->getConfiguration('data')=="sunset"){
			$sun=json_decode(file_get_contents("http://api.domogeek.fr/sun/".$this->getConfiguration('ville')."/all/now"),true);
			return $sun['sunset'];
		}elseif($cmd->getConfiguration('data')=="zenith"){
			$sun=json_decode(file_get_contents("http://api.domogeek.fr/sun/".$this->getConfiguration('ville')."/all/now"),true);
			return $sun['zenith'];
		}elseif($cmd->getConfiguration('data')=="sunrise"){
			$sun=json_decode(file_get_contents("http://api.domogeek.fr/sun/".$this->getConfiguration('ville')."/all/now"),true);
			return $sun['sunrise'];
		}elseif($cmd->getConfiguration('data')=="tempo_today"){
			$tempo=json_decode(file_get_contents("http://api.domogeek.fr/tempoedf/now/json"),true);
			return $tempo['tempocolor'];
		}elseif($cmd->getConfiguration('data')=="tempo_tomorrow"){
			$tempo_tomorrow=json_decode(file_get_contents("http://api.domogeek.fr/tempoedf/tomorrow/json"),true);
			return $tempo_tomorrow['tempocolor'];
		}elseif($cmd->getConfiguration('data')=="vigilance_inondation"){
			$vigilance=json_decode(file_get_contents("http://api.domogeek.fr/vigilance/".$this->getConfiguration('departement')."/all"),true);	
			return $vigilance['vigilanceflood'];
		}elseif($cmd->getConfiguration('data')=="vigilance_meteo"){
			$vigilance=json_decode(file_get_contents("http://api.domogeek.fr/vigilance/".$this->getConfiguration('departement')."/all"),true);	
			return $vigilance['vigilancecolor'];
		}elseif($cmd->getConfiguration('data')=="vigilance_type"){
			$vigilance=json_decode(file_get_contents("http://api.domogeek.fr/vigilance/".$this->getConfiguration('departement')."/all"),true);	
			return $vigilance['vigilancerisk'];
		}
        return false;
    }
}

?>