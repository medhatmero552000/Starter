<?php
namespace Database\Seeders;
use App\Models\Dashboard\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder  extends Seeder
{
    public function run(): void
    {
        // إعدادات غير مترجمة
        $settings = [
            'default_local'        => 'ar',
            'default_timezone'     => 'Africa/Cairo',
            'reviews_enable'       => true,
            'autoApproveReviews'   => true,
            'supported_currencies' => json_encode(['USD', 'LE', 'SAR']),
            'default_currency'     => 'USD',
            'store_email'          => 'admin@beam.com',
            'search_engine'        => 'mysql',
            'local_shipping_cost'  => 0,
            'outer_shipping_cost'  => 0,
            'free_shipping_cost'   => 0,
            'international_shipping_cost' => 0,
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['plain_value' => $value, 'updated_at' => now()]
            );
        }

        // إعدادات مترجمة
        $translations = [
            'store_name' => [
                'en' => 'Beam Store',
                'ar' => 'متجر شعاع',
            ],
            'free_shipping_label' => [
                'en' => 'Free shipping',
                'ar' => 'شحن مجاني',
            ],
            'local_shipping_label' => [
                'en' => 'Local shipping',
                'ar' => 'شحن محلي',
            ],
            'outer_shipping_label' => [
                'en' => 'Outer shipping',
                'ar' => 'شحن خارجي',
            ],
            'international_shipping_label' => [
                'en' => 'International shipping',
                'ar' => 'شحن دولي',
            ],
        ];

        foreach ($translations as $key => $locales) {
            $setting = Setting::updateOrCreate(['key' => $key]);

            foreach ($locales as $locale => $translatedValue) {
                $translation = $setting->translateOrNew($locale);
                $translation->value = $translatedValue;
                $translation->save();
            }
        }
    }
}
