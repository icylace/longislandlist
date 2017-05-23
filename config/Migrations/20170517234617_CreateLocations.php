<?php
use Migrations\AbstractMigration;

class CreateLocations extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('locations');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('website', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('instagram', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('facebook', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('twitter', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('address', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('city', 'string', [
            'default' => null,
            'limit' => 187,
            'null' => false,
        ]);
        $table->addColumn('state', 'string', [
            'default' => null,
            'limit' => 2,
            'null' => false,
        ]);
        $table->addColumn('postalCode', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('phone', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->addColumn('ssid', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('latitude', 'decimal', [
            'default' => null,
            'precision' => 10,
            'scale' => 6,
            'null' => false,
        ]);
        $table->addColumn('longitude', 'decimal', [
            'default' => null,
            'precision' => 10,
            'scale' => 6,
            'null' => false,
        ]);
        $table->addColumn('notes', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->create();
    }
}
