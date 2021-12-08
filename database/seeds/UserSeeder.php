<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg'
        ]);

        \App\Content::create([
            'logo' => 'front/images/logo.png',
            'sitename' => 'West Indes Care 1',
            'phone' => '1.800.321.9876',
            'email' => 'info@westindescare1.com',
            'address' => '70 Greenview Ave. Temple Hills MD 20748, USA',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
            'time' => 'Mon to Friday',
            'footer_text' => 'Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'footer_logo' => 'front/images/logo-footer.png',

            'simage1' => 'front/images/slide-1.jpg',
            'simage2' => 'front/images/slide-2.jpg',
            'simage3' => 'front/images/slide-3.jpg',

            'stext1' => 'Serenity is inside you',
            'stext2' => 'Inspiration for joyful living',
            'stext3' => 'Flexibility is a second power',

            'video' => 'oX6I6vs1EFs',
            'banner' => 'front/01.png',

            'about' => 'Nous vous aidons à développer pour vous-même un style de vie sain, des habitudes diététiques et un régime alimentaire qui vont de pair avec ces besoins.
                        Nous vous aidons à développer pour vous-même un style de vie sain, des habitudes diététiques et un régime alimentaire qui vont de pair avec ces besoins.',
            'aboutimage' => 'front/images/home_01/1.jpg',

            'review1' => 'When I first started practicing Bikram yoga, my goal was to keep a commitment and not give up, but as I discovered day by day the benefits of Bikram I became more enthusiastic about making Bikram part of my life. I am so happy to see how my energy has improved to a point, even after a 12 hour day at work.',
            'review2' => 'When I first started practicing Bikram yoga, my goal was to keep a commitment and not give up, but as I discovered day by day the benefits of Bikram I became more enthusiastic about making Bikram part of my life. I am so happy to see how my energy has improved to a point, even after a 12 hour day at work.',
            'review3' => 'When I first started practicing Bikram yoga, my goal was to keep a commitment and not give up, but as I discovered day by day the benefits of Bikram I became more enthusiastic about making Bikram part of my life. I am so happy to see how my energy has improved to a point, even after a 12 hour day at work.',

            'rg1' => 'Mr Richard Black',
            'rg2' => 'Mr Richard Black',
            'rg3' => 'Mr Richard Black',

            'q1' => 'Do I need reservations?',
            'q2' => 'Do I need reservations?',
            'q3' => 'Do I need reservations?',
            'q4' => 'Do I need reservations?',

            'a1' => 'No, students are welcome to drop-in. Please arrive 10-15 minutes before your very first class to fill out a health history form.',
            'a2' => 'No, students are welcome to drop-in. Please arrive 10-15 minutes before your very first class to fill out a health history form.',
            'a3' => 'No, students are welcome to drop-in. Please arrive 10-15 minutes before your very first class to fill out a health history form.',
            'a4' => 'No, students are welcome to drop-in. Please arrive 10-15 minutes before your very first class to fill out a health history form.',

        ]);
        \App\Gallery::create([
            'image1' => 'front/images/insta-1.jpg',
            'image2' => 'front/images/insta-1.jpg',
            'image3' => 'front/images/insta-1.jpg',
            'image4' => 'front/images/insta-1.jpg',
            'image5' => 'front/images/insta-1.jpg',
            'image6' => 'front/images/insta-1.jpg',
            'image7' => 'front/images/insta-1.jpg',
            'image8' => 'front/images/insta-1.jpg',
        ]);
    }
}
