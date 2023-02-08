<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert([
            [
                'name' => 'Arugula',
                'desc' => 'Arugula leaves are otherwise known as ‘rocket’, and they are particularly popular in the Mediterranean and Middle-East. In fact, arugula is one of the tastiest foods on this vegetable list, and it adds a complex flavor to any dish.',
                'price' => '30000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/green-arugula-leaves.jpg'
            ],
            [
                'name' => 'Mushrooms',
                'desc' => 'Among this list of vegetables, mushrooms stand alone. Why? Because they are not technically a vegetable, a fruit, or any other kind of plant. They belong to a class of their own. However, since we commonly use mushrooms in the same way as vegetables, here they are. Mushrooms contain a vast range of phytonutrients, some of which are unique.',
                'price' => '20000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/healthy-champignon-mushrooms.jpg'
            ],
            [
                'name' => 'Bok Choy', 
                'desc' => 'Some people call it ‘Chinese cabbage’, but the proper translation is bok choy. Bok choy belongs to the cruciferous vegetable family, alongside others such as cabbage and brussels sprouts. It’s a tasty vegetable that features in a wide variety of Asian dishes, and it’s rich in nutrients too',
                'price' => '50000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/bok-choy-chinese-cabbage.jpg'
            ],
            [
                'name' => 'Broccoli Rabe',
                'desc' => 'A lesser-known vegetable is broccoli rabe (also called ‘rapini’). Despite containing the broccoli name and belonging to the same family of plants, they are two separate vegetables. Rapini has a strong, flavorful but slightly bitter taste, and it’s commonly found in the Mediterranean region’s cuisine.',
                'price' => '70000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/fresh-broccoli-rabe-rapini-leaves.jpg'
            ],
            [
                'name' => 'Watercress',
                'desc' => 'You wouldn’t guess so from looking at it, but watercress is one of the most nutritious vegetables out there. Watercress is native to Europe and Asia, and it grows in areas surrounding slow-moving water such as lakes and ponds. We can often find watercress in salads and soups, and the leaves add a lot of flavor.',
                'price' => '60000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/raw-organic-green-watercress-leaves.jpg'
            ],
            [
                'name' => 'Cabbage',
                'desc' => 'Cabbage is a large-headed green vegetable that has close botanical links to broccoli, cauliflower, and brussels sprouts. Cabbage belongs to the cruciferous category of vegetables and like others, it has links to similar anti-cancer health benefits.',
                'price' => '15000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/whole-green-cabbage-cut-into-pieces.jpg'
            ],
            [
                'name' => 'Carrots',
                'desc' => 'Carrots are a sweet-tasting, bright orange root vegetable. However, it is possible to find rarer cultivars of the vegetable that are red, yellow and even black. Carrots grow underground, and they are mainly known for their high vitamin A (in the form of beta-carotene) content. That said, it’s essential to eat them with a source of fat if you want to absorb this (fat-soluble) vitamin.',
                'price' => '25000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/several-fresh-carrots-with-intact-green-stems.jpg'
            ],
            [
                'name' => 'Celery',
                'desc' => 'Usually eaten in its raw state, celery is a popular salad vegetable with high water content. Notably, quite a lot of research shows that celery may have some interesting health properties too. According to one systematic review, the vegetable can have a positive impact on fertility.',
                'price' => '15000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/fresh-green-celery-stalks-ready-for-cooking-or-eating.jpg'
            ],
            [
                'name' => 'Collard Greens',
                'desc' => 'As their name may suggest, collard greens are a leafy green vegetable. This vegetable is popular throughout the world, and it is usually served either boiled, steamed, or in stews. Collard greens have a slightly bitter flavor, and they provide a wide range of nutrients.',
                'price' => '10000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/fresh-collard-green-leaves.jpg'
            ],
            [
                'name' => 'Eggplant',
                'desc' => 'While it goes by the name of eggplant in the US, the UK uses the French name of aubergine. This vegetable belongs to the nightshade family of plants, alongside others such as tomatoes, bell peppers, and tomatillos. It seems that with eggplant, people either love it or hate it – and the way of cooking probably has a lot to do with it. Boiled eggplant? Not so tasty.',
                'price' => '15000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/whole-and-sliced-eggplant-aubergine.jpg'
            ],
            [
                'name' => 'Garlic',
                'desc' => 'Garlic is one of those types of vegetables that confuses people; is it truly a vegetable? Or is it a herb? While some people refer to garlic as a herb, it is a type of bulb, and it is more accurate to call it a root vegetable. However, although roasted garlic tastes delicious, garlic is frequently used as a herb for flavoring.',
                'price' => '30000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/whole-garlic-with-skin-and-a-garlic-clove.jpg'
            ],
            [
                'name' => 'Kale',
                'desc' => 'Kale is a member of the cruciferous family of vegetables, and it shares some similarities to cabbage and broccoli. Personally, I’m not a huge fan of kale’s bitter taste. However, it has rapidly grown in popularity over the past several years as people find out about its health properties. In terms of nutrients, kale has a shout for being one of the healthiest vegetables out there.',
                'price' => '65000',
                'image_link' => 'https://www.nutritionadvance.com/wp-content/uploads/2018/01/curly-and-leafy-kale-green-vegetable.jpg'
            ],
        ]);
    }
}
