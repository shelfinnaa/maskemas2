<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Trays',
                'description' => 'These packaging series use renewable resources from corn starch, currently available in trays and food boxes. The tray items are a popular choice in grocery stores, to replace plastic or foam containers used in packing fresh produce and meat or seafood. Apart from trays, the other items are takeaway boxes with or without partitions complete with fitted covers, preventing contamination and leakages.',
                'custom_message' => 'Hi There! I am interested in your eco-friendly trays. Can I get further information?',
                'images' => [
                    ['url' => 'Tray1.png'],
                    ['url' => 'Tray2.jpg'],
                ],
            ],
            [
                'name' => 'Ecokraft',
                'description' => 'The Ecokraft series are food grade brown kraft boxes, cups, bags and trays available in various sizes and shapes. This range is highly favoured as the eco-friendly food packaging since the base paper is from recycle material. The Ecokraft continue to focus on functionality and quality. Food taste and texture are well preserved since the paper material will not absorb any moisture nor succumb to leakages. They are the perfect choice for all kinds of takeouts, from snacks, bento, coffee drinks and other many more.',
                'custom_message' => 'Hi There! I am interested in your Ekocraft Series. Can I get further information?',
                'images' => [
                    ['url' => 'Ekokraft1.png'],
                    ['url' => 'Ekokraft2.jpg'],
                ],
            ],
            [
                'name' => 'Box Pails Ecokraft',
                'description' => 'The Ecokraft Pail series are food grade brown kraft box and food pails available in several sizes. This range is highly favoured as the eco-friendly food packaging since the base paper is from recycle material. The Ecokraft Pails also emphasize on functionality and quality. Food taste and texture are well preserved since the paper material will not absorb any moisture nor succumb to leakages. They are the perfect choice for all kinds of takeouts, from pasta and noodle to other popular milenial culinaries.',
                'custom_message' => 'Hi There! I am interested in your Box Pails Ekocraft Series. Can I get further information?',
                'images' => [
                    ['url' => 'BoxEcokraft1.png'],
                    ['url' => 'BoxEcokraft2.jpg'],
                ],
            ],
            [
                'name' => 'Single Wall Hot Cups',
                'description' => 'Our Single Wall Hot Cups are made from premium quality food grade boardpaper, designed for heat insulation to perfectly contain and serve all types of hot beverages. They are perfect for the rituals of modern day coffee and tea culture, and the best tool for superior brand presentation with attractive printing. View our full range from 4oz to 22oz, and find the matching sturdy Sipper Lids available under our Complementary items.',
                'custom_message' => 'Hi There! I am interested in your Single Wall Hot Cups Series. Can I get further information?',
                'images' => [
                    ['url' => 'SingleWallHotCups1.png'],
                    ['url' => 'SingleWallHotCups2.jpg'],
                ],
            ],
            [
                'name' => 'Double Wall Hot Cups',
                'description' => 'For maximum heat insulation, opt for our Double Wall Hot Cups with choices of Wavy or Insula configurations. Personalized them with your own prints for better brand visibility. Sizes are available from 6.5oz to 16oz for selective items. Fit them with matching sturdy Sipper Lids from our range of Complementaries.',
                'custom_message' => 'Hi There! I am interested in your Double Wall Hot Cups Series. Can I get further information?',
                'images' => [
                    ['url' => 'DoubleWallHotCups1.png'],
                    ['url' => 'DoubleWallHotCups2.jpg'],
                ],
            ],
            [
                'name' => 'Paper Bowl',
                'description' => 'The Soup Bowls and Soup Cups’ range is one of the most prominent items in our range for dine-in and takeaway. They fulfil your needs for safe and sound quality packaging, being just the perfect media to shout out your brands. Soup Bowls and Soup Cups are available in sizes 8oz to 33oz, along with their fitting Lids under Complementaries range.',
                'custom_message' => 'Hi There! I am interested in your Paper Bowl Series. Can I get further information?',
                'images' => [
                    ['url' => 'paperbowl1.png'],
                    ['url' => 'paperbowl2.png'],
                ],
            ],
            [
                'name' => 'Food Bags',
                'description' => 'We guarantee our  Food Bags are always made with prime and food grade quality. They are easy to load, convenient to carry, and will be the perfect tool for your branding with our quality printing. Food Bags are available in SOS or Satchel with variety of sizes. Check out our range, or send us an enquiry for more details.',
                'custom_message' => 'Hi There! I am interested in your Food Bags Series. Can I get further information?',
                'images' => [
                    ['url' => 'foodbags1.png'],
                ],
            ],
            [
                'name' => 'Complementaries',
                'description' => 'We provide a selection of Complementary items for your needs. The most sought after products are the Lids to fit a wide range and function of all items of our Paper Cups. Please also look at the disposable Drink Carriers and Cup Sleeves, or ask for the Coffee Stirrers, Plastic Cutlery, Drinking Straws and Napkins from our Sales Office.',
                'custom_message' => 'Hi There! I am interested in your Complementaries Items. Can I get further information?',
                'images' => [
                    ['url' => 'complementaries1.jpg'],
                    ['url' => 'complementaries2.jpg'],
                ],
            ],

        ];

        foreach ($products as $productData) {
            $product = Product::create([
                'name' => $productData['name'],
                'description' => $productData['description'],
                'custom_message' => $productData['custom_message'],
            ]);

            foreach ($productData['images'] as $imageData) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => 'uploads/products/' . $imageData['url'],
                ]);
            }
        }


        }
    }

