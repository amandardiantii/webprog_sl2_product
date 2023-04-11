<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $arrProduct = [
            [
                "name" => "COSRX Vitamin E Vitalizing Sunscreen",
                "slug" => "cosrx-vitamin-e-vitalizing-sunscreen",
                "ingredient" => "Water / Aqua / Eau, Propanediol, Butyloctyl salicylate, Diphenylsiloxy phenyl trimethicone, Dimethicone, VP/Eicosene copolymer, Silica, Trisiloxane, Cyclopentasiloxane, Trimethylsiloxysilicate, 1,2-Hexanediol, Behenyl alcohol, Glyceryl stearate, PEG-100 stearate, C14-22 alcohols, Cetyl alcohol, Potassium cetyl phosphate, Polyacrylate-13, Polyisobutene, Fragrance / Parfum, C12-20 Alkyl glucoside, Butylene glycol, Disodium EDTA, Ethylhexylglycerin, Polysorbate 20, Sorbitan isostearate, Dextrin, Theobroma cacao (cocoa) extract, Gossypium herbaceum (cotton) extract, Glucose, Tocopherol",
                "status" => "SSR",
                "price" => 270000
            ],
            [
                "name" => "AVIONE Secret of Jeju Sunscreen",
                "slug" => "avione-secret-of-jeju-sunscreen",
                "ingredient" => "Aqua, Butyl methoxydibenzoylmethane, Ethylhexyl methoxycinnamate, Niacinamide, Polyacrylate Crosspolymer-11, 1,3-Butylene Glycol, Octocrylene, Glycerin, Phenylbenzimidazole Sulfonic Acid, Trehalose, Opuntia Coccinellifera Fruit Extract, Silica, Phenoxyethanol, Biosaccharide Gum-1, Triethanolamine, Propanediol, Lecithin, Chlorphenesin, Triethylene Glycol, Methicone, 1,2-Hexanediol, Hydrolyzed Hyaluronic Acid, Artemisia capillaris flower extract.",
                "status" => "SR",
                "price" => 75000
            ],
            [
                "name" => "AZARINE Hydramax-C Sunscreen Serum",
                "slug" => "azarine-hydramax-c-sunscreen-serum",
                "ingredient" => "Aqua, Ethylhexyl Methoxycinnamate, Butyl Methoxydibenzoylmethane, Glycerin, Propanediol, Polymethyl Methacrylate, Octocrylene, Butylene Glycol, Ectoin, Ascorbic Acid, Hydroxypropyltrimonium Hyaluronate, Hyaluronic Acid, Acrylates Crosspolymer, Allantoin, Phenoxyethanol, Sodium Acetylated Hyaluronate, Hydrolyzed Hyaluronic Acid, Tocopheryl Acetate, Chlorphenesin, Potassium Hyaluronate, Sodium Hyaluronate Crosspolymer, Hydrolyzed Sodium Hyaluronate, Caprylyl 2-Glyceryl Ascorbate, Xanthan Gum, Sodium Hyaluronate.
                (Note: *Ingredients From Natural Resources)",
                "status" => "R",
                "price" => 60000
            ],
            [
                "name" => "BANANA BOAT Sport Ultra SPF50+ Sunscreen Lotion",
                "slug" => "banana-boat-sport-ultra-spf50-sunscreen-lotion",
                "ingredient" => "Aqua, Homosalate, Octocrylene, Ethythexyl Salicylate, Butyl Methoxydibenzoylmethane, Glyceryl Stearate, PEG-100 Stearate, Cetyl Alcohol, Cetyl Dimethicone, Propylene Gycol, Phenoxyethanol, Caprylyl Glycol, VP/Eicosene Copolymer, Acrylates/C 12-22 Alkyl Methacrylate Copolymer, Behenyl Alcohol, Sodium Polyacrylate, Chlorphenesin, Xanthan Gum, Disodium EDTA, Parfum, Tocopheryl Acetate, Aloe Barbadensis Leaf Juice, limonene, Linalool, Hydroxycitronellal.",
                "status" => "SSR",
                "price" => 152400
            ],
            [
                "name" => "JARTE BEAUTY Block It Out Sunscreen",
                "slug" => "jarte-beauty-block-it-out-sunscreen",
                "ingredient" => "Kakadu Plum, Centella Asiatica, Triple Hyaluronic Acid, Caffeine",
                "status" => "SR",
                "price" =>  128000
            ],
            [
                "name" => "THE YEON Vita Fresh Gel Sunscreen",
                "slug" => "the-yeon-vita-fresh-gel-sunscreen",
                "ingredient" => "Water, Zinc Oxide, Propanediol, Ethylhexyl Methoxycinnamate, C12-15 Alkyl Benzoate, Ethylhexyl Salicylate, Isoamyl p-Methoxycinnamate, Cyclopentasiloxane, Niacinamide(20,000Ppm), Dicaprylyl Carbonate, Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine, Cyclohexasiloxane, Cetearyl Alcohol, Butylene Glycol, Oleth-10, Polysorbate 60, Dimethicone, Phenoxyethanol, 1,2-Hexanediol, Triethoxycaprylylsilane, Xanthan Gum, Methyl Methacrylate Crosspolymer, Caprylyl Glycol, Fragrance, Limonene, Linalool, Phenyl Trimethicone, Citrus Nobilis (Mandarin Orange) Fruit Extract, Dimethicone Crosspolymer, Simethicone, Adenosine, Disodium EDTA, Illicium Verum (Anise) Fruit Extract, Diospyros Kaki Leaf Extract, Natto Gum, Citrus Paradisi (Grapefruit) Fruit Extract, Hydrolyzed Hyaluronic Acid, Salvia Hispanica Seed Extract, Polyacrylate-13, Polyisobutene, Citrus Limon (Lemon) Fruit Extract, Vaccinium Myrtillus Fruit/​Leaf Extract, Saccharum Officinarum (Sugarcane) Extract, Acer Saccharum (Sugar Maple) Extract, Citrus Aurantium Dulcis (Orange) Fruit Extract",
                "status" => "SSR",
                "price" => 256500
            ]
        ];

        return view('product', compact('arrProduct'));
    }

    public function detail($slug){
        $arrProduct = [
            [
                "name" => "COSRX Vitamin E Vitalizing Sunscreen",
                "slug" => "cosrx-vitamin-e-vitalizing-sunscreen",
                "ingredient" => "Water / Aqua / Eau, Propanediol, Butyloctyl salicylate, Diphenylsiloxy phenyl trimethicone, Dimethicone, VP/Eicosene copolymer, Silica, Trisiloxane, Cyclopentasiloxane, Trimethylsiloxysilicate, 1,2-Hexanediol, Behenyl alcohol, Glyceryl stearate, PEG-100 stearate, C14-22 alcohols, Cetyl alcohol, Potassium cetyl phosphate, Polyacrylate-13, Polyisobutene, Fragrance / Parfum, C12-20 Alkyl glucoside, Butylene glycol, Disodium EDTA, Ethylhexylglycerin, Polysorbate 20, Sorbitan isostearate, Dextrin, Theobroma cacao (cocoa) extract, Gossypium herbaceum (cotton) extract, Glucose, Tocopherol",
                "status" => "SSR",
                "price" => 270000
            ],
            [
                "name" => "AVIONE Secret of Jeju Sunscreen",
                "slug" => "avione-secret-of-jeju-sunscreen",
                "ingredient" => "Aqua, Butyl methoxydibenzoylmethane, Ethylhexyl methoxycinnamate, Niacinamide, Polyacrylate Crosspolymer-11, 1,3-Butylene Glycol, Octocrylene, Glycerin, Phenylbenzimidazole Sulfonic Acid, Trehalose, Opuntia Coccinellifera Fruit Extract, Silica, Phenoxyethanol, Biosaccharide Gum-1, Triethanolamine, Propanediol, Lecithin, Chlorphenesin, Triethylene Glycol, Methicone, 1,2-Hexanediol, Hydrolyzed Hyaluronic Acid, Artemisia capillaris flower extract.",
                "status" => "SR",
                "price" => 75000
            ],
            [
                "name" => "AZARINE Hydramax-C Sunscreen Serum",
                "slug" => "azarine-hydramax-c-sunscreen-serum",
                "ingredient" => "Aqua, Ethylhexyl Methoxycinnamate, Butyl Methoxydibenzoylmethane, Glycerin, Propanediol, Polymethyl Methacrylate, Octocrylene, Butylene Glycol, Ectoin, Ascorbic Acid, Hydroxypropyltrimonium Hyaluronate, Hyaluronic Acid, Acrylates Crosspolymer, Allantoin, Phenoxyethanol, Sodium Acetylated Hyaluronate, Hydrolyzed Hyaluronic Acid, Tocopheryl Acetate, Chlorphenesin, Potassium Hyaluronate, Sodium Hyaluronate Crosspolymer, Hydrolyzed Sodium Hyaluronate, Caprylyl 2-Glyceryl Ascorbate, Xanthan Gum, Sodium Hyaluronate.
                (Note: *Ingredients From Natural Resources)",
                "status" => "R",
                "price" => 60000
            ],
            [
                "name" => "BANANA BOAT Sport Ultra SPF50+ Sunscreen Lotion",
                "slug" => "banana-boat-sport-ultra-spf50-sunscreen-lotion",
                "ingredient" => "Aqua, Homosalate, Octocrylene, Ethythexyl Salicylate, Butyl Methoxydibenzoylmethane, Glyceryl Stearate, PEG-100 Stearate, Cetyl Alcohol, Cetyl Dimethicone, Propylene Gycol, Phenoxyethanol, Caprylyl Glycol, VP/Eicosene Copolymer, Acrylates/C 12-22 Alkyl Methacrylate Copolymer, Behenyl Alcohol, Sodium Polyacrylate, Chlorphenesin, Xanthan Gum, Disodium EDTA, Parfum, Tocopheryl Acetate, Aloe Barbadensis Leaf Juice, limonene, Linalool, Hydroxycitronellal.",
                "status" => "SSR",
                "price" => 152400
            ],
            [
                "name" => "JARTE BEAUTY Block It Out Sunscreen",
                "slug" => "jarte-beauty-block-it-out-sunscreen",
                "ingredient" => "Kakadu Plum, Centella Asiatica, Triple Hyaluronic Acid, Caffeine",
                "status" => "SR",
                "price" =>  128000
            ],
            [
                "name" => "THE YEON Vita Fresh Gel Sunscreen",
                "slug" => "the-yeon-vita-fresh-gel-sunscreen",
                "ingredient" => "Water, Zinc Oxide, Propanediol, Ethylhexyl Methoxycinnamate, C12-15 Alkyl Benzoate, Ethylhexyl Salicylate, Isoamyl p-Methoxycinnamate, Cyclopentasiloxane, Niacinamide(20,000Ppm), Dicaprylyl Carbonate, Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine, Cyclohexasiloxane, Cetearyl Alcohol, Butylene Glycol, Oleth-10, Polysorbate 60, Dimethicone, Phenoxyethanol, 1,2-Hexanediol, Triethoxycaprylylsilane, Xanthan Gum, Methyl Methacrylate Crosspolymer, Caprylyl Glycol, Fragrance, Limonene, Linalool, Phenyl Trimethicone, Citrus Nobilis (Mandarin Orange) Fruit Extract, Dimethicone Crosspolymer, Simethicone, Adenosine, Disodium EDTA, Illicium Verum (Anise) Fruit Extract, Diospyros Kaki Leaf Extract, Natto Gum, Citrus Paradisi (Grapefruit) Fruit Extract, Hydrolyzed Hyaluronic Acid, Salvia Hispanica Seed Extract, Polyacrylate-13, Polyisobutene, Citrus Limon (Lemon) Fruit Extract, Vaccinium Myrtillus Fruit/​Leaf Extract, Saccharum Officinarum (Sugarcane) Extract, Acer Saccharum (Sugar Maple) Extract, Citrus Aurantium Dulcis (Orange) Fruit Extract",
                "status" => "SSR",
                "price" => 256500
            ]
        ];
        $newdetail = [];
        foreach($arrProduct as $product){
            if($product["slug"] == $slug){
                $newdetail = $product;
            }
        }
        return view('detail', compact('newdetail'));
    }
}
