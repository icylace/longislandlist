<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Location Entity
 *
 * @property int $id
 * @property string $name
 * @property string $website
 * @property string $instagram
 * @property string $facebook
 * @property string $twitter
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $postalCode
 * @property string $phone
 * @property string $ssid
 * @property string $password
 * @property float $latitude
 * @property float $longitude
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Location extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        // 'password'
    ];
}
