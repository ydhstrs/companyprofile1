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
            'name' => 'Yudha Triya',
            'email' => 'yudhatriya07@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        Banner::create([
            'image' => 'banner-images/bHsrAlFp3e6M3gDMx6FFrQ49NFG1UqRw4O0Nkhmx.png'
        ]);
        Bio::create([
            'text' => 'A Fast learner, Ambitious and Motivated, with working experience as a UI/UX Designer. Having Skilled in Wireframing, User Flow, Prototyping, Hands-On Design Research, and User Experience to ensure delivery solutions that are creatively useful and have a significant impact on users.'
        ]);

        Article::create([
            'title' => 'KAIA',
            'slug'  => 'kaia',
            'excerpt' => 'KAIKAIA is the final project I made in Apple Developer Academy with four other teammates. We finishe...',
            'image' => 'project-images/RZ0kMP1wa4tfmASbzEUANkAE1MkAuxn0rHy52nyK.png',
            'isi'   => "<div>KAIKAIA is the final project I made in Apple Developer Academy with four other teammates. We finished this project in 3 months. The objective of making KAIA is because we all feel
            the same problem: money management, all of my teammates are first job, and half of us can’t manage our money well, and we don’t know about money literacy because we never learn it in school. So we
            can see that it is a real problem, especially in Indonesia.<br><br><strong>The Problem<br></strong>Planning and controlling personal finance is an important thing to do. It helps you to manage good
            financial behavior and leads you to financial wellness. Planning and controlling your personal finance will also help ensure you meet your future goals and gives you the confidence to weather any
            bumps along the way. Planning and managing your finance activity that people can do are like budgeting, recording expenses, saving, and investing.<br>Research conducted by OCBC, collaborating with
            NielsenIQ, showed that 80% of Indonesian people (aged 25 - 35) had yet to record their expenses, and only 26% had an emergency fund. Based on this research, the motive behind this result is the
            phenomenon of a flexing lifestyle, where people spend their money on lifestyle to keep up with their friend, buying something they don't needs, and some of them are in debt to pay for it. 76% of
            the people live like that, and based on the same research, only 9% of Indonesian people invest in managing their money.<br>This phenomenon also happens because people still need more money literacy
            knowledge and a wasteful lifestyle. Many people need to pay more attention to the importance of saving and preparing emergency funds to build financial wellness, so they can still manage to buy
            their needs if something terrible happens and likely can make them poor.<br><strong><br>The User &amp; Audience<br></strong>As i mentioned above, our team wants to help adult people (aged 21-35)
            plan and control their income so they can prepare emergency funds and save. We want to help them realize the importance of managing their money so they can build their financial wellness.
            <br><br><strong>Role &amp; Responsibility<br>1. </strong>UX Researcher, Conducted research, did interviews to explore user behavior, made solution concepts, and wireframe.<br>2. UI Designer,
            Translated research results into designs, completed hi-fi designs, and conducted usability testing<br><br><strong>Scope &amp; Constraints<br></strong>I’m the only designer on this team, so I did
            all of the design processes, from made the design system, such as font and color, connecting all the prototype pages, and designed the primary logo. The list of the pages that I created was as
            follows:<br>Sign Up and Sign In Page<br>Connect Bank Account Page<br>Choose Budget Page<br>Budgeting Set by App and Manually Page<br>Add Budget Page<br>Transaction Page<br>Track Expenses Manually
            Page <br><br><strong>Process</strong><br>Our next plan is to dig deeper into financial wellness, managing, controlling, and planning money. We also want to understand people's habits in order to
            manage their money.</div>"
        ]);

        Contact::create([
            'address' => 'Jl. Gagak Hitam No.25, Sei Sikambing B, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20128, Indonesia.',
            'email' => 'lunnizom.indogroup@gmail.com',
            'instagram' => '#',
            'tiktok' => '#',
            'linkedin' => '#',
            'twitter' => '#',
            'youtube' => '#'

        ]);

        Section::create([
            'id' => 1,
            'typelanding' => 'main',
            'typesection' => 1,
            'title1' => 'Synergy for',
            'title2' => 'Better Future',
            'desc1' => 'Kami berkomitmen untuk selalu memberikan manfaat dan kebaikan di dalam seluruh aspek kehidupan di masyarakat, membentuk ekosistem di dalam bisnis group yang saling bersinergi hingga kehadiran kami dapat dirasakan manfaatnya, serta ikut berperan dalam mendorong pertumbuhan ekonomi di masyarakat untuk masa depan yang lebih baik.',
            'withlist' => 0

        ]);
        Section::create([
            'id' => 2,
            'typelanding' => 'main',
            'typesection' => 2,
            'withlist' => 1

        ]);
        Section::create([
            'id' => 3,
            'typelanding' => 'main',
            'typesection' => 3,
            'title1' => 'Vision',
            'title2' => 'Mission',
            'desc1' => 'Membentuk ekosistem di dalam bisnis yang saling memberi manfaat dan bersinergi terhadap bisnis lainnya, mengedepankan teknologi agar bisnis berjalan lebih efektif dan efisien, serta ikut berperan dalam mendorong tumbuhnya perekonomian untuk masa depan yang lebih baik',
            'withlist' => 1

        ]);
        Section::create([
            'id' => 5,
            'typelanding' => 'main',
            'typesection' => 4,
            'title1' => 'Aktivitas Terbaru',
            'desc1' => 'Selamat datang di aktivitas terbaru Lunnizom Group.\r\nKami menyajikan aktivitas terbaru meliputi seluruh lini bisnis sebagai langkah yang membawa Lunnizom Group lebih dekat dengan publik',
            'withlist' => 1

        ]);
        Section::create([
            'id' => 6,
            'typelanding' => 'main',
            'typesection' => 5,
            'title1' => 'Partner Kami',
            'withlist' => 1
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
            'withlist' => 1
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
    }
}
