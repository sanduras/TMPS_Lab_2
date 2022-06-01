<?php
declare (strict_types=1);
namespace StructuralPatterns\Adapter;
class XMLReport {
    public function buildXML() :string {
        return '<?xml version="1.0" encoding="UTF-8" ?>
        <root>
            <item>
                <id>1</id>
                <title>Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops</title>
                <price>109.95</price>
                <description>Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday</description>
                <category>mens clothing</category>
                <image>https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg</image>
            </item>
            <item>
                <id>2</id>
                <title>Mens Casual Premium Slim Fit T-Shirts </title>
                <price>22.3</price>
                <description>Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight &amp; soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.</description>
                <category>mens clothing</category>
                <image>https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg</image>
            </item>
            <item>
                <id>3</id>
                <title>Mens Cotton Jacket</title>
                <price>55.99</price>
                <description>great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.</description>
                <category>mens clothing</category>
                <image>https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg</image>
            </item>
            <item>
                <id>4</id>
                <title>Mens Casual Slim Fit</title>
                <price>15.99</price>
                <description>The color could be slightly different between on the screen and in practice. / Please note that body builds vary by person, therefore, detailed size information should be reviewed below on the product description.</description>
                <category>mens clothing</category>
                <image>https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg</image>
            </item>
            <item>
                <id>5</id>
                <title>John Hardy Womens Legends Naga Gold &amp; Silver Dragon Station Chain Bracelet</title>
                <price>695</price>
                <description>From our Legends Collection, the Naga was inspired by the mythical water dragon that protects the oceans pearl. Wear facing inward to be bestowed with love and abundance, or outward for protection.</description>
                <category>jewelery</category>
                <image>https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg</image>
            </item>
        </root>';
    }
}
?>