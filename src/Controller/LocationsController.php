<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * Locations Controller
 *
 * @property \App\Model\Table\LocationsTable $Locations
 *
 * @method \App\Model\Entity\Location[] paginate($object = null, array $settings = [])
 */
class LocationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $locations = $this->Locations->find('all', ['order' => 'Locations.name ASC']);
        $mapBoxAccessToken = Configure::read('Mapbox.accessToken');
        $this->set(compact('locations', 'mapBoxAccessToken'));
    }

}
