<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_title',
        'site_description',
        'site_keywords',
        'canonical',
        'url',
        'og_site_title',
        'og_description',
        'og_url',
        'og_image',
        'tw_title',
        'tw_description',
        'tw_image',
        'tw_url',
    ];
    protected $attributes = [
        'site_name' => 'PristineGreen Upholstery and Carpet Cleaning',
        'site_title' => 'Carpet Cleaners NYC, Brooklyn, and Queens',
        'site_description ' => 'PristineGreen Cleaning is your trusted carpet cleaner in NYC, Queens, Brooklyn, Bronx, Long Island, and Staten Island',
        'site_keywords ' => 'rug cleaning ny, oriental rug cleaner, sofa cleaning nyc, area rug cleaning nyc, carpet cleaner service, ny carpet cleaning, carpet cleaner nyc, couch cleaner nyc, rug cleaner nyc, upholstery cleaning brooklyn, furniture cleaning nyc, carpet cleaner companies near me, sofa cleaning brooklyn, mattress cleaner nyc, upholstery cleaning nyc, rug clean service, couch cleaning services, rug cleaner brooklyn, couch cleaner brooklyn, mattress cleaning brooklyn, area rugs cleaning, carpet cleaner brooklyn, furniture cleaning brooklyn, rug cleaner, clean area rug near me, upholstery cleaning queens, carpet cleaning professional, the best carpet cleaning, rug cleaner queens, best upholstery cleaning, carpet cleaner queens, upholstery steam cleaning, best carpet steam cleaner, carpet cleaner, carpet cleaning commercial, carpet shampoo cleaning, carpet shampoo near me, couch cleaner, couch steam cleaning, furniture cleaning, furniture steam cleaning, mattress cleaner, rug shampoo near me, sofa cleaning, steam cleaner near me, upholstery cleaning, couch cleaner queens, furniture cleaning queens, mattress cleaner brooklyn, mattress cleaner queens, sofa cleaner queens, sofa cleaning queens',
        'canonical' => '/',
        'url' => '/',
        'og_image' => 'https://pristinegreencleaning.com/assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg',
    ];

    function setDefalutValues(){
        $this->og_site_title = empty($this->og_site_title) ? $this->site_title : $this->og_site_title;
        $this->og_description = empty($this->og_description) ? $this->site_description : $this->og_description;
        $this->tw_title = empty($this->tw_title) ? $this->og_title : $this->tw_title;
        $this->tw_description = empty($this->tw_description) ? $this->og_description : $this->tw_description;
        $this->tw_url = empty($this->tw_url) ? $this->og_url : $this->tw_url;
        $this->tw_image = empty($this->tw_image) ? $this->og_image : $this->tw_image;
    }


}
