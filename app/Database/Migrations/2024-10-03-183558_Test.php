<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Test extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_test' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ]
        ]);
        $this->forge->addKey('id_test', true);
        $this->forge->createTable('test');
    }

    public function down()
    {
        $this->forge->dropTable('test');
    }
}
