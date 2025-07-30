<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        
        $revisors = [
            [
                'name' => 'Leonardo Da Vinci',
                'email' => 'leonardo@presto.it',
                'password' => bcrypt('password123'),
                'is_revisor' => true,
                'bio' => 'Inventore, artista e studioso di antiquariato.',
                'specialization' => 'Arte rinascimentale',
                'birthdate' => '1452-04-15',
                'company_name' => 'Da Vinci Studio',
                'vat_number' => 'IT12345678901',
                'business_address' => 'Via Firenze 1, Vinci',
                'business_type' => 'professional',
                'total_sales' => 120,
                'member_since' => now()->subYears(5),
                'last_active' => now(),
                'phone_number' => '+39 055 1234567',
                'location' => 'Vinci, Toscana',
            ],
            [
                'name' => 'Marie Curie',
                'email' => 'marie.curie@presto.it',
                'password' => bcrypt('password123'),
                'is_revisor' => true,
                'bio' => 'Esperta di oggetti scientifici e storici.',
                'specialization' => 'Strumenti scientifici',
                'birthdate' => '1867-11-07',
                'company_name' => 'Curie Antiques',
                'vat_number' => 'IT98765432109',
                'business_address' => 'Rue de Paris 10, Parigi',
                'business_type' => 'company',
                'total_sales' => 85,
                'member_since' => now()->subYears(3),
                'last_active' => now(),
                'phone_number' => '+33 01 23456789',
                'location' => 'Parigi, Francia',
            ],
            [
                'name' => 'Albert Einstein',
                'email' => 'einstein@presto.it',
                'password' => bcrypt('password123'),
                'is_revisor' => true,
                'bio' => 'Collezionista di orologi e monete rare.',
                'specialization' => 'Orologi e monete',
                'birthdate' => '1879-03-14',
                'company_name' => 'Einstein Collection',
                'vat_number' => 'IT19283746501',
                'business_address' => 'Bahnhofstrasse 5, Berna',
                'business_type' => 'individual',
                'total_sales' => 60,
                'member_since' => now()->subYears(2),
                'last_active' => now(),
                'phone_number' => '+41 31 9876543',
                'location' => 'Berna, Svizzera',
            ],
            [
                'name' => 'Isaac Newton',
                'email' => 'newton@presto.it',
                'password' => bcrypt('password123'),
                'is_revisor' => true,
                'bio' => 'Esperto di monete antiche e strumenti scientifici.',
                'specialization' => 'Monete e strumenti scientifici',
                'birthdate' => '1643-01-04',
                'company_name' => 'Newton Heritage',
                'vat_number' => 'IT56473829101',
                'business_address' => 'Trinity College, Cambridge',
                'business_type' => 'professional',
                'total_sales' => 95,
                'member_since' => now()->subYears(4),
                'last_active' => now(),
                'phone_number' => '+44 1223 123456',
                'location' => 'Cambridge, UK',
            ],
        ];

        foreach ($revisors as $data) {
            User::create($data);
        }
    }
}
;