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
        $domogeekCmd->setName(__('Lever du soleil', __FILE__));
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
        $domogeekCmd->setName(__('Coucher du soleil', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'sunset');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Lever du soleil scénario', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'sunrise_raw');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
		$domogeekCmd->setIsVisible(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Zenith scénario', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'zenith_raw');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
		$domogeekCmd->setIsVisible(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Coucher du soleil scénario', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'sunset_raw');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
		$domogeekCmd->setIsVisible(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('IP Publique', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'ip_publique');
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
        $domogeekCmd->setName(__('Jour EJP EDF', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'ejp_today');
		$domogeekCmd->setUnite('');
        $domogeekCmd->setType('info');
        $domogeekCmd->setSubType('other');
		$domogeekCmd->setIsHistorized(0);
        $domogeekCmd->save();
		
		$domogeekCmd = new domogeekCmd();
        $domogeekCmd->setName(__('Demain EJP EDF', __FILE__));
        $domogeekCmd->setEqLogic_id($this->id);
        $domogeekCmd->setConfiguration('data', 'ejp_tomorrow');
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
		$found_ejp=0;
		$found_ip_publique=0;
		foreach ($this->getCmd() as $cmd) {
			if($cmd->getConfiguration('data')=="ejp_today"){
				$found_ejp=1;
			}elseif($cmd->getConfiguration('data')=="ip_publique"){
				$found_ip_publique=1;
			}
		}
		if($found_ejp==0){
			$domogeekCmd = new domogeekCmd();
	        $domogeekCmd->setName(__('Jour EJP EDF', __FILE__));
	        $domogeekCmd->setEqLogic_id($this->id);
	        $domogeekCmd->setConfiguration('data', 'ejp_today');
			$domogeekCmd->setUnite('');
	        $domogeekCmd->setType('info');
	        $domogeekCmd->setSubType('other');
			$domogeekCmd->setIsHistorized(0);
	        $domogeekCmd->save();
			
			$domogeekCmd = new domogeekCmd();
	        $domogeekCmd->setName(__('Demain EJP EDF', __FILE__));
	        $domogeekCmd->setEqLogic_id($this->id);
	        $domogeekCmd->setConfiguration('data', 'ejp_tomorrow');
			$domogeekCmd->setUnite('');
	        $domogeekCmd->setType('info');
	        $domogeekCmd->setSubType('other');
			$domogeekCmd->setIsHistorized(0);
	        $domogeekCmd->save();
		}
		if($found_ip_publique==0){
			$domogeekCmd = new domogeekCmd();
	        $domogeekCmd->setName(__('IP Publique', __FILE__));
	        $domogeekCmd->setEqLogic_id($this->id);
	        $domogeekCmd->setConfiguration('data', 'ip_publique');
			$domogeekCmd->setUnite('');
	        $domogeekCmd->setType('info');
	        $domogeekCmd->setSubType('other');
			$domogeekCmd->setIsHistorized(0);
	        $domogeekCmd->save();
		}
    }
		
	public function preUpdate() {
        if (!in_array($this->getConfiguration('zone_scolaire'), array('A','B','C'))) {
            throw new Exception(__('La zone scolaire doit être A, B ou C', __FILE__));
        }
		/*if (!in_array($this->getConfiguration('zone_ejp'), array('nord','sud','ouest','paca'))) {
            throw new Exception(__('La zone EJP doit être nord, sud, ouest ou paca', __FILE__));
        }*/
		if (!is_numeric($this->getConfiguration('departement')) || strlen($this->getConfiguration('departement'))<>2) {
            throw new Exception(__('Le département doit être 2 chiffres', __FILE__));
        }
        if ($this->getConfiguration('ville')=="") {
            throw new Exception(__('La ville ne peut-être vide', __FILE__));
        }
    }
    
    public function getInformations() {
    	log::add('domogeek', 'info', 'Récupération des données', 'config');
        if($this->getConfiguration('url')<>''){
        	$url=$this->getConfiguration('url');
        }else{
        	$url="http://api.domogeek.fr";
        }
        
        if (!in_array($this->getConfiguration('zone_scolaire'), array('A','B','C'))) {
            throw new Exception(__('La zone scolaire doit être A, B ou C', __FILE__));
        }else{
        	$holidayall=json_decode(file_get_contents($url."/holidayall/".$this->getConfiguration('zone_scolaire')."/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);	
        }
        if ($this->getConfiguration('ville')=="") {
            throw new Exception(__('La ville ne peut-être vide', __FILE__));
        }else{
        	$sun=json_decode(file_get_contents($url."/sun/".$this->getConfiguration('ville')."/all/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);	
        }
		if (!in_array($this->getConfiguration('zone_ejp'), array('nord','sud','ouest','paca'))) {
            $ejp=array();
            $ejp['ejp']="NON CONFIGURE";
            $ejp_tomorrow=array();
            $ejp_tomorrow['ejp']="NON CONFIGURE";
        }else{
        	$ejp=json_decode(file_get_contents($url."/ejpedf/".$this->getConfiguration('zone_ejp')."/today/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			$ejp_tomorrow=json_decode(file_get_contents($url."/ejpedf/".$this->getConfiguration('zone_ejp')."/tomorrow/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);	
        }
		$ip_publique=json_decode(file_get_contents($url."/myip/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
		$tempo=json_decode(file_get_contents($url."/tempoedf/now/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
		$tempo_tomorrow=json_decode(file_get_contents($url."/tempoedf/tomorrow/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
		if (!is_numeric($this->getConfiguration('departement')) || strlen($this->getConfiguration('departement'))<>2) {
            throw new Exception(__('Le département doit être 2 chiffres', __FILE__));
        }else{
        	$vigilance=json_decode(file_get_contents($url."/vigilance/".$this->getConfiguration('departement',false,stream_context_create(array('http' => array('user_agent' => 'jeedom'))))."/all"),true);	
        }
		
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
					}elseif($holidayall['weekend']=="True"){
						$cmd->event("Oui");
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
				}elseif($cmd->getConfiguration('data')=="sunset_raw"){
					$cmd->event(str_replace(':', '', $sun['sunset']));
				}elseif($cmd->getConfiguration('data')=="zenith_raw"){
					$cmd->event(str_replace(':', '', $sun['zenith']));
				}elseif($cmd->getConfiguration('data')=="sunrise_raw"){
					$cmd->event(str_replace(':', '', $sun['sunrise']));
				}elseif($cmd->getConfiguration('data')=="ejp_today"){
					if($ejp['ejp']=="False"){
						$cmd->event("Non");
					}elseif($ejp['ejp']=="True"){
						$cmd->event("Oui");
					}else{
						$cmd->event($ejp['ejp']);
					}
				}elseif($cmd->getConfiguration('data')=="ejp_tomorrow"){
					if($ejp_tomorrow['ejp']=="False"){
						$cmd->event("Non");
					}elseif($ejp_tomorrow['ejp']=="True"){
						$cmd->event("Oui");
					}else{
						$cmd->event($ejp_tomorrow['ejp']);
					}					
				}elseif($cmd->getConfiguration('data')=="ip_publique"){
					$cmd->event($ip_publique['myip']);
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
		$domogeek=$this->getEqLogic();
		if($domogeek->getConfiguration('url')<>''){
        	$url=$domogeek->getConfiguration('url');
        }else{
        	$url="http://api.domogeek.fr";
        }
		if($this->getConfiguration('data')=="ferie"){
			if (!in_array($domogeek->getConfiguration('zone_scolaire'), array('A','B','C'))) {
            	throw new Exception(__('La zone scolaire doit être A, B ou C', __FILE__));
        	}else{
				$holidayall=json_decode(file_get_contents($url."/holidayall/".$domogeek->getConfiguration('zone_scolaire')."/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			if($holidayall['holiday']=="False"){
				return "Non";
			}else{
				return $holidayall['holiday'];
			}
		}elseif($this->getConfiguration('data')=="weekend"){
			if (!in_array($domogeek->getConfiguration('zone_scolaire'), array('A','B','C'))) {
            	throw new Exception(__('La zone scolaire doit être A, B ou C', __FILE__));
        	}else{
				$holidayall=json_decode(file_get_contents($url."/holidayall/".$domogeek->getConfiguration('zone_scolaire')."/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			if($holidayall['weekend']=="False"){
				return "Non";
			}elseif($holidayall['weekend']=="True"){
				return "Oui";
			}else{
				return $holidayall['weekend'];
			}
		}elseif($this->getConfiguration('data')=="vacances_scolaires"){
			if (!in_array($domogeek->getConfiguration('zone_scolaire'), array('A','B','C'))) {
            	throw new Exception(__('La zone scolaire doit être A, B ou C', __FILE__));
        	}else{
				$holidayall=json_decode(file_get_contents($url."/holidayall/".$domogeek->getConfiguration('zone_scolaire')."/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);	
			}
			if($holidayall['schoolholiday']=="False"){
				return "Non";
			}else{
				return $holidayall['schoolholiday'];
			}
		}elseif($this->getConfiguration('data')=="duree_jour"){
			if ($domogeek->getConfiguration('ville')=="") {
            	throw new Exception(__('La ville ne peut-être vide', __FILE__));
        	}else{
				$sun=json_decode(file_get_contents($url."/sun/".$domogeek->getConfiguration('ville')."/all/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			return $sun['dayduration'];
		}elseif($this->getConfiguration('data')=="sunset"){
			if ($domogeek->getConfiguration('ville')=="") {
            	throw new Exception(__('La ville ne peut-être vide', __FILE__));
        	}else{
				$sun=json_decode(file_get_contents($url."/sun/".$domogeek->getConfiguration('ville')."/all/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			return $sun['sunset'];
		}elseif($this->getConfiguration('data')=="zenith"){
			if ($domogeek->getConfiguration('ville')=="") {
            	throw new Exception(__('La ville ne peut-être vide', __FILE__));
        	}else{
				$sun=json_decode(file_get_contents($url."/sun/".$domogeek->getConfiguration('ville')."/all/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			return $sun['zenith'];
		}elseif($this->getConfiguration('data')=="sunrise"){
			if ($domogeek->getConfiguration('ville')=="") {
            	throw new Exception(__('La ville ne peut-être vide', __FILE__));
        	}else{
				$sun=json_decode(file_get_contents($url."/sun/".$domogeek->getConfiguration('ville')."/all/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			return $sun['sunrise'];
		}elseif($this->getConfiguration('data')=="sunset_raw"){
			if ($domogeek->getConfiguration('ville')=="") {
            	throw new Exception(__('La ville ne peut-être vide', __FILE__));
        	}else{
				$sun=json_decode(file_get_contents($url."/sun/".$domogeek->getConfiguration('ville')."/all/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			return str_replace(':', '',$sun['sunset']);
		}elseif($this->getConfiguration('data')=="zenith_raw"){
			if ($domogeek->getConfiguration('ville')=="") {
            	throw new Exception(__('La ville ne peut-être vide', __FILE__));
        	}else{
				$sun=json_decode(file_get_contents($url."/sun/".$domogeek->getConfiguration('ville')."/all/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			return str_replace(':', '',$sun['zenith']);
		}elseif($this->getConfiguration('data')=="sunrise_raw"){
			if ($domogeek->getConfiguration('ville')=="") {
            	throw new Exception(__('La ville ne peut-être vide', __FILE__));
        	}else{
				$sun=json_decode(file_get_contents($url."/sun/".$domogeek->getConfiguration('ville')."/all/now",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			return str_replace(':', '',$sun['sunrise']);
		}elseif($this->getConfiguration('data')=="ip_publique"){
			$ip_publique=json_decode(file_get_contents($url."/myip/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			return $ip_publique['myip'];
		}elseif($this->getConfiguration('data')=="ejp_today"){
			if (!in_array($domogeek->getConfiguration('zone_ejp'), array('nord','sud','ouest','paca'))) {
            	$ejp_today=array();
            	$ejp_today['ejp']="NON CONFIGURE";
            }else{
				$ejp_today=json_decode(file_get_contents($url."/ejpedf/".$domogeek->getConfiguration('zone_ejp')."/today/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			if($ejp_today['ejp']=="False"){
				return "Non";
			}elseif($ejp_today['ejp']=="True"){
				return "Oui";
			}else{
				return $ejp_today['ejp'];
			}
		}elseif($this->getConfiguration('data')=="ejp_tomorrow"){
			if (!in_array($domogeek->getConfiguration('zone_ejp'), array('nord','sud','ouest','paca'))) {
            	$ejp_tomorrow=array();
            	$ejp_tomorrow['ejp']="NON CONFIGURE";
        	}else{
				$ejp_tomorrow=json_decode(file_get_contents($url."/ejpedf/".$domogeek->getConfiguration('zone_ejp')."/tomorrow/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			}
			if($ejp_tomorrow['ejp']=="False"){
				return "Non";
			}elseif($ejp_tomorrow['ejp']=="True"){
				return "Oui";
			}else{
				return $ejp_tomorrow['ejp'];
			}
		}elseif($this->getConfiguration('data')=="tempo_today"){
			$tempo=json_decode(file_get_contents($url."/tempoedf/now/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			return $tempo['tempocolor'];
		}elseif($this->getConfiguration('data')=="tempo_tomorrow"){
			$tempo_tomorrow=json_decode(file_get_contents($url."/tempoedf/tomorrow/json",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);
			return $tempo_tomorrow['tempocolor'];
		}elseif($this->getConfiguration('data')=="vigilance_inondation"){
			if (!is_numeric($domogeek->getConfiguration('departement')) || strlen($domogeek->getConfiguration('departement'))<>2) {
            	throw new Exception(__('Le département doit être 2 chiffres', __FILE__));
       		}else{
				$vigilance=json_decode(file_get_contents($url."/vigilance/".$domogeek->getConfiguration('departement')."/all",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);	
			}
			return $vigilance['vigilanceflood'];
		}elseif($this->getConfiguration('data')=="vigilance_meteo"){
			if (!is_numeric($domogeek->getConfiguration('departement')) || strlen($domogeek->getConfiguration('departement'))<>2) {
            	throw new Exception(__('Le département doit être 2 chiffres', __FILE__));
       		}else{
				$vigilance=json_decode(file_get_contents($url."/vigilance/".$domogeek->getConfiguration('departement')."/all",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);	
			}
			return $vigilance['vigilancecolor'];
		}elseif($this->getConfiguration('data')=="vigilance_type"){
			if (!is_numeric($domogeek->getConfiguration('departement')) || strlen($domogeek->getConfiguration('departement'))<>2) {
            	throw new Exception(__('Le département doit être 2 chiffres', __FILE__));
       		}else{
				$vigilance=json_decode(file_get_contents($url."/vigilance/".$domogeek->getConfiguration('departement')."/all",false,stream_context_create(array('http' => array('user_agent' => 'jeedom')))),true);	
			}
			return $vigilance['vigilancerisk'];
		}
        return false;
    }
}

?>