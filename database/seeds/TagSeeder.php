<?php

use Illuminate\Database\Seeder;
use Lio\Tags\Tag;

class TagSeeder extends Seeder
{
    public function run()
    {
        if (Tag::count() == 0) {
            $this->createTags();
        }
    }

    private function createTags()
    {
        $commonTags = [
            'Ideas'                     => 'Ideas',
            'Entrepreneurship'          => 'Entrepreneurship',
            'Empowerment'               => 'Empowerment',
            'ProductConsultancy'        => 'ProductConsultancy',
            'ConsultancyAdvice'         => 'ConsultancyAdvice',
            'Freelancing'               => 'Freelancing',
            'Programming'               => 'Programming',
            'ProgrammingProblems'       => 'ProgrammingProblems',
            'C'                         => 'C',
            'CPlusPlus'                 => 'CPlusPlus',
            'Java'                      => 'Java',
            'PHP'                       => 'PHP',
            'Javascript'                => 'Javascript',
            'Python'                    => 'Python',
            'Ruby'                      => 'Ruby',
            'Android'                   => 'Android',
            'iOS'                       => 'iOS',
            'Firebase'                  => 'Firebase',
            'UIDesign'                  => 'UIDesign',
            'Kotlin'                    => 'Kotlin',
            'Ionic'                     => 'Ionic',
            'PhoneGap'                  => 'PhoneGap',
            'Xamarin'                   => 'Xamarin',
            'HTML5'                     => 'HTML5',
            'CSS3'                      => 'CSS3',
            'Laravel'                   => 'Laravel',
            'Nodejs'                    => 'Nodejs',
            'RubyonRails'               => 'RubyonRails',
            'Django'                    => 'Django',
            'Wordpress'                 => 'Wordpress',
            'Drupal'                    => 'Drupal',
            'RelationalDatabases'       => 'RelationalDatabases',
            'DistributedDatabases'      => 'DistributedDatabases',
            'ServerManagement'          => 'ServerManagement',
            'CPanel'                    => 'CPanel',
            'Linux'                     => 'Linux',
            'LAMPStack'                 => 'LAMPStack',
            'htaccess'                  => 'htaccess',
            'Azure'                     => 'Azure',
            'AWS'                       => 'AWS',
            'Git'                       => 'Git',
            'TaskAutomation'            => 'TaskAutomation',
            'Deployment'                => 'Deployment',
            'Security'                  => 'Security',
            'Marketing'                 => 'Marketing',
            'SEO'                       => 'SEO',
            'Blogging'                  => 'Blogging',
            'NicheBlogging'             => 'NicheBlogging',
            'Adwords'                   => 'Adwords',
            'ContentMarketing'          => 'ContentMarketing',
            'GraphicDesigning'          => 'GraphicDesigning',
        ];

        foreach ($commonTags as $name => $description) {
            Tag::create([
                'name' => $name,
                'slug' => $name,
                'description' => $description,
                'forum' => 1,
            ]);
        }
    }
}
