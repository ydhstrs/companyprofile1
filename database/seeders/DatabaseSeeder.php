<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;
use App\Models\Bio;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Section;
use App\Models\ListSection;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Admin',
            'email' => 'lunnizom.indogroup@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        Banner::create([
            'image' => 'banner-images/bHsrAlFp3e6M3gDMx6FFrQ49NFG1UqRw4O0Nkhmx.png',
        ]);
        Bio::create([
            'saramoda' => 'Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.',
            'kepul' => 'Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.',
            'indomarket' => 'Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.',
            'legalin' => 'Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.',
            'foundation' => 'Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.',
            'barbekoe' => 'Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.',
            'indoproperti' => 'Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.',
            'indofarm' => 'Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.',
        ]);

        Contact::create([
            'address' => 'Jl. Gagak Hitam No.25, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128, Indonesia.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => 'https://www.instagram.com/lunnizom.id/',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => '#',
            'youtube' => '#',
            'typelanding' => 'main',
        ]);

        Contact::create([
            'address' => 'Jl. Gagak Hitam No.25, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128, Indonesia.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => 'https://www.instagram.com/saramoda.id/',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => 'https://www.twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'typelanding' => 'saramoda',
        ]);
        Contact::create([
            'address' => 'Jl. Gagak Hitam No.25, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128, Indonesia.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => 'https://www.instagram.com/kepul.id/',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => 'https://www.twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'typelanding' => 'kepul',
        ]);
        Contact::create([
            'address' => 'Jl. Gagak Hitam No.25, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128, Indonesia.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => 'https://www.instagram.com/lunnizom.id/',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => 'https://www.twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'typelanding' => 'indomarket',
        ]);
        Contact::create([
            'address' => 'Jl. Gagak Hitam No.25, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128, Indonesia.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => 'https://www.instagram.com/legalin.indonesia/',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => 'https://www.twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'typelanding' => 'legalin',
        ]);
        Contact::create([
            'address' => 'Jl. Gagak Hitam No.25, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128, Indonesia.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => 'https://www.instagram.com/',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => 'https://www.twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'typelanding' => 'foundation',
        ]);
        Contact::create([
            'address' => 'Komplek Tasbi 1 Blok C No. 43.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => 'https://www.instagram.com/barbekoe.pi/',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => 'https://www.twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'typelanding' => 'barbekoe',
        ]);
        Contact::create([
            'address' => 'Jl. Gagak Hitam No.25, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128, Indonesia.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => 'https://www.instagram.com/lunnizom.properti/',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => 'https://www.twitter.com/',
            'youtube' => 'https://www.youtube.com/',
            'typelanding' => 'indoproperti',
        ]);

        Section::create([
            'id' => 1,
            'typelanding' => 'main',
            'typesection' => 1,
            'title1' => 'Synergy for',
            'title2' => 'Better Future',
            'desc1' => 'Kami berkomitmen untuk selalu memberikan manfaat dan kebaikan di dalam seluruh aspek kehidupan di masyarakat, membentuk ekosistem di dalam bisnis group yang saling bersinergi hingga kehadiran kami dapat dirasakan manfaatnya, serta ikut berperan dalam mendorong pertumbuhan ekonomi di masyarakat untuk masa depan yang lebih baik.',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 2,
            'typelanding' => 'main',
            'typesection' => 2,
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 3,
            'typelanding' => 'main',
            'typesection' => 3,
            'title1' => 'Vision',
            'title2' => 'Mission',
            'desc1' => 'Membentuk ekosistem di dalam bisnis yang saling memberi manfaat dan bersinergi terhadap bisnis lainnya, mengedepankan teknologi agar bisnis berjalan lebih efektif dan efisien, serta ikut berperan dalam mendorong tumbuhnya perekonomian untuk masa depan yang lebih baik',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 5,
            'typelanding' => 'main',
            'typesection' => 4,
            'title1' => 'Aktivitas Terbaru',
            'desc1' => 'Selamat datang di aktivitas terbaru Lunnizom Group.\r\nKami menyajikan aktivitas terbaru meliputi seluruh lini bisnis sebagai langkah yang membawa Lunnizom Group lebih dekat dengan publik',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 6,
            'typelanding' => 'main',
            'typesection' => 5,
            'title1' => 'Partner Kami',
            'withlist' => 1,
        ]);

        // Kepul
        Section::create([
            'id' => 7,
            'typelanding' => 'kepul',
            'typesection' => 1,
            'title1' => 'Ubah sampah jadi berkah hanya di <span class="text-kepul-primary"> Kepul</span>',
            'subtitle1' => 'Aplikasi penjual sampah daur ulang nomor 1 di Kota Medan',
            'withlist' => 0,
            'image1' => 'section-images/BILdIWKED0S7JOS72KnlP5fdFQ3xJEHqk0Cy9RcB.png',
        ]);
        Section::create([
            'id' => 8,
            'typelanding' => 'kepul',
            'typesection' => 2,
            'title1' => 'Barang bekas menumpuk? <span class="text-kepul-primary"> Kepul</span>-in aja',
            'desc1' => 'Kepul merupakan sebuah inovasi dalam upaya optimalisasi jual beli sampah yang dapat didaur ulang. Aplikasi ini digunakan oleh masyarakat yang ingin menjual sampah kepada para pengepul, mereka yang bermata pencaharian dengan membeli sampah dari masyarakat untuk kemudian dijual kembali kepada pengepul besar, ataupun pabrik daur ulang sampah. Di kepul, masyarakat bisa menjual lebih dari 60 jenis sampah sampah organik dan non-organik.',
            'withlist' => 0,
            'image1' => 'section-images/GDpqXk5J5WczB7pjuk3yCYX5qaLvGPRirZPgusVv.png',
        ]);
        Section::create([
            'id' => 9,
            'typelanding' => 'kepul',
            'typesection' => 3,
            'title1' => 'Kenapa harus <span class="text-kepul-primary"> Kepul?</span>',
            'desc1' => 'Kepul merupakan sebuah inovasi dalam upaya optimalisasi jual beli sampah yang dapat didaur ulang. Aplikasi ini digunakan oleh masyarakat yang ingin menjual sampah kepada para pengepul, mereka yang bermata pencaharian dengan membeli sampah dari masyarakat untuk kemudian dijual kembali kepada pengepul besar, ataupun pabrik daur ulang sampah. Di kepul, masyarakat bisa menjual lebih dari 60 jenis sampah sampah organik dan non-organik.',
            'withlist' => 0,
            'image1' => 'section-images/PjGzbG4ALPdFzowoFjKM5MDxNI8rkwI8OIHK8p57.png',
        ]);
        Section::create([
            'id' => 10,
            'typelanding' => 'kepul',
            'typesection' => 4,
            'desc1' => 'Kepul merupakan sebuah inovasi dalam upaya optimalisasi jual beli sampah yang dapat didaur ulang. Aplikasi ini digunakan oleh masyarakat yang ingin menjual sampah kepada para pengepul, mereka yang bermata pencaharian dengan membeli sampah dari masyarakat untuk kemudian dijual kembali kepada pengepul besar, ataupun pabrik daur ulang sampah. Di kepul, masyarakat bisa menjual lebih dari 60 jenis sampah sampah organik dan non-organik.',
            'title1' => 'Program <br> <span class="text-kepul-primary"> Kepul?</span>',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 11,
            'typelanding' => 'kepul',
            'typesection' => 5,
            'title1' => 'Try for free',
            'desc1' => 'Kepul merupakan sebuah inovasi dalam upaya optimalisasi jual beli sampah yang dapat didaur ulang. Aplikasi ini digunakan oleh masyarakat yang ingin menjual sampah kepada para pengepul, mereka yang bermata pencaharian dengan membeli sampah dari masyarakat untuk kemudian dijual kembali kepada pengepul besar, ataupun pabrik daur ulang sampah. Di kepul, masyarakat bisa menjual lebih dari 60 jenis sampah sampah organik dan non-organik.',
            'withlist' => 0,
            'image1' => 'section-images/5iVnBcFF5hc3t5R0bi4gY9yRr4L4Rf2P8eZLpvym.png',
        ]);
        Section::create([
            'id' => 111,
            'typelanding' => 'legalin',
            'typesection' => 1,
            'title1' => 'Semua bisa',
            'title2' => 'di legalin.idn',
            'desc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubianostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 12,
            'typelanding' => 'legalin',
            'typesection' => 2,
            'title1' => 'About us',
            'title2' => 'Selamat datang di legalin.idn',
            'desc1' => 'Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora
torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo
efficitur neque. orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 13,
            'typelanding' => 'legalin',
            'typesection' => 3,
            'title1' => 'Service',
            'title2' => 'Bidang keahlian',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 14,
            'typelanding' => 'legalin',
            'typesection' => 4,
            'title1' => 'Our Team',
            'title2' => 'Temui Tim Kami',
            'desc1' => 'Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora
torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo
efficitur neque. orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.',
            'withlist' => 1,
            'image1' => 'listsection-images/e3BL04ub5eH1vTuYShWzNaqj7sPVSJlcJ4SrM11j.png',
        ]);
        Section::create([
            'id' => 15,
            'typelanding' => 'legalin',
            'typesection' => 5,
            'title1' => 'People Said',
            'title2' => 'Testimonial Client',
            'withlist' => 1,
        ]);

        Section::create([
            'id' => 26,
            'typelanding' => 'foundation',
            'typesection' => 1,
            'title1' => 'Memberi Manfaat',
            'title2' => 'Untuk Negeri',
            'desc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'subtitle1' => 'Save Children',
            'subtitle2' => 'Scholarship',
            'subtitle3' => 'Bedah Rumah',
            'subdesc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'subdesc2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'subdesc3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'withlist' => 0,
        ]);

        Section::create([
            'id' => 27,
            'typelanding' => 'foundation',
            'typesection' => 2,
            'title1' => 'OUR GOAL',
            'title2' => 'FOR INDONESIA',
            'withlist' => 1,
        ]);

        Section::create([
            'id' => 28,
            'typelanding' => 'foundation',
            'typesection' => 3,
            'title1' => 'OUR PURPOSE',
            'desc1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum molestias possimus, sapiente aspernatur officia cupiditate vel illum? Est modi sint sed nostrum tempora cupiditate unde? Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum molestias possimus, sapiente aspernatur officia cupiditate vel illum? Est modi sint sed nostrum tempora cupiditate unde?',
            'withlist' => 0,
        ]);

        Section::create([
            'id' => 29,
            'typelanding' => 'foundation',
            'typesection' => 4,
            'title1' => 'OUR GOAL',
            'title2' => 'FOR INDONESIA',
            'desc1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum molestias possimus, sapiente aspernatur officia cupiditate vel illum? Est modi sint sed nostrum tempora cupiditate unde? Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum molestias possimus',
            'withlist' => 1,
        ]);

        Section::create([
            'id' => 30,
            'typelanding' => 'foundation',
            'typesection' => 5,
            'title1' => 'Our Goal For Indonesia',
            'subtitle1' => 'Join Us To Make Better Future',
            'desc1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum molestias possimus, sapiente aspernatur officia cupiditate vel illum? Est modi sint sed nostrum tempora cupiditate unde? Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum molestias possimus',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 31,
            'typelanding' => 'foundation',
            'typesection' => 6,
            'title1' => 'RECENTLY',
            'subtitle1' => 'ADD',
            'withlist' => 1,
        ]);


        Section::create([
            'id' => 33,
            'typelanding' => 'barbekoe',
            'typesection' => 1,
            'title2' => 'Our Story',
            'desc1' => 'Bukankah Rezeki Tidak Pernah Salah Alamat ?',
            'desc2' => 'Forming an ecosystem within a  business that provides mutual benefits and synergies with other bussineses, promotes technology so that business run more effectively and efficiently, and play a role in encouraging economic growth for a better future.',
            'image1' => 'section-images/howHs3B9eDVgKa8lpydO9PLJaQ4QbPAL9p2zhSho.png',
            'image2' => 'section-images/Igt2n69awaM5NuOds5qNhxFIvksyGgprnTz6QmE9.png',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 34,
            'typelanding' => 'barbekoe',
            'typesection' => 2,
            'title1' => 'OUR',
            'title2' => 'SIGNATURE',
            'subtitle1' => 'CUAN',
            'subtitle2' => 'SERIES',
            'desc1' => 'Forming an ecosystem within a  business that provides mutual benefits and synergies with other bussineses, promotes technology so that business run more effectively and efficiently, and play a role in encouraging economic growth for a better future.',
            'subdesc1' => 'Forming an ecosystem within a  business that provides mutual benefits and synergies with other bussineses.',
            'withlist' => 1,
        ]);

        Section::create([
            'id' => 35,
            'typelanding' => 'barbekoe',
            'typesection' => 3,
            'title1' => 'LATEST PROMO',
            'desc1' => 'ONLY ON',
            'withlist' => 1,
        ]);

        Section::create([
            'id' => 36,
            'typelanding' => 'barbekoe',
            'typesection' => 4,
            'title1' => 'MEET',
            'title2' => 'OUR TEAM',
            'desc1' => 'Forming an ecosystem within a  business that provides mutual benefits and synergies with other bussineses, promotes technology so that business run more effectively and efficiently, and play a role in encouraging economic growth for a better future.',
            'withlist' => 1,
        ]);

        Section::create([
            'id' => 37,
            'typelanding' => 'barbekoe',
            'typesection' => 5,
            'title1' => 'WHAT PEOPLE SAID',
            'title2' => 'ABOUT US',
            'desc1' => 'Forming an ecosystem within a  business that provides mutual benefits and synergies with other bussineses.',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 38,
            'typelanding' => 'barbekoe',
            'typesection' => 6,
            'title1' => 'HOW TO GET HERE',
            'desc1' => 'Forming an ecosystem within a  business that provides mutual benefits and synergies with other bussineses,',
            'image1' => 'section-images/03z4757tcCjvZOGTl98rE6pDMfZzAJTWWnmr0U1V.png',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 39,
            'typelanding' => 'barbekoe',
            'typesection' => 7,
            'title1' => 'OUR PARTNER',
            'withlist' => 1,
        ]);


        Section::create([
            'id' => 21,
            'typelanding' => 'indomarket',
            'typesection' => 1,
            'image1' => 'section-images/gpI8qF9Sp8Ek3bZ36p0j9yPa0nQV64qiUxQqvbE9.jpg',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 22,
            'typelanding' => 'indomarket',
            'typesection' => 2,
            'title1' => 'Shop by',
            'title2' => 'Category',
            'desc1' => 'Lorem ipsum Dolus it',
            'image1' => 'section-images/jxZnfuyuRWpzcV3ncT8Y3EWaTF7iOQEOnKVwX4l4.jpg',
            'image1' => 'section-images/dHK3QDN5PQlLyr2fMIrkfC2Rekqzvc5gqtYrEoMO.jpg',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 23,
            'typelanding' => 'indomarket',
            'typesection' => 3,
            'title1' => 'Deals of',
            'title2' => 'the Day',
            'desc1' => 'Lorem Ipsum Dolores itt',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 24,
            'typelanding' => 'indomarket',
            'typesection' => 4,
            'title1' => 'Featured',
            'title2' => 'Product',
            'desc1' => 'Lorem Ipsum Dolores itt',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 25,
            'typelanding' => 'indomarket',
            'typesection' => 5,
            'title1' => 'Live',
            'title2' => 'Healthy',
            'desc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 16,
            'typelanding' => 'saramoda',
            'typesection' => 1,
            'title1' => 'WELCOME TO SARAMODA',
            'image1' => 'section-images/qKRdM69LohFJYBqLc4ACuEkMPJlsQzIZuYygiTor.png',
            'image2' => 'section-images/WNq4NPhrxOnSD02gluXqM8pES0n6YnaVjuzDQz05.jpg',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 17,
            'typelanding' => 'saramoda',
            'typesection' => 2,
            'title1' => 'SARAMODA',
            'image1' => 'section-images/3vfGWt3es9PMWMmqwpDoyUWUczyGvToTUD2IzBAN.jpg',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 18,
            'typelanding' => 'saramoda',
            'typesection' => 3,
            'title1' => 'FOR YOUR',
            'title2' => 'ESSENTIAL',
            'subtitle1' => 'FOR YOUR',
            'subtitle2' => 'ESSENTIAL STYLE',
            'subdesc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
            'image1' => 'section-images/KhM9wFZV9CwV1BZENADKx6iVeE2lCF4HmAj77Pv3.png',
            'image2' => 'section-images/7eGHdGahKR87WsR4xWR8DjFuY1wkTMeFN42UMSQe.png',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 19,
            'typelanding' => 'saramoda',
            'typesection' => 4,
            'title1' => 'Essential',
            'title2' => 'Essential',
            'title3' => 'Essential',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 20,
            'typelanding' => 'saramoda',
            'typesection' => 5,
            'title1' => 'SUMMER',
            'title2' => 'COLLECTION',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 201,
            'typelanding' => 'saramoda',
            'typesection' => 6,
            'image1' => 'section-images/I9E9DqnNRLVKl7olkGkM5rgIcv9UCzJ0WgEjQldz.jpg',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 42,
            'typelanding' => 'indoproperti',
            'typesection' => 1,
            'title1' => 'BETTER PLACE',
            'title2' => 'BETTER FUTURE',
            'image1' => 'section-images/mOtjoGTvEfxUkNTKU8U1vQNGcrmnDsRrDA2Om9Ws.png',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 43,
            'typelanding' => 'indoproperti',
            'typesection' => 2,
            'title1' => 'Find Your Comfort',
            'title2' => 'House',
            'image1' => 'section-images/wq9KHPUFa40KnOl8TU40nTMgFFoFSCUXURkdv0jE.png',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 44,
            'typelanding' => 'indoproperti',
            'typesection' => 3,

            'withlist' => 1,
        ]);
        Section::create([
            'id' => 45,
            'typelanding' => 'indoproperti',
            'typesection' => 4,
            'title1' => 'Our Value',
            'title2' => 'Value We Give to You',
            'image1' => 'section-images/RZhw7a7NS1SwiUKNi79pjeb74vW4Nh9umlSHnX73.jpg',
            'withlist' => 1,
        ]);
        Section::create([
            'id' => 46,
            'typelanding' => 'indoproperti',
            'typesection' => 5,
            'title1' => 'Meet Our Team',
            'desc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti',
            'subtitle1' => 'Find Your Comfort House',
            'subdesc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti',
            'image1' => 'section-images/qEdgy2zUGGc48j6UPatB3cM3f20kqCL2d7FEvHaM.jpg',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 47,
            'typelanding' => 'indoproperti',
            'typesection' => 6,
            'title1' => 'Jl. Gagak Hitam',
            'title2' => 'No.25',
            'subtitle1' => 'Location',
            'subtitle2' => 'Location',
            'subtitle3' => 'Location',
            'subdesc1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'subdesc2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'subdesc3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'image1' => 'section-images/Ncel4v0qsFeiwr14MICvWz5VJNI9IMcp2eQJGwUK.png',
            'withlist' => 0,
        ]);
        Section::create([
            'id' => 48,
            'typelanding' => 'indoproperti',
            'typesection' => 7,
            'title1' => 'Latest',
            'title2' => 'From Lunnizom Indo Properti',
            'withlist' => 1,
        ]);

        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 13,
            'title' => 'Hukum Pidana',
            'slug' => 'hukum-pidana',
            'image' => 'listsection-images/t1PGYcvuWBPM9cm9ZqEYjAKrNz6vx1fxJiBDRyeB.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 13,
            'title' => 'Hukum Perdata',
            'slug' => 'hukum-perdata',
            'image' => 'listsection-images/t1PGYcvuWBPM9cm9ZqEYjAKrNz6vx1fxJiBDRyeB.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 13,
            'title' => 'PK Pengadilan',
            'slug' => 'pk-pengadilan',
            'image' => 'listsection-images/t1PGYcvuWBPM9cm9ZqEYjAKrNz6vx1fxJiBDRyeB.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 13,
            'title' => 'Izin Perusahaan',
            'slug' => 'izin-perusahaan',
            'image' => 'listsection-images/t1PGYcvuWBPM9cm9ZqEYjAKrNz6vx1fxJiBDRyeB.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 13,
            'title' => 'Sertifikat',
            'slug' => 'sertifikat',
            'image' => 'listsection-images/t1PGYcvuWBPM9cm9ZqEYjAKrNz6vx1fxJiBDRyeB.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 13,
            'title' => 'Mediasi',
            'slug' => 'mediasi',
            'image' => 'listsection-images/t1PGYcvuWBPM9cm9ZqEYjAKrNz6vx1fxJiBDRyeB.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 13,
            'title' => 'Hukum Agana',
            'slug' => 'hukum-agama',
            'image' => 'listsection-images/t1PGYcvuWBPM9cm9ZqEYjAKrNz6vx1fxJiBDRyeB.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 13,
            'title' => 'Hukum Bantuan',
            'slug' => 'hukum-bantuan',
            'image' => 'listsection-images/t1PGYcvuWBPM9cm9ZqEYjAKrNz6vx1fxJiBDRyeB.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 15,
            'title' => 'Dartdroid Company',
            'slug' => 'dartdroidcomp',
            'image' => 'listsection-images/2MLoT9KHWylIGLNISuwMjSpDm1tuAKXfjcOMNF66.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 15,
            'title' => 'Usop',
            'slug' => 'usop',
            'image' => 'listsection-images/W3zzf5XupGRkCOOSdbyQ81vKq4MHfgHcI4k7E73G.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 15,
            'title' => 'Boby',
            'slug' => 'boby',
            'image' => 'listsection-images/DMO730jxhjnT28kWBuK9OUwTkkOqDlvTagcp7WYu.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);
        ListSection::create([
            'typelanding' => 'legalin',
            'id_section' => 15,
            'title' => 'Nikii',
            'slug' => 'nikii',
            'image' => 'listsection-images/gDXQMp33uUOYsbj6kzFae6fkquZ1dtSr35CRcxd3.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum,</p>',
        ]);

        // List Section Kepul
        ListSection::create([
            'typelanding' => 'kepul',
            'id_section' => 10,
            'title' => 'Pionir di kota Medan',
            'slug' => 'pionir-di-kota-medan',
            'image' => 'listsection-images/Xmi3iVhMu1vZHACbDyTeAbcRAW6Qx3eNBbW1CVv3.png',
            'excerpt' => '',
        ]);

        ListSection::create([
            'typelanding' => 'kepul',
            'id_section' => 10,
            'title' => 'Semua driver berasal dari pengepul sampah',
            'slug' => 'semua-driver-berasal-dari-pengepul-sampah',
            'image' => 'listsection-images/yyqAW6CZrxLl9fZ5MSbbczIj0fsNevWtRLfOlaLZ.png',
            'excerpt' => '',
        ]);

        ListSection::create([
            'typelanding' => 'kepul',
            'id_section' => 10,
            'title' => 'Menjual lebih dari 30 jenis sampah organik & unorganik',
            'slug' => 'menjual-lebih-dari-30-jenis-sampah-organik-&-unorganik',
            'image' => 'listsection-images/wyTB1OzHjHjRMitQc6vw59nrnJ8KHQUPaySwXR48.png',
            'excerpt' => '',
        ]);

        ListSection::create([
            'typelanding' => 'kepul',
            'id_section' => 10,
            'title' => 'Harga sampah lebih tinggi',
            'slug' => 'harga-sampah-lebih-tinggi',
            'image' => 'listsection-images/Bq2DXLRzPcwQ3TS0zr7ez15lA7vBQiXi5rdUfo4h.png',
            'excerpt' => '',
        ]);

        ListSection::create([
            'typelanding' => 'kepul',
            'id_section' => 10,
            'title' => 'Gratis penjemputan sampah',
            'slug' => 'gratis-penjemputan-sampah',
            'image' => 'listsection-images/PQXyGArNbwN1FAALrFYfyrGoHmMk5M1pZl7IGFAW.png',
            'excerpt' => '',
        ]);

        ListSection::create([
            'typelanding' => 'kepul',
            'id_section' => 10,
            'title' => 'Jual sampah lebih mudah & cepat',
            'slug' => 'jual-sampah-lebih-mudah-&-cepat',
            'image' => 'listsection-images/9vNyoGtU4rVIIj4nFX2RhlvuYGay6KrCNieODKcO.png',
            'excerpt' => '',
        ]);

        // End List Section

        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 3,
            'title' => 'mission1',
            'slug' => 'mission1',
            'image' => 'listsection-images\/7zaTbv9XKGksWlDhmAOlq1IlPtjnT499r0B63uro.png',
            'excerpt' => 'Sebagai infrastuktur yang memfasilitasi terjadinya interaksi antara seluruh lini bisnis grup dan mem...',
            'isi' => 'Sebagai infrastuktur yang memfasilitasi terjadinya interaksi antara seluruh lini bisnis grup dan memberikan modal sebagai penggerak ekosistem bisnis.',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 3,
            'title' => 'mission2',
            'slug' => 'mission2',
            'image' => 'listsection-images\/XeWdhrgae4rwTYLvYyADzhtJRMo5eW3worN9WGd7.png',
            'excerpt' => 'Membangun sumber daya manusia yang unggul, berkompeten dan berintegritas hingga selalu menghadirkan...',
            'isi' => 'Membangun sumber daya manusia yang unggul, berkompeten dan berintegritas hingga selalu menghadirkan inovasi.',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 3,
            'title' => 'mission3',
            'slug' => 'mission3',
            'image' => 'listsection-images\/Syc9FaLow5KthzIEXFdWZTMcTD6HUrAj7dFjYoMx.png',
            'excerpt' => 'Memberikan akses inklusif di dalam ekosistem kepada siapa saja yang dapat dan ingin berpartisipasi.',
            'isi' => 'Memberikan akses inklusif di dalam ekosistem kepada siapa saja yang dapat dan ingin berpartisipasi.',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 3,
            'title' => 'mission4',
            'slug' => 'mission4',
            'image' => 'listsection-images\/g2KOgsNAKUHv1PamAvqiQeWjwgqDhaqFogTjMQX5.png',
            'excerpt' => 'Membentuk tata kelola manajemen yang baik dan saling bersinergi untuk di setiap lini bisnis, hingga...',
            'isi' => 'Membentuk tata kelola manajemen yang baik dan saling bersinergi untuk di setiap lini bisnis, hingga memberikan hasil yang optimal',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 3,
            'title' => 'mission5',
            'slug' => 'mission5',
            'image' => 'listsection-images\/0k34oXv0r3uiGT9vkCcLuSRD12XV1k65Rdvo1lr8.png',
            'excerpt' => 'Menciptakan budaya kerja yang kaya akan kolaborasi, saling memberi manfaat dan berfokus kepada kebai...',
            'isi' => 'Menciptakan budaya kerja yang kaya akan kolaborasi, saling memberi manfaat dan berfokus kepada kebaikan untuk menuju tujuan bersama.',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 5,
            'title' => 'Latest Article',
            'slug' => 'latest-article',
            'image' => 'listsection-images\/3gk4ons4dJx0OcyLtdHOZWRxxg2XbHGPMylCsNye.png',
            'excerpt' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other...',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 5,
            'title' => 'Latest Article 2',
            'slug' => 'latest-article-2',
            'image' => 'listsection-images\/At26spJvY0umGnSnf27eeHpW5n2vrvmiUMoI5MW7.png',
            'excerpt' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other...',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 5,
            'title' => 'Latest Article 3',
            'slug' => 'latest-article-3',
            'image' => 'listsection-images\/C0QcrGR1lQyqrpIFjTgbadwAj7z9Qz585XIipdCv.png',
            'excerpt' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other...',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 5,
            'title' => 'Latest Article 4',
            'slug' => 'latest-article-4',
            'image' => 'listsection-images\/2UHbyxRKF063SsU6S2hQLezkqTuAxSMxZj8K9aYn.png',
            'excerpt' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other...',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 6,
            'title' => 'partner1',
            'slug' => 'partner1',
            'image' => 'listsection-images\/2UHbyxRKF063SsU6S2hQLezkqTuAxSMxZj8K9aYn.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 6,
            'title' => 'partner2',
            'slug' => 'partner2',
            'image' => 'listsection-images\/YzZ6XvcvDsqsiQWvsxAfp0ZZqE9s9qFpKUwBUYOq.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 6,
            'title' => 'partner3',
            'slug' => 'partner3',
            'image' => 'listsection-images\/ovipwjNFeBHz9cGnlbfk0wPTVyIMJ1K4CmLYkOjm.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 6,
            'title' => 'partner4',
            'slug' => 'partner4',
            'image' => 'listsection-images\/gqCMgk6IFmptgqzaBwbLRHiOFwdzI07W88XtHcrL.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 6,
            'title' => 'partner5',
            'slug' => 'partner5',
            'image' => 'listsection-images\/39SlbUc0hdRO88luXenYVlZ2QVp658lkXVbyxv6l.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '1',
            'slug' => '1',
            'image' => 'listsection-images\/vivbKapA66BT9DFgYdE2WoM5XW1nVV6GIVLhbMOa.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '2',
            'slug' => '2',
            'image' => 'listsection-images\/weDeLDbJ66EAGPl381kvTlG3YSv8bIWrHA7Ey2I1.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '3',
            'slug' => '3',
            'image' => 'listsection-images\/F2PjErfWbt1lA5TQtdC941R9glaUAyDenjUceEjT.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '4',
            'slug' => '4',
            'image' => 'listsection-images\/IafDSxk7VVEJDaNlay8tP3IwzzQYZ2biOIW5NHZK.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '5',
            'slug' => '5',
            'image' => 'listsection-images\/fzsX1bFH52Ry4JA6nKN1OHtpk44SyIe3CyPmkiNg.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '6',
            'slug' => '6',
            'image' => 'listsection-images\/pS2xrjMkiu43ElLYjVj0TqbpR03ynnqXPSgW7Ph1.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '7',
            'slug' => '7',
            'image' => 'listsection-images\/z6LoshVsgTCtwzgd5uDKZYdiaLRS9AUgb5MOJHTc.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '8',
            'slug' => '8',
            'image' => 'listsection-images\/GM4PYQVtdUtXpyIdtjxQQfhgAWcOUktWWFaw4PFP.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '9',
            'slug' => '9',
            'image' => 'listsection-images\/smZ8zRNCIuSyLwrlvVikgPv3lTVEMVdLGT32mndp.png',
        ]);
        ListSection::create([
            'typelanding' => 'main',
            'id_section' => 2,
            'title' => '10',
            'slug' => '10',
            'image' => 'listsection-images\/w2tMgDx4oUJCzAhKNCUEY9QoradqP3DmjjtWD68r.png',
        ]);

        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 27,
            'title' => 'Our Goal For Indonesia',
            'slug' => 'our-goal-for-indonesia',
            'image' => 'listsection-images/0gvuAuoRJp86tNShCOtAUS1inloY1FdsNNjeF5AR.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',

        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 27,
            'title' => 'Our Goal For Indonesia2',
            'slug' => 'our-goal-for-indonesia2',
            'image' => 'listsection-images/ChIh0nbiLWa2F30XjfbDPbg5FIYdjacRyCpvb7pq.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 27,
            'title' => 'Our Goal For Indonesia3',
            'slug' => 'our-goal-for-indonesia3',
            'image' => 'listsection-images/iWIaMnq9BbXotoUZWYAabIUhSyHUJINd5daDgkn4.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 27,
            'title' => 'Our Goal For Indonesia4',
            'slug' => 'our-goal-for-indonesia4',
            'image' => 'listsection-images/DGBwmhU4LIho617ZOdRXcM4I4fLj7Ql7k2EDIBHS.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 29,
            'title' => 'foundationmission1',
            'slug' => 'foundationmission1',
            'image' => 'listsection-images/dE5SwHLpl6DeENmnO8GpInHSPvrLvpC5pN0kWS18.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 29,
            'title' => 'foundationmission2',
            'slug' => 'foundationmission2',
            'image' => 'listsection-images/xHkvl13M7rLbAivM7P7ErrBP3ulZgyeA2xk8vGVX.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 29,
            'title' => 'foundationmission3',
            'slug' => 'foundationmission3',
            'image' => 'listsection-images/hf53vHxg8Y53mZXl70tSWYFLSbAjkRpTVswk3N5q.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 29,
            'title' => 'foundationmission4',
            'slug' => 'foundationmission4',
            'image' => 'listsection-images/PKsbB6TNrIwfi1wrxYZhpG63HIxn68gC1RVGeXYD.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);

        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 31,
            'title' => 'Our Goal For Indonesia21',
            'slug' => 'our-goal-for-indonesia21',
            'image' => 'listsection-images/1Hhy8052X573juwISKsH7PIKa4ojO1qh2E0H3fg7.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 31,
            'title' => 'Our Goal For Indonesia22',
            'slug' => 'our-goal-for-indonesia2',
            'image' => 'listsection-images/GVf8LlEyfYVgwtpke0GB24FatWr5xq8oonbZ0tlk.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 31,
            'title' => 'Our Goal For Indonesia23',
            'slug' => 'our-goal-for-indonesia23',
            'image' => 'listsection-images/nGV9vu1OM3iD4uhT9kXLzaq4GfsVO7AiSp1lHf9L.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 31,
            'title' => 'Our Goal For Indonesia24',
            'slug' => 'our-goal-for-indonesia4',
            'image' => 'listsection-images/d1c7SBdcxmdLgn5aM3dAc9anJIaz327YSxpThunx.png',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);
        ListSection::create([
            'typelanding' => 'foundation',
            'id_section' => 31,
            'title' => 'Our Goal For Indonesia25',
            'slug' => 'our-goal-for-indonesia25',
            'image' => 'listsection-images/xuq41FmXdcV1Bkxl2oqNyTEWNI7uwk20n1eKD9IG.jpg',
            'isi' => 'Forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses, forming an ecosystem within a &nbsp;business that provides mutual benefits and synergies with other bussineses',
            'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi sequi fugiat illo eum mole...',
        ]);


        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 34,
            'title' => 'CHICKEN',
            'subtitle' => 'CURRY KATSU',
            'slug' => 'chicken',
            'image' => 'listsection-images/SKQW5ar6gomzYsIiKWgjvLD4lAEHdCgGEfVzlljR.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 34,
            'title' => 'CHICKEN',
            'subtitle' => 'CORDONBLEU',
            'slug' => 'chicken2',
            'image' => 'listsection-images/KI7wmluddg7CjZdjRQc0UDdDEaXlqPkf7dE1xaQ7.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 34,
            'title' => 'BURGERKOE',
            'subtitle' => 'ORIGINAL BARBEKOE',
            'slug' => 'burgerkoe',
            'image' => 'listsection-images/pdgqRH9VRN0EjvCeSsGKVRycqz9q6BQme3kZXiwd.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 34,
            'title' => 'NASI GORENG',
            'subtitle' => 'DAGING SAPI',
            'slug' => 'nasigoreng',
            'image' => 'listsection-images/h9DTPV5WDf9tgddXNNpiTRS8UDhaDFFQpJiDJOe7.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 34,
            'title' => 'INDOMIE',
            'subtitle' => 'BARBEKOE',
            'slug' => 'indomiee',
            'image' => 'listsection-images/q7YjThXMgx1IMEFXIJBLAdSXJbD8uqjOepM1w0Bo.png',
        ]);

        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 35,
            'title' => 'promobarbekoe1',
            'slug' => 'promobarbekoe1',
            'image' => 'listsection-images/NnCULbEzWFOS44KijoQeyWXVBW8H7WOd8u3ijnYV.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 35,
            'title' => 'promobarbekoe2',
            'slug' => 'promobarbekoe2',
            'image' => 'listsection-images/U2MkXlJsEaMqVKP5Zm9pGAmrcwGwB8lhMiHOabbb.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 36,
            'title' => 'BADOK',
            'subtitle' => 'EXCEUTIVE MANAGER',
            'slug' => 'badok',
            'excerpt' => '@badokece',
            'isi' => '@badokece',
            'image' => 'listsection-images/ZZERM90ynXrqVghBGaXw0J37X0QrTBmbbvUPT7iX.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 36,
            'title' => 'DITA',
            'subtitle' => 'COOKER',
            'slug' => 'dita',
            'excerpt' => '@ditakece',
            'isi' => '@ditakece',
            'image' => 'listsection-images/BRO5YzaAbROo6XsrXMzZ9Tx2mxwfMYa0xwO8TE7H.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 36,
            'title' => 'KIKI',
            'subtitle' => 'HELPER',
            'slug' => 'kiki',
            'excerpt' => '@kikikece',
            'isi' => '@kikikece',
            'image' => 'listsection-images/6JiJzEzYR2v247FzJOpavvm3nB5qruUE5To8tEga.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 37,
            'title' => 'testi1',
            'slug' => 'testi1',
            'image' => 'listsection-images/0dbgzOUwr9CxGUborUWb4rCdPvyUVk6kCxH5Lh9i.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 37,
            'title' => 'testi2',
            'slug' => 'testi2',
            'image' => 'listsection-images/YrPhJiVnrSAwA6ghudY4LnY3xhEqWHQIS3hgooJW.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 37,
            'title' => 'testi3',
            'slug' => 'testi3',
            'image' => 'listsection-images/6y7TKSL8ylxljdLXQiXxFLJD2m9eolxS1X0wJ6uB.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 39,
            'title' => 'barbekoesponsor1',
            'slug' => 'barbekoesponsor1',
            'image' => 'listsection-images/7YqSz9lpucOBJ0GNlMb0Z55Cf0PUJX0N83msUKlC.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 39,
            'title' => 'barbekoesponsor2',
            'slug' => 'barbekoesponsor2',
            'image' => 'listsection-images/n8WSkQOxLRyMk5jeQRMKYLYYJlhqAFkROk6fGFI7.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 39,
            'title' => 'barbekoesponsor3',
            'slug' => 'barbekoesponsor3',
            'image' => 'listsection-images/JDiLmP0TRQdwMCUcOYeJQ22WzGBzPYmHvVQPfjyM.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 39,
            'title' => 'barbekoesponsor4',
            'slug' => 'barbekoesponsor4',
            'image' => 'listsection-images/LQn5gKvDP2FTFxaMBhOvvVTJwER7bBPKlTJRzG2N.png',
        ]);
        ListSection::create([
            'typelanding' => 'barbekoe',
            'id_section' => 39,
            'title' => 'barbekoesponsor5',
            'slug' => 'barbekoesponsor5',
            'image' => 'listsection-images/6x0dtpFm4jRNPICmpEDyzp2dtIlP3HwcDhylB9ax.png',
        ]);


        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 21,
            'title' => 'FREE DELIVERY',
            'subtitle' => 'Lorem Ipsum Dolores',
            'slug' => 'free-delivery',
            'image' => 'listsection-images/h65AUIiftPCRrzB4zbjAAY0Fb3n8SAa2hgcZx53w.png',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 21,
            'title' => 'SECURE PAYMENT',
            'subtitle' => 'Lorem Ipsum Dolores',
            'slug' => 'secure-payment',
            'image' => 'listsection-images/2J1EgJfUReI6mPbCvu6xS2zKrnnSPx96pvOIB8d3.png',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 21,
            'title' => 'REAL TIME SUPPORT',
            'subtitle' => 'Lorem Ipsum Dolores',
            'slug' => 'real-time-support',
            'image' => 'listsection-images/9ziMfvBuPtVbT8jarddqMaQ0u4eshAqYtH2vd1RG.png',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 21,
            'title' => '24 HOURS RETURN',
            'subtitle' => 'Lorem Ipsum Dolores itt',
            'slug' => '24-hours-return',
            'image' => 'listsection-images/opmf5qcvQdBDkoP8dwKdlRuFpqNKE31Y98Dk9XlJ.png',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 22,
            'title' => 'Vegetables',
            'slug' => 'vegetables',
            'image' => 'listsection-images/QegWR3oZNSODVXmpr3SbCdwfLUxAluto3lt0nfng.jpg',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 22,
            'title' => 'Snack',
            'slug' => 'snack',
            'image' => 'listsection-images/IvhuQ40GxZ4uc2XEiwC1SaBZTG4WekaBrmpzmDKI.png',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 22,
            'title' => 'Food & Groceries',
            'slug' => 'food-&-groceries',
            'image' => 'listsection-images/LjOAk5DD3xaWz4sKY8Hx73JlUZ2MPTGQ36D0Z7vq.png',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 22,
            'title' => 'Frozen Food',
            'slug' => 'frozen-food',
            'image' => 'listsection-images/tM1P0RdzPnYskBNpSvRyHZBZyMEcFUWHwvVZT66d.png',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 22,
            'title' => 'Utilities',
            'slug' => 'utilities',
            'image' => 'listsection-images/k68T4LO0fmHYQHX5SnWgoiGfR3MwzA071gIwbLMJ.png',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 23,
            'title' => 'Shop by Category',
            'slug' => 'shop-by-category',
            'image' => 'listsection-images/k6c4XDS6dOA6Vyd3uvC6RIhH5D8WAvBPreDrInUu.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p><p>&nbsp;</p><p>Rp<strong>100.000</strong></p>',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 23,
            'title' => 'Shop by Category',
            'slug' => 'shop-by-category2',
            'image' => 'listsection-images/Zuoft9VhlznegKEibxeshpuUDj1YI3L04gjIXwf0.png',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p><p>&nbsp;</p><p>Rp<strong>100.000</strong></p>',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 24,
            'title' => 'Nivea Cream',
            'slug' => 'nivea-cream',
            'image' => 'listsection-images/mYT97dTyhC14zxaRqM6nrAUP8mEimVicLX7KkBeP.png',
            'excerpt' => 'Rp100.000',
            'isi' => '<p><strong>Rp100.000</strong></p>',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 24,
            'title' => 'Elvive',
            'slug' => 'elvive',
            'image' => 'listsection-images/ayGYkfXMHi8YXdp0cm68z8pPGXxofaa5TtRlBmEr.png',
            'excerpt' => 'Rp100.000',
            'isi' => '<p><strong>Rp100.000</strong></p>',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 24,
            'title' => 'Bamd Aid',
            'slug' => 'band-aid',
            'image' => 'listsection-images/IMrlxP32kEE7vBfGaN2fsodsgeYId4OSA8XWhdSR.png',
            'excerpt' => 'Rp30.000',
            'isi' => '<p><strong>Rp30.000</strong></p>',
        ]);
        ListSection::create([
            'typelanding' => 'indomarket',
            'id_section' => 24,
            'title' => 'Clipsy Mix',
            'slug' => 'clipsy-mix',
            'image' => 'listsection-images/DKI47YyqOfb6aLL8qh8b5xSUknuPjJZU2cyqoQXM.png',
            'excerpt' => 'Rp50.000',
            'isi' => '<p><strong>Rp50.000</strong></p>',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 19,
            'title' => 'Esential',
            'subtitle' => 'Rp50.000',
            'slug' => 'esential',
            'image' => 'listsection-images/7Mt2MjrKRCYrj0LK47EmkUyllE3tS9YTsbDyuqdG.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio</p>',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 19,
            'title' => 'Esential',
            'subtitle' => 'Rp50.000',
            'slug' => 'esential2',
            'image' => 'listsection-images/g1AHWf4gH0MXJuxFKihc0DG9z2uYFXPcRjHw2b3K.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio</p>',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 19,
            'title' => 'Esential',
            'subtitle' => 'Rp70.000',
            'slug' => 'esential3',
            'image' => 'listsection-images/LEepoM4hOhjbWMHjI43KdUc191KtqZOe4nrn3CQl.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio</p>',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 19,
            'title' => 'Esential',
            'subtitle' => 'Rp10.000',
            'slug' => 'esential4',
            'image' => 'listsection-images/KTB9tvE7Mn42K0mNSD8ARXuQzfnwXJefwH61m1ju.jpg',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio</p>',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 19,
            'title' => 'summer1',
            'slug' => 'summer1',
            'image' => 'listsection-images/fBexaHaHDLKgh6a6dt5FvvbZeYAE44MH7jxTG6XI.jpg',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 19,
            'title' => 'summer2',
            'slug' => 'summer2',
            'image' => 'listsection-images/wIiOTxgPIWUCe0LmSjvhngetXd5JHYlR6wdonM86.jpg',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 19,
            'title' => 'summer3',
            'slug' => 'summer3',
            'image' => 'listsection-images/WTjeMblILOl2ACoySr13otv4DoYtMeKvss9LRtlF.jpg',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 201,
            'title' => 'botsaramoda1',
            'slug' => 'botsaramoda1',
            'image' => 'listsection-images/FJC4Xlh4uoobe1eG9SBPD03988L9rYLEOmmDa0TE.jpg',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 201,
            'title' => 'botsaramoda2',
            'slug' => 'botsaramoda2',
            'image' => 'listsection-images/dvANRPEd7pz82PQrMsFEmiq7YaxEwvGQ0dJpQhfP.jpg',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 201,
            'title' => 'botsaramoda3',
            'slug' => 'botsaramoda3',
            'image' => 'listsection-images/iDz4LYn8ecCE2JDT35OFyclPVckmyplMg1R7rNeE.jpg',
        ]);
        ListSection::create([
            'typelanding' => 'saramoda',
            'id_section' => 201,
            'title' => 'botsaramoda4',
            'slug' => 'botsaramoda4',
            'image' => 'listsection-images/eGkIc8JyoPlzL5clGDRvAATdmvkq89rvMexkT7C8.jpg',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 44,
            'title' => 'TIPE 36 Camelia',
            'subtitle' => 'We are here to help you',
            'slug' => 'tipe-36-camelia',
            'image' => 'listsection-images/Sqc6tWX0pC8SKhwM13yf4g8Xaygbkukh0x9wFODH.png',
            'excerpt' => '24,30 m2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit inte...',
            'isi' => '<p>24,30 m2</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti&nbsp;</p><figure class="image image-style-side"><img src="http://127.0.0.1:8000/media/Denah-Rumah-Minimalis-Berukuran-Mungi 1_1682266241.png"></figure><ul><li><strong>Kamar Tidur</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et</p><ol><li><strong>Ruang Tamu</strong></li></ol><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et</li></ul><p>&nbsp;</p><ul><li><strong>Dapur</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero etsss</p><ul><li>&nbsp;</li><li><strong>Kamar Mandi</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero etaaas</p><p>&nbsp;</p><ul><li><strong>Halaman</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero etaaas</p><p>&nbsp;</p><ul><li><strong>Carport</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero</p><p>&nbsp;</p><p>&nbsp;</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 44,
            'title' => 'TIPE 60 Angrek',
            'subtitle' => 'We are here to help you',
            'slug' => 'tipe-60-angrek',
            'image' => 'listsection-images/HllqKhVfME52fddxxhyBxvEFwsfQfkq5OiwIHBRn.png',
            'excerpt' => '24,30 m2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit inte...',
            'isi' => '<p>24,30 m2</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti&nbsp;</p><figure class="image image-style-side"><img src="http://127.0.0.1:8000/media/Denah-Rumah-Minimalis-Berukuran-Mungi 1_1682266241.png"></figure><ul><li><strong>Kamar Tidur</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et</p><ol><li><strong>Ruang Tamu</strong></li></ol><ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et</li></ul><p>&nbsp;</p><ul><li><strong>Dapur</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero etsss</p><ul><li>&nbsp;</li><li><strong>Kamar Mandi</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero etaaas</p><p>&nbsp;</p><ul><li><strong>Halaman</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero etaaas</p><p>&nbsp;</p><ul><li><strong>Carport</strong></li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero</p><p>&nbsp;</p><p>&nbsp;</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 45,
            'title' => 'Find Your Comfort House',
            'slug' => 'find-your-comfort-house',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti&nbsp;</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 45,
            'title' => 'Find Your Comfort House2',
            'slug' => 'find-your-comfort-house2',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti&nbsp;</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 45,
            'title' => 'Find Your Comfort House3',
            'slug' => 'find-your-comfort-house3',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti&nbsp;</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 45,
            'title' => 'Find Your Comfort House4',
            'slug' => 'find-your-comfort-house4',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti&nbsp;</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 45,
            'title' => 'Find Your Comfort House5',
            'slug' => 'find-your-comfort-house5',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac...',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti&nbsp;</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 43,
            'title' => 'indoproperti',
            'slug' => 'indoproperti',
            'image' => 'listsection-images/jtiDNza9Gg1JqqCXPsKslBKgO7siVTda4eCtxtUP.png',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 43,
            'title' => 'indoproperti2',
            'slug' => 'indoproperti2',
            'image' => 'listsection-images/63zEWYINqkTKw2Dzm7qSBoey1KCkZdW85ck9u2zt.png',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 43,
            'title' => 'indoproperti3',
            'slug' => 'indoproperti3',
            'image' => 'listsection-images/I88OBbxgUQfMBm50CCIcknMEoiYZ7epQpIbHKXH6.png',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 43,
            'title' => 'indoproperti4',
            'slug' => 'indoproperti4',
            'image' => 'listsection-images/ipy1jpW1aDKfNULx6xRpsVclqyLlqhh1C7jVGm2I.png',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 48,
            'title' => 'Lorem Ipsum',
            'subtitle' => 'Lorem Ipsum',
            'slug' => 'lorem-ipsum',
            'image' => 'listsection-images/HEv7YEpFzz1yTzyJTTE6jlF28a5cJLNs2sErzfMm.jpg',
            'excerpt' => 'Find YourComfor House We are here to help you',
            'isi' => '<p><strong>Find Your</strong><br><strong>Comfor House</strong></p><p>We are here to help you</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 48,
            'title' => 'Lorem Ipsum2',
            'subtitle' => 'Lorem Ipsum2',
            'slug' => 'lorem-ipsum2',
            'image' => 'listsection-images/rjr9yii78pN5TUOMAbNKTAo841WnhTJRiGmq9Alj.jpg',
            'excerpt' => 'Find YourComfor House We are here to help you',
            'isi' => '<p><strong>Find Your</strong><br><strong>Comfor House</strong></p><p>We are here to help you</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 48,
            'title' => 'Lorem Ipsum3',
            'subtitle' => 'Lorem Ipsum3',
            'slug' => 'lorem-ipsum3',
            'image' => 'listsection-images/BoF98kbINP6VaeANYivU5O0F928IafG9LxvD7Lp0.jpg',
            'excerpt' => 'Find YourComfor House We are here to help you',
            'isi' => '<p><strong>Find Your</strong><br><strong>Comfor House</strong></p><p>We are here to help you</p>',
        ]);
        ListSection::create([
            'typelanding' => 'indoproperti',
            'id_section' => 48,
            'title' => 'Lorem Ipsum4',
            'subtitle' => 'Lorem Ipsum4',
            'slug' => 'lorem-ipsum4',
            'image' => 'listsection-images/7xyAacWBjMPPwAeFeHOhT6vQXO8EX2L0rGPga7Cx.jpg',
            'excerpt' => 'Find YourComfor House We are here to help you',
            'isi' => '<p><strong>Find Your</strong><br><strong>Comfor House</strong></p><p>We are here to help you</p>',
        ]);
    }
}
