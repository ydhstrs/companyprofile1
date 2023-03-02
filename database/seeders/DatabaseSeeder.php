<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;
use App\Models\Bio;
use App\Models\Project;
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

        Project::create([
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
    }
}
