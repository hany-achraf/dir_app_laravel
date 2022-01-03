<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Business;

class BusinessesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $business = Business::create([
            'name' => 'Al-Ikhsan Sports',
            'icon_img_path' => 'storage/images/businesses/icons/al-ikhsan-icon.png',
            'cover_img_path' => 'storage/images/businesses/covers/al-ikhsan-cover.png',
            'description' => 'Welcome to a sport lover’s paradise! Al-Ikhsan Sports, award winning sports retailer and one of the largest in Malaysia, progressively aims high to be THE largest sports retailer in SouthEast Asia in the near future. From footwear to accessories and international or national team jerseys to lifestyle pieces. Authorised dealer of all your favorite sports brands like Nike, Reebok, Adidas, Asics and Puma, at competitive prices direct from the manufacturers. You will find it all here, at THE sports destination store.',
            'phone_no' => '019-7066523',
            'address' => 'LG-018 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sun – Wed (10:00am – 10:00pm)',
            'website_link' => 'https://www.al-ikhsan.com',
            'facebook_link' => 'https://www.facebook.com/alikhsansports',
            'instagram_link' => 'https://www.instagram.com/',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(1);
        $business->users()->attach(1);
        $business->users()->attach(3);

        $business = Business::create([
            'name' => 'Chi-Gui Mala Hot Pot',
            'icon_img_path' => 'storage/images/businesses/icons/chi-gui-icon.jpg',
            'cover_img_path' => 'storage/images/businesses/covers/chi-gui-cover.jpg',
            'description' => 'Chi-Gui mala Hotpot is the place to be for the most richly flavored spicy and herbal chicken broth hot pot. Offering two types of soup per hot pot with a wide range of ingredients and condiments that include premium wagyu beef and kurobuta pork, be sure you are in for a treat. Throw in some ultra-spicy, ultra-juicy barbecue lamb skewers and your trip to yummy paradise is complete.',
            'phone_no' => '07-2763668',
            'address' => 'G-058 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sun – Fri (10:00am – 10:00pm)',
            'facebook_link' => 'https://www.facebook.com/ChiguiHotpotMidvalleySouthkey/',
            'destination_id' => 1,
            ]);

        $business->categories()->attach(2);
        $business->categories()->attach(19);
        $business->users()->attach(2);
        $business->users()->attach(4);
    }
}
