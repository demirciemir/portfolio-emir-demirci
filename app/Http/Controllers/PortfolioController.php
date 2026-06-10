<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $projects = [
        'car-rental' => [
            'id' => 1,
            'title_key' => 'car_rental',
            'category' => 'Web',
            'main_image' => 'img/rental-car/1.jpg',
            'gallery' => [
                'img/rental-car/2.jpg',
                'img/rental-car/3.jpg',
                'img/rental-car/4.jpg',
                'img/rental-car/5.jpg',
            ],
            'client' => 'Ders Projesi',
            'date' => '2024',
            'tech' => 'ASP.NET Core MVC, MSSQL, N-Katmanlı Mimari',
            'description_key' => 'car_rental_desc',
            'youtube' => 'https://www.youtube.com/embed/eQYPfOnoZME',
        ],
        'smoke-quit' => [
            'id' => 2,
            'title_key' => 'smoke_quit',
            'category' => 'Mobile',
            'main_image' => 'img/portfolio/2.jpg',
            'gallery' => [
                'img/sigara/1.png',
                'img/sigara/2.png',
                'img/sigara/3.png',
                'img/sigara/4.png',
                'img/sigara/5.png',
                'img/sigara/6.png',
                'img/sigara/7.png',
            ],
            'client' => 'Bireysel Proje',
            'date' => 'Haziran 2024',
            'tech' => 'Flutter, Dart, Firebase',
            'description_key' => 'smoke_quit_desc',
            'youtube' => 'https://www.youtube.com/embed/pwRpZyMdTxc',
        ],
        'ozbag-project' => [
            'id' => 3,
            'title_key' => 'ozbag_project',
            'category' => 'Web / Corporate',
            'main_image' => 'img/portfolio/3.jpg',
            'gallery' => [
                'img/ozbag/1.jpg',
                'img/ozbag/2.jpg',
                'img/ozbag/3.jpg',
                'img/ozbag/4.jpg',
            ],
            'client' => 'Özbağ Vakfı',
            'date' => 'Ekim 2025 - Ocak 2026',
            'tech' => 'Laravel, React, PostgreSQL',
            'description_key' => 'ozbag_project_desc',
            'youtube' => null,
        ],
        'keles-project' => [
            'id' => 4,
            'title_key' => 'keles_project',
            'category' => 'Web / Corporate',
            'main_image' => 'img/portfolio/4.jpg',
            'gallery' => [
                'img/keles/1.jpg',
                'img/keles/2.jpg',
                'img/keles/3.jpg',
                'img/keles/4.jpg',
            ],
            'client' => 'Keles Belediyesi',
            'date' => 'Mart - Haziran 2025',
            'tech' => 'ASP.NET Core MVC, MySQL',
            'description_key' => 'keles_project_desc',
            'youtube' => null,
        ],
        'casanuez' => [
            'id' => 5,
            'title_key' => 'casanuez',
            'category' => 'Web / Corporate',
            'main_image' => 'img/portfolio/5.jpg',
            'gallery' => [
                'img/casanuez/1.jpg',
                'img/casanuez/2.jpg',
                'img/casanuez/3.jpg',
                'img/casanuez/4.jpg',
            ],
            'client' => 'CasaNuez',
            'date' => 'Ocak 2026',
            'tech' => 'Laravel, PostgreSQL, Telegram Bot API',
            'description_key' => 'casanuez_desc',
            'youtube' => null,
        ],
        'koza-bazaar' => [
            'id' => 6,
            'title_key' => 'koza_bazaar',
            'category' => 'Competition',
            'main_image' => 'img/portfolio/6.jpg',
            'gallery' => [
                'img/ahikoza/1.jpg',
                'img/ahikoza/2.jpg',
                'img/ahikoza/3.jpg',
                'img/ahikoza/4.jpg',
            ],
            'client' => 'Ahi Koza (Yarışma Ekibi)',
            'date' => 'Kasım 2024',
            'tech' => 'İş Analizi, Pazar Araştırması, İhracat Fizibilitesi',
            'description_key' => 'koza_bazaar_desc',
            'youtube' => null,
        ],
    ];

    public function show($slug)
    {
        if (!array_key_exists($slug, $this->projects)) {
            abort(404);
        }

        $project = $this->projects[$slug];
        return view('portfolio-detail', compact('project'));
    }
}
