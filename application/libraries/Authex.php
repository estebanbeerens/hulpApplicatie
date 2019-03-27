<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Authex
    {
        // +----------------------------------------------------------
        // | TV Shop
        // +----------------------------------------------------------
        // | 2ITF - 2018-2019
        // +----------------------------------------------------------
        // | Authex library
        // +----------------------------------------------------------
        // | Nelson Wells (http://nelsonwells.net/2010/05/creating-a-simple-extensible-codeigniter-authentication-library/)
        // | aangepast door M. Decabooter, J. Janssen
        // +----------------------------------------------------------

        public function __construct()
        {
            $CI =& get_instance();
            $CI->load->model('gebruiker_model');
        }

        function activeer($id)
        {
            // nieuwe gebruiker activeren
            $CI =& get_instance();

            $CI->gebruiker_model->updateGeactiveerd($id);
        }

        function isAangemeld()
        {
            // gebruiker is aangemeld als sessievariabele gebruiker_id bestaat
            $CI =& get_instance();

            if ($CI->session->has_userdata('gebruiker_id')) {
                return true;
            } else {
                return false;
            }
        }

        function getGebruikerInfo()
        {
            // geef gebruiker-object als gebruiker aangemeld is
            $CI =& get_instance();

            if (!$this->isAangemeld()) {
                return null;
            } else {
                $id = $CI->session->userdata('gebruiker_id');
                return $CI->gebruiker_model->get($id);
            }
        }

        function meldAan($gebruikersnaam, $passwoord)
        {
            // gebruiker aanmelden met opgegeven email en wachtwoord
            $CI =& get_instance();

            $gebruiker = $CI->gebruiker_model->getGebruiker($gebruikersnaam, $passwoord);

            if ($gebruiker == null) {
                return false;
            } else {
                $CI->session->set_userdata('gebruiker_id', $gebruiker->id);
                return $gebruiker->soortPersoon;
            }
        }

        function meldAf()
        {
            // afmelden, dus sessievariabele wegdoen
            $CI =& get_instance();

            $CI->session->unset_userdata('gebruiker_id');
        }

        function registreer($naam, $email, $wachtwoord, $gebruikersnaam, $adres, $rekeningnummer, $voornaam, $woonplaats, $geboortedatum )
        {
            // nieuwe gebruiker registreren als email nog niet bestaat
            $CI =& get_instance();

            if ($CI->gebruiker_model->controleerEmailVrij($email)) {
                $id = $CI->gebruiker_model->insert($naam, $email, $wachtwoord, $gebruikersnaam , $adres, $rekeningnummer, $voornaam, $woonplaats, $geboortedatum);
                return $id;
            } else {
                return 0;
            }
        }


    }
