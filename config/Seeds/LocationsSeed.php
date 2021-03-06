<?php
use Migrations\AbstractSeed;

/**
 * Locations seed.
 */
class LocationsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Coffee places
            [
                'name'       => 'Roast Coffee & Tea Trading Company',
                'website'    => 'http://roast.coffee/',
                'instagram'  => 'https://www.instagram.com/roastcoffeeandtea/',
                'facebook'   => 'https://www.facebook.com/roastcoffeeandteatrading',
                'twitter'    => 'https://twitter.com/roasttrading',
                'address'    => '41 East Main Street',
                'city'       => 'Patchogue',
                'state'      => 'NY',
                'postalCode' => '11772',
                'phone'      => '6316273966',
                'ssid'       => 'roast_wifi',
                'password'   => 'roast-green-beans',
                'latitude'   => 40.765812,
                'longitude'  => -73.014142,
                'notes'      => null,
            ],
            [
                'name'       => 'Cyrus: Chai & Coffee Company',
                'website'    => 'https://www.cyrus.life/',
                'instagram'  => 'https://www.instagram.com/cyrusbayshore/',
                'facebook'   => 'https://www.facebook.com/cyrusbayshore/',
                'twitter'    => null,
                'address'    => '1 Railroad Plaza',
                'city'       => 'Bay Shore',
                'state'      => 'NY',
                'postalCode' => '11706',
                'phone'      => '6312061616',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.725653,
                'longitude'  => -73.252882,
                'notes'      => null,
            ],
            [
                'name'       => 'North Fork Roasting Co.',
                'website'    => 'http://www.noforoastingco.com/',
                'instagram'  => null,
                'facebook'   => 'https://www.facebook.com/noforoastingco/',
                'twitter'    => null,
                'address'    => '55795 Main Road',
                'city'       => 'Southold',
                'state'      => 'NY',
                'postalCode' => '11971',
                'phone'      => '6318765450',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 41.066718,
                'longitude'  => -72.421663,
                'notes'      => null,
            ],
            [
              'name'       => "Local's",
              'website'    => 'https://www.cafelocals.com/',
              'instagram'  => 'https://www.instagram.com/localscafe/',
              'facebook'   => 'https://www.facebook.com/localscafe/',
              'twitter'    => 'https://twitter.com/cafelocals',
              'address'    => '106 East Main Street',
              'city'       => 'Port Jefferson',
              'state'      => 'NY',
              'postalCode' => '11777',
              'phone'      => '6315090627',
              'ssid'       => "Local's cafe_wifi",
              'password'   => 'portjeff',
              'latitude'   => 40.947927,
              'longitude'  => -73.067727,
              'notes'      => 'Has outdoor seating.',
            ],
            [
                'name'       => 'Flux Coffee',
                'website'    => 'https://www.fluxcoffee.com/',
                'instagram'  => 'https://www.instagram.com/fluxcoffee/',
                'facebook'   => 'https://www.facebook.com/FluxCoffee/',
                'twitter'    => 'https://twitter.com/fluxcoffee',
                'address'    => '211 Main Street',
                'city'       => 'Farmingdale',
                'state'      => 'NY',
                'postalCode' => '11735',
                'phone'      => '5165868979',
                'ssid'       => 'Flux Coffee Guest',
                'password'   => 'DrinkFlux',
                'latitude'   => 40.734091,
                'longitude'  => -73.445830,
                'notes'      => null,
            ],
            [
                'name'       => "Jack Jack's Coffee House",
                'website'    => 'https://www.jackjackscoffeehouse.com/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '223 Deer Park Avenue',
                'city'       => 'Babylon',
                'state'      => 'NY',
                'postalCode' => '11702',
                'phone'      => '6315269983',
                'ssid'       => 'Jacks_Guests_5G',
                'password'   => 'espresso',
                'latitude'   => 40.699838,
                'longitude'  => -73.322394,
                'notes'      => null,
            ],
            [
                'name'       => 'Caffe Portofino',
                'website'    => 'http://caffeportofinonpt.com/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '249 Main Street',
                'city'       => 'Northport',
                'state'      => 'NY',
                'postalCode' => '11768',
                'phone'      => '6312627656',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.901129,
                'longitude'  => -73.346782,
                'notes'      => null,
            ],
            [
                'name'       => 'Urban Coffee',
                'website'    => 'http://urbancoffeeny.com/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '101 Broadway',
                'city'       => 'Greenlawn',
                'state'      => 'NY',
                'postalCode' => '11740',
                'phone'      => '6312617979',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.866077,
                'longitude'  => -73.364744,
                'notes'      => null,
            ],
            [
                'name'       => 'Sarikopa Organic Coffee and Tea House',
                'website'    => 'http://sarikopa.com/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '226 Riverleigh Avenue',
                'city'       => 'Riverhead',
                'state'      => 'NY',
                'postalCode' => '11901',
                'phone'      => '6315913444',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.913939,
                'longitude'  => -72.661321,
                'notes'      => null,
            ],
            [
                'name'       => 'Babylon Bean',
                'website'    => 'http://www.thebabylonbean.com/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '17 Fire Island Avenue',
                'city'       => 'Babylon',
                'state'      => 'NY',
                'postalCode' => '11702',
                'phone'      => '6315877729',
                'ssid'       => 'Babylon Bean',
                'password'   => 'babylonbean',
                'latitude'   => 40.696135,
                'longitude'  => -73.323054,
                'notes'      => null,
            ],
            [
                'name'       => 'Bay Shore Bean',
                'website'    => 'http://www.bayshorebean.com/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '47 East Main Street',
                'city'       => 'Bay Shore',
                'state'      => 'NY',
                'postalCode' => '11706',
                'phone'      => '6316477971',
                'ssid'       => 'Bayshorebean_bean_guest_5G',
                'password'   => 'bayshorebean',
                'latitude'   => 40.722568,
                'longitude'  => -73.246828,
                'notes'      => null,
            ],
            [
                'name'       => 'Hampton Coffee Company',
                'website'    => 'https://hamptoncoffeecompany.com/locations/water-mill/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '869 Montauk Highway',
                'city'       => 'Water Mill',
                'state'      => 'NY',
                'postalCode' => '11976',
                'phone'      => '6317262633',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.912818,
                'longitude'  => -72.348419,
                'notes'      => null,
            ],
            [
                'name'       => 'Hampton Coffee Company',
                'website'    => 'https://hamptoncoffeecompany.com/locations/westhampton-beach/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '194 Mill Road',
                'city'       => 'Westhampton Beach',
                'state'      => 'NY',
                'postalCode' => '11978',
                'phone'      => '6312884480',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.814877,
                'longitude'  => -72.646639,
                'notes'      => null,
            ],
            [
                'name'       => 'Hampton Coffee Company',
                'website'    => 'https://hamptoncoffeecompany.com/locations/southampton/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '749 County Road 39A',
                'city'       => 'Southampton',
                'state'      => 'NY',
                'postalCode' => '11968',
                'phone'      => '6313533088',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.898878,
                'longitude'  => -72.373528,
                'notes'      => null,
            ],
            [
                'name'       => 'Hampton Coffee Company',
                'website'    => 'https://hamptoncoffeecompany.com/locations/aquebogue/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '272 Main Road',
                'city'       => 'Aquebogue',
                'state'      => 'NY',
                'postalCode' => '11931',
                'phone'      => '6317792862',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.941884,
                'longitude'  => -72.637005,
                'notes'      => null,
            ],
            [
                'name'       => 'Coffee Booths',
                'website'    => 'https://www.yelp.com/biz/coffee-booths-selden',
                'instagram'  => null,
                'facebook'   => 'https://www.facebook.com/Coffeebooths/',
                'twitter'    => null,
                'address'    => '226 Middle Country Road',
                'city'       => 'Selden',
                'state'      => 'NY',
                'postalCode' => '11784',
                'phone'      => '6318461966',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.867961,
                'longitude'  => -73.020220,
                'notes'      => null,
            ],
            [
                'name'       => 'Sagtown Coffee',
                'website'    => 'http://sagtown.com/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '19 South Elmwood Avenue',
                'city'       => 'Montauk',
                'state'      => 'NY',
                'postalCode' => '11954',
                'phone'      => '6316688021',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 41.032966,
                'longitude'  => -71.946092,
                'notes'      => null,
            ],
            [
                'name'       => 'Tend Coffee',
                'website'    => 'http://tendcoffee.com/',
                'instagram'  => 'https://www.instagram.com/tendcoffee/',
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '924 Montauk Highway',
                'city'       => 'Shirley',
                'state'      => 'NY',
                'postalCode' => '11967',
                'phone'      => '6317724707',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.801661,
                'longitude'  => -72.863594,
                'notes'      => null,
            ],
            [
                'name'       => 'Golden Sparrow, The',
                'website'    => 'https://www.goldensparrowmarket.com/',
                'instagram'  => '',
                'facebook'   => '',
                'twitter'    => '',
                'address'    => '570 Middle Road',
                'city'       => 'Bayport',
                'state'      => 'NY',
                'postalCode' => '11705',
                'phone'      => '6314721857',
                'ssid'       => 'golden Sparrow_5G',
                'password'   => 'gingerandkale',
                'latitude'   => 40.737923,
                'longitude'  => -73.051309,
                'notes'      => 'Has outdoor seating.  No public power outlets.',
            ],
            // Eateries
            [
                'name'       => 'Batata Cafe',
                'website'    => 'https://batatacafe.com/',
                'instagram'  => null,
                'facebook'   => null,
                'twitter'    => null,
                'address'    => '847 Fort Salonga Road',
                'city'       => 'Northport',
                'state'      => 'NY',
                'postalCode' => '11768',
                'phone'      => '6317544439',
                'ssid'       => null,
                'password'   => null,
                'latitude'   => 40.899838,
                'longitude'  => -73.328229,
                'notes'      => null,
            ],
            [
                'name'       => 'Little NOOK Cafe',
                'website'    => null,
                'instagram'  => 'https://www.instagram.com/little_nook_cafe/',
                'facebook'   => 'https://www.facebook.com/littlenookcafe/',
                'twitter'    => 'https://twitter.com/littlenookcafe',
                'address'    => '14 Washington Avenue',
                'city'       => 'West Sayville',
                'state'      => 'NY',
                'postalCode' => '11796',
                'phone'      => '6313196665',
                'ssid'       => 'LittleNook',
                'password'   => 'cafe1400',
                'latitude'   => 40.728950,
                'longitude'  => -73.101542,
                'notes'      => null,
            ],
        ];

        $table = $this->table('locations');
        $table->insert($data)->save();
    }
}
