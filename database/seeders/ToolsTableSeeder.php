<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Tools;
use Carbon\Carbon;

/*
php artisan db:seed --class=ToolsTableSeeder
*/
class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tools::truncate();
        $tools = [
            [
                'title' => "FD Calculator",
                'description' => "The FD Calculator (Fixed Deposit Calculator) is a tool designed to calculate the maturity amount and interest earned on a fixed deposit investment. It uses compound interest principles to provide accurate results. Calculate fixed deposit interest easily and maturity value with Tool Hubspot FD Calculator. Plan your savings efficiently with accurate results.",
                'keywords' => "FD calculator, fixed deposit calculator, bank FD interest calculator, FD maturity amount, fixed deposit interest rate, FD investment calculator, FD interest calculator online, compound interest FD calculator, fixed deposit return calculator, calculate FD maturity value",
                'slug' => "fd-calculator",
                'icon' => "fas fa-piggy-bank",
                'image' => 'fd-calculator.png',
                'category' => 'Finance',
            ],
            [
                'title' => "SIP Calculator",
                'description' => "The SIP Calculator can help you determine the estimated value of the returns. Prospective investors can think that SIPs and mutual funds are the same. However, SIPs are merely a method of investing in mutual funds, the other method being a lump sum. A Systematic Investment Plan or SIP is a process of investing a fixed sum of money in mutual funds at regular intervals. SIPs usually allow you to invest weekly, quarterly, or monthly.",
                'keywords' => "SIP calculator, mutual fund SIP calculator, SIP return calculator, monthly SIP investment, SIP growth calculator, systematic investment plan calculator, SIP maturity calculator, SIP amount calculator, calculate SIP returns, SIP investment calculator online",
                'slug' => "sip-calculator",
                'icon' => "fas fa-hand-holding-water",
                'image' => 'sip-calculator.png',
                'category' => 'Finance',
            ],
            [
                'title' => "EMI Calculator",
                'description' => "Free EMI Calculator - The EMI (Equated Monthly Installment) is the fixed amount you pay every month to a bank or financial institution to repay a loan in full. This monthly payment includes both the interest on the loan and a portion of the principal amount. The total loan amount, along with the interest, is divided equally over the loan tenure, typically measured in months.",
                'keywords' => "EMI calculator, loan EMI calculator, home loan calculator, car loan EMI calculator, personal loan EMI, monthly loan payment calculator, interest rate EMI calculator, loan repayment schedule, loan amortization calculator, calculate EMI online",
                'slug' => "emi-calculator",
                'icon' => "fas fa-calculator",
                'image' => 'emi-calculator.png',
                'category' => 'Finance',
            ],
            [
                'title' => "Custom Invoice Generator",
                'description' => "Make Branded Invoices with one click! Trusted by millions of people! Create and download professional invoices in seconds with ToolHubSpot's Free Custom Invoice Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool offers a simple yet powerful way to design invoices that reflect your brand. You have full control over every field - add your logo, company details, customer information, items, taxes, and more. With a 100% customizable template and no sign-up required, you can generate invoices and download them in high-quality PDF format - completely free. Start invoicing smarter and faster with ToolHubSpot today!",
                'keywords' => "Invoice generator, free invoice maker, online invoice tool, invoice template, invoice creator, create invoice online, professional invoice tool, no sign up invoice maker, ToolHubSpot invoice",
                'slug' => "custom-invoice",
                'icon' => "fa-solid fa-file-pdf",
                'image' => 'custom-invoice.png',
                'category' => 'Finance',
            ],
            [
                'title' => "Generate Quote",
                'description' => "Make Branded Quotes with one click! Trusted by millions of people! Create and download professional quotes in seconds with ToolHubSpot's Free Custom Quotes Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool offers a simple yet powerful way to design quotes that reflect your brand. You have full control over every field - add your logo, company details, customer information, items, taxes, and more. With a 100% customizable template and no sign-up required, you can generate quotes and download them in high-quality PDF format - completely free. Start quotes smarter and faster with ToolHubSpot today!",
                'keywords' => "Quote generator, free quote maker, online quote tool, quote template, quote creator, create quote online, professional quote tool, no sign up quote maker, ToolHubSpot quote",
                'slug' => "generate-quote",
                'icon' => "fa-solid fa-file-pdf",
                'image' => 'generate-quote.png',
                'category' => 'Finance',
            ],
            [
                'title' => "Purchase Order",
                'description' => "Make Branded Purchase Orders with one click! Trusted by millions of people! Create and download professional purchase orders in seconds with ToolHubSpot's Free Custom Purchase Orders. Whether you're a freelancer, small business owner, or entrepreneur, our tool offers a simple yet powerful way to design orders that reflect your brand. You have full control over every field - add your logo, company details, customer information, items, taxes, and more. With a 100% customizable template and no sign-up required, you can generate orders and download them in high-quality PDF format - completely free. Start orders smarter and faster with ToolHubSpot today!",
                'keywords' => "customizable purchase order generator, free purchase order maker, online purchase order tool, purchase order template, purchase order creator, create purchase order online, professional purchase order tool, no sign up purchase order maker, ToolHubSpot purchase order",
                'slug' => "purchase-order",
                'icon' => "fa-solid fa-file-pdf",
                'image' => 'purchase-order.png',
                'category' => 'Finance',
            ],
            [
                'title' => "Digital Document",
                'description' => "Add an electronic signature to your PDF, Create Branded Digital Documents Instantly - Trusted by Millions! Design and download professional digital documents in seconds with ToolHubSpot's Free Custom Document Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool provides an easy and powerful way to create documents that reflect your brand identity.",
                'keywords' => "digital document creator, online document generator, free document maker, create invoice online, PDF document creator, online receipt maker, professional document template, generate certificate online, make digital document, online bill generator",
                'slug' => "digital-document",
                'icon' => "fa-solid fa-file",
                'image' => "digital-document.png",
                'category' => 'Finance',
            ],
            [
                'title' => "Words, characters, sentences, etc Counter",
                'description' => "Count words, characters, sentences, space and paragraphs instantly with our free Word Counter Tool. Perfect for author, writers, students, and professionals.",
                'keywords' => "word counter, character counter, sentence counter, paragraph counter, text analyzer, space counter, word count tool, character count, text statistics",
                'slug' => "word-counter",
                'icon' => "fa-solid fa-font",
                'image' => "word-counter.png",
                'category' => 'Finance',
            ],
            [
                'title' => "Merge Multiple Images Into One PDF",
                'description' => "The Combine Images Into One PDF tool makes it simple to convert multiple images into a single, shareable document. Instead of sending separate image files, you can merge them seamlessly into a compact PDF that's easy to view, print, or share across devices. With just a few clicks, your photos, scanned documents, or design files are organized in the exact order you want. This tool supports popular image formats like JPEG, PNG, JPG, GIF, SVG, WEBP, BMP, and TIFF, and allows uploads of up to 50MB per image. You can choose whether each image appears on a new page or side-by-side in a grid layout, giving you flexibility for personal, professional, or business use. Whether you're creating a photo album, submitting documents online, or preparing reports, the tool ensures your images are combined efficiently into a high-quality, ready-to-use PDF without requiring any software installation. Everything works directly in your browser, keeping the process quick and secure.",
                'keywords' => "merge images to pdf, combine images into one pdf, image to pdf converter, convert images to pdf online, join multiple images into pdf, jpg to pdf, png to pdf, free pdf tool, online image to pdf, photo to pdf maker",
                'slug' => "merge-images-to-pdf",
                'icon' => "fa-solid fa-file-pdf",
                'image' => "merge-images-to-pdf.png",
                'category' => 'Finance',
            ],
            [
                'title' => "Currency Converter",
                'description' => "Support for 160+ global currencies with real-time exchange rates. your fast, reliable, and easy-to-use tool for converting currencies from around the world. Whether you're a traveler, investor, online shopper, or finance professional, our tool helps you stay updated with the latest exchange rates for over 160 global currencies - in real time.",
                'keywords' => "currency converter, exchange rates, forex rates, USD to INR, EUR to USD, currency exchange, money converter, forex calculator",
                'slug' => "currency-converter",
                'icon' => "fas fa-exchange-alt",
                'image' => "currency-converter.png",
                'category' => 'Finance',
            ],
            [
                'title' => "Timezone Converter",
                'description' => "The timezone converter tool is powerful & accurate time management, the tool converts the datetime from one timezone to another time zone, which is designed to simplify time management across different regions. It’s one of the top productivity tools for frequent travelers, remote workers, and anyone scheduling online meetings or staying connected with friends and family abroad. Whether you’re navigating flight schedules or coordinating across time zones, this tool makes it easy and efficient.",
                'keywords' => "timezone converter, UTC to IST, IST to UTC, GMT to IST, EST to PST, time zone difference, time zone calculator, world clock converter, convert time zones, online time converter, global time converter, time zone conversion tool, convert UTC to local time, international time zones, time zone map",
                'slug' => "timezone",
                'icon' => "fas fa-clock",
                'image' => "timezone.png",
                'category' => 'Finance',
            ],
            [
                'title' => "Digital Signature",
                'description' => "Easily create your digital signature online in seconds! Our free Digital Signature tool lets you draw or type your signature and download it as a transparent PNG for use in documents, forms, emails, or contracts. No registration or software needed - perfect for professionals, freelancers, or anyone needing a quick and clean e-signature. Create your professional-looking digital signature now at ToolHubSpot. Add personality to your documents and emails with stylish, customizable options. No installation needed - design and download instantly!",
                'keywords' => "online signature, digital signature maker, e-signature creator, signature generator, free online signature tool, create digital signature, draw signature online, sign documents online, electronic signature maker, digital sign tool",
                'slug' => "signature",
                'icon' => "fa-solid fa-pen",
                'image' => "signature.png",
                'category' => 'Finance',
            ],
            [
                'title' => "Screen Recorder",
                'description' => "Easily record your screen with audio directly from your browser. Perfect for tutorials, presentations, meetings, and gameplay. No sign-up required, no watermarks - just hit record, save your video, and download instantly for FREE! The Screen Recorder is an easy-to-use, browser-based tool that lets you capture and share either a selected portion of your screen or the entire display. It’s perfect for presentations, tutorials, demonstrations, or any situation where you need to visually communicate information. With support for both microphone and system audio, you can record narration, background sound, or both. The built-in stop and preview features ensure you can review your recording before saving, making it simple to create professional-quality videos without installing any additional software.",
                'keywords' => "screen recorder, online screen recording, free screen recorder, record computer screen, browser screen recorder, video screen capture, screen recording software online, screen recorder with audio, capture screen online, record screen for free",
                'slug' => "screen-recording",
                'icon' => "fa-solid fa-desktop",
                'image' => "screen-recording.png",
                'category' => 'Finance',
            ],
            [
                'title' => "Color Picker",
                'description' => "Your Personal Color Lab. Pick any color with ease and get instant HEX and RGB codes. Includes live preview and recent color history for quick access. Free Online Advanced Color Picker Tool, Perfect for UI/UX Designers, Developers, and Artists, Zoomed Pixel View for Precision Picking, Built-In Palette Generator & History, Live Color Preview & Code Copy",
                'keywords' => "color picker, HTML color picker, RGB color picker, HEX color code picker, online color tool, color code generator, digital color selector, color palette picker, find color code, pick colors online",
                'slug' => "color-picker",
                'icon' => "fa-solid fa-palette",
                'image' => "color-picker.png",
                'category' => 'Finance',
            ],
            [
                'title' => "QR Code Generator",
                'description' => "Create customized QR codes instantly. Download as PNG or SVG. The QR Code Generator is a versatile online tool that allows users to create QR codes quickly and effortlessly. Whether you need a code for a website URL, text, business card, Wi-Fi network, location, or other purposes, this tool simplifies the process by providing instant generation with just a few clicks. Users can customize the design, color, and format, making it suitable for both personal and professional use. The generated QR codes are high-quality and downloadable in PNG or SVG formats, ensuring seamless integration across digital and print media. Beyond basic generation, the QR Code Generator enhances convenience by offering intuitive features like bulk creation, size adjustment, and error correction to ensure scannability in any environment. It's ideal for marketers, businesses, educators, and individuals who want to share information efficiently and securely. With no technical expertise required, anyone can produce professional-looking QR codes in seconds, saving time while improving engagement and accessibility.",
                'keywords' => "QR Code Generator, Free QR Code Generator, Online QR Code Maker, Custom QR Code, Create QR Code Online, Download QR Code, QR Code for URL, QR Code for WiFi, QR Code Generator Tool",
                'slug' => "qr-code-generator",
                'icon' => "fa-solid fa-qrcode",
                'image' => "qr-code-generator.png",
                'category' => 'Finance',
            ],
            [
                'title' => "Barcode Sticker Generator",
                'description' => "Create multiple barcode stickers instantly. Generate up to 50 barcodes at once and download as PDF. Create professional barcode stickers for inventory, retail, or labeling purposes. Generate up to 50 barcodes at once with customizable sizes and formats. Download as PDF for easy printing on sticker sheets. Easily create professional barcode stickers for all your business needs, including inventory tracking, retail product labeling, and warehouse management. With flexible customization options, you can generate up to 50 barcodes at once and select from popular formats like Code 128, Code 39, EAN-13, EAN-8, UPC, and UPC-E. Adjust sticker sizes, choose whether to display text, and fine-tune grid layouts to perfectly match your printing requirements. Once your barcodes are ready, download them instantly as a high-quality PDF for seamless printing on sticker sheets. This tool gives you complete control over width, height, text size, and layout, ensuring every label fits your business workflow. Whether you're a store owner, manufacturer, or logistics manager, this barcode generator saves time, improves accuracy, and makes labeling more efficient.",
                'keywords' => "online tools, free web tools, productivity tools, digital tools, time converter, timezone converter, EMI calculator, SIP calculator, FD calculator, online signature maker, screen recorder, color picker, document creator, ToolHubSpot",
                'slug' => "barcode-sticker-generator",
                'icon' => "fas fa-barcode",
                'image' => "barcode-sticker-generator.png",
                'category' => 'Finance',
            ],
        ];

        foreach ($tools as $index => $tool) {
            $tool['created_at'] = Carbon::now()->subDays(count($tools) - $index);
            $tool['updated_at'] = Carbon::now()->subDays(count($tools) - $index);
            DB::table('tools')->insert(
                $tool
            );
        }
    }
}
