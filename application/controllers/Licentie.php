<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * @property Template $template
     * @property Authex $authex
     * @property Licentie_model $licentie_model
     */

    /**
     * @class Licentie
     * @brief Licentie-controller voor alles dat te maken heeft met licenties
     *
     * Controller-klasse die alle controllers bevat voor het correct tonen van alles dat te maken heeft met licenties.
     */
class Licentie extends CI_Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    /**
     * Laad de pagina licentieAankopen op met de juiste partials via Licentie_model.
     */
    public function licentieAankopen() {
        $data['titel'] = 'LicentieAankopen';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Jeroen&nbsp;Jansen';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getLicentie();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Laad de pagina licentieAankopenBevestig op met de juiste partials via Licentie_model. Op deze pagina wordt gewacht tot de transactie al dan niet voltooid is.
     * @param $id de id van de licentie die aangeduid was om te kopen.
     */
    public function licentieAankopenBevestig($id) {
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Jeroen&nbsp;Jansen';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getSpecificLicentie($id);

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopenBevestig',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Laad de pagina licentieAankopenOk op met de juiste partials via Licentie_model. Op deze pagina word bevestigd dat de licentie is aangekocht door de gebruiker.
     * @param $id de id van de licentie die aangeduid was om te kopen.
     */
    public function licentieAankopenOk($id) {
        $data['titel'] = 'Licentie aangekocht';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Jeroen&nbsp;Jansen';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getSpecificLicentie($id);

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopenOk',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Laad de pagina licentieToeveogen op met de juiste partials.
     */
    public function licentieToevoegen() {
        $data['titel'] = 'Licentie Toevoegen';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Arne&nbsp;Vanhoof';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieToevoegen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Pusht een nieuwe licentie in de database via Licentie_model.
     * Redirect daarna naar een goedkeuringspagina, licentieToevoegenValidatie.
     */
    public function insertLicentie() { //Licentie in database steken
        $soortLicentie = new stdClass();
        $soortLicentie->naam = $this->input->post('naam');
        $soortLicentie->prijs = $this->input->post('prijs');
        $soortLicentie->beschrijving = $this->input->post('beschrijving');

        $this->load->model('licentie_model');
        $this->licentie_model->insert($soortLicentie);

        redirect('Licentie/licentieToevoegenValidatie');
    }

    /**
     * Laad de pagina licentieToevoegenValidatie op met de juiste partials.
     */
    public function licentieToevoegenValidatie() { //Goedkeuring tonen
        $data['titel'] = "Licentie toegevoegd";
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Jeroen&nbsp;Jansen';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieToevoegenOk',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Laad de pagina licentieBeheren op met de juiste partials via Licentie_model.
     */
    public function licentieBeheren() {
        $data['titel'] = 'Licenties Beheren';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Arne&nbsp;Vanhoof';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getLicentie();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieBeheren',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Laad de pagina licentieBewerken op met de juiste partials van de geselecteerde licentie via Licentie_model.
     * @param $id de id van de gekozen licentie om te bewerken.
     */
    public function licentieBewerken($id) {
        $data['titel'] = 'Licenties Beheren';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Arne&nbsp;Vanhoof';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getSpecificLicentie($id);

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieBewerken',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }

    /**
     * Verandert een licentie in de database via Licentie_model.
     * @param $id de id van de gekozen licentie om te bewerken.
     * Redirect daarna naar een goedkeuringspagina, updateLicentieValidatie.
     */
    public function updateLicentie($id) {
        $soortLicentie = new stdClass();
        $soortLicentie->id = $id;
        $soortLicentie->naam = $this->input->post('naam');
        $soortLicentie->prijs = $this->input->post('prijs');
        $soortLicentie->beschrijving = $this->input->post('beschrijving');

        $this->load->model('licentie_model');
        $this->licentie_model->update($soortLicentie);

        redirect('Licentie/updateLicentieValidatie');
    }

    /**
     * Verwijderd een licentie in de database.
     * @param $id de id van de gekozen licentie om te verwijderen.
     * Redirect daarna terug naar de licentieBeheren homepagina, om deze te herladen en de verwijderde licentie weg te halen van de view.
     */
    public function verwijderLicentie($id) {
        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->delete($id);

        redirect('/licentie/licentieBeheren');
    }

    /**
     * Laad de pagina updateLicentieValidatie op met de juiste partials.
     */
    public function updateLicentieValidatie() {
        $data['titel'] = "Licentie toegevoegd";
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Arne&nbsp;Vanhoof';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieBewerkenOk',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }


    //Aangekochte licenties
    /**
     * Laad de pagina persoonlijkeAangekochteLicentieBeheren op met de juiste partials via Licentie_model.
     */
    public function persoonlijkeAangekochteLicentieBeheren() {
        $data['titel'] = 'Aangekochte licenties beheren';
        $data['ontwerper'] = 'Esteban&nbsp;Beerens';
        $data['tester'] = 'Jeroen&nbsp;Jansen';
        $data['gebruiker'] = $this->authex->getGebruikerInfo();

        $this->load->model('licentie_model');
        $data['licentie'] = $this->licentie_model->getLicentie();

        $partials = array('hoofding' => 'main_header',
            'inhoud' => 'licentie/licentieAankopen',
            'menu' => 'main_menu',
            'voetnoot' => 'main_footer');

        $this->template->load('main_master', $partials, $data);
    }
}