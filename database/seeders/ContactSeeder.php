<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = array();
        for ($i = 0; $i < 10; $i++) {
            $contact[] = [
                'name' => 'user ' . $i,
                'message' => 'message ' . $i,
                'project_id' => '1',
            ];
        }
        Contact::insert($contact);
    }
}