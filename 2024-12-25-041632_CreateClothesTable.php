<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClothesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
            'ukuran' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'warna' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 16,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('clothes');
    }

    public function down()
    {
        $this->forge->dropTable('clothes');
    }
}