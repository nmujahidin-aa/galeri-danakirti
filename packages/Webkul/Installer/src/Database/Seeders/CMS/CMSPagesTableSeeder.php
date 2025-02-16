<?php

namespace Webkul\Installer\Database\Seeders\CMS;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CMSPagesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('cms_pages')->delete();

        DB::table('cms_page_translations')->delete();

        $defaultLocale = $parameters['default_locale'] ?? config('app.locale');

        DB::table('cms_pages')->insert([
            [
                'id'         => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'id'         => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'id'         => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'id'         => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'id'         => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'id'         => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'id'         => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        $locales = $parameters['allowed_locales'] ?? [$defaultLocale];

        foreach ($locales as $locale) {
            DB::table('cms_page_translations')->insert([
                [
                    'locale'           => $locale,
                    'cms_page_id'      => 1,
                    'url_key'          => 'about-us',
                    'html_content'     => '<div class="static-container"><div class="mb-5">'.trans('installer::app.seeders.cms.pages.about-us.content', [], $locale).'</div></div>',
                    'page_title'       => trans('Tentang Kami', [], $locale),
                    'meta_title'       => 'Tentang Kami',
                    'meta_description' => '',
                    'meta_keywords'    => 'about, us',
                ], [
                    'locale'           => $locale,
                    'cms_page_id'      => 2,
                    'url_key'          => 'economic-course',
                    'html_content'     => '<div class="static-container"><div class="mb-5">'.trans('installer::app.seeders.cms.pages.economic-course.content', [], $locale).'</div></div>',
                    'page_title'       => trans('Pelatihan Ekonomi', [], $locale),
                    'meta_title'       => 'economic course',
                    'meta_description' => '',
                    'meta_keywords'    => 'economic, course',
                ], [
                    'locale'           => $locale,
                    'cms_page_id'      => 3,
                    'url_key'          => 'self-course',
                    'html_content'     => '<div class="static-container"><div class="mb-5">'.trans('installer::app.seeders.cms.pages.self-course.content', [], $locale).'</div></div>',
                    'page_title'       => trans('Pelatihan Pengembangan Diri', [], $locale),
                    'meta_title'       => 'Pelatihan Pengembangan Diri',
                    'meta_description' => '',
                    'meta_keywords'    => 'self, course',
                ], [
                    'locale'           => $locale,
                    'cms_page_id'      => 4,
                    'url_key'          => 'activity',
                    'html_content'     => '<div class="static-container"><div class="mb-5">'.trans('installer::app.seeders.cms.pages.activity.content', [], $locale).'</div></div>',
                    'page_title'       => trans('Kegiatan', [], $locale),
                    'meta_title'       => 'Kegiatan',
                    'meta_description' => '',
                    'meta_keywords'    => 'activity',
                ], [
                    'locale'           => $locale,
                    'cms_page_id'      => 5,
                    'url_key'          => 'news',
                    'html_content'     => '<div class="static-container"><div class="mb-5">'.trans('installer::app.seeders.cms.pages.news.content', [], $locale).'</div></div>',
                    'page_title'       => trans('Berita Terkini', [], $locale),
                    'meta_title'       => 'Berita Terkini',
                    'meta_description' => '',
                    'meta_keywords'    => 'news',
                ], [
                    'locale'           => $locale,
                    'cms_page_id'      => 6,
                    'url_key'          => 'faq',
                    'html_content'     => '<div class="static-container"><div class="mb-5">'.trans('installer::app.seeders.cms.pages.faq.content', [], $locale).'</div></div>',
                    'page_title'       => trans('FAQ', [], $locale),
                    'meta_title'       => 'FAQ',
                    'meta_description' => '',
                    'meta_keywords'    => 'tentang, about',
                ], [
                    'locale'           => $locale,
                    'cms_page_id'      => 7,
                    'url_key'          => 'contact-us',
                    'html_content'     => '<div class="static-container"><div class="mb-5">'.trans('installer::app.seeders.cms.pages.contact-us.content', [], $locale).'</div></div>',
                    'page_title'       => trans('Kontak Kami', [], $locale),
                    'meta_title'       => 'Kontak Kami',
                    'meta_description' => '',
                    'meta_keywords'    => 'kontak, kami',
                ],
            ]);
        }
    }
}
